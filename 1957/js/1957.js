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

  $('.fa.fa-plus').click(function(){
    var quantity = $('#quantity_5cc577f043db9').val()
    $('#quantity_5cc577f043db9').val(parseInt(quantity) + 1)
  })

  $('.fa.fa-minus').click(()=>{
    var quantity = $('#quantity_5cc577f043db9').val()
    if(parseInt(quantity) !== 0) {
      $('#quantity_5cc577f043db9').val(parseInt(quantity) - 1)
    }
  })
});
