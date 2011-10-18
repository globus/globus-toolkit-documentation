#include <stdio.h>
#include <string.h>
#define __USE_XOPEN	/* Stops compiler warning on linux	*/
#include <time.h>
#include "globus_rls_client.h"
#include "version.h"

static globus_module_descriptor_t	*modules[] = {
  GLOBUS_COMMON_MODULE,
  GLOBUS_IO_MODULE,
  GLOBUS_RLS_CLIENT_MODULE,
};					      
#define NMODS	(sizeof(modules) / sizeof(globus_module_descriptor_t *))

typedef struct {
  char	*cmd;
  int	(*f)(char **argv);
  int	nargs;
  char	*usage;
} COMMAND;

static void			usage(char *prog);
static void			lrctests(globus_rls_handle_t *h);
static void			attrtests(globus_rls_handle_t *h);
static void			rlitests(globus_rls_handle_t *h);
static void			showbulkfailures(char *msg, globus_list_t *rl);
static void			fatal(globus_result_t r, char *fmt, ...);
static void			cleanexit(int s);
static globus_rls_handle_t	*h = NULL;
static char			*rlsserver;

int
main(int argc, char **argv)

{
  int			rc;
  globus_result_t	r;
  char			errmsg[MAXERRMSG];
  int			i;
  extern char		*optarg;
  extern int		optind;
  
  if (argc != 2)
    usage(*argv);

  for (i = 0; i < NMODS; i++)
    if ((rc = globus_module_activate(modules[i])) != GLOBUS_SUCCESS) {
      fprintf(stderr, "globus_module_activate(%d): %d\n", i, rc);
      exit(1);
    }

  while ((i = getopt(argc, argv, "v")) != -1)
    switch (i) {
      case 'v':	printf("Version: %d.%d\n", MAJOR, MINOR);
		  exit(1);
      case '?':	usage(*argv);
		break;
    }
  rlsserver = argv[optind];

  if ((r = globus_rls_client_connect("foo", &h)) == GLOBUS_SUCCESS)
    fatal(GLOBUS_SUCCESS, "BADURL: connect to foo succeeded");
  globus_rls_client_error_info(r, &rc, errmsg, MAXERRMSG, GLOBUS_FALSE);
  if (rc != GLOBUS_RLS_BADURL || strcmp(errmsg, "Bad URL: globus_url_parse(foo): Error code -3") != 0)
    fatal(GLOBUS_SUCCESS, "BADURL: Incorrect error %d or message %s", rc,
	  errmsg);

  printf("Connecting to %s\n", rlsserver);
  if ((r = globus_rls_client_connect(rlsserver, &h)) != GLOBUS_SUCCESS) {
    globus_rls_client_error_info(r, NULL, errmsg, MAXERRMSG, GLOBUS_FALSE);
    fprintf(stderr, "%s: %s\n", rlsserver, errmsg);
    cleanexit(1);
  }

  lrctests(h);
  attrtests(h);
  rlitests(h);

  printf("All tests completed successfully\n");
  cleanexit(0);
}

#define NUMLRCMAP	20

static void
lrctests(globus_rls_handle_t *h)

