<?php
// 記事データ読み込み
require_once('core/post-read.php');

$id     = $_GET['id'];
$post = readPost($id);
$title   = $post['post_title'];
$content = nl2br($post['post_content']);
$author  = $post['post_author'];
$cate    = $post['post_cate'];

if ($post == null) {
    echo '404 Not Found';
}