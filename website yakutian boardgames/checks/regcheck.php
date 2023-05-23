<?php
session_start();
$email =filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);
$name =filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$pass =filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);
$_SESSION['mailerror']='';
$_SESSION['nameerror']='';
$_SESSION['passerror']='';
$_SESSION['r_success']='';
$_SESSION['unique']='';
$mysql = new mysqli('localhost','root','','mydb');
$res = $mysql->query("SELECT * FROM `users` WHERE `login`='$email'");
$uniquelog = $res->fetch_assoc();

if($uniquelog['login']==$email){
  $_SESSION["unique"]= "Такой пользователь уже существует.";
  header("Location:".$_SERVER["HTTP_REFERER"]);
  exit();
}

if(preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}$/i',$email)!=1){
  $_SESSION["mailerror"] = "Введите корректный email";
  header("Location:".$_SERVER["HTTP_REFERER"]);
  exit();
} else if(strlen($name)== 0){
$_SESSION["nameerror"] = "Введите корректное имя";
header("Location:".$_SERVER["HTTP_REFERER"]);
  exit();
} else if(strlen($pass) < 8){
  $_SESSION["passerror"] = "Введите корректный пароль";
header("Location:".$_SERVER["HTTP_REFERER"]);
  exit();
}

$pass = md5($pass);

$mysql = new mysqli('localhost','root','','mydb');
$mysql->query("INSERT INTO `users` (`login`, `pass`, `name`, `role_id`)
VALUES('$email','$pass','$name','1')");
$mysql->close();

$_SESSION['r_success']="Вы успешно зарегистрировались";
header("Location:".$_SERVER["HTTP_REFERER"]);
 ?>
