<?php
require_once('../function/core/blog-info-read.php');
$blog_info = read_blog_info();
//var_dump($blog_info);
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
                    <div class="title">ブログ設定</div>
                    
                    <div class="update-area">
                        <form action="../function/core/blog-info.php" method="post">
                            <p>ブログ名</p>
                            <input type="text" name="blog_name">
                            <p>管理者</p>
                            <input type="text" name="blog_author">
                            <input type="submit" value="更新">
                        </form>
                        
                    </div>
                    <div class="info">
                        <?php
                        echo 'ブログ名：'.$blog_info['blog_name'].'<br>';
                        echo '管理者名：'.$blog_info['blog_author'];
                        ?>
                    </div>
                    
                    
                </div>
                
            </div>
        </div>
       
        
    </div>
</body>
</html>