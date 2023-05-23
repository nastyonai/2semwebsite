<?php
$mysql = new mysqli('localhost','root','','mydb');

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];

$mysql->query("INSERT INTO `products` (`id`, `title`, `price`, `description`) VALUES (NULL, '$title', '$price', '$description')") ;
header('Location:admin.php');

 ?>
