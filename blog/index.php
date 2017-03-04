<?php
    require_once('../function/archives.php');
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
    echo $title.'<br><br>'.$content.'<br><br>'.$author.'<br><br>'.$cate;
    ?>
    
</body>
</html>