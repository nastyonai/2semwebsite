<?php
session_start();
$login =filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$pass =filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);

$_SESSION["user"]='';
$_SESSION["admin"]='';
$_SESSION["usererror"]='';

$pass = md5($pass);

$mysql = new mysqli('localhost','root','','mydb');

$result = $mysql->query("SELECT login, name, pass, role_name FROM `users` INNER JOIN `roles` ON `users`.role_id = `roles`.id WHERE `login`='$login' AND `pass`= '$pass'");
$user = $result->fetch_assoc();

if($user['role_name']=="admin"){
  $_SESSION["admin"]= "Вы - администратор";
}else $_SESSION["userr"]= "Вы - пользователь";

if(is_null($user)){
  $_SESSION["usererror"] = "Неправильная почта или пароль";
  header("Location:".$_SERVER["HTTP_REFERER"]);
  exit();
}

$_SESSION["user"]= $user['name'];

$mysql->close();
header('Location: /');
 ?>
