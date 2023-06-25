<?php
    require_once "../config/connect.php";

    $id = $_GET["page"]; //id языка
    $page = mysqli_query($connect, "SELECT `name`, `text`, `id-lang` FROM `h2` WHERE `id`=$id");
    $page = mysqli_fetch_all($page);

    $name = $page[0][0];  //название страницы
    $text = str_replace("\n", "</p><p>", $page[0][1]);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $name ?></title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
</head>
<body>
    
    <?php require_once "../php/header.php" ?>

    <main>
        <div class = "page_h1"><?= $name ?></div>
        <div class = "page_text">
            <p>
                <?= $text ?>
            </p>
        </div>

        <div id = "page_button">
            <a href="language.php?lang=<?= $page[0][2] ?>"><div id = "page_button_1"><div class = "vertical_center">Содержание</div></div></a>
            <a href="page.php?page=<?= $id+1 ?>"><div id = "page_button_2"><div class = "vertical_center">Вперед</div></div></a>
        </div>
    </main>

    <footer>
        <div id = "footer_email"><div id = "footer_email_text"><a href="mailto:melanit22@mail.ru">melanit22@mail.ru</a></div></div>
        <div id = "footer_text">Copyright © metanit.com, 2023. <br> Все права защищены.</div>
    </footer>
</body>
</html>