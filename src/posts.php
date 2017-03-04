<?php
require_once('../function/core/post-read-all.php');
$posts = read_post_all();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>A-Blog</title>

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">
        
        <div class="header">
            <div class="title">A-Blog</div>
        </div>
        <div class="content">
            <div class="window">
                
                <div class="set-header">
                    <div class="set-title">管理画面</div>
                    
                    <div class="set-menu">
                        <a href="info.php">ブログ設定</a>
                        <a href="posts.php">記事管理</a>
                        <a href="cate.php">カテゴリ</a>
                    </div>
                    <div class="null"></div>
                </div>
                
                <div class="main-content">
                    <div class="title">記事管理</div>
                    
                    <div class="posts-table">
                        
                        <?php
                        foreach ($posts as $post) {
                            echo '<div class="line"><div class="post-title">'.$post['post_title'].'</div><div class="author">'.$post['post_author'].'</div><div class="cate">'.$post['post_cate'].'</div><div class="date">'.$post['post_time'].'</div><div class="delete-btn"><form action="../function/core/post-delete.php" method="post"><input type="hidden" name="id" value="'.$post['id'].'"><input type="submit" value="削除"></form></div></div>';
                        }
                        ?>
                        
                        
                        
                        
                        
                        
                        
                    </div>
                    <a href="newpost.php">新規投稿</a>
                </div>
                
            </div>
        </div>
        
    </div>
</body>
</html>
