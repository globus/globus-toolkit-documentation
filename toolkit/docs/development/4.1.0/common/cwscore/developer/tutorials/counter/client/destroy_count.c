#include "CounterService_client.h"
#include "globus_wsrf_core_tools.h"

void
ms_test_result(
    globus_result_t                     result)
{
    if(result != GLOBUS_SUCCESS)
    {
        printf("%s\n", globus_error_print_friendly(globus_error_get(result)));
        exit(1);
    }
}

int main(int argc, char * argv[])
{
    globus_result_t                     result = GLOBUS_SUCCESS;
    CounterService_client_handle_t      client_handle;
    globus_soap_message_handle_t        soap_handle;
    int                                 fault_type;
    xsd_any *                           fault;
    xsd_QName                           element_name;
    wsa_EndpointReferenceType *         epr;
    char *                              filename;
    wsrl_DestroyType                    destroy;
    wsrl_DestroyResponseType *          destroy_response;

    if(argc < 2)
    {
        fprintf(stderr, "usage: %s <filename> <int>\n", argv[0]);
        exit(1);
    }
    filename = argv[1];

    globus_module_activate(GLOBUS_SOAP_MESSAGE_MODULE);
    globus_module_activate(COUNTERSERVICE_MODULE);

    element_name.Namespace = "counter";
    element_name.local = "test";

    result = CounterService_client_init(&client_handle, NULL, NULL);
    ms_test_result(result);

    result = globus_soap_message_handle_init_from_file(
        &soap_handle,
        filename);
    ms_test_result(result);

    result = wsa_EndpointReferenceType_init(&epr);
    ms_test_result(result);

    result = wsa_EndpointReferenceType_deserialize(
        &element_name,
        epr,
        soap_handle,
        0);
    ms_test_result(result);
    globus_soap_message_handle_destroy(soap_handle);

    result = CounterPortType_Destroy_epr(
        client_handle,
        epr,
        &destroy,
        &destroy_response,
        (CounterPortType_Destroy_fault_t *)&fault_type,
         &fault);
    ms_test_result(result);
    CounterService_client_destroy(client_handle);

    globus_module_deactivate(COUNTERSERVICE_MODULE);
    unlink(filename);

    return 0;
}
