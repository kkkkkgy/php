<?php


$dbname = "phpproject";
$connect = mysqli_connect("localhost", "root", "", "phpproject");


$user_id = $_POST['id'];
$user_pwd = $_POST['pwd'];
$idcheck = $_POST['id_check'];
$pwdcheck = $_POST['pwd_check'];

$sql = "SELECT id from user_info;";
$idcheck[]= mysqli_query($connect, $sql);
$sql = "SELECT password from user_info;;";
$pwdcheck[] = mysqli_query($connect, $sql);

if($user_id == $idcheck && $user_pwd == $pwdcheck){
    echo("<script>alert('worng');</script>");
    echo("<script>location.replace('login.php');</script>");
}
else
    echo("<script>alert('ok');</script>");
?>

