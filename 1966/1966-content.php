<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
  
<div class="i-type-1966">
  <section id="support" class="support clearfix">
    <div class="bottom-support-wrapper">
      <div class="container fadeInUp animated" style="">
        <h2 class="text-center">We Love to Support You</h2>
        <div style="color: #fff; opacity: .5" class="text-center">Your questions for help make us stronger!</div>
        <br>
        <div class="qabox hidden">
          <div class="col-md-6">
            <div class="message mgs-left">
              <i class="client"></i>
              <p>“Oh yeah, Organie is an excellent theme!<br>
                But how is the support?</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="message mgs-right">
              <i class="arrowhitech"></i>
              <p>“Don’t worry! We are here to help you instantly!<br>
                DoradoThemes is always beside you.</p>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-3">
          <div class="support-item">
            <i class="fa fa-file-text-o"></i>
            <h5><a href="#">Well Documented</a></h5>
          </div>
        </div>
        <div class="col-md-3">
          <div class="support-item">
            <i class="fa fa-youtube-play"></i>
            <h5><a href="#">Video Guide</a></h5>
          </div>
        </div>
        <div class="col-md-3">
          <div class="support-item">
            <i class="fa fa-comments-o"></i>
            <h5><a href="#">Forum Support</a></h5>
          </div>
        </div>
        <div class="col-md-3">
          <div class="support-item">
            <i class="fa fa-support"></i>
            <h5><a href="#">Support 24/7</a></h5>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
      