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
    //1 день  3 часа
    //2 день  14.30 - 15.30  1 час
    //3 день  18:14 - 18:49  30 минут
    //4 день  17:35 - 20:00  2,5 часов
    //5 день  13.10 - 15.00  2 часа
    //6 день  13.20 - 15.30  2 часа
    //7 день  19.10 - 21.00  2 часа
    //8 день  15.35 - 16.45  1 час 10 минут
    

    //новости
    //страницы ***

    //найдено результатов неверно
    //окно доп.языки исчезает при нажатии мимо окна

    //шар привязать к низу и чтобы он не выходил за границы ???
    //чтобы можно было оформлять текст страницы ???

    //адаптив
    //404
    //скрыть каталог от пользователей
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>

    <!-- Header -->
    <?php
    $langid = "1";
    $nameL = "c++";  //
    $count = 5;
    ?>

        <script>
            var myDiv = document.getElementById("header_window");

            document.addEventListener("click", function(e) {
                // Проверяем, был ли клик за пределами нашего объекта
                if (!myDiv.contains(e.target)) {
                    myDiv.style.display = "none"; // Скрываем объект
                }
            });
        </script>

        <header>
            <script src="js/code.js"></script>

            <a href="index.php" id = "header_button_main">Metanit.com</a>

            <!-- языки -->
            <div id = "header_block">
                <?php for ($i=0; $i < $count; $i++) { ?>
                    <a href="html/language.php?lang=<?= $langid ?>" class = "header_button"><?= $nameL ?></a>
                <?php } ?>
                <button onclick = "window_plus()" id = "header_lang_button" class = "header_button">
                    <img src = "img/arrow.PNG"  id = "header_button_img">
                </button>

                <!-- Дополнительные языки -->
                <div id = "header_window">
                    <?php for ($x=0; $x < 12; $x++) { ?>
                    <div class = "header_window_button">
                        <a href="html/language.php?lang=1"><div class = "header_window_text">Ассемблер</div></a>
                    </div>
                    <?php } ?>
                </div>
            </div>


            <!-- Поиск -->
            <div id = "header_button_search">
                <form action="html/search.php" method="get">
                    <input type="search" name="search" id="header_search_text">
                    <input type="submit" value="???" id = "header_search_img">
                    <button type="submit" id = "header_search_img"><img id = "header_search_img2" src="img/search.PNG"></button>
                </form>
            </div>
        </header> 
    <!--  -->





    <div id = "background">
        <img src="img/bg-2.png" id = "bg_2">
    </div>

    <!-- Форма доната -->
    <div id = "donate">
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
            <a href="https://vk.com/al_im.php?sel=657073694"><div class = "donate_a"><img src="img/vk.png"></div></a>
            <a href="https://vk.com/al_im.php?sel=657073694"><div class = "donate_a"><img src="img/inst.png"></div></a>
            <a href="https://vk.com/al_im.php?sel=657073694"><div class = "donate_a"><img src="img/fb.png"></div></a>
            <a href="https://vk.com/al_im.php?sel=657073694"><div class = "donate_a"><img src="img/youtube.png"></div></a>
        </div>
    </div>
    <!-- ----- -->

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
                <p class = "main_news_all">Добавлены материалы по <a href="html/page.php?page=<?= $newsid ?>" class = "main_news"><?= $news ?></a> на <?= $news_lang ?><br>
                <span class = "main_news_date"><?= $date ?></span></p>
            <?php } ?>
        </div>
    </main>
    
    <footer>
        <div id = "footer_email"><div id = "footer_email_text"><a href="mailto:melanit22@mail.ru">melanit22@mail.ru</a></div></div>
        <div id = "footer_text">Copyright © metanit.com, 2023. <br> Все права защищены.</div>
    </footer>
</body>
</html>