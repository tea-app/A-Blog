<?php
require_once('../function/core/post-read-num.php');
$posts = post_read_num(4);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>A-Blog</title>

<link rel="stylesheet" href="../src/css/reset.css">
<link rel="stylesheet" href="../src/css/style.css">
</head>
<body>
    
    <?php
    
    foreach ($posts as $post) {
        require('test.php');
        // echo $post['post_title'].'<br>';
    }
    
//    var_dump($posts);
    ?>
    
</body>
</html>