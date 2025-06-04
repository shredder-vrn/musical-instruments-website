<?php
require_once '../config/connect.php';
$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
mysqli_query($connect, "UPDATE `products` SET `title` = '$title', `description` = '$description' WHERE `products`.`id` = '$id'");
header('Location: /Index.php');