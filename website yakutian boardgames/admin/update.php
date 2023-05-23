<?php

$mysql = new mysqli('localhost','root','','mydb');
$product_id=$_GET['id'];
$product = $mysql->query("SELECT * FROM `products` WHERE `id` = '$product_id'");
$product = $product->fetch_assoc();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Редактировать</title>
  </head>
  <body>
    <h3>Редактировать</h3>
    <form action="updatec.php" method="post">
      <input type="hidden" name="id" value="<?= $product['id']?>">
      <p>Название</p>
      <input type="text" name="title" value = "<?= $product['title']?>">
      <p>Описание</p>
      <textarea name="description"><?= $product['description']?></textarea>
      <p>Цена</p>
<input type="number" name="price" value="<?= $product['price']?>">
<button type="submit" >Обновить</button>
    </form>
  </body>
</html>
