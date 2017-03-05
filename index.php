<?php
require_once('function/core/connect.php');
$pdo = connect();

require_once('function/core/blog-info-read.php');
$info = read_blog_info($pdo);

require_once('function/core/post-read-num.php');
$posts = post_read_num(5,$pdo);

//require_once('function/core/post-read-all.php');
//$posts2 = read_post_all($pdo);
?>

<!--
//  ブログ情報
$info['blog_name']      =>  ブログタイトル
$info['blog_author']    =>  ブログ管理者

//  記事情報
$posts['id']            =>  記事ID
$posts['post_author']   =>  記事投稿者
$posts['post_title']    =>  記事タイトル
$posts['post_content']  =>  記事本文
$posts['post_cate']     =>  記事カテゴリ
$posts['post_time']     =>  投稿時間
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
        
        foreach($posts as $post) {
            echo $post['post_title'].'<br>';
        }
        
        ?>
    </div>
</body>
</html>