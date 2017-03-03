<?php
/*
    記事読み込み
*/
require_once('connectdb.php');

$stmt = $pdo -> prepare("SELECT * FROM posts WHERE id = :id");
$stmt -> bindValue(':id', 1, PDO::PARAM_INT);
$stmt -> execute();
if ($rows = $stmt -> fetch()) {
    $post_author  = $rows["post_author"];
    $post_title   = $rows["post_title"];
    $post_content = $rows["post_content"];
    $post_cate    = $rows["post_cate"];
}
echo $post_author;