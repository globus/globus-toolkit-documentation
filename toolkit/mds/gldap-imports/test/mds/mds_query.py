#!/opt/bin/python

# ------------------------------------------------- #
# Script: mds_query.py                              #
#                                                   #
# this script process a cgi request and forwards it #
# to another Python cgi script that queries a       #
# MDS-GIIS                                          #
#                                                   #
# for a 'basic' table output of available hosts,    #
# no cgi form data input is required; the script    #
# only needs to be invoked.                         # 
#                                                   #
# author: Wolfgang Freis                            #
#         ASCI Flash Center                         #
#         freis@flash.uchicago.edu                  #
# ------------------------------------------------- #

import urllib
import re
import string
import os
import cgi
import types

giis        = ('giis.globus.org')
hosts       = ('dc-user.isi.edu', 'giis.globus.org')
form_data   = { 'host': 'NONE', 'filter': 'NONE', 'element': 'NONE' }
local_script= "mds_query.py" # name of this script

input       = ""   # returned query
output      = []   # returned query split into lines

data_delim  = "::" # delimiter of name/value pairs of data
table_count = 0    # "TABLE" headers returned with query;
		   # table_count == number of hosts queried
has_th      = 0    # flag to make sure that table header in 'basic'
		   # is constructed only once

t_output    = "general" # general or basic
key_order   = {}        # dictionary of order for 'basic' table
data_keys   = {}

# data headers in hierarchical order
t_header    = "#TABLE"
t_keys      = "#KEYS"
div_header  = "#DIVHEADER"
h_header    = "#HEADER"
d_header    = "#DATA"
e_header    = "#ERROR"

# state variables to keep track of position in returned query
# 'table' indicates new set of host data
# 'div'   indicates new division in host data
# 'head'  indicates new section in division
# 'data'  name/value paris to follow
state       = { 'table': 0, 'keys': 0, 'div': 0, 'head': 0, 'data': 0, 'error': 0}

error_list  = [] # container for error messages

table_start = "<table border=\"1\" width=\"70%\" align=\"center\">"
table_end   = "</table>\n<br clear=\"all\" />\n" 
caption_id  = "Host Statistics from "

style       = """
<style type="text/css">

th          { vertical-align: top; }
tr, td      { vertical-align: top; }
th.main     { background-color: rgb(128, 0, 0); text-align: center; color: rgb(255, 255, 255); }
th.div      { background-color: rgb(176, 196, 222); text-align: center; }
th.head     { background-color: rgb(255, 222, 173); text-align: center;}
.h_column   { background-color: rgb(235, 235, 235); }
.clear      { background-color: rgb(255, 250, 240); }
.shaded     { background-color: rgb(255, 255, 224); }
.lt	    { text-align: left; vertical-align: top }
.ct	    { text-align: center; vertical-align: top }

</style>
"""

page_start= """
<html>
<head>
<title>Computing Resources</title>""" + style + """
</head>
<body style="background: rgb(255, 255, 255)">
<br />
<h2 class='ct'>Computing Resources</h2>
<br />
"""

page_end = """
</body>
</html>"""


# -------------------- functions -------------------------- #

def set_state(state_key):
	for i in state.keys():
		state[i] = 0
	if state_key != "NONE":
		state[state_key] = 1


# extract form data
form     = cgi.FieldStorage()
for f_key in form_data.keys():
    if form.has_key(f_key) and form[f_key] != None: 
	if isinstance(form[f_key], types.ListType):
		temp_data = form.getvalue(f_key)
		temp = ""
		for data in temp_data:
			temp = temp + data + data_delim
		temp = temp[0:(len(temp)-len(data_delim))]
		form_data[f_key] = temp
	else:
	        form_data[f_key] = form.getvalue(f_key)

if form_data['host'] == "NONE" and form_data['filter'] == 'NONE':
	form_data['host'] = data_delim.join(hosts) # make request to all hosts to force look-up
	form_data['filter'] = 'top_level'
	t_output = 'basic'


cgi_script = "/cgi-bin/dev/mds_grid_search_basic.py?host=" + form_data['host'] + "&filter=" + form_data['filter'] + "&element=" + form_data['element']
page  = urllib.urlopen("http://gin.asci.uchicago.edu" + cgi_script)

