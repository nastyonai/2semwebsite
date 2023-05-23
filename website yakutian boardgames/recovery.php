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
   <title>Забыли пароль?</title>
 </head>
 <body>

   <?php require "blocks/header.php"?>


<form class="" action="./checks/recoverycheck.php" method="post">

  <?php
  if(isset($_SESSION["mailerror"])){
    ?>
    <div class="alert alert-danger">
      <?php
       echo $_SESSION["mailerror"];
       ?>
    </div>
  <?php } ?>

  <?php
  if(isset($_SESSION["success"])){
    ?>
    <div class="alert alert-success">
      <?php
       echo $_SESSION["success"];
       ?>
    </div>
  <?php } ?>

<div class="text-center mt-5">
  <h1>Смена пароля</h1>
  <label class="mt-5">Введите ваш email
<input type="text" name="email">
<button type="submit" name="button">Отправить</button>
  </label>
</div>


</form>

 </body>
</html>
