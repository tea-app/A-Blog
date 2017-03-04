<?php
/*
    記事取得(指定数)
*/

function post_read_num($id) {
    require_once(__DIR__.'/connectdb.php');
    
    $stmt = $pdo -> prepare("SELECT * FROM posts ORDER BY id DESC LIMIT {$id}");
    $stmt -> execute();
    $posts = $stmt -> fetchAll();
    
    return $posts;
}