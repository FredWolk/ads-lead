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
    slidesPerView: 3,
    spaceBetween: 20,
    pagination: {
        el: ".swiper-pagination",
        type: "progressbar",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});