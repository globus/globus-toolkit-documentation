
#include "globus_wsrf_resource.h"
#include "globus_wsrf_core_tools.h"
#include "BlogService_skeleton.h"
#include "BlogService_internal_skeleton.h"
#include "BlogEntryType.h"

globus_result_t
BlogService_init(
    globus_service_descriptor_t *       service_desc)
{
    GlobusFuncName(BlogService_init);
    BlogServiceDebugEnter();

    /* do any service specific init stuff here, such
     * as loading other operation providers and setting them
     * in the operation table of the service descriptor.  This
     * function is called at the end of service activation.
     */

    BlogServiceDebugExit();
    return GLOBUS_SUCCESS;
}

globus_result_t
BlogService_finalize(
    globus_service_descriptor_t *       service_desc)
{
    GlobusFuncName(BlogService_finalize);
    BlogServiceDebugEnter();

    /* do any service specific finalize stuff here, 
     * opposite of BlogService_init
     */

    BlogServiceDebugExit();
    return GLOBUS_SUCCESS;
}



/* these functions are the service implementation and
 * must be implemented by the service implementer
 */

globus_result_t
Blog_SetTerminationTime_init(
    globus_service_engine_t             engine,
    globus_soap_message_handle_t        message,
    wsrl_SetTerminationTimeType * SetTerminationTime)
{
    /* add function local variable declarations here */
    globus_result_t                     result = GLOBUS_SUCCESS;

    /* initialize trace debugging info */
    GlobusFuncName(Blog_SetTerminationTime_init);
    BlogServiceDebugEnter();

    /* Service implementer may implmenent this function.  Since this
     * function gets called before deserialization of the request
     * message, the input variable SetTerminationTime can be initialized
     * however the implementer wants, as well as making any configuration
     * changes to the service engine or soap message handles.
     *
     * If no configuration or initialization needs to be done, this
     * call can remain empty.
     */

    BlogServiceDebugExit();
    return GLOBUS_SUCCESS;
}

globus_result_t
Blog_SetTerminationTime_impl(
    globus_service_engine_t             engine,
    globus_soap_message_handle_t        message,
    globus_service_descriptor_t *       descriptor,
    wsrl_SetTerminationTimeType * SetTerminationTime,
    wsrl_SetTerminationTimeResponseType * SetTerminationTimeResponse,
    const char ** fault_name,
    void ** fault)
{
    /* add function local variable declarations here */
    globus_result_t                     result = GLOBUS_SUCCESS;

    /* initialize trace debugging info */
    GlobusFuncName(Blog_SetTerminationTime_impl);
    BlogServiceDebugEnter();
     
    /* This is where it all happens.  Service implementer must 
     * implmenent this function.  Asume that SetTerminationTime has
     * been initialized and filled with request values.  
     * SetTerminationTimeResponse must be set by the implementer.
     */
    
    /** do not use GLOBUS_FAILURE, you the error object construction api */
    result = BlogServiceErrorNotImplemented("Blog_SetTerminationTime");

    BlogServiceDebugExit();
    return result;     
}



/* these functions are the service implementation and
 * must be implemented by the service implementer
 */

globus_result_t
Blog_Destroy_init(
    globus_service_engine_t             engine,
    globus_soap_message_handle_t        message,
    wsrl_DestroyType * Destroy)
{
    /* add function local variable declarations here */
    globus_result_t                     result = GLOBUS_SUCCESS;

    /* initialize trace debugging info */
    GlobusFuncName(Blog_Destroy_init);
    BlogServiceDebugEnter();

    /* Service implementer may implmenent this function.  Since this
     * function gets called before deserialization of the request
     * message, the input variable Destroy can be initialized
     * however the implementer wants, as well as making any configuration
     * changes to the service engine or soap message handles.
     *
     * If no configuration or initialization needs to be done, this
     * call can remain empty.
     */

    BlogServiceDebugExit();
    return GLOBUS_SUCCESS;
}

