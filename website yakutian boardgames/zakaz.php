<?php session_start();
$mysql = new mysqli('localhost','root','','mydb');

     if(empty($_SESSION["user"])){
      header("Location:".$_SERVER["HTTP_REFERER"]);
     exit();}
 ?>
 <!DOCTYPE html>
 <html lang="ru">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
   <title> Оформление заказа </title>
 </head>
 <body>
   <?php require "blocks/header.php"?>

   <div class="box">
    <img src="../img/order.jpg" width="1481" height="400">
   </div>

<?php
$result = $mysql->query("SELECT * FROM `products`");
$counter= 0;
 while($row = $result->fetch_assoc()){
$counter=$counter+1;
  ?>
    <div class="d-flex flex-row gap-3 w-50 p-3">
    <div class="">
       <p>Название товара: </p><?= $row['title'] ?>
    </div>
    <div class="">
       <p>Цена: </p> <?= $row['price'] ?>
    </div>
    <div class="">
     <p>Описание: </p>  <?= $row['description'] ?>
    </div>
      <?php
      $mysql1 = new mysqli('localhost','root','','mydb');
      $images = $mysql1->query("SELECT * FROM `products_image` WHERE `product_id` = $counter");
      while($imagerow = $images->fetch_assoc()){
        ?>  <img class="bg-warning img-thumbnail w-50 rounded float-left" src="../img/<?=$imagerow['image']?>" alt="t"> <?php
      }
      ?>
    </div>

  <?php
}
 ?>

 <main class="px-3 text-center w-100 h-100 p-5 mx-auto flex-column">
     <h1>Инструкция</h1>
     <h5 class="font-weight-normal">
      Оставьте заявку на приобретение товара.<h5 class="text-break">
      Его можно забрать в будние дни с пункта самовывоза
      по адресу г.Якутск, ул. Аммосова, д.18, каб.102</h5>
      <h5 class="text-break">
      Оплата заказа банковской картой при получении товара</h5>
    </h5>
   </main>

   <div class="container mt-2">
     <div class="row">
       <div class="col-md-15 text-center">
     <form action="./order.php" method="post">
       <input type="text" class="form-control" name="fio" id="fio" placeholder="Введите имя"><br>
        <input type="number" class="form-control" name="order_number" id="order_number" placeholder="Введите количество товаров в штуках"><br>
         <input type="number" class="form-control" name="phone" id="phone" placeholder="Введите номер телефона"><br>
         <button class="btn btn-success"type="submit">Отправить</button>
         <?php
         if(isset($_SESSION["z_success"])){
           echo $_SESSION["z_success"];}
          ?>
     </form>
      </div>
     </div>
   </div>

   <?php require "blocks/footer.php"?>
 </body>
</html>
