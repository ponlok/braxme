<?php
session_start();
header('X-Frame-Options: SAMEORIGIN');
header('X-Content-Type: nosniff');
require_once("config.php");
$providerid = @mysql_safe_string($_POST['pid']);
$filename = @mysql_safe_string($_POST['filename']);
if(strstr($filename,"\\")!==false){
    $filename = "";
}

?>
<html>
<head>
</head>
<body style="background-color:<?=$global_background?>;font-family:helvetica;font-size:12px;margin:0;padding:0">
    <img src="<?=$filename?>" style='width:100%;height:auto' />
</body>
</html>
