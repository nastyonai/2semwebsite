<?php
session_start();
$fio =filter_var(trim($_POST['fio']),
FILTER_SANITIZE_STRING);
$order_number =filter_var(trim($_POST['order_number']),
FILTER_SANITIZE_STRING);
$phone =filter_var(trim($_POST['phone']),
FILTER_SANITIZE_STRING);
$_SESSION['z_success']='';

$mysql = new mysqli('localhost','root','','mydb');

$mysql->query("INSERT INTO `orders` (`id`,`name`, `order_number`, `phone`)
VALUES(NULL,'$fio','$order_number','$phone')");
$mysql->close();

$_SESSION['z_success']="Заказ успешно добавлен";
header("Location:".$_SERVER["HTTP_REFERER"]);
 ?>
