<?php
/*
    カテゴリ全部酒盗
*/
//require(__DIR__.'/connectdb.php');

function get_cate_all($pdo) {
//    require(__DIR__.'/connect.php');
        
    $stmt = $pdo -> prepare("SELECT * FROM categories");
    $stmt -> execute();
    $cates = $stmt -> fetchAll();
    return $cates;
}