<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require_once('cardsArr.php');

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pagination PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <h1>Мои котики и первая пагинация на php</h1>
        <div class="row gx-5 mt-3">
            <?php foreach ($product_on_page as $i => $key) : ?>
                <style>
                    .img-fluid{
                    max-width: 100%;
                    height: 350px !important;
                    }
                </style>
                <div class="col">
                    <a href="single.php?page=<?= $i + 1 ?>" > <?= $i + 1 . " " . $key['name'] ?></a>
                    
                    <div class="card" style="width: 18rem;">
                        
                        <img class="img-fluid" src="<?= htmlspecialchars($key['photo'], ENT_QUOTES, 'UTF-8'); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><?= " Цвет: " .   $key['color']?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div aria-label="Page navigation example " class="mt-4">
            <ul class="pagination justify-content-center">
                <?php for ($i = $filrs_item; $i <= $pages_total; $i = $i + 1) : ?>
                    <li class="page-item">
                        <a class="page-link" href="index.php?page=<?= $i ?>"><?= $i ?></a>
                    </li>
                <?php endfor; ?>
            </ul>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>