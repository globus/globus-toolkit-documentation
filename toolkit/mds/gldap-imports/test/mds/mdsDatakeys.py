attrb_keys = { 'mds-vo-op-name': 'Locally unique Op name', \
               'mds-vo-name': 'Locally unique VO name', \
               'mds-software-deployment': 'Locally unique deployment name', \
               'mds-service-ldap-cachettl': 'suggested cacheability', \
               'mds-service-ldap-sizelimit': 'suggested sizelimit', \
               'mds-service-ldap-suffix': 'DN suffix of service', \
               'mds-service-ldap-timeout': 'suggested timeout', \
               'mds-service-ldap-ttl': 'suggested ttl', \
               'mds-service-executable-pid': 'PID of main MDS process', \
               'mds-service-path': 'Path to MDS installation', \
               'mds-service-admin-comment': 'Administrator provided comment on service', \
               'mds-service-admin-contact': 'Administrator e-mail address', \
               'mds-service-hn': 'Service FQDN hostname', \
               'mds-service-port': 'Service TCP port', \
               'mds-service-protocol': 'Service protocol OID', \
               'mds-service-type': 'Service protocol', \
               'mds-service-url': 'Service URL', \
               'mds-os-name': 'Operating system name', \
               'mds-os-release': 'Operating system release', \
               'mds-os-version': 'Operating system version', \
               'mds-net-total-count': 'Total interface count', \
               'mds-net-addr': 'Network interface address', \
               'mds-net-mtub': 'Network interface maximum transmission unit (bytes)', \
               'mds-net-name': 'Network interface name', \
               'mds-net-netaddr': 'Network interface local network address', \
               'mds-memory-vm-total-freemb': 'Unallocated space (MB)', \
               'mds-memory-vm-total-sizemb': 'Installed space (MB)', \
               'mds-memory-vm-freemb': 'Unallocated space (MB)', \
               'mds-memory-vm-sizemb': 'Installed space (MB)', \
               'mds-memory-ram-total-freemb': 'Unallocated space (MB)', \
               'mds-memory-ram-total-sizemb': 'Installed space (MB)', \
               'mds-memory-ram-freemb': 'Unallocated space (MB)', \
               'mds-memory-ram-sizemb': 'Installed space (MB)', \
               'mds-host-node-group-name': 'Group name', \
               'mds-host-node-name': 'Node local name', \
               'mds-host-netnode-hn': 'Node FQDN', \
               'mds-host-hn': 'Host FQDN', \
               'mds-fs-total-count': 'Total filesystem count', \
               'mds-fs-total-freemb': 'Filesystem unallocated space (MB)', \
               'mds-fs-total-sizemb': 'Filesystem installed space (MB)', \
               'mds-fs-freemb': 'Filesystem unallocated space (MB)', \
               'mds-fs-mount': 'Filesystem mount point', \
               'mds-fs-sizemb': 'Filesystem installed space (MB)', \
               'mds-device-group-name': 'Locally unique device group name', \
               'mds-device-name': 'Locally unique device name', \
               'mds-cpu-total-free-15minx100': '15-minute avereage processor availability', \
               'mds-cpu-total-free-1minx100': '1-minute average processor availability', \
               'mds-cpu-total-free-5minx100': '5-minute average processor availability', \
               'mds-cpu-total-count': 'Total clustered CPU count', \
               'mds-cpu-smp-size': 'SMP processor count', \
               'mds-cpu-free-15minx100': '15-minute avereage processor availability', \
               'mds-cpu-free-1minx100': '1-minute average processor availability', \
               'mds-cpu-free-5minx100': '5-minute average processor availability', \
               'mds-cpu-cache-l1dkb': 'Level-1 data cache size (KB)', \
               'mds-cpu-cache-l1ikb': 'Level-1 instruction cache size (KB)', \
               'mds-cpu-cache-l1kb': 'Level-1 processor unified cache size (KB)', \
               'mds-cpu-cache-l2kb': 'Level-2 unified cache size (KB)', \
               'mds-cpu-features': 'Processor feature and option flags', \
               'mds-cpu-model': 'Processor model', \
               'mds-cpu-speedmhz': 'Processor clock speed (MHz)', \
               'mds-cpu-vendor': 'Processor vendor', \
               'mds-cpu-version': 'Processor version stepping', \
               'mds-computer-total-free-nodecount': 'free computing elements', \
               'mds-computer-total-nodecount': 'Number of computing elements', \
               'mds-computer-isa': 'Instruction Set Architecture', \
               'mds-computer-manufacturer': 'Manufacturer', \
               'mds-computer-platform': 'Platform type', \
               'mds-bind-method-servers': 'AUTHC-ONLY/AUTHC-FIRST/ANONYM-ONLY', \
               'mds-reg-status': 'VALID/INVALID/PURGED', \
               'mds-keepto': 'Object purge time', \
               'mds-validfrom': 'Object creation time', \
               'mds-validto': 'Object expiration time' }


