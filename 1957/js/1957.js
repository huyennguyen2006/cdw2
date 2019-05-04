$(document).ready(function(){
	$('#slide1').zoom();
	$('#slide2').zoom();
	$('#slide3').zoom();
	$('#slide4').zoom();
  $('#slide5').zoom();
});

 var swiper = new Swiper('.swiper-container', {
      navigation: {
        nextEl: '.swiper-button-next',
       prevEl: '.swiper-button-prev',
      },
    });
$(document).ready(function(){
  var $a = $('.reset_variations');
  var $b= $('.price p');
  $('.swatch').click(function(){
    $a.css('visibility','visible');
  });

  $('.swatch').click(function(){
    $b.css('visibility','visible');
  });

  $('.reset_variations').click(function(){
    $a.css('visibility','hidden');
  });
  $('.reset_variations').click(function(){
    $b.css('visibility','hidden');
  });
});
