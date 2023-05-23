<?php
$mysql = new mysqli('localhost','root','','mydb');

$id = $_GET['id'];

$mysql->query("DELETE FROM `products` WHERE `products`.`id` = '$id'") ;
header('Location:admin.php');
 ?>
