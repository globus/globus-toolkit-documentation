
#include "BlogEntryType.h"
#include "BlogService_client.h"
#include "globus_wsrf_core_tools.h"

static xsd_QName                        BlogEPR_qname =
{
    ADDENTRYTYPE_NS,
    "BlogEndpointReference"
};

int main(int argc, char * argv[])
{
    int                                 rc = 0;
    globus_result_t                     result = GLOBUS_SUCCESS;
    BlogService_client_handle_t         blog_handle;

    /* input parameter to addEntry operation */
    addEntryType                        entry;
    /* output paramater to addEntry operation */
    addEntryResponseType *              addEntryResponse;

    /* fault parameters */
    Blog_addEntry_fault_t               add_fault_type;
    xsd_any *                           fault;

    /* EndpointReference for the blog resource */
    wsa_EndpointReferenceType *         blog_resource_reference;

    /* message handle for inputting the blog EPR */
    globus_soap_message_handle_t        epr_in_handle;

    int                                 i = 0;

    if(argc < 4)
    {
        fprintf(stderr, 
                "usage: add-blog-entry "
                "<epr file> <comment> <author>\n");
        exit(1);
    }

    rc = globus_module_activate(BLOGSERVICE_MODULE);
    if(rc != 0)
    {
        globus_fatal("BlogService activate failed");
    }

    /* initialize client handle */
    result = BlogService_client_init(&blog_handle, NULL, NULL);
    if(result != GLOBUS_SUCCESS)
    {
        globus_panic(NULL, result, "Failed client handle init");
    }

    /* get EPR from file */
    result = globus_soap_message_handle_init_from_file(
        &epr_in_handle,
        argv[1]);
    if(result != GLOBUS_SUCCESS)
    {
        globus_panic(NULL, result, 
                     "Failed to initialize message handle for reading in EPR");
    }

    result = wsa_EndpointReferenceType_init(&blog_resource_reference);
    if(result != GLOBUS_SUCCESS)
    {
        globus_panic(NULL, result,
                     "Failed to initialize EPR");
    }

    result = wsa_EndpointReferenceType_deserialize(
        &BlogEPR_qname,
        blog_resource_reference,
        epr_in_handle,
        0);
    if(result != GLOBUS_SUCCESS)
    {
        globus_panic(NULL, result,
                     "Failed to deserialize EPR from file");
    }

    globus_soap_message_handle_destroy(epr_in_handle);

    /* set  value */
    entry.Comment = argv[2];
    entry.Author = argv[3];

    /* make the actual add invocation on the resource created above */
    result = Blog_addEntry_epr(
        blog_handle,
        blog_resource_reference,
        &entry,
        &addEntryResponse,
        &add_fault_type,
        &fault);
    if(result != GLOBUS_SUCCESS)
    {
        globus_panic(NULL, result, 
                     "Failed to perform add operation on resource");
    }

    printf("BLOG ENTRIES:\n\n");
    for(i = addEntryResponse->BlogEntries.length - 1; i >= 0; --i)
    {
        char *                          entry_timestamp = 
        globus_wsrf_core_export_timestamp(
            &addEntryResponse->BlogEntries.elements[i].Timestamp);

        printf("On %s: %s said: %s\n\n",
               entry_timestamp,
               addEntryResponse->BlogEntries.elements[i].Author,
               addEntryResponse->BlogEntries.elements[i].Comment);

        free(entry_timestamp);
    }

    /* destroy response */
    addEntryResponseType_destroy(addEntryResponse);

    /* destroy client handle */
    BlogService_client_destroy(blog_handle);

    rc = globus_module_deactivate(BLOGSERVICE_MODULE);
    if(rc != 0)
    {
        globus_fatal("BlogService deactivate failed");
    }

    exit(0);
}
        
        
