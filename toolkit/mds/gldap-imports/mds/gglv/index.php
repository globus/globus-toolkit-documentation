<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN">
<?
   // Set the title to personalize the page
   $title = "gridglview: A Grid Visualization Application";
   include("../../include/cf_header.inc");
?>

<font face="Verdana,Arial" size="2" color="#000000">
<b><font size="3">
gridglview - An OpenGL based Grid Visualization Application
</font></b>
<br><hr><br>

Written by <a href="http://www.thecodefactory.org/neillm">Neill Miller</a>
under the guidance of <a href="http://www.mcs.anl.gov/~jms">
Jennifer Schopf</a>.
<br><br>
<i>
Warning: This information is only a draft and is currently
unofficial.  The code, and all of the information may
change in the future.
</i>
<br><br>

<b>Current Release: gridglview 0.1.0</b>
<br><br>
<a href="download/win32gridglview-0.1.0.zip">
Download Win32 binary here</a>. (win32gridglview-0.1.0.zip)
<br><br>
<a href="download/gridglview-0.1.0.tar.gz">
Download source code here</a>. (gridglview-0.1.0.tar.gz)
<br><br>
Known Limitations:  Flat rendering mode in Win32 does not work
properly (Flat-Random and Depth Circle rendering modes are OK).
<br><br>
<b>Screenshots</b>:
<br><br>
<a href="gglv1.png">Screenshot 1</a> (Depth Circle Render Mode)<br>
<a href="gglv2.png">Screenshot 2</a> (Flat-Random Render Mode)<br>
<a href="gglv3.png">Screenshot 3</a> (Depth Circle Render Mode)<br>
<br><br>

The purpose of gridglview is to help visualize pieces of the "grid".

<br><hr><br>
<b>Online Support</b>
<br><br>
<a href="#what">What is the Grid?</a><br>
<a href="#look">What does the Grid Infrastructure look like?</a><br>
<a href="#point">What's the point of a Grid visualization application?</a><br>
<a href="#buy">Ok, I buy it.  How do I run this?</a><br>
<a href="#linux-instructions"><b>GNU/Linux Instructions</b></a><br>
<a href="#win32-instructions"><b>Win32 Instructions</b></a><br>
<a href="#linux-commands">Understanding the GNU/Linux commands</a><br>
<a href="#win32-commands">Understanding the Win32 command line arguments</a><br>
<a href="#gen-input">Generating Input Files for gridglview</a><br>
<a href="#runtime-options">Understanding the provided Run-time options</a><br>
<a href="#hud">What is the HUD?</a><br>
<a href="#render-modes">What are the available render modes?</a><br>
<a href="#viewports">What are the viewports?</a><br>
<a href="#attr-color">How does gridglview color nodes by CPU/MEM/Disk/OS?</a><br>

<br><hr><br>

<a name="what">
<b>What is the Grid?</b>
<br><hr><br>

According to http://globus.org/about/faq/general.html#grid
<br><br>

"The Grid refers to an infrastructure that enables the integrated,
collaborative use of high-end computers, networks, databases, and
scientific instruments owned and managed by multiple organizations.
Grid applications often involve large amounts of data and/or computing
and often require secure resource sharing across organizational
boundaries, and are thus not easily handled by today's Internet and
Web infrastructures."
<br><br>


<a name="look">
<b>What does the Grid infrastructure look like?</b>
<br><hr><br>

This is the purpose of gridglview.  This program gives a user a
graphical representation of what the Grid looks like at a particular
point in time.  It shows a representation of the Grid's shape,
hierarchy, and possibly some specific characteristics of each of the
nodes in the Grid (such as CPU Free, MEM Free, Disk space Free, or
OS type).  Seeing a representation of the Grid infrastructure can
provide a data point with which to compare and contrast other system
or network based infrastructures.
<br><br>

<a name="point">
<b>What's the point of a Grid visualization application?</b>
<br><hr><br>

At an arbitrary time, it may be beneficial to view certain
characteristics of a grid. gridglview can provide much information
about a grid.  For example: Which nodes are currently responding?
Which nodes are "sub nodes" of node A?  Which nodes are "super nodes"
of node "B"?  Across the entire grid, how many nodes are running
Operating system "X"?  Across the entire grid, how many nodes have
more than 50% of un-utilized CPU?
<br><br>

While it's true that this information can be gathered with direct
queries against the MDS, gridglview provides the information in such a
way that a quick glance can give you a good idea of exactly the
information that you may be looking for.
<br><br>

A graphical application may also be useful for live demonstrations or
grid-related presentations.
<br><br>


<a name="buy">
<b>Ok, I buy it.  How do I run this?</b>
<br><hr><br>

Currently, the application has been tested on GNU/Linux and Win32
based systems.
<br><br>

