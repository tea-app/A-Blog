<?php
/*
    ブログ情報取得
*/

function read_blog_info() {
    require_once(__DIR__.'/connectdb.php');
    $stmt = $pdo -> prepare("SELECT * FROM blog_info WHERE id = :id");
    $stmt -> bindValue(':id', 1, PDO::PARAM_INT);
    $stmt -> execute();
    $blog_info = $stmt -> fetch();
    return $blog_info;
}