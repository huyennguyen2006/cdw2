$(document).ready(function(){
	$('#ex1').zoom();
	$('#ex2').zoom();
	$('#ex3').zoom();
	$('#ex4').zoom();

});

$(document).ready(function(){
   var $p = $('#clear');
    var $price = $('.price-hidden');
  $(".swatch").click(function(){
    $p.css('visibility', 'visible');
  });
   $(".swatch").click(function(){
    $price.css('display', 'inline');
  });

  $("#clear").click(function(){
    $p.css('visibility', 'hidden');
  });

   $("#clear").click(function(){
    $price.css('display', 'none');
  });
});