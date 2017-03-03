<?php
/*
    カテゴリー削除
*/
require_once('connectdb.php');
/*
    カテゴリー削除処理
*/
$select_id = 4;
$stmt = $pdo -> prepare("DELETE FROM categories WHERE id = :delete_id");
$stmt -> bindValue(':delete_id', $select_id, PDO::PARAM_INT);
$stmt -> execute();