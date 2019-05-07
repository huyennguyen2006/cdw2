    <?php
        $url_host = 'http://'.$_SERVER['HTTP_HOST'];
        $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
        $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
        
        preg_match_all($pattern_uri, __DIR__, $matches);
        $url_path = $url_host . $matches[1][0];
        $url_path = str_replace('\\', '/', $url_path);
    ?>
<div class="type-1954">
  <div class="container-fluid">
  <div class="container">
    <div class="col-md-3">
      <h3 class="contact">Contact Us</h3>
      <p class="address">Adress line 1</p>
      <p class="address">Adress line 2</p>
      <p class="address">Adress line 3</p>
      <p class="address">Call us at 0123456789</p>
      <i class="fa fa-facebook-official icon" aria-hidden="true"></i>
      <i class="fa fa-twitter-square icon" aria-hidden="true"></i>
      <i class="fa fa-pinterest-p icon" aria-hidden="true"></i>
      <i class="fa fa-youtube-play icon" aria-hidden="true"></i>
    </div>
    <div class="col-md-3">
      <h3 class="contact">Navigate</h3>
      <p class="address z">Blog</p>
      <p class="address z">Shopping &amp; Returns</p>
      <p class="address z">Sitemap</p>
    </div>
    <div class="col-md-3">
      <h3 class="contact">Popular Brands</h3>
      <p class="address z">Coco Lee</p>
      <p class="address z">Collette</p>
      <p class="address z">Jimmy Choo</p>
      <p class="address z">Sass &amp; Bide</p>
      <p class="address z">Chanel</p>
      <p class="address z">Mango</p>
      <p class="address z">View All</p>
    </div>
    <div class="col-md-3">
      <h3 class="contact">Subscribe to our newsletter</h3>
      <p class="address">Get the latest updates on new products and upcoming sales
      Email Address</p>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Your email address" aria-label="Username" aria-describedby="basic-addon1">
      </div>
      <button type="button" class="btn btn-dark mauden">Subscribe</button>  
    </div>
  </div>
  <div class="container-fluid tacgia">
    <div><p class="tentacgia">Powered by BigCommerce© 2017 JEWELRY</p></div>
    <div class="chuacard">
      <i class="fa fa-cc-amex card" aria-hidden="true"></i>
      <i class="fa fa-cc-discover card" aria-hidden="true"></i>
      <i class="fa fa-cc-mastercard card" aria-hidden="true"></i>
      <i class="fa fa-cc-paypal card" aria-hidden="true"></i>
      <i class="fa fa-cc-visa card" aria-hidden="true"></i>
    </div>
  </div>
</div>
</div> 




    