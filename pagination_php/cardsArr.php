<?php 
require_once('posts.php');
$limit = 4; // сколько будет на стран це 
$page = intval($_GET['page']) ?? 1; // получение номера страницы
$offset = ($page - 1) * $limit; 

$product_count = count($posts); // считаем количество элементов

$pages = $product_count / $limit; // количество делим на лимит для округления

$pages_total = ceil($pages); // округление до целого 

$filrs_item = 1;

$product_on_page = array_slice($posts,$offset,$limit,true);

?>