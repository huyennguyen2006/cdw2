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
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="./swiper-4.5.0/dist/css/swiper.min.css">
         <link href="js/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="js/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>
        <!-- <script type="text/javascript" src="/js/owl.carousel.min.js"></script>
         <script type="text/javascript" src="/js/jquery-2.1.4.min.js"></script> -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.crotator.js"></script>
        
        <script type="text/javascript">
              $(window).load(function () {
                //$('#cr-container').crotator();
            });
        </script>
        
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('./less/custom-less.less', './css/custom-css.css');
        ?>
    </head>

    <body>
        <?php include $dir_block.'/975-content.php'; ?>  
    </body>
    <script src="js/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js" type="text/javascript"></script>
    <script src="js/OwlCarousel2-2.3.4/dist/owl.carousel.js" type="text/javascript"></script>
    <script src="js/975.js" type="text/javascript"></script>
    
</html>