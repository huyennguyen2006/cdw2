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
    $less->compileFile('less/custom-less.less', 'css/custom-css.css');
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <!-- <meta name="description" content="Content Rotator with jQuery" />
        <meta name="keywords" content="content rotator, jquery, fullscreen, content slider, autoplay, thumbnails, thumbs" />
        <meta name="author" content="Codrops" /> -->


        <link href="css/custom-css.css" rel="stylesheet" type="text/css"/>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="js/jquery.crotator.js"></script>

    </head>

    <body>
        <?php include $dir_block.'/975-content.php'; ?>  
    </body>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/owl.carousel.js" type="text/javascript"></script>
    <script src="js/975.js" type="text/javascript"></script>
    
</html>