globus_result_t
Blog_Destroy_impl(
    globus_service_engine_t             engine,
    globus_soap_message_handle_t        message,
    globus_service_descriptor_t *       descriptor,
    wsrl_DestroyType * Destroy,
    wsrl_DestroyResponseType * DestroyResponse,
    const char ** fault_name,
    void ** fault)
{
    /* add function local variable declarations here */
    globus_result_t                     result = GLOBUS_SUCCESS;

    /* initialize trace debugging info */
    GlobusFuncName(Blog_Destroy_impl);
    BlogServiceDebugEnter();
     
    /* This is where it all happens.  Service implementer must 
     * implmenent this function.  Asume that Destroy has
     * been initialized and filled with request values.  
     * DestroyResponse must be set by the implementer.
     */
    
    /** do not use GLOBUS_FAILURE, you the error object construction api */
    result = BlogServiceErrorNotImplemented("Blog_Destroy");

    BlogServiceDebugExit();
    return result;     
}



/* these functions are the service implementation and
 * must be implemented by the service implementer
 */

globus_result_t
Blog_GetCurrentMessage_init(
    globus_service_engine_t             engine,
    globus_soap_message_handle_t        message,
    wsnt_GetCurrentMessageType * GetCurrentMessage)
{
    /* add function local variable declarations here */
    globus_result_t                     result = GLOBUS_SUCCESS;

    /* initialize trace debugging info */
    GlobusFuncName(Blog_GetCurrentMessage_init);
    BlogServiceDebugEnter();

    /* Service implementer may implmenent this function.  Since this
     * function gets called before deserialization of the request
     * message, the input variable GetCurrentMessage can be initialized
     * however the implementer wants, as well as making any configuration
     * changes to the service engine or soap message handles.
     *
     * If no configuration or initialization needs to be done, this
     * call can remain empty.
     */

    BlogServiceDebugExit();
    return GLOBUS_SUCCESS;
}

globus_result_t
Blog_GetCurrentMessage_impl(
    globus_service_engine_t             engine,
    globus_soap_message_handle_t        message,
    globus_service_descriptor_t *       descriptor,
    wsnt_GetCurrentMessageType * GetCurrentMessage,
    wsnt_GetCurrentMessageResponseType * GetCurrentMessageResponse,
    const char ** fault_name,
    void ** fault)
{
    /* add function local variable declarations here */
    globus_result_t                     result = GLOBUS_SUCCESS;

    /* initialize trace debugging info */
    GlobusFuncName(Blog_GetCurrentMessage_impl);
    BlogServiceDebugEnter();
     
    /* This is where it all happens.  Service implementer must 
     * implmenent this function.  Asume that GetCurrentMessage has
     * been initialized and filled with request values.  
     * GetCurrentMessageResponse must be set by the implementer.
     */
    
    /** do not use GLOBUS_FAILURE, you the error object construction api */
    result = BlogServiceErrorNotImplemented("Blog_GetCurrentMessage");

    BlogServiceDebugExit();
    return result;     
}



/* these functions are the service implementation and
 * must be implemented by the service implementer
 */

globus_result_t
Blog_Subscribe_init(
    globus_service_engine_t             engine,
    globus_soap_message_handle_t        message,
    wsnt_SubscribeType * Subscribe)
{
    /* add function local variable declarations here */
    globus_result_t                     result = GLOBUS_SUCCESS;

    /* initialize trace debugging info */
    GlobusFuncName(Blog_Subscribe_init);
    BlogServiceDebugEnter();

    /* Service implementer may implmenent this function.  Since this
     * function gets called before deserialization of the request
     * message, the input variable Subscribe can be initialized
     * however the implementer wants, as well as making any configuration
     * changes to the service engine or soap message handles.
     *
     * If no configuration or initialization needs to be done, this
     * call can remain empty.
     */

    BlogServiceDebugExit();
    return GLOBUS_SUCCESS;
}

globus_result_t
Blog_Subscribe_impl(
    globus_service_engine_t             engine,
    globus_soap_message_handle_t        message,
    globus_service_descriptor_t *       descriptor,
    wsnt_SubscribeType * Subscribe,
    wsnt_SubscribeResponseType * SubscribeResponse,
    const char ** fault_name,
    void ** fault)
{
    /* add function local variable declarations here */
    globus_result_t                     result = GLOBUS_SUCCESS;

    /* initialize trace debugging info */
    GlobusFuncName(Blog_Subscribe_impl);
    BlogServiceDebugEnter();
     
    /* This is where it all happens.  Service implementer must 
     * implmenent this function.  Asume that Subscribe has
     * been initialized and filled with request values.  
     * SubscribeResponse must be set by the implementer.
     */
    
    /** do not use GLOBUS_FAILURE, you the error object construction api */
    result = BlogServiceErrorNotImplemented("Blog_Subscribe");

    BlogServiceDebugExit();
    return result;     
}



