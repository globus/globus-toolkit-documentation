
#include "BlogService_client.h"
#include "globus_wsrf_core_tools.h"

int main(int argc, char * argv[])
{
    int                                 rc = 0;
    
    /* input parameter to addEntry operation */
    addEntryType                      entry;
    /* output paramater to addEntry operation */
    addEntryResponseType *            addEntryResponse;

    /* fault parameters */
    Blog_addEntry_fault_t               add_fault_type;
    xsd_any *                           fault;

    /* EndpointReference for the blog resource */
    wsa_EndpointReferenceType *         blog_resource_reference;
    
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

    result = globus_wsrf_core_import_endpoint_reference(
        argv[1], &blog_resource_reference, NULL);
    if(result != GLOBUS_SUCCESS)
    {
        globus_panic(NULL, result, NULL);
    }

    /* set  value */
    entry.Comment = argv[2];
    entry.Author = argv[3];

    /* make the actual add invocation on the resource created above */
    result = Blog_addEntry_epr(
        blog_handle,
        counter_resource_reference,
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
    for(i = addEntryResponse->BlogEntries.length; i >= 0; --i)
    {
        entry_timestamp = globus_wsrf_core_tools_export_timestamp(
            addEntryResponse->BlogEntries.elements[i].Timestamp);

        printf("On %s: %s said: %s\n\n",
               entry_timestamp,
               addEntryResponse->BlogEntries.elements[i].Author,
               addEntryResponse->BlogEntries.elements[i].Comment);

        free(entry_timestamp);
    }

    /* destroy response */
    xsd_string_destroy(blog_comments);

    /* destroy client handle */
    BlogService_client_destroy(blog_handle);

    rc = globus_module_deactivate(BLOGSERVICE_MODULE);
    if(rc != 0)
    {
        globus_fatal("BlogService deactivate failed");
    }

    exit(0);
}
        
        
