<?php
/*
    記事新規作成
*/
// データベース接続
require_once('connectdb.php');

// 新規投稿処理
$post_id        = $_POST['post_id'];
$post_author    = $_POST['post_author'];
$post_title     = $_POST['post_title'];
$post_content   = $_POST['post_content'];

$stmt = $pdo -> prepare("INSERT INTO posts (post_id, post_author, post_title, post_content) VALUES (:post_id, :post_author, :post_title, :post_content)");
$stmt -> bindValue(':post_id', $post_id, PDO::PARAM_INT);
$stmt -> bindValue(':post_author', $post_author, PDO::PARAM_STR);
$stmt -> bindValue(':post_title', $post_title, PDO::PARAM_STR);
$stmt -> bindValue(':post_content', $post_content, PDO::PARAM_STR);
$stmt -> execute();
