<?php
echo "s";
require_once('../function/core/post-read-all.php');
$posts = read_post_all();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>管理</title>

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="main">
        <div class="header">
            <div class="title">A-Blog</div>
            <div class="blog-link">ブログの確認</div>
        </div>
        <div class="content">
            <div class="main-content">
                
                <div class="set-menu">
                    <div class="title">管理画面</div>
                    <div class="menu-li">
                        <a href="#" class="checked">ブログ設定</a>
                        <a href="#">記事管理</a>
                        <a href="#">カテゴリ</a>
                    </div>
                </div>
                
                <div class="naiyou">
                    <p>記事の管理をここで行います。過去記事の編集、新規記事投稿</p>
                    
<!--                    新規投稿ボタン-->
                    <div class="post-btn">
                        <a href="#">新規投稿</a>
                    </div>
                    
                    <div class="posts-table">
                        
                        <?php
                        foreach ($posts as $post) {
                            echo '<div class="post-line"><div class="li left">'.$post['post_time'].'</div><div class="li left">'.$post['post_title'].'</div><div class="li right">削除</div><div class="li right">編集</div><div class="li right">'.$post['post_cate'].'</div></div>';
                        }
                        ?>
                        
                        
<!--
                        <div class="post-line"><div class="li left">2017-1-3</div><div class="li left">記事タイトルだよ記事タイトルだよ</div><div class="li right">削除</div><div class="li right">編集</div><div class="li right">カテゴリ</div></div>
                        
                        
                        <div class="post-line">
                            <div class="li left">2017-1-3</div>
                            <div class="li left">記事タイトルだよ記事タイトルだよ</div>
                            <div class="li right">削除</div>
                            <div class="li right">編集</div>
                            <div class="li right">カテゴリ</div>
                        </div>
                        <div class="post-line">
                            <div class="li left">2017-1-3</div>
                            <div class="li left">記事タイトルだよ記事タイトルだよ</div>
                            <div class="li right">削除</div>
                            <div class="li right">編集</div>
                            <div class="li right">カテゴリ</div>
                        </div>
-->
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
    
</body>
</html>