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
                            <a class="header_nav--link" href="{{ route('forum') }}">Forum</a>
                        </li>
                        <li class="header_nav_list_item">
                            <a class="header_nav--link" href="{{ route('cpa') }}">CPA-networks</a>
                        </li>
                        <li class="header_nav_list_item">
                            <a class="header_nav--link" href="{{ route('ad') }}">Ad-networks</a>
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

                    <button type="button" class="btn-rectangle btn--exit login--btn">
                        <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.33325 2.66667L5.39992 3.6L7.13325 5.33333H0.333252V6.66667H7.13325L5.39992 8.4L6.33325 9.33333L9.66659 6L6.33325 2.66667ZM12.3333 10.6667H6.99992V12H12.3333C13.0666 12 13.6666 11.4 13.6666 10.6667V1.33333C13.6666 0.6 13.0666 0 12.3333 0H6.99992V1.33333H12.3333V10.6667Z" fill="#272C31"/></svg>
                    </button>
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

                <button type="button" class="btn-rectangle btn--exit login--btn">
                    <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.33325 2.66667L5.39992 3.6L7.13325 5.33333H0.333252V6.66667H7.13325L5.39992 8.4L6.33325 9.33333L9.66659 6L6.33325 2.66667ZM12.3333 10.6667H6.99992V12H12.3333C13.0666 12 13.6666 11.4 13.6666 10.6667V1.33333C13.6666 0.6 13.0666 0 12.3333 0H6.99992V1.33333H12.3333V10.6667Z" fill="#272C31"/></svg>
                </button>
            </div>
            <p class="burger-menu-title">menu</p>
            <nav class="burger_nav">
                <ul class="burger_nav_list">
                    <li class="burger_nav_list_item">
                        <a class="burger_nav--link" href="{{ route('articles') }}">Articles</a>
                    </li>
                    <li class="burger_nav_list_item">
                        <a class="burger_nav--link" href="{{ route('video') }}">Video</a>
                    </li>
                    <li class="burger_nav_list_item">
                        <a class="burger_nav--link" href="{{ route('forum') }}">Forum</a>
                    </li>
                    <li class="burger_nav_list_item">
                        <a class="burger_nav--link" href="{{ route('cpa') }}">CPA-networks</a>
                    </li>
                    <li class="burger_nav_list_item">
                        <a class="burger_nav--link" href="{{ route('ad') }}">Ad-networks</a>
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
                            <a class="footer_nav--link" href="{{ route('forum') }}">Forum</a>
                        </li>
                        <li class="footer_nav_list_item">
                            <a class="footer_nav--link" href="{{ route('cpa') }}">CPA-networks</a>
                        </li>
                        <li class="footer_nav_list_item">
                            <a class="footer_nav--link" href="{{ route('ad') }}">Ad-networks</a>
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
<div class="popup_wrappper">
    <section class="popup_main">
        <div class="popup_container">
            <p class="popup_main-title">Log in</p>
            <form method="POST" action="">
                <div class="popup_main-inputs">
                    <div class="popup_main-inputs-item">
                        <label class="popup_main-inputs-label" for="login">Login</label>
                        <input placeholder="Enter your login" required class="input-style" type="text" name="login" id="login">
                    </div>
                    <div class="popup_main-inputs-item">
                        <label class="popup_main-inputs-label" for="password">Password</label>
                        <div class="popup_main-input-password-wrapper">
                            <input placeholder="Enter your password" required class="input-style input-password" type="password" name="password" id="password">

                            <label class="popup_main-input-view-password-label">
                                <input class="popup_main-input-view-password input-hide" type="checkbox" name="viewpasswors">
                                <div class="popup_main-input-view-password-label-icon">
                                    <img src="{{asset('assets/images/icons/eye.svg')}}" alt="eye">
                                </div>
                            </label>
                        </div>
                        <label class="castom-checkbox-label">
                            <input checked class="castom-checkbox input-hide" type="checkbox" name="remember-password">
                            <div class="castom-checkbox-wrapper">
                                <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.24911 6.43247L1.81661 3.99997L0.988281 4.82247L4.24911 8.0833L11.2491 1.0833L10.4266 0.260803L4.24911 6.43247Z" fill="white"/></svg>
                            </div>
                            <p class="castom-checkbox-text">Remember Me</p>
                        </label>
                    </div>
                </div>
                <button style="max-width: 100%" class="btn--blue header_buttons-blue-btn">
                    <span>Send</span>
                    <img src="{{asset('assets/images/icons/arrow-right-white.svg')}}" alt="arrow">
                </button>
            </form>
            <p class="popup_main-no-acc">No account? <button class="sign-up--btn" type="button">Sign up :)</button></p>
        </div>
    </section>
