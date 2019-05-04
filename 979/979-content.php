<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-979">
<div id="container" class="container">
    <div class="bg">
        <div class="bg1"></div>
        <div class="bg2"></div>
        <div class="bg3"></div>
    </div>
    <div class="loading">Loading images...</div>
    <div class="slider_wrapper">
        <ul class="slider">
            <li><img src="images/1.jpg" alt="First Image" /></li>
            <li><img src="images/2.jpg" alt="Second Image" /></li>
            <li><img src="images/3.jpg" alt="Third Image" /></li>
            <li><img src="images/4.jpg" alt="Forth Image" /></li>
            <li><img src="images/5.jpg" alt="Fifth Image" /></li>
            <li><img src="images/6.jpg" alt="Sixth Image" /></li>
        </ul>
        <div class="navigation">
            <span class="next"></span>
            <span class="prev"></span>
        </div>
        <ul class="thumbnails">
            <li><img src="images/thumbs/1.jpg" alt="First Image" /></li>
            <li><img src="images/thumbs/2.jpg" alt="Second Image" /></li>
            <li><img src="images/thumbs/3.jpg" alt="Third Image" /></li>
            <li><img src="images/thumbs/4.jpg" alt="Forth Image" /></li>
            <li><img src="images/thumbs/5.jpg" alt="Fifth Image" /></li>
            <li><img src="images/thumbs/6.jpg" alt="Sixth Image" /></li>
        </ul>
    </div>
</div>
</div>