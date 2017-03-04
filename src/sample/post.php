<?php
require_once('../../function/post-read.php');
$post = readPost(1);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>A-Blog</title>

<link rel="stylesheet" href="../css/reset.css">
<link rel="stylesheet" href="../css/style.css">
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
                        <a href="posts.html">記事管理</a>
                        <a href="cate.html">カテゴリ</a>
                    </div>
                </div>
                
                <div class="posts-table">
                    <div class="line">
                        <div class="title">記事名</div>
                        <div class="author">投稿者名</div>
                        <div class="cate">カテゴリ</div>
                        <div class="date">2017 2 4 11-11</div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>