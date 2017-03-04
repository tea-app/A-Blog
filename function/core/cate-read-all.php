<?php
/*
    カテゴリ全部酒盗
*/

function get_cate_all() {
    require_once(__DIR__.'/connectdb.php');
    
    $stmt = $pdo -> prepare("SELECT * FROM categories");
    $stmt -> execute();
    $cates = $stmt -> fetchAll();
    return $cates;
}