attrb_keys_ed = { 'mds-vo-op-name': 'Locally unique Op name', \
               'mds-vo-name': 'Virtual organization name', \
               'mds-software-deployment': 'Software deployment name', \
               'mds-service-ldap-cachettl': 'Suggested cacheability', \
               'mds-service-ldap-sizelimit': 'Maximum LDAP result size', \
               'mds-service-ldap-suffix': 'DN suffix of service', \
               'mds-service-ldap-timeout': 'Maximum LDAP operation timeout', \
               'mds-service-ldap-ttl': 'suggested ttl', \
               'mds-service-executable-pid': 'PID of main MDS process', \
               'mds-service-path': 'Path to MDS installation', \
               'mds-service-admin-comment': 'Administrator provided comment on service', \
               'mds-service-admin-contact': 'Administrator e-mail address', \
               'mds-service-hn': 'Hostname', \
               'mds-service-port': 'TCP port used', \
               'mds-service-protocol': 'Service protocol version(s)', \
               'mds-service-type': 'Service protocol', \
               'mds-service-url': 'Service URL', \
               'mds-os-name': 'Operating system', \
               'mds-os-release': 'Operating system release', \
               'mds-os-version': 'Operating system version', \
               'mds-net-total-count': 'Network interfaces count', \
               'mds-net-addr': 'Network interface address', \
               'mds-net-mtub': 'Network interface maximum transmission unit (bytes)', \
               'mds-net-name': 'Network interface name', \
               'mds-net-netaddr': 'Network interface local network address', \
               'mds-memory-vm-total-freemb': 'Free virtual memory (MB)', \
               'mds-memory-vm-total-sizemb': 'Installed virtual memory (MB)', \
               'mds-memory-vm-freemb': 'Free virtual memory (MB)', \
               'mds-memory-vm-sizemb': 'Configured virtual memory (MB)', \
               'mds-memory-ram-total-freemb': 'Free RAM size (MB)', \
               'mds-memory-ram-total-sizemb': 'Installed RAM (MB)', \
               'mds-memory-ram-freemb': 'Free RAM (MB)', \
               'mds-memory-ram-sizemb': 'Configured RAM (MB)', \
               'mds-host-node-group-name': 'Local node group name', \
               'mds-host-node-name': 'Local node name', \
               'mds-host-netnode-hn': 'Node host name', \
               'mds-host-hn': 'Host name (FQDN)', \
               'mds-fs-total-count': 'Total filesystem count', \
               'mds-fs-total-freemb': 'Filesystem unallocated space (MB)', \
               'mds-fs-total-sizemb': 'Filesystem installed space (MB)', \
               'mds-fs-freemb': 'Filesystem unallocated space (MB)', \
               'mds-fs-mount': 'Filesystem mount point', \
               'mds-fs-sizemb': 'Filesystem installed space (MB)', \
               'mds-device-group-name': 'Device group name', \
               'mds-device-name': 'Device name', \
               'mds-cpu-total-free-15minx100': '15-minute average availability, all processors', \
               'mds-cpu-total-free-1minx100': '1-minute average availability, all processors', \
               'mds-cpu-total-free-5minx100': '5-minute average availability, all processors', \
               'mds-cpu-total-count': 'Total clustered CPU count', \
               'mds-cpu-smp-size': 'Shared memory processor count', \
               'mds-cpu-free-15minx100': '15-minute avereage SMP processor availability', \
               'mds-cpu-free-1minx100': '1-minute average SMP processor availability', \
               'mds-cpu-free-5minx100': '5-minute average SMP processor availability', \
               'mds-cpu-cache-l1dkb': 'Level-1 data cache size (KB)', \
               'mds-cpu-cache-l1ikb': 'Level-1 instruction cache size (KB)', \
               'mds-cpu-cache-l1kb': 'Level-1 processor unified cache size (KB)', \
               'mds-cpu-cache-l2kb': 'Level-2 unified cache size (KB)', \
               'mds-cpu-features': 'Processor feature and option flags', \
               'mds-cpu-model': 'Processor model', \
               'mds-cpu-speedmhz': 'Processor clock speed (MHz)', \
               'mds-cpu-vendor': 'Processor vendor', \
               'mds-cpu-version': 'Processor version', \
               'mds-computer-total-free-nodecount': 'Number of free computing elements', \
               'mds-computer-total-nodecount': 'Number of computing elements', \
               'mds-computer-isa': 'Instruction Set Architecture', \
               'mds-computer-manufacturer': 'Manufacturer', \
               'mds-computer-platform': 'Platform type', \
               'mds-bind-method-servers': 'AUTHC-ONLY/AUTHC-FIRST/ANONYM-ONLY', \
               'mds-reg-status': 'VALID/INVALID/PURGED', \
               'mds-keepto': 'Object purge time', \
               'mds-validfrom': 'Object creation time', \
               'mds-validto': 'Object expiration time' }

