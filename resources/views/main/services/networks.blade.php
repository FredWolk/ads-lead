@extends('layouts.main')
@if(!empty($seo))
    @section('seo')
        <title>{{ $seo["{$locale}title"] }}</title>
        <meta name="description" content="{{ $seo["{$locale}description"] }}">
        <meta name="keywords" content="{{ $seo["{$locale}keywords"] }}"/>
        <meta property="og:title" content="{{ $seo["{$locale}og_title"] }}"/>
        <meta property="og:description" content="{{ $seo["{$locale}og_description"] }}"/>
        <meta property="og:url" content="{{ url()->current() }}"/>
    @endsection
@endif

@section('style')
    <style>
        .articles_seo-text--text p,
        .articles_seo-text--text p *,
        .articles_seo-text--text span,
        .articles_seo-text--text span *,
        .articles_seo-text--text li,
        .articles_seo-text--text li * {
            font-family: 'Montserrat' !important;
            font-style: normal !important;
            font-size: 18px !important;
            line-height: 160% !important;
            color: #272C31 !important;
            width: 100% !important;
        }

        .articles_seo-text--text a, .articles_seo-text--text a * {
            font-family: 'Montserrat' !important;
            font-style: normal !important;
            font-weight: 500 !important;
            font-size: 18px !important;
            line-height: 160% !important;
            text-decoration-line: underline !important;
            color: #014EFF !important;
        }

        .articles_seo-text--text h1, .articles_seo-text--text h1 * {
            font-family: 'Jost' !important;
            font-style: normal !important;
            font-weight: 700 !important;
            font-size: 30px !important;
            line-height: 120% !important;
            text-transform: uppercase !important;
            color: #014EFF !important;
        }

        .articles_seo-text--text h2, .articles_seo-text--text h2 * {
            font-family: 'Jost' !important;
            font-style: normal !important;
            font-weight: 700 !important;
            font-size: 28px !important;
            line-height: 120% !important;
            text-transform: uppercase !important;
            color: #014EFF !important;
            margin-top: 15px;
        }

        .articles_seo-text--text h3, .articles_seo-text--text h3 * {
            font-family: 'Jost' !important;
            font-style: normal !important;
            font-weight: 700 !important;
            font-size: 25px !important;
            line-height: 120% !important;
            text-transform: uppercase !important;
            color: #014EFF !important;
        }


        .articles_seo-text--text b, .articles_seo-text--text b * {
            font-family: 'Montserrat' !important;
            font-style: normal !important;
            font-weight: 500 !important;
            font-size: 18px !important;
            line-height: 160% !important;
            color: #272C31 !important;
        }

        .articles_seo-text--text i, .articles_seo-text--text i * {
            font-family: 'Montserrat' !important;
            font-style: italic !important;
            font-weight: 500 !important;
            font-size: 18px !important;
            line-height: 160% !important;
            color: #272C31 !important;
        }

        .articles_seo-text--text img {
            width: 100% !important;
            height: 100% !important;
        }

    </style>
@endsection

