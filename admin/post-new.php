<?php
require_once('../function/core/connect.php');
$pdo = connect();

require_once('../function/core/cate-read-all.php');
$cates = get_cate_all($pdo);
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
                                <div class="name">カテゴリー：</div>
                                <div class="input">
                                    <select name="post_cate">
                                        <?php
                                        foreach ($cates as $cate) {
                                            echo '<option value="'.$cate['name'].'">'.$cate['name'].'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <input type="submit" value="投稿" class="post-btn">
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>