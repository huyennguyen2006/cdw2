<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1964">
   <div class="row">
      <div class="col-md-3">
      </div>
      <div class="col-md-5">
         <div class="Jewellery">About Jewellery Store</div>
         <p class="noidungjewellery">Lorem ipsum presta shop amet Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
      </div>
      <div class="col-md-4 hinhcogai">
         <img src="images/about-us.jpg">
      </div>
   </div>
</div>
