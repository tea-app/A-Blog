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
                    
                    <div class="add-post">
                        <div class="title">新規投稿</div>
                        <form action="../function/core/post-add.php" method="post">
                            <div class="post-title">
                                <div class="name">記事タイトル：</div>
                                <div class="input"><input type="text" name="post_title"></div>
                            </div>
                            <div class="post-content">
                                <div class="name">記事本文：</div>
                                <div class="input"><textarea name="post_content"></textarea></div>
                            </div>
                            <div class="post-author">
                                <div class="name">投稿者名：</div>
                                <div class="input" name="post_author"><input type="text" name="post_author"></div>
                            </div>
                            <div class="post-cate">
                                <div class="name">カテゴリー(数値)：</div>
                                <div class="input"><input type="text" name="post_cate"></div>
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