input = page.read()

output = re.split("\n", input)

print "Content-type: text/html\n\n"
print page_start

if t_output == 'general':  # simple table of name/value columns
	for i in range(len(output)):
		# first set state of output
		if output[i].startswith(t_header):
			set_state("table")
			table_count = table_count  + 1
			continue
		elif output[i].startswith(t_keys):
			set_state('keys')
			continue
		elif output[i].startswith(div_header):
			set_state('div')
			continue
		elif output[i].startswith(h_header):
			set_state('head')
			continue
		elif output[i].startswith(d_header):
			set_state('data')
			continue
		elif output[i].startswith(e_header):
			set_state('error')
			continue

		if output[i] == "" or output[i].startswith("#"):
			pass
		elif state['table']:
			if table_count == 1:
				print table_start	
			else:
				print "<tr class=\"lt\"><td colspan=\"2\">&nbsp;</td></tr>"

			print "<tr class=\"ct\"><th class=\"main\" colspan=\"2\">" + caption_id + output[i] + "</th></tr>"
		elif state['keys']:
			continue
		elif state['div']:
			print "<tr class=\"ct\"><th colspan=\"2\" class=\"div\">" + output[i] + "</th></tr>"
		elif state['head']:
			print "<tr class=\"ct\"><th colspan=\"2\" class=\"head\">" + output[i] + "</th></tr>"
		elif state['data']:
			temp = re.split(data_delim, output[i])
			print "<tr class=\"lt\"><td>" + temp[0] + "</td><td>" + temp[1] + "</td></tr>"
		elif state['error']:
			error_list.append(output[i])

else: # t_output == 'basic'
	th = [table_start, "<tr class=\"ct\">", "<th class=\"div\">Host</th>"]
	td = []
	table_data = []
	for i in range(len(output)):

		# first set state of output
		if output[i].startswith(t_header):
			set_state("table")
			table_count = table_count  + 1
			if table_count > 1:
				temp = key_order.keys()
				temp.sort()
				for key in temp:
					td.append("<td>" + data_keys[key_order[key]] + "</td>")
			continue
		elif output[i].startswith(t_keys):
			set_state('keys')
			if table_count == 1: # set up dictionaries w. first table
				temp = re.split(data_delim, output[i+1]) # parse the next input line

				for ii in range(len(temp)):
					new_temp = re.split('=', temp[ii])
					key_order.update({new_temp[1]: new_temp[0]})
					data_keys.update({new_temp[0]: ''})
			continue
		elif output[i].startswith(div_header):
			set_state('div')
			continue
		elif output[i].startswith(h_header):
			set_state('head')
			continue
		elif output[i].startswith(d_header):
			set_state('data')
			continue
		elif output[i].startswith(e_header):
			set_state('error')
			continue

		if output[i] == "" or output[i].startswith("#"):
			continue
		elif state['table']:
			if table_count > 1:
				print
				td.append("</tr>\n")	
			td.append("<tr class=\"lt\" >\n<td class=\"h_column\"><a href=\"http://flash.uchicago.edu/cgi-bin/" + local_script + "?host=" + output[i] + "&filter=3\">")
			td.append(output[i] + "</a></td>")	
		elif state['div']:
			pass
		elif state['head']:
			pass
		elif state['data']:
			temp = re.split(data_delim, output[i])
			if table_count == 1 and not has_th:
				new_temp = key_order.keys()
				new_temp.sort()
				for key in new_temp:
					th.append("<th class=\"div\">" + key_order[key] + "</th>")
				has_th = 1
				th.append("</tr>")
			data_keys[temp[0]] = temp[1]
		elif state['error']:
			error_list.append(output[i])

	# process last td
	temp = key_order.keys()
	temp.sort()
	for key in temp:
		td.append("<td>" + data_keys[key_order[key]] + "</td>")

	table_data = th + td
	print "\n\n"

	for x in table_data:
		print x


print table_end

if len(error_list) > 0:
	print "<dl>\n<dt><b>Error Messages</b>:</dt>"
	for i in error_list:
		print "<dd>" + i + "</dd>\n"
	print "</dl>\n"
else:
	pass

print page_end














