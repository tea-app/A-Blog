<?php
/*
    記事修正
*/
require_once('connectdb.php');
/*
    記事修正処理
*/
// 修正部分
$post_content = 'ebzdff';
// 修正箇所指定
$id = 1;
$stmt = $pdo -> prepare("UPDATE posts SET post_content = :post_content WHERE id = :id");
$stmt -> bindParam(':post_content', $post_content, PDO::PARAM_STR);
$stmt -> bindParam(':id', $id, PDO::PARAM_INT);
$stmt -> execute();