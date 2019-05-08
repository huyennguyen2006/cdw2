<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1962">
	<div class="container">
     <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
          	<img class="hinhmenu" src="images/main-baaner-pro-2__06492.png">
      			<div class="chuanoidungmenu ">
    			<h2 class="chuto">DIAMOND SILVER JEWELLYRY</h2>
    			<p class="chunho">Antique 5.6 Carats Old Mine Cut Diamond Rings from a unique collection of vintage drop Rings.</p>
    			<button class="btn btn-outline-secondary nut">Shop Now</button>
    		</div>
          </div>
          <div class="swiper-slide">
          	<img class="hinhmenu" src="images/Main-baaner-pro-2.png">
    		<div class="chuanoidungmenu">
    			<h2 class="chuto">DIAMOND SILVER JEWELLYRY</h2>
    			<p class="chunho">Delicately draped antique 18k gold chain collarette with seven medallions of seed gold and pearl closure.</p>
    			<button class="btn btn-outline-secondary nut">Shop Now</button>	
    		</div>
          </div>
     
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
</div>
</div>