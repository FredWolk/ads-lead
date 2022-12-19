$('.header--search-btn').on('click', function () {
    $(this).toggleClass('active');
    $('.header--search-input').toggleClass('active');
});

$(document).click(function (e) {
    if (!$(".header--search-input-wrapper").is(e.target) && $(".header--search-input-wrapper").has(e.target).length === 0) {
        $('.header--search-btn, .header--search-input').removeClass('active');
    }
});

$('.btn--burger').on('click', function () {
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

$('.filter-aside--btn').on('click', function () {
    $(this).toggleClass('active');
    $(this).next().toggleClass('active');

    if ($(this).next().hasClass('active')) {
        $(this).next().slideDown(300);
    } else {
        $(this).next().slideUp(300);
    }
});

$('.filter-aside_list-item_wrapper').on('click', function (e) {
    if (!$('.filter-aside_list-item_wrap_list-item').is(e.target) && $('.filter-aside_list-item_wrap_list-item').has(e.target).length === 0) {
        $(this).toggleClass('active');
        $(this).prev().toggleClass('active');
        $(this).slideUp(300);
    }
});

$('.btn--filter').on('click', function () {
    $(this).toggleClass('active');
    $('.filter-aside').toggleClass('active');


    if ($('.filter-aside').hasClass('active')) {
        $('.filter-aside').slideDown(300);
    } else {
        $('.filter-aside').slideUp(300);
    }
});

$('body').on('change', '.popup_main-input-view-password', function () {
    if ($(this).is(':checked')) {
        $(this).parent().addClass('active');
        $(this).parent().prev().attr('type', 'text');
    } else {
        $(this).parent().prev().attr('type', 'password');
        $(this).parent().removeClass('active');
    }
});

$('.login--btn').on('click', function () {
    $('.main').addClass('active');
    $('.banner').addClass('active');
    $('.footer').addClass('active');
    $('.popup_wrappper').show(200);
});
$('body').on('click', function (e) {
    if (!$('.popup_wrappper').is(e.target) && $('.popup_wrappper').has(e.target).length === 0 && !$('.login--btn').is(e.target) && $('.login--btn').has(e.target).length === 0 && !$('.signup_wrapper').is(e.target) && $('.signup_wrapper').has(e.target).length === 0) {
        $('.main').removeClass('active');
        $('.banner').removeClass('active');
        $('.footer').removeClass('active');
        $('.signup_wrapper').removeClass('active');
        $('.login--btn').removeClass('disabled');
        $('.popup_wrappper').hide(200);
    }
});
$('.sign-up--btn').on('click', function () {
    $('.popup_wrappper').hide(200);
    $('.signup_wrapper').addClass('active');
    $('.login--btn').addClass('disabled');
});
$('.btn--close-mobile').on('click', function () {
    $('.signup_wrapper').removeClass('active');
    $('.main').removeClass('active');
    $('.banner').removeClass('active');
    $('.footer').removeClass('active');
    $('.login--btn').removeClass('disabled');
});
$('.custom-radio').on('change', function () {
    if (!$(this).parent().parent().parent().parent().prev().hasClass('checked')) {
        $(this).parent().parent().parent().parent().prev().addClass('checked');
    }
    $(this).parent().parent().parent().parent().prev().find('span').text($(this).val());
});
$('.custom-select--btn').on('click', function () {
    $(this).toggleClass('active');
    if ($(this).hasClass('active')) {
        $(this).next().slideDown(300);
    } else {
        $(this).next().slideUp(300);
    }
});
$('.readmore--btn').on('click', function () {
    $(this).toggleClass('active');
    $(this).prev().toggleClass('active');
    if ($(this).hasClass('active')) {
        $(this).find('span').text('close');
    } else {
        $(this).find('span').text('read more');
    }
});

$('.promocode--btn').on('click', function () {
    $(this).toggleClass('active');
});
$('.promocode--body_top--btn').on('click', function () {
    copyToClipboard($(this).prev().text());
});

function copyToClipboard(str) {
    var area = document.createElement('textarea');
    document.body.appendChild(area);
    area.value = str;
    area.select();
    document.execCommand("copy");
    document.body.removeChild(area);
}
