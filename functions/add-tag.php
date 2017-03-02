<?php
/*
    タグ追加
    2017/03/02 23:48
*/
require_once('connectdb.php');

/*
    タグ追加処理
*/
$tag_name = 'tagname';

$stmt = $pdo -> prepare("INSERT INTO tags (name) VALUES (:name)");
$stmt -> bindValue(':name', $tag_name, PDO::PARAM_STR);
$stmt -> execute();