<?php
$mysql = new mysqli('localhost','root','','mydb');
$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];

$mysql->query("UPDATE `products` SET `title` = '$title', `price` = '$price', `description` = '$description' WHERE `products`.`id` = '$id'") ;
header('Location:admin.php');

 ?>
