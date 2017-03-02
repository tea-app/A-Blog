<?php
/*
    カテゴリー追加
    2017/03/02 23:56
*/
require_once('connectdb.php');
/*
    カテゴリー追加処理
*/
$cate_name = 'catename';

$stmt = $pdo -> prepare("INSERT INTO categories (name) VALUES (:name)");
$stmt -> bindValue(':name', $cate_name, PDO::PARAM_STR);
$stmt -> execute();