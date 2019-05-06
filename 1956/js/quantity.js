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