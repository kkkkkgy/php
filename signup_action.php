<?php

$dbname  = "phpproject";
$connect = mysqli_connect("localhost", "root","", "phpproject");


$user_id = $_POST['id'];
$user_pwd = $_POST['pwd'];
$idcheck = $_POST['id_check'];
$pwdcheck = $_POST['pwd_check'];

$sql = "SELECT id from user_info;";
$result = mysqli_query($connect,$sql);

$sql = "insert into user_info(id, password) value('$user_id', '$user_pwd');";
$result = mysqli_query($connect,$sql);
if($result) { echo("<script>location.replace('page3.php');</script>");; }
else { echo "failure";}
echo("<script>location.replace('page3.php');</script>");

?>