{
  globus_result_t		r;
  int				rc;
  char				errmsg[MAXERRMSG];
  int				i;
  char				lfn[100];
  char				pfn[100];
  globus_list_t			*l;
  globus_list_t			*p;
  globus_list_t			*rl;
  int				count;
  globus_rls_string2_t		*str2;
  globus_rls_string2_bulk_t	*str2bulk;
  int				found[NUMLRCMAP];

  printf("Clearing LRC database\n");
  if ((r = globus_rls_client_lrc_clear(h)) != GLOBUS_SUCCESS)
    fatal(r, "lrc_clear()");

  /* Create lfn,pfn mappings	*/
  printf("Creating lfn,pfn mapping in LRC\n");
  for (i = 0; i < NUMLRCMAP; i++) {
    sprintf(lfn, "lfn%d", i);
    sprintf(pfn, "pfn%d", i);
    if ((r = globus_rls_client_lrc_create(h, lfn, pfn)) != GLOBUS_SUCCESS)
      fatal(r, "lrc_create(%s,%s)", lfn, pfn);
  }

  /* Test exists() functions	*/
  if ((r = globus_rls_client_lrc_exists(h, "lfn0",
				globus_rls_obj_lrc_lfn)) != GLOBUS_SUCCESS)
    fatal(r, "lrc_exists(lfn0)");
  if ((r = globus_rls_client_lrc_mapping_exists(h, "lfn1",
				"pfn1")) != GLOBUS_SUCCESS)
    fatal(r, "lrc_mapping_exists(lfn1, pfn1)");

  /*
   * Create and delete a mapping.
   */
  if ((r = globus_rls_client_lrc_create(h, "tlfn", "tpfn")) != GLOBUS_SUCCESS)
    fatal(r, "lrc_create(%s,%s)", lfn, pfn);
  if ((r = globus_rls_client_lrc_delete(h, "tlfn", "tpfn")) != GLOBUS_SUCCESS)
    fatal(r, "lrc_delete(tlfn,tpfn)");

  /*
   * LRC lfn queries
   */

  printf("Testing LRC queries\n");
  /* Query lfn			*/
  if ((r = globus_rls_client_lrc_get_pfn(h, "lfn4", 0, 0,
					 &l)) != GLOBUS_SUCCESS)
      fatal(r, "lrc_get_pfn(lfn4)");
  for (p = l, count = 0; p; p = globus_list_rest(p), count++) {
    str2 = (globus_rls_string2_t *) globus_list_first(p);
    if (strcmp(str2->s1, "lfn4") != 0 || strcmp(str2->s2, "pfn4") != 0)
      fatal(GLOBUS_SUCCESS, "lrc_get_pfn(lfn4) returned %s", str2->s2);
  }
  if (count != 1)
    fatal(GLOBUS_SUCCESS,
	  "lrc_get_pfn(lfn4) returned %d results", count);
  globus_rls_client_free_list(l);

  /* Wildcard query of all lfns	*/
  for (i = 0; i < NUMLRCMAP; i++)
    found[i] = 0;
  if ((r = globus_rls_client_lrc_get_pfn_wc(h, "*", rls_pattern_unix, 0, 0,
					    &l)) != GLOBUS_SUCCESS)
      fatal(r, "lrc_get_pfn_wc(*)");
  for (p = l, count = 0; p; p = globus_list_rest(p), count++) {
    str2 = (globus_rls_string2_t *) globus_list_first(p);
    if (strncmp(str2->s1, "lfn", 3) != 0 || strncmp(str2->s2, "pfn", 3) != 0)
      fatal(GLOBUS_SUCCESS, "lrc_get_pfn_wc(*) returned %s,%s",
	    str2->s1, str2->s2);
    if (strcmp(&str2->s1[3], &str2->s2[3]) != 0)
      fatal(GLOBUS_SUCCESS, "lrc_get_pfn_wc(*) doesn't match %s,%s",
	    str2->s1, str2->s2);
    found[atoi(&str2->s1[3])]++;
  }
  if (count != NUMLRCMAP)
    fatal(GLOBUS_SUCCESS, "lrc_get_pfn_wc(*) returned %d results", count);
  for (i = 0; i < NUMLRCMAP; i++)
    if (!found[i])
      fatal(GLOBUS_SUCCESS, "lrc_get_pfn_wc(*) didn't return lfn%d", i);
  globus_rls_client_free_list(l);


  /*
   * LRC pfn queries
   */

  /* Query pfn			*/
  if ((r = globus_rls_client_lrc_get_lfn(h, "pfn3", 0, 0,
					 &l)) != GLOBUS_SUCCESS)
      fatal(r, "lrc_get_lfn(pfn3)");
  for (p = l, count = 0; p; p = globus_list_rest(p), count++) {
    str2 = (globus_rls_string2_t *) globus_list_first(p);
    if (strcmp(str2->s1, "lfn3") != 0 || strcmp(str2->s2, "pfn3") != 0)
      fatal(GLOBUS_SUCCESS, "lrc_get_lfn(pfn3) returned %s", str2->s2);
  }
  if (count != 1)
    fatal(GLOBUS_SUCCESS,
	  "lrc_get_lfn(pfn3) returned %d results", count);
  globus_rls_client_free_list(l);

  /* Wildcard query of all pfns	*/
  for (i = 0; i < NUMLRCMAP; i++)
    found[i] = 0;
  if ((r = globus_rls_client_lrc_get_lfn_wc(h, "*", rls_pattern_unix, 0, 0,
					    &l)) != GLOBUS_SUCCESS)
      fatal(r, "lrc_get_lfn_wc(*)");
  for (p = l, count = 0; p; p = globus_list_rest(p), count++) {
    str2 = (globus_rls_string2_t *) globus_list_first(p);
    if (strncmp(str2->s1, "lfn", 3) != 0 || strncmp(str2->s2, "pfn", 3) != 0)
      fatal(GLOBUS_SUCCESS, "lrc_get_lfn_wc(*) returned %s,%s",
	    str2->s1, str2->s2);
    if (strcmp(&str2->s1[3], &str2->s2[3]) != 0)
      fatal(GLOBUS_SUCCESS, "lrc_get_lfn_wc(*) doesn't match %s,%s",
	    str2->s1, str2->s2);
    found[atoi(&str2->s1[3])]++;
  }
  if (count != NUMLRCMAP)
    fatal(GLOBUS_SUCCESS, "lrc_get_lfn_wc(*) returned %d results", count);
  for (i = 0; i < NUMLRCMAP; i++)
    if (!found[i])
      fatal(GLOBUS_SUCCESS, "lrc_get_lfn_wc(*) didn't return pfn%d", i);
  globus_rls_client_free_list(l);

  /* Bulk update tests */
  printf("Testing bulk LRC updates\n");
  l = NULL;
  str2 = malloc(sizeof(globus_rls_string2_t));
  str2->s1 = "blfn1";
  str2->s2 = "bpfn1";
  globus_list_insert(&l, str2);
  str2 = malloc(sizeof(globus_rls_string2_t));
  str2->s1 = "blfn2";
  str2->s2 = "bpfn2";
  globus_list_insert(&l, str2);
  rl = NULL;
  r = globus_rls_client_lrc_create_bulk(h, l, &rl);
  if (r != GLOBUS_SUCCESS)
    fatal(r, "lrc_create_bulk");
  if (rl)
    showbulkfailures("lrc_create_bulk failed", rl);
  globus_list_free(l);

  l = NULL;
  str2 = malloc(sizeof(globus_rls_string2_t));
  str2->s1 = "blfn1";
  str2->s2 = "bpfn1.add";
  globus_list_insert(&l, str2);
  str2 = malloc(sizeof(globus_rls_string2_t));
  str2->s1 = "blfn2";
  str2->s2 = "bpfn2.add";
  globus_list_insert(&l, str2);
  rl = NULL;
  r = globus_rls_client_lrc_add_bulk(h, l, &rl);
  if (r != GLOBUS_SUCCESS)
    fatal(r, "lrc_add_bulk");
  if (rl)
    showbulkfailures("lrc_add_bulk failed", rl);
  globus_list_free(l);

  l = NULL;
  globus_list_insert(&l, "lfn5");
  globus_list_insert(&l, "lfnx");
  rl = NULL;
  r = globus_rls_client_lrc_get_pfn_bulk(h, l, &rl);
  if (r != GLOBUS_SUCCESS)
    fatal(r, "lrc_get_pfn_bulk");
  for (p = rl; p; p = globus_list_rest(p)) {
    str2bulk = (globus_rls_string2_bulk_t *) globus_list_first(p);
    if (str2bulk->rc == GLOBUS_SUCCESS) {
      if (strcmp(str2bulk->str2.s1, "lfn5") != 0 ||
	  strcmp(str2bulk->str2.s2, "pfn5") != 0)
	fatal(GLOBUS_SUCCESS, "lrc_get_pfn_bulk: Expected lfn5,pfn5 got %s,%s",
	      str2bulk->str2.s1, str2bulk->str2.s2);
    } else {
      if (str2bulk->rc != GLOBUS_RLS_LFN_NEXIST)
        fatal(GLOBUS_SUCCESS, "lrc_get_pfn_bulk: Expected error %d got %d",
	      GLOBUS_RLS_LFN_NEXIST, str2bulk->rc);
      if (strcmp(str2bulk->str2.s1, "lfnx") != 0)
	fatal(GLOBUS_SUCCESS, "lrc_get_pfn_bulk: Expected lfnx, got %s",
	      str2bulk->str2.s1);
    }
  }
  globus_list_free(l);
  globus_rls_client_free_list(rl);

  l = NULL;
  str2 = malloc(sizeof(globus_rls_string2_t));
  str2->s1 = "blfn1";
  str2->s2 = "bpfn1";
  globus_list_insert(&l, str2);
  str2 = malloc(sizeof(globus_rls_string2_t));
  str2->s1 = "blfn2";
  str2->s2 = "bpfn2";
  globus_list_insert(&l, str2);
  rl = NULL;
  r = globus_rls_client_lrc_delete_bulk(h, l, &rl);
  if (r != GLOBUS_SUCCESS)
    fatal(r, "lrc_delete_bulk");
  if (rl)
    showbulkfailures("lrc_delete_bulk failed", rl);
  globus_list_free(l);

  /* Error tests */
  r = globus_rls_client_lrc_get_lfn(NULL, "foo", 0, 0, &l);
  if (r == GLOBUS_SUCCESS)
    fatal(GLOBUS_SUCCESS, "lrc_get_lfn(bad handle): Returned success");
  globus_rls_client_error_info(r, &rc, errmsg, MAXERRMSG, GLOBUS_FALSE);
  if (rc != GLOBUS_RLS_INVHANDLE || strcmp(errmsg, "Invalid handle") != 0)
    fatal(GLOBUS_SUCCESS, "INVHANDLE: Incorrect error %d or message: %s", rc,
	  errmsg);

  r = globus_rls_client_lrc_get_lfn(h, "nosuchpfn", 0, 0, &l);
  if (r == GLOBUS_SUCCESS)
    fatal(GLOBUS_SUCCESS, "lrc_get_lfn(bad pfn): Returned success");
  globus_rls_client_error_info(r, &rc, errmsg, MAXERRMSG, GLOBUS_FALSE);
  if (rc != GLOBUS_RLS_PFN_NEXIST || strcmp(errmsg, "PFN doesn't exist: nosuchpfn") != 0)
    fatal(GLOBUS_SUCCESS, "PFN_NEXIST: Incorrect error %d or message: %s", rc,
	  errmsg);

  r = globus_rls_client_lrc_get_pfn(h, "nosuchlfn", 0, 0, &l);
  if (r == GLOBUS_SUCCESS)
    fatal(GLOBUS_SUCCESS, "lrc_get_pfn(bad lfn): Returned success");
  globus_rls_client_error_info(r, &rc, errmsg, MAXERRMSG, GLOBUS_FALSE);
  if (rc != GLOBUS_RLS_LFN_NEXIST || strcmp(errmsg, "LFN doesn't exist: nosuchlfn") != 0)
    fatal(GLOBUS_SUCCESS, "LFN_NEXIST: Incorrect error %d or message: %s", rc,
	  errmsg);

  r = globus_rls_client_lrc_get_pfn(h, NULL, 0, 0, &l);
  if (r == GLOBUS_SUCCESS)
    fatal(GLOBUS_SUCCESS, "lrc_get_pfn(NULL): Returned success");
  globus_rls_client_error_info(r, &rc, errmsg, MAXERRMSG, GLOBUS_FALSE);
  if (rc != GLOBUS_RLS_BADARG || strcmp(errmsg, "Bad argument: key is NULL") != 0)
    fatal(GLOBUS_SUCCESS, "BADARG: Incorrect error %d or message: %s", rc,
	  errmsg);

  r = globus_rls_client_lrc_delete(h, "lfn0", "pfn1");
  if (r == GLOBUS_SUCCESS)
    fatal(GLOBUS_SUCCESS, "lrc_delete(bad mapping): Returned success");
  globus_rls_client_error_info(r, &rc, errmsg, MAXERRMSG, GLOBUS_FALSE);
  if (rc != GLOBUS_RLS_MAPPING_NEXIST || strcmp(errmsg, "Mapping doesn't exist: lfn0,pfn1") != 0)
    fatal(GLOBUS_SUCCESS, "MAPPING_NEXIST: Incorrect error %d or message: %s",
	  rc, errmsg);

  r = globus_rls_client_lrc_create(h, "lfn0", "pfn1");
  if (r == GLOBUS_SUCCESS)
    fatal(GLOBUS_SUCCESS, "lrc_create(mapping exists): Returned success");
  globus_rls_client_error_info(r, &rc, errmsg, MAXERRMSG, GLOBUS_FALSE);
  if (rc != GLOBUS_RLS_LFN_EXIST || strcmp(errmsg, "LFN already exists: lfn0") != 0)
    fatal(GLOBUS_SUCCESS, "LFN_EXIST: Incorrect error %d or message: %s",
	  rc, errmsg);

  r = globus_rls_client_lrc_rli_add(h, "rls://badhost.baddom:11223", 0, NULL);
  if (r != GLOBUS_SUCCESS)
    fatal(r, "globus_rls_client_lrc_rli_add(rls://badhost.baddom:11223)");
  r = globus_rls_client_lrc_rli_add(h, "rls://badhost.baddom:11223", 0, NULL);
  if (r == GLOBUS_SUCCESS)
    fatal(GLOBUS_SUCCESS, "rli_add(badhost.baddom): returned success");
  globus_rls_client_error_info(r, &rc, errmsg, MAXERRMSG, GLOBUS_FALSE);
  if (rc != GLOBUS_RLS_RLI_EXIST || strcmp(errmsg, "RLI already exists: rls://badhost.baddom:11223") != 0)
    fatal(GLOBUS_SUCCESS, "RLI_EXIST: Incorrect error %d or message: %s",
	  rc, errmsg);

  r = globus_rls_client_lrc_rli_delete(h, "rls://badhost.baddom:11223", "foo");
  if (r == GLOBUS_SUCCESS)
    fatal(GLOBUS_SUCCESS, "rli_delete(badhost.baddom,foo): returned success");
  globus_rls_client_error_info(r, &rc, errmsg, MAXERRMSG, GLOBUS_FALSE);
  if (rc != GLOBUS_RLS_RLI_NEXIST || strcmp(errmsg, "RLI doesn't exist: rls://badhost.baddom:11223: foo") != 0)
    fatal(GLOBUS_SUCCESS, "RLI_NEXIST: Incorrect error %d or message: %s",
	  rc, errmsg);

  r = globus_rls_client_lrc_rli_delete(h, "rls://badhost.baddom:11223", NULL);
  if (r != GLOBUS_SUCCESS)
    fatal(r, "globus_rls_client_lrc_rli_delete(rls://badhost.baddom:11223)");
  r = globus_rls_client_lrc_rli_delete(h, "rls://badhost.baddom:11223", NULL);
  if (r == GLOBUS_SUCCESS)
    fatal(GLOBUS_SUCCESS, "rli_delete(badhost.baddom): returned success");
  globus_rls_client_error_info(r, &rc, errmsg, MAXERRMSG, GLOBUS_FALSE);
  if (rc != GLOBUS_RLS_RLI_NEXIST || strcmp(errmsg, "RLI doesn't exist: rls://badhost.baddom:11223") != 0)
    fatal(GLOBUS_SUCCESS, "RLI_NEXIST: Incorrect error %d or message: %s",
	  rc, errmsg);

  if ((r = globus_rls_client_lrc_mapping_exists(h, "lfn2",
				"badpfn")) == GLOBUS_SUCCESS)
    fatal(GLOBUS_SUCCESS, "lrc_mapping_exists(lfn2,badpfn) returned success");
  globus_rls_client_error_info(r, &rc, errmsg, MAXERRMSG, GLOBUS_FALSE);
  if (rc != GLOBUS_RLS_MAPPING_NEXIST || strcmp(errmsg, "Mapping doesn't exist: lfn2,badpfn"))
    fatal(GLOBUS_SUCCESS, "MAPPING_NEXIST: Incorrect error %d or message: %s",
	  rc, errmsg);
}

