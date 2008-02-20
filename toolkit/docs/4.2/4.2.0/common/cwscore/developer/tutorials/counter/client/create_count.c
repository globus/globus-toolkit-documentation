/*
 *  Create a counter port type and serialize the EPR to a file
 */
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

int
main(
    int                                 argc,
    char *                              argv[])
{
    globus_result_t                     result = GLOBUS_SUCCESS;
    CounterService_client_handle_t      client_handle;
    globus_soap_message_handle_t        soap_handle;
    int                                 fault_type;
    counter_createCounterType           createCounter;
    counter_createCounterResponseType * createCounterResponse = NULL;
    xsd_any *                           fault;
    xsd_QName                           element_name;
    char *                              filename;

    if(argc < 3)
    {
        fprintf(stderr, "usage: %s <URL> <output file>\n", argv[0]);
        exit(1);
    }
    filename = argv[2];

    globus_module_activate(GLOBUS_SOAP_MESSAGE_MODULE);
    globus_module_activate(COUNTERSERVICE_MODULE);


    element_name.Namespace = "counter";
    element_name.local = "test";

    result = CounterService_client_init(&client_handle, NULL, NULL);
    ms_test_result(result);

    result = CounterPortType_createCounter(
        client_handle,
        argv[1],
        &createCounter,
        &createCounterResponse,
        (CounterPortType_createCounter_fault_t *)&fault_type,
        &fault);
    ms_test_result(result);

    result = globus_soap_message_handle_init_to_file(
        &soap_handle,
        filename,
        GLOBUS_XIO_FILE_CREAT);
    ms_test_result(result);

    result = wsa_EndpointReferenceType_serialize(
        &element_name,
        &createCounterResponse->EndpointReference,
        soap_handle,
        0);
    ms_test_result(result);

    globus_soap_message_handle_destroy(soap_handle);
    CounterService_client_destroy(client_handle);

    globus_module_deactivate(COUNTERSERVICE_MODULE);

    return 0;
}
