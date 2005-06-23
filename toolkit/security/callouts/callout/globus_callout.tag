<?xml version='1.0' encoding='ISO-8859-1' standalone='yes'?>
<tagfile>
  <compound kind="page">
    <name>main</name>
    <title>Globus Callout API</title>
    <filename>main</filename>
  </compound>
  <compound kind="group">
    <name>globus_callout_activation</name>
    <title>Activation</title>
    <filename>group__globus__callout__activation.html</filename>
    <member kind="define">
      <type>#define</type>
      <name>GLOBUS_CALLOUT_MODULE</name>
      <anchor>ga0</anchor>
      <arglist></arglist>
    </member>
  </compound>
  <compound kind="group">
    <name>globus_callout_handle</name>
    <title>Callout Handle Operations</title>
    <filename>group__globus__callout__handle.html</filename>
    <member kind="function">
      <type>globus_result_t</type>
      <name>globus_callout_handle_init</name>
      <anchor>ga1</anchor>
      <arglist>(globus_callout_handle_t *handle)</arglist>
    </member>
    <member kind="function">
      <type>globus_result_t</type>
      <name>globus_callout_handle_destroy</name>
      <anchor>ga2</anchor>
      <arglist>(globus_callout_handle_t handle)</arglist>
    </member>
    <member kind="typedef">
      <type>globus_i_callout_handle_s *</type>
      <name>globus_callout_handle_t</name>
      <anchor>ga0</anchor>
      <arglist></arglist>
    </member>
  </compound>
  <compound kind="group">
    <name>globus_callout_config</name>
    <title>Callout Configuration</title>
    <filename>group__globus__callout__config.html</filename>
    <member kind="function">
      <type>globus_result_t</type>
      <name>globus_callout_read_config</name>
      <anchor>ga0</anchor>
      <arglist>(globus_callout_handle_t handle, char *filename)</arglist>
    </member>
    <member kind="function">
      <type>globus_result_t</type>
      <name>globus_callout_register</name>
      <anchor>ga1</anchor>
      <arglist>(globus_callout_handle_t handle, char *type, char *library, char *symbol)</arglist>
    </member>
  </compound>
  <compound kind="group">
    <name>globus_callout_call</name>
    <title>Callout Invocation</title>
    <filename>group__globus__callout__call.html</filename>
    <member kind="function">
      <type>globus_result_t</type>
      <name>globus_callout_call_type</name>
      <anchor>ga1</anchor>
      <arglist>(globus_callout_handle_t handle, char *type,...)</arglist>
    </member>
    <member kind="typedef">
      <type>globus_result_t(*</type>
      <name>globus_callout_function_t</name>
      <anchor>ga0</anchor>
      <arglist>)(va_list ap)</arglist>
    </member>
  </compound>
  <compound kind="group">
    <name>globus_callout_constants</name>
    <title>Globus Callout Constants</title>
    <filename>group__globus__callout__constants.html</filename>
    <member kind="enumeration">
      <name>globus_callout_error_t</name>
      <anchor>ga0</anchor>
      <arglist></arglist>
    </member>
    <member kind="enumvalue">
      <name>GLOBUS_CALLOUT_ERROR_SUCCESS</name>
      <anchor>gga0a0</anchor>
      <arglist></arglist>
    </member>
    <member kind="enumvalue">
      <name>GLOBUS_CALLOUT_ERROR_WITH_HASHTABLE</name>
      <anchor>gga0a1</anchor>
      <arglist></arglist>
    </member>
    <member kind="enumvalue">
      <name>GLOBUS_CALLOUT_ERROR_OPENING_CONF_FILE</name>
      <anchor>gga0a2</anchor>
      <arglist></arglist>
    </member>
    <member kind="enumvalue">
      <name>GLOBUS_CALLOUT_ERROR_PARSING_CONF_FILE</name>
      <anchor>gga0a3</anchor>
      <arglist></arglist>
    </member>
    <member kind="enumvalue">
      <name>GLOBUS_CALLOUT_ERROR_WITH_DL</name>
      <anchor>gga0a4</anchor>
      <arglist></arglist>
    </member>
    <member kind="enumvalue">
      <name>GLOBUS_CALLOUT_ERROR_OUT_OF_MEMORY</name>
      <anchor>gga0a5</anchor>
      <arglist></arglist>
    </member>
    <member kind="enumvalue">
      <name>GLOBUS_CALLOUT_ERROR_TYPE_NOT_REGISTERED</name>
      <anchor>gga0a6</anchor>
      <arglist></arglist>
    </member>
    <member kind="enumvalue">
      <name>GLOBUS_CALLOUT_ERROR_CALLOUT_ERROR</name>
      <anchor>gga0a7</anchor>
      <arglist></arglist>
    </member>
    <member kind="enumvalue">
      <name>GLOBUS_CALLOUT_ERROR_LAST</name>
      <anchor>gga0a8</anchor>
      <arglist></arglist>
    </member>
  </compound>
</tagfile>
