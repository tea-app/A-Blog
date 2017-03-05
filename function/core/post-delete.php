<?php
/*
    記事削除(ID指定)：GETで取得
*/
require_once(__DIR__.'/connect.php');
$pdo = connect();

$stmt = $pdo -> prepare("DELETE FROM posts WHERE id = :delete_id");
$stmt -> bindValue(':delete_id', $_POST['id'], PDO::PARAM_INT);
$stmt -> execute();
header('Location: http://localhost:8888/A-Blog/admin/posts.php');