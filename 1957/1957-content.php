    <?php
        $url_host = 'http://'.$_SERVER['HTTP_HOST'];
        $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
        $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
        
        preg_match_all($pattern_uri, __DIR__, $matches);
        $url_path = $url_host . $matches[1][0];
        $url_path = str_replace('\\', '/', $url_path);
    ?>
      
<div class="i-type-1956">
   <div class="line-1">
      <span class="left-line"></span>
      <h1 class="title">Dining Chairs</h1>
      <span class="right-line"></span>
      <div class="t-tile">
         <span class="pointer"><a href="#">Home</a></span><span class="sear">/</span><span class="pointer"><a href="#">Dining Chairs</a></span><span class="sear">/</span><span class="throught">Winter Wonder Cushion Blushs</span>
      </div>
   </div>
   <div class="cnt-2">
      <div class="container">
         <div class="row">
            <div class="fix-img col-md-6">
             <div class="swiper-container">
              <div class="swiper-wrapper">
                <div id="slide1" class="swiper-slide"><img src="images/1.jpg"></div>
                <div id="slide2" class="swiper-slide"><img src="images/2.jpg"></div>
                <div id="slide3" class="swiper-slide"><img src="images/3.jpg"></div>
                <div id="slide4" class="swiper-slide"><img src="images/4.jpg"></div>
                <div id="slide5" class="swiper-slide"><img src="images/1.jpg"></div>
              </div>
              <!-- Add Arrows -->
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
            </div>
            <div class="col-md-6">
               <div class="wrap-1">
                  <h1>Freakish Clock Sabbrinas</h1>
               </div>
               <div class="product_meta">
                  <p>SKU: 02-1-1</p>
                  <p>Category: <a href="#">Dress Watch</a></p>
                  <p>Tags: <a href="#">Blue</a>,<a href="#">Men</a>,<a href="#">t-shirts</a></p>
                  <div class="lorem">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere lobortis mauris quis scelerisque. Nam ante massa, dignissim nec, iaculis sed augue. Duis ullamcorper ipsum ullamcorper. Suspendisse lobortis maximus velit quis tincidunt</p>
                     <p class="price"><span class="amount">$115.00</span><span class="amount">-</span> <span class="amount">$125.00</span></p>
                  </div>
                  <div class="tawcvs-swatches">
                    <div class="brand">
                       <p>Brand</p>
                    </div>
                    <span class="swatch swatch-new1 " title="new1" data-value="new1"><img src="images/11s.jpg" alt="new1"></span>
                    <span class="swatch swatch-new2 " title="new2" data-value="new2"><img src="images/11as.jpg" alt="new2"></span>
                    <span class="swatch swatch-new3 " title="new3" data-value="new3"><img src="images/11bs.jpg" alt="new3"></span>
                    <span><a class="reset_variations" href="#">Clear</a></span>
                  </div>
                  <div class="price"><p>$115.00</p></div>
                  
               </div>
               <div class="quantity pr">
                  <div class="qty tc">
                     <a class="minus dib" href="javascript:void(0);">
                    <i class="fa fa-minus"></i>
                     </a>
                     <input type="number" class="input-text tc" id="quantity_5cc577f043db9" step="1" min="1" max="" name="quantity" value="1" size="4">
                     <a class="plus dib" href="javascript:void(0);">
                     <i class="fa fa-plus"></i>
                     </a>
                  </div>
               </div>
               <button type="submit" name="add-to-cart" value="5917" class="add-cart"><i class="fa fa-shopping-basket"></i><span></span> Add to cart</button>
                <div class="product-item">
                  <span class="icon-text"><a class="fa fa-heart-o href="#">Browse Wishlist</a></span>
                  <br>
                  <span class="icon-text"><a href="#" class="fa fa-files-o">Compare</a></span>
                </div> 
            </div>
         </div>
      </div>
   </div>
</div>