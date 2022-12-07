<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница сайта</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/adaptive.css')}}">
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="container">
            <a class="header-link" href="{{ route('index') }}">
                <img src="{{asset('assets/images/icons/logo.webp')}}" alt="Aff journal">
            </a>
            <div class="header_nav-wrapper">
                <nav class="header_nav">
                    <ul class="header_nav_list">
                        <li class="header_nav_list_item">
                            <a class="header_nav--link" href="{{ route('articles') }}">Articles</a>
                        </li>
                        <li class="header_nav_list_item">
                            <a class="header_nav--link" href="{{ route('video') }}">Video</a>
                        </li>
                        <li class="header_nav_list_item">
                            <a class="header_nav--link" href="{{ route('index') }}">Forum</a>
                        </li>
                        <li class="header_nav_list_item">
                            <a class="header_nav--link" href="{{ route('cpa') }}">CPA-networks</a>
                        </li>
                        <li class="header_nav_list_item">
                            <a class="header_nav--link" href="{{ route('cpa') }}">Ad-networks</a>
                        </li>
                        <li class="header_nav_list_item">
                            <a class="header_nav--link" href="{{ route('index') }}">Services</a>
                        </li>
                    </ul>
                </nav>
                <div class="header_buttons">
                    <a class="btn--blue header_buttons-blue-btn" href="{{ route('index') }}">
                        <span>Sweepstakes offers</span>
                        <img src="{{asset('assets/images/icons/arrow-right-white.svg')}}" alt="arrow">
                    </a>

                    <button type="button" class="btn-rectangle btn--burger">
                        <div class="burger--btn_wrapper">
                            <div class="burger--btn_wrapper-line"></div>
                            <div class="burger--btn_wrapper-line"></div>
                            <div class="burger--btn_wrapper-line"></div>
                        </div>
                    </button>

                    <div class="header--search-input-wrapper">
                        <button type="button" class="btn-rectangle btn--search header--search-btn">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_57_1018)"><path d="M12.6874 12.6875L9.08984 9.08994" stroke="#272C31" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M5.6875 10.5C8.34537 10.5 10.5 8.34537 10.5 5.6875C10.5 3.02963 8.34537 0.875 5.6875 0.875C3.02963 0.875 0.875 3.02963 0.875 5.6875C0.875 8.34537 3.02963 10.5 5.6875 10.5Z" stroke="#272C31" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_57_1018"><rect width="14" height="14" fill="white"/></clipPath></defs></svg>
                        </button>
                        <input class="header--search-input" placeholder="Search..." type="text">
                    </div>

                    <a class="btn-rectangle btn--exit" href="{{ route('index') }}">
                        <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.33325 2.66667L5.39992 3.6L7.13325 5.33333H0.333252V6.66667H7.13325L5.39992 8.4L6.33325 9.33333L9.66659 6L6.33325 2.66667ZM12.3333 10.6667H6.99992V12H12.3333C13.0666 12 13.6666 11.4 13.6666 10.6667V1.33333C13.6666 0.6 13.0666 0 12.3333 0H6.99992V1.33333H12.3333V10.6667Z" fill="#272C31"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <section class="burger-menu">
        <div class="container">
            <div class="burger-menu--top">
                <div class="burger-menu--search">
                    <input class="burger-menu--search-input" placeholder="Search..." type="text">
                    <button type="submit" class="btn-rectangle burger-menu--search--btn">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_57_1018)"><path d="M12.6874 12.6875L9.08984 9.08994" stroke="#272C31" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M5.6875 10.5C8.34537 10.5 10.5 8.34537 10.5 5.6875C10.5 3.02963 8.34537 0.875 5.6875 0.875C3.02963 0.875 0.875 3.02963 0.875 5.6875C0.875 8.34537 3.02963 10.5 5.6875 10.5Z" stroke="#272C31" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_57_1018"><rect width="14" height="14" fill="white"/></clipPath></defs></svg>
                    </button>
                </div>

                <a class="btn-rectangle btn--exit" href="{{ route('index') }}">
                    <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.33325 2.66667L5.39992 3.6L7.13325 5.33333H0.333252V6.66667H7.13325L5.39992 8.4L6.33325 9.33333L9.66659 6L6.33325 2.66667ZM12.3333 10.6667H6.99992V12H12.3333C13.0666 12 13.6666 11.4 13.6666 10.6667V1.33333C13.6666 0.6 13.0666 0 12.3333 0H6.99992V1.33333H12.3333V10.6667Z" fill="#272C31"/></svg>
                </a>
            </div>
            <p class="burger-menu-title">menu</p>
            <nav class="burger_nav">
                <ul class="burger_nav_list">
                    <li class="burger_nav_list_item">
                        <a class="burger_nav--link" href="{{ route('index') }}">Articles</a>
                    </li>
                    <li class="burger_nav_list_item">
                        <a class="burger_nav--link" href="{{ route('index') }}">Video</a>
                    </li>
                    <li class="burger_nav_list_item">
                        <a class="burger_nav--link" href="{{ route('index') }}">Forum</a>
                    </li>
                    <li class="burger_nav_list_item">
                        <a class="burger_nav--link" href="{{ route('index') }}">CPA-networks</a>
                    </li>
                    <li class="burger_nav_list_item">
                        <a class="burger_nav--link" href="{{ route('index') }}">Ad-networks</a>
                    </li>
                    <li class="burger_nav_list_item">
                        <a class="burger_nav--link" href="{{ route('index') }}">Services</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    <section class="banner">
        <picture>
            <source srcset="{{asset('assets/images/banner.jpg')}}"
                    media="(min-width: 600px)">
            <img src="{{asset('assets/images/banner-mobile.png')}}" alt="banner">
        </picture>
    </section>
    <main class="main">
        @yield('content')
    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer_contacts">
                <p class="footer_contacts-text">Contact</p>
                <address class="footer_contacts-address">
                    <p class="footer_contacts-address-text">8 Ubi Road 2 #04-24 Zervex Singapore 408538</p>
                    <a class="footer_contacts-address-text" href="mailto:support@adleadpro.com">support@adleadpro.com</a>
                    <a class="footer_contacts-address-text" target="_blank" href="{{ route('index') }}">Privacy policy</a>
                </address>
                <span class="footer_tm">© 2022 eduardmadia</span>
            </div>
            <div class="footer_nav-wrapper">
                <p class="footer_social-title footer_nav-wrapper-first">menu</p>
                <nav class="footer_nav">
                    <ul class="footer_nav_list">
                        <li class="footer_nav_list_item">
                            <a class="footer_nav--link" href="{{ route('index') }}">Forum</a>
                        </li>
                        <li class="footer_nav_list_item">
                            <a class="footer_nav--link" href="{{ route('index') }}">CPA-networks</a>
                        </li>
                        <li class="footer_nav_list_item">
                            <a class="footer_nav--link" href="{{ route('index') }}">Ad-networks</a>
                        </li>
                        <li class="footer_nav_list_item">
                            <a class="footer_nav--link" href="{{ route('index') }}">Services</a>
                        </li>
                        <li class="footer_nav_list_item">
                            <a class="footer_nav--link" href="{{ route('index') }}">KNOWLEDGE BASE</a>
                        </li>
                    </ul>
                </nav>
                <p class="footer_social-title">Subscribe to us</p>
                <ul class="footer_social_list">
                    <li class="footer_social_list_item">
                        <a class="footer_social--link" href="{{ route('index') }}">instagram</a>
                    </li>
                    <li class="footer_social_list_item">
                        <a class="footer_social--link" href="{{ route('index') }}">telegram</a>
                    </li>
                    <li class="footer_social_list_item">
                        <a class="footer_social--link" href="{{ route('index') }}">facebook</a>
                    </li>
                    <li class="footer_social_list_item">
                        <a class="footer_social--link" href="{{ route('index') }}">youtube</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</div>
<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>
