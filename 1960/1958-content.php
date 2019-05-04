    <?php
        $url_host = 'http://'.$_SERVER['HTTP_HOST'];
        $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
        $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
        
        preg_match_all($pattern_uri, __DIR__, $matches);
        $url_path = $url_host . $matches[1][0];
        $url_path = str_replace('\\', '/', $url_path);
    ?>
      
<div class="i-type-1956">
   <div class="swiper-container">
      <div class="swiper-wrapper">
         <div class="swiper-slide"><img src="images/sample-1.jpg" class="img-responsive"></div>
         <div class="swiper-slide"><img src="images/sample-2.jpg" class="img-responsive"></div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
   </div>
</div>