    <?php
        $url_host = 'http://'.$_SERVER['HTTP_HOST'];
        $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
        $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
        
        preg_match_all($pattern_uri, __DIR__, $matches);
        $url_path = $url_host . $matches[1][0];
        $url_path = str_replace('\\', '/', $url_path);
    ?>
      
<div class="i-type-1951">
<div class="line-1">
  <span class="left-line"></span>
  <h1 class="title">Ceiling Lighting</h1>
  <span class="right-line"></span>
<div class="t-tile">
  <span class="pointer"><a href="#">Home</a></span><span class="sear">/</span><span class="pointer"><a href="#">Ceiling Lighting</a></span><span class="sear">/</span><span class="throught">Animal Box Rhino Areawares</span>
</div>
 </div>
<div class="cnt-2">
  <div class="container">
  <div class="row">
    <div class="col-md-4">
    <div class="sidebar">
        <h1 class="product_title">Animal Box Rhino Areawares</h1>
       <div class="star">
          <span class="checked"><i class="fa fa-star-o"></i></span>
          <span class="checked"><i class="fa fa-star-o"></i></span>
          <span class="checked"><i class="fa fa-star-o"></i></span>
          <span class="checked"><i class="fa fa-star-o"></i></span>
          <span class="checked"><i class="fa fa-star-o"></i></span>
       </div>
    
    <div class="price">
      <span class="real">$120.00</span> - <span class="real">$452.00</span>   
    </div>
      <div class="description">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere lobortis mauris quis scelerisque. Nam ante massa, dignissim nec, iaculis sed augue. Duis ullamcorper ipsum ullamcorper. Suspendisse lobortis maximus velit quis tincidunt</p>
      </div>
       <div class="product-item">
        <span><a href="#" class="fa fa-heart-o">Browse Wishlist</a></span>
        <br>
        <span><a href="#" class="fa fa-files-o">Compare</a></span>
      </div> 
      </div>
    </div>
    <div class="col-md-4">
      <div class="zoom-img">
        <span class='zoom' id='ex1'>
        <img src='images/10.jpg' width='300' height='320' />
        </span>
         <span class='zoom' id='ex2'>
          <img src='images/14.jpg' width='300' height='320'/>
        </span>
        <span class='zoom' id='ex3'>
          <img src='images/12.jpg' width='300' height='320' />
        </span>
        <span class='zoom' id='ex4'>
          <img src='images/11.jpg' width='300' height='320' />
        </span>
        </div>
    </div>
    <div class="col-md-4">
      <div class="nor">
        <table>
        <tr>
          <td class="color"><label for="pa_color">Color</label></td>
          <td class="value">
           <span  class="swatch swatch-color swatch-black "  title="Black" data-value="black"></span>
            <span class="swatch swatch-color swatch-blue " title="Blue" data-value="black"></span>
            <span class="swatch swatch-color swatch-brown " title="Brown" data-value="black"></span>
            <span><a href="#" id="clear">Clear</a></span>
          </td> 
        </tr>
      </table>
      <div class="price-hidden">
        <span>$120.00</span>
      </div>
      <div class="variations_button">
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
        <button type="submit" class="add_to_cart_button"><i class="fa fa-shopping-basket"></i><span class="add-to-cart">ADD TO CART</span></button>
    </div>
    <div class="product_meta">
      <span class="sku_wrapper">SKU: <span class="sku">07</span></span>
      <p class="posted_in">Category: <a href="#" rel="tag">Ceiling Lighting</a></p> 
    </div>
    </div>

    </div>
  </div>
  </div>
 
  </div>
</div>


    