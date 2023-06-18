<?php
    require_once "../config/connect.php";


    $id = $_GET["lang"]; //id языка
    $lang = mysqli_query($connect, "SELECT `name`, `description` FROM `language` WHERE `id`=$id");
    $lang = mysqli_fetch_all($lang);
    $h1 = mysqli_query($connect, "SELECT `id`, `name`, `number` FROM `h1` WHERE `id-lang`=$id");
    $h1 = mysqli_fetch_all($h1);

    $page = mysqli_query($connect, "SELECT `id`, `name`, `number`, `id-h1` FROM `h2` WHERE `id-lang`=$id");
    $page = mysqli_fetch_all($page);

    $name = $lang[0][0];  //название страницы
    $descript = str_replace("\n", "</p><p>", $lang[0][1]);

    $count1 = count($h1); //главы
    $count2 = count($page); //подглавы
    $namepage1 = "Введение по C++";
    $namepage2 = "Основные этапы";
    $pageid = 1;
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $name ?></title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
    <?php require_once "../php/header.php" ?>
    <div id = "background">
        <img src="../img/bg-4.png" id = "bg_3">
        <img src="../img/bg-1.png" id = "bg_1">
    </div>

    <!-- Форма доната -->
    <div id = "donate_2">
        <div id = "donate_block">
            <div id = "donate_text">
                Хотите помочь сайту? <br><br>
                Qiwi: <br>
                <a href="https://www.qiwi.com/n/MITANIT">qiwi.com/n/MITANIT</a><br><br><br>
                YooMoney: <br>
                <a href="https://www.qiwi.com/n/MITANIT">410011174743222</a>
            </div>
            <div id = "donate_card">
                <br>
                Перевод на карту <br>
                Номер карты: <br>
                <a href="https://www.qiwi.com/n/MITANIT">4048415020898850</a> <br>
            </div>
        </div>
        <div id = "donate_a">
            <a href="https://vk.com/al_im.php?sel=657073694"><div class = "donate_a"><img src="img/search.PNG"></div></a>
            <a href="https://vk.com/al_im.php?sel=657073694"><div class = "donate_a"><img src="img/search.PNG"></div></a>
            <a href="https://vk.com/al_im.php?sel=657073694"><div class = "donate_a"><img src="img/search.PNG"></div></a>
            <a href="https://vk.com/al_im.php?sel=657073694"><div class = "donate_a"><img src="img/search.PNG"></div></a>
        </div>
    </div>
    <!-- ----- -->

    <main>
        <div id = "main_h1">О разделе</div>
        <div id = "main_text">
            <p> Данный раздел посвящен языку программирования C++ </p>

            <p> 
                <?= $descript ?>
            </p>
        </div>

        <div id = "main_h1_2">Руководство по <?= $name ?></div>
        <div id = "language_list">
            <?php for ($i=0; $i < count($h1); $i++) { ?>
                <p>
                    Глава <?= $i ?>. <?= $h1[$i][1] ?>
                    <ul class = "language_ul">

                        <?php
                        for ($x=0; $x < count($page); $x++) {  
                            if($page[$x][3] == $h1[$i][0]){ ?>
                                <li><a href="page.php?page=<?= $page[$x][0] ?>" class = "language_li"><?= $page[$x][1] ?></a></li>
                        <?php }} ?>
                    </ul>
                </p>
            <?php } ?>
        </div>
    </main>

    <footer>
        <div id = "footer_email"><div id = "footer_email_text"><a href="mailto:melanit22@mail.ru">melanit22@mail.ru</a></div></div>
        <div id = "footer_text">Copyright © metanit.com, 2023. <br> Все права защищены.</div>
    </footer>
</body>
</html>