<i>NOTE: You are required to have OpenGL support on your system as well
as the GLUT libraries.  Currently, gridglview uses GLUT for windowing
and basic architecture operation.  This may be changed at a later date
as I believe that a more stream-lined 'game loop' will lead to better
overall application performance.</i>
<br><br>

<a name="linux-instructions">
<b>GNU/Linux instructions</b>:
<br><br>
To run the application, first you must download and compile the
source tarball release as follows:

<pre>
tar -xvzf gridglview-X.X.X.tar.gz
cd gridglview/
./configure
make
make install [optional, may require root priviledge]
</pre>

A binary file called "gridglview" will be generated if these steps do
not encounter any problems on your system.

To run the application, change directories to where the binary is
located and type "./gridglview".
<br><br>

<a name="win32-instructions">
<b>Win32 instructions</b>:
<br><br>
Download the <a href="download/win32gridglview-0.1.0.zip">
binary release</a> and run it!
<br><br>
Then read about the <a href="#win32-commands">Win32 command line arguments</a>.
<br><br>


<a name="linux-commands">
<b>Understanding the GNU/Linux Command Line Arguments</b>
<br><hr><br>

When you run gridglview with no arguments, you will see information
similar to the following:<br>

<pre>
Usage: gridglview -f <input-file> [OPTIONS]

Available command line options:
-f, --file       : (required) used to specify an input file
-v, --version    : prints the version to stdout and exits
-h, --help       : prints this help message and exits
--viewmode [0-3] : start the program with the specified window dimensions
                   0 (320,240) | 1 (640,480) | 2 (800,600) | 3 (1024,768)
</pre>

The only required argument for getting gridglview to run is an input
file.  The input file format is that of a grid-info-search query.
This means that the saved LDIF that is the output of grid-info-search
is the input for gridglview.  See the section titled "Generating Input
Files" for examples on how to create simple and advanced input files.
To specify an input file, use either the "-f" or the "--file" option.
For example:

<pre>
./gridglview -f input.ldif
OR
./gridglview --file input.ldif
</pre>

The "-v" and "--version" options are provided for determining which
version of gridglview is available on your system.
<br><br>

The "-h" and "--help" options are provided for displaying the help
information for your particular version of gridglview.  You can run
this to view which command line arguments are accepted.  These may
differ with later versions.
<br><br>

The "--viewmode" argument is provided to allow you to specify a window
size on startup of gridglview.  If you use the "--viewmode" option, a
number between 0 and 3 must follow it to specify which resolution to
use.
<br><br>


<a name="win32-commands">
<b>Understanding the Win32 Command Line Arguments</b>
<br><hr><br>

Under Win32 based system, you have much fewer command line arguments
to deal with.  If no command line arguments are specified, the
application will run normally and monitor an input file called
"input.ldif" which must be in the same directory as the binary.
<br><br>

Alternatively, you may specify an input file by using the "-f" option
which requires a filename to follow it.
<br><br>


<a name="gen-input">
<b>Generating Input Files for gridglview</b>
<br><hr><br>

To generate a file suitable for input to gridglview, you must have a
GIIS or GRIS available for querying as well as the "grid-info-search"
utility provided by the Globus Toolkit. For the examples, I will use
the publicly available Globus provided GIIS server: giis.globus.org
<br><br>

A Simple Input File example:
<br><br>

The following command will query giis.globus.org and return all of the
host names of each of the nodes in the grid.  This will allow
gridglview to show what the grid looks like (according to
giis.globus.org) and will associate the host name with each node that
is drawn.

<pre>
grid-info-search -c -h giis.globus.org -p 2135 -b "mds-vo-name=vo-index,o=grid" "(objectclass=mdshost)" mds-host-hn -LLL
> input.ldif
</pre>

A Complex Input File example:
<br><br>

The following command will query giis.globus.org and return all of the
host names, cpu-total-free, cpu-total-counts, memory-ram-total-free,
memory-ram-total-size, filesystem-freemb, filesystem-size in mb, and
OS names of each of the nodes in the grid.  This is similar to the
simple example, except a lot more data for each node is associated
with each node drawn.  The extra data is useful for some of the
different characteristics which can be seen at run-time.  See the
section "Understanding the provided Run-time options" for mode
information.

<pre>
grid-info-search -x -h giis.globus.org -p 2135 -b
"mds-vo-name=vo-index,o=grid" "(objectclass=mdshost)" mds-host-hn
mds-cpu-total-free-15minx100 mds-cpu-total-count
mds-memory-ram-total-freemb mds-memory-ram-total-sizemb
mds-fs-total-freemb mds-fs-total-sizemb mds-os-name -LLL > input.ldif
</pre>

<a name="runtime-options">
<b>Understanding the provided Run-time options</b>
<br><hr><br>