static void
attrtests(globus_rls_handle_t *h)

{
  globus_result_t		r;
  int				rc;
  char				errmsg[MAXERRMSG];
  globus_rls_attribute_t	a;
  globus_rls_attribute_t	*ap;
  globus_rls_attribute_object_t	*aop;
  globus_list_t			*l;
  globus_list_t			*p;
  struct tm			t;
  time_t			ut;

  printf("Creating LRC attributes\n");
  /* Create attrs of each type	*/
  if ((r = globus_rls_client_lrc_attr_create(h, "dattr",
		globus_rls_obj_lrc_lfn,
	      	globus_rls_attr_type_date)) != GLOBUS_SUCCESS)
    fatal(r, "globus_rls_client_lrc_attr_create(dattr)");
  if ((r = globus_rls_client_lrc_attr_create(h, "fattr",
		globus_rls_obj_lrc_lfn,
	      	globus_rls_attr_type_flt)) != GLOBUS_SUCCESS)
    fatal(r, "globus_rls_client_lrc_attr_create(fattr)");
  if ((r = globus_rls_client_lrc_attr_create(h, "iattr",
		globus_rls_obj_lrc_lfn,
	      	globus_rls_attr_type_int)) != GLOBUS_SUCCESS)
    fatal(r, "globus_rls_client_lrc_attr_create(iattr)");
  if ((r = globus_rls_client_lrc_attr_create(h, "sattr",
		globus_rls_obj_lrc_lfn,
	      	globus_rls_attr_type_str)) != GLOBUS_SUCCESS)
    fatal(r, "globus_rls_client_lrc_attr_create(sattr)");

  printf("Testing LRC attribute queries\n");
  /* Verify dattr was created correctly	*/
  if ((r = globus_rls_client_lrc_attr_get(h, "dattr", globus_rls_obj_lrc_lfn,
		&l)) != GLOBUS_SUCCESS)
    fatal(r, "globus_rls_client_lrc_attr_get(dattr)");
  for (p = l; p; p = globus_list_rest(p)) {
    ap = (globus_rls_attribute_t *) globus_list_first(p);
    if (strcmp(ap->name, "dattr") != 0 ||
	ap->objtype != globus_rls_obj_lrc_lfn ||
	ap->type != globus_rls_attr_type_date)
      fatal(GLOBUS_SUCCESS,
	   "globus_rls_client_lrc_attr_get(dattr): bad name (%s), objtype (%d) or type (%d)", ap->name, ap->objtype, ap->type );
  }
  globus_rls_client_free_list(l);

  /* Add some attr values to lfn0	*/
  a.objtype = globus_rls_obj_lrc_lfn;
  a.name = "dattr";
  if ((r = globus_rls_client_s2attr(globus_rls_attr_type_date,
			"2001-01-01 12:00:01", &a)) != GLOBUS_SUCCESS)
    fatal(r, "globus_rls_client_s2attr(date)");
  if ((r = globus_rls_client_lrc_attr_add(h, "lfn0",
			&a)) != GLOBUS_SUCCESS)
    fatal(r, "globus_rls_client_lrc_attr_add(lfn0,date)");
  a.name = "fattr";
  if ((r = globus_rls_client_s2attr(globus_rls_attr_type_flt,
			"1.32", &a)) != GLOBUS_SUCCESS)
    fatal(r, "globus_rls_client_s2attr(flt)");
  if ((r = globus_rls_client_lrc_attr_add(h, "lfn0",
			&a)) != GLOBUS_SUCCESS)
    fatal(r, "globus_rls_client_lrc_attr_add(lfn0,flt)");
  a.name = "iattr";
  if ((r = globus_rls_client_s2attr(globus_rls_attr_type_int,
			"-411", &a)) != GLOBUS_SUCCESS)
    fatal(r, "globus_rls_client_s2attr(int)");
  if ((r = globus_rls_client_lrc_attr_add(h, "lfn0",
			&a)) != GLOBUS_SUCCESS)
    fatal(r, "globus_rls_client_lrc_attr_add(lfn0,int)");
  a.name = "iattr";
  if ((r = globus_rls_client_s2attr(globus_rls_attr_type_int,
			"26", &a)) != GLOBUS_SUCCESS)
    fatal(r, "globus_rls_client_s2attr(int)");
  if ((r = globus_rls_client_lrc_attr_add(h, "lfn1",
			&a)) != GLOBUS_SUCCESS)
    fatal(r, "globus_rls_client_lrc_attr_add(lfn0,int)");
  a.name = "sattr";
  if ((r = globus_rls_client_s2attr(globus_rls_attr_type_str,
			"hello, world", &a)) != GLOBUS_SUCCESS)
    fatal(r, "globus_rls_client_s2attr(str)");
  if ((r = globus_rls_client_lrc_attr_add(h, "lfn0",
			&a)) != GLOBUS_SUCCESS)
    fatal(r, "globus_rls_client_lrc_attr_add(lfn0,str)");

  /* Verify attributes can be retrieved for lfn0	*/
  if ((r = globus_rls_client_lrc_attr_value_get(h, "lfn0", "dattr",
		globus_rls_obj_lrc_lfn, &l)) != GLOBUS_SUCCESS)
    fatal(r, "globus_rls_client_lrc_attr_value_get(lfn0,dattr)");
  strptime("2001-01-01 12:00:01", "%Y-%m-%d %H:%M:%S", &t);
  t.tm_isdst = -1;
  ut = mktime(&t);
  for (p = l; p; p = globus_list_rest(p)) {
    ap = (globus_rls_attribute_t *) globus_list_first(p);
    if (strcmp(ap->name, "dattr") != 0 ||
	ap->objtype != globus_rls_obj_lrc_lfn ||
	ap->type != globus_rls_attr_type_date ||
	ap->val.t != ut)
      fatal(GLOBUS_SUCCESS,
	   "globus_rls_client_lrc_attr_value_get(dattr): bad name (%s), objtype (%d), type (%d) or value (%u)", ap->name, ap->objtype, ap->type, ap->val.t);

  }
  globus_rls_client_free_list(l);
  if ((r = globus_rls_client_lrc_attr_value_get(h, "lfn0", "fattr",
		globus_rls_obj_lrc_lfn, &l)) != GLOBUS_SUCCESS)
    fatal(r, "globus_rls_client_lrc_attr_value_get(lfn0,dattr)");
  for (p = l; p; p = globus_list_rest(p)) {
    ap = (globus_rls_attribute_t *) globus_list_first(p);
    if (strcmp(ap->name, "fattr") != 0 ||
	ap->objtype != globus_rls_obj_lrc_lfn ||
	ap->type != globus_rls_attr_type_flt ||
	ap->val.d != 1.32)
      fatal(GLOBUS_SUCCESS,
	   "globus_rls_client_lrc_attr_value_get(fattr): bad name (%s), objtype (%d), type (%d) or value (%f)", ap->name, ap->objtype, ap->type, ap->val.d);

  }
  globus_rls_client_free_list(l);
  if ((r = globus_rls_client_lrc_attr_value_get(h, "lfn0", "iattr",
		globus_rls_obj_lrc_lfn, &l)) != GLOBUS_SUCCESS)
    fatal(r, "globus_rls_client_lrc_attr_value_get(lfn0,iattr)");
  for (p = l; p; p = globus_list_rest(p)) {
    ap = (globus_rls_attribute_t *) globus_list_first(p);
    if (strcmp(ap->name, "iattr") != 0 ||
	ap->objtype != globus_rls_obj_lrc_lfn ||
	ap->type != globus_rls_attr_type_int ||
	ap->val.i != -411)
      fatal(GLOBUS_SUCCESS,
	   "globus_rls_client_lrc_attr_value_get(iattr): bad name (%s), objtype (%d), type (%d) or value (%d)", ap->name, ap->objtype, ap->type, ap->val.i);

  }
  globus_rls_client_free_list(l);
  if ((r = globus_rls_client_lrc_attr_value_get(h, "lfn0", "sattr",
		globus_rls_obj_lrc_lfn, &l)) != GLOBUS_SUCCESS)
    fatal(r, "globus_rls_client_lrc_attr_value_get(lfn0,sattr)");
  for (p = l; p; p = globus_list_rest(p)) {
    ap = (globus_rls_attribute_t *) globus_list_first(p);
    if (strcmp(ap->name, "sattr") != 0 ||
	ap->objtype != globus_rls_obj_lrc_lfn ||
	ap->type != globus_rls_attr_type_str ||
	strcmp(ap->val.s, "hello, world") != 0)
      fatal(GLOBUS_SUCCESS,
	   "globus_rls_client_lrc_attr_value_get(sattr): bad name (%s), objtype (%d), type (%d) or value (%s)", ap->name, ap->objtype, ap->type, ap->val.s);

  }
  globus_rls_client_free_list(l);

  /*
   * Search for values
   */
  printf("Testing LRC attribute searching\n");
  a.type = globus_rls_attr_type_int;
  a.val.i = 0;
  if ((r = globus_rls_client_lrc_attr_search(h, "iattr",
		globus_rls_obj_lrc_lfn, globus_rls_attr_op_gt,
		&a, NULL, 0, 0, &l)) != GLOBUS_SUCCESS)
    fatal(r, "globus_rls_client_lrc_attr_search(iattr)");
  for (p = l; p; p = globus_list_rest(p)) {
    aop = (globus_rls_attribute_object_t *) globus_list_first(p);
    if (strcmp(aop->key, "lfn1") != 0 ||
	strcmp(aop->attr.name, "iattr") != 0 ||
	aop->attr.objtype != globus_rls_obj_lrc_lfn ||
	aop->attr.type != globus_rls_attr_type_int ||
	aop->attr.val.i <= 0)
      fatal(GLOBUS_SUCCESS,
	   "globus_rls_client_lrc_attr_search(iattr): bad obj (%s), name (%s), objtype (%d), type (%d) or value (%d)", aop->key, aop->attr.name, aop->attr.objtype, aop->attr.type, aop->attr.val.i);

  }
  globus_rls_client_free_list(l);

  /* Delete an attribute	*/
  a.name = "fattr";
  if ((r = globus_rls_client_lrc_attr_remove(h, "lfn0",
			&a)) != GLOBUS_SUCCESS)
    fatal(r, "globus_rls_client_lrc_attr_remove(lfn0,fattr)");
  r = globus_rls_client_lrc_attr_value_get(h, "lfn0", "fattr",
		globus_rls_obj_lrc_lfn, &l);
  globus_rls_client_error_info(r, &rc, NULL, 0, GLOBUS_FALSE);
  if (rc != GLOBUS_RLS_ATTR_NEXIST)
    fatal(r, "globus_rls_client_lrc_attr_remove(lfn0,fattr) should return NEXIST");

  if ((r = globus_rls_client_lrc_attr_delete(h, "fattr",
		globus_rls_obj_lrc_lfn, GLOBUS_TRUE)) != GLOBUS_SUCCESS)
    fatal(r, "globus_rls_client_lrc_attr_delete(fattr)");

  /* Error tests */
  r = globus_rls_client_lrc_attr_create(h, "dattr", globus_rls_obj_lrc_lfn,
		globus_rls_attr_type_date);
  if (r == GLOBUS_SUCCESS)
    fatal(GLOBUS_SUCCESS, "attr_create(dattr): Returned success");
  globus_rls_client_error_info(r, &rc, errmsg, MAXERRMSG, GLOBUS_FALSE);
  if (rc != GLOBUS_RLS_ATTR_EXIST || strcmp(errmsg, "Attribute already exists: dattr") != 0)
    fatal(GLOBUS_SUCCESS, "Incorrect error %d or message: %s", rc, errmsg);

  r = globus_rls_client_lrc_attr_delete(h, "nosuchattr",
		globus_rls_obj_lrc_lfn, GLOBUS_TRUE);
  if (r == GLOBUS_SUCCESS)
    fatal(GLOBUS_SUCCESS, "attr_delete(nosuchattr) succeeded");
  globus_rls_client_error_info(r, &rc, errmsg, MAXERRMSG, GLOBUS_FALSE);
  if (rc != GLOBUS_RLS_ATTR_NEXIST || strcmp(errmsg, "Attribute doesn't exist: nosuchattr") != 0)
    fatal(GLOBUS_SUCCESS, "Incorrect error %d or message: %s", rc, errmsg);
}

