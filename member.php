<?php
$host='localhost';
$user='root';
$pw='1234';
$dbName='mp3';
$mysqli=new mysqli($host, $user, $passpw, $dbName);

$id=$_POST['id'];
$password=md5($_POST['pass']);

$sql="insert into account_info(id,pass)";
$sql=$sql."values('$id', '$password')";

echo $mysqli->query($sql) ? 'success inserting':'fail to insert sql';
?>