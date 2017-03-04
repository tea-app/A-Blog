<?php
/*
    記事全部読み込み
*/

function read_post_all() {
    require_once(__DIR__.'/connectdb.php');
    
    $stmt = $pdo -> prepare("SELECT * FROM posts");
    $stmt -> execute();
    $posts = $stmt -> fetchAll();
    return $posts;
}
