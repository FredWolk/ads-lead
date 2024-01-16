@php
    $userInfo = \Illuminate\Support\Facades\Auth::user();
	$banner_button = App\Models\BannerButton::where('status', 1)->inRandomOrder()->first();
@endphp
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LK</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/adaptive.css')}}">
</head>
<body class="body-user">

<header class="header user">
    <div class="container">
        <a class="header-link" href="{{ route('index') }}">
            <img loading="lazy" src="{{asset('assets/images/icons/logo.webp')}}" alt="Aff journal">
        </a>
        <div class="header_nav-wrapper">
            <nav class="header_nav">
                <ul class="header_nav_list">
                    <li class="header_nav_list_item">
                        <a class="header_nav--link" href="{{ route('articles') }}">{{ __('messages.articles') }}</a>
                    </li>
                    <li class="header_nav_list_item">
                        <a class="header_nav--link" href="{{ route('video') }}">{{ __('messages.video') }}</a>
                    </li>
                    <li class="header_nav_list_item">
                        <a class="header_nav--link" href="{{ route('forum') }}">{{ __('messages.forum') }}</a>
                    </li>
                    <li class="header_nav_list_item">
                        <a class="header_nav--link" href="{{ route('cpa') }}">{{ __('messages.cpa') }}</a>
                    </li>
                    <li class="header_nav_list_item">
                        <a class="header_nav--link" href="{{ route('ad') }}">{{ __('messages.ad') }}</a>
                    </li>
                    <li class="header_nav_list_item">
                        <a class="header_nav--link" href="{{ route('services') }}">{{ __('messages.services') }}</a>
                    </li>
                </ul>
            </nav>
            <div class="header_buttons">
                @if(!empty($banner_button))
                    <a class="btn--blue header_buttons-blue-btn" target="_blank" href="{{ $banner_button->link }}">
                        <span>{{ $banner_button->text }}</span>
                        <img loading="lazy" src="{{asset('assets/images/icons/arrow-right-white.svg')}}" alt="arrow">
                    </a>
                @endif

                <button type="button" class="btn-rectangle btn--burger">
                    <div class="burger--btn_wrapper">
                        <div class="burger--btn_wrapper-line"></div>
                        <div class="burger--btn_wrapper-line"></div>
                        <div class="burger--btn_wrapper-line"></div>
                    </div>
                </button>

                <div class="header--search-input-wrapper">
                    <button type="button" class="btn-rectangle btn--search header--search-btn">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_57_1018)">
                                <path d="M12.6874 12.6875L9.08984 9.08994" stroke="#272C31" stroke-width="1.5"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                                <path
                                    d="M5.6875 10.5C8.34537 10.5 10.5 8.34537 10.5 5.6875C10.5 3.02963 8.34537 0.875 5.6875 0.875C3.02963 0.875 0.875 3.02963 0.875 5.6875C0.875 8.34537 3.02963 10.5 5.6875 10.5Z"
                                    stroke="#272C31" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_57_1018">
                                    <rect width="14" height="14" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                    <input class="header--search-input" placeholder="Search..." type="text">
                </div>
                <button type="button" class="btn-rectangle btn--notif header--notif-btn">
                    <svg class="svg1" width="14" height="14" viewBox="0 0 14 14" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1256_17647)">
                            <path
                                d="M5.6875 13.25C5.6875 13.5981 5.82578 13.9319 6.07192 14.1781C6.31806 14.4242 6.6519 14.5625 7 14.5625C7.3481 14.5625 7.68194 14.4242 7.92808 14.1781C8.17422 13.9319 8.3125 13.5981 8.3125 13.25"
                                stroke="#272C31" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path
                                d="M12.6875 11.9375C12.6875 11.9375 11.375 9.75 11.375 8V5.8125C11.375 4.65218 10.9141 3.53938 10.0936 2.71891C9.27312 1.89844 8.16032 1.4375 7 1.4375C5.83968 1.4375 4.72688 1.89844 3.90641 2.71891C3.08594 3.53938 2.625 4.65218 2.625 5.8125V8C2.625 9.75 1.3125 11.9375 1.3125 11.9375H12.6875Z"
                                stroke="#272C31" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_1256_17647">
                                <rect width="14" height="16" fill="white"/>
                                <rect width="14" height="14" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>

                    <svg class="svg2" width="40" height="40" viewBox="0 0 40 40" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="39" height="39" fill="#014EFF" stroke="#014EFF"/>
                        <rect x="25.832" y="13" width="1.64975" height="18.1473" transform="rotate(45 25.832 13)"
                              fill="white"/>
                        <rect x="13" y="14.1665" width="1.64975" height="18.1473" transform="rotate(-45 13 14.1665)"
                              fill="white"/>
                    </svg>

                    <div class="header--notif-btn-new"></div>
                </button>

                <div class="header-user-icon">
                    @empty($userInfo->photo)
                        <img
                            src="{{asset('assets/images/card-pict.jpg')}}"
                            alt="avatar">
                    @else
                        <img
                            src="{{asset('storage/' . $userInfo->photo)}}"
                            alt="avatar">
                    @endempty
                </div>
            </div>
        </div>
        <div class="header--notif-body">
            <div class="header--notif-body--item">
                <div class="header--notif-body--item-icon-wrapper">
                    <div class="header--notif-body--item-icon">
                        <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="user">
                    </div>
                    <div class="header--notif-body--item-icon-online"></div>
                </div>
                <div class="header--notif-body--item-main">
                    <div class="header--notif-body--item-main_top">
                        <a href="{{ route('index') }}" class="header--notif-body--item-main-type">New subscriber</a>
                        <p class="header--notif-body--item-main-time">13 minutes ago</p>
                    </div>
                    <p class="header--notif-body--item-main-text">You are subscribed to a user Jendosina <a
                            href="{{ route('index') }}">Jendosina</a></p>
                </div>
            </div>
            <div class="header--notif-body--item">
                <div class="header--notif-body--item-icon-wrapper">
                    <div class="header--notif-body--item-icon">
                        <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="user">
                    </div>
                    <div class="header--notif-body--item-icon-online"></div>
                </div>
                <div class="header--notif-body--item-main">
                    <div class="header--notif-body--item-main_top">
                        <a href="{{ route('index') }}" class="header--notif-body--item-main-type">New subscriber</a>
                        <p class="header--notif-body--item-main-time">13 minutes ago</p>
                    </div>
                    <p class="header--notif-body--item-main-text">You are subscribed to a user Jendosina <a
                            href="{{ route('index') }}">Jendosina</a></p>
                </div>
            </div>
            <div class="header--notif-body--item">
                <div class="header--notif-body--item-icon-wrapper">
                    <div class="header--notif-body--item-icon">
                        <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="user">
                    </div>
                    <div class="header--notif-body--item-icon-online"></div>
                </div>
                <div class="header--notif-body--item-main">
                    <div class="header--notif-body--item-main_top">
                        <a href="{{ route('index') }}" class="header--notif-body--item-main-type">New subscriber</a>
                        <p class="header--notif-body--item-main-time">13 minutes ago</p>
                    </div>
                    <p class="header--notif-body--item-main-text">You are subscribed to a user Jendosina <a
                            href="{{ route('index') }}">Jendosina</a></p>
                </div>
            </div>
            <div class="header--notif-body--item">
                <div class="header--notif-body--item-icon-wrapper">
                    <div class="header--notif-body--item-icon">
                        <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="user">
                    </div>
                    <div class="header--notif-body--item-icon-online"></div>
                </div>
                <div class="header--notif-body--item-main">
                    <div class="header--notif-body--item-main_top">
                        <a href="{{ route('index') }}" class="header--notif-body--item-main-type">New subscriber</a>
                        <p class="header--notif-body--item-main-time">13 minutes ago</p>
                    </div>
                    <p class="header--notif-body--item-main-text">You are subscribed to a user Jendosina <a
                            href="{{ route('index') }}">Jendosina</a></p>
                </div>
            </div>
            <div class="header--notif-body--item">
                <div class="header--notif-body--item-icon-wrapper">
                    <div class="header--notif-body--item-icon">
                        <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="user">
                    </div>
                    <div class="header--notif-body--item-icon-online"></div>
                </div>
                <div class="header--notif-body--item-main">
                    <div class="header--notif-body--item-main_top">
                        <a href="{{ route('index') }}" class="header--notif-body--item-main-type">New subscriber</a>
                        <p class="header--notif-body--item-main-time">13 minutes ago</p>
                    </div>
                    <p class="header--notif-body--item-main-text">You are subscribed to a user Jendosina <a
                            href="{{ route('index') }}">Jendosina</a></p>
                </div>
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
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_57_1018)">
                            <path d="M12.6874 12.6875L9.08984 9.08994" stroke="#272C31" stroke-width="1.5"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                            <path
                                d="M5.6875 10.5C8.34537 10.5 10.5 8.34537 10.5 5.6875C10.5 3.02963 8.34537 0.875 5.6875 0.875C3.02963 0.875 0.875 3.02963 0.875 5.6875C0.875 8.34537 3.02963 10.5 5.6875 10.5Z"
                                stroke="#272C31" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_57_1018">
                                <rect width="14" height="14" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                </button>
            </div>

            <button type="button" class="btn-rectangle btn--notif header--notif-btn">
                <svg class="svg1" width="14" height="14" viewBox="0 0 14 14" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1256_17647)">
                        <path
                            d="M5.6875 13.25C5.6875 13.5981 5.82578 13.9319 6.07192 14.1781C6.31806 14.4242 6.6519 14.5625 7 14.5625C7.3481 14.5625 7.68194 14.4242 7.92808 14.1781C8.17422 13.9319 8.3125 13.5981 8.3125 13.25"
                            stroke="#272C31" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path
                            d="M12.6875 11.9375C12.6875 11.9375 11.375 9.75 11.375 8V5.8125C11.375 4.65218 10.9141 3.53938 10.0936 2.71891C9.27312 1.89844 8.16032 1.4375 7 1.4375C5.83968 1.4375 4.72688 1.89844 3.90641 2.71891C3.08594 3.53938 2.625 4.65218 2.625 5.8125V8C2.625 9.75 1.3125 11.9375 1.3125 11.9375H12.6875Z"
                            stroke="#272C31" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_1256_17647">
                            <rect width="14" height="16" fill="white"/>
                            <rect width="14" height="14" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>

                <svg class="svg2" width="40" height="40" viewBox="0 0 40 40" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" y="0.5" width="39" height="39" fill="#014EFF" stroke="#014EFF"/>
                    <rect x="25.832" y="13" width="1.64975" height="18.1473" transform="rotate(45 25.832 13)"
                          fill="white"/>
                    <rect x="13" y="14.1665" width="1.64975" height="18.1473" transform="rotate(-45 13 14.1665)"
                          fill="white"/>
                </svg>

                <div class="header--notif-btn-new"></div>
            </button>

            <div class="header-user-icon">
                @empty($userInfo->photo)
                    <img
                        src="{{asset('assets/images/card-pict.jpg')}}"
                        alt="avatar">
                @else
                    <img
                        src="{{asset('storage/' . $userInfo->photo)}}"
                        alt="avatar">
                @endempty
            </div>
        </div>
        <p class="burger-menu-title">menu</p>
        <nav class="burger_nav">
            <ul class="burger_nav_list">
                <li class="burger_nav_list_item">
                    <a class="burger_nav--link" href="{{ route('articles') }}">{{ __('messages.articles') }}</a>
                </li>
                <li class="burger_nav_list_item">
                    <a class="burger_nav--link" href="{{ route('video') }}">{{ __('messages.video') }}</a>
                </li>
                @if(!empty($_GET['admin']) && $_GET['admin'] == 'login')
                    <li class="burger_nav_list_item">
                        <a class="burger_nav--link" href="{{ route('forum') }}">{{ __('messages.forum') }}</a>
                    </li>
                @endif
                <li class="burger_nav_list_item">
                    <a class="burger_nav--link" href="{{ route('cpa') }}">{{ __('messages.cpa') }}</a>
                </li>
                <li class="burger_nav_list_item">
                    <a class="burger_nav--link" href="{{ route('ad') }}">{{ __('messages.ad') }}</a>
                </li>
                <li class="burger_nav_list_item">
                    <a class="burger_nav--link" href="{{ route('index') }}">{{ __('messages.services') }}</a>
                </li>
            </ul>
        </nav>
    </div>
