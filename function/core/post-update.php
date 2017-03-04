<?php
/*
    記事更新
*/
require_once(__DIR__.'/connectdb.php');

$id = $_POST['id'];
// 更新内容
$post_author = $_POST['post_author'];
$post_title = $_POST['post_title'];
$post_content = $_POST['post_content'];
$post_cate = $_POST['post_cate'];

//echo $post_title;
//echo $post_author;
//echo $post_content;
//echo $post_cate;

// 投稿者名更新
$stmt = $pdo -> prepare("UPDATE posts SET post_author = :post_author WHERE id = :id");
$stmt -> bindParam(':post_author', $post_author, PDO::PARAM_STR);
$stmt -> bindParam(':id', $id, PDO::PARAM_INT);
$stmt -> execute();
$stmt = null;

// 記事名更新
$stmt = $pdo -> prepare("UPDATE posts SET post_title = :post_title WHERE id = :id");
$stmt -> bindParam(':post_title', $post_title, PDO::PARAM_STR);
$stmt -> bindParam(':id', $id, PDO::PARAM_INT);
$stmt -> execute();
$stmt = null;

// 記事コンテンツ更新
$stmt = $pdo -> prepare("UPDATE posts SET post_content = :post_content WHERE id = :id");
$stmt -> bindParam(':post_content', $post_content, PDO::PARAM_STR);
$stmt -> bindParam(':id', $id, PDO::PARAM_INT);
$stmt -> execute();
$stmt = null;

// 記事カテゴリ更新
$stmt = $pdo -> prepare("UPDATE posts SET post_cate = :post_cate WHERE id = :id");
$stmt -> bindParam(':post_cate', $post_cate, PDO::PARAM_STR);
$stmt -> bindParam(':id', $id, PDO::PARAM_INT);
$stmt -> execute();
$stmt = null;

header('Location: http://localhost:8888/A-Blog/src/posts.php');
