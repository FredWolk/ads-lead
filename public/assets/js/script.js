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
        1020: {
          slidesPerView: 2,
          spaceBetween: 20
        },
        1440: {
          slidesPerView: 3,
          spaceBetween: 40
        }
    }
});

$('.filter-aside--btn').on('click', function(){
    $(this).toggleClass('active');
    $(this).next().toggleClass('active');

    if($(this).next().hasClass('active')){
        $(this).next().slideDown(300);
    }else{
        $(this).next().slideUp(300);
    }
});

$('.filter-aside_list-item_wrapper').on('click', function(e){
    if(!$('.filter-aside_list-item_wrap_list-item').is(e.target) && $('.filter-aside_list-item_wrap_list-item').has(e.target).length === 0){
        $(this).toggleClass('active');
        $(this).prev().toggleClass('active');
        $(this).slideUp(300);
    }
});

$('.btn--filter').on('click', function(){
    $(this).toggleClass('active');
    $('.filter-aside').toggleClass('active');

    
    if($('.filter-aside').hasClass('active')){
        $('.filter-aside').slideDown(300);
    }else{
        $('.filter-aside').slideUp(300);
    }
});

filterbunneroffset = $(".filter-aside-banner.sticky").offset().top
footeroffset = $(".footer").offset().top - $('.filter-aside-banner.sticky').height() + 40;

$(document).scroll(function(){
    s_top = $(document).scrollTop();
    if(s_top > filterbunneroffset){
        $('.filter-aside-banner.sticky').addClass('active');
    }else if($('.filter-aside-banner.sticky').hasClass('active')){
        $('.filter-aside-banner.sticky').removeClass('active');
    }
    if(s_top > footeroffset){
        $('.filter-aside-banner.sticky').removeClass('active');
    }
});