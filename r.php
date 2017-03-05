<?php
require_once('function/core/connect.php');
$pdo = connect();

$id = $_GET['id'];
require_once('function/core/post-read.php');
$post = readPost($pdo, $id);

require_once('function/core/blog-info-read.php');
$info = read_blog_info($pdo);
?>

<!--
//  ブログ情報
$info['blog_name']      =>  ブログタイトル
$info['blog_author']    =>  ブログ管理者

//  記事情報
$post['id']            =>  記事ID
$post['post_author']   =>  記事投稿者
$post['post_title']    =>  記事タイトル
$post['post_content']  =>  記事本文
$post['post_cate']     =>  記事カテゴリ
$post['post_time']     =>  投稿時間
-->

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title><?php echo $info['blog_name']; ?></title>
</head>
<body>
    <div class="main">
        <?php
        if ($post == false) {
            echo '404 Not Found.';
        } else {
            
            echo $post['post_title'];
            
        }
//        var_dump($post);
        
        ?>
    </div>
</body>
</html>