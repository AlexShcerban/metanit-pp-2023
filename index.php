<?php
    $langid = "1";
    $name = "c++";
    $count = 5;
    $count_news = 6;
    $newsid = 1;
    $news = "Pattern Matching";
    $news_lang = "Python";
    $date = "13.05.2023";


    //https://www.figma.com/file/t7GIUFphNlUpyUg6koubUb/metanit?type=design&node-id=4-6024&t=Ce32M1B7TwzLnxAC-0
    //1 день - 3 часа
    //2 день  14.30 - 15.30, 


    //форма доната !!! 1
    //картинки !!! 3
    //бд 
    //описание языка тоже сделать через php !!! 2
    //поиск
    //другие языки

    //адаптив
    //404
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <a href="index.php" id = "header_button_main">Metanit.com</a>
        <div id = "header_block">
            <span class = "header_button"><^></span>
            <?php for ($i=0; $i < $count; $i++) { ?>
                <a href="html/language.php?lang=<?= $langid ?>" class = "header_button"><?= $name ?></a>
            <?php } ?>
        </div>
        <div id = "header_button_search">
            Поиск
        </div>
    </header>

    <main>
        <div id = "main_h1">Сайт о программировании</div>
        <div id = "main_text">
            <p> Данный сайт посвящен различным языкам и технологиям программирования, компьютерам, мобильным платформам и ИТ-технологиям. Здесь будут выкладываться различные руководства и учебные материалы, статьи и примеры.
            </p>
            <p> На сайте можно найти материалы по таким направлениям, как язык C# и семейство технологий .NET (ASP.NET, WPF, Entity Framework и т.д.), технологии на базе Java ( Java SE, программирование под ОС Андроид и т.д.), Python, Dart (в том числе Flutter), работа с базами данных (MS SQL Server, MySQL, MongoDB) а также WEB-технологии, такие как HTML5, AJAX, jQuery, Node.js, ExtJS, Angular, React и др.
            </p>
            <p> Поскольку жизнь не стоит на месте, все материалы по возможности дополняются и обновляются, чтобы соответствовать духу времени и не терять своей актуальности.
            </p>
            <p> По всем вопросам касательно сайта пишите по адресу metanit22@mail.ru.</p>
            <p> Спасибо за посещение сайта.</p>
        </div>

        <div id = "main_h1_2">Что нового</div>
        <div id = "main_news_block">
            <?php for ($i=0; $i < $count_news; $i++) { ?>
                <p class = "main_news_all">Добавлены материалы по <a href="html/news.php?newsid=<?= $newsid ?>" class = "main_news"><?= $news ?></a> на <?= $news_lang ?><br>
                <span class = "main_news_date"><?= $date ?></span></p>
            <?php } ?>
        </div>
    </main>

    <div style = "width: 1440px; background: black;">asdasd</div>
    
    <footer>
        <div id = "footer_email"><div id = "footer_email_text"><a href="mailto:melanit22@mail.ru">melanit22@mail.ru</a></div></div>
        <div id = "footer_text">Copyright © metanit.com, 2023. <br> Все права защищены.</div>
    </footer>
</body>
</html>