gridglview contains many run-time options for viewing the Grid as
gathered by the LDIF data provided as input.  Each run-time option is
triggered by pressing a single key on the keyboard, or left or right
clicking the mouse button at a certain time.  Here is a list of what
the run-time options are:
<br><br>

<b>Keyboard run-time options</b>:
<pre>
<h3>
'q'        : will terminate the application
ESC        : will terminate the application
'a'        : will translate the camera in the negative Z direction
'z'        : will translate the camera in the positive Z direction
'd'        : will translate the camera in the negative X direction
's'        : will translate the camera in the positive X direction
'y'        : will translate the camera in the negative Y direction
'h'        : will translate the camera in the positive Y direction
'r'        : will reset the camera to the initial position
'm'        : will switch to the next render mode
'1'        : will color each node by amount of CPU Free
'2'        : will color each node by amount of Memory Free
'3'        : will color each node by amount of Disk space free
'4'        : will color each node by Operating System type
'+'        : will cycle through available viewports (window sizes)
'-'        : will cycle through available viewports (window sizes)
'f'        : will toggle fullscreen mode
LEFT ARROW : will rotate the camera in the negative Y direction
RIGHT ARROW: will rotate the camera in the positive Y direction
UP ARROW   : will rotate the camera in the negative X direction
DOWN ARROW : will rotate the camera in the positive X direction
PAGE UP    : will scroll the data shown in the HUD by one page up
PAGE DOWN  : will scroll the data shown in the HUD by one page down
</h3>
</pre>

<b>Mouse run-time options</b>:
<pre>
<h3>
Left-click : will select the node under the mouse and display the
             associated LDIF information in the HUD.  will also
             cause any children of the selected node to be displayed.
             If a selected node is clicked on, it will be hidden
             in a recursive manner. (All children will be hidden as
             well as their children, etc)
Right-click: will recursively perform the action of the 'left-click'.
</h3>
</pre>
<br>

<a name="hud">
<b>What is the HUD?</b>
<br><hr><br>

The hud is the area between the red bounding box near the bottom of the
screen.  This terminology is taken from Game Programming where the HUD
stands for the "Heads Up Display".  The textual data shown in the HUD
is LDIF data associated with each node (as gathered from the input
LDIF file).  If there are too many lines to display on the screen at
one time, you can use the page-up and page-down keys to scroll through
the text.  It is possible to page-down many times past the text, so be
sure to page back up if you'd like to continue viewing the textual
information in the HUD.
<br><br>


<a name="render-modes">
<b>What are the available render modes?</b>
<br><hr><br>
There are currently three ways to represent the data based on the same
input data.  Each of these three are called "render modes".  They are
as follows:
<br><br>

<b>Flat</b>: Shows all grid nodes in a flat hierarchy, where all nodes
are at the same depth level.
<br><br>

<b>Flat Random</b>: Shows all grid nodes at random positions on the
screen, all at the same depth level.
<br><br>

<b>Depth Circles (default)</b>: Shows all grid nodes in a 3D circular
hierarchy where Z-values for the parent nodes are less than the
Z-values for their children (i.e. parents are towards the back of the
screen and children are towards the front of the screen).  Each child
of the parent is arranged in a circle around the parent at a higher Z
value. This happens to be the most interesting of the three displays.
All siblings are at the same depth level.
<br><br>

<a name="viewports">
<b>What are the viewports?</b>
<br><hr><br>

The viewports are different sized windows.  There are several
viewports available such as 320x240, 640x480, 800x600, and 1024x768.
These viewports can be cycled through with the '+' and '-' keys at
run-time, meaning that the entire window can be resized dynamically.
The '+' key always moves to the next largest viewport unless it is
already the largest (in which case it wraps around to the smallest
viewport).  Similarly, the '-' always moves to the next smallest
viewport unless it is already the smallest (in which case it wraps
around to the largest viewport).  Optionally, the application be be
run fullscreen by pressing the 'f' key at run-time.  Pressing 'f'
while the application is in fullscreen mode will cause the viewport to
be changed back to the first available one. (i.e. 320x240)
<br><br>

<a name="attr-color">
<b>How does gridglview color nodes by CPU/MEM/Disk/OS?</b>
<br><hr><br>

gridglview has built in code to look for specific attributes of each
node if they are provided by the LDIF input file.  If you used the
complex query (shown above) to generate an input file, each node
contains all of the information required to display nodes differently
based on CPU free, MEM free, Disk free, or Operating System type.
These colorings can be enabled at run-time by using the '1', '2', '3',
or '4' key as listed above.
<br><br>

If this information is not available in the input LDIF file (as is the
case for the simple query shown above), then these colorings cannot
work properly.  Pressing the keys for coloring by different attributes
will have no effect on the current visualization.
<br><br>

</font>
<? include("../../include/cf_footer.inc"); ?>
