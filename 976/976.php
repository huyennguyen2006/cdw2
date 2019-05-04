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
    $less->compileFile('less/976.less', 'css/1140.css');
    $less->compileFile('less/blue.less', 'css/blueberry.css');
    $less->compileFile('less/styles.less', 'css/styles.css');
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/1140.css" rel="stylesheet" type="text/css"/>
         <link rel="stylesheet" href="./swiper-4.5.0/dist/css/swiper.min.css">
        <link href="css/blueberry.css" rel="stylesheet" type="text/css"/>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <link href="css/976.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/css3-mediaqueries.js" type="text/javascript"></script>
        <script src="js/jquery.blueberry.js" type="text/javascript"></script>
    </head>
    <body>
        <?php include $dir_block.'/976-content.php'; ?>  
       <script src="./swiper-4.5.0/dist/js/swiper.min.js"></script>
        <script src="js/976.js"></script>
    </body>
    
</html>
