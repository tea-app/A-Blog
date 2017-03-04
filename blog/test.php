<?php
/*
    記事一覧
    ループ部分

    使用可能変数：
    
    $post['id']             ->  記事ID
    $post['post_title']     ->  記事タイトル
    $post['post_content']   ->  記事コンテンツ
    $post['post_author']    ->  記事投稿者名
    $post['post_cate']      ->  記事カテゴリ
    $post['post_time']      ->  更新時間
*/

echo $post['post_title'];
var_dump($post);

?>