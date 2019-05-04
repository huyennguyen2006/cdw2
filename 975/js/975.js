$('.cr-thumbs').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    navigation: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
})

$('.owl-drag').find('.owl-nav').remove();
$('.owl-drag').find('.owl-dots').remove();
$('.cr-selected').click(function () {
    var src = $(this.firstElementChild).attr('src');
    src = src.replace('thumbs/', '')
    $('#content-1').find('img').attr("src", src);
})