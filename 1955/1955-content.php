    <?php
        $url_host = 'http://'.$_SERVER['HTTP_HOST'];
        $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
        $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
        
        preg_match_all($pattern_uri, __DIR__, $matches);
        $url_path = $url_host . $matches[1][0];
        $url_path = str_replace('\\', '/', $url_path);
    ?>
      
<div class="i-type-1955">
  <img src="images/maintenance.jpg">
   <div class="text-block">
    <h1>COMING SOON</h1>
    <p>We are working very hard to give you the best experience with this one. You will love Jms Varse as much as we do. It will morph perfectly on your needs!</p>
  </div>
</div>



    