    <?php
        $url_host = 'http://'.$_SERVER['HTTP_HOST'];
        $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
        $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
        
        preg_match_all($pattern_uri, __DIR__, $matches);
        $url_path = $url_host . $matches[1][0];
        $url_path = str_replace('\\', '/', $url_path);
    ?>
      
<div class="i-type-1952">
   <div class="container">
      <div class="line-1">
          <span class="ep1"><a href="#">Description</a></span>
          <span class="ep3"><a href="#">Additional information</a></span>
          <span class="ep3"><a href="#">Reviews (1)</a></span>    
      </div>
         <div class="cnt-2">
            <div class="row">
               <div class="col-md-4">
                  <div class="img-item">
                     <img src="images/101.jpg" title="4">
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="wpb_wrapper">
                     <blockquote><p>
                      Netus nisi volutpat donec condimentum nunc eu sem odio condimentum hendrerit nisl mollis scelerisque ad vitae a eu.
                      </p></blockquote>
                     <p>Etiam dictumst congue a non class risus sed a. Diam adipiscing a condimentum in a nisl.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="img-item">
                     <img src="images/102.jpg" title="12">
                  </div>
               </div>
            </div>
            <div class="cnt-3">
                  <div class="wpb_wrapper">
                     <p>Cubilia vestibulum interdum nisl a parturient a auctor vestibulum taciti vel bibendum tempor adipiscing suspendisse posuere libero penatibus lorem at interdum tristique iaculis redosan condimentum a ac rutrum mollis consectetur. Aenean nascetur vehicula egestas a adipiscing a est egestas suspendisse parturient diam adipiscing mattis elementum velit pulvinar suscipit sagittis facilisis facilisi tortor morbi at aliquam.</p>
                  </div>
            </div>
         </div>
      </div>
   </div>



    