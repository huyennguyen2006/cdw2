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
                     <p class="price"><del><span class="dolar">$112.00</span></del><span class="amount">$100.00</span></p>
                  </div>
                  <div id="clockdiv">
                    <div>
                      <span class="days"></span>
                      <p class="smalltext">Days</p>
                    </div>
                    <div>
                      <span class="hours"></span>
                      <p class="smalltext">Hrs</p>
                    </div>
                    <div>
                      <span class="minutes"></span>
                      <p class="smalltext">Mins</p>
                    </div>
                    <div>
                      <span class="seconds"></span>
                      <p class="smalltext">Secs</p>
                    </div>
                  </div>
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
            </div>
         </div>
      </div>
   </div>
</div>