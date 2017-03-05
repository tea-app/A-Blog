<?php
/*
    カテゴリ全部取得
*/
function get_cate_all($pdo) {        
    $stmt = $pdo -> prepare("SELECT * FROM categories");
    $stmt -> execute();
    $cates = $stmt -> fetchAll();
    return $cates;
}