</section>

<section class="breadcrambs top user">
    <div class="container">
        <ul class="breadcrambs_list">
            <li class="breadcrambs_list-item">
                <a href="{{ route('index') }}">Homepage</a>
            </li>
            <li class="breadcrambs_list-item">
                <a href="{{ route('user.index') }}">Personal
                    Cabinet</a> {{-- CCOM нужно сделать, чтобы ссылка и название бралось с текущей страницы --}}
            </li>
        </ul>
    </div>
</section>

{{-- CCOM а это нужно отобразить только на стронице самого корреспондента вместо стандарных крошек и тоже сделать чтобы ссылка и название бралось с текущей страницы --}}
{{-- <section class="breadcrambs top user">
    <div class="container">
        <ul class="breadcrambs_list">
            <li class="breadcrambs_list-item">
                <a href="{{ route('index') }}">Homepage</a>
            </li>
            <li class="breadcrambs_list-item">
                <a href="{{ route('user.сorrespondence') }}">Correspondence</a>
            </li>
            <li class="breadcrambs_list-item">
                <a href="{{ route('user.index') }}">Robert Fox</a>
            </li>
        </ul>
    </div> deleted_at        timestamp       mapped to deleted_at
</section> --}}

<div class="container user-wrapper">
    <nav class="user_nav">
        <div class="user_nav_first">
            <div class="user_nav_top">
                <div class="user_nav-avatar-wrapper">
                    <div class="user_nav-avatar">
                        @empty($userInfo->photo)
                            <img
                                src="{{asset('assets/images/card-pict.jpg')}}"
                                alt="avatar">
                        @else
                            <img
                                src="{{asset('storage/' . $userInfo->photo)}}"
                                alt="avatar">
                        @endempty
                    </div>
                    <form enctype="multipart/form-data" id="photo_change" method="post"
                          action="{{ route('setting.photo.change') }}">
                        @csrf
                        <label class="user_nav-avatar-download--btn">
                            <input accept="image/png, image/jpeg, image/webp" style="display: none" type="file"
                                   name="photo" id="photo_inp">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="10" fill="#014EFF" stroke="white" stroke-width="2"/>
                                <path d="M15.5 10.5H13.5V7.5H10.5V10.5H8.5L12 14L15.5 10.5ZM8.5 15V16H15.5V15H8.5Z"
                                      fill="white"/>
                            </svg>
                        </label>
                    </form>
                </div>
                <div class="user_nav-text-wrapper">
                    <p class="user_nav-username">{{ $userInfo->name }}</p>
                    <p class="user_nav-welcome">Welcome</p>
                </div>
            </div>
            <p class="user_nav-menu">Main menu</p>
            <ul class="user_nav-menu_list">
                {{--CCOM нужно сделать чтобы к текущей странице добавлялся класс active --}}
                <li class="user_nav-menu--item {{ Request::route()->getName() === 'user.index' ? 'active' : '' }}">
                    <a href="{{ route('user.index') }}" class="user_nav-menu--link">
                        <p class="user_nav-menu--link-text">Profile settings</p>
                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M8.87684 4.5H3.49816V1.5H13.9982V12H10.9982V6.62132L4.55882 13.0607L2.4375 10.9393L8.87684 4.5Z"
                                  fill="#181A1C"/>
                        </svg>
                    </a>
                </li>
                <li class="user_nav-menu--item {{ Request::route()->getName() === 'user.security' ? 'active' : '' }}">
                    <a href="{{ route('user.security') }}" class="user_nav-menu--link">
                        <p class="user_nav-menu--link-text">Security</p>
                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M8.87684 4.5H3.49816V1.5H13.9982V12H10.9982V6.62132L4.55882 13.0607L2.4375 10.9393L8.87684 4.5Z"
                                  fill="#181A1C"/>
                        </svg>
                    </a>
                </li>
                <li class="user_nav-menu--item">
                    <a href="{{ route('user.favorite') }}" class="user_nav-menu--link">
                        <p class="user_nav-menu--link-text">Favorite entries</p>
                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M8.87684 4.5H3.49816V1.5H13.9982V12H10.9982V6.62132L4.55882 13.0607L2.4375 10.9393L8.87684 4.5Z"
                                  fill="#181A1C"/>
                        </svg>
                    </a>
                </li>
                @if(false)
                <li class="user_nav-menu--item">
                    <a href="{{ route('user.subscriptions') }}" class="user_nav-menu--link">
                        <p class="user_nav-menu--link-text">Subscriptions</p>
                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M8.87684 4.5H3.49816V1.5H13.9982V12H10.9982V6.62132L4.55882 13.0607L2.4375 10.9393L8.87684 4.5Z"
                                  fill="#181A1C"/>
                        </svg>
                    </a>
                </li>
                <li class="user_nav-menu--item">
                    <a href="{{ route('user.alerts') }}" class="user_nav-menu--link">
                        <p class="user_nav-menu--link-text">Alerts <span>(9)</span></p>
                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M8.87684 4.5H3.49816V1.5H13.9982V12H10.9982V6.62132L4.55882 13.0607L2.4375 10.9393L8.87684 4.5Z"
                                  fill="#181A1C"/>
                        </svg>
                    </a>
                </li>
                <li class="user_nav-menu--item">
                    <a href="{{ route('user.correspondence') }}" class="user_nav-menu--link">
                        <p class="user_nav-menu--link-text">Correspondence</p>
                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M8.87684 4.5H3.49816V1.5H13.9982V12H10.9982V6.62132L4.55882 13.0607L2.4375 10.9393L8.87684 4.5Z"
                                  fill="#181A1C"/>
                        </svg>
                    </a>
                </li>
                @endif
            </ul>
        </div>
        <div class="user_nav_first-last">
            <button type="button" class="link--blue user_nav_first-last-show-all--btn">
                <span>Show all menu</span>
                <img loading="lazy" src="{{asset('assets/images/icons/arrow-right-blue.svg')}}" alt="arrow">
            </button>

            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="user_nav-exit--btn">
                    <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M6.25552 6L10.0588 2.1967L7.9375 0.0753784L0.512879 7.5L7.9375 14.9246L10.0588 12.8033L6.25552 9L15.3621 9L15.3621 6H6.25552Z"
                              fill="#181A1C"/>
                    </svg>
                    <span>exit</span>
                </button>
            </form>
        </div>
    </nav>

    <main class="main user-pages-main">
        @yield('content')
    </main>
</div>

<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<script>
    $('#photo_inp').on('input', function () {
        $('#photo_change').submit();
    })
</script>
@stack('scripts')
</body>
</html>
