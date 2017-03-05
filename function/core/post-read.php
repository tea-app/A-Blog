<?php

/*
    指定記事のみデータを取得(id指定)
*/
function readPost($pdo, $id) {
    $post = null;
    $stmt = $pdo -> prepare("SELECT * FROM posts WHERE id = :id");
    $stmt -> bindParam(':id', $id, PDO::PARAM_INT);
    $stmt -> execute();
    $post = $stmt -> fetch();
    
    return $post;
}