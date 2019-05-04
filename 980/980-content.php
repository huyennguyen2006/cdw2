<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>

<div class="content">
    <h1>Rotating Image Slider</h1>
    <div class="rm_wrapper">
        <div id="rm_container" class="rm_container">
            <ul>
                <li data-images="rm_container_1" data-rotation="-15" data-transform="rotate(-15deg)" style="-webkit-transform: rotate(-15deg);"><img src="images/1.jpg" data-transform="rotate(0deg) origin(155px, 930px)" style="-webkit-transform: rotate(0deg); -webkit-transform-origin: 155px 930px;"></li>
                <li data-images="rm_container_2" data-rotation="-5" data-transform="rotate(-5deg)" style="-webkit-transform: rotate(-5deg);"><img src="images/2.jpg" data-transform="rotate(0deg) origin(155px, 930px)" style="-webkit-transform: rotate(0deg); -webkit-transform-origin: 155px 930px;"></li>
                <li data-images="rm_container_3" data-rotation="5" data-transform="rotate(5deg)" style="-webkit-transform: rotate(5deg);"><img src="images/3.jpg" data-transform="rotate(0deg) origin(155px, 930px)" style="-webkit-transform: rotate(0deg); -webkit-transform-origin: 155px 930px;"></li>
                <li data-images="rm_container_4" data-rotation="15" data-transform="rotate(15deg)" style="-webkit-transform: rotate(15deg);"><img src="images/4.jpg" data-transform="rotate(0deg) origin(155px, 930px)" style="-webkit-transform: rotate(0deg); -webkit-transform-origin: 155px 930px;"></li>
            </ul>
            <div id="rm_mask_left" class="rm_mask_left"></div>
            <div id="rm_mask_right" class="rm_mask_right"></div>
            <div id="rm_corner_left" class="rm_corner_left"></div>
            <div id="rm_corner_right" class="rm_corner_right"></div>
            <h2>Fashion Explosion 2012</h2>
            <div style="display:none;">
                <div id="rm_container_1">
                    <img src="images/1.jpg">
                    <img src="images/5.jpg">
                    <img src="images/6.jpg">
                    <img src="images/7.jpg">
                </div>
                <div id="rm_container_2">
                    <img src="images/2.jpg">
                    <img src="images/8.jpg">
                    <img src="images/9.jpg">
                    <img src="images/10.jpg">
                </div>
                <div id="rm_container_3">
                    <img src="images/3.jpg">
                    <img src="images/11.jpg">
                    <img src="images/12.jpg">
                    <img src="images/13.jpg">
                </div>
                <div id="rm_container_4">
                    <img src="images/4.jpg">
                    <img src="images/14.jpg">
                    <img src="images/15.jpg">
                    <img src="images/16.jpg">
                </div>
            </div>
        </div>
        <div class="rm_nav">
            <a id="rm_next" href="#" class="rm_next"></a>
            <a id="rm_prev" href="#" class="rm_prev"></a>
        </div>
        <div class="rm_controls">
            <a id="rm_play" href="#" class="rm_play">Play</a>
            <a id="rm_pause" href="#" class="rm_pause" style="display: none;">Pause</a>
        </div>
    </div>
</div>
