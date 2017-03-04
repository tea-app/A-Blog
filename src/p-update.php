<?php
require_once('../function/core/post-read.php');
$post = readPost(5);
$id = 5;
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
                    <div class="title">記事更新</div>
                    
                    <div class="update-area">
                        <form action="../function/core/post-update.php" method="post">
                            <input type="hidden" value="5" name="id">
                            <p>タイトル</p>
                            <input type="text" name="post_title" value="<?php echo $post['post_title'] ?>">
                            <p>コンテンツ</p>
                            <textarea name="post_content"><?php echo $post['post_content']; ?></textarea>
                            <p>投稿者名</p>
                            <input type="text" name="post_author" value="<?php echo $post['post_author'] ?>">
                            <p>カテゴリ</p>
                            <input type="text" name="post_cate" value="<?php echo $post['post_cate'] ?>">
                            <input type="submit">
                        </form>
                    </div>
                    <div class="info">
                        
                    </div>
                    
                    
                </div>
                
            </div>
        </div>
       
        
    </div>
</body>
</html>