    <?php
        $url_host = 'http://'.$_SERVER['HTTP_HOST'];
        $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
        $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
        
        preg_match_all($pattern_uri, __DIR__, $matches);
        $url_path = $url_host . $matches[1][0];
        $url_path = str_replace('\\', '/', $url_path);
    ?>
      
<div class="i-type-1954">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h3 class="menu-head">Get In Touch</h3>
        <div class="menu-min">
          <p>No.868 Rochester Suite 69, New York NY, United Stated</p>
          <p>Call: +01 1 2268 7749</p>
          <p>$Email: Varsecare@demo.com</p>
          <p>Opening: 9.00am - 9.30pm</p>  
        </div>
      </div>
      <div class="col-md-3">
        <h3 class="menu-head">Information</h3>
        <div class="menu-min">
           <ul>
            <li><a href="#">FAQ’s</a></li>
            <li><a href="#">Contact Us</a> </li>
            <li><a href="#">Returns & Refunds</a> </li>
            <li><a href="#">My Wishlist</a> </li>
            <li><a href="#">Top Popular</a></li>
          </ul>
        </div>       
      </div>
      <div class="col-md-3">
        <h3 class="menu-head">Need Help</h3>
        <div class="menu-min">
           <ul>
            <li><a href="#">Online Store</a></li>
            <li><a href="#"> Customer Services</a></li>
            <li><a href="#">Promotion</a></li>
            <li><a href="#">Top Brands</a></li>
            <li><a href="#">Top Research</a></li>
          </ul>
        </div>        
      </div>
      <div class="col-md-3">
       <h3 class="menu-head">Follow Us</h3>
        <div class="menu-min">
          <p>Subscribe now to get 15% off on any product for your next buy!</p>
        </div>
          <form id="mc4wp-form-1" method="post" data-id="78">
              <div class="form-newletter">
                <input class="input-email" type="email" name="EMAIL" placeholder="email@example.com" required="">
                <input class="sbm" type="submit" value="sign up">
            </div>
          </form>
          <div class="icon-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
          </div>
        </div>
      </div>     
    </div>
    <div class="row">
      <div class="container">
        <div class="final">
          <div class="col-md-6">
            <div class="info">
              <a  href="#">Shipping</a>
              <a  href="#">Privacy Policy</a>
              <a  href="#">Support</a>
              <a  href="#">Contact</a>            
            </div> 
            </div>        
          <div class="col-md-6">
            <div class="box">
              <p>Copyright 2019. All rights reserved. Design by<a href="#">Joommasters.com</a>.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



    