attrb_keys_abbr = { 'mds-vo-op-name': 'Op name', \
                    'mds-vo-name': 'VO name', \
                    'mds-software-deployment': 'Deployment', \
                    'mds-service-ldap-cachettl': 'Cacheability', \
                    'mds-service-ldap-sizelimit': 'LDAP size', \
                    'mds-service-ldap-suffix': 'DN suffix', \
                    'mds-service-ldap-timeout': 'LDAP timeout', \
                    'mds-service-ldap-ttl': 'TTL', \
                    'mds-service-executable-pid': 'PID', \
                    'mds-service-path': 'MDS Path', \
                    'mds-service-admin-comment': 'Comment', \
                    'mds-service-admin-contact': 'Admin. e-mail', \
                    'mds-service-hn': 'Host', \
                    'mds-service-port': 'Port', \
                    'mds-service-protocol': 'Protocol version', \
                    'mds-service-type': 'Protocol', \
                    'mds-service-url': 'Service URL', \
                    'mds-os-name': 'OS', \
                    'mds-os-release': 'OS release', \
                    'mds-os-version': 'OS version', \
                    'mds-net-total-count': 'Net. interf. count', \
                    'mds-net-addr': 'Interface address', \
                    'mds-net-mtub': 'Maximum trans unit (bytes)', \
                    'mds-net-name': 'Net. interface', \
                    'mds-net-netaddr': 'Net. interface net. address', \
                    'mds-memory-vm-total-freemb': 'Free total VM (MB)', \
                    'mds-memory-vm-total-sizemb': 'VM (MB)', \
                    'mds-memory-vm-freemb': 'Free VM (MB)', \
                    'mds-memory-vm-sizemb': 'VM size (MB)', \
                    'mds-memory-ram-total-freemb': 'Free total RAM(MB)', \
                    'mds-memory-ram-total-sizemb': 'RAM (MB)', \
                    'mds-memory-ram-freemb': 'Free RAM (MB)', \
                    'mds-memory-ram-sizemb': 'RAM size (MB)', \
                    'mds-host-node-group-name': 'Node grp. name', \
                    'mds-host-node-name': 'Node name', \
                    'mds-host-netnode-hn': 'Node host name', \
                    'mds-host-hn': 'Host (FQDN)', \
                    'mds-fs-total-count': 'FS count', \
                    'mds-fs-total-freemb': 'FS total free (MB)', \
                    'mds-fs-total-sizemb': 'FS total size (MB)', \
                    'mds-fs-freemb': 'FS free (MB)', \
                    'mds-fs-mount': 'Mount pt.', \
                    'mds-fs-sizemb': 'FS size (MB)', \
                    'mds-device-group-name': 'Device grp. name', \
                    'mds-device-name': 'Device name', \
                    'mds-cpu-total-free-15minx100': '15-min avr avail, all proc', \
                    'mds-cpu-total-free-1minx100': '1-min avr avail, all proc', \
                    'mds-cpu-total-free-5minx100': '5-min avr avail, all proc', \
                    'mds-cpu-total-count': 'Num. CPU', \
                    'mds-cpu-smp-size': 'SMO count', \
                    'mds-cpu-free-15minx100': '15-min avr SMP proc avail', \
                    'mds-cpu-free-1minx100': '1-min avr SMP proc avail', \
                    'mds-cpu-free-5minx100': '5-min avr SMP proc avail', \
                    'mds-cpu-cache-l1dkb': 'Level-1 data cache (KB)', \
                    'mds-cpu-cache-l1ikb': 'Level-1 instr. cache (KB)', \
                    'mds-cpu-cache-l1kb': 'Level-1 proc unified cache (KB)', \
                    'mds-cpu-cache-l2kb': 'Level-2 unified cache (KB)', \
                    'mds-cpu-features': 'Proc. features', \
                    'mds-cpu-model': 'Proc. model', \
                    'mds-cpu-speedmhz': 'Clock speed', \
                    'mds-cpu-vendor': 'Proc. vendor', \
                    'mds-cpu-version': 'Proc. version', \
                    'mds-computer-total-free-nodecount': 'Comp. elem.', \
                    'mds-computer-total-nodecount': 'Num. comp. elem.', \
                    'mds-computer-isa': 'ISA', \
                    'mds-computer-manufacturer': 'Manufacturer', \
                    'mds-computer-platform': 'Platform', \
                    'mds-bind-method-servers': 'AUTHC-ONLY/AUTHC-FIRST/ANONYM-ONLY', \
                    'mds-reg-status': 'VALID/INVALID/PURGED', \
                    'mds-keepto': 'Purge time', \
                    'mds-validfrom': 'Creation time', \
                    'mds-validto': 'Expiration time' }

