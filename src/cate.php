<?php
require_once('../function/core/cate-read-all.php');
$cates = get_cate_all();
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
                    <div class="title">カテゴリ管理</div>
                    
                    <div class="cate-table">
                        
                        <?php
                        foreach ($cates as $cate) {
                            echo '<div class="cate-line"><div class="cate-name">'.$cate['name'].'</div><div class="delete-btn"><form action="../function/core/cate-delete.php" method="post"><input type="hidden" name="id" value="'.$cate['id'].'"><input type="submit" value="削除"></form></div></div>';
                        }
                        ?>
                        
                    </div>
                    <div class="add-class">
                        <form action="../function/core/cate-add.php" method="post">
                            <input type="text" name="cate_name">
                            <input type="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>
