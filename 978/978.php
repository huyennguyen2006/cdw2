<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    
    $less = new lessc;
    $less->compileFile('less/styles.less', 'css/styles.css');
    
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title></title>

        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?>
   
    <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="./swiper-4.5.0/dist/css/swiper.min.css">
    <script src="js/jquery-1.5.1.min.js" type="text/javascript"></script>
    <script src="js/jquery.orbit-1.2.3.min.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>
</head>
<body>
    <?php include $dir_block.'/978-content.php'; ?>  
    <script src="./swiper-4.5.0/dist/js/swiper.min.js"></script>
    <script src="js/978.js" type="text/javascript"></script>
</body>
</html>