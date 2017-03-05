<?php
    require_once('../function/core/connect.php');
    $pdo = connect();
    require_once('../function/core/blog-info-read.php');
    $info = read_blog_info($pdo);
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
            <div class="blog-link"><a href="../">ブログの確認</a></div>
        </div>
        <div class="content">
            <div class="main-content">
                
                <div class="set-menu">
                    <div class="title">管理画面</div>
                    <div class="menu-li">
                        <a href="index.php" class="checked">ブログ設定</a>
                        <a href="posts.php">記事管理</a>
                        <a href="cate.php">カテゴリ</a>
                    </div>
                </div>
                
                <div class="naiyou">
                    
                    <div class="blog-info">
                        <div class="title">ブログ設定</div>
                    </div>
                    <form action="../function/core/blog-info.php" method="post">
                        <div class="blog-title">
                            <div class="name">ブログ名：</div>
                            <div class="input"><input type="text" name="blog_name" value="<?php echo $info['blog_name']; ?>"></div>
                        </div>
                        <div class="blog-author">
                            <div class="name">管理者名：</div>
                            <div class="input"><input type="text" name="blog_author" value="<?php echo $info['blog_author']; ?>"></div>
                        </div>
                        <input type="submit" value="更新">
                    </form>
                    
                    
                </div>
            </div>

        </div>
    </div>
    
</body>
</html>