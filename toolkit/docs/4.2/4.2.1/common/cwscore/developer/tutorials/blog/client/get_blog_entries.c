
#include "BlogService_client.h"
#include "globus_wsrf_core_tools.h"

int main(int argc, char * argv[])
{
    int                                 rc = 0;
    BlogEntryType_array                 blog_entries;

    /* output parameter to the GetRP operation */
    wsrp_GetResourcePropertyResponseType * RPResponse;
    
    /* fault parameters */
    Blog_GetResourceProperty_fault_t    getrp_fault_type;
    xsd_any *                           fault;

    /* EndpointReference for the blog resource */
    wsa_EndpointReferenceType *         blog_resource_reference;
    
    if(argc < 4)
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

    result = globus_wsrf_core_import_endpoint_reference(
        argv[1], &blog_resource_reference, NULL);
    if(result != GLOBUS_SUCCESS)
    {
        globus_panic(NULL, result, NULL);
    }

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
                     "Failed to perform add operation on resource");
    }

    printf("BLOG ENTRIES:\n\n");

    /* Entries are stored in chronological order.
       Print them in reverse chronological order */
    for(i = RPResponse->any.length - 1; i >= 0; --i)
    {
        /* check the type of the RP value in the response */
        if(RPResponse->any.elements[i].any_info->type !=
           (&BlogEntry_qname))
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
            blog_entry->Timestamp);
        
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
