<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('posts.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pagination PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php
            // получение номера страницы 
            $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
            // уменьше так как массив с 0 а индексы с 1 
            $index = $page - 1;
        ?>
        <!-- если номер поста корректный то выводим пост -->
        <?php if (isset($posts[$index])) : ?>
            <?php
                // в $post кладдем индекс по которому вытянем данные
                $post = $posts[$index];
            ?>
            <div class="row">
                <div class="col-6">
                    <h2>Твой котик : <?=$post['name']?></h2>
                    <h2>Цвет : <?=$post['color']?></h2>
                    <img class="img-new"  src=" <?= htmlspecialchars($post['photo'], ENT_QUOTES, 'UTF-8') ?> " alt="">
                </div>
            </div>
            <button><a href="index.php?page=1">Назад</a></button>
            <?php else :  echo "Нет постов для отображения на этой странице."; ?>
        <?php endif; ?>
    </div>
    <style>
        .img-new{
            height: 550px;
        }
    </style>
</body>

</html>