static void
rlitests(globus_rls_handle_t *h)

{
  globus_list_t		*l;
  globus_result_t	r;
  int			rc;
  char			errmsg[MAXERRMSG];
  globus_list_t		*p;
  int			count;
  globus_rls_string2_t	*str2;

  printf("Configuring %s to send softstate update to itself\n", rlsserver);
  if ((r = globus_rls_client_lrc_rli_add(h, rlsserver, 0,
					 NULL)) != GLOBUS_SUCCESS)
    fatal(r, "globus_rls_client_lrc_rli_add(%s)", rlsserver);
  printf("Forcing softstate update, wait 6 seconds ...\n");
  if ((r = globus_rls_client_admin(h,
		globus_rls_admin_cmd_ssu)) != GLOBUS_SUCCESS)
    fatal(r, "globus_rls_admin(ssu)");
  sleep(6);

  /* Query lfn			*/
  printf("Testing RLI query\n");
  if ((r = globus_rls_client_rli_get_lrc(h, "lfn4", 0, 0,
					  &l)) != GLOBUS_SUCCESS)
      fatal(r, "rli_get_lrc(lfn4)");
  for (p = l, count = 0; p; p = globus_list_rest(p), count++) {
    str2 = (globus_rls_string2_t *) globus_list_first(p);
    if (strcmp(str2->s1, "lfn4") != 0 || strcmp(str2->s2, rlsserver) != 0)
      fatal(GLOBUS_SUCCESS, "rli_get_lrc(lfn4) returned %s", str2->s2);
  }
  if (count != 1)
    fatal(GLOBUS_SUCCESS,
	  "rli_get_lrc(lfn4) returned %d results", count);
  globus_rls_client_free_list(l);

  if ((r = globus_rls_client_rli_exists(h, "lfn0",
				globus_rls_obj_rli_lfn)) != GLOBUS_SUCCESS)
    fatal(r, "rli_exists(lfn0)");
  if ((r = globus_rls_client_rli_mapping_exists(h, "lfn2",
				rlsserver)) != GLOBUS_SUCCESS)
    fatal(r, "rli_mapping_exists(lfn1, pfn1)");

  /* Error tests */
  r = globus_rls_client_rli_get_lrc(h, "nosuchlfn", 0, 0, &l);
  if (r == GLOBUS_SUCCESS)
    fatal(GLOBUS_SUCCESS, "rli_get_lrc(bad lfn): Returned success");
  globus_rls_client_error_info(r, &rc, errmsg, MAXERRMSG, GLOBUS_FALSE);
  if (rc != GLOBUS_RLS_LFN_NEXIST || strcmp(errmsg, "LFN doesn't exist: nosuchlfn") != 0)
    fatal(GLOBUS_SUCCESS, "LFN_NEXIST: Incorrect error %d or message: %s", rc,
	  errmsg);

  if ((r = globus_rls_client_rli_mapping_exists(h, "lfn2",
				"badlrc")) == GLOBUS_SUCCESS)
    fatal(GLOBUS_SUCCESS, "rli_mapping_exists(lfn2,badlrc) returned success");
  globus_rls_client_error_info(r, &rc, errmsg, MAXERRMSG, GLOBUS_FALSE);
  if (rc != GLOBUS_RLS_MAPPING_NEXIST || strcmp(errmsg, "Mapping doesn't exist: lfn2,badlrc"))
    fatal(GLOBUS_SUCCESS, "MAPPING_NEXIST: Incorrect error %d or message: %s",
	  rc, errmsg);

  printf("Removing %s from softstate updates\n", rlsserver);
  if ((r = globus_rls_client_lrc_rli_delete(h, rlsserver,
					    NULL)) != GLOBUS_SUCCESS)
    fatal(r, "globus_rls_client_lrc_rli_delete(%s)", rlsserver);
  printf("Waiting 15 seconds for RLI entries to expire\n");
  sleep(15);
  if ((r = globus_rls_client_rli_get_lrc_wc(h, "*", rls_pattern_unix, 0, 0,
					    &l)) != GLOBUS_SUCCESS) {
    globus_rls_client_error_info(r, &rc, errmsg, MAXERRMSG, GLOBUS_FALSE);
    if (rc != GLOBUS_RLS_LFN_NEXIST)
      fatal(r, "rli_get_lrc_wc(*)");
  } else
    fatal(r, "After expire found entries in RLI\n");
}

