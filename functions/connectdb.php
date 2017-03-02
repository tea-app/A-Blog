<?php
/*
    データベース接続
*/
require_once('../settings/dbset.php');

// データベース接続
try {
    $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname};charset=utf8",$dbuser,$dbpass);
} catch (PDOExpection $e) {
    exit('データベース接続失敗。'.$e->getMessage());
}