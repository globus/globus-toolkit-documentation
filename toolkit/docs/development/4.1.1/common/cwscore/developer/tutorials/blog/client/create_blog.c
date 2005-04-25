
#include "BlogService_client.h"
#include "globus_wsrf_core_tools.h"

static xsd_QName BlogEPR_qname =
{
    CREATEBLOGTOPICTYPE_NS,
    "BlogEndpointReference"
};

int main(int argc, char * argv[])
{
    int                                 rc = 0;
    globus_result_t                     result = GLOBUS_SUCCESS;
    BlogService_client_handle_t         blog_handle;

    /* input parameter to createBlogTopic operation */
    createBlogTopicType                 createBlogTopic;
    /* output parameter to createBlogTopic operation */
    createBlogTopicResponseType *       createBlogTopicResponse;

    /* fault parameters */
    Blog_createBlogTopic_fault_t        create_fault_type;
    xsd_any *                           fault;

    /* message handle for serializing the EPR to a file */
    globus_soap_message_handle_t        epr_out_handle;

    if(argc < 5)
    {
        fprintf(stderr, 
                "usage: create-blog "
                "<service URL> <topic> <creator> <epr file>\n");
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

    createBlogTopic.Topic = argv[2];
    createBlogTopic.Creator = argv[3];

    /* create blog resource with createBlogTopic operation */
    result = Blog_createBlogTopic(
        blog_handle,
        argv[1],
        &createBlogTopic,
        &createBlogTopicResponse,
        &create_fault_type,
        &fault);
    if(result != GLOBUS_SUCCESS)
    {
        if(fault)
        {
            xsd_any_destroy(fault);
        }
        globus_panic(NULL, result, "Failed createCounter");
    }


    /* export the resource reference to the specified file */
    
    /* first initialize the message handle 
     * to write to the specified file
     */
    result = globus_soap_message_handle_init_to_file(
        &epr_out_handle,
        argv[4],
        GLOBUS_XIO_FILE_CREAT);
    if(result != GLOBUS_SUCCESS)
    {
        globus_panic(NULL, result, 
                     "Failed to create message handle for exporting EPR");
    }

    result = wsa_EndpointReferenceType_serialize(
        &BlogEPR_qname,
        &createBlogTopicResponse->EndpointReference,
        epr_out_handle,
        0);
    if(result != GLOBUS_SUCCESS)
    {
        globus_panic(NULL, result,
                     "Failed to serialize EPR for blog resource to file");
    }

    globus_soap_message_handle_destroy(epr_out_handle);
    
    /* destroy response from createBlogTopic */
    createBlogTopicResponseType_destroy(createBlogTopicResponse);
    
    printf("EPR of the blog resource written to file\n");

    /* destroy client handle */
    BlogService_client_destroy(blog_handle);

    rc = globus_module_deactivate(BLOGSERVICE_MODULE);
    if(rc != 0)
    {
        globus_fatal("BlogService deactivate failed");
    }

    exit(0);
}
