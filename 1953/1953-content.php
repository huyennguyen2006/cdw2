<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
  
<div class="i-type-1950">
  <div class="container">
      <div class="line-1">
        <span class="left-line"></span>
        <h3 class="title">You May Also Like..</h3>
        <span class="right-line"></span>
      </div>
      <div class="line-2">
      <span class="left-line"></span>
      <h3 class="title">Includes products updated are similar or are same of quality</h3>
      <span class="right-line"></span>
      </div>
    <div class="row">
       <div class="col-md-3">
        <div class="nor">
          <img src="images/1-1.jpg" class="img-responsive">
          <span class="sale">-11%</span>
          <div class="fade-in">
            <img src="./images/3-2.jpg" class="img-responsive">
              <div class="product-btn row">
                <div class="product-list">
                  <div class="col-md-4">
                    <a href="#"><i class="fa fa-shopping-basket"><span class="tooltiptext">Add To Carts</span></i></a>
                  </div>
                  <div class="col-md-4">
                    <a href="#"><i class="fa fa-files-o"><span class="tooltiptext">Compare</span></i></a>
                  </div>
                  <div class="col-md-4">
                    <a href="#"><i class="fa fa-arrows-alt"><span class="tooltiptext">Quick View</span></i></a>
                  </div>
                </div>
              </div>
          </div>
         <div class="product-item">
              <span><a href="#">Bottle Salz Permules Doubles</a><i class="fa fa-heart-o"></i></span>
            </div>
            <div class="price">
              <span class="lineThrough">$109.00</span><span class="real">$103.00</span>   
            </div>
              
        </div>
      </div>
      <div class="col-md-3">
        <div class="nor">
          <img src="./images/2.jpg" class="img-responsive">
          <span class="sale">-29%</span>
          <div class="fade-in">
            <img src="./images/2-2.jpg" class="img-responsive">
              <div class="product-btn row">
                <div class="product-list">
                  <div class="col-md-4">
                    <a href="#"><i class="fa fa-shopping-basket"><span class="tooltiptext">Add To Carts</span></i></a>
                  </div>
                  <div class="col-md-4">
                    <a href="#"><i class="fa fa-files-o"><span class="tooltiptext">Compare</span></i></a>
                  </div>
                  <div class="col-md-4">
                    <a href="#"><i class="fa fa-arrows-alt"><span class="tooltiptext">Quick View</span></i></a>
                  </div>
                </div>
              </div>
          </div>
         <div class="product-item">
              <span><a href="#">Animal Box Rhinos Areawar</a><i class="fa fa-heart-o"></i></span>
            </div>
            <div class="price">
              <span class="lineThrough">$147.00</span><span class="real">$105.00</span>   
            </div>
              
        </div>
      </div>
      <div class="col-md-3">
        <div class="nor">
          <img src="./images/1.jpg" class="img-responsive">
          <span class="sale">-6%</span>
          <div class="fade-in">
            <img src="./images/3-2.jpg" class="img-responsive">
              <div class="product-btn row">
                <div class="product-list">
                  <div class="col-md-4">
                    <a href="#"><i class="fa fa-shopping-basket"><span class="tooltiptext">Add To Carts</span></i></a>
                  </div>
                  <div class="col-md-4">
                    <a href="#"><i class="fa fa-files-o"><span class="tooltiptext">Compare</span></i></a>
                  </div>
                  <div class="col-md-4">
                    <a href="#"><i class="fa fa-arrows-alt"><span class="tooltiptext">Quick View</span></i></a>
                  </div>
                </div>
              </div>
          </div>
         <div class="product-item">
              <span><a href="#">Bottle Salz Permules Doubles</a><i class="fa fa-heart-o"></i></span>
            </div>
            <div class="price">
              <span class="lineThrough">$109.00</span><span class="real">$103.00</span>   
            </div>
              
        </div>
      </div>
      <div class="col-md-3">
        
      </div>
    </div>
    <div class="cnt-2">
       <div class="line-1">
        <span class="left-line"></span>
        <h3 class="title">Related Products</h3>
        <span class="right-line"></span>
      </div>
      <div class="line-2">
      <span class="left-line"></span>
      <h3 class="title">Includes products updated are similar or are same of quality</h3>
      <span class="right-line"></span>
      </div>
      <div class="row">
      <div class="col-md-3">
        <div class="nor">
          <img src="./images/3-2.jpg" class="img-responsive">
            <div class="fade-in">
              <img src="./images/4-2.jpg" class="img-responsive">
                <div class="product-btn row">
                  <div class="product-list">
                      <div class="col-md-4">
                        <a href="#"><i class="fa fa-shopping-basket"><span class="tooltiptext">Select Options</span></i></a>
                      </div>
                      <div class="col-md-4">
                        <a href="#"><i class="fa fa-files-o"><span class="tooltiptext">Compare</span></i></a>
                      </div>
                      <div class="col-md-4">
                        <a href="#"><i class="fa fa-arrows-alt"><span class="tooltiptext">Quick View</span></i></a>
                      </div>
                  </div>
              </div>
                
          </div>
          <div class="product-item">
              <span><a href="#">Animal Box Rhino Areawares</a><i class="fa fa-heart-o"></i></span>
            </div>
            <div class="price">
              <span class="real">$120.00</span>  
            </div>
        </div>
      
        
      </div>
      <div class="col-md-3">
        <div class="nor">
          <img src="./images/5.jpg" class="img-responsive">
          <div class="fade-in">
            <img src="./images/5-2.jpg" class="img-responsive">
                    <div class="product-btn row">
                 <div class="product-list">
                      <div class="col-md-4">
                        <a href="#"><i class="fa fa-shopping-basket"><span class="tooltiptext">Add To Carts</span></i></a>
                      </div>
                      <div class="col-md-4">
                        <a href="#"><i class="fa fa-files-o"><span class="tooltiptext">Compare</span></i></a>
                      </div>
                      <div class="col-md-4">
                        <a href="#"><i class="fa fa-arrows-alt"><span class="tooltiptext">Quick View</span></i></a>
                      </div>
                  </div>
              </div>
          </div>
         <div class="product-item">
              <span><a href="#">Animal Box Rhino Areawares</a><i class="fa fa-heart-o"></i></span>
            </div>
            <div class="price">
              <span class="real">$120.00</span> 
            </div> 
        </div>
      </div>
      <div class="col-md-3">
        <div class="nor">
          <img src="./images/6.jpg" class="img-responsive">
          <div class="fade-in">
            <img src="./images/6-2.jpg" class="img-responsive">
                    <div class="product-btn row">
                   <div class="product-list">
                      <div class="col-md-4">
                        <a href="#"><i class="fa fa-shopping-basket"><span class="tooltiptext">Select Options</span></i></a>
                      </div>
                      <div class="col-md-4">
                        <a href="#"><i class="fa fa-files-o"><span class="tooltiptext">Compare</span></i></a>
                      </div>
                      <div class="col-md-4">
                        <a href="#"><i class="fa fa-arrows-alt"><span class="tooltiptext">Quick View</span></i></a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="product-item">
              <span><a href="#">Animal Box Rhino Areawares</a><i class="fa fa-heart-o"></i></span>
            </div>
            <div class="price">
              <span class="lineThrough">$112.00</span><span class="real">$100.00</span>   
            </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="nor">
          <img src="./images/5.jpg" class="img-responsive">
            <span class="new">Popular</span>
          <div class="fade-in">
            <img src="./images/4-2.jpg" class="img-responsive">
                    <div class="product-btn row">
                  <div class="product-list">
                      <div class="col-md-4">
                        <a href="#"><i class="fa fa-shopping-basket"><span class="tooltiptext">Add To Carts</span></i></a>
                      </div>
                      <div class="col-md-4">
                        <a href="#"><i class="fa fa-files-o"><span class="tooltiptext">Compare</span></i></a>
                      </div>
                      <div class="col-md-4">
                        <a href="#"><i class="fa fa-arrows-alt"><span class="tooltiptext">Quick View</span></i></a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="product-item">
            <span><a href="#">Animal Box Rhino Areawares</a><i class="fa fa-heart-o"></i></span>
          </div> 
          <div class="price">
            <span class="lineThrough">$112.00</span><span class="real">$100.00</span>   
          </div>   
        </div>
      </div>
    </div>
  </div>
</div>
</div>
      