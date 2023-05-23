<?php session_start();
 ?>
 <!DOCTYPE html>
 <html lang="ru">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="./css/style.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
   <title> Якутские национальные игры</title>
 </head>
 <body>

   <?php require "blocks/header.php"?>

<?php
if(isset($_GET['token']) && !empty($_GET['token'])){
  $token=$_GET['token'];
  $_SESSION['token']=$token;
}else {
  exit("Ошибка");
}

if(isset($_GET['email']) && !empty($_GET['email'])){
  $email=$_GET['email'];
  $_SESSION['email']=$email;

}else {
  exit("Ошибка");
}
 $mysql = new mysqli('localhost','root','','mydb');
 $query_user = $mysql->query("SELECT * FROM `users` WHERE `login` = '$email' AND `token` = '$token'");
 if(($row=$query_user->fetch_assoc())!=false && !empty($row['id'])){
?>
   <form class="mt-4 text-center" action="./checks/resetpasswordch.php" method="post">
   <label>Введите новый пароль<input type="text" name="newPassword" value=""> </label>
   <label>Подтвердите новый пароль<input type="text" name="confirmNewPassword" value=""></label>
     <button type="submit" name="button">Создать</button>
   </form>
   <?php
 }else{
   exit("Ошибка");
 }
 ?>


 </body>
</html>
