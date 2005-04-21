
/*
 * This file is automatically generated by the Globus WSDLtoC converter
 */

#ifndef _BLOGSERVICE_CLIENT_H_
#define _BLOGSERVICE_CLIENT_H_

#include "globus_common.h"

EXTERN_C_BEGIN

#include "BlogService.h"
#include "wsa_EndpointReferenceType.h"
#include "globus_soap_message_attrs.h"

#define WSADDRESSING_NS "http://schemas.xmlsoap.org/ws/2004/03/addressing"

extern globus_module_descriptor_t BlogService_i_module;
#define BLOGSERVICE_MODULE (&BlogService_i_module)

typedef struct BlogService_client_handle_s * BlogService_client_handle_t;



/* type and function declarations for the SetTerminationTime operation */

typedef void (* Blog_SetTerminationTime_request_callback_func_t)(
    BlogService_client_handle_t handle,
    void * user_args,
    globus_result_t result);
 
globus_result_t
Blog_SetTerminationTime_epr_register_request(
    BlogService_client_handle_t handle,
    const wsa_EndpointReferenceType * epr,
    const wsrl_SetTerminationTimeType * SetTerminationTime,
    Blog_SetTerminationTime_request_callback_func_t callback,
    void * user_args);

globus_result_t
Blog_SetTerminationTime_register_request(
    BlogService_client_handle_t handle,
    const char * endpoint,
    const wsrl_SetTerminationTimeType * SetTerminationTime,
    Blog_SetTerminationTime_request_callback_func_t callback,
    void * user_args);

typedef void (* Blog_SetTerminationTime_response_callback_func_t)(
    BlogService_client_handle_t handle,
    void *                              user_args,
    globus_result_t                     result,
    const wsrl_SetTerminationTimeResponseType * SetTerminationTimeResponse,
    Blog_SetTerminationTime_fault_t fault_type,
    const xsd_any *                     fault);

globus_result_t
Blog_SetTerminationTime_register_response(
    BlogService_client_handle_t handle,
    Blog_SetTerminationTime_response_callback_func_t callback,
    void * user_args);

globus_result_t
Blog_SetTerminationTime_epr_register(
    BlogService_client_handle_t handle,
    const wsa_EndpointReferenceType * epr,
    const wsrl_SetTerminationTimeType * SetTerminationTime,
    Blog_SetTerminationTime_response_callback_func_t callback,
    void * user_args);

globus_result_t
Blog_SetTerminationTime_register(
    BlogService_client_handle_t handle,
    const char * endpoint,
    const wsrl_SetTerminationTimeType * SetTerminationTime,
    Blog_SetTerminationTime_response_callback_func_t callback,
    void * user_args);


globus_result_t
Blog_SetTerminationTime_epr(
    BlogService_client_handle_t handle,
    const wsa_EndpointReferenceType * epr,
    const wsrl_SetTerminationTimeType * SetTerminationTime,
    wsrl_SetTerminationTimeResponseType * * SetTerminationTimeResponse,
    Blog_SetTerminationTime_fault_t * fault_type,
    xsd_any * * fault);

globus_result_t
Blog_SetTerminationTime(
    BlogService_client_handle_t handle,
    const char * endpoint,
    const wsrl_SetTerminationTimeType * SetTerminationTime,
    wsrl_SetTerminationTimeResponseType * * SetTerminationTimeResponse,
    Blog_SetTerminationTime_fault_t * fault_type,
    xsd_any * * fault);



/* type and function declarations for the Destroy operation */

typedef void (* Blog_Destroy_request_callback_func_t)(
    BlogService_client_handle_t handle,
    void * user_args,
    globus_result_t result);
 
globus_result_t
Blog_Destroy_epr_register_request(
    BlogService_client_handle_t handle,
    const wsa_EndpointReferenceType * epr,
    const wsrl_DestroyType * Destroy,
    Blog_Destroy_request_callback_func_t callback,
    void * user_args);

