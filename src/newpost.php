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
                    <div class="title">新規投稿</div>
                    
                    <div class="new-post-area">
                        <form action="../function/core/post-add.php" method="post">
                            <div class="title">
                                <p>記事タイトル</p>
                                <input type="text" name="post_title">
                            </div>
                            <div class="post-content">
                                <p>本文</p>
                                <textarea name="post_content"></textarea>
                            </div>
                            <div class="cate">
                                <p>カテゴリ番号</p>
                                <input type="text" name="post_cate">
                            </div>
                            <div class="author">
                                <p>投稿者名</p>
                                <input type="text" name="post_author">
                            </div>
                            <input type="submit">
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
</body>
</html>
