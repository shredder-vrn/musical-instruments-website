<?php
require_once '../config/connect.php';
$id = $_GET['id'];
mysqli_query($connect, "DELETE FROM `products` WHERE `products`.`id` = '$id'");
mysqli_query($connect, "ALTER TABLE `products` AUTO_INCREMENT = 1");
header('Location: /Index.php');
?>
