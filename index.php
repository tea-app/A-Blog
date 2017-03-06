<?php
require_once('function/core/connect.php');
$pdo = connect();

require_once('function/core/blog-info-read.php');
$info = read_blog_info($pdo);

require_once('function/core/post-read-num.php');
$posts = post_read_num(2,$pdo);

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
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">
        <a href="/r.php?id=5"></a>
        
        <div class="table">
            <div class="title-line">
                <div class="text">ID</div>
                <div class="text">タイトル</div>
                <div class="text">投稿者名</div>
                <div class="text">カテゴリ</div>
                <div class="text">投稿時間</div>
                <div class="text">LINK</div>
            </div>
            
            <?php
                foreach ($posts as $post) {
                    echo '<div class="line"><div class="text">'.$post['id'].'</div><div class="text">'.$post['post_title'].'</div><div class="text">'.$post['post_author'].'</div><div class="text">'.$post['post_cate'].'</div><div class="text">'.$post['post_time'].'</div><div class="text"><a href="r.php?id='.$post['id'].'">LINK</a></div></div></div>';
                }
            ?>
        
        <?php
        ?>
    </div>
</body>
</html>