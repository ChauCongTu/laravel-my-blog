window.onscroll = function() {myFunction()};

var header = document.getElementById("nav-header");
var sticky = header.offsetTop;

// function myFunction() {
//   if (window.pageYOffset > sticky + 100) {
//     header.classList.add("sticky");
//   } else {
//     header.classList.remove("sticky");
//   }
// }
$('.slick-pane').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,

    prevArrow: "<button type='button' class='slick-prev slick-arrow pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    nextArrow: "<button type='button' class='slick-next slick-arrow pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
});
$("#back2top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 500);
});
