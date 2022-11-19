$('.header--search-btn').on('click', function(){
    $(this).toggleClass('active');
    $('.header--search-input').toggleClass('active');
});

$(document).click( function(e){
    if ( !$( ".header--search-input-wrapper").is(e.target) && $( ".header--search-input-wrapper").has(e.target).length === 0 ) {
        $('.header--search-btn, .header--search-input').removeClass('active');
    }
});

$('.btn--burger').on('click', function(){
    $(this).toggleClass('active');
    $('.burger-menu').toggleClass('active');
});

var swiper = new Swiper('.swiper', {
    slidesPerView: 1,
    spaceBetween: 20,
    pagination: {
        el: ".swiper-pagination",
        type: "progressbar",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        // when window width is >= 480px
        1020: {
          slidesPerView: 2,
          spaceBetween: 20
        },
        // when window width is >= 640px
        1440: {
          slidesPerView: 3,
          spaceBetween: 40
        }
    }
});