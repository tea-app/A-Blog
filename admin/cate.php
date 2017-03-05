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
                        <a href="posts.php">記事管理</a>
                        <a href="cate.php" class="checked">カテゴリ</a>
                    </div>
                </div>
                
                <div class="naiyou">
                    
                    <p>カテゴリを登録することで関連した記事を探しやすくします。</p>
                    <div class="add-cate">
                        <form action="../function/core/cate-add.php" method="post">
                            カテゴリ追加：
                            <input type="text" name="cate_name">
                            <input type="submit" value="追加" class="add">
                        </form>
                    </div>
                    
                    <div class="cate-table">
                        
                        <?php
                            foreach($cates as $cate){
                                echo '<div class="cate"><div class="title">'.$cate['name'].'</div><form action="../function/core/cate-delete.php" method="post"><input type="hidden" name="id" value="'.$cate['id'].'"><input type="submit" value="削除" class="delete-btn"></form></div>';
                            }
                        ?>

                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>