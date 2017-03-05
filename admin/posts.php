<?php
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
                        <a href="index.php">ブログ設定</a>
                        <a href="posts.php" class="checked">記事管理</a>
                        <a href="cate.php">カテゴリ</a>
                    </div>
                </div>
                
                <div class="naiyou">
                    <p>記事の管理をここで行います。過去記事の編集、新規記事投稿</p>
                    
<!--                    新規投稿ボタン-->
                    <div class="post-btn">
                        <a href="post-new.php">新規投稿</a>
                    </div>
                    <div class="posts-table">
                        <?php
                        foreach ($posts as $post) {
                            echo '<div class="post-line"><div class="li left">'.$post['post_time'].'</div><div class="li left">'.$post['post_title'].'</div><div class="li right"><form action="../function/core/post-delete.php" method="post"><input type="hidden" name="id" value="'.$post['id'].'"><input type="submit" value="削除" class="delete-btn"></form></div><div class="li right"><a href="post-edit.php?id='.$post['id'].'" class="post-edit">編集</a></div><div class="li right">'.$post['post_cate'].'</div></div>';
                        }
                        ?>
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
    
</body>
</html>