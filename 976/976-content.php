<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-976">
 <div id="topbar" class="container">
    <div class="row">
        <div class="twelvecol">
            <!--<a class="goback" href="#">MarkTyrrell.com</a>-->
        </div>
    </div>
</div>
     <div id="header" class="container">

    <div class="row">
        <div class="fourcol">
            <a class="logo" href="#"><h1>Blueberry</h1></a>

            <p class="blurb">Introducing a jQuery image slider written specifically for responsive web design.
                <br><br>
                Resize this page to see it in action!</p>
        </div>

        <div class="eightcol last">
            <div class="blueberry">
                 <div class="swiper-container">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide"><img src="images/slide1.jpg"></div>
                      <div class="swiper-slide"><img src="images/slide2.jpg"></div>
                      <div class="swiper-slide"><img src="images/slide3.jpg"></div>
                      <div class="swiper-slide"><img src="images/slide4.jpg"></div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

                  </div>
                   <ul class="pager">
                    
                    </ul>
            </div>
        </div>
    </div>
</div>
</div>

