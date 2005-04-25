
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

    wsrl_DestroyType                    Destroy;
    wsrl_DestroyResponseType *          DestroyResponse;

    /* fault parameters */
    Blog_Destroy_fault_t                destroy_fault_type;
    xsd_any *                           fault;

    /* EndpointReference for the blog resource */
    wsa_EndpointReferenceType *         blog_resource_reference;

    /* message handle for importing EPR from file */
    globus_soap_message_handle_t        epr_in_handle;

    if(argc < 2)
    {
        fprintf(stderr, 
                "usage: destroy-blog <epr file>\n");
        exit(1);
    }

    /* perform module activation */
    rc = globus_module_activate(BLOGSERVICE_MODULE);
    if(rc != 0)
    {
        globus_fatal("Failed BlogService module activate");
    }

    /* initialize client handle */
    result = BlogService_client_init(&blog_handle, NULL, NULL);
    if(result != GLOBUS_SUCCESS)
    {
        globus_panic(NULL, result, "Failed client handle init");
    }

    result = globus_soap_message_handle_init_from_file(
        &epr_in_handle,
        argv[1]);
    if(result != GLOBUS_SUCCESS)
    {
        globus_panic(NULL, result, 
                     "Failed to initialize message handle for "
                     "reading EPR from file");
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

    /* create blog resource with createBlogTopic operation */
    result = Blog_Destroy_epr(
        blog_handle,
        blog_resource_reference,
        &Destroy,
        &DestroyResponse,
        &destroy_fault_type,
        &fault);
    if(result != GLOBUS_SUCCESS)
    {
        if(fault)
        {
            xsd_any_destroy(fault);
        }
        globus_panic(NULL, result, "Failed destroy");
    }

    /* destroy DestroyResponse from Destroy operation */
    wsrl_DestroyResponseType_destroy(DestroyResponse);
    
    printf("Blog resource successfully destroyed\n");

    if(unlink(argv[1]) < 0)
    {
        globus_fatal_perror("Failed to remove EPR file %s", argv[1]);
    }

    /* destroy client handle */
    BlogService_client_destroy(blog_handle);

    rc = globus_module_deactivate(BLOGSERVICE_MODULE);
    if(rc != 0)
    {
        globus_fatal("BlogService deactivate failed");
    }

    exit(0);
}
