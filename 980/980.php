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
    $less->compileFile('less/less.less', 'css/style.css');
    
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/css.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="./swiper-4.5.0/dist/css/swiper.min.css">

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/jquery.transform-0.9.3.min_.js" type="text/javascript"></script>
        <script src="js/jquery.mousewheel.js" type="text/javascript"></script>
        <script src="js/jquery.RotateImageMenu.js" type="text/javascript"></script>

    </head>

    <body>
        <?php include $dir_block.'/980-content.php'; ?>
        
        <script src="js/swiper.min.js"></script>
        <script src="js/980.js"></script>
    </body>
</html>
