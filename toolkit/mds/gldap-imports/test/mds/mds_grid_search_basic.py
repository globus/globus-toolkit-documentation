#!/usr/bin/python

# ---------------------------------------------------- #
# script: mds.grid_search_basic.py                     #
#                                                      #
# a cgi script that queries a GIIS and returns the     #
# query result as a structured data file               #
#                                                      #
# the script assumes form data input to be single      #
# values not list data; list data (queries to more     #
# than one host, for example) should be parsed before  #
# submission to this script and wrapped into a single  #
# string separated by a delimiter (see data_delim)     #
#                                                      #
# the script needs to Python modules to run:           #
#                                                      #
#    mdsDatakeys.py and mdsParser.py                   #
#                                                      #
# both should be located in the same directory         #
#                                                      #
# mdsDatakeys.py provides datastructure for parsing    #
# and formatting GIIS input data                       #
#                                                      #
# mdsParser.py does the actual parsing of GIIS data;   #
# to limit data output to the client, filters that     #
# restrict or allow mds elements can be registered     #
# with the parser                                      #
#                                                      #
# author: Wolfgang Freis                               #
#         ASCI Flash Center                            #
#         freis@flash.uchicago.edu                     #
#                                                      #
# ---------------------------------------------------- #


import cgi
import types
import string
from os import popen, putenv
from re import split, match

import mdsDatakeys
import mdsParser

input      = ""
parse_file = []
output     = []
data_delim = '::'

giis    = "gin.asci.uchicago.edu"
vo_name = "asci.uchicago"

# cgi values: 'NONE' is default value in order to have some
# string value associated with form_data rather than Python's 'None';
# 'NONE' is easier to handle; all queries should submit 'NONE' rather
# no value
form_data = { 'host': 'NONE', 'filter': 'NONE', 'element': 'NONE' }

def filter_allowed_attributes(allowed_attributes, all_attributes):
    '''eliminates a list of attributes sought from complete attribute list and registers it as the filter'''
    to_ignore = all_attributes
    i = 0
    while i < len(to_ignore):
        if to_ignore[i] in allowed_attributes:
            to_ignore.remove(to_ignore[i])
            continue
        i = i + 1
    if len(to_ignore) == 0:
        to_ignore = ('NONE')
    return to_ignore
        
def open_pipe(execute_string):
    q = popen(execute)
    input = q.read()
    return input

# =============== start execution =============== #

# extract form data
# all form data should be in form of a string;
# list request must be data delimited by 'data_delim'
form = cgi.FieldStorage()
for f_key in form_data.keys():
    if form.has_key(f_key) and form[f_key] != None:
            form_data[f_key] = form.getvalue(f_key)

# =============== register filters with parser =============== #

# register parser filters
if form_data['filter'] == "NONE":
     mdsParser.filter = mdsDatakeys.ignore_none
elif form_data['filter'] == "1":
    mdsParser.filter = mdsDatakeys.ignore_object_time
elif form_data['filter'] == "2":
    mdsParser.filter = mdsDatakeys.ignore_local_names
elif form_data['filter'] == "3":
    mdsParser.filter = mdsDatakeys.ignore_object_time + mdsDatakeys.ignore_local_names
elif form_data['filter'] == "top_level":
    mdsParser.filter = filter_allowed_attributes(mdsDatakeys.allow_top_level, mdsDatakeys.attrb_keys.keys())
    mdsParser.elem_order = string.join(mdsDatakeys.top_level_order, data_delim)
else:
    mdsParser.filter = mdsDatakeys.ignore_none

# register object keys
mdsParser.mds_objs  = mdsDatakeys.obj_keys.keys()

# register attribute keys
if form_data['filter'] == "NONE":
    mdsParser.att_keys = mdsDatakeys.attrb_keys
elif form_data['filter'] == "top_level":
    mdsParser.att_keys = mdsDatakeys.attrb_keys_abbr
else:
    mdsParser.att_keys = mdsDatakeys.attrb_keys_ed

# register Mds elements to include
if form_data['filter'] == 'top_level':
    mdsParser.mds_elem_include.append('Mds-Host-hn') # only Mds host element
elif form_data['element'] != 'NONE':
    temp = []
    temp = split(data_delim, form_data['element'])
    for i in temp:
        mdsParser.mds_elem_include.append(mdsDatakeys.struct_elem[int(i)])
else:
    mdsParser.mds_elem_include = mdsDatakeys.struct_elem # all Mds structural elements

# since mdsDatakeys.struct_elem is referenced by mdsParser.mds_elem_include,
# we need to send a copy to the allowed-attrib filter
temp = []
for i in range(len(mdsDatakeys.struct_elem)):
    temp.append(mdsDatakeys.struct_elem[i])
mdsParser.mds_elem_skip = filter_allowed_attributes(mdsParser.mds_elem_include, temp)

# =============== issue mds query =============== #

putenv('GLOBUS_LOCATION', '/usr/globus')

temp_data = split(data_delim, form_data['host'])

if 'ALL' in temp_data:
    execute = "grid-info-search -x -h " + giis + " -b Mds-vo-name=" + vo_name + ",o=grid"
    input = open_pipe(execute)
    parse_file = split("\n", input)
    output = mdsParser.parseInput(parse_file)
    if len(output) <= 1:
        output.append("#ERROR\nCannot process query: GIIS is not available.")
else:
    for i in range(len(temp_data)):
        execute = "grid-info-search -x -h " + temp_data[i] + " -b Mds-vo-name=local,o=grid" 
        input = open_pipe(execute)
        parse_file = split("\n", input)
        temp = mdsParser.parseInput(parse_file)
        if len(temp) <= 1:
            output.append("#ERROR\nCannot process query: \'" + temp_data[i] + "\' is unavailable or not a registered host.\n")
        else:
            for ii in range(len(temp)):
                output.append(temp[ii])

# =============== send returned =============== #

print "Content-type: text/html\n\n"

if len(output) > 0:
    for i in range(len(output)):
        print output[i]
else:
    pass
#        print "#ERROR\nCannot process query: \'" + form_data['host'] + "\' is not a registered host.\n"





















