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
    <script src="../js/code.js"></script>

    <a href="../index.php" id = "header_button_main">Metanit.com</a>

    <!-- языки -->
    <div id = "header_block">
        <?php for ($i=0; $i < $count; $i++) { ?>
            <a href="../html/language.php?lang=<?= $langid ?>" class = "header_button"><?= $nameL ?></a>
        <?php } ?>
        <button onclick = "window_plus()" id = "header_lang_button" class = "header_button">
            <img src = "../img/arrow.PNG"  id = "header_button_img">
        </button>

        <!-- Дополнительные языки -->
        <div id = "header_window">
            <?php for ($x=0; $x < 12; $x++) { ?>
            <div class = "header_window_button">
                <a href="language.php?lang=1"><div class = "header_window_text">Ассемблер</div></a>
            </div>
            <?php } ?>
        </div>
    </div>


    <!-- Поиск -->
    <div id = "header_button_search">
        <form action="search.php" method="get">
            <input type="search" name="search" id="header_search_text">
            <input type="submit" value="???" id = "header_search_img">
            <button type="submit" id = "header_search_img"><img id = "header_search_img2" src="../img/search.PNG"></button>
        </form>
    </div>
</header> 