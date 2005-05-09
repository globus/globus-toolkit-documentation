#!/usr/bin/python

# -------------------------------------------------- #
#                                                    #
# script: mdsParser.py                               #
#                                                    #
# script to run as a parser module for               #
#                                                    #
#    mds_grid_search_basic.py                        #
#                                                    #
# the query script registers filters with the        #
# parser and calls function parseInput() and         #
# and passes it the returned query data              #
#                                                    #
# author: Wolfgang Freis                             #
#         ASCI Flash Center                          #
#         freis@flash.uchicago.edu                   #
#                                                    #
# -------------------------------------------------- #

import string
from re import split, match

# lists to be registered by driving script
mds_objs  = []
filter    = []
att_keys  = []
mds_elem_include  = []
mds_elem_skip     = []
elem_order        = None 

# character sequences to start/end output parsing
obj_seq       = 'dn: ' # distinguished name identifier that start object/attribute sequence
att_seq       = 'Mds-' # 
start_seq     = 'Mds-Host-hn' # identifies a new host; MUST be the same as hostname element in mdsDatakeys.struct_elem
div_seq       = 'Mds-Device-Group-name' # header for group of objects
end_seq       = 'Mds-Vo-name=' # last object in output

pause_seq     = 'Z#a_X' # some non-matching string

data_sep      = ":\s*" # separates data id from value
comment       = "#"

# headers and delimiters for output data
data_delim    = "::"
table_header  = "#TABLE"
table_key     = "#KEYS"
div_header    = "#DIVHEADER"
sect_header   = "#HEADER"
data_header   = "#DATA"
no_data       = "(n.a.)"

has_t_header   = 0 # global flag to check if table header was appended

# -------------------------- functions ------------------------ #

# this function is put here to make it globally accessible
def is_ignored(str_in, in_filter):
    'function to check whether an Mds attribute is to ignored'
    if str_in.lower() in in_filter:
        return 1
    else:
        return 0

def is_match(string_in, init_seq, elem_list):
    'tests the beginning of an input string, it it matches, a new state is reached'
    for i in range(len(elem_list)):
        if string_in.startswith(init_seq + elem_list[i]):
            return 1
    return 0

def append_table_header(out_tuple, t_header, h_string, t_key, order_seq):
    out_tuple.append(t_header)
    out_tuple.append(h_string)
    global has_t_header
    has_t_header = 1
    if order_seq != None:
        out_tuple.append(t_key)
        out_tuple.append(order_seq)

def parseInput(input):
	output       = []
	printing     = 0
        print_paused = 0
        is_header    = 0

	for i in range(len(input)):
		if match("\w", input[i]) == None:
			continue
		temp = []

		if input[i].startswith(obj_seq):
                    temp = [start_seq] # isMatch needs a sequence as arg 3
                    if is_match(input[i], obj_seq, temp) and (start_seq not in mds_elem_include):
                        temp = split("=", input[i])
                        temp = split(",", temp[1])
                        append_table_header(output, table_header, temp[0], table_key, elem_order)

                    if is_match(input[i], obj_seq, mds_elem_include):
                        printing = 1 # start of object/attribute sequence
                        print_paused = 0
                    elif is_match(input[i], obj_seq, mds_elem_skip):
                        printing = 0
                        print_paused = 1
                    elif input[i].startswith(obj_seq + end_seq):
                        break
                if print_paused:
                    continue
		elif printing:
                    if input[i].startswith(comment):
                        continue
                    if input[i].startswith(obj_seq): # searching for 'dn: '
                        is_header = 1
                        temp = input[i][len(obj_seq):input[i].index(',')]
                        temp = split("=", temp)
                        if temp[0] == start_seq:
                            append_table_header(output, table_header, temp[1], table_key, elem_order)
                        elif temp[0] == div_seq:
                            output.append(div_header)
                            output.append(temp[1].capitalize())
                        elif  temp[0] != "": # and not is_ignored(temp[0], filter):
                            output.append(sect_header)
                            output.append(temp[1].capitalize())
                    elif input[i].startswith(att_seq): # searching for 'Mds-...'
                        if is_header == 1:
                            output.append(data_header)
                            is_header = 0
                        temp = split(data_sep, input[i])
                        if  temp[0] == "" or is_ignored(temp[0], filter):
                            continue
                        #print temp[0] + "\n\t" + temp[1]
                        if temp[1] == "" or temp[1] == None:
                            temp[1] = no_data
                        output.append(att_keys[temp[0].lower()] + data_delim +  temp[1])
	return output