/* these functions are the service implementation and
 * must be implemented by the service implementer
 */

globus_result_t
Blog_GetResourceProperty_init(
    globus_service_engine_t             engine,
    globus_soap_message_handle_t        message,
    xsd_QName * GetResourceProperty)
{
    /* add function local variable declarations here */
    globus_result_t                     result = GLOBUS_SUCCESS;

    /* initialize trace debugging info */
    GlobusFuncName(Blog_GetResourceProperty_init);
    BlogServiceDebugEnter();

    /* Service implementer may implmenent this function.  Since this
     * function gets called before deserialization of the request
     * message, the input variable GetResourceProperty can be initialized
     * however the implementer wants, as well as making any configuration
     * changes to the service engine or soap message handles.
     *
     * If no configuration or initialization needs to be done, this
     * call can remain empty.
     */

    BlogServiceDebugExit();
    return GLOBUS_SUCCESS;
}

globus_result_t
Blog_GetResourceProperty_impl(
    globus_service_engine_t             engine,
    globus_soap_message_handle_t        message,
    globus_service_descriptor_t *       descriptor,
    xsd_QName * GetResourceProperty,
    wsrp_GetResourcePropertyResponseType * GetResourcePropertyResponse,
    const char ** fault_name,
    void ** fault)
{
    /* add function local variable declarations here */
    globus_result_t                     result = GLOBUS_SUCCESS;

    /* initialize trace debugging info */
    GlobusFuncName(Blog_GetResourceProperty_impl);
    BlogServiceDebugEnter();
     
    /* This is where it all happens.  Service implementer must 
     * implmenent this function.  Asume that GetResourceProperty has
     * been initialized and filled with request values.  
     * GetResourcePropertyResponse must be set by the implementer.
     */
    
    /** do not use GLOBUS_FAILURE, you the error object construction api */
    result = BlogServiceErrorNotImplemented("Blog_GetResourceProperty");

    BlogServiceDebugExit();
    return result;     
}



/* these functions are the service implementation and
 * must be implemented by the service implementer
 */

globus_result_t
Blog_addEntry_init(
    globus_service_engine_t             engine,
    globus_soap_message_handle_t        message,
    addEntryType * addEntry)
{
    /* add function local variable declarations here */
    globus_result_t                     result = GLOBUS_SUCCESS;

    /* initialize trace debugging info */
    GlobusFuncName(Blog_addEntry_init);
    BlogServiceDebugEnter();

    /* Service implementer may implmenent this function.  Since this
     * function gets called before deserialization of the request
     * message, the input variable addEntry can be initialized
     * however the implementer wants, as well as making any configuration
     * changes to the service engine or soap message handles.
     *
     * If no configuration or initialization needs to be done, this
     * call can remain empty.
     */

    BlogServiceDebugExit();
    return GLOBUS_SUCCESS;
}

