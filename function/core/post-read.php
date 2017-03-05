<?php

/*
    指定記事のみデータを取得
*/
function readPost($pdo, $id) {
//    $post = null;
//    $stmt = null;
//    $pdo  = null;
//    require(__DIR__.'/connectdb.php');
//    require(__DIR__.'/connect.php');
        
//    $pdo    = connect();
    $stmt   = $pdo -> prepare("SELECT * FROM posts WHERE id = :id");
    $stmt -> bindParam(':id', $id, PDO::PARAM_INT);
    
    $stmt -> execute();
    
    $post = $stmt -> fetch();
    
    
//    $stmt2 = $pdo -> prepare("SELECT * FROM categories");
//    $stmt2 -> execute();
//    $cate = $stmt -> fetchAll();
    
    
//    $stmt2 = $pdo -> prepare("SELECT * FROM categories WHERE id = :id");
//    $stmt2 -> bindParam(':id', $id, PDO::PARAM_INT);
//    
//    $stmt2 -> execute();
//    $cate = $stmt2 -> fetch();
//    $stmt = null;
//    $pdo = null;
//    
//    require(__DIR__.'/connectdb.php');
//    $stmt = $pdo -> prepare("SELECT * FROM categories WHERE id = :id");
//    $stmt -> bindParam(':id', $id, PDO::PARAM_INT);
//    $stmt -> execute();
//    
//    $ = $stmt -> fetchAll();
    
    return $post;
}
