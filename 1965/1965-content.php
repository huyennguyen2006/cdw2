<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
  
<div class="i-type-1965">
<section id="extensions" class="extensions clearfix bg-grey">
  <div class="container">
    <h2 class="text-center">Tons of Extensions</h2>
    <br>
    <div class="col-md-6 left fadeInLeft animated" style="">
      <div class="item">
        <div class="image pull-right">
          <a href="#" target="_blank"><img src="images/item-megamenu.png" alt="megamenu"></a>
        </div>
        <div class="text-right pull-right">
          <h5><a href="#" target="_blank">Super Mega Menu</a></h5>
          <p>Add multiple menu<br>
          Support vertical and horizontal menu<br>
          Many content types can be added to the menu</p>
        </div>
      </div>
      <div class="item clearleft">
        <div class="image pull-right">
          <a href="#" target="_blank"><img src="images/item-one-stepcheckout.png" alt="One step checkout"></a>
        </div>
        <div class="text-right pull-right">
          <h5><a href="#" target="_blank">One-Step Checkout</a></h5>
          <p>Support multiple languages<br>
            All steps on a simple page<br>
            Support multiple stores</p>
        </div>
      </div>
      <div class="item clearleft">
        <div class="image pull-right">
          <a href="#" target="_blank"><img src="images/item-brand.png" alt="Shop by brand"></a>
        </div>
        <div class="text-right pull-right">
          <h5><a href="#" target="_blank">Shop By Brands</a></h5>
          <p>Add and manage brands<br>
          Add brand for product<br>
          Filter product by brand at frontend</p>
        </div>
      </div>
      <div class="item clearleft">
        <div class="image pull-right">
          <a href="#" target="_blank"><img src="images/item-store-locator.png" alt="Store Locator"></a>
        </div>
        <div class="text-right pull-right">
          <h5><a href="#" target="_blank">Store Locator</a></h5>
          <p>Add and manage store location<br>
          Search store at frontend</p>
        </div>
      </div>
      <div class="item clearleft">
        <div class="image pull-right">
          <a href="#" target="_blank"><img src="images/item-report.png" alt="Advanced Report"></a>
        </div>
        <div class="text-right pull-right">
          <h5><a href="#" target="_blank">Advanced Report</a></h5>
          <p>Support reports by Map<br>
          Flexible to select report types<br>
          Multiple options to select for a report</p>
        </div>
      </div>
      <div class="item clearleft">
        <div class="image pull-right">
          <a href="#" target="_blank"><img src="images/item-question.png" alt="Product Question extension"></a>
        </div>
        <div class="text-right pull-right">
          <h5><a href="#" target="_blank">Product Question</a></h5>
          <p>Customer can ask question about product<br>
          Admin can manage thequestions and answers<br>
          All question are showing on product page<br>
          </p>
        </div>
      </div>
      <div class="item clearleft">
        <div class="image pull-right">
          <a href="#" target="_blank"><img src="images/item-socials.png" alt="Social Feeds"></a>
        </div>
        <div class="text-right pull-right">
          <h5><a href="#" target="_blank">Socials</a></h5>
          <p>Add Facebook Like Box<br>
          Add Twitter Feeds block<br>
          Add Flick Photos block<br>
          Add Instagram Feeds block<br>
        </p></div>
      </div>
      <div class="item clearleft">
        <div class="image pull-right">
          <a href="#" target="_blank"><img src="images/item-ajax-tabs.png" alt="Profile extension"></a>
        </div>
        <div class="text-right pull-right">
          <h5><a href="#" target="_blank">Ajax tabs product category</a></h5>
          <p>Multi tabs category and special products<br>
          <i>(New product, Featured, Best seller...)</i><br>
          Admin can manage config tab<br>
        </p></div>
      </div>
    </div>
    <div class="col-md-6 right fadeInRight animated" style="">
      <div class="item clearleft">
        <div class="image pull-left">
          <a href="#" target="_blank"><img src="images/item-dailydeal.png" alt="Daily Deal"></a>
        </div>
        <div class="text pull-left">
          <h5><a href="#" target="_blank">Daily Deal</a></h5>
          <p>Add and manage deal in admin<br>
            Add block to show deal products on home page<br>
            List all deals on deal page</p>
        </div>
      </div>
      <div class="item clearleft">
        <div class="image pull-left">
          <a href="#" target="_blank"><img src="images/item-testimonial.png" alt="Testimonial"></a>
        </div>
        <div class="text pull-left">
          <h5><a href="#" target="_blank">Testimonial</a></h5>
          <p>Manage testimonial in admin<br>
          Add testimonial block on homepage<br>
          Multiple layouts of testimonial block</p>
        </div>
      </div>
      <div class="item clearleft">
        <div class="image pull-left">
          <a href="#" target="_blank"><img src="images/item-slider.png" alt="Revolution Slider"></a>
        </div>
        <div class="text pull-left">
          <h5><a href="#" target="_blank">Revolution Slider</a></h5>
          <p>Ability to add multiple sliders in admin<br>
          Multiple transition effects for the slider<br>
          Multiple layer for the slider</p>
        </div>
      </div>
      <div class="item clearleft">
        <div class="image pull-left">
          <a href="#" target="_blank"><img src="images/item-promo-banner.png" alt="Promo banner extension"></a>
        </div>
        <div class="text pull-left">
          <h5><a href="#" target="_blank">Promo Banner</a></h5>
          <p>Add and manage promo banner in admin<br>
          Easy to add and edit promo banner via
          frontend builder<br>
          Easy to add promo banner on left and
          right sidebar</p>
        </div>
      </div>
      <div class="item clearleft">
        <div class="image pull-left">
          <a href="#" target="_blank"><img src="images/item-portfolio.png" alt="Promo banner extension"></a>
        </div>
        <div class="text pull-left">
          <h5><a href="#" target="_blank">Portfolio</a></h5>
          <p>Support reports by Map<br>
          Flexible to select report types<br>
          Multiple options to select for a report<br>
        </p></div>
      </div>
      <div class="item clearleft">
        <div class="image pull-left">
          <a href="#" target="_blank"><img src="images/item-profile.png" alt="Profile extension"></a>
        </div>
        <div class="text pull-left">
          <h5><a href="#" target="_blank">Profile</a></h5>
          <p>Customer can ask question about product<br>
          Admin can manage thequestions and answers<br>
          All question are showing on product page<br>
        </p></div>
      </div>
      <div class="item clearleft">
        <div class="image pull-left">
          <a href="#" target="_blank"><img src="images/icon-seo.png" width="80px" height="80px" alt="Profile extension"></a>
        </div>
        <div class="text pull-left">
          <h5><a href="#" target="_blank">Ajax search products</a></h5>
          <p>Ajax search product category<br>
          Admin can manage config search<br>
        </p></div>
      </div>
      
      
    </div>
  </div>
</section>
</div>
      