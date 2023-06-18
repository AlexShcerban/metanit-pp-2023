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
</head>
<body>
    
    <?php require_once "../php/header.php" ?>
        <!-- Форма доната -->
        <div id = "donate_3">
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