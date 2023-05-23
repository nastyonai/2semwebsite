<?php session_start();
$mysql = new mysqli('localhost','root','','mydb');

if(empty($_SESSION["admin"])){
  header("Location: /");
  exit();}
  ?>
 <!DOCTYPE html>
 <html lang="ru">
   <head>
     <meta charset="utf-8">
     <title>Редактор товаров</title>
   </head>
   <style>
     th, td{
       padding: 10px;
     }
     th{
       background: #606060;
       color: #ffffff;
     }
       td{
         background: #b5b5b5;
       }
   </style>
   <body>
     <h1 >Редактор товаров</h1>
     <table>
       <tr>
         <th>ID</th>
         <th>Название</th>
         <th>Цена</th>
         <th>Описание</th>
       </tr>
       <?php
       $products = $mysql->query("SELECT * FROM `products`");
       $products = mysqli_fetch_all($products);
       foreach($products as $product){
         ?>
         <tr>
          <td><?= $product[0]?></td>
          <td><?= $product[1]?></td>
          <td><?= $product[2]?></td>
          <td><?= $product[3]?></td>
          <td><a href="update.php?id=<?= $product[0]?>">Редактировать</a> </td>
          <td><a style = "color: red; "href="delete.php?id=<?= $product[0]?>">Удалить</a> </td>
         </tr>
         <?php
       }
        ?>
     </table>
     <h3>Добавить новый товар</h3>
     <form action="create.php" method="post">
       <p>Название</p>
       <input type="text" name="title">
       <p>Описание</p>
<textarea name="description"></textarea>
<p>Цена</p>
<input type="number" name="price"> <br><br>
       <button type="submit">Добавить</button>
     </form>
  <p class="mt-5"><a href="../">Назад</a></p>
   </body>
 </html>
