<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>

<div class="mod-custom-13">
   <div class="container">
      <div class="header">
         <a href="#"><span>&laquo; Previous Demo: </span>Vertical Sliding Accordion</a>
         <span class="right_ab">
         <a href="#">Images by Andrey & Lili</a>
         <a href="#"><strong>back to the Codrops post</strong></a>
         </span>
      </div>
      <div class="content">
         <h1>Content Rotator<span> with jQuery</span>
            <span class="examples">
            <a href="#" class="selected">Example without autoplay</a> |
            <a href="#">Example with autoplay</a>
            </span>
         </h1>
         <div class="column">
            
         </div>
         <div class="wrapper">
            <div class="cr-container" id="cr-container">
               <div class="cr-content-wrapper" id="cr-content-wrapper">
                  <div class="cr-content-container" id="content-1" style="display:block;">
                     <img src="images/1.jpg"class="cr-img"/>
                     <div class="cr-content">
                        <div class="cr-content-headline">
                           <h2>Become the perfect housewife</h2>
                           <h3><span>How you can enjoy your time chained to the stove</span> <a href="#" class="cr-more-link"> read more &rarr;</a></h3>
                        </div>
                        <div class="cr-content-text">
                           <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                           <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn't listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                           <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then</p>
                        </div>
                     </div>
                  </div>
                  <div class="cr-content-container" id="content-2">
                     <img src="images/2.jpg"class="cr-img"/>
                     <div class="cr-content">
                        <div class="cr-content-headline">
                           <h2>Enjoy the summer!</h2>
                           <h3><span>Welcome the warm season with these new and vibrant trends</span> <a href="#" class="cr-more-link"> read more &rarr;</a></h3>
                        </div>
                        <div class="cr-content-text">
                           <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                           <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn't listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                           <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then</p>
                           <p>Eveen the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                     </div>
                  </div>
                  <div class="cr-content-container" id="content-3">
                     <img src="images/3.jpg"class="cr-img"/>
                     <div class="cr-content">
                        <div class="cr-content-headline">
                           <h2>Did he cheat on you again?</h2>
                           <h3><span>How to avoid becoming only second</span> <a href="#" class="cr-more-link"> read more &rarr;</a></h3>
                        </div>
                        <div class="cr-content-text">
                           <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then</p>
                           <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                     </div>
                  </div>
                  <div class="cr-content-container" id="content-4">
                     <img src="images/4.jpg"class="cr-img"/>
                     <div class="cr-content">
                        <div class="cr-content-headline">
                           <h2>Luxury is not only for big girls</h2>
                           <h3><span>From housewife to millionaire in just a week</span> <a href="#" class="cr-more-link"> read more &rarr;</a></h3>
                        </div>
                        <div class="cr-content-text">
                           <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                           <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn't listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                           <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then</p>
                        </div>
                     </div>
                  </div>
                  <div class="cr-content-container" id="content-5">
                     <img src="images/5.jpg"class="cr-img"/>
                     <div class="cr-content">
                        <div class="cr-content-headline">
                           <h2>Spy Fiction at the pool</h2>
                           <h3><span>What you can learn from the Dreyfus affair while sunbathing</span> <a href="#" class="cr-more-link"> read more &rarr;</a></h3>
                        </div>
                        <div class="cr-content-text">
                           <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn't listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                           <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then</p>
                        </div>
                     </div>
                  </div>
                  <div class="cr-content-container" id="content-6">
                     <img src="images/6.jpg"class="cr-img"/>
                     <div class="cr-content">
                        <div class="cr-content-headline">
                           <h2>Fittest Housewife Contest</h2>
                           <h3><span>Participate with the new dusting work-out plan</span> <a href="#" class="cr-more-link"> read more &rarr;</a></h3>
                        </div>
                        <div class="cr-content-text">
                           <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                           <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn't listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                           <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then</p>
                        </div>
                     </div>
                  </div>
                  <div class="cr-content-container" id="content-7">
                     <img src="images/7.jpg"class="cr-img"/>
                     <div class="cr-content">
                        <div class="cr-content-headline">
                           <h2>Crazy accessories shopping</h2>
                           <h3><span>The bling bling that makes you sparkle even more</span> <a href="#" class="cr-more-link"> read more &rarr;</a></h3>
                        </div>
                        <div class="cr-content-text">
                           <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                           <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn't listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                           <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then</p>
                        </div>
                     </div>
                  </div>
                  <div class="cr-content-container" id="content-8">
                     <img src="images/8.jpg"class="cr-img"/>
                     <div class="cr-content">
                        <div class="cr-content-headline">
                           <h2>Modern Arts for Dummies</h2>
                           <h3><span>Learn how to draw and discover the little Picasso in you!</span> <a href="#" class="cr-more-link"> read more &rarr;</a></h3>
                        </div>
                        <div class="cr-content-text">
                           <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                           <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn't listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                           <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="cr-thumbs">
                  <div data-content="content-1" class="cr-selected">
                     <img src="images/thumbs/1.jpg"/>
                     <h4>Become the perfect housewife</h4>
                  </div>
                  <div data-content="content-2" class="cr-selected">
                     <img src="images/thumbs/2.jpg"/>
                     <h4>Enjoy the Summer!</h4>
                  </div>
                  <div data-content="content-3" class="cr-selected">
                     <img src="images/thumbs/3.jpg"/>
                     <h4>Did he cheat on you again?</h4>
                  </div>
                  <div data-content="content-4" class="cr-selected">
                     <img src="images/thumbs/4.jpg"/>
                     <h4>Luxury is not only for big girls</h4>
                  </div>
                  <div data-content="content-5" class="cr-selected">
                     <img src="images/thumbs/5.jpg"/>
                     <h4>Spy Fiction at the pool</h4>
                  </div>
                  <div data-content="content-6" class="cr-selected">
                     <img src="images/thumbs/6.jpg"/>
                     <h4>Fittest Housewife Contest</h4>
                  </div>
                  <div data-content="content-7" class="cr-selected">
                     <img src="images/thumbs/7.jpg"/>
                     <h4>Crazy accessories shopping</h4>
                  </div>
                  <div data-content="content-8" class="cr-selected">
                     <img src="images/thumbs/8.jpg"/>
                     <h4>Arts for Dummies</h4>
                  </div>
               </div>
            </div>
            <!-- cr-container -->
            
            <div class="clr"></div>
         </div>
         <!-- wrapper -->
      </div>
      <!-- content -->
   </div>
   <!-- container -->
</div>