obj_keys = { 'MdsVoOp': 'Vo Op', \
             'MdsVo': 'Vo', \
             'MdsSoftware': 'Software', \
             'MdsServiceLdap': 'Service Ldap', \
             'MdsService': 'Service', \
             'MdsOs': 'Os', \
             'MdsNetTotal': 'Net Total', \
             'MdsNet': 'Net', \
             'MdsMemoryVmTotal': 'Memory Vm-Total', \
             'MdsMemoryVm': 'Memory Vm', \
             'MdsMemoryRamTotal': 'Memory Ram-Total', \
             'MdsMemoryRam': 'Memory Ram', \
             'MdsHostNodeGroup': 'Host Node-Group', \
             'MdsHostNode': 'Host Node', \
             'MdsHostNetNode': 'Host Net-Node', \
             'MdsHost': 'Host', \
             'MdsFsTotal': 'Fs Total', \
             'MdsFs': 'Fs', \
             'MdsDeviceGroup': 'Device Group', \
             'MdsDevice': 'Device', \
             'MdsCpuTotalFree': 'Cpu Total-Free', \
             'MdsCpuTotal': 'Cpu Total', \
             'MdsCpuSmp': 'Cpu Smp', \
             'MdsCpuFree': 'Cpu Free', \
             'MdsCpuCache': 'Cpu Cache', \
             'MdsCpu': 'Cpu', \
             'MdsComputerTotalFree': 'Computer Total-Free', \
             'MdsComputerTotal': 'Computer Total', \
             'MdsComputer': 'Computer', \
             'Mds': 'Mds', \
             'GlobusStub': 'Globus Stub' }


struct_elem = [ 'Mds-Host-hn', \
                'Mds-Device-Group-name=processors', \
                'Mds-Device-Group-name=memory', \
                'Mds-Device-Group-name=filesystems', \
                'Mds-Device-Group-name=network interfaces', \
                'Mds-Software-deployment=operating system', \
                'Mds-Software-deployment=MDS' ]

# the 'ignore' list can be used as a filter;
# add attribute names to skip output
#
# keep as lower case in case there
# is a spelling error in the schema

ignore_none = ['NONE']

ignore_object_time = ['mds-keepto', 'mds-validfrom', 'mds-validto']

ignore_local_names = ['mds-device-name', 'mds-device-group-name', 'mds-software-deployment', 'mds-vo-name']

# the 'allow' list can be used as a filter,
# searching for attributes to be included
# in the output;
# this option makes it possible to refine
# table headers; that is, information on
# colspan and rowspan can be included and
# parsed by the receiving script
#
# keep as lower case in case there
# is a spelling error in the schema
#

top_level_arch = ['mds-computer-isa', 'mds-computer-platform', 'mds-computer-total-nodecount']
top_level_cpu  = ['mds-cpu-total-count', 'mds-cpu-model', 'mds-cpu-speedmhz']
top_level_mem  = ['mds-memory-ram-total-sizemb', 'mds-memory-vm-total-freemb']
top_level_fs   = ['mds-fs-total-count', 'mds-fs-total-sizemb']
top_level_os   = ['mds-os-name', 'mds-os-release']  

# join list of basic components to one list
allow_top_level = top_level_arch + top_level_cpu + top_level_mem + top_level_fs + top_level_os


# for tables that show more than one host and spread hosts vertically and host data horizontally,
# you must define an order of fields since it is not guaranteed that the query output order
# is the same for every host
# the order list will be registered with the parser and inserted into the output with a header;
# sorting must be done by the script that handles output to client;
# the names in the order dictionary must match the attribute keys list used by the parser
top_level_order = [attrb_keys_abbr['mds-computer-isa'] + '=0.0', \
                   attrb_keys_abbr['mds-computer-platform'] + '=0.1', \
                   attrb_keys_abbr['mds-computer-total-nodecount'] + '=0.2', \
                   attrb_keys_abbr['mds-cpu-total-count'] + '=0.3', \
                   attrb_keys_abbr['mds-cpu-model'] + '=0.4', \
                   attrb_keys_abbr['mds-cpu-speedmhz'] + '=0.5', \
                   attrb_keys_abbr['mds-memory-ram-total-sizemb'] + '=0.6', \
                   attrb_keys_abbr['mds-memory-vm-total-freemb'] + '=0.7', \
                   attrb_keys_abbr['mds-fs-total-count'] + '=0.8', \
                   attrb_keys_abbr['mds-fs-total-sizemb'] + '=0.9', \
                   attrb_keys_abbr['mds-os-name'] + '=1.0', \
                   attrb_keys_abbr['mds-os-release'] + '=1.1']





