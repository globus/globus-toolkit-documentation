<? include("mdsinterface.inc"); ?>

<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
</head>
<body bgcolor="#FFFFFF" link="0000FF" alink="#0000FF" vlink="#0000FF">
<center>
<br><hr><br>

<font face="Tahoma,Verdana" size="2" color="#000000">
<font face="Tahoma,Verdana" size="3" color="#000000">
<b>Please Enter Required GRID Query Information</b>
</font>
<br><hr><br>
<form method="POST" action="display_all.php">
 <div align="center">
  <center>
  <table border="1" width="100%">
  <tr>
      <td width="100%" align="center">
        <br><font face="Tahoma,Verdana" size="2">GIIS Host name:</font><br>
        <input type="text" name="giis"
         value="giis.globus.org" size="50" tabindex="1">
        <br>
      </td>
  </tr>
  <tr>
      <td width="100%" align="center">
        <br><font face="Tahoma,Verdana" size="2">GIIS Port Number:</font><br>
        <input type="text" name="port"
         value="2135" size="50" tabindex="2">
        <br>
      </td>
  </tr>
  <tr>
      <td width="100%" align="center">
        <br><font face="Tahoma,Verdana" size="2">Base DN:</font><br>
        <input type="text" name="dn"
         value="Mds-Vo-name=vo-index,o=grid" size="50" tabindex="3">
        <br>
      </td>
  </tr>
  <tr>
      <td width="100%" align="center">
        <input type="submit" value="Check Hosts Now" name="submit" tabindex="4">
      </td>
  </tr>
  </table>
  </center>
 </div>
</form>

<br><br>
</font>
</body>
</html>
