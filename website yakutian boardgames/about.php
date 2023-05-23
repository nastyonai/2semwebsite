<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <title>Контактная форма</title>
</head>
<body>

  <div class="box">
      <?php require "blocks/header.php"?>
    <div class="container p-5 mt-5">
      <div class="col-md-8">
      <h1 class="text-success">Обратная связь</h1>
    <form action="checks/check.php" method="post">
      <?php
      if(isset($_SESSION["error"])){
        echo $_SESSION["error"];}
       ?>
      <input type="email" name="email" placeholder="Введите ваш Email" class="form-control"><br>
      <?php
      if(isset($_SESSION["m_error"])){
        echo $_SESSION["m_error"];}
       ?>
      <textarea name="message" class="form-control" placeholder="Введите ваше сообщение"></textarea><br>
    <button type="submit" name="send" class="btn btn-success">Отправить</button>
    <?php
    if(isset($_SESSION["m_success"])){
      echo $_SESSION["m_success"];}
     ?>
<p class="mt-5">Читай о нас ниже</p>
    </form>
    </div>
    </div>
  </div>
  <div class="text-center">
  <img src="img/embl.jpg" width="200" height="160">
  </div>
  <main class="px-3 text-center w-100 h-100 p-5 mx-auto flex-column">
  <h2>О нас</h2>
  <h5 class="font-weight-normal">Санкт-Петербургская общественная организации молодежи Республики Саха (Якутия) "Сайдыы" (СПбОО "Сайдыы") зарегистрирована 21.04.1998.
  Юридический адрес - Санкт-Петербург, Невский пр., д. 128, литера А, пом. 38-Н (вход со 2-й Советской ул., д. 15, этаж 3, левое крыло).
  </h5><h5 class="text-break">
  Сайдыы - это ассоциация, объединяющая вместе студентов и работающую молодежь Республики Саха (Якутия)
  в Санкт-Петербурге. А ещё, это одна большая семья.
  Сайдыы занимается всем! Мы организовываем большие и маленькие мероприятия, участвуем в других
  мероприятиях, находим друзей, путешествуем, танцуем, общаемся, учимся, помогаем,
  веселимся, заботимся друг о друге, делимся идеями и воплощаем мечты в реальность!   </h5><h5 class="text-break">
    Основные мероприятия Сайдыы
  "Фестиваль якутской культуры "ConnectYkt"" - самое крупное мероприятие Сайдыы.
  Помимо этого, мы проводим то, что вы любите - киноклубы, субботники, шашлыки, интеллектуальные игры "Что? Где? Когда?", квесты,
  выезды на природу, поездки в другие города, встречи с интересными людьми и многое-многое другое.</h5>
  </main>

  <?php require "blocks/footer.php"?>
</body>
</html>
