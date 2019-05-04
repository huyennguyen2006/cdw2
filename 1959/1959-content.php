    <?php
        $url_host = 'http://'.$_SERVER['HTTP_HOST'];
        $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
        $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
        
        preg_match_all($pattern_uri, __DIR__, $matches);
        $url_path = $url_host . $matches[1][0];
        $url_path = str_replace('\\', '/', $url_path);
    ?>
   
<div class="i-type-1956">
  <div class="title">
     <h1>UniqueShop - Prestashop Theme</h1>
  </div>
   <div class="theme-content">
    <ul>
      <li>
        <a href="#">
          <div class="image-bg"><img src="images/02_home.jpg"></div>
          <span class="name">Home Page</span>
        </a>
      </li>
      <li>
        <a href="#">
         <div class="image-bg"><img src="images/03_category.jpg"></div>
          <span class="name">Category Page</span>
        </a>
      </li>
      <li>
        <a href="#">
          <div class="image-bg"><img src="images/04_product.jpg"></div>
          <span class="name">Product Page</span>
        </a>
      </li>
    </ul>
  </div>
</div>