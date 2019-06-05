<html>
<head>
<title>Andy's web server</title>
</head>
<body>
<?php
$az = exec("curl http://169.254.169.254/latest/meta-data/placement/availability-zone/");
$ip = exec("curl http://169.254.169.254/latest/meta-data/local-ipv4/");
$con = exec("netstat -anp|grep ':80'|wc -l");
echo "
<table border='1' cellpadding='10' style='width:300px'>
<tr>
<th>IP</th>
<th>AZ</th>
<th>CON</th>
</tr>
<tr>
<td>$ip</td>
<td>$az</td>
<td>$con</td>
</tr>
</table>
";
?>
</body>
</html>
