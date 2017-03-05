<?php
/*
    カテゴリ情報を1つだけ取得(id指定)
*/


function get_cate() {
    require_once(__DIR__.'/connectdb.php');
    $abc = var_dump($pdo);
//    $id += 23;
    return $abc;
}