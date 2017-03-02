<?php
/*
    記事修正
*/
// データベース接続
require_once('connectdb.php');

/*
    記事修正処理
*/
//$post_title = "sdfsdfa";
// $primary_id = 2;
//$myid = 2;
$post_id = 1311;
$id = 7;

$stmt = $pdo -> prepare("UPDATE posts SET post_id = :post_id WHERE id = :id");
$stmt -> bindParam(':post_id', $post_id, PDO::PARAM_INT);
$stmt -> bindParam(':id', $id, PDO::PARAM_INT);
$stmt -> execute();

/*
    TODO:
    - post_idはprimaryだからそれの処理を行う
*/