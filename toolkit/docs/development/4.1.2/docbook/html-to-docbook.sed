s/<p>/<para>/g
s/<\/p>/<\/para>/g
s/<p \/>/<para>/g
s/<p style="color:green">/<para>/g
s/<p style="color:red">/<para>/g
s/<font color="purple">//g
s/<font color="red">//g
s/<font color="green">//g
s/<\/font>//g
s/ol>/orderedlist>/g
s/ul>/itemizedlist>/g
s/<li>/<listitem><simpara>/g
s/<\/li>/<\/simpara><\/listitem>/g
s/<table .*>/<table><title>TITLE<\/title>\n<tgroup><tbody>/g
s/<\/table>/<\/tbody><\/tgroup>\n<\/table>/g
s/<tr>/<row>/g
s/<tr style="text-align:center">/<row>/g
s/<tr style="text-align:left">/<row>/g
s/<tr style="text-align:right">/<row>/g
s/<tr style="text-align: center">/<row>/g
s/<tr style="text-align: left">/<row>/g
s/<tr style="text-align: right">/<row>/g
s/<\/tr>/<\/row>/g
s/<td>/<entry>/g
s/<td style="text-align: center">/<entry>/g
s/<td style="color:green">/<entry>/g
s/<td style="color:red">/<entry>/g
s/<td style="color:red;text-align:center">/<entry>/g
s/<td bgcolor=".......">/<entry>/g
s/<td bgcolor="......." class="matrix">/<entry>/g
s/<div align="center">//g
s/<div style="text-align:right">//g
s/<\/div>//g
s/<\/td>/<\/entry>/g
s/<b>/<emphasis>/g
s/<\/b>/<\/emphasis>/g
s/<i>/<emphasis>/g
s/<\/i>/<\/emphasis>/g
s/<em>/<emphasis>/g
s/<\/em>/<\/emphasis>/g
s/strong>/emphasis>/g
s/<a /<ulink /g
s/href=/url=/g
s/<\/a>/<\/ulink>/g
s/pre>/screen>/g
s/<h2>/<\/section>\n<section><title>/g
s/<\/h2>/<\/title>/g
s/<h3>/<\/section>\n<section><title>/g
s/<\/h3>/<\/title>/g
s/<br>//g
