<?php
/*
    指定記事のみデータを取得
*/
function readPost($id) {
    $post = null;
    $stmt = null;
    $pdo = null;
    require_once(__DIR__.'/connectdb.php');
    $stmt = $pdo -> prepare("SELECT * FROM posts WHERE id = :id");
    $stmt -> bindValue(':id', $id, PDO::PARAM_INT);
    $stmt -> execute();
    $post = $stmt -> fetch();
    return $post;
}