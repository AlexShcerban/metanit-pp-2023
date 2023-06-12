<?php
    $langid = "1";
    $nameL = "c++";  //
    $count = 5;
?>

<header>
    <a href="../index.php" id = "header_button_main">Metanit.com</a>
    <div id = "header_block">
        <span class = "header_button"><^></span>
        <?php for ($i=0; $i < $count; $i++) { ?>
            <a href="../html/language.php?lang=<?= $langid ?>" class = "header_button"><?= $nameL ?></a>
        <?php } ?>
    </div>
    <div id = "header_button_search">
        Поиск
    </div>
</header> 