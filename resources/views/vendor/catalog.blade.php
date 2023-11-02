@extends('layouts.main')

@section('content')
    <section class="breadcrambs top">
        <div class="container">
            <ul class="breadcrambs_list">
                <li class="breadcrambs_list-item">
                    <a href="{{ route('index') }}">Homepage</a>
                </li>
                <li class="breadcrambs_list-item">
                    <a href="{{ route('ad') }}">{{ __('messages.ad') }}</a>
                </li>
                <li class="breadcrambs_list-item">
                    {{ $catalog }}
                </li>
            </ul>
        </div>
    </section>

    <section class="ad-net-page cpapage cpa-catalog-page">
        <div class="container">
            <section class="cpapage_main">
                <div class="cpapage_main-to-hide" style="margin-block: 25px">
                    <h1 class="title">{{ $catalog }}</h1>
                    {{--                <p style="margin-bottom: 20px" class="articlespage-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellen.</p>--}}
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
                        <ul class="cpapage_info-list ad__filters">
                            @foreach($ad->sortBy('listing_rating') as $k => $i)
                                <li class="cpapage_info--item">
                                    <div class="cpapage_info--item_main">
                                        <div class="cpapage_info--item_main_top">
                                            <div class="cpapage_info--item_main_top-icon">
                                                <img loading="lazy" src="{{ asset('storage/'. $i['logo']) }}"
                                                     alt="logo">
                                            </div>
                                            <ul class="cpapage_info--item_main_top-list">
                                                @if(!empty($i['advertising_formats']))
                                                    @foreach($i['advertising_formats'] as $tag)
                                                        <li class="article--card_info_tags-list-item mobhide">
                                                            <p class="article--card_info_tags-list-item--link">
                                                                #{{ $tag }}</p>
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                        <p class="cpapage_info--item_main-text">{{ $i["{$locale}prev_text"] }}</p>
                                    </div>
                                    <div class="cpapage_info--item-line"></div>
                                    <div class="cpapage_info--item_buttons">
                                        <a class="btn--blue header_buttons-blue-btn"
                                           href="{{ route('ad.page', [$i['main_advertising_formats'], $i['link']]) }}">
                                            <span>{{ __('messages.review') }}</span>
                                            <img loading="lazy"
                                                 src="{{asset('assets/images/icons/arrow-right-white.svg')}}"
                                                 alt="arrow">
                                        </a>
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
                                        <a class="link--blue-sphere" href="{{ empty($i['button_url']) ? $i['url'] : $i['button_url'] }}">
                                            <img loading="lazy" src="{{asset('assets/images/icons/sphere.svg')}}"
                                                 alt="sphere">
                                            <span>Site</span>
                                        </a>

                                        <a class="btn--grey-with-icons mobile" href="{{ empty($i['button_url']) ? $i['url'] : $i['button_url'] }}">
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
                            <div class="pagination">
                                {{ $ad->onEachSide(1)->links() }}
                            </div>
                            <nav class="filters__urls">
                                <ul class="filters__urls-list">
                                    @foreach($seo_filters as $seo_item)
                                        <li class="filters__urls-item">
                                            <a class="filters__urls-link"
                                               href="{{ route('ad.seo.catalog',$seo_item->filter_name) }}">#{{ $seo_item->filter_name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </nav>
                        </ul>
                    </div>
                </div>

                {{--            <aside class="articles_seo-text">--}}
                {{--                --}}
                {{--                <p class="articles_seo-text--text">--}}
                {{--                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.--}}
                {{--                    <br>--}}
                {{--                    <br>--}}
                {{--                    Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.--}}
                {{--                    <br>--}}
                {{--                    <br>--}}
                {{--                    Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.--}}
                {{--                    <br>--}}
                {{--                    Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit </p>--}}
                {{--                    <button type="button" class="link--black-rotateble-arrows readmore--btn">--}}
                {{--                        <span>read more</span>--}}
                {{--                        <div class="link--black-rotateble-arrows-group">--}}
                {{--                            @for ($a=0; $a<3; $a++)--}}
                {{--                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.37879 4.5H3.00011V1.5H13.5001V12H10.5001V6.62132L4.06077 13.0607L1.93945 10.9393L8.37879 4.5Z" fill="#272C31"/></svg>--}}
                {{--                            @endfor--}}
                {{--                        </div>--}}
                {{--                    </button>--}}
                {{--            </aside>--}}
            </section>

            <aside class="filter-aside">
                <form class="filter__form" action="/" method="GET">
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
                    <aside class="filter-aside">
                        <div class="filter-aside-banner sticky">
                            <a target="_blank" href="{{ $banner->link }}">
                                @if($banner->type == 'image')
                                    <img loading="lazy" width="100%" src="{{asset('storage/'. $banner->file)}}"
                                         alt="bunner">
                                @else
                                    <video width="100%" src="{{ asset('storage/'. $banner->file) }}" autoplay loop
                                           muted></video>
                                @endif
                            </a>
                        </div>
                    </aside>
                @endif
            </aside>

            <div class="cpapage_main-to-show">
                <h3 class="title">banners</h3>
                {{--                <p class="articlespage-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo--}}
                {{--                    ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,--}}
                {{--                    nascetur ridiculus mus. Donec quam felis, ultricies nec, pellen.</p>--}}
                <div class="cpapage_main-to-show_filter">
                    <div class="cpapage_main-to-show_filter_top">
                        <p class="cpapage_main-to-show_filter-text">Filters<span>32</span></p>
                        <button type="button" class="btn-rectangle btn--filter">
                            <div class="burger--btn_wrapper">
                                <div class="burger--btn_wrapper-line"></div>
                                <div class="burger--btn_wrapper-line"></div>
                                <div class="burger--btn_wrapper-line"></div>
                            </div>
                        </button>
                    </div>
                    <ul class="cpapage_main-to-show_filter__tags">
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
                    <a href="{{ route('ad') }}">{{ __('messages.ad') }}</a>
                </li>
                <li class="breadcrambs_list-item">
                    {{ $catalog }}
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
                url: '{{ route('ad.catalog.filter', $catalog) }}',
                data: $(this).serialize(),
                type: 'GET'
            }).done(function (rsp) {
                if (rsp !== '') {
                    $('.ad__filters').html(rsp);
                } else {
                    $('.ad__filters').html(`
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