globus_result_t
Blog_addEntry_impl(
    globus_service_engine_t             engine,
    globus_soap_message_handle_t        message,
    globus_service_descriptor_t *       descriptor,
    addEntryType * addEntry,
    addEntryResponseType * addEntryResponse,
    const char ** fault_name,
    void ** fault)
{
    /* add function local variable declarations here */
    globus_result_t                     result = GLOBUS_SUCCESS;
    globus_resource_t                   blog_resource;
    BlogEntryType_array *               blog_entries;
    BlogEntryType *                     new_entry;
    time_t                              tstamp;

    /* initialize trace debugging info */
    GlobusFuncName(Blog_addEntry_impl);
    BlogServiceDebugEnter();

    /* get the resource from the EndpointReference contained
     * in the message
     */
    result = globus_wsrf_core_get_resource(
        message,
        descriptor,
        &blog_resource);
    if(result != GLOBUS_SUCCESS)
    {
        result = Blog_addEntry_chain_error(
            result,
            "Failed to get the blog resource from the EPR");
        goto exit;
    }
    
    result = globus_resource_get_property(
        blog_resource,
        &Blog_BlogEntry_rp_qname,
        (void **)&blog_entries,
        NULL);
    if(result != GLOBUS_SUCCESS)
    {
        result = Blog_addEntry_chain_error(
            result,
            "Failed to get the blog entries resource property");
        goto finish_resource;
    }

    /* add a new entry onto the array and set its values */
    new_entry = BlogEntryType_array_push(blog_entries);

    tstamp = time(NULL);
    result = xsd_dateTime_copy_contents(
        &new_entry->Timestamp,
        (xsd_dateTime *)localtime(&tstamp));
    if(result != GLOBUS_SUCCESS)
    {
        result = Blog_addEntry_chain_error(
            result,
            "Failed to set the timestamp for the new blog entry");
        goto finish_resource;
    }
    
    result = xsd_string_copy_contents(
        &new_entry->Author,
        (xsd_string *)&addEntry->Author);
    if(result != GLOBUS_SUCCESS)
    {
        result = Blog_addEntry_chain_error(
            result,
            "Failed to set the Author in the new blog entry");
        goto finish_resource;
    }

    result = xsd_string_copy_contents(
        &new_entry->Comment,
        (xsd_string *)&addEntry->Comment);
    if(result != GLOBUS_SUCCESS)
    {
        result = Blog_addEntry_chain_error(
            result,
            "Failed to set the Comment in the new blog entry");
        goto finish_resource;
    }

    /* copy the blog entries to the response output */
    result = BlogEntryType_array_copy_contents(
        &addEntryResponse->BlogEntries,
        blog_entries);
    if(result != GLOBUS_SUCCESS)
    {
        result = Blog_addEntry_chain_error(
            result,
            "Failed to set the blog entries in the response output");
        goto finish_resource;
    }

finish_resource:
    globus_resource_finish(blog_resource);

exit:
    BlogServiceDebugExit();
    return result;     
}

/* these functions are the service implementation and
 * must be implemented by the service implementer
 */

globus_result_t
Blog_createBlogTopic_init(
    globus_service_engine_t             engine,
    globus_soap_message_handle_t        message,
    createBlogTopicType * createBlogTopic)
{
    /* add function local variable declarations here */
    globus_result_t                     result = GLOBUS_SUCCESS;

    /* initialize trace debugging info */
    GlobusFuncName(Blog_createBlogTopic_init);
    BlogServiceDebugEnter();

    /* Service implementer may implmenent this function.  Since this
     * function gets called before deserialization of the request
     * message, the input variable createBlogTopic can be initialized
     * however the implementer wants, as well as making any configuration
     * changes to the service engine or soap message handles.
     *
     * If no configuration or initialization needs to be done, this
     * call can remain empty.
     */

    BlogServiceDebugExit();
    return GLOBUS_SUCCESS;
}

