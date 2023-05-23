<?php session_start(); ?>
<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="row">
    <div class="d-flex align-items-center justify-content-between justify-content-lg-start">
      <h5 class="my-0 mr-md-auto font-weight-normal">Yakutian Games</h5>
      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 px-5">
        <li><a href="/" class="nav-link px-2 text-secondary">Главная</a></li>
        <li><a href="../nastolki/nastolki.php" class="nav-link px-2 text-white">Настольные игры</a></li>
        <li><a href="../agames/agames.php" class="nav-link px-2 text-white">Подвижные игры</a></li>
        <li><a href="../about.php" class="nav-link px-2 text-white">Связаться</a></li>
      </ul>

      <div class="text-end d-flex">

        <?php
if (!isset($_SESSION["user"])){
         ?>
        <form action="../registration.php" method="post" class="mx-3">
          <button type="submit" class="btn btn-outline-light">Зарегистрироваться</button>
        </form>
        <form action="../login.php" method="post">
          <button type="submit" class="btn btn-success">Войти</button>
        </form>
        <?php
      }else if(isset($_SESSION["user"]) && empty($_SESSION["admin"])){ ?>
        <p class="mt-3">Привет, <?=$_SESSION['user']?>. Чтобы выйти, нажмите <a href="../checks/logout.php">здесь</a>.</p>
      <?php  } else {?>
        <p class="mt-3">Привет, <?=$_SESSION['user']?>. <a  class = "ms-2 btn btn-success" href="/admin/admin.php">Редактировать</a><a class = "ms-2 btn btn-danger" href="../checks/logout.php">Выход</a></p>
    <?php  }?>
      </div>
    </div>
  </div>
  </div>
</header>
