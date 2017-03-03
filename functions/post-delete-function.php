<?php
/*
    投稿削除
*/
require_once('connectdb.php');
/*
    記事削除処理
*/
$select_id = 2;
$stmt = $pdo -> prepare("DELETE FROM posts WHERE id = :delete_id");
$stmt -> bindValue(':delete_id', $select_id, PDO::PARAM_INT);
$stmt -> execute();