globus_result_t
Blog_Destroy_register_request(
    BlogService_client_handle_t handle,
    const char * endpoint,
    const wsrl_DestroyType * Destroy,
    Blog_Destroy_request_callback_func_t callback,
    void * user_args);

typedef void (* Blog_Destroy_response_callback_func_t)(
    BlogService_client_handle_t handle,
    void *                              user_args,
    globus_result_t                     result,
    const wsrl_DestroyResponseType * DestroyResponse,
    Blog_Destroy_fault_t fault_type,
    const xsd_any *                     fault);

globus_result_t
Blog_Destroy_register_response(
    BlogService_client_handle_t handle,
    Blog_Destroy_response_callback_func_t callback,
    void * user_args);

globus_result_t
Blog_Destroy_epr_register(
    BlogService_client_handle_t handle,
    const wsa_EndpointReferenceType * epr,
    const wsrl_DestroyType * Destroy,
    Blog_Destroy_response_callback_func_t callback,
    void * user_args);

globus_result_t
Blog_Destroy_register(
    BlogService_client_handle_t handle,
    const char * endpoint,
    const wsrl_DestroyType * Destroy,
    Blog_Destroy_response_callback_func_t callback,
    void * user_args);


globus_result_t
Blog_Destroy_epr(
    BlogService_client_handle_t handle,
    const wsa_EndpointReferenceType * epr,
    const wsrl_DestroyType * Destroy,
    wsrl_DestroyResponseType * * DestroyResponse,
    Blog_Destroy_fault_t * fault_type,
    xsd_any * * fault);

globus_result_t
Blog_Destroy(
    BlogService_client_handle_t handle,
    const char * endpoint,
    const wsrl_DestroyType * Destroy,
    wsrl_DestroyResponseType * * DestroyResponse,
    Blog_Destroy_fault_t * fault_type,
    xsd_any * * fault);



/* type and function declarations for the GetCurrentMessage operation */

typedef void (* Blog_GetCurrentMessage_request_callback_func_t)(
    BlogService_client_handle_t handle,
    void * user_args,
    globus_result_t result);
 
globus_result_t
Blog_GetCurrentMessage_epr_register_request(
    BlogService_client_handle_t handle,
    const wsa_EndpointReferenceType * epr,
    const wsnt_GetCurrentMessageType * GetCurrentMessage,
    Blog_GetCurrentMessage_request_callback_func_t callback,
    void * user_args);

globus_result_t
Blog_GetCurrentMessage_register_request(
    BlogService_client_handle_t handle,
    const char * endpoint,
    const wsnt_GetCurrentMessageType * GetCurrentMessage,
    Blog_GetCurrentMessage_request_callback_func_t callback,
    void * user_args);

typedef void (* Blog_GetCurrentMessage_response_callback_func_t)(
    BlogService_client_handle_t handle,
    void *                              user_args,
    globus_result_t                     result,
    const wsnt_GetCurrentMessageResponseType * GetCurrentMessageResponse,
    Blog_GetCurrentMessage_fault_t fault_type,
    const xsd_any *                     fault);

globus_result_t
Blog_GetCurrentMessage_register_response(
    BlogService_client_handle_t handle,
    Blog_GetCurrentMessage_response_callback_func_t callback,
    void * user_args);

globus_result_t
Blog_GetCurrentMessage_epr_register(
    BlogService_client_handle_t handle,
    const wsa_EndpointReferenceType * epr,
    const wsnt_GetCurrentMessageType * GetCurrentMessage,
    Blog_GetCurrentMessage_response_callback_func_t callback,
    void * user_args);

globus_result_t
Blog_GetCurrentMessage_register(
    BlogService_client_handle_t handle,
    const char * endpoint,
    const wsnt_GetCurrentMessageType * GetCurrentMessage,
    Blog_GetCurrentMessage_response_callback_func_t callback,
    void * user_args);