</div>
<div class="signup_wrapper">
    <div class="signup_wrapper_main">
        <p class="signup_wrapper_main-title">sign up <br> in affjourmal</p>
        <form style="max-width: 300px" method="POST" action="">
            <div class="popup_main-inputs">
                <div class="popup_main-inputs-item">
                    <label class="popup_main-inputs-label" for="Name">Name</label>
                    <input placeholder="Enter your name" required class="input-style" type="text" name="Name" id="Name">
                </div>
                <div class="popup_main-inputs-item">
                    <label class="popup_main-inputs-label" for="E-mail">E-mail</label>
                    <input placeholder="Enter your e-mail" required class="input-style" type="email" name="E-mail" id="E-mail">
                </div>
                <div class="popup_main-inputs-item">
                    <label class="popup_main-inputs-label" for="password">Password</label>
                    <div class="popup_main-input-password-wrapper">
                        <input placeholder="Enter your password" required class="input-style input-password" type="password" name="password" id="password">

                        <label class="popup_main-input-view-password-label">
                            <input class="popup_main-input-view-password input-hide" type="checkbox" name="viewpasswors">
                            <div class="popup_main-input-view-password-label-icon">
                                <img src="{{asset('assets/images/icons/eye.svg')}}" alt="eye">
                            </div>
                        </label>
                    </div>
                </div>
                <div class="popup_main-inputs-item">
                    <label class="popup_main-inputs-label" for="rp-password">Repeat your password</label>
                    <div class="popup_main-input-password-wrapper">
                        <input placeholder="Enter your password" required class="input-style input-password" type="password" name="rp-password" id="rp-password">

                        <label class="popup_main-input-view-password-label">
                            <input class="popup_main-input-view-password input-hide" type="checkbox" name="viewpasswors">
                            <div class="popup_main-input-view-password-label-icon">
                                <img src="{{asset('assets/images/icons/eye.svg')}}" alt="eye">
                            </div>
                        </label>
                    </div>
                </div>
                <div class="popup_main-inputs-item">
                    <label class="popup_main-inputs-label" for="Vertical">Vertical</label>
                    <div class="custom-select_wrapper">
                        <button type="button" class="custom-select--btn">
                            <span>Choose a vertical</span>
                            <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.69554 0.87868L0.574219 3L7.99884 10.4246L15.4235 3L13.3021 0.878681L7.99884 5.93933L2.69554 0.87868Z" fill="#272C31"/></svg>
                        </button>

                        <div class="custom-select_list-wrapper">
                            <ul class="custom-select_list">
                                <li class="custom-select_list-item">
                                    <label class="custom-select_list-item-label">
                                        <input type="radio" class="custom-radio input-hide" name="Vertical" value="Betting">
                                        <span class="custom-select_list-item-label-text">Betting</span>
                                    </label>
                                </li>
                                <li class="custom-select_list-item">
                                    <label class="custom-select_list-item-label">
                                        <input type="radio" class="custom-radio input-hide" name="Vertical" value="Nutra">
                                        <span class="custom-select_list-item-label-text">Nutra</span>
                                    </label>
                                </li>
                                <li class="custom-select_list-item">
                                    <label class="custom-select_list-item-label">
                                        <input type="radio" class="custom-radio input-hide" name="Vertical" value="Sweepstakes">
                                        <span class="custom-select_list-item-label-text">Sweepstakes</span>
                                    </label>
                                </li>
                                <li class="custom-select_list-item">
                                    <label class="custom-select_list-item-label">
                                        <input type="radio" class="custom-radio input-hide" name="Vertical" value="Ppc">
                                        <span class="custom-select_list-item-label-text">Ppc</span>
                                    </label>
                                </li>
                                <li class="custom-select_list-item">
                                    <label class="custom-select_list-item-label">
                                        <input type="radio" class="custom-radio input-hide" name="Vertical" value="Whitehat">
                                        <span class="custom-select_list-item-label-text">Whitehat</span>
                                    </label>
                                </li>
                                <li class="custom-select_list-item">
                                    <label class="custom-select_list-item-label">
                                        <input type="radio" class="custom-radio input-hide" name="Vertical" value="Cpi">
                                        <span class="custom-select_list-item-label-text">Cpi</span>
                                    </label>
                                </li>
                                 <li class="custom-select_list-item">
                                    <label class="custom-select_list-item-label">
                                        <input type="radio" class="custom-radio input-hide" name="Vertical" value="Wap-Click">
                                        <span class="custom-select_list-item-label-text">Wap-Click</span>
                                    </label>
                                </li>
                                <li class="custom-select_list-item">
                                    <label class="custom-select_list-item-label">
                                        <input type="radio" class="custom-radio input-hide" name="Vertical" value="Mobile content">
                                        <span class="custom-select_list-item-label-text">Mobile content</span>
                                    </label>
                                </li>
                                <li class="custom-select_list-item">
                                    <label class="custom-select_list-item-label">
                                        <input type="radio" class="custom-radio input-hide" name="Vertical" value="Gambling">
                                        <span class="custom-select_list-item-label-text">Gambling</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="popup_main-inputs-item">
                    <label class="popup_main-inputs-label popup_main-inputs-label-tooltip" for="Profession">Profession
                        <div class="tooltip-wrapper">
                            <div class="tooltip-wrapper-icon"><svg width="5" height="7" viewBox="0 0 5 7" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.0298 4.55972C2.0298 4.33287 2.06394 4.13194 2.13222 3.95694C2.2067 3.78194 2.29671 3.62639 2.40223 3.49028C2.51397 3.35417 2.63191 3.22778 2.75605 3.11111C2.8802 2.99444 2.99503 2.88426 3.10056 2.78056C3.21229 2.67037 3.3023 2.55694 3.37058 2.44028C3.44507 2.32361 3.48231 2.19398 3.48231 2.05139C3.48231 1.81806 3.3892 1.63009 3.20298 1.4875C3.02297 1.34491 2.78088 1.27361 2.47672 1.27361C2.18498 1.27361 1.92427 1.33843 1.6946 1.46806C1.46493 1.5912 1.27561 1.7662 1.12663 1.99306L0 1.30278C0.248293 0.907407 0.5928 0.593055 1.03352 0.359722C1.47424 0.119907 2.00807 0 2.63501 0C3.10056 0 3.51024 0.0712961 3.86406 0.213888C4.21788 0.35 4.4941 0.550926 4.69274 0.816666C4.89758 1.08241 5 1.40972 5 1.79861C5 2.05139 4.96276 2.275 4.88827 2.46944C4.81378 2.66389 4.71757 2.83241 4.59963 2.975C4.48169 3.11759 4.35444 3.25046 4.21788 3.37361C4.08752 3.49676 3.96338 3.61667 3.84544 3.73333C3.7275 3.85 3.62818 3.97315 3.54749 4.10278C3.473 4.23241 3.43575 4.38472 3.43575 4.55972H2.0298ZM2.73743 7C2.47672 7 2.26257 6.9125 2.09497 6.7375C1.92737 6.5625 1.84358 6.35509 1.84358 6.11528C1.84358 5.86898 1.92737 5.66481 2.09497 5.50278C2.26257 5.33426 2.47672 5.25 2.73743 5.25C3.00435 5.25 3.2185 5.33426 3.37989 5.50278C3.54749 5.66481 3.63128 5.86898 3.63128 6.11528C3.63128 6.35509 3.54749 6.5625 3.37989 6.7375C3.2185 6.9125 3.00435 7 2.73743 7Z" fill="white"/></svg></div>

                            <div class="tooltip-body">
                                <span>Your specialization will be visible to other users on the affjournal forum</span>
                            </div>
                        </div>
                    </label>
                    <div class="custom-select_wrapper">
                        <button type="button" class="custom-select--btn">
                            <span>Choose a profession</span>
                            <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.69554 0.87868L0.574219 3L7.99884 10.4246L15.4235 3L13.3021 0.878681L7.99884 5.93933L2.69554 0.87868Z" fill="#272C31"/></svg>
                        </button>

                        <div class="custom-select_list-wrapper">
                            <ul class="custom-select_list">
                                <li class="custom-select_list-item">
                                    <label class="custom-select_list-item-label">
                                        <input type="radio" class="custom-radio input-hide" name="Profession" value="Betting">
                                        <span class="custom-select_list-item-label-text">Betting</span>
                                    </label>
                                </li>
                                <li class="custom-select_list-item">
                                    <label class="custom-select_list-item-label">
                                        <input type="radio" class="custom-radio input-hide" name="Profession" value="Nutra">
                                        <span class="custom-select_list-item-label-text">Nutra</span>
                                    </label>
                                </li>
                                <li class="custom-select_list-item">
                                    <label class="custom-select_list-item-label">
                                        <input type="radio" class="custom-radio input-hide" name="Profession" value="Sweepstakes">
                                        <span class="custom-select_list-item-label-text">Sweepstakes</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <label class="castom-checkbox-label">
                        <input required checked class="castom-checkbox input-hide" type="checkbox" name="remember-password">
                        <div class="castom-checkbox-wrapper">
                            <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.24911 6.43247L1.81661 3.99997L0.988281 4.82247L4.24911 8.0833L11.2491 1.0833L10.4266 0.260803L4.24911 6.43247Z" fill="white"/></svg>
                        </div>
                        <p class="castom-checkbox-text">I agree</p>
                    </label>
                </div>
            </div>
            <button style="max-width: 100%" class="btn--blue header_buttons-blue-btn">
                <span>Send</span>
                <img src="{{asset('assets/images/icons/arrow-right-white.svg')}}" alt="arrow">
            </button>
        </form>
        <p class="popup_main-no-acc">Contact AFFjournal Support:<br><a href="{{ route('index') }}">Mail,</a> <a href="{{ route('index') }}">Skype,</a> <a href="{{ route('index') }}">Telegram</a></button></p>
    </div>
    <div class="signup_wrapper_main-tnx">
        <p class="signup_wrapper_main-title">Thanks for <br> registering!</p>
        <p class="signup_wrapper_main-tnx-text">Check your mailbox. After you're uprooted, you'll be able to leave comments on our materials and communicate on our forum.</p>
        <p class="popup_main-no-acc">If you don't get the email, contact support: <br><a href="{{ route('index') }}">Mail,</a> <a href="{{ route('index') }}">Skype,</a> <a href="{{ route('index') }}">Telegram</a></button></p>
    </div>

    <button type="button" class="btn--close-mobile"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="#181A1C"/></svg></button>
</div>
{{-- При отправке формы добавь классы: disable для signup_wrapper_main и active для signup_wrapper_main-tnx --}}

<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>
