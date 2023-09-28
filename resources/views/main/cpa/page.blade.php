@extends('layouts.main')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/fonts-style.css') }}">
@endsection
@section('seo')
    <title>{{ $cpa["{$locale}title"] }}</title>
    <meta name="description" content="{{ $cpa["{$locale}description"] }}">
    <meta name="keywords" content="{{ $cpa["{$locale}keywords"] }}"/>
    <meta property="og:title" content="{{ $cpa["{$locale}og_title"] }}"/>
    <meta property="og:description" content="{{ $cpa["{$locale}og_description"] }}"/>
    <meta property="og:url" content="{{ url()->current() }}"/>
@endsection
@section('content')
    <section class="breadcrambs top">
        <div class="container">
            <ul class="breadcrambs_list">
                <li class="breadcrambs_list-item">
                    <a href="{{ route('index') }}">Homepage</a>
                </li>
                <li class="breadcrambs_list-item">
                    <a href="{{ route('cpa') }}">{{ __('messages.cpa') }}</a>
                </li>
                <li class="breadcrambs_list-item">
                    {{ $cpa["{$locale}name"] }}
                </li>
            </ul>
        </div>
    </section>
    <section class="videopage articlepage">
        <div class="container">
            <div class="articlepage_top">
                <h1 class="title">{{ $cpa["{$locale}name"] }}</h1>
                <div class="videopage_main-underimage_autor to-show">
                    <div class="videopage_main-underimage_autor-image">
                        <img loading="lazy" src="{{asset('assets/images/cpa_logo.webp')}}" alt="autor">
                    </div>
                    <p style="font-size: 14px;" class="videopage_main-underimage_autor-link">by <a>AFFJOURNAL</a></p>
                </div>
                <div class="articlepage_bot">
                    <div class="articlepage_bot_item">
                        <p class="articlepage--date">Date written:<span
                                class="articlepage--date-text-value">{{ date('d/m/Y', strtotime($cpa['created_at'])) }}</span>
                        </p>
                    </div>
                    <div class="articlepage_bot_item">
                        <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.9987 1.79167C8.07129 1.7881 9.12312 2.08729 10.0333 2.65484C10.9434 3.22239 11.6749 4.03526 12.1437 5C11.6755 5.96517 10.9441 6.77843 10.0338 7.34606C9.12356 7.91368 8.07144 8.21259 6.9987 8.20833C5.92596 8.21259 4.87384 7.91368 3.96357 7.34606C3.0533 6.77843 2.32192 5.96517 1.8537 5C2.32247 4.03526 3.05398 3.22239 3.96413 2.65484C4.87427 2.08729 5.9261 1.7881 6.9987 1.79167ZM6.9987 0.625C4.08203 0.625 1.5912 2.43917 0.582031 5C1.5912 7.56083 4.08203 9.375 6.9987 9.375C9.91536 9.375 12.4062 7.56083 13.4154 5C12.4062 2.43917 9.91536 0.625 6.9987 0.625ZM6.9987 3.54167C7.38547 3.54167 7.7564 3.69531 8.02989 3.9688C8.30339 4.24229 8.45703 4.61323 8.45703 5C8.45703 5.38677 8.30339 5.75771 8.02989 6.0312C7.7564 6.30469 7.38547 6.45833 6.9987 6.45833C6.61192 6.45833 6.24099 6.30469 5.9675 6.0312C5.69401 5.75771 5.54036 5.38677 5.54036 5C5.54036 4.61323 5.69401 4.24229 5.9675 3.9688C6.24099 3.69531 6.61192 3.54167 6.9987 3.54167ZM6.9987 2.375C5.55203 2.375 4.3737 3.55333 4.3737 5C4.3737 6.44667 5.55203 7.625 6.9987 7.625C8.44536 7.625 9.6237 6.44667 9.6237 5C9.6237 3.55333 8.44536 2.375 6.9987 2.375Z"
                                fill="#181A1C"/>
                        </svg>
                        <span class="articlepage--date-text-value">{{ $cpa['views'] }}</span>
                    </div>
                </div>
            </div>
            <div class="videopage_wrapper">
                <article class="videopage_main">
                    <div class="videopage_main--image">
                        <img loading="lazy" src="{{ asset('storage/'. $cpa["{$locale}image"]) }}" alt="banner">
                    </div>
                    <div class="videopage_main-underimage">
                        <div class="videopage_main-underimage_autor to-hide">
                            <div class="videopage_main-underimage_autor-image">
                                <img loading="lazy" src="{{ asset('assets/images/cpa_logo.webp') }}" alt="autor">
                            </div>
                            <p class="videopage_main-underimage_autor-link">by <a>AFFJOURNAL</a></p>
                        </div>
                        <ul class="cpapage_info--item_main_top-list cpapage_info--item_main_top-list-articlepage">
                            @if(!empty($cpa['verticales']))
                                @foreach($cpa['verticales'] as $tag)
                                    <li class="article--card_info_tags-list-item mobhide">
                                        <p class="article--card_info_tags-list-item--link">#{{ $tag }}</p>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    <div class="videopage_main--text main__article"
                         style="margin-bottom: 43px">{!! $cpa["{$locale}before_main_text"] !!}</div>
                    <div class="cpaartpage_card">
                        <ul class="cpaartpage_card_top">
                            @if(!empty($cpa['date_of_creation']))
                                <li class="cpaartpage_card_top--item">
                                    <div class="cpaartpage_card_top--item_top">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M8.71682 4.75578L1.83713 4.75578L1.83713 0.918579L15.2673 0.918579L15.2673 14.3488H11.4301L11.4301 7.4691L3.19378 15.7054L0.480469 12.9921L8.71682 4.75578Z"
                                                  fill="#181A1C"/>
                                        </svg>
                                        <p class="cpaartpage_card_top--item_top-text">{{ __('messages.cpa.year') }}:</p>
                                    </div>
                                    <p class="cpaartpage_card_top--item-text">{{ $cpa['date_of_creation'] }}</p>
                                </li>
                            @endif
                            @if(!empty($cpa['inhaus_offers']))
                                <li class="cpaartpage_card_top--item">
                                    <div class="cpaartpage_card_top--item_top">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M8.71682 4.75578L1.83713 4.75578L1.83713 0.918579L15.2673 0.918579L15.2673 14.3488H11.4301L11.4301 7.4691L3.19378 15.7054L0.480469 12.9921L8.71682 4.75578Z"
                                                  fill="#181A1C"/>
                                        </svg>
                                        <p class="cpaartpage_card_top--item_top-text">{{ __('messages.cpa.inhouse') }}
                                            :</p>
                                    </div>
                                    <p class="cpaartpage_card_top--item-text">{{ $cpa['inhaus_offers'] }}</p>
                                </li>
                            @endif
                            @if(!empty($cpa['payment_schedule']))
                                <li class="cpaartpage_card_top--item">
                                    <div class="cpaartpage_card_top--item_top">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M8.71682 4.75578L1.83713 4.75578L1.83713 0.918579L15.2673 0.918579L15.2673 14.3488H11.4301L11.4301 7.4691L3.19378 15.7054L0.480469 12.9921L8.71682 4.75578Z"
                                                  fill="#181A1C"/>
                                        </svg>
                                        <p class="cpaartpage_card_top--item_top-text">{{ __('messages.cpa.payment.method') }}
                                            :</p>
                                    </div>
                                    <p class="cpaartpage_card_top--item-text">{{ $cpa['payment_schedule'] }}</p>
                                </li>
                            @endif
                            @if(!empty($cpa['geography_of_offers']))
                                <li class="cpaartpage_card_top--item">
                                    <div class="cpaartpage_card_top--item_top">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M8.71682 4.75578L1.83713 4.75578L1.83713 0.918579L15.2673 0.918579L15.2673 14.3488H11.4301L11.4301 7.4691L3.19378 15.7054L0.480469 12.9921L8.71682 4.75578Z"
                                                  fill="#181A1C"/>
                                        </svg>
                                        <p class="cpaartpage_card_top--item_top-text">{{ __('messages.cpa.gep') }}:</p>
                                    </div>
                                    <p class="cpaartpage_card_top--item-text">{{ $cpa['geography_of_offers'] }}</p>
                                </li>
                            @endif
                            @if(!empty($cpa['minimum_withdrawal_amount']))
                                <li class="cpaartpage_card_top--item">
                                    <div class="cpaartpage_card_top--item_top">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M8.71682 4.75578L1.83713 4.75578L1.83713 0.918579L15.2673 0.918579L15.2673 14.3488H11.4301L11.4301 7.4691L3.19378 15.7054L0.480469 12.9921L8.71682 4.75578Z"
                                                  fill="#181A1C"/>
                                        </svg>
                                        <p class="cpaartpage_card_top--item_top-text">{{ __('messages.cpa.minimum') }}
                                            :</p>
                                    </div>
                                    <p class="cpaartpage_card_top--item-text">{{ $cpa['minimum_withdrawal_amount'] }}</p>
                                </li>
                            @endif
                            @if(!empty($cpa['referral_program']))
                                <li class="cpaartpage_card_top--item">
                                    <div class="cpaartpage_card_top--item_top">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M8.71682 4.75578L1.83713 4.75578L1.83713 0.918579L15.2673 0.918579L15.2673 14.3488H11.4301L11.4301 7.4691L3.19378 15.7054L0.480469 12.9921L8.71682 4.75578Z"
                                                  fill="#181A1C"/>
                                        </svg>
                                        <p class="cpaartpage_card_top--item_top-text">{{ __('messages.cpa.affiliate') }}
                                            :</p>
                                    </div>
                                    <p class="cpaartpage_card_top--item-text">{{ $cpa['referral_program'] }}</p>
                                </li>
                            @endif
                            @if(!empty($cpa['themes_of_offers']))
                                <li class="cpaartpage_card_top--item">
                                    <div class="cpaartpage_card_top--item_top">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M8.71682 4.75578L1.83713 4.75578L1.83713 0.918579L15.2673 0.918579L15.2673 14.3488H11.4301L11.4301 7.4691L3.19378 15.7054L0.480469 12.9921L8.71682 4.75578Z"
                                                  fill="#181A1C"/>
                                        </svg>
                                        <p class="cpaartpage_card_top--item_top-text">{{ __('messages.cpa.verticals') }}
                                            :</p>
                                    </div>
                                    <p class="cpaartpage_card_top--item-text">{{ $cpa['themes_of_offers'] }}</p>
                                </li>
                            @endif
                            @if(!empty($cpa['payment_methods']))
                                <li class="cpaartpage_card_top--item">
                                    <div class="cpaartpage_card_top--item_top">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M8.71682 4.75578L1.83713 4.75578L1.83713 0.918579L15.2673 0.918579L15.2673 14.3488H11.4301L11.4301 7.4691L3.19378 15.7054L0.480469 12.9921L8.71682 4.75578Z"
                                                  fill="#181A1C"/>
                                        </svg>
                                        <p class="cpaartpage_card_top--item_top-text">{{ __('messages.cpa.payment') }}
                                            :</p>
                                    </div>
                                    <p class="cpaartpage_card_top--item-text">{{ $cpa['payment_methods'] }}</p>
                                </li>
                            @endif
                            @if(!empty($cpa['tools']))
                                <li class="cpaartpage_card_top--item">
                                    <div class="cpaartpage_card_top--item_top">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M8.71682 4.75578L1.83713 4.75578L1.83713 0.918579L15.2673 0.918579L15.2673 14.3488H11.4301L11.4301 7.4691L3.19378 15.7054L0.480469 12.9921L8.71682 4.75578Z"
                                                  fill="#181A1C"/>
                                        </svg>
                                        <p class="cpaartpage_card_top--item_top-text">{{ __('messages.cpa.tools') }}
                                            :</p>
                                    </div>
                                    <p class="cpaartpage_card_top--item-text">{{ $cpa['tools'] }}</p>
                                </li>
                            @endif
                        </ul>
                        <div class="cpaartpage_card_bot">
                            <a href="{{ $cpa['manager_link'] }}" target="_blank"
                               class="articlepage--review-integration_autor">
                                <div class="videopage_main-underimage_autor-image">
                                    <img loading="lazy" src="{{asset('storage/' . $cpa['manager_image'])}}" alt="autor">
                                </div>
                                <div class="articlepage--review-integration_autor-text-wrapp">
                                    <p class="articlepage--review-integration_autor-text-wrapp-name">{{ $cpa['manager_name'] }}</p>
                                    <p class="articlepage--review-integration_autor-text-wrapp-company">{{ $cpa['manager_position'] }}</p>
                                </div>
                            </a>
                            <div class="cpaartpage_card_bot--line"></div>
                            <div class="cpaartpage_card_bot_social">
                                @if(!empty($cpa['facebook']))
                                    <a class="cpaartpage_card_bot_social-link" target="_blank"
                                       href="{{ $cpa['facebook'] }}">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.5" y="0.5" width="39" height="39" stroke="white"/>
                                            <path
                                                d="M20.9588 21.565H23.4142L23.8763 18.4842H20.9588V16.4912C20.9588 15.6483 21.3665 14.8283 22.6732 14.8283H24V12.2082C23.2217 12.0808 22.4352 12.0113 21.6468 12C19.2481 12 17.6726 13.4738 17.6726 16.1421V18.4842H15V21.5612H17.6726V29H20.955L20.9588 21.565Z"
                                                fill="white"/>
                                        </svg>
                                    </a>
                                @endif
                                @if(!empty($cpa['instagram']))
                                    <a class="cpaartpage_card_bot_social-link" target="_blank"
                                       href="{{ $cpa['instagram'] }}">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.5" y="0.5" width="39" height="39" stroke="white"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M19.998 11.0001C22.442 11.0001 22.7483 11.0106 23.7091 11.0542C24.4556 11.0693 25.1942 11.2109 25.8934 11.473C26.4914 11.7038 27.0344 12.0572 27.4877 12.5104C27.9409 12.9636 28.2943 13.5067 28.5251 14.1047C28.7871 14.8039 28.9288 15.5425 28.9439 16.289C28.9874 17.2498 28.998 17.5561 28.998 20.0001C28.998 22.4441 28.9874 22.7504 28.9439 23.7112C28.9288 24.4577 28.7871 25.1963 28.5251 25.8955C28.2943 26.4934 27.9409 27.0365 27.4877 27.4897C27.0344 27.943 26.4914 28.2964 25.8934 28.5271C25.1942 28.7892 24.4556 28.9308 23.7091 28.946C22.7483 28.9895 22.442 29 19.998 29C17.554 29 17.2477 28.9895 16.2869 28.946C15.5404 28.9308 14.8018 28.7892 14.1026 28.5271C13.5046 28.2964 12.9616 27.943 12.5083 27.4897C12.0551 27.0365 11.7017 26.4934 11.4709 25.8955C11.2089 25.1963 11.0672 24.4577 11.0521 23.7112C11.0086 22.7504 10.998 22.4441 10.998 20.0001C10.998 17.5561 11.0086 17.2498 11.0521 16.289C11.0672 15.5425 11.2089 14.8039 11.4709 14.1047C11.7017 13.5067 12.0551 12.9636 12.5083 12.5104C12.9616 12.0572 13.5046 11.7038 14.1026 11.473C14.8018 11.2109 15.5404 11.0693 16.2869 11.0542C17.2477 11.0106 17.554 11.0001 19.998 11.0001ZM23.634 12.674C22.6852 12.6305 22.4015 12.6215 19.998 12.6215C17.5945 12.6215 17.3108 12.6305 16.362 12.674C15.7908 12.6806 15.225 12.7857 14.6896 12.9848C14.3016 13.1342 13.9493 13.3634 13.6553 13.6573C13.3613 13.9513 13.1322 14.3037 12.9827 14.6917C12.7836 15.2271 12.6785 15.7929 12.6719 16.3641C12.6284 17.3129 12.6194 17.5966 12.6194 20.0001C12.6194 22.4036 12.6284 22.6873 12.6719 23.6361C12.6785 24.2073 12.7836 24.773 12.9827 25.3085C13.1322 25.6965 13.3613 26.0488 13.6553 26.3428C13.9493 26.6368 14.3016 26.8659 14.6896 27.0154C15.225 27.2144 15.7908 27.3196 16.362 27.3261C17.3108 27.3697 17.5945 27.3787 19.998 27.3787C22.4015 27.3787 22.6852 27.3697 23.634 27.3261C24.2052 27.3196 24.771 27.2144 25.3064 27.0154C25.6944 26.8659 26.0467 26.6368 26.3407 26.3428C26.6347 26.0488 26.8638 25.6965 27.0133 25.3085C27.2124 24.773 27.3175 24.2073 27.3241 23.6361C27.3676 22.6873 27.3766 22.4036 27.3766 20.0001C27.3766 17.5966 27.3676 17.3129 27.3241 16.3641C27.3175 15.7929 27.2124 15.2271 27.0133 14.6917C26.8638 14.3037 26.6347 13.9513 26.3407 13.6573C26.0467 13.3634 25.6944 13.1342 25.3064 12.9848C24.771 12.7857 24.2052 12.6806 23.634 12.674ZM19.998 22.9996C20.5918 22.9996 21.1723 22.8235 21.6661 22.4935C22.1599 22.1636 22.5447 21.6947 22.7719 21.1461C22.9992 20.5974 23.0586 19.9937 22.9428 19.4113C22.8269 18.8289 22.541 18.2939 22.1211 17.874C21.7012 17.4541 21.1662 17.1681 20.5838 17.0523C20.0013 16.9364 19.3976 16.9959 18.849 17.2231C18.3004 17.4504 17.8314 17.8352 17.5015 18.329C17.1716 18.8227 16.9955 19.4032 16.9955 19.9971C16.9955 20.7934 17.3118 21.5571 17.8749 22.1202C18.438 22.6832 19.2017 22.9996 19.998 22.9996ZM19.998 15.3777C20.9122 15.3777 21.8059 15.6488 22.566 16.1568C23.3262 16.6647 23.9186 17.3866 24.2685 18.2312C24.6183 19.0758 24.7099 20.0052 24.5315 20.9018C24.3532 21.7985 23.9129 22.6221 23.2665 23.2686C22.62 23.915 21.7964 24.3552 20.8998 24.5336C20.0031 24.7119 19.0737 24.6204 18.2291 24.2705C17.3845 23.9207 16.6626 23.3282 16.1547 22.5681C15.6468 21.808 15.3757 20.9143 15.3757 20.0001C15.3757 18.7742 15.8627 17.5985 16.7295 16.7316C17.5964 15.8647 18.7721 15.3777 19.998 15.3777ZM25.8829 15.1961C25.8829 15.4099 25.8195 15.6189 25.7007 15.7966C25.5819 15.9744 25.4131 16.1129 25.2156 16.1947C25.0181 16.2765 24.8008 16.2979 24.5911 16.2562C24.3814 16.2145 24.1888 16.1116 24.0377 15.9604C23.8865 15.8092 23.7836 15.6166 23.7419 15.407C23.7002 15.1973 23.7216 14.98 23.8034 14.7825C23.8852 14.5849 24.0237 14.4161 24.2015 14.2974C24.3792 14.1786 24.5882 14.1152 24.802 14.1152C25.0887 14.1152 25.3636 14.2291 25.5663 14.4318C25.769 14.6345 25.8829 14.9094 25.8829 15.1961Z"
                                                  fill="white"/>
                                        </svg>
                                    </a>
                                @endif
                                @if(!empty($cpa['linkedin']))
                                    <a class="cpaartpage_card_bot_social-link" target="_blank"
                                       href="{{ $cpa['linkedin'] }}">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.5" y="0.5" width="39" height="39" stroke="white"/>
                                            <path d="M12.8984 16.2614H16.2274V26.9999H12.8984V16.2614Z" fill="white"/>
                                            <path
                                                d="M24.7105 16.0512C23.4218 15.9432 22.2411 16.6948 21.596 17.769V16.2657H18.375V26.997H21.704V21.6307C21.704 20.234 22.0251 18.8387 23.7472 18.8387C25.4694 18.8387 25.465 20.4441 25.465 21.7372V26.997H28.794L28.686 21.1972C28.686 18.3017 28.146 16.0512 24.7105 16.0512Z"
                                                fill="white"/>
                                            <path
                                                d="M14.5085 14.7567C15.5757 14.7567 16.4408 13.8916 16.4408 12.8244C16.4408 11.7572 15.5757 10.8921 14.5085 10.8921C13.4413 10.8921 12.5762 11.7572 12.5762 12.8244C12.5762 13.8916 13.4413 14.7567 14.5085 14.7567Z"
                                                fill="white"/>
                                        </svg>
                                    </a>
                                @endif
                            </div>
                            <div class="cpaartpage_card_bot--line"></div>
                            <div class="cpaartpage_card_bot--link_wrapper">
                                <a target="_blank" class="btn--blue header_buttons-blue-btn cpaartpage_card_bot--link"
                                   href="{{ $cpa['url'] }}">
                                    <span>website</span>
                                    <img loading="lazy" src="{{asset('assets/images/icons/arrow-right-white.svg')}}"
                                         alt="arrow">
                                </a>
                                <div class="cpaartpage_card_bot--line"></div>
                                <a class="btn--blue header_buttons-blue-btn cpaartpage_card_bot--link"
                                   href="{{ $cpa['forum_link'] }}">
                                    <span>Forum</span>
                                    <img loading="lazy" src="{{asset('assets/images/icons/arrow-right-white.svg')}}"
                                         alt="arrow">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="videopage_main--text main__article"
                         style="margin-bottom: 43px">{!! $cpa["{$locale}main_text"] !!}</div>
                    <div class="videopage_main-underimage change">
                        <div class="videopage_main-underimage_autor to-hide">
                            <div class="videopage_main-underimage_autor-image">
                                <img loading="lazy" src="{{asset('assets/images/cpa_logo.webp')}}" alt="autor">
                            </div>
                            <p class="videopage_main-underimage_autor-link">by <a>AFFJOURNAL</a></p>
                        </div>
                        <ul class="cpapage_info--item_main_top-list cpapage_info--item_main_top-list-articlepage">
                            @if(!empty($cpa['verticales']))
                                @foreach($cpa['verticales'] as $tag)
                                    <li class="article--card_info_tags-list-item mobhide">
                                        <p class="article--card_info_tags-list-item--link">#{{ $tag }}</p>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    <div class="articlepage--comments">
                        <h2 class="videopage--comments-title">Reviews of .... <span>({{ !empty($cpa->comments) ? $cpa->comments->count() : '0' }})</span>
                        </h2>
                        <div class="articlepage--comments-none-editorial-opinion">
                            <div class="articlepage--review-integration_autor">
                                <div class="videopage_main-underimage_autor-image">
                                    <img loading="lazy" src="{{asset('assets/images/cpa_logo.webp')}}" alt="autor">
                                </div>
                                <div class="articlepage--review-integration_autor-text-wrapp">
                                    <p class="articlepage--review-integration_autor-text-wrapp-name">{{ __('messages.opinion') }}</p>
                                </div>
                            </div>
                            <p class="articlepage--comments-none-editorial-opinion-text">{{ $cpa["{$locale}editorial_opinion"] }}</p>
                        </div>
                        <div class="articlepage--comments_main">
                            @empty($cpa->comments)
                                <p class="articlepage--comments-none">Be the first to comment</p>
                            @else
                                <ul class="articlepage--comments_main_list">
                                    @foreach($cpa->comments as $comment)
                                        <li class="articlepage--comments_main_list-item">
                                            <div class="articlepage--comments_main_list-item_top">
                                                <div class="articlepage--review-integration_autor">
                                                    <div class="videopage_main-underimage_autor-image">
                                                        @empty($comment->author->photo)
                                                            <img loading="lazy"
                                                                 src="{{asset('assets/images/card-pict.jpg')}}"
                                                                 alt="autor">
                                                        @else
                                                            <img loading="lazy"
                                                                 src="{{asset('storage/'.$comment->author->photo)}}"
                                                                 alt="autor">
                                                        @endempty
                                                    </div>
                                                    <div class="articlepage--review-integration_autor-text-wrapp">
                                                        <p class="articlepage--review-integration_autor-text-wrapp-name">{{ $comment->author->name }}</p>
                                                        <p class="articlepage--review-integration_autor-text-wrapp-company">{{ date('d.m.Y', strtotime($comment->created_at)) }}</p>
                                                    </div>
                                                </div>
                                                <div class="articlepage--comments_main_list-item_top_rating-group">
                                                    <div
                                                        class="articlepage--comments_main_list-item_top_rating-group-item">
                                                        <p class="articlepage--comments_main_list-item_top_rating-group-item-name">
                                                            Support</p>
                                                        <div
                                                            class="articlepage--comments_main_list-item_top_rating-group-item-stars">
                                                            <div class="rating-mini">
                                                                @for($i = 1; $i <= 5; $i++)
                                                                    @if($i <= $comment->support)
                                                                        <span class="active"></span>
                                                                    @else
                                                                        <span></span>
                                                                    @endif
                                                                @endfor
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="articlepage--comments_main_list-item_top_rating-group-item">
                                                        <p class="articlepage--comments_main_list-item_top_rating-group-item-name">
                                                            Payments</p>
                                                        <div
                                                            class="articlepage--comments_main_list-item_top_rating-group-item-stars">
                                                            <div class="rating-mini">
                                                                @for($i = 1; $i <= 5; $i++)
                                                                    @if($i <= $comment->payments)
                                                                        <span class="active"></span>
                                                                    @else
                                                                        <span></span>
                                                                    @endif
                                                                @endfor
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="articlepage--comments_main_list-item_top_rating-group-item">
                                                        <p class="articlepage--comments_main_list-item_top_rating-group-item-name">
                                                            offers</p>
                                                        <div
                                                            class="articlepage--comments_main_list-item_top_rating-group-item-stars">
                                                            <div class="rating-mini">
                                                                @for($i = 1; $i <= 5; $i++)
                                                                    @if($i <= $comment->offers)
                                                                        <span class="active"></span>
                                                                    @else
                                                                        <span></span>
                                                                    @endif
                                                                @endfor
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="articlepage--comments_main_list-item_top_rating-group-item">
                                                        <p class="articlepage--comments_main_list-item_top_rating-group-item-name">
                                                            Betting</p>
                                                        <div
                                                            class="articlepage--comments_main_list-item_top_rating-group-item-stars">
                                                            <div class="rating-mini">
                                                                @for($i = 1; $i <= 5; $i++)
                                                                    @if($i <= $comment->betting)
                                                                        <span class="active"></span>
                                                                    @else
                                                                        <span></span>
                                                                    @endif
                                                                @endfor
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="articlepage--comments_main_list-item-text">{{ $comment->text }}</p>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                        <div>
                            <div class="cpaartpage_aside_rating to-show">
                                <p class="cpaartpage_aside_rating-title">{{ __('messages.rating') }}</p>
                                <div class="cpaartpage_aside_rating_group">
                                    <div class="cpaartpage_aside_rating_group-item">
                                        <div class="articlepage--comments_main_list-item_top_rating-group-item">
                                            <p class="articlepage--comments_main_list-item_top_rating-group-item-name">{{ __('messages.support') }}</p>
                                            <div
                                                class="articlepage--comments_main_list-item_top_rating-group-item-stars">
                                                @for ($i=0; $i<5; $i++)
                                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="{{ $i < $cpa['rating_support'] ? '1' : '0.2' }}"
                                                              d="M8.50065 12.6722L13.3932 15.6252L12.0948 10.0597L16.4173 6.31516L10.7252 5.83225L8.50065 0.583496L6.27607 5.83225L0.583984 6.31516L4.90648 10.0597L3.60815 15.6252L8.50065 12.6722Z"
                                                              fill="#014EFF"/>
                                                    </svg>
                                                @endfor
                                            </div>
                                        </div>
                                        <div class="cpaartpage_aside_rating_group-item-num">
                                            <span>{{ $cpa['rating_support'] }}</span>/5
                                        </div>
                                    </div>
                                    <div class="cpaartpage_aside_rating_group-item">
                                        <div class="articlepage--comments_main_list-item_top_rating-group-item">
                                            <p class="articlepage--comments_main_list-item_top_rating-group-item-name">{{ __('messages.payouts') }}</p>
                                            <div
                                                class="articlepage--comments_main_list-item_top_rating-group-item-stars">
                                                @for ($i=0; $i<5; $i++)
                                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="{{ $i < $cpa['rating_payments'] ? '1' : '0.2' }}"
                                                              d="M8.50065 12.6722L13.3932 15.6252L12.0948 10.0597L16.4173 6.31516L10.7252 5.83225L8.50065 0.583496L6.27607 5.83225L0.583984 6.31516L4.90648 10.0597L3.60815 15.6252L8.50065 12.6722Z"
                                                              fill="#014EFF"/>
                                                    </svg>
                                                @endfor
                                            </div>
                                        </div>
                                        <div class="cpaartpage_aside_rating_group-item-num">
                                            <span>{{ $cpa['rating_payments'] }}</span>/5
                                        </div>
                                    </div>
                                    <div class="cpaartpage_aside_rating_group-item">
                                        <div class="articlepage--comments_main_list-item_top_rating-group-item">
                                            <p class="articlepage--comments_main_list-item_top_rating-group-item-name">{{ __('messages.offers') }}</p>
                                            <div
                                                class="articlepage--comments_main_list-item_top_rating-group-item-stars">
                                                @for ($i=0; $i<5; $i++)
                                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="{{ $i < $cpa['rating_offers'] ? '1' : '0.2' }}"
                                                              d="M8.50065 12.6722L13.3932 15.6252L12.0948 10.0597L16.4173 6.31516L10.7252 5.83225L8.50065 0.583496L6.27607 5.83225L0.583984 6.31516L4.90648 10.0597L3.60815 15.6252L8.50065 12.6722Z"
                                                              fill="#014EFF"/>
                                                    </svg>
                                                @endfor
                                            </div>
                                        </div>
                                        <div class="cpaartpage_aside_rating_group-item-num">
                                            <span>{{ $cpa['rating_offers'] }}</span>/5
                                        </div>
                                    </div>
                                    <div class="cpaartpage_aside_rating_group-item">
                                        <div class="articlepage--comments_main_list-item_top_rating-group-item">
                                            <p class="articlepage--comments_main_list-item_top_rating-group-item-name">{{ __('messages.rates') }}</p>
                                            <div
                                                class="articlepage--comments_main_list-item_top_rating-group-item-stars">
                                                @for ($i=0; $i<5; $i++)
                                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="{{ $i < $cpa['rating_betting'] ? '1' : '0.2' }}"
                                                              d="M8.50065 12.6722L13.3932 15.6252L12.0948 10.0597L16.4173 6.31516L10.7252 5.83225L8.50065 0.583496L6.27607 5.83225L0.583984 6.31516L4.90648 10.0597L3.60815 15.6252L8.50065 12.6722Z"
                                                              fill="#014EFF"/>
                                                    </svg>
                                                @endfor
                                            </div>
                                        </div>
                                        <div class="cpaartpage_aside_rating_group-item-num">
                                            <span>{{ $cpa['rating_betting'] }}</span>/5
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="videopage--comments-title">Leave a Review</h2>
                            <div class="articlepage--comments_main">
                                @auth()
                                    <p id="comment__text" style="font-size: 16px; color: #00a87d"></p>
                                    <form id="comment_send" class="articlepage--comments_main-form">
                                        @csrf
                                        <div class="articlepage--comments_main_list-item_top_rating-group">
                                            <div class="articlepage--comments_main_list-item_top_rating-group-item">
                                                <p class="articlepage--comments_main_list-item_top_rating-group-item-name">
                                                    Support</p>
                                                <div
                                                    class="articlepage--comments_main_list-item_top_rating-group-item-stars">
                                                    <div class="rating-area">
                                                        <input type="radio" id="support-5" name="support" value="5">
                                                        <label for="support-5" title="«5»"></label>
                                                        <input type="radio" id="support-4" name="support" value="4">
                                                        <label for="support-4" title="«4»"></label>
                                                        <input type="radio" id="support-3" name="support" value="3">
                                                        <label for="support-3" title="«3»"></label>
                                                        <input type="radio" id="support-2" name="support" value="2">
                                                        <label for="support-2" title="«2»"></label>
                                                        <input type="radio" id="support-1" name="support" value="1">
                                                        <label for="support-1" title="«1»"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="articlepage--comments_main_list-item_top_rating-group-item">
                                                <p class="articlepage--comments_main_list-item_top_rating-group-item-name">
                                                    Payments</p>
                                                <div
                                                    class="articlepage--comments_main_list-item_top_rating-group-item-stars">
                                                    <div class="rating-area">
                                                        <input type="radio" id="payments-5" name="payments" value="5">
                                                        <label for="payments-5" title="«5»"></label>
                                                        <input type="radio" id="payments-4" name="payments" value="4">
                                                        <label for="payments-4" title="«4»"></label>
                                                        <input type="radio" id="payments-3" name="payments" value="3">
                                                        <label for="payments-3" title="«3»"></label>
                                                        <input type="radio" id="payments-2" name="payments" value="2">
                                                        <label for="payments-2" title="«2»"></label>
                                                        <input type="radio" id="payments-1" name="payments" value="1">
                                                        <label for="payments-1" title="«1»"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="articlepage--comments_main_list-item_top_rating-group-item">
                                                <p class="articlepage--comments_main_list-item_top_rating-group-item-name">
                                                    offers</p>
                                                <div
                                                    class="articlepage--comments_main_list-item_top_rating-group-item-stars">
                                                    <div class="rating-area">
                                                        <input type="radio" id="offers-5" name="offers" value="5">
                                                        <label for="offers-5" title="«5»"></label>
                                                        <input type="radio" id="offers-4" name="offers" value="4">
                                                        <label for="offers-4" title="«4»"></label>
                                                        <input type="radio" id="offers-3" name="offers" value="3">
                                                        <label for="offers-3" title="«3»"></label>
                                                        <input type="radio" id="offers-2" name="offers" value="2">
                                                        <label for="offers-2" title="«2»"></label>
                                                        <input type="radio" id="offers-1" name="offers" value="1">
                                                        <label for="offers-1" title="«1»"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="articlepage--comments_main_list-item_top_rating-group-item">
                                                <p class="articlepage--comments_main_list-item_top_rating-group-item-name">
                                                    Betting</p>
                                                <div
                                                    class="articlepage--comments_main_list-item_top_rating-group-item-stars">
                                                    <div class="rating-area">
                                                        <input type="radio" id="betting-5" name="betting" value="5">
                                                        <label for="betting-5" title="«5»"></label>
                                                        <input type="radio" id="betting-4" name="betting" value="4">
                                                        <label for="betting-4" title="«4»"></label>
                                                        <input type="radio" id="betting-3" name="betting" value="3">
                                                        <label for="betting-3" title="«3»"></label>
                                                        <input type="radio" id="betting-2" name="betting" value="2">
                                                        <label for="betting-2" title="«2»"></label>
                                                        <input type="radio" id="betting-1" name="betting" value="1">
                                                        <label for="betting-1" title="«1»"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="id" value="{{ $cpa['id'] }}">
                                        <textarea id="comment" required minlength="1" placeholder="Leave a comment here"
                                                  class="input-textarea" name="comment"></textarea>
                                        <button class="btn--blue header_buttons-blue-btn">
                                            <span>Send</span>
                                            <img loading="lazy"
                                                 src="{{asset('assets/images/icons/arrow-right-white.svg')}}"
                                                 alt="arrow">
                                        </button>
                                    </form>
                                @else
                                    <p class="articlepage--comments-none">You must be
                                        <button class="login--btn" type="button">login</button>
                                        in to leave a review
                                    </p>
                                @endauth
                            </div>
                        </div>
                    </div>
                </article>
                <aside class="filter-aside">
                    <div class="cpaartpage_aside_rating">
                        <p class="cpaartpage_aside_rating-title">{{ __('messages.rating') }}</p>
                        <div class="cpaartpage_aside_rating_group">
                            <div class="cpaartpage_aside_rating_group-item">
                                <div class="articlepage--comments_main_list-item_top_rating-group-item">
                                    <p class="articlepage--comments_main_list-item_top_rating-group-item-name">{{ __('messages.support') }}</p>
                                    <div class="articlepage--comments_main_list-item_top_rating-group-item-stars">
                                        @for ($i=0; $i<5; $i++)
                                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="{{ $i < $cpa['rating_support'] ? '1' : '0.2' }}"
                                                      d="M8.50065 12.6722L13.3932 15.6252L12.0948 10.0597L16.4173 6.31516L10.7252 5.83225L8.50065 0.583496L6.27607 5.83225L0.583984 6.31516L4.90648 10.0597L3.60815 15.6252L8.50065 12.6722Z"
                                                      fill="#014EFF"/>
                                            </svg>
                                        @endfor
                                    </div>
                                </div>
                                <div class="cpaartpage_aside_rating_group-item-num">
                                    <span>{{ $cpa['rating_support'] }}</span>/5
                                </div>
                            </div>
                            <div class="cpaartpage_aside_rating_group-item">
                                <div class="articlepage--comments_main_list-item_top_rating-group-item">
                                    <p class="articlepage--comments_main_list-item_top_rating-group-item-name">{{ __('messages.payouts') }}</p>
                                    <div class="articlepage--comments_main_list-item_top_rating-group-item-stars">
                                        @for ($i=0; $i<5; $i++)
                                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="{{ $i < $cpa['rating_payments'] ? '1' : '0.2' }}"
                                                      d="M8.50065 12.6722L13.3932 15.6252L12.0948 10.0597L16.4173 6.31516L10.7252 5.83225L8.50065 0.583496L6.27607 5.83225L0.583984 6.31516L4.90648 10.0597L3.60815 15.6252L8.50065 12.6722Z"
                                                      fill="#014EFF"/>
                                            </svg>
                                        @endfor
                                    </div>
                                </div>
                                <div class="cpaartpage_aside_rating_group-item-num">
                                    <span>{{ $cpa['rating_payments'] }}</span>/5
                                </div>
                            </div>
                            <div class="cpaartpage_aside_rating_group-item">
                                <div class="articlepage--comments_main_list-item_top_rating-group-item">
                                    <p class="articlepage--comments_main_list-item_top_rating-group-item-name">{{ __('messages.offers') }}</p>
                                    <div class="articlepage--comments_main_list-item_top_rating-group-item-stars">
                                        @for ($i=0; $i<5; $i++)
                                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="{{ $i < $cpa['rating_offers'] ? '1' : '0.2' }}"
                                                      d="M8.50065 12.6722L13.3932 15.6252L12.0948 10.0597L16.4173 6.31516L10.7252 5.83225L8.50065 0.583496L6.27607 5.83225L0.583984 6.31516L4.90648 10.0597L3.60815 15.6252L8.50065 12.6722Z"
                                                      fill="#014EFF"/>
                                            </svg>
                                        @endfor
                                    </div>
                                </div>
                                <div class="cpaartpage_aside_rating_group-item-num">
                                    <span>{{ $cpa['rating_offers'] }}</span>/5
                                </div>
                            </div>
                            <div class="cpaartpage_aside_rating_group-item">
                                <div class="articlepage--comments_main_list-item_top_rating-group-item">
                                    <p class="articlepage--comments_main_list-item_top_rating-group-item-name">{{ __('messages.rates') }}</p>
                                    <div class="articlepage--comments_main_list-item_top_rating-group-item-stars">
                                        @for ($i=0; $i<5; $i++)
                                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="{{ $i < $cpa['rating_betting'] ? '1' : '0.2' }}"
                                                      d="M8.50065 12.6722L13.3932 15.6252L12.0948 10.0597L16.4173 6.31516L10.7252 5.83225L8.50065 0.583496L6.27607 5.83225L0.583984 6.31516L4.90648 10.0597L3.60815 15.6252L8.50065 12.6722Z"
                                                      fill="#014EFF"/>
                                            </svg>
                                        @endfor
                                    </div>
                                </div>
                                <div class="cpaartpage_aside_rating_group-item-num">
                                    <span>{{ $cpa['rating_betting'] }}</span>/5
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(!empty($banner))
                        <div class="filter-aside--sticky">
                            <div class="filter-aside-banner">
                                <a target="_blank" href="{{ $banner->link }}">
                                    @if($banner->type == 'image')
                                        <img loading="lazy" width="100%" src="{{asset('storage/'. $banner->file)}}"
                                             alt="bunner">
                                    @else
                                        <video width="100%" src="{{ asset('storage/'. $banner->file) }}" autoplay
                                               loop muted></video>
                                    @endif
                                </a>
                            </div>
                        </div>
                    @endif
                </aside>
            </div>
        </div>
    </section>
    <aside class="main-video aside-other-wideos">
        <div class="container">
            <h3 class="aside-other-wideos-title">Related CPA-networks</h3>

            <div class="swiper">
                <ul class="swiper-wrapper">
                    @foreach ($moreCpa as $i)
                        <li class="article--card swiper-slide">
                            <a class="article--card-link"
                               href="{{ route('cpa.page', [$i['main_verticales'], $i['link']]) }}"></a>
                            <img loading="lazy" src="{{ asset('storage/'. $i["{$locale}image"]) }}" alt="banner">
                            <div class="article--card_info">
                                <ul class="article--card_info_tags-list">
                                    @if(!empty($ad['verticales']))
                                        @foreach($ad['verticales'] as $tag)
                                            <li class="article--card_info_tags-list-item mobhide">
                                                <p class="article--card_info_tags-list-item--link">#{{ $tag }}</p>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                                <h3 class="article--card_info-title">{{ $i["{$locale}name"] }}</h3>

                                <div class="article--card_info-views">
                                    <svg width="14" height="9" viewBox="0 0 14 9" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.99967 1.29167C8.07227 1.2881 9.1241 1.58729 10.0342 2.15484C10.9444 2.72239 11.6759 3.53526 12.1447 4.5C11.6765 5.46517 10.9451 6.27843 10.0348 6.84606C9.12453 7.41368 8.07242 7.71259 6.99967 7.70833C5.92693 7.71259 4.87481 7.41368 3.96454 6.84606C3.05427 6.27843 2.3229 5.46517 1.85467 4.5C2.32345 3.53526 3.05496 2.72239 3.9651 2.15484C4.87525 1.58729 5.92708 1.2881 6.99967 1.29167V1.29167ZM6.99967 0.125C4.08301 0.125 1.59217 1.93917 0.583008 4.5C1.59217 7.06083 4.08301 8.875 6.99967 8.875C9.91634 8.875 12.4072 7.06083 13.4163 4.5C12.4072 1.93917 9.91634 0.125 6.99967 0.125ZM6.99967 3.04167C7.38645 3.04167 7.75738 3.19531 8.03087 3.4688C8.30436 3.74229 8.45801 4.11323 8.45801 4.5C8.45801 4.88677 8.30436 5.25771 8.03087 5.5312C7.75738 5.80469 7.38645 5.95833 6.99967 5.95833C6.6129 5.95833 6.24197 5.80469 5.96848 5.5312C5.69499 5.25771 5.54134 4.88677 5.54134 4.5C5.54134 4.11323 5.69499 3.74229 5.96848 3.4688C6.24197 3.19531 6.6129 3.04167 6.99967 3.04167V3.04167ZM6.99967 1.875C5.55301 1.875 4.37467 3.05333 4.37467 4.5C4.37467 5.94667 5.55301 7.125 6.99967 7.125C8.44634 7.125 9.62467 5.94667 9.62467 4.5C9.62467 3.05333 8.44634 1.875 6.99967 1.875Z"
                                            fill="#181A1C"/>
                                    </svg>
                                    <span>{{ $i['views'] }}</span>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <button type="button" class="swiper-button-prev swiper-button arrow--btn left">
                    <img loading="lazy" class="arrow--btn-black"
                         src="{{asset('assets/images/icons/arrow-right-black.svg')}}"
                         alt="arrow">
                    <img loading="lazy" class="arrow--btn-blue"
                         src="{{asset('assets/images/icons/arrow-right-blue.svg')}}" alt="blue">
                </button>
                <button type="button" class="swiper-button-next swiper-button arrow--btn">
                    <img loading="lazy" class="arrow--btn-black"
                         src="{{asset('assets/images/icons/arrow-right-black.svg')}}"
                         alt="arrow">
                    <img loading="lazy" class="arrow--btn-blue"
                         src="{{asset('assets/images/icons/arrow-right-blue.svg')}}" alt="blue">
                </button>

                <div class="main_articles--mobile">
                    <div class="main_articles_top_link-wrapp-arrows">
                        @for ($i=0; $i<10; $i++)
                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10.2425 6L6.43923 2.1967L8.56055 0.0753784L15.9852 7.5L8.56055 14.9246L6.43923 12.8033L10.2425 9L1.13593 9L1.13593 6H10.2425Z"
                                      fill="#272C31"/>
                            </svg>
                        @endfor
                    </div>
                </div>

                <div class="swiper-pagination"></div>
            </div>
        </div>
    </aside>
    <section class="breadcrambs bot">
        <div class="container">
            <ul class="breadcrambs_list">
                <li class="breadcrambs_list-item">
                    <a href="{{ route('index') }}">Homepage</a>
                </li>
                <li class="breadcrambs_list-item">
                    <a href="{{ route('cpa') }}">{{ __('messages.cpa') }}</a>
                </li>
                <li class="breadcrambs_list-item">
                    {{ $cpa["{$locale}name"] }}
                </li>
            </ul>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $('#comment_send').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                url: '{{ route('cpa.comment') }}',
                data: $(this).serialize(),
                type: 'POST',
                dataType: 'JSON'
            }).done(function (rsp) {
                if (rsp.status) {
                    $('#comment').val('');
                    $('#comment__text').text('Your comment is being moderated')
                }
            })
        });
    </script>
@endsection
