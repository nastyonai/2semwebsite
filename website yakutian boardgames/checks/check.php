<?php
session_start();
$email =filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);
$message=filter_var(trim($_POST['message']),
FILTER_SANITIZE_STRING);

$_SESSION['error']='';
$_SESSION['m_error']='';
$_SESSION['m_success']='';

if(preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}$/i',$email)!=1){
  $_SESSION["error"] = "Введите корректный email";
  header("Location:".$_SERVER["HTTP_REFERER"]);
  exit();}
else if (trim($message) == ''){
$_SESSION["m_error"] = "Введите ваше сообщение";
header("Location:".$_SERVER["HTTP_REFERER"]);
  exit();}

$subject = "=?utf-8?B?".base64_encode("Сообщение от пользователя")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

mail('nirvanastasia@gmail.com', $subject, $message, $headers);
$_SESSION['m_success']="Ваше сообщение отправлено нам на почту";
header('Location: /about.php');
 ?>