@section('content')
    <section class="breadcrambs top">
        <div class="container">
            <ul class="breadcrambs_list">
                <li class="breadcrambs_list-item">
                    <a href="{{ route('index') }}">Homepage</a>
                </li>
                <li class="breadcrambs_list-item">
                    {{ !empty($seo) ? $seo["{$locale}h1"] : __('messages.services') }}
                </li>
            </ul>
        </div>
    </section>

    <section class="ad-net-page cpapage">
        <div class="container">
            <div class="cpapage_main">
                <div class="cpapage_main-to-hide" style="margin-block: 25px">
                    @empty($seo)
                        <h1 class="title">{{ __('messages.services') }}</h1>
                    @else
                        <h1 class="title">{{ $seo["{$locale}h1"] }}</h1>
                        <p class="articlespage-text">{{ $seo["{$locale}after_h1_text"] }}</p>
                    @endempty
                </div>
                <div class="cpapage_info-wrapper">
                    <div class="cpapage_info--block">
                        <div class="cpapage_info-header">
                            <h2 class="cpapage_info-title">recommend</h2>
                            <div class="article--card-top">
                                <svg width="12" height="15" viewBox="0 0 12 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.45249 14.5C0.584113 12.8834 -0.171071 11.3532 0.260689 9.26339C0.579434 7.72023 1.62315 6.46472 1.72322 4.92452C2.16906 5.73587 2.35536 6.32092 2.40517 7.16877C3.82318 5.43144 4.76022 3.02637 4.81571 0.5C4.81571 0.5 8.50908 2.67012 8.75143 5.9481C9.06938 5.27245 9.22944 4.19936 8.91149 3.50389C9.86532 4.1994 15.4482 10.3737 8.15528 14.5C9.52643 11.8302 8.50901 8.22787 6.12832 6.56412C6.28732 7.27951 6.00856 9.9477 4.95533 11.1201C5.24716 9.16111 4.67767 8.33276 4.67767 8.33276C4.67767 8.33276 4.4822 9.43005 3.72382 10.5385C3.03129 11.5507 2.55144 12.6251 3.45249 14.5Z"
                                        fill="white"/>
                                </svg>
                                <p>TOP</p>
                            </div>
                        </div>
                        <ul class="cpapage_info-list ad__filters">
                            @php($key = 0)
                            @foreach($recomended as $k => $i)
                                @php($key = $key + 1)
                                <li class="cpapage_info--item">
                                    <div class="cpapage_info--item_main">
                                        <div class="cpapage_info--item_main_top">
                                            <div class="cpapage_info--item_main_top-icon">
                                                <img loading="lazy" src="{{ asset('storage/'. $i['logo']) }}"
                                                     alt="logo">
                                            </div>
                                            <div class="article--card-top">
                                                <svg width="12" height="15" viewBox="0 0 12 15" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M3.45249 14.5C0.584113 12.8834 -0.171071 11.3532 0.260689 9.26339C0.579434 7.72023 1.62315 6.46472 1.72322 4.92452C2.16906 5.73587 2.35536 6.32092 2.40517 7.16877C3.82318 5.43144 4.76022 3.02637 4.81571 0.5C4.81571 0.5 8.50908 2.67012 8.75143 5.9481C9.06938 5.27245 9.22944 4.19936 8.91149 3.50389C9.86532 4.1994 15.4482 10.3737 8.15528 14.5C9.52643 11.8302 8.50901 8.22787 6.12832 6.56412C6.28732 7.27951 6.00856 9.9477 4.95533 11.1201C5.24716 9.16111 4.67767 8.33276 4.67767 8.33276C4.67767 8.33276 4.4822 9.43005 3.72382 10.5385C3.03129 11.5507 2.55144 12.6251 3.45249 14.5Z"
                                                        fill="white"/>
                                                </svg>
                                                <p>TOP</p>
                                            </div>
                                        </div>
                                        <p class="cpapage_info--item_main-text">{{ $i["{$locale}prev_text"] }}</p>
                                    </div>
                                    <div class="cpapage_info--item-line"></div>
                                    <div class="cpapage_info--item_buttons">
                                        @if(!empty($i['link']))
                                            <a data-type="rec_tools_{{$key}}_rev" class="btn--blue header_buttons-blue-btn banner_check"
                                               href="{{ $i['link'] }}">
                                                <span>{{ __('messages.review') }}</span>
                                                <img loading="lazy"
                                                     src="{{asset('assets/images/icons/arrow-right-white.svg')}}"
                                                     alt="arrow">
                                            </a>
                                        @endif
                                        <div class="promocode--btn-wrapper">
                                            <button type="button" class="btn--grey-with-icons promocode promocode--btn"
                                                    style="
                                        font-family: 'Jost';
                                        font-style: normal;
                                        font-weight: 500;
                                        font-size: 14px;
                                        line-height: 160%;
                                        text-transform: uppercase;
                                        ">
                                                {{ __('messages.promocode') }}
                                                <svg class="svg1" width="13" height="13" viewBox="0 0 13 13" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M7.24637 0.33398C6.84877 -0.111327 6.1521 -0.111326 5.7545 0.333981L5.09449 1.07319C4.87111 1.32337 4.53718 1.44491 4.20524 1.39685L3.22449 1.25483C2.63367 1.16928 2.09999 1.61709 2.08165 2.21378L2.05121 3.2043C2.0409 3.53954 1.86322 3.84729 1.57805 4.02383L0.735463 4.54545C0.227879 4.85969 0.106904 5.54577 0.476403 6.01466L1.08977 6.79301C1.29736 7.05644 1.35907 7.4064 1.2541 7.72494L0.94393 8.66613C0.757082 9.23312 1.10542 9.83645 1.68986 9.95813L2.66004 10.1601C2.9884 10.2285 3.26062 10.4569 3.38496 10.7684L3.75235 11.6888C3.97366 12.2432 4.62832 12.4815 5.15424 12.199L6.02728 11.7301C6.32276 11.5714 6.67811 11.5714 6.97359 11.7301L7.84663 12.199C8.37255 12.4815 9.02721 12.2432 9.24852 11.6888L9.61591 10.7684C9.74025 10.4569 10.0125 10.2285 10.3408 10.1601L11.311 9.95813C11.8955 9.83645 12.2438 9.23312 12.0569 8.66614L11.7468 7.72494C11.6418 7.4064 11.7035 7.05644 11.9111 6.793L12.5245 6.01466C12.894 5.54577 12.773 4.85969 12.2654 4.54545L11.4228 4.02383C11.1376 3.84729 10.96 3.53954 10.9497 3.2043L10.9192 2.21378C10.9009 1.61709 10.3672 1.16928 9.77638 1.25483L8.79563 1.39685C8.46369 1.44491 8.12977 1.32337 7.90638 1.07319L7.24637 0.33398ZM5.62575 3.51082L5.92266 7.08175H7.13437L7.4393 3.51082H5.62575ZM5.87452 8.95147C6.04571 9.11731 6.26504 9.20023 6.53253 9.20023C6.80001 9.20023 7.01668 9.11731 7.18252 8.95147C7.35371 8.78563 7.4393 8.58769 7.4393 8.35765C7.4393 8.12227 7.35371 7.927 7.18252 7.77186C7.01668 7.61137 6.80001 7.53112 6.53253 7.53112C6.26504 7.53112 6.04571 7.61137 5.87452 7.77186C5.70332 7.927 5.61773 8.12227 5.61773 8.35765C5.61773 8.58769 5.70332 8.78563 5.87452 8.95147Z"
                                                          fill="#181A1C"/>
                                                </svg>

                                                <svg class="svg2" width="13" height="12" viewBox="0 0 13 12" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.0417 1.5745L10.9255 0.458252L6.50004 4.88367L2.07462 0.458252L0.958374 1.5745L5.38379 5.99992L0.958374 10.4253L2.07462 11.5416L6.50004 7.11617L10.9255 11.5416L12.0417 10.4253L7.61629 5.99992L12.0417 1.5745Z"
                                                        fill="white"/>
                                                </svg>
                                            </button>
                                            <div class="promocode--body">
                                                <div class="promocode--body_top">
                                                    <p class="promocode--body_top-text">{{ $i['promocode'] }}</p>
                                                    <button type="button" class="promocode--body_top--btn">
                                                        <svg width="16" height="19" viewBox="0 0 16 19" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11.6667 0.791748H2.16671C1.29587 0.791748 0.583374 1.50425 0.583374 2.37508V13.4584H2.16671V2.37508H11.6667V0.791748ZM14.0417 3.95841H5.33337C4.46254 3.95841 3.75004 4.67091 3.75004 5.54175V16.6251C3.75004 17.4959 4.46254 18.2084 5.33337 18.2084H14.0417C14.9125 18.2084 15.625 17.4959 15.625 16.6251V5.54175C15.625 4.67091 14.9125 3.95841 14.0417 3.95841ZM14.0417 16.6251H5.33337V5.54175H14.0417V16.6251Z"
                                                                fill="white"/>
                                                        </svg>
                                                        <span>copy</span>
                                                    </button>
                                                </div>
                                                <p class="promocode--body-text">{{ $i["{$locale}promocode_desc"] }}</p>
                                            </div>
                                        </div>
                                        <a data-type="rec_tools_{{$key}}" class="link--blue-sphere banner_check" target="_blank" href="{{ $i['url'] }}">
                                            <img loading="lazy" src="{{asset('assets/images/icons/sphere.svg')}}"
                                                 alt="sphere">
                                            <span>Site</span>
                                        </a>

                                        <a class="btn--grey-with-icons mobile" href="{{ $i['url'] }}">
                                            <svg width="11" height="12" viewBox="0 0 11 12" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.5001 0.600098C4.06793 0.600098 2.69442 1.16902 1.68172 2.18172C0.669025 3.19442 0.100098 4.56793 0.100098 6.0001C0.100098 7.43227 0.669025 8.80578 1.68172 9.81847C2.69442 10.8312 4.06793 11.4001 5.5001 11.4001C6.93227 11.4001 8.30578 10.8312 9.31847 9.81847C10.3312 8.80578 10.9001 7.43227 10.9001 6.0001C10.9001 4.56793 10.3312 3.19442 9.31847 2.18172C8.30578 1.16902 6.93227 0.600098 5.5001 0.600098V0.600098ZM0.766098 6.4081H2.2721C2.2961 6.9541 2.3723 7.4965 2.5001 8.0281H1.2041C0.962421 7.51863 0.814073 6.96994 0.766098 6.4081ZM5.9081 3.1681V1.3141C6.48631 1.53383 6.96143 1.96187 7.2401 2.5141C7.3631 2.7223 7.4717 2.9389 7.5641 3.1621L5.9081 3.1681ZM7.8401 3.9781C7.9793 4.5079 8.0621 5.0509 8.0861 5.5981H5.9081V3.9781H7.8401ZM5.0921 1.3141V3.1681H3.4361C3.52865 2.94472 3.63693 2.72817 3.7601 2.5201C4.03758 1.96561 4.51285 1.53529 5.0921 1.3141ZM5.0921 3.9781V5.5981H2.9201C2.9441 5.0509 3.0269 4.5079 3.1661 3.9781H5.0921ZM2.2721 5.5921H0.766098C0.814073 5.03025 0.962421 4.48157 1.2041 3.9721H2.5001C2.37205 4.50349 2.2957 5.04601 2.2721 5.5921ZM2.9201 6.4081H5.0921V8.0281H3.1661C3.02692 7.49834 2.94446 6.95529 2.9201 6.4081ZM5.0981 8.8081V10.6621C4.51989 10.4424 4.04477 10.0143 3.7661 9.4621C3.64293 9.25402 3.53466 9.03748 3.4421 8.8141L5.0981 8.8081ZM5.9081 10.6621V8.8381H7.5641C7.47154 9.06148 7.36327 9.27802 7.2401 9.4861C6.96143 10.0383 6.48631 10.4664 5.9081 10.6861V10.6621ZM5.9081 7.9981V6.3781H8.0801C8.05574 6.92529 7.97328 7.46834 7.8341 7.9981H5.9081ZM8.7341 6.3781H10.2401C10.1921 6.93994 10.0438 7.48863 9.8021 7.9981H8.5001C8.6261 7.4761 8.7023 6.9439 8.7281 6.4081L8.7341 6.3781ZM8.7341 5.5681C8.70662 5.03188 8.62827 4.49949 8.5001 3.9781H9.7961C10.0379 4.4881 10.1861 5.0365 10.2341 5.5981L8.7341 5.5681ZM9.3341 3.1681H8.2601C8.06577 2.62228 7.78411 2.11163 7.4261 1.6561C8.17273 1.99125 8.82127 2.51173 9.3101 3.1681H9.3341ZM3.5741 1.6561C3.21609 2.11163 2.93442 2.62228 2.7401 3.1681H1.6901C2.17893 2.51173 2.82747 1.99125 3.5741 1.6561ZM1.6841 8.8561H2.7401C2.93442 9.40192 3.21609 9.91256 3.5741 10.3681C2.8254 10.0279 2.17667 9.50107 1.6901 8.8381L1.6841 8.8561ZM7.4201 10.3681C7.77811 9.91256 8.05977 9.40192 8.2541 8.8561H9.3101C8.81828 9.50368 8.17 10.0157 7.4261 10.3441L7.4201 10.3681Z"
                                                    fill="#181A1C"/>
                                            </svg>
                                            Site
                                            <svg width="13" height="14" viewBox="0 0 13 14" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M3.95249 14C1.08411 12.3834 0.328929 10.8532 0.760689 8.76339C1.07943 7.22023 2.12315 5.96472 2.22322 4.42452C2.66906 5.23587 2.85536 5.82092 2.90517 6.66877C4.32318 4.93144 5.26022 2.52637 5.31571 0C5.31571 0 9.00908 2.17012 9.25143 5.4481C9.56938 4.77245 9.72944 3.69936 9.41149 3.00389C10.3653 3.6994 15.9482 9.87366 8.65528 14C10.0264 11.3302 9.00901 7.72787 6.62832 6.06412C6.78732 6.77951 6.50856 9.4477 5.45533 10.6201C5.74716 8.66111 5.17767 7.83276 5.17767 7.83276C5.17767 7.83276 4.9822 8.93005 4.22382 10.0385C3.53129 11.0507 3.05144 12.1251 3.95249 14Z"
                                                    fill="#181A1C"/>
                                            </svg>
                                        </a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>


                    <div class="cpapage_info--block">
                        <div class="cpapage_info-header">
                            <h2 class="cpapage_info-title">{{ __('messages.all_services') }}</h2>
                        </div>
                        <ul class="cpapage_info-list ad__filters">
                            @foreach($services as $i)
                                <li class="cpapage_info--item">
                                    <div class="cpapage_info--item_main">
                                        <div class="cpapage_info--item_main_top">
                                            <div class="cpapage_info--item_main_top-icon">
                                                <img loading="lazy" src="{{ asset('storage/'. $i['logo']) }}"
                                                     alt="logo">
                                            </div>
                                            <div class="article--card-top">
                                                <svg width="12" height="15" viewBox="0 0 12 15" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M3.45249 14.5C0.584113 12.8834 -0.171071 11.3532 0.260689 9.26339C0.579434 7.72023 1.62315 6.46472 1.72322 4.92452C2.16906 5.73587 2.35536 6.32092 2.40517 7.16877C3.82318 5.43144 4.76022 3.02637 4.81571 0.5C4.81571 0.5 8.50908 2.67012 8.75143 5.9481C9.06938 5.27245 9.22944 4.19936 8.91149 3.50389C9.86532 4.1994 15.4482 10.3737 8.15528 14.5C9.52643 11.8302 8.50901 8.22787 6.12832 6.56412C6.28732 7.27951 6.00856 9.9477 4.95533 11.1201C5.24716 9.16111 4.67767 8.33276 4.67767 8.33276C4.67767 8.33276 4.4822 9.43005 3.72382 10.5385C3.03129 11.5507 2.55144 12.6251 3.45249 14.5Z"
                                                        fill="white"/>
                                                </svg>
                                                <p>TOP</p>
                                            </div>
                                        </div>
                                        <p class="cpapage_info--item_main-text">{{ $i["{$locale}prev_text"] }}</p>
                                    </div>
                                    <div class="cpapage_info--item-line"></div>
                                    <div class="cpapage_info--item_buttons">
                                        <div class="promocode--btn-wrapper">
                                            <button type="button" class="btn--grey-with-icons promocode promocode--btn"
                                                    style="
                                        font-family: 'Jost';
                                        font-style: normal;
                                        font-weight: 500;
                                        font-size: 14px;
                                        line-height: 160%;
                                        text-transform: uppercase;
                                        ">
                                                promo code
                                                <svg class="svg1" width="13" height="13" viewBox="0 0 13 13" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M7.24637 0.33398C6.84877 -0.111327 6.1521 -0.111326 5.7545 0.333981L5.09449 1.07319C4.87111 1.32337 4.53718 1.44491 4.20524 1.39685L3.22449 1.25483C2.63367 1.16928 2.09999 1.61709 2.08165 2.21378L2.05121 3.2043C2.0409 3.53954 1.86322 3.84729 1.57805 4.02383L0.735463 4.54545C0.227879 4.85969 0.106904 5.54577 0.476403 6.01466L1.08977 6.79301C1.29736 7.05644 1.35907 7.4064 1.2541 7.72494L0.94393 8.66613C0.757082 9.23312 1.10542 9.83645 1.68986 9.95813L2.66004 10.1601C2.9884 10.2285 3.26062 10.4569 3.38496 10.7684L3.75235 11.6888C3.97366 12.2432 4.62832 12.4815 5.15424 12.199L6.02728 11.7301C6.32276 11.5714 6.67811 11.5714 6.97359 11.7301L7.84663 12.199C8.37255 12.4815 9.02721 12.2432 9.24852 11.6888L9.61591 10.7684C9.74025 10.4569 10.0125 10.2285 10.3408 10.1601L11.311 9.95813C11.8955 9.83645 12.2438 9.23312 12.0569 8.66614L11.7468 7.72494C11.6418 7.4064 11.7035 7.05644 11.9111 6.793L12.5245 6.01466C12.894 5.54577 12.773 4.85969 12.2654 4.54545L11.4228 4.02383C11.1376 3.84729 10.96 3.53954 10.9497 3.2043L10.9192 2.21378C10.9009 1.61709 10.3672 1.16928 9.77638 1.25483L8.79563 1.39685C8.46369 1.44491 8.12977 1.32337 7.90638 1.07319L7.24637 0.33398ZM5.62575 3.51082L5.92266 7.08175H7.13437L7.4393 3.51082H5.62575ZM5.87452 8.95147C6.04571 9.11731 6.26504 9.20023 6.53253 9.20023C6.80001 9.20023 7.01668 9.11731 7.18252 8.95147C7.35371 8.78563 7.4393 8.58769 7.4393 8.35765C7.4393 8.12227 7.35371 7.927 7.18252 7.77186C7.01668 7.61137 6.80001 7.53112 6.53253 7.53112C6.26504 7.53112 6.04571 7.61137 5.87452 7.77186C5.70332 7.927 5.61773 8.12227 5.61773 8.35765C5.61773 8.58769 5.70332 8.78563 5.87452 8.95147Z"
                                                          fill="#181A1C"/>
                                                </svg>

                                                <svg class="svg2" width="13" height="12" viewBox="0 0 13 12" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.0417 1.5745L10.9255 0.458252L6.50004 4.88367L2.07462 0.458252L0.958374 1.5745L5.38379 5.99992L0.958374 10.4253L2.07462 11.5416L6.50004 7.11617L10.9255 11.5416L12.0417 10.4253L7.61629 5.99992L12.0417 1.5745Z"
                                                        fill="white"/>
                                                </svg>
                                            </button>
                                            <div class="promocode--body">
                                                <div class="promocode--body_top">
                                                    <p class="promocode--body_top-text">{{ $i['promocode'] }}</p>
                                                    <button type="button" class="promocode--body_top--btn">
                                                        <svg width="16" height="19" viewBox="0 0 16 19" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11.6667 0.791748H2.16671C1.29587 0.791748 0.583374 1.50425 0.583374 2.37508V13.4584H2.16671V2.37508H11.6667V0.791748ZM14.0417 3.95841H5.33337C4.46254 3.95841 3.75004 4.67091 3.75004 5.54175V16.6251C3.75004 17.4959 4.46254 18.2084 5.33337 18.2084H14.0417C14.9125 18.2084 15.625 17.4959 15.625 16.6251V5.54175C15.625 4.67091 14.9125 3.95841 14.0417 3.95841ZM14.0417 16.6251H5.33337V5.54175H14.0417V16.6251Z"
                                                                fill="white"/>
                                                        </svg>
                                                        <span>copy</span>
                                                    </button>
                                                </div>
                                                <p class="promocode--body-text">{{ $i["{$locale}promocode_desc"] }}</p>
                                            </div>
                                        </div>
                                        <a class="link--blue-sphere" target="_blank" href="{{ $i['url'] }}">
                                            <img loading="lazy" src="{{asset('assets/images/icons/sphere.svg')}}"
                                                 alt="sphere">
                                            <span>Site</span>
                                        </a>

                                        <a class="btn--grey-with-icons mobile" href="{{ $i['url'] }}">
                                            <svg width="11" height="12" viewBox="0 0 11 12" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.5001 0.600098C4.06793 0.600098 2.69442 1.16902 1.68172 2.18172C0.669025 3.19442 0.100098 4.56793 0.100098 6.0001C0.100098 7.43227 0.669025 8.80578 1.68172 9.81847C2.69442 10.8312 4.06793 11.4001 5.5001 11.4001C6.93227 11.4001 8.30578 10.8312 9.31847 9.81847C10.3312 8.80578 10.9001 7.43227 10.9001 6.0001C10.9001 4.56793 10.3312 3.19442 9.31847 2.18172C8.30578 1.16902 6.93227 0.600098 5.5001 0.600098V0.600098ZM0.766098 6.4081H2.2721C2.2961 6.9541 2.3723 7.4965 2.5001 8.0281H1.2041C0.962421 7.51863 0.814073 6.96994 0.766098 6.4081ZM5.9081 3.1681V1.3141C6.48631 1.53383 6.96143 1.96187 7.2401 2.5141C7.3631 2.7223 7.4717 2.9389 7.5641 3.1621L5.9081 3.1681ZM7.8401 3.9781C7.9793 4.5079 8.0621 5.0509 8.0861 5.5981H5.9081V3.9781H7.8401ZM5.0921 1.3141V3.1681H3.4361C3.52865 2.94472 3.63693 2.72817 3.7601 2.5201C4.03758 1.96561 4.51285 1.53529 5.0921 1.3141ZM5.0921 3.9781V5.5981H2.9201C2.9441 5.0509 3.0269 4.5079 3.1661 3.9781H5.0921ZM2.2721 5.5921H0.766098C0.814073 5.03025 0.962421 4.48157 1.2041 3.9721H2.5001C2.37205 4.50349 2.2957 5.04601 2.2721 5.5921ZM2.9201 6.4081H5.0921V8.0281H3.1661C3.02692 7.49834 2.94446 6.95529 2.9201 6.4081ZM5.0981 8.8081V10.6621C4.51989 10.4424 4.04477 10.0143 3.7661 9.4621C3.64293 9.25402 3.53466 9.03748 3.4421 8.8141L5.0981 8.8081ZM5.9081 10.6621V8.8381H7.5641C7.47154 9.06148 7.36327 9.27802 7.2401 9.4861C6.96143 10.0383 6.48631 10.4664 5.9081 10.6861V10.6621ZM5.9081 7.9981V6.3781H8.0801C8.05574 6.92529 7.97328 7.46834 7.8341 7.9981H5.9081ZM8.7341 6.3781H10.2401C10.1921 6.93994 10.0438 7.48863 9.8021 7.9981H8.5001C8.6261 7.4761 8.7023 6.9439 8.7281 6.4081L8.7341 6.3781ZM8.7341 5.5681C8.70662 5.03188 8.62827 4.49949 8.5001 3.9781H9.7961C10.0379 4.4881 10.1861 5.0365 10.2341 5.5981L8.7341 5.5681ZM9.3341 3.1681H8.2601C8.06577 2.62228 7.78411 2.11163 7.4261 1.6561C8.17273 1.99125 8.82127 2.51173 9.3101 3.1681H9.3341ZM3.5741 1.6561C3.21609 2.11163 2.93442 2.62228 2.7401 3.1681H1.6901C2.17893 2.51173 2.82747 1.99125 3.5741 1.6561ZM1.6841 8.8561H2.7401C2.93442 9.40192 3.21609 9.91256 3.5741 10.3681C2.8254 10.0279 2.17667 9.50107 1.6901 8.8381L1.6841 8.8561ZM7.4201 10.3681C7.77811 9.91256 8.05977 9.40192 8.2541 8.8561H9.3101C8.81828 9.50368 8.17 10.0157 7.4261 10.3441L7.4201 10.3681Z"
                                                    fill="#181A1C"/>
                                            </svg>
                                            Site
                                            <svg width="13" height="14" viewBox="0 0 13 14" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M3.95249 14C1.08411 12.3834 0.328929 10.8532 0.760689 8.76339C1.07943 7.22023 2.12315 5.96472 2.22322 4.42452C2.66906 5.23587 2.85536 5.82092 2.90517 6.66877C4.32318 4.93144 5.26022 2.52637 5.31571 0C5.31571 0 9.00908 2.17012 9.25143 5.4481C9.56938 4.77245 9.72944 3.69936 9.41149 3.00389C10.3653 3.6994 15.9482 9.87366 8.65528 14C10.0264 11.3302 9.00901 7.72787 6.62832 6.06412C6.78732 6.77951 6.50856 9.4477 5.45533 10.6201C5.74716 8.66111 5.17767 7.83276 5.17767 7.83276C5.17767 7.83276 4.9822 8.93005 4.22382 10.0385C3.53129 11.0507 3.05144 12.1251 3.95249 14Z"
                                                    fill="#181A1C"/>
                                            </svg>
                                        </a>
                                    </div>
                                </li>
                            @endforeach
                            <div class="pagination">
                                {{ $services->onEachSide(1)->links() }}
                            </div>
                        </ul>
                    </div>

                    @if(!empty($banner))
                        <div class="filter-aside-banner to-show">
                            <a data-type="aside_banner" class="banner_check" target="_blank" href="{{ $banner->link }}">
                                @if($banner->type == 'image')
                                    <img loading="lazy" width="100%" src="{{asset('storage/'. $banner->file)}}"
                                         alt="bunner">
                                @else
                                    <video width="100%" src="{{ asset('storage/'. $banner->file) }}" autoplay loop
                                           muted></video>
                                @endif
                            </a>
                        </div>
                    @endif
                </div>
                @if(!empty($seo) && empty($_GET['page']))
                    <aside class="articles_seo-text">
                        <div class="articles_seo-text--text">{!! $seo["{$locale}seo_text"] !!}</div>
                    </aside>
                @endif
            </div>

            <aside class="filter-aside">
                @if(!empty($banner))
                    <aside class="filter-aside--sticky">
                        <div class="filter-aside-banner sticky">
                            <a data-type="aside_banner" class="banner_check" target="_blank" href="{{ $banner->link }}">
                                @if($banner->type == 'image')
                                    <img loading="lazy" src="{{asset('storage/'. $banner->file)}}" alt="bunner">
                                @else
                                    <video src="{{ asset('storage/'. $banner->file) }}" autoplay loop muted></video>
                                @endif
                            </a>
                        </div>
                    </aside>
                @endif
            </aside>

            <div class="cpapage_main-to-show">
                @empty($seo)
                    <h1 class="title">Services</h1>
                @else
                    <h1 class="title">{{ $seo["{$locale}h1"] }}</h1>
                    <p class="articlespage-text">{{ $seo["{$locale}after_h1_text"] }}</p>
                @endempty
            </div>
        </div>
    </section>

    <section class="breadcrambs bot">
        <div class="container">
            <ul class="breadcrambs_list">
                <li class="breadcrambs_list-item">
                    <a href="{{ route('index') }}">Homepage</a>
                </li>
                <li class="breadcrambs_list-item">
                    {{ !empty($seo) ? $seo["{$locale}h1"] : __('messages.services') }}
                </li>
            </ul>
        </div>
    </section>
@endsection
