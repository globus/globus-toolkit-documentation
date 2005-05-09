<?xml version="1.0"?> 
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:output method="html" indent="yes"/>
<xsl:template match="soapenv:Envelope" xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/">
<html>
  <head>
   <title>Web Service Data Browser</title>
<style type="text/css">
<!--
td {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #0066CC;
}
.headers {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	font-weight: bold;
	color: #003399;
}
.hosts {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
	color: #FFFFFF;
}
.tb {
	border: 1px solid #000033;
}
-->
</style>
</head>
<body>
 <table border="0" cellpadding="0" cellspacing="0">
  <tr>
  <td colspan="1">
  <map name="FPMap0_I1">
  <area href="http://www.globus.org/" shape="rect" coords="35, 12, 192, 31" target="_top"></area>
  <area href="http://www.globus.org/" shape="rect" coords="62, 35, 230, 54" target="_top"></area>
  </map>
  <img src="http://www.globus.org/about/_borders/a0c.gif" alt="The Globus Project" border="0" usemap="#FPMap0_I1" width="505" height="32"></img>
  </td>
  </tr>
  <tr>
  <td>
  <map name="FPMap1_I1">
  <area href="http://www.globus.org/" shape="rect" coords="33, 0, 114, 37" target="_top"></area>
  </map>
  <img src="http://www.globus.org/about/_borders/b0c.gif" border="0" usemap="#FPMap1_I1" width="134" height="38"></img>
  </td>
  </tr>
  <tr>
  <td colspan="1">
  <img src="http://www.globus.org/about/_borders/c0c.gif" width="100" height="32"></img>
  </td>
  </tr>
  </table>
  <BR></BR> 
 <TABLE border="0" cellspacing="0" cellpadding="0">
  <TR>
  <TD style="padding-left: .5cm"></TD>
  <TD valign="MIDDLE" nowrap="true"><font color="#003399"><B><I><h3>Globus Information Services</h3></I></B></font></TD>
  </TR>
  </TABLE>
  <xsl:apply-templates select="soapenv:Body"/>
  </body>
</html>
</xsl:template>
<xsl:template match="soapenv:Body" xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns0="http://ogsa.gridforum.org/service/grid_service">
  <xsl:apply-templates select="ns0:findServiceDataResponse" />
</xsl:template>

<xsl:template match="ns0:findServiceDataResponse" xmlns:ns0="http://ogsa.gridforum.org/service/grid_service" xmlns:foo="http://www.gridforum.org/namespaces/2003/03/OGSI">
  <xsl:apply-templates select="foo:result"/>
</xsl:template>

<xsl:template match="foo:result" xmlns:foo="http://www.gridforum.org/namespaces/2003/03/OGSI" xmlns:ns3="http://www.gridforum.org/namespaces/2003/03/serviceData">
	<xsl:apply-templates select="ns3:serviceDataValues"/>
</xsl:template>

<xsl:template match="ns3:serviceDataValues" xmlns:foo="http://www.gridforum.org/namespaces/2003/03/OGSI" xmlns:glue="http://glue.base.ogsa.globus.org/ce/1.1" xmlns:ns3="http://www.gridforum.org/namespaces/2003/03/serviceData">
     <xsl:apply-templates select="foo:terminationTime"/>
     <table width="100%" border="1px" cellpadding="1" cellspacing="0" bgcolor="#DFF4FF" class="tb">
     <tr>
     <td>
     <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">  
     <xsl:apply-templates select="foo:gridServiceHandle"/> 
     <tr><td align="center" bgcolor="#DFF4FF"><strong>.</strong></td>
     <td bgcolor="#DFF4FF" class="headers"><b><font face="Verdana" size="2px" color="#003399">Interface Names: </font></b></td>
     <td colspan="2" bgcolor="#DFF4FF"></td>
        <tr>
        <td align="center">&#xa0;</td>
        <td colspan="3" class="headers">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#F9FCFF">
        <xsl:apply-templates select="foo:interface"/>  
        </table>
        </td>
        </tr>
     </tr>
     <tr><td align="center" bgcolor="#DFF4FF"><strong>.</strong></td>
     <td bgcolor="#DFF4FF" class="headers"><b><font face="Verdana" size="2px" color="#003399">ServiceData Names: </font></b></td>
     <td colspan="2" bgcolor="#DFF4FF"></td>
        <tr>
        <td align="center">&#xa0;</td>
        <td colspan="3" class="headers">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#F9FCFF">
        <xsl:apply-templates select="foo:serviceDataName"/>  
        </table>
        </td>
        </tr>
     </tr>
     </table>       
     </td>
     </tr>
    </table>  
</xsl:template>

<xsl:template match="foo:terminationTime" xmlns:glue="http://glue.base.ogsa.globus.org/ce/1.1" xmlns:foo="http://www.gridforum.org/namespaces/2003/03/OGSI">
<script language="JavaScript">
                        var date1="";
			var date ='<xsl:value-of select="@foo:timestamp" />';
                        date=conv(date);
                        var altdate='<xsl:value-of select="@timestamp" />';
                        altdate=conv(altdate); 
              function conv(dateconv) {
              if(dateconv=="") {
              return "";
              } 
              date1=dateconv.substring(0,10);
              date1 += " ";
              date1 +=" "; 
              date1 +=dateconv.substring(11,19);
              return date1;                  
         }
</script>
</xsl:template>

<xsl:template match="foo:gridServiceHandle" xmlns:foo="http://www.gridforum.org/namespaces/2003/03/OGSI">
<tr bgcolor="#000040" id="host1">
        <td width="17" align="center">
        <font color="#FFFFFF"><strong>.</strong>
        </font>
        </td>
        <td width="142">
        <b><font color="#FFFFFF">Handle:</font></b>
        </td>
        <td width="599" class="hosts">
        <b><font face="Verdana" size="1px" color="#FFFFFF"><xsl:value-of select="./" /></font></b>
        </td>
        <td>
        <b><font face="Verdana" size="1px" color="#FFFFFF"><script language="JavaScript">document.write(date);</script><script language="JavaScript">document.write(altdate);</script></font></b>
        </td> 
        <td width="18" align="center" class="hosts"><font color="#FFFFFF"></font>
        </td>   
</tr>
</xsl:template>
<xsl:template match="foo:interface" xmlns:foo="http://www.gridforum.org/namespaces/2003/03/OGSI" >
<tr>
<td align="left"><strong>.</strong></td>
<td><b><font face="Verdana" size="1px" color="#0066CC"><xsl:value-of select="./" /></font></b></td>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr>
</xsl:template>


<xsl:template match="foo:serviceDataName" xmlns:foo="http://www.gridforum.org/namespaces/2003/03/OGSI" >
<tr>
<td align="left"><strong>.</strong></td>
<td><b><font face="Verdana" size="1px" color="#0066CC"><xsl:value-of select="./" /></font></b></td>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr>
</xsl:template>


</xsl:stylesheet>
