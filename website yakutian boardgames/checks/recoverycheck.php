<?php session_start();
$mysql = new mysqli('localhost','root','','mydb');
$email = $_POST['email'];
$_SESSION["mailerror"]='';
$_SESSION["success"]='';
if(preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}$/i',$email)!=1){
  $_SESSION["mailerror"] = "Введите корректный email";
  header("Location:".$_SERVER["HTTP_REFERER"]);
  exit();
}
function settoken(){
  $bytes=openssl_random_pseudo_bytes(20,$cstrong);
return bin2hex($bytes);
}

$rest=$mysql->query("SELECT * FROM `users` WHERE `login` = '$email'");
$row = $rest->fetch_assoc();
if(!is_null($row)){
  $login=$row['login'];
  $token = settoken();
  $mysql->query("UPDATE `users` SET `token` = '$token' WHERE `login`='$login'");
  $adress_site="http://test.ru/resetpassword.php";
  $link = $adress_site."?email=$login&token=$token";
  mail($email,'Подтверждение смены пароля',"Здравствуйте. Перейдите по ссылке. <a href='$link'>Ссылка</a>",'From: nirvanastasia@gmail.com');
  $_SESSION["success"]='Письмо успешно отправлено. Проверьте почту.';
  header("Location:".$_SERVER["HTTP_REFERER"]);
  exit();
}
 ?>
