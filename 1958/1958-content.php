    <?php
        $url_host = 'http://'.$_SERVER['HTTP_HOST'];
        $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
        $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
        
        preg_match_all($pattern_uri, __DIR__, $matches);
        $url_path = $url_host . $matches[1][0];
        $url_path = str_replace('\\', '/', $url_path);
    ?>
      
<div class="i-type-1956">
   <div class="cnt-2">
      <div class="container">
         <div class="row">
            <div class="fix-img col-md-6">
               <ul class="thmbnails">
                <li><a href="#slide1"><img src="images/1.jpg"></a></li>
                <li><a href="#slide2"><img src="images/2.jpg"></a></li>
                <li><a href="#slide3"><img src="images/3.jpg"></a></li>
                <li><a href="#slide4"><img src="images/4.jpg"></a></li>
                <li><a href="#slide5"><img src="images/5.jpg"></a></li>
              </ul>
              <div class="img-nails">
                <ul>
                <li id="slide1"><img src="images/1-1.jpg"></li>
                <li id="slide2"><img src="images/2-2.jpg"></li>
                <li id="slide3"><img src="images/3-3.jpg"></li>
                <li id="slide4"><img src="images/4-4.jpg"></li>
                <li id="slide5"><img src="images/5-5.jpg"></li>
              </ul>
               <p class="sale-up">-11</p>
              </div>
            </div>
         </div>
      </div>
   </div>
</div>