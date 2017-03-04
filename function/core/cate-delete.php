<?php

require_once(__DIR__.'/connectdb.php');
$stmt = $pdo -> prepare("DELETE FROM categories WHERE id = :delete_id");
$stmt -> bindValue(':delete_id', $_POST['id'], PDO::PARAM_INT);
$stmt -> execute();
header('Location: http://localhost:8888/A-Blog/src/cate.php');
