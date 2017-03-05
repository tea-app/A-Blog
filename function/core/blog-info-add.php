<?
/*
    ブログ情報新規追加(初期設定用)
*/
require_once(__DIR__.'/connect.php');

$pdo = connect();
$blog_name = 'A-Blog';
$blog_author = 'Admin';
$stmt = $pdo -> prepare("INSERT INTO blog_info (blog_name, blog_author) VALUES (:blog_name, :blog_author)");
$stmt -> bindValue(':blog_name', $blog_name, PDO::PARAM_STR);
$stmt -> bindValue(':blog_author', $blog_author, PDO::PARAM_STR);
$stmt -> execute();