globus_result_t
Blog_createBlogTopic_impl(
    globus_service_engine_t             engine,
    globus_soap_message_handle_t        message,
    globus_service_descriptor_t *       descriptor,
    createBlogTopicType * createBlogTopic,
    createBlogTopicResponseType * createBlogTopicResponse,
    const char ** fault_name,
    void ** fault)
{
    /* add function local variable declarations here */
    globus_result_t                     result = GLOBUS_SUCCESS;
    xsd_string                          resource_id;
    xsd_any *                           reference_property;
    globus_resource_t                   blog_resource;
    char *                              blog_id;
    createBlogTopicType *               blog_resource_data;
    BlogEntryType_array *               blog_entries;

    /* initialize trace debugging info */
    GlobusFuncName(Blog_createBlogTopic_impl);
    BlogServiceDebugEnter();

    /* create the resource id */
    blog_id = globus_common_create_string(
        "%s#%s", createBlogTopic->Creator, createBlogTopic->Topic);

    /* create a new resource with specified resource id */
    result = globus_resource_create(
        blog_id,
        &blog_resource);
    if(result != GLOBUS_SUCCESS)
    {
        result = Blog_createBlogTopic_chain_error(
            result, "Failed to create resource for the Blog topic");
        goto exit;
    }

    /* allow inherited resource properties to be created/initialized */
    result = BlogServiceInitResource(blog_id);
    if(result != GLOBUS_SUCCESS)
    {
        result = Blog_createBlogTopic_chain_error(
            result, "Failed to init resource for the Blog topic");
        goto exit;
    }

    /* The following reference property creation code
     * initializes and fills an xsd_any instance.  It
     * ends up being serialized as <BlogID>Author#Topic</BlogID>
     */

    /* initialize the reference property */
    result = xsd_any_init(&reference_property);
    if(result != GLOBUS_SUCCESS)
    {
        result = Blog_createBlogTopic_chain_error(
            result, "Failed to initialize an xsd_any variable");
        goto destroy_resource;
    }

    /* set the type of the reference property to be a string element */
    reference_property->any_info = &xsd_string_info;

    /* initialize the containing element of the reference property */
    result = xsd_QName_init(&reference_property->element);
    if(result != GLOBUS_SUCCESS)
    {
        result = Blog_createBlogTopic_chain_error(
            result, "Failed to initialize an xsd_QName variable");
        goto destroy_reference_property;
    }

    /* set the Namespace of the containing element to the Blog namespace */
    reference_property->element->Namespace = globus_libc_strdup(
        BlogService_service_qname.Namespace);
    reference_property->element->local = globus_libc_strdup("BlogID");

    /* set the actual value of the reference property */
    result = xsd_string_copy_cstr(
        (xsd_string **)&reference_property->value, 
        blog_id);
    if(result != GLOBUS_SUCCESS)
    {
        result = Blog_createBlogTopic_chain_error(
            result, "Failed to copy the resource ID");
        goto destroy_reference_property;
    }

    result = wsa_EndpointReferenceType_init_contents(
	&createBlogTopicResponse->EndpointReference);
    if(result != GLOBUS_SUCCESS)
    {
	result = Blog_createBlogTopic_chain_error(
            result, "Failed to initialize endpoint reference for resource");
        goto destroy_reference_property;
    }
	
    /* create the endpoint reference from the resource id, path, 
       and handle to the service engine */
    result = globus_wsrf_core_create_endpoint_reference(
        engine,
        BLOGSERVICE_BASE_PATH,
        &reference_property,
        &createBlogTopicResponse->EndpointReference);
    if(result != GLOBUS_SUCCESS)
    {
        result = Blog_createBlogTopic_chain_error(
            result, "Failed to create endpoint reference for resource");
        goto destroy_reference_property;
    }

    result = createBlogTopicType_copy(
        &blog_resource_data,
        createBlogTopic);
    if(result != GLOBUS_SUCCESS)
    {
        result = Blog_createBlogTopic_chain_error(
            result, "Failed to copy the blog topic info");
        goto destroy_endpoint_reference;
    }

    /* OPTIONAL: We store the Author and Topic fields of the blog resource
     * in resource specific data for future access
     */
    result = globus_resource_set_resource_specific(
        blog_resource,
        blog_resource_data,
        createBlogTopicType_destroy_wrapper);
    if(result != GLOBUS_SUCCESS)
    {
        result = Blog_createBlogTopic_chain_error(
            result, 
            "Failed to set the blog topic info as"
            " resource specific data");
        goto destroy_resource_data;
    }

    /* Now we create the resource property 
     * for the Blog topic.  This is an
     * array of BlogEntryType instances.
     * It starts off empty.
     */
    result = BlogEntryType_array_init(&blog_entries);
    if(result != GLOBUS_SUCCESS)
    {
        result = Blog_createBlogTopic_chain_error(
            result,
            "Failed to initialize the resource property");
        goto destroy_endpoint_reference;
    }

    result = globus_resource_create_property(
        blog_resource, 
        &Blog_BlogEntry_rp_qname, 
        &BlogEntryType_array_info,
        blog_entries);
    if(result != GLOBUS_SUCCESS)
    {
        result = Blog_createBlogTopic_chain_error(
            result,
            "Failed to create the BlogEntry resource property");
        goto destroy_blog_entries;
    }

    goto exit;

destroy_resource_data:
    createBlogTopicType_destroy(blog_resource_data);

destroy_blog_entries:
    BlogEntryType_array_destroy(blog_entries);

destroy_endpoint_reference:
    wsa_EndpointReferenceType_destroy(
        &createBlogTopicResponse->EndpointReference);
    goto destroy_resource;

destroy_reference_property:
    xsd_any_destroy(reference_property);

destroy_resource:
    globus_resource_finish_and_destroy(blog_resource);

exit:

    BlogServiceDebugExit();
    return result;     
}


