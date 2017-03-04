<?php
/*
    カテゴリ追加
*/
require_once(__DIR__.'/connectdb.php');
$cate_name = $_POST['cate_name'];
$stmt = $pdo -> prepare("INSERT INTO categories (name) VALUES (:name)");
$stmt -> bindValue(':name', $cate_name, PDO::PARAM_STR);
$stmt -> execute();
header('Location: http://localhost:8888/A-Blog/src/cate.php');

/*
    リダイレクトできない？。。。
*/