globus_result_t
Blog_GetCurrentMessage_epr(
    BlogService_client_handle_t handle,
    const wsa_EndpointReferenceType * epr,
    const wsnt_GetCurrentMessageType * GetCurrentMessage,
    wsnt_GetCurrentMessageResponseType * * GetCurrentMessageResponse,
    Blog_GetCurrentMessage_fault_t * fault_type,
    xsd_any * * fault);

globus_result_t
Blog_GetCurrentMessage(
    BlogService_client_handle_t handle,
    const char * endpoint,
    const wsnt_GetCurrentMessageType * GetCurrentMessage,
    wsnt_GetCurrentMessageResponseType * * GetCurrentMessageResponse,
    Blog_GetCurrentMessage_fault_t * fault_type,
    xsd_any * * fault);



/* type and function declarations for the Subscribe operation */

typedef void (* Blog_Subscribe_request_callback_func_t)(
    BlogService_client_handle_t handle,
    void * user_args,
    globus_result_t result);
 
globus_result_t
Blog_Subscribe_epr_register_request(
    BlogService_client_handle_t handle,
    const wsa_EndpointReferenceType * epr,
    const wsnt_SubscribeType * Subscribe,
    Blog_Subscribe_request_callback_func_t callback,
    void * user_args);

globus_result_t
Blog_Subscribe_register_request(
    BlogService_client_handle_t handle,
    const char * endpoint,
    const wsnt_SubscribeType * Subscribe,
    Blog_Subscribe_request_callback_func_t callback,
    void * user_args);

typedef void (* Blog_Subscribe_response_callback_func_t)(
    BlogService_client_handle_t handle,
    void *                              user_args,
    globus_result_t                     result,
    const wsnt_SubscribeResponseType * SubscribeResponse,
    Blog_Subscribe_fault_t fault_type,
    const xsd_any *                     fault);

globus_result_t
Blog_Subscribe_register_response(
    BlogService_client_handle_t handle,
    Blog_Subscribe_response_callback_func_t callback,
    void * user_args);

globus_result_t
Blog_Subscribe_epr_register(
    BlogService_client_handle_t handle,
    const wsa_EndpointReferenceType * epr,
    const wsnt_SubscribeType * Subscribe,
    Blog_Subscribe_response_callback_func_t callback,
    void * user_args);

globus_result_t
Blog_Subscribe_register(
    BlogService_client_handle_t handle,
    const char * endpoint,
    const wsnt_SubscribeType * Subscribe,
    Blog_Subscribe_response_callback_func_t callback,
    void * user_args);


globus_result_t
Blog_Subscribe_epr(
    BlogService_client_handle_t handle,
    const wsa_EndpointReferenceType * epr,
    const wsnt_SubscribeType * Subscribe,
    wsnt_SubscribeResponseType * * SubscribeResponse,
    Blog_Subscribe_fault_t * fault_type,
    xsd_any * * fault);

globus_result_t
Blog_Subscribe(
    BlogService_client_handle_t handle,
    const char * endpoint,
    const wsnt_SubscribeType * Subscribe,
    wsnt_SubscribeResponseType * * SubscribeResponse,
    Blog_Subscribe_fault_t * fault_type,
    xsd_any * * fault);



/* type and function declarations for the GetResourceProperty operation */

typedef void (* Blog_GetResourceProperty_request_callback_func_t)(
    BlogService_client_handle_t handle,
    void * user_args,
    globus_result_t result);
 
globus_result_t
Blog_GetResourceProperty_epr_register_request(
    BlogService_client_handle_t handle,
    const wsa_EndpointReferenceType * epr,
    const xsd_QName * GetResourceProperty,
    Blog_GetResourceProperty_request_callback_func_t callback,
    void * user_args);

globus_result_t
Blog_GetResourceProperty_register_request(
    BlogService_client_handle_t handle,
    const char * endpoint,
    const xsd_QName * GetResourceProperty,
    Blog_GetResourceProperty_request_callback_func_t callback,
    void * user_args);

