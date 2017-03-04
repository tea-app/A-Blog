<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>フォーム試験</title>
<?php require_once('function/core/post-add.php'); ?>
</head>
<body>
    <div class="main">
        <form action="<?php addPost(); ?>" method="post">
            <br>
            <input type="text" name="post_author">
            <br>
            <input type="text" name="post_title">
            <br>
            <textarea name="post_content"></textarea>
            <br>
            <input type="text" name="post_cate">
            <br>
            
            <input type="submit">
        </form>
    </div>

    
</body>
</html>