static void
showbulkfailures(char *msg, globus_list_t *rl)

{
  globus_list_t			*p;
  globus_rls_string2_bulk_t	*str2bulk;
  char				errmsg[MAXERRMSG];

  for (p = rl; p; p = globus_list_rest(p)) {
    str2bulk = (globus_rls_string2_bulk_t *) globus_list_first(p);
    printf("  %s,%s: %s\n", str2bulk->str2.s1, str2bulk->str2.s2,
	   globus_rls_errmsg(str2bulk->rc, NULL, errmsg, MAXERRMSG));
  }
  globus_rls_client_free_list(rl);
  fatal(GLOBUS_SUCCESS, "%s", msg);
}

static void
fatal(globus_result_t r, char *fmt, ...)

{
  va_list	ap;
  char		buf[1000];
  char		errmsg[MAXERRMSG];

  va_start(ap, fmt);
  vsprintf(buf, fmt, ap);
  if (r != GLOBUS_SUCCESS) {
    globus_rls_client_error_info(r, NULL, errmsg, MAXERRMSG, GLOBUS_FALSE);
    fprintf(stderr, "%s: %s\n", buf, errmsg);
  } else
    fprintf(stderr, "%s\n", buf);
  va_end(ap);
  cleanexit(1);
}

static void
cleanexit(int s)

{
  int	i;

  if (h)
    globus_rls_client_close(h);
  for (i = NMODS - 1; i >= 0; i--)
    globus_module_deactivate(modules[i]);
  exit(s);
}

static void
usage(char *prog)

{
  fprintf(stderr, "Usage: %s [-v] rls-url\n", prog);
  exit(1);
}
