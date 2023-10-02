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
                    {{ !empty($seo) ? $seo["{$locale}h1"] : __('messages.cpa') }}
                </li>
            </ul>
        </div>
    </section>

    <section class="cpapage">
        <div class="container">
            <section class="cpapage_main">
                <div class="cpapage_main-to-hide" style="margin-block: 25px">
                    @empty($seo)
                        <h1 class="title">{{ __('messages.cpa') }}</h1>
                    @else
                        <h1 class="title">{{ $seo["{$locale}h1"] }}</h1>
                        <p class="articlespage-text">{{ $seo["{$locale}after_h1_text"] }}</p>
                    @endempty
                    @if(false)
                        <ul class="cpapage_main-to-show_filter__tags visible">
                            <button type="button" class="cpapage_main-to-show_filter__tags--reset">
                                <p>Remove filters</p>
                            </button>

                            <li class="cpapage_main-to-show_filter__tag">#sweepstakes
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect width="13" height="13" rx="6.5" fill="white"/>
                                    <path
                                        d="M8.61978 4.80585L8.19247 4.37854L6.49837 6.07264L4.80427 4.37854L4.37695 4.80585L6.07105 6.49995L4.37695 8.19405L4.80427 8.62137L6.49837 6.92727L8.19247 8.62137L8.61978 8.19405L6.92568 6.49995L8.61978 4.80585Z"
                                        fill="#181A1C"/>
                                </svg>
                            </li>
                        </ul>
                    @endif
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
                        <ul class="cpapage_info-list">
                            @foreach($recomended as $i)
                                <li class="cpapage_info--item">
                                    <div class="cpapage_info--item_main">
                                        <div class="cpapage_info--item_main_top">
                                            <div class="cpapage_info--item_main_top-icon">
                                                <img loading="lazy" src="{{ asset('storage/'. $i['logo']) }}"
                                                     alt="logo">
                                            </div>
                                            <ul class="cpapage_info--item_main_top-list">
                                                @if(!empty($i['verticales']))
                                                    @foreach($i['verticales'] as $tag)
                                                        <li class="article--card_info_tags-list-item mobhide">
                                                            <p class="article--card_info_tags-list-item--link">
                                                                #{{ $tag }}</p>
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>

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
                                        <a class="btn--blue header_buttons-blue-btn"
                                           href="{{ route('cpa.page', [$i['main_verticales'], $i['link']]) }}">
                                            <span>{{ __('messages.review') }}</span>
                                            <img loading="lazy"
                                                 src="{{asset('assets/images/icons/arrow-right-white.svg')}}"
                                                 alt="arrow">
                                        </a>
                                        <a target="_blank" class="btn--grey-with-icons" href="{{ $i['url'] }}">
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
                        <a style="max-width: 200px; width: 100%;" href="{{ route('cpa') }}"
                           class="btn--grey cpapage_info--block--link">{{ __('messages.show') }}</a>
                    </div>

                    @if(!empty($banner))
                        <div class="filter-aside-banner to-show">
                            <a target="_blank" href="{{ $banner->link }}">
                                @if($banner->type == 'image')
                                    <img loading="lazy" src="{{asset('storage/'. $banner->file)}}" alt="bunner">
                                @else
                                    <video width="100%" src="{{ asset('storage/'. $banner->file) }}" autoplay loop
                                           muted></video>
                                @endif
                            </a>
                        </div>
                    @endif

                    <div style="width: 100%" class="cpa__filters">
                        @foreach($cpa->groupBy('main_verticales')->toArray() as $k => $i)
                            <div class="cpapage_info--block">
                                <div class="cpapage_info-header">
                                    <h2 class="cpapage_info-title">{{ $k }}</h2>
                                    <a class="link--black-rotateble-arrows" href="{{ route('cpa.catalog', $k) }}">
                                        <span>{{ __('messages.show') }}</span>
                                        <div class="link--black-rotateble-arrows-group">
                                            @for ($a=0; $a<3; $a++)
                                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M8.37879 4.5H3.00011V1.5H13.5001V12H10.5001V6.62132L4.06077 13.0607L1.93945 10.9393L8.37879 4.5Z"
                                                          fill="#272C31"/>
                                                </svg>
                                            @endfor
                                        </div>
                                    </a>
                                </div>
                                <ul class="cpapage_info-list">
                                    @foreach($i as $v)
                                        <li class="cpapage_info--item">
                                            <div class="cpapage_info--item_main">
                                                <div class="cpapage_info--item_main_top">
                                                    <div class="cpapage_info--item_main_top-icon">
                                                        <img loading="lazy" src="{{ asset('storage/'. $v['logo']) }}"
                                                             alt="logo">
                                                    </div>
                                                    <ul class="cpapage_info--item_main_top-list">
                                                        @if(!empty($v['verticales']))
                                                            @foreach($v['verticales'] as $tag)
                                                                <li class="article--card_info_tags-list-item mobhide">
                                                                    <p class="article--card_info_tags-list-item--link">
                                                                        #{{ $tag }}</p>
                                                                </li>
                                                            @endforeach
                                                        @endif
                                                    </ul>

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
                                                <p class="cpapage_info--item_main-text">{{ $v["{$locale}prev_text"] }}</p>
                                            </div>
                                            <div class="cpapage_info--item-line"></div>
                                            <div class="cpapage_info--item_buttons">
                                                <a class="btn--blue header_buttons-blue-btn"
                                                   href="{{ route('cpa.page', [$v['main_verticales'], $v['link']]) }}">
                                                    <span>{{ __('messages.review') }}</span>
                                                    <img loading="lazy"
                                                         src="{{asset('assets/images/icons/arrow-right-white.svg')}}"
                                                         alt="arrow">
                                                </a>
                                                <a target="_blank" class="btn--grey-with-icons" href="{{ $v['url'] }}">
                                                    <svg width="11" height="12" viewBox="0 0 11 12" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5.5001 0.600098C4.06793 0.600098 2.69442 1.16902 1.68172 2.18172C0.669025 3.19442 0.100098 4.56793 0.100098 6.0001C0.100098 7.43227 0.669025 8.80578 1.68172 9.81847C2.69442 10.8312 4.06793 11.4001 5.5001 11.4001C6.93227 11.4001 8.30578 10.8312 9.31847 9.81847C10.3312 8.80578 10.9001 7.43227 10.9001 6.0001C10.9001 4.56793 10.3312 3.19442 9.31847 2.18172C8.30578 1.16902 6.93227 0.600098 5.5001 0.600098V0.600098ZM0.766098 6.4081H2.2721C2.2961 6.9541 2.3723 7.4965 2.5001 8.0281H1.2041C0.962421 7.51863 0.814073 6.96994 0.766098 6.4081ZM5.9081 3.1681V1.3141C6.48631 1.53383 6.96143 1.96187 7.2401 2.5141C7.3631 2.7223 7.4717 2.9389 7.5641 3.1621L5.9081 3.1681ZM7.8401 3.9781C7.9793 4.5079 8.0621 5.0509 8.0861 5.5981H5.9081V3.9781H7.8401ZM5.0921 1.3141V3.1681H3.4361C3.52865 2.94472 3.63693 2.72817 3.7601 2.5201C4.03758 1.96561 4.51285 1.53529 5.0921 1.3141ZM5.0921 3.9781V5.5981H2.9201C2.9441 5.0509 3.0269 4.5079 3.1661 3.9781H5.0921ZM2.2721 5.5921H0.766098C0.814073 5.03025 0.962421 4.48157 1.2041 3.9721H2.5001C2.37205 4.50349 2.2957 5.04601 2.2721 5.5921ZM2.9201 6.4081H5.0921V8.0281H3.1661C3.02692 7.49834 2.94446 6.95529 2.9201 6.4081ZM5.0981 8.8081V10.6621C4.51989 10.4424 4.04477 10.0143 3.7661 9.4621C3.64293 9.25402 3.53466 9.03748 3.4421 8.8141L5.0981 8.8081ZM5.9081 10.6621V8.8381H7.5641C7.47154 9.06148 7.36327 9.27802 7.2401 9.4861C6.96143 10.0383 6.48631 10.4664 5.9081 10.6861V10.6621ZM5.9081 7.9981V6.3781H8.0801C8.05574 6.92529 7.97328 7.46834 7.8341 7.9981H5.9081ZM8.7341 6.3781H10.2401C10.1921 6.93994 10.0438 7.48863 9.8021 7.9981H8.5001C8.6261 7.4761 8.7023 6.9439 8.7281 6.4081L8.7341 6.3781ZM8.7341 5.5681C8.70662 5.03188 8.62827 4.49949 8.5001 3.9781H9.7961C10.0379 4.4881 10.1861 5.0365 10.2341 5.5981L8.7341 5.5681ZM9.3341 3.1681H8.2601C8.06577 2.62228 7.78411 2.11163 7.4261 1.6561C8.17273 1.99125 8.82127 2.51173 9.3101 3.1681H9.3341ZM3.5741 1.6561C3.21609 2.11163 2.93442 2.62228 2.7401 3.1681H1.6901C2.17893 2.51173 2.82747 1.99125 3.5741 1.6561ZM1.6841 8.8561H2.7401C2.93442 9.40192 3.21609 9.91256 3.5741 10.3681C2.8254 10.0279 2.17667 9.50107 1.6901 8.8381L1.6841 8.8561ZM7.4201 10.3681C7.77811 9.91256 8.05977 9.40192 8.2541 8.8561H9.3101C8.81828 9.50368 8.17 10.0157 7.4261 10.3441L7.4201 10.3681Z"
                                                            fill="#181A1C"/>
                                                    </svg>
                                                    Site
                                                </a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                                <a style="max-width: 200px; width: 100%;" href="{{ route('cpa') }}"
                                   class="btn--grey cpapage_info--block--link">{{ __('messages.show') }}</a>
                            </div>
                        @endforeach
                        <div style="margin-top: 20px">
                            {{ $cpa->links() }}
                        </div>
                        <nav class="filters__urls">
                            <ul class="filters__urls-list">
                                @foreach($seo_filters as $seo_item)
                                    <li class="filters__urls-item">
                                        <a class="filters__urls-link"
                                           href="{{ route('cpa.seo.catalog', $seo_item->filter_name) }}">#{{ $seo_item->filter_name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>

                </div>
                @if(!empty($seo) && empty($_GET['page']))
                    <aside class="articles_seo-text">
                        <div class="articles_seo-text--text">{!! $seo["{$locale}seo_text"] !!}</div>
                    </aside>
                @endif
            </section>
            <aside class="filter-aside">
                <form class="filter__form" method="GET">
                    <ul class="filter-aside_list">
                        @foreach($filters as $k => $i)
                            <li class="filter-aside_list-item">
                                <button type="button" class="filter-aside--btn">
                                    <p class="filter-aside--btn-text">{{ __("messages.{$k}") }}</p>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.9971 3.09753H11.0031V11.003H3.09761V12.997H11.0031V20.9025H12.9971V12.997H20.9026V11.003H12.9971V3.09753Z"
                                            fill="#181A1C"/>
                                    </svg>
                                </button>
                                <div class="filter-aside_list-item_wrapper">
                                    <ul class="filter-aside_list-item_wrap_list">
                                        @foreach (json_decode($i) as $v)
                                            <li class="filter-aside_list-item_wrap_list-item">
                                                <label class="filter-aside_label">
                                                    <input class="filter-aside--checkbox filter__change" type="radio"
                                                           name="{{ $k }}[]"
                                                           value="{{ $v }}">
                                                    <p class="filter-aside_label-text">#{{ $v }}</p>
                                                </label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                        @endforeach
                    </ul>

                    <button class="filter-aside--btn-show">Show Result (85)</button>
                </form>
                @if(!empty($banner))
                    <aside class="filter-aside--sticky">
                        <div class="filter-aside-banner">
                            <a target="_blank" href="{{ $banner->link }}">
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
                    <h3 class="title">{{ __('messages.cpa') }}</h3>
                @else
                    <h3 class="title">{{ $seo["{$locale}h1"] }}</h3>
                    <p class="articlespage-text">{{ $seo["{$locale}after_h1_text"] }}</p>
                @endempty
                <div class="cpapage_main-to-show_filter">
                    <div class="cpapage_main-to-show_filter_top">
                        <p class="cpapage_main-to-show_filter-text">Filters
                            @if(false)
                                <span>32</span>
                            @endif</p>
                        <button type="button" class="btn-rectangle btn--filter">
                            <div class="burger--btn_wrapper">
                                <div class="burger--btn_wrapper-line"></div>
                                <div class="burger--btn_wrapper-line"></div>
                                <div class="burger--btn_wrapper-line"></div>
                            </div>
                        </button>
                    </div>
                    @if(false)
                        <ul class="cpapage_main-to-show_filter__tags">
                            <button type="button" class="cpapage_main-to-show_filter__tags--reset">
                                <p>Remove filters</p>
                            </button>
                            <li class="cpapage_main-to-show_filter__tag">Remove filters
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect width="13" height="13" rx="6.5" fill="white"/>
                                    <path
                                        d="M8.61978 4.80585L8.19247 4.37854L6.49837 6.07264L4.80427 4.37854L4.37695 4.80585L6.07105 6.49995L4.37695 8.19405L4.80427 8.62137L6.49837 6.92727L8.19247 8.62137L8.61978 8.19405L6.92568 6.49995L8.61978 4.80585Z"
                                        fill="#181A1C"/>
                                </svg>
                            </li>
                        </ul>
                    @endif
                </div>
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
                    {{ !empty($seo) ? $seo["{$locale}h1"] : __('messages.cpa') }}
                </li>
            </ul>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        $('.filter__form').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                url: '{{ route('cpa.filter') }}',
                data: $(this).serialize(),
                type: 'GET'
            }).done(function (rsp) {
                $('.cpapage_info--block').fadeOut(300);
                if (rsp !== '') {
                    $('.cpa__filters').html(rsp);
                } else {
                    $('.cpa__filters').html(`
                        <div class="cpapage_info-header">
                            <h2 class="cpapage_info-title">Alas, we didn't find anything...</h2>
                        </div>
                        `)
                }
            });
        });
        $('.filter__change').on('change', function () {
            $('.filter__form').submit();
        })
    </script>
@endsection