typedef void (* Blog_GetResourceProperty_response_callback_func_t)(
    BlogService_client_handle_t handle,
    void *                              user_args,
    globus_result_t                     result,
    const wsrp_GetResourcePropertyResponseType * GetResourcePropertyResponse,
    Blog_GetResourceProperty_fault_t fault_type,
    const xsd_any *                     fault);

globus_result_t
Blog_GetResourceProperty_register_response(
    BlogService_client_handle_t handle,
    Blog_GetResourceProperty_response_callback_func_t callback,
    void * user_args);

globus_result_t
Blog_GetResourceProperty_epr_register(
    BlogService_client_handle_t handle,
    const wsa_EndpointReferenceType * epr,
    const xsd_QName * GetResourceProperty,
    Blog_GetResourceProperty_response_callback_func_t callback,
    void * user_args);

globus_result_t
Blog_GetResourceProperty_register(
    BlogService_client_handle_t handle,
    const char * endpoint,
    const xsd_QName * GetResourceProperty,
    Blog_GetResourceProperty_response_callback_func_t callback,
    void * user_args);


globus_result_t
Blog_GetResourceProperty_epr(
    BlogService_client_handle_t handle,
    const wsa_EndpointReferenceType * epr,
    const xsd_QName * GetResourceProperty,
    wsrp_GetResourcePropertyResponseType * * GetResourcePropertyResponse,
    Blog_GetResourceProperty_fault_t * fault_type,
    xsd_any * * fault);

globus_result_t
Blog_GetResourceProperty(
    BlogService_client_handle_t handle,
    const char * endpoint,
    const xsd_QName * GetResourceProperty,
    wsrp_GetResourcePropertyResponseType * * GetResourcePropertyResponse,
    Blog_GetResourceProperty_fault_t * fault_type,
    xsd_any * * fault);



/* type and function declarations for the addEntry operation */

typedef void (* Blog_addEntry_request_callback_func_t)(
    BlogService_client_handle_t handle,
    void * user_args,
    globus_result_t result);
 
globus_result_t
Blog_addEntry_epr_register_request(
    BlogService_client_handle_t handle,
    const wsa_EndpointReferenceType * epr,
    const addEntryType * addEntry,
    Blog_addEntry_request_callback_func_t callback,
    void * user_args);

globus_result_t
Blog_addEntry_register_request(
    BlogService_client_handle_t handle,
    const char * endpoint,
    const addEntryType * addEntry,
    Blog_addEntry_request_callback_func_t callback,
    void * user_args);

typedef void (* Blog_addEntry_response_callback_func_t)(
    BlogService_client_handle_t handle,
    void *                              user_args,
    globus_result_t                     result,
    const addEntryResponseType * addEntryResponse,
    Blog_addEntry_fault_t fault_type,
    const xsd_any *                     fault);

globus_result_t
Blog_addEntry_register_response(
    BlogService_client_handle_t handle,
    Blog_addEntry_response_callback_func_t callback,
    void * user_args);

globus_result_t
Blog_addEntry_epr_register(
    BlogService_client_handle_t handle,
    const wsa_EndpointReferenceType * epr,
    const addEntryType * addEntry,
    Blog_addEntry_response_callback_func_t callback,
    void * user_args);

globus_result_t
Blog_addEntry_register(
    BlogService_client_handle_t handle,
    const char * endpoint,
    const addEntryType * addEntry,
    Blog_addEntry_response_callback_func_t callback,
    void * user_args);


globus_result_t
Blog_addEntry_epr(
    BlogService_client_handle_t handle,
    const wsa_EndpointReferenceType * epr,
    const addEntryType * addEntry,
    addEntryResponseType * * addEntryResponse,
    Blog_addEntry_fault_t * fault_type,
    xsd_any * * fault);

