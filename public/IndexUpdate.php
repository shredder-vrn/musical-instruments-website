<?php
require_once 'config/connect.php';

$product_id = $_GET['id'];
$product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$product_id'");
$product = mysqli_fetch_assoc($product);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактировать комментарий</title>
    <link rel="stylesheet" type="text/css" href="css/header_footer.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/button.css">

</head>

<body>
    <header class="container-fluid">
        <div class="container d-flex">
            <img src="images/main/logo.png" alt="Logo" width="100" height="100">
            <nav class="menu">
                <a href="./Katalog.html">КАТАЛОГ</a>
                <a href="AboutMe.html">ОБ АВТОРЕ</a>
                <a href="./Katalog.Cart.html">ЗАКЛАДКИ</a>
                <a href="Index.php">ОТЗЫВЫ</a>
            </nav>
            <form action="#" name="search" method="get">
                <!-- <div class="d-flex">
                    <input type="text" name="search" placeholder="Поиск по каталогу">
                    <input type="submit" name="search" value=" ">
                </div> -->
            </form>
        </div>
    </header>




    <main class="container-fluid">
        <div class="container" style="height: 100%; background-color: #0f0f0f; padding: 20px;">
            <div class="adder" style="color: wheat; margin-top: 20px; margin-top: 250px; margin-bottom: 150px">

                <h3 style="margin-bottom: 10px; text-align: center;">Ваш комментарий ʕ ᵔᴥᵔ ʔ</h3>
                <form action="vendor/update.php" method="post" style="margin: 0px 250px;">
                    <input type="hidden" name="id" value="<?= $product['id'] ?>">
                    <p>Заголовок</p>
                    <input type="text" name="title" value="<?= $product['title'] ?>" readonly style="width: 100%; box-sizing: border-box;">
                    <p>Описание</p>
                    <textarea name="description" style="width: 100%; height: 150px;"><?= $product['description'] ?></textarea>
                    <button class="button_redate">Редактировать</button>
                </form>
            </div>
        </div>
    </main>



    <footer class="container-fluid">
        <div class="container d-flex">
            <div class="left d-flex">
                <figure>
                    <img src="images/main/logo.png" alt="Logo" width="100" height="100">
                    <figcaption>Музыкальные инструменты "АККО"</figcaption>
                </figure>
                <nav>
                    <a class="active" href="#">Каталог</a>
                    <a href="AboutMe.html">Об авторе</a>
                </nav>
            </div>
            <div class="right">
                <form name="search" action="#" method="get">
                    <div class="d-flex">
                        <input type="text" name="search" placeholder="Поиск по каталогу">
                        <input type="submit" name="search" value=" ">
                    </div>
                </form>
                <div>
                    <p>Следите за нами в соц сетях:</p>
                    <a href="https://t.me/Shredder_vrn" target="_blank" class="box telega"></a>
                    <a href="mailto:p_shcherbatov@mail.ru" target="_blank" class="box mail"></a>
                    <a href="https://vk.com/shredder_vrn" target="_blank" class="box vk"></a>
                </div>
            </div>
        </div>
        <div class="protect">
            <p>Все права защищены &copy; 2024</p>
        </div>
    </footer>

    <script src="./JS/Katalog.Script.js"></script>
</body>



<!-- "Аккордеон Даша - Очень удобный и простой в использовании! Рекомендую!"
"Аккордеон Ирина - Качество звука просто поражает! Спасибо за отличный продукт!"
"Аккордеон Маша - Хороший выбор для начинающих музыкантов. Пользуюсь уже несколько месяцев и очень доволен!"
"Аккордеон Юниор - Отличное соотношение цены и качества. Брал для учебы, не жалею!"
"Аккордеон Сатурн - Идеальный инструмент для выступлений на сцене. Стильный дизайн и мощный звук!"
"Аккордеон Юпитер - Впечатляющее звучание и прочная конструкция. Люблю играть на нем в свободное время!" -->

</html>