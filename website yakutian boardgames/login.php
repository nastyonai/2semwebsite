<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Авторизация</title>
</head>
<body>

  <div class="box">
    <?php require "blocks/header.php"?>
    <div class="container mt-4">
          <div class="col-md-8">
      <h1>Форма авторизации</h1>
      <form action="checks/logcheck.php" method="post">
        <?php
        if(isset($_SESSION["usererror"])){
          echo $_SESSION["usererror"];}
         ?>
        <input type="text" class="form-control" name="login" id="login" placeholder="Введите email"><br>
          <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
    <div class="d-flex flex-column" >
        <a href="./recovery.php">Забыли пароль?</a>
    <button class="btn btn-success w-25 mt-3"type="submit">Войти</button>
    </div>

      </form>
    </div>
    </div>
  </div>
  <?php require "blocks/footer.php"?>

</body>
</html>
