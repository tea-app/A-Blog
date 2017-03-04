<?php
/*
    ブログ情報更新用
    
    テーブルは１行のみ
*/
require_once(__DIR__.'/connectdb.php');

$blog_name      = $_POST['blog_name'];
$blog_author    = $_POST['blog_author'];

$id = 1;
// ブログ名更新
$stmt = $pdo -> prepare("UPDATE blog_info SET blog_name = :blog_name WHERE id = :id");
$stmt -> bindParam(':blog_name', $blog_name, PDO::PARAM_STR);
$stmt -> bindParam(':id', $id, PDO::PARAM_INT);
$stmt -> execute();
$stmt = null;

// ブログ投稿者更新
$stmt = $pdo -> prepare("UPDATE blog_info SET blog_author = :blog_author WHERE id = :id");
$stmt -> bindParam(':blog_author', $blog_author, PDO::PARAM_STR);
$stmt -> bindParam(':id', $id, PDO::PARAM_INT);
$stmt -> execute();

header('Location: http://localhost:8888/A-Blog/src/info.php');