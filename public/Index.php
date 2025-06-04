<?php
require_once 'config/connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
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
                <a class="active" href="#">ОТЗЫВЫ</a>
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
            <div class="container-table" style="width: 80%; margin: 20px auto;">
                <table class="tablee" style="width: 100%; color: wheat; border-collapse: collapse; border: 3px solid white;">
                    <tr class="hat" style="border-bottom: 3px solid white;">
                        <th style="border-right: 3px solid white;">ID</th>
                        <th style="border-right: 3px solid white;">Название</th>
                        <th style="border-right: 3px solid white;">Описание</th>
                    </tr>

                    <?php
                    $products = mysqli_query($connect, "SELECT * FROM `products`");
                    $products = mysqli_fetch_all($products);
                    foreach ($products as $product) {
                    ?>
                        <tr class="list" style="border-bottom: 3px solid white;">
                            <td style="border-right: 3px solid white;"><?= $product[0] ?></td>
                            <td style="border-right: 3px solid white;"><?= $product[1] ?></td>
                            <td style="border-right: 3px solid white;"><?= $product[2] ?></td>
                            <td style="border-right: 3px solid white;"><a class="edit-button" href="IndexUpdate.php?id=<?= $product[0] ?>" style="color: wheat; text-decoration: none;">Изменить</a></td>
                            <td><a class="delete-button" href="vendor/delete.php?id=<?= $product[0] ?>" style="color: wheat; text-decoration: none;">Удалить</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
            <div class="adder" style="color: wheat; margin-top: 20px;  margin-top: 250px;">
                <h3 style="margin-bottom: 10px; text-align: center;">Оставить комментарий</h3>
                <form class="st" action="vendor/create.php" method="post">
                    <p>Название Инструмента</p>
                    <div>
                        <select name="title" style="width: 100%;">
                            <option value="" selected>Выберите инструмент</option>
                            <option value="Ирина">Ирина</option>
                            <option value="Даша">Даша</option>
                            <option value="Маша">Маша</option>
                            <option value="Юниор">Юниор</option>
                            <option value="Сатурн">Сатурн</option>
                            <option value="Юпитер">Юпитер</option>
                        </select>
                    </div>
                    <div style="border-top: 20px;">
                        <p style="border-top:20px">Комментарий</p>
                        <textarea class="area" name="description" style="width: 100%; height: 100px;"></textarea>
                    </div>
                    <button class="button_clear">Добавить</button>

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

</html>