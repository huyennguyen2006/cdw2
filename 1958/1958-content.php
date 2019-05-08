    <?php
        $url_host = 'http://'.$_SERVER['HTTP_HOST'];
        $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
        $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
        
        preg_match_all($pattern_uri, __DIR__, $matches);
        $url_path = $url_host . $matches[1][0];
        $url_path = str_replace('\\', '/', $url_path);
    ?>
      
<div class="type-1958">
   <div class="container">
    <h2>Personal Information</h2>
      <form>
    <div class="form-group row">
      <div class="col-xs-6">
        <input class="form-control" id="ex1" type="text" placeholder="First Name">
      </div>
      <div class="col-xs-6">
        <input class="form-control" id="ex3" type="text" placeholder="Last Name">
      </div>

    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"><span class="sign-up">Sign Up for Newsletter</span></label>
    </div>
    <div class="form-group">
      <label for="inputdefault">Email<span class="star"> * </span></label>
      <input class="form-control inputdefault" id="inputdefault" type="text">
    </div>
    <div class="form-group">
      <label for="inputdefault">Password<span class="star"> * </span></label>
      <input class="form-control inputdefault" id="inputdefault" type="text">
      <div id="ipassword-strength-meter" class="password-strength-meter">Password Strength:
      <span id="password-strength-meter-label" data-role="password-strength-meter-label">No Password</span>
    </div>
    </div>

      <div class="form-group">
        <label for="inputdefault">Confirm Password<span class="star"> * </span></label>
        <input class="form-control inputdefault" id="inputdefault" type="text">
      </div>
      <div class="btn-element">
       <button class="col-xs-5 btn btn-back" type="button">Back</button>
      <button class="col-xs-5 col-xs-offset-2 btn btn-primary" type="button">Create an account</button>
    </div>
    </form>
    <br>
      <div class="block-content">
        <div class="actions-toolbar social-btn social-btn-actions-toolbar facebook-login">
          <a class="btn-block btn-social btn-facebook">
            <span class="fa fa-facebook"></span>Sign in with Facebook</a>
        </div>
        <div class=" actions-toolbar social-btn social-btn-actions-toolbar google-login">
          <a class="btn-block btn-social btn-google"><span class="fa fa-google"></span>Sign in with Google</a>
        </div>
        <div class=" actions-toolbar social-btn social-btn-actions-toolbar twitter-login">
          <a class="btn-block btn-social btn-twitter"><span class="fa fa-twitter"></span>Sign in with Twitter</a>
        </div>
      </div>
</div>
</div>