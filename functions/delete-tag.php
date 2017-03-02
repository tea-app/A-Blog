<?php
/*
    タグ削除
    2017/03/02 23:53
*/
require_once('connectdb.php');
/*
    タグ削除処理
*/
$select_id = 3;
$stmt = $pdo -> prepare("DELETE FROM tags WHERE id = :delete_id");
$stmt -> bindValue(':delete_id', $select_id, PDO::PARAM_INT);
$stmt -> execute();