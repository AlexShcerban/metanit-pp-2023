<?php
    require_once "../config/connect.php";

    $search = $_GET["search"];

    $list = mysqli_query($connect, "SELECT `h2`.`id`, `h2`.`name`, `h2`.`text`, `language`.`name`, `h1`.`name` FROM `h2` JOIN `h1` ON `h2`.`id-h1` = `h1`.`id` JOIN `language` ON `h2`.`id-lang` = `language`.`id`");
    $list = mysqli_fetch_all($list);
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Поиск</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
    <?php require_once "../php/header.php" ?>
    <div id = "background">
        <img src="../img/bg-1.png" id = "bg_1">
    </div>
    <main>
        <div id = "search">
            <form action="" method="get">
                <input type="search" id = "search_text" name = "search" placeholder = "Введите запрос">
                <button type = "submit" id = "search_button"><img id = "search_img" src="../img/search1.png"></button>
            </form>
        </div>
        <div id = "search_results">Найдено результатов: <?= count($list) ?></div>

        <div id = "search_all">
            <?php for ($i=0; $i < count($list); $i++) { 
                if($search == ""){ $find = true; } 
                else{ $find = substr_count($list[$i][1], $search); }

                if($find){
            ?>
                <div class = "search_block">
                    <a href = "page.php?page=<?= $list[$i][0] ?>">
                        <div class = "search_name"><?= $list[$i][1] ?></div>
                        <div class = "search_folder"><?= $list[$i][3] ?>/<?= $list[$i][4] ?></div>
                        <div class = "search_text"><?= $list[$i][2] ?></div>
                    </a>
                </div>
            <?php }} ?>
        </div>
    </main>

</body>
</html>