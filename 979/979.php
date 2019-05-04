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
    $less->compileFile('less/979.less', 'css/style.css');
    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Parallax Slider with jQuery</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Parallax Slider with jQuery" />
        <meta name="keywords" content="parallax, jquery, slider, slideshow, rotation, perspective"/>
        <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>


        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/cufon-yui.js" type="text/javascript"></script>
        <script src="js/ChunkFive_400.font.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
        <script type="text/javascript">
            Cufon.replace('.pxs_loading', {textShadow: '1px 1px #000'});
        </script>
    </head>
    <body>
        <?php include $dir_block.'/979-content.php'; ?>  
        <!-- The JavaScript -->
        <script src="js/979.js"></script>
        <script src="js/9792.js"></script>

    </body>
</html>