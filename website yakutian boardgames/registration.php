<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Регистрация</title>
</head>
<body>
  <div class="box">
      <?php require "blocks/header.php"?>
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-8">
      <h1>Форма регистрации</h1>
      <form action="checks/regcheck.php" method="post">
    <?php
    if(isset($_SESSION["unique"])){
      echo $_SESSION["unique"];}
     ?>
        <?php
        if(isset($_SESSION["mailerror"])){
          echo $_SESSION["mailerror"];}
         ?>
        <input type="email" class="form-control" name="email" id="email" placeholder="Введите email"><br>
        <?php
        if(isset($_SESSION["nameerror"])){
          echo $_SESSION["nameerror"];}
         ?>
         <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
         <?php
         if(isset($_SESSION["passerror"])){
           echo $_SESSION["passerror"];}
          ?>
          <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
          <button class="btn btn-success"type="submit">Зарегистрироваться</button>
          <?php
          if(isset($_SESSION["r_success"])){
            echo $_SESSION["r_success"];}
           ?>
      </form>
       </div>
      </div>
    </div>
  </div>

  <?php require "blocks/footer.php"?>

</body>
</html>
