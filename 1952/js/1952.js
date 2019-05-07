$(document).ready(function(){
  $(".ep1").click(()=>{
    $(this).find('a').addClass('active')
    $('.ep3').find('a').removeClass('active')
  });

  $(".ep3").click(()=>{
    $(this).find('a').addClass('active')
    $('.ep1').find('a').removeClass('active')
  });

});

function myFunction() {
  //document.getElementById("ep3 a").style.borderBottomColor = "coral";
}

