<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
</body>
</html>
<?php
$myIP = $_SERVER['REMOTE_ADDR'];
$filename = "ip.txt";
$IPs = file($filename, FILE_IGNORE_NEW_LINES);
if(in_array($myIP, $IPs)){
    include ('strona1.php');
}else{
    include ('strona2.php');
}
?>
