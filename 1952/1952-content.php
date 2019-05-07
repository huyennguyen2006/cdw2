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
      <div class="line-1 nav nav-tabs">
         <span class="ep1"><a class='active' data-toggle="tab" href="#home">Description</a></span>
         <span class="ep3"><a data-toggle="tab" href="#review" onclick="myFunction()">Reviews (1)</a></span>    
      </div>
      <div class="cnt-2">
         <div id="home" class="tab-pane fade active in">
            <div class="row">
               <div class="col-md-4">
                  <div class="img-item">
                     <img src="images/101.jpg" title="4">
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="wpb_wrapper">
                     <blockquote>
                        <p>
                           Netus nisi volutpat donec condimentum nunc eu sem odio condimentum hendrerit nisl mollis scelerisque ad vitae a eu.
                        </p>
                     </blockquote>
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
         <div id="review" class="tab-pane fade">
            <p class="woocommerce-noreviews">There are no reviews yet.</p>
            <div id="respond" class="comment-respond">
               <h4 id="reply-title">Be the first to review “Freakish Clock Sabbrinas”</h4>
               <p class="comment-notes">Your email address will not be published.Required fields are marked <span class="required">*</span></p>
            </div>
            <div class="comment-form-rating">
              <table>
              <tr>
                <th><label class="rating">Your rating :</label></th>
                <th>
                  <div class="rate">
                  <input type="radio" id="star5" name="rate" value="5" />
                  <label for="star5" title="text">5 stars</label>
                  <input type="radio" id="star4" name="rate" value="4" />
                  <label for="star4" title="text">4 stars</label>
                  <input type="radio" id="star3" name="rate" value="3" />
                  <label for="star3" title="text">3 stars</label>
                  <input type="radio" id="star2" name="rate" value="2" />
                  <label for="star2" title="text">2 stars</label>
                  <input type="radio" id="star1" name="rate" value="1" />
                  <label for="star1" title="text">1 star</label>
                </div>
              </th>
              </tr>
            </table>
            </div>
            <form>
               <div class="form-group">
                  <label for="comment" class="rating">Your review<span class="required">*</span></p></label>
                  <textarea class="form-control" rows="5" id="comment"></textarea>
               </div>
               <div class="form-group">
                  <label for="email" class="rating">Name</label><span class="required">*</span>
                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
               </div>
               <div class="form-group">
                  <label for="pwd" class="rating">Email</label><span class="required">*</span>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
               </div>
               <button type="submit" class="btn">Submit</button>
            </form>
         </div>
      </div>
   </div>
</div>
