
#include "BlogEntry.h"
#include "BlogEntryType.h"
#include "BlogService_client.h"
#include "globus_wsrf_core_tools.h"

static xsd_QName                        BlogEPR_qname =
{
    BLOGENTRYTYPE_NS,
    "BlogEndpointReference"
};

int main(int argc, char * argv[])
{
    int                                 rc = 0;
    globus_result_t                     result = GLOBUS_SUCCESS;
    BlogService_client_handle_t         blog_handle;

    /* output parameter to the GetRP operation */
    wsrp_GetResourcePropertyResponseType * RPResponse;
    
    /* fault parameters */
    Blog_GetResourceProperty_fault_t    getrp_fault_type;
    xsd_any *                           fault;

    /* EndpointReference for the blog resource */
    wsa_EndpointReferenceType *         blog_resource_reference;

    /* message handle to input EPR from file */
    globus_soap_message_handle_t        epr_in_handle;

    /* holds an individual blog entry for ease of use */
    BlogEntryType *                     blog_entry;

    int                                 i = 0;
    
    if(argc < 2)
    {
        fprintf(stderr, 
                "usage: get-blog-entries "
                "<epr file>\n");
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

    /* inport the EPR from a file */
    result = globus_soap_message_handle_init_from_file(
        &epr_in_handle,
        argv[1]);
    if(result != GLOBUS_SUCCESS)
    {
        globus_panic(NULL, result, 
                     "Failed to create handle for importing EPR");
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
                     "Failed to deserialize from EPR file "
                     "to EPR internal structure");
    }

    globus_soap_message_handle_destroy(epr_in_handle);

    /* make the GetResourceProperty invocation */
    result = Blog_GetResourceProperty_epr(
        blog_handle,
        blog_resource_reference,
        &BlogEntry_qname,
        &RPResponse,
        &getrp_fault_type,
        &fault);
    if(result != GLOBUS_SUCCESS)
    {
        if(fault)
        {
            xsd_any_destroy(fault);
        }

        globus_panic(NULL, result, 
                     "Failed to perform GetRP operation on resource");
    }

    printf("BLOG ENTRIES:\n\n");

    /* Entries are stored in chronological order.
       Print them in reverse chronological order */
    for(i = RPResponse->any.length - 1; i >= 0; --i)
    {
        char *                          entry_timestamp;

        /* check the type of the RP value in the response */
        if(RPResponse->any.elements[i].any_info->type !=
           (&BlogEntry_qname) && 
	   RPResponse->any.elements[i].any_info->type !=
	    (&Blog_BlogEntry_rp_qname))
        {
            globus_fatal("GetResourceProperty response type: {%s}%s\n"
                         "does not match expected: {%s}%s\n",
                         RPResponse->any.elements[i].any_info->type->Namespace,
                         RPResponse->any.elements[i].any_info->type->local,
                         BlogEntry_qname.Namespace,
                         BlogEntry_qname.local);
        }

        blog_entry = (BlogEntryType *)RPResponse->any.elements[i].value;

        entry_timestamp = globus_wsrf_core_export_timestamp(
            &blog_entry->Timestamp);
        
        /* print response value */
        printf("On %s, %s said: %s\n\n", 
               entry_timestamp,
               blog_entry->Author,
               blog_entry->Comment);

        free(entry_timestamp);
    }

    /* destroy response */
    wsrp_GetResourcePropertyResponseType_destroy(RPResponse);

    /* destroy client handle */
    BlogService_client_destroy(blog_handle);

    rc = globus_module_deactivate(BLOGSERVICE_MODULE);
    if(rc != 0)
    {
        globus_fatal("BlogService deactivate failed");
    }

    exit(0);
}