globus_result_t
Blog_addEntry(
    BlogService_client_handle_t handle,
    const char * endpoint,
    const addEntryType * addEntry,
    addEntryResponseType * * addEntryResponse,
    Blog_addEntry_fault_t * fault_type,
    xsd_any * * fault);



/* type and function declarations for the createBlogTopic operation */

typedef void (* Blog_createBlogTopic_request_callback_func_t)(
    BlogService_client_handle_t handle,
    void * user_args,
    globus_result_t result);
 
globus_result_t
Blog_createBlogTopic_epr_register_request(
    BlogService_client_handle_t handle,
    const wsa_EndpointReferenceType * epr,
    const createBlogTopicType * createBlogTopic,
    Blog_createBlogTopic_request_callback_func_t callback,
    void * user_args);

globus_result_t
Blog_createBlogTopic_register_request(
    BlogService_client_handle_t handle,
    const char * endpoint,
    const createBlogTopicType * createBlogTopic,
    Blog_createBlogTopic_request_callback_func_t callback,
    void * user_args);

typedef void (* Blog_createBlogTopic_response_callback_func_t)(
    BlogService_client_handle_t handle,
    void *                              user_args,
    globus_result_t                     result,
    const createBlogTopicResponseType * createBlogTopicResponse,
    Blog_createBlogTopic_fault_t fault_type,
    const xsd_any *                     fault);

globus_result_t
Blog_createBlogTopic_register_response(
    BlogService_client_handle_t handle,
    Blog_createBlogTopic_response_callback_func_t callback,
    void * user_args);

globus_result_t
Blog_createBlogTopic_epr_register(
    BlogService_client_handle_t handle,
    const wsa_EndpointReferenceType * epr,
    const createBlogTopicType * createBlogTopic,
    Blog_createBlogTopic_response_callback_func_t callback,
    void * user_args);

globus_result_t
Blog_createBlogTopic_register(
    BlogService_client_handle_t handle,
    const char * endpoint,
    const createBlogTopicType * createBlogTopic,
    Blog_createBlogTopic_response_callback_func_t callback,
    void * user_args);


globus_result_t
Blog_createBlogTopic_epr(
    BlogService_client_handle_t handle,
    const wsa_EndpointReferenceType * epr,
    const createBlogTopicType * createBlogTopic,
    createBlogTopicResponseType * * createBlogTopicResponse,
    Blog_createBlogTopic_fault_t * fault_type,
    xsd_any * * fault);

globus_result_t
Blog_createBlogTopic(
    BlogService_client_handle_t handle,
    const char * endpoint,
    const createBlogTopicType * createBlogTopic,
    createBlogTopicResponseType * * createBlogTopicResponse,
    Blog_createBlogTopic_fault_t * fault_type,
    xsd_any * * fault);



globus_result_t
BlogService_client_init(
    BlogService_client_handle_t *  handle,
    globus_soap_message_attr_t attrs,
    globus_handler_chain_t handlers);

void
BlogService_client_destroy(
    BlogService_client_handle_t handle);

globus_result_t
BlogService_client_operation_cancel(
    BlogService_client_handle_t handle);

globus_result_t
BlogService_client_get_registry(
    BlogService_client_handle_t handle,
    globus_xsd_type_registry_t * registry);

globus_result_t
BlogService_client_get_handler_chain(
    BlogService_client_handle_t handle,
    globus_handler_chain_t * handlers);

globus_result_t
BlogService_client_attr_set(
    BlogService_client_handle_t handle,
    const char * prop_name,
    globus_soap_message_attr_copy_func_t copy,
    globus_soap_message_attr_destroy_func_t destroy,
    void * value);

void *
BlogService_client_attr_remove(
    BlogService_client_handle_t handle,
    const char * prop_name);

void *
BlogService_client_attr_get(
    BlogService_client_handle_t handle,
    const char * prop_name);

EXTERN_C_END

#endif
