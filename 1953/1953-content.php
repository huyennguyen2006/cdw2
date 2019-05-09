<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
  
<div class="i-type-1953">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <div class="feature-box feature-box-style-2 reverse">
          <div class="feature-box-icon">
            <i class="fa fa-bolt"></i>
          </div>
          <div class="feature-box-info">
            <h3>Super Fast Theme</h3>
            <p>Organie Prestashop is optimized to get<br>"A" Class on any speed test tools.</p>
          </div>
        </div>
        <div class="feature-box feature-box-style-2 reverse">
          <div class="feature-box-icon">
            <i class="fa fa-heart"></i>
          </div>
          <div class="feature-box-info">
            <h3>Awesome Support</h3>
            <p>You won't be alone, purchasing our theme,<br>satisfaction is guaranteed, we really care<br>about you and your website. We will support 24/7</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 hidden-sm hidden-xs">
        <img src="images/porto_display.png" alt="Display" class="img-responsive center-block wow zoomIn">
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="feature-box feature-box-style-2">
          <div class="feature-box-icon">
            <i class="fa fa-shopping-cart"></i>
          </div>
          <div class="feature-box-info">
            <h3>Prestashop &amp; Extensions</h3>
            <p>Organie is fully compatible with the latest<br>Prestashop version and also ready to work.</p>
          </div>
        </div>
        <div class="feature-box feature-box-style-2">
          <div class="feature-box-icon">
            <i class="fa fa-cloud-download"></i>
          </div>
          <div class="feature-box-info">
            <h3 class="mb-sm">Free Updates</h3>
            <p class="mb-lg">Purchase Organie Prestashop now and get all<br>the updates and bug fixes for free.<br>Guaranteed!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
      