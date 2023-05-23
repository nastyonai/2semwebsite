<?php
session_start();
$password=$_POST['newPassword'];
$confirmPassword=$_POST['confirmNewPassword'];
if($password != $confirmPassword){
  header("Location:".$_SERVER['HTTP_REFERER']);
}else{
  $email=$_SESSION['email'];
  $mysql = new mysqli('localhost','root','','mydb');
  $hashpassword=md5($password);
  $mysql->query("UPDATE `users` SET `pass` = '$hashpassword' WHERE `login`='$email'");
  $mysql->query("UPDATE `users` SET `token` = '' WHERE `login`='$email'");
  session_destroy();
  header("Location: ../login.php");
}
 ?>
