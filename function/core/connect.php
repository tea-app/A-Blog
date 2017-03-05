<?php

function connect() {
    
    require_once(__DIR__.'/../../settings/dbset.php');

    $pdo = null;
    try {
        $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname};charset=utf8",$dbuser,$dbpass);
    } catch (PDOExpextion $e) {
        exit('データベース接続失敗。'.$e->getMessage());
    }
    
    return $pdo;
}