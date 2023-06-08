<?php
    $langid1 = $_GET["lang"]; //id языка
    $name1 = "c++";  //название страницы

    $count1 = 5; //главы
    $count2 = 3; //подглавы
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
    <title><?= $name1 ?></title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
    <?php require_once "../php/header.php" ?>

    <main>
        <div id = "main_h1">О разделе</div>
        <div id = "main_text">
            <p> Данный раздел посвящен языку программирования C++ </p>

            <p> C++ на сегодняшний день является одним из самым 
            популярных и распространенных языков программирования, который позволяет создавать приложения для любого спектра задач: разработка прикладных приложений, мобильная разработка и особенно системное программирование. Отличительной особенностью программ на C++ является высокая скорость работы, поэтому данные языки особенно часто используются в тех случаях, где необходимо обеспечить высокую производительность и быстродействие.
            </p>
            <p> Для изучения базовых концепций языка C++, в разделе имеется Руководство по C++. Для проверки в разделе также есть Упражнения начального уровня
            </p>
        </div>

        <div id = "main_h1_2">Руководство по <?= $name1 ?></div>
        <div id = "language_list">
            <?php for ($i=0; $i < $count1; $i++) { ?>
                <p>
                    Глава <?= $i ?>. <?= $namepage1 ?>
                    <ul class = "language_ul">
                        <?php for ($x=0; $x < $count2; $x++) {  ?>
                            <li><a href="page.php?page=<?= $pageid ?>" class = "language_li"><?= $namepage2 ?></a></li>
                        <?php } ?>
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