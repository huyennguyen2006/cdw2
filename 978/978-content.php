<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="mod-custom-16">
    <div class="container">
        <!-- <div id="featured">
            <div class="content" style="">
                <h1>Orbit does content now.</h1>
                <h3>Highlight me...I'm text.</h3>
            </div>
            <a href=""><img src="images/overflow.jpg" /></a>
            <img src="images/captions.jpg" data-caption="#htmlCaption"/>
            <img src="images/features.jpg"/>
        </div>   -->
         <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide" data-hash="slide1"> <a href=""><img src="images/overflow.jpg" /></a></div>
              <div class="swiper-slide" data-hash="slide2"> <img src="images/captions.jpg" data-caption="#htmlCaption"/></div>
              <div class="swiper-slide" data-hash="slide3"> <img src="images/features.jpg"/></div>
             
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <!-- Captions for Orbit -->
        <span class="orbit-caption" id="htmlCaption"><strong>I'm A Badass Caption:</strong> I can haz <a href="#">links</a>, <em>style</em> or anything that is valid markup :)</span>
    </div>
</div>
