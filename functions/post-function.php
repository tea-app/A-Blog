<?php
/*
    記事新規作成
*/
require_once('connectdb.php');

// 新規作成処理
$post_author  = $_POST['post_author'];
$post_title   = $_POST['post_title'];
$post_content = $_POST['post_content'];
$post_cate    = $_POST['post_cate'];

$stmt = $pdo -> prepare("INSERT INTO posts (post_author, post_title, post_content, post_cate) VALUES (:post_author, :post_title, :post_content, :post_cate)");
$stmt -> bindValue(':post_author', $post_author, PDO::PARAM_STR);
$stmt -> bindValue(':post_title', $post_title, PDO::PARAM_STR);
$stmt -> bindValue(':post_content', $post_content, PDO::PARAM_STR);
$stmt -> bindValue(':post_cate', $post_cate, PDO::PARAM_INT);
$stmt -> execute();
