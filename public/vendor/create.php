<?php
require_once '../config/connect.php';

// Проверка наличия данных в полях
if(empty($_POST['title']) || empty($_POST['description'])) {
    // Если какое-то поле пустое, выполнение кода прекращается
    // и пользователь перенаправляется на страницу с формой с сообщением об ошибке
    header('Location: /Index.php?error=empty_fields');
    exit();
}

$title = $_POST['title'];
$description = $_POST['description'];

// Вставка данных в таблицу только если поля не пустые
mysqli_query($connect, "INSERT INTO `products` (`id`, `title`, `description`) VALUES(NULL, '$title', '$description')");
header('Location: /Index.php');
?>
