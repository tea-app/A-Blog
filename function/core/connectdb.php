<?php
/*
    データベース接続
*/
require_once(__DIR__.'/../../settings/dbset.php');

try {
    $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname};charset=utf8",$dbuser,$dbpass);
} catch (PDOExpextion $e) {
    exit('データベース接続失敗。'.$e->getMessage());
}