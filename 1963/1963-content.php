<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1963">
  <div class="container">
    <div class="sanpham">Products</div>
      <div class="owl-carousel owl-theme">
    <div class="item">
      <div class="chuahinhnho sales"><p class="on-sales">On Sales!</p><img class="hinhnho" src="images/6__20611.jpg">
        <div class="khongcogi"><i class="fa fa-eye eye" aria-hidden="true"></i><p class="add">Add to Cart</p></div>
        <div class="thongtinsanpham">White DG Perl Gold</div>
        <p class="giatien"><strike>$4.520,00</strike> <span> - </span>$4.000,00</p>
      </div>
    </div>
    <div class="item">
      <div class="chuahinhnho sales"><p class="on-sales">On Sales!</p><img class="hinhnho" src="images/3__81025.jpg">
        <div class="khongcogi"><i class="fa fa-eye eye" aria-hidden="true"></i><p class="add">Add to Cart</p></div>
        <div class="thongtinsanpham">Dc DiaGold Ring</div>
        <p class="giatien"><strike>$1.051,00</strike><span> - </span> $951,00</p>
      </div>
      
    </div>
    <div class="item">
       <div class="chuahinhnho"><img class="hinhnho" src="images/4__30728.jpg">
        <div class="khongcogi"><i class="fa fa-eye eye" aria-hidden="true"></i><p class="add">Add to Cart</p></div>
        <div class="thongtinsanpham">Diamond Rcal Ring</div>
        <p class="giatien">$15,00</p>
      </div>
    </div>
    <div class="item">   
      <div class="chuahinhnho sales"><p class="on-sales">On Sales!</p><img class="hinhnho" src="images/11__80688.jpg">
        <div class="khongcogi"><i class="fa fa-eye eye" aria-hidden="true"></i><p class="add">Add to Cart</p></div>
        <div class="thongtinsanpham">Mvcac Silver Earring</div>
        <p class="giatien"><strike>$550,00</strike><span> - </span> $450,00</p>
      </div>
    </div>
    <div class="item">   
      <div class="chuahinhnho sales"><p class="on-sales">On Sales!</p><img class="hinhnho" src="images/11__80688.jpg">
        <div class="khongcogi"><i class="fa fa-eye eye" aria-hidden="true"></i><p class="add">Add to Cart</p></div>
        <div class="thongtinsanpham">Mvcac Silver Earring</div>
        <p class="giatien"><strike>$550,00</strike><span> - </span> $450,00</p>
      </div>
    </div>
    <div class="item">
         <div class="chuahinhnho sales"><p class="on-sales">On Sales!</p><img class="hinhnho" src="images/11__80688.jpg">
        <div class="khongcogi"><i class="fa fa-eye eye" aria-hidden="true"></i><p class="add">Add to Cart</p></div>
        <div class="thongtinsanpham">Mvcac Silver Earring</div>
        <p class="giatien"><strike>$550,00</strike><span> - </span> $450,00</p>
      </div>
    </div>
  </div>
  </div>
</div>
