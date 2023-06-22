


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
                <input type="search" id = "search_text" name = "search" placeholder = "Технологии Google">
                <input type="submit" value="" id = "search_button">
            </form>
        </div>
        <div id = "search_results">Найдено результатов: 999</div>

        <div id = "search_all">
            <?php for ($i=0; $i < 5; $i++) { ?>
                <div class = "search_block">
                    <a href = "page.php?page=1">
                        <div class = "search_name">Основные этапы</div>
                        <div class = "search_folder">С++/Введение по С++</div>
                        <div class = "search_text">О разделе. Данный раздел посвящен языку программирования C. Несмотря на большую историю язык Cи остается одним из самым популярных и распространенных языков ...</div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </main>

</body>
</html>