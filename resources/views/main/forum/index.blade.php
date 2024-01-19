@extends('layouts.main')
@section('seo')
    <title>{{ $seo["title"] }}</title>
    <meta name="description" content="{{ $seo["description"] }}">
    <meta name="keywords" content="{{ $seo["keywords"] }}"/>
    <meta property="og:title" content="{{ $seo["og_title"] }}"/>
    <meta property="og:description" content="{{ $seo["og_description"] }}"/>
    <meta property="og:url" content="{{ url()->current() }}"/>
@endsection
@php
    $colors = [
        'Gambling' => 'color1',
        'Betting' => 'color2',
        'Nutra' => 'color3',
        'Sweepstakes' => 'color4',
        'Ppc' => 'color5',
        'Whitehat' => 'color6',
        'Cpi' => 'color7',
        'Wap-Click' => 'color8',
        'Mobile content' => 'color9',
        'E-commerce' => 'color10',
        'Travel' => 'color11',
        'Utilites' => 'color12',
    ];
@endphp

@section('content')
    <section class="breadcrambs top">
        <div class="container">
            <ul class="breadcrambs_list">
                <li class="breadcrambs_list-item">
                    <a href="{{ route('index') }}">Homepage</a>
                </li>
                <li class="breadcrambs_list-item">
                    <a href="{{ route('forum') }}">Forum</a>
                </li>
            </ul>
        </div>
    </section>

    <section class="cpapage cpa-catalog-page forum">
        <div class="container">
            <section class="cpapage_main">
                <h1 class="mainpage-title"><span>Affjournal</span> — is your guide to traffic arbitrage</h1>

                <div class="forum_main_card first">
                    <div class="forum_main_card_top">
                        <div class="forum_main_card_top_buttons-tabs">
                            {{--                            <button type="button" class="forum_main_card_top--tab-btn active" id="tab1">Latest answers--}}
                            {{--                            </button>--}}
                            <button type="button" class="forum_main_card_top--tab-btn active" id="tab2">New Topics
                            </button>
                            <button type="button" class="forum_main_card_top--tab-btn" id="tab3">Popular of the week
                            </button>
                            @auth()
                                <button type="button" class="forum_main_card_top--tab-btn" id="tab4">My topics</button>
                            @endauth
                        </div>
                    </div>
                    <div class="forum_main_card_tabs">
                        {{--                        <div class="forum_main_card_tabs--tab active" id="tab1">--}}
                        {{--                            <ul class="forum_main_card_list">--}}
                        {{--                                <li class="forum_main_card_list--item">--}}
                        {{--                                    <div class="forum_main_card_list--item_left">--}}
                        {{--                                        <span class="forum_main_card_list--item-num">1</span>--}}
                        {{--                                        <div class="forum_main_card_list--item_left-head">--}}
                        {{--                                            <p class="forum--tag color1">Case</p>--}}
                        {{--                                            <a href="{{ route('index') }}"--}}
                        {{--                                               class="forum_main_card_list--item_left-head-title">Serious.Partners ---}}
                        {{--                                                international partner network</a>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="forum_main_card_list--item_right">--}}
                        {{--                                        <p class="forum_main_card_list--item_right-time">17 min. ago</p>--}}
                        {{--                                        <div class="forum_main_card_list--item_right-wrapper">--}}
                        {{--                                            <a href="{{ route('index') }}"--}}
                        {{--                                               class="forum_main_card_list--item_right-name">Serious.Partners</a>--}}

                        {{--                                            <div--}}
                        {{--                                                class="forum-user-preview_card forum_main_card_list--item_right-user-preview">--}}
                        {{--                                                <div class="forum-user-preview_card_main">--}}
                        {{--                                                    <div class="forum-user-preview_card_main_info">--}}
                        {{--                                                        <div class="forum-user-preview_card_main_info-avatar">--}}
                        {{--                                                            <img loading="lazy"--}}
                        {{--                                                                 src="{{asset('assets/images/card-pict.jpg')}}"--}}
                        {{--                                                                 alt="avatar">--}}
                        {{--                                                        </div>--}}
                        {{--                                                        <div class="forum-user-preview_card_main_info_right">--}}
                        {{--                                                            <p class="forum-user-preview_card_main_info-name">Wade--}}
                        {{--                                                                Warren</p>--}}
                        {{--                                                            <div class="forum-user-preview_card_main_info_right-items">--}}
                        {{--                                                                <p class="forum-user-preview_card_main_info_right-items-item">--}}
                        {{--                                                                    Registration: <span>21 Oct. 2022</span>--}}
                        {{--                                                                </p>--}}
                        {{--                                                                <p class="forum-user-preview_card_main_info_right-items-item">--}}
                        {{--                                                                    Last activity: <span>Today at 12:15 p.m.</span>--}}
                        {{--                                                                </p>--}}
                        {{--                                                            </div>--}}
                        {{--                                                        </div>--}}
                        {{--                                                    </div>--}}
                        {{--                                                    <button type="button" class="user_card-main-example-btn"--}}
                        {{--                                                            style="background: #F9A826;">Elf 80 lvl--}}
                        {{--                                                    </button>--}}
                        {{--                                                </div>--}}
                        {{--                                                <div class="forum-user-preview_card_bott">--}}
                        {{--                                                    <p class="forum-user-preview_card_bott-text">Messages:--}}
                        {{--                                                        <span>9 476</span></p>--}}
                        {{--                                                    <p class="forum-user-preview_card_bott-text">Reactions:--}}
                        {{--                                                        <span>9 476</span></p>--}}
                        {{--                                                    <p class="forum-user-preview_card_bott-text">Trophies:--}}
                        {{--                                                        <span>9 476</span></p>--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </li>--}}
                        {{--                            </ul>--}}
                        {{--                        </div>--}}
                        <div class="forum_main_card_tabs--tab active" id="tab2">
                            <ul class="forum_main_card_list">
                                @foreach($newTopik as $k => $v)
                                    <li class="forum_main_card_list--item">
                                        <div class="forum_main_card_list--item_left">
                                            <span class="forum_main_card_list--item-num">{{ $k + 1 }}</span>
                                            <div class="forum_main_card_list--item_left-head">
                                                @if(!empty($v->prefix))
                                                    <p class="forum--tag {{ $colors[$v->prefix] }}">{{ $v->prefix }}</p>
                                                @endif
                                                <a href="{{ route('forum.board', [$v->theme, $v->link]) }}"
                                                   class="forum_main_card_list--item_left-head-title">{{ $v->title }}</a>
                                            </div>
                                        </div>
                                        <div class="forum_main_card_list--item_right">
                                            <p class="forum_main_card_list--item_right-time">{{ date('d/m/Y', strtotime($v->created_at)) }}</p>
                                            <div class="forum_main_card_list--item_right-wrapper">
                                                <a href="{{ route('user.correspondence.page', $v->author->id) }}"
                                                   class="forum_main_card_list--item_right-name">{{ $v->author->name }}</a>
                                                <div
                                                    class="forum-user-preview_card forum_main_card_list--item_right-user-preview">
                                                    <div class="forum-user-preview_card_main">
                                                        <div class="forum-user-preview_card_main_info">
                                                            <div class="forum-user-preview_card_main_info-avatar">
                                                                @empty($v->author->photo)
                                                                    <img loading="lazy"
                                                                         src="{{asset('assets/images/card-pict.jpg')}}"
                                                                         alt="avatar">
                                                                @else
                                                                    <img loading="lazy"
                                                                         src="{{asset('storage/'.$v->author->photo)}}"
                                                                         alt="avatar">
                                                                @endempty
                                                            </div>
                                                            <div class="forum-user-preview_card_main_info_right">
                                                                <p class="forum-user-preview_card_main_info-name">{{ $v->author->name }}</p>
                                                                <div
                                                                    class="forum-user-preview_card_main_info_right-items">
                                                                    <p class="forum-user-preview_card_main_info_right-items-item">
                                                                        Registration:
                                                                        <span>{{ date('d/m/Y', strtotime($v->author->created_at)) }}</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="forum-user-preview_card_bott">
                                                        <p class="forum-user-preview_card_bott-text">Messages:
                                                            <span>{{ $v->author->comments->count() }}</span></p>
                                                        <p class="forum-user-preview_card_bott-text">Reactions:
                                                            <span>9 476</span></p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="forum_main_card_tabs--tab" id="tab3">
                            <ul class="forum_main_card_list">
                                @foreach($popularTopik as $k => $v)
                                    <li class="forum_main_card_list--item">
                                        <div class="forum_main_card_list--item_left">
                                            <span class="forum_main_card_list--item-num">{{ $k + 1 }}</span>
                                            <div class="forum_main_card_list--item_left-head">
                                                @if(!empty($v->prefix))
                                                    <p class="forum--tag {{ $colors[$v->prefix] }}">{{ $v->prefix }}</p>
                                                @endif
                                                <a href="{{ route('index') }}"
                                                   class="forum_main_card_list--item_left-head-title">{{ $v->title }}</a>
                                            </div>
                                        </div>
                                        <div class="forum_main_card_list--item_right">
                                            <p class="forum_main_card_list--item_right-time">{{ date('d/m/Y', strtotime($v->created_at)) }}</p>
                                            <div class="forum_main_card_list--item_right-wrapper">
                                                <a href="{{ route('index') }}"
                                                   class="forum_main_card_list--item_right-name">{{ $v->author->name }}</a>
                                                <div
                                                    class="forum-user-preview_card forum_main_card_list--item_right-user-preview">
                                                    <div class="forum-user-preview_card_main">
                                                        <div class="forum-user-preview_card_main_info">
                                                            <div class="forum-user-preview_card_main_info-avatar">
                                                                @empty($v->author->photo)
                                                                    <img loading="lazy"
                                                                         src="{{asset('assets/images/card-pict.jpg')}}"
                                                                         alt="avatar">
                                                                @else
                                                                    <img loading="lazy"
                                                                         src="{{asset('storage/'.$v->author->photo)}}"
                                                                         alt="avatar">
                                                                @endempty
                                                            </div>
                                                            <div class="forum-user-preview_card_main_info_right">
                                                                <p class="forum-user-preview_card_main_info-name">{{ $v->author->name }}</p>
                                                                <div
                                                                    class="forum-user-preview_card_main_info_right-items">
                                                                    <p class="forum-user-preview_card_main_info_right-items-item">
                                                                        Registration:
                                                                        <span>{{ date('d/m/Y', strtotime($v->author->created_at)) }}</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="forum-user-preview_card_bott">
                                                        <p class="forum-user-preview_card_bott-text">Messages:
                                                            <span>{{ $v->author->comments->count() }}</span></p>
                                                        <p class="forum-user-preview_card_bott-text">Reactions:
                                                            <span>9 476</span></p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        @auth()
                            <div class="forum_main_card_tabs--tab" id="tab4">
                                <ul class="forum_main_card_list">
                                    @foreach($myTopik as $key => $val)
                                        <li class="forum_main_card_list--item">
                                            <div class="forum_main_card_list--item_left">
                                                <span class="forum_main_card_list--item-num">{{ $key + 1 }}</span>
                                                <div class="forum_main_card_list--item_left-head">
                                                    @if(!empty($val->prefix))
                                                        <p class="forum--tag {{ $colors[$val->prefix] }}">{{ $val->prefix }}</p>
                                                    @endif
                                                    <a href="{{ route('forum.board', [$val->theme, $val->link]) }}"
                                                       class="forum_main_card_list--item_left-head-title">{{ $val->title }}</a>
                                                </div>
                                            </div>
                                            <div class="forum_main_card_list--item_right">
                                                <p class="forum_main_card_list--item_right-time">{{ date('d/m/Y', strtotime($val->created_at)) }}</p>
                                                <div class="forum_main_card_list--item_right-wrapper">
                                                    <a href="{{ route('user.correspondence.page', $val->author->id) }}"
                                                       class="forum_main_card_list--item_right-name">{{ $val->author->name }}</a>
                                                    <div
                                                        class="forum-user-preview_card forum_main_card_list--item_right-user-preview">
                                                        <div class="forum-user-preview_card_main">
                                                            <div class="forum-user-preview_card_main_info">
                                                                <div class="forum-user-preview_card_main_info-avatar">
                                                                    @empty($val->author->photo)
                                                                        <img loading="lazy"
                                                                             src="{{asset('assets/images/card-pict.jpg')}}"
                                                                             alt="avatar">
                                                                    @else
                                                                        <img loading="lazy"
                                                                             src="{{asset('storage/'.$val->author->photo)}}"
                                                                             alt="avatar">
                                                                    @endempty
                                                                </div>
                                                                <div class="forum-user-preview_card_main_info_right">
                                                                    <p class="forum-user-preview_card_main_info-name">{{ $val->author->name }}</p>
                                                                    <div
                                                                        class="forum-user-preview_card_main_info_right-items">
                                                                        <p class="forum-user-preview_card_main_info_right-items-item">
                                                                            Registration:
                                                                            <span>{{ date('d/m/Y', strtotime($val->author->created_at)) }}</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="forum-user-preview_card_bott">
                                                            <p class="forum-user-preview_card_bott-text">Messages:
                                                                <span>{{ $val->author->comments->count() }}</span></p>
                                                            <p class="forum-user-preview_card_bott-text">Reactions:
                                                                <span>9 476</span></p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endauth
                    </div>
                </div>

                <div class="filter-aside-banner to-show">
                    <img loading="lazy" src="{{asset('assets/images/filter-bunner.png')}}" alt="bunner">
                </div>

                <div class="forum_main_links-group">
                    <div class="forum_main_links-group-item">
                        <a href="{{ route('forum.threads', 'cpa-networks-blogs') }}"
                           class="forum_main_links-group-item--link"></a>
                        <div class="forum_main_links-group-item_main">
                            <p class="forum_main_links-group-item_main-title">CPA-networks blogs</p>
                            <div class="forum_main_links-group-item_main-group">
                                <p class="forum_main_links-group-item_main-text">Topics:
                                    <span>{{ $themes['cpa-networks-blogs']['topik'] ?? 0 }}</span></p>
                                <p class="forum_main_links-group-item_main-text">Messages:
                                    <span>{{ $themes['cpa-networks-blogs']['comments'] ?? 0 }}</span></p>
                            </div>
                            @if(!empty($themes['cpa-networks-blogs']['last_topik']))
                                <div class="forum_main_links-group-item_main-last">
                                    <div class="forum_main_links-group-item_main-last-avatar">
                                        @empty($themes['cpa-networks-blogs']['last_topik']['author']['photo'])
                                            <img loading="lazy" src="{{ asset('assets/images/card-pict.jpg') }}"
                                                 alt="avatar">
                                        @else
                                            <img loading="lazy"
                                                 src="{{ asset('storage/' . $themes['cpa-networks-blogs']['last_topik']['author']['photo']) }}"
                                                 alt="avatar">
                                        @endempty
                                    </div>
                                    <div class="forum_main_links-group-item_main-last-info">
                                        <p class="forum_main_links-group-item_main-last-info-title">
                                            {{ $themes['cpa-networks-blogs']['last_topik']['title'] ?? '' }}
                                        </p>
                                        <p class="forum_main_links-group-item_main-last-info-text">{{ date('d/m/Y', strtotime($themes['cpa-networks-blogs']['last_topik']['created_at'])) }}
                                            | {{ $themes['cpa-networks-blogs']['last_topik']['author']['name'] }}</p>
                                    </div>
                                </div>
                            @endif
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M14.5248 7.79998H5.20176V2.59998H23.4018V20.8H18.2018V11.4769L7.04024 22.6385L3.36328 18.9615L14.5248 7.79998Z"
                                      fill="#F7FAFF"/>
                            </svg>
                        </div>
                    </div>
                    <div class="forum_main_links-group-item">
                        <a href="{{ route('forum.threads', 'webmasters') }}"
                           class="forum_main_links-group-item--link"></a>
                        <div class="forum_main_links-group-item_main">
                            <p class="forum_main_links-group-item_main-title">Webmasters blogs</p>
                            <div class="forum_main_links-group-item_main-group">
                                <p class="forum_main_links-group-item_main-text">Topics:
                                    <span>{{ $themes['webmasters']['topik'] ?? 0 }}</span></p>
                                <p class="forum_main_links-group-item_main-text">Messages:
                                    <span>{{ $themes['webmasters']['comments'] ?? 0 }}</span></p>
                            </div>
                            @if(!empty($themes['webmasters']['last_topik']))
                                <div class="forum_main_links-group-item_main-last">
                                    <div class="forum_main_links-group-item_main-last-avatar">
                                        @empty($themes['webmasters']['last_topik']['author']['photo'])
                                            <img loading="lazy" src="{{ asset('assets/images/card-pict.jpg') }}"
                                                 alt="avatar">
                                        @else
                                            <img loading="lazy"
                                                 src="{{ asset('storage/' . $themes['webmasters']['last_topik']['author']['photo']) }}"
                                                 alt="avatar">
                                        @endempty
                                    </div>
                                    <div class="forum_main_links-group-item_main-last-info">
                                        <p class="forum_main_links-group-item_main-last-info-title">
                                            {{ $themes['webmasters']['last_topik']['title'] }}
                                        </p>
                                        <p class="forum_main_links-group-item_main-last-info-text">{{ date('d/m/Y', strtotime($themes['webmasters']['last_topik']['created_at'])) }}
                                            | {{ $themes['webmasters']['last_topik']['author']['name'] }}</p>
                                    </div>
                                </div>
                            @endif
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M14.5248 7.79998H5.20176V2.59998H23.4018V20.8H18.2018V11.4769L7.04024 22.6385L3.36328 18.9615L14.5248 7.79998Z"
                                      fill="#F7FAFF"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="forum_main_cards-wrapper">
                    <div class="forum_main_cards">
                        <h2 class="forum_main_cards-title">Traffic source</h2>
                        <ul class="forum_main_cards_list">
                            <li class="forum_main_cards_list--item">
                                <div class="forum_main_cards_list--item_left">
                                    <div class="forum_main_cards_list--item_left_icon">
                                        <svg width="15" height="28" viewBox="0 0 15 28" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.93128 15.7542H14.0237L14.7938 10.6798H9.93128V7.39725C9.93128 6.00896 10.6109 4.6583 12.7886 4.6583H15V0.342892C13.7029 0.133143 12.392 0.0185359 11.078 0C7.08024 0 4.45435 2.42742 4.45435 6.82228V10.6798H0V15.7479H4.45435V28H9.92496L9.93128 15.7542Z"
                                                fill="white"/>
                                        </svg>
                                    </div>
                                    <div class="forum_main_cards_list--item_left_main">
                                        <div class="forum_main_cards_list--item_left_main_top">
                                            <a href="{{ route('forum.threads', 'facebook') }}"
                                               class="forum_main_cards_list--item_left_main_top-link">Facebook</a>
                                        </div>
                                        <p class="forum_main_cards_list--item_left_main_bot-text">
                                            Topics: <span>{{ $themes['facebook']['topik'] ?? 0 }}</span> | Messages:
                                            <span>{{ $themes['facebook']['comments'] ?? 0 }}</span>
                                        </p>
                                    </div>
                                </div>
                                @if(!empty($themes['facebook']['last_topik']))
                                    <div class="forum_main_cards_list--item_right">
                                        <div class="forum_main_links-group-item_main-last-avatar">
                                            @empty($themes['facebook']['last_topik']['author']['photo'])
                                                <img loading="lazy" src="{{ asset('assets/images/card-pict.jpg') }}"
                                                     alt="avatar">
                                            @else
                                                <img loading="lazy"
                                                     src="{{ asset('storage/' . $themes['facebook']['last_topik']['author']['photo']) }}"
                                                     alt="avatar">
                                            @endempty
                                        </div>
                                        <div class="forum_main_links-group-item_main-last-info">
                                            <div class="forum_main_cards_list--item_left_main_top">
                                                @if(!empty($themes['facebook']['last_topik']['prefix']))
                                                    <p class="forum--tag {{ $colors[$themes['facebook']['last_topik']['prefix']] }}">{{ $themes['facebook']['last_topik']['prefix'] }}</p>
                                                @endif
                                                <a href="{{ route('forum.board', [$themes['facebook']['last_topik']['theme'], $themes['facebook']['last_topik']['link']]) }}"
                                                   class="forum_main_links-group-item_main-last-info-title">{{ $themes['facebook']['last_topik']['title'] }}</a>
                                            </div>
                                            <p class="forum_main_links-group-item_main-last-info-text">{{ date('d/m/Y', strtotime($themes['facebook']['last_topik']['created_at'])) }}
                                                | <a
                                                    href="{{ route('user.correspondence.page', $themes['facebook']['last_topik']['author']['id']) }}">{{ $themes['facebook']['last_topik']['author']['name'] }}</a>
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            </li>
                            <li class="forum_main_cards_list--item">
                                <div class="forum_main_cards_list--item_left">
                                    <div class="forum_main_cards_list--item_left_icon">
                                        <svg width="25" height="30" viewBox="0 0 25 30" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.74703 11.9066V10.8008C9.36506 10.7407 8.97924 10.7082 8.59259 10.7035C6.76721 10.6994 4.98824 11.2785 3.51512 12.3565C2.042 13.4344 0.951769 14.9548 0.403422 16.6959C-0.144925 18.4369 -0.122713 20.3077 0.466824 22.0352C1.05636 23.7628 2.18239 25.2569 3.6807 26.2995C2.55406 25.0924 1.80073 23.5852 1.51157 21.9595C1.22241 20.3339 1.40978 18.6593 2.05108 17.1378C2.69238 15.6163 3.76021 14.3128 5.12576 13.3846C6.49132 12.4563 8.09628 11.9431 9.74703 11.9066Z"
                                                fill="#25F4EE"/>
                                            <path
                                                d="M9.95058 24.3755C10.9592 24.3742 11.9285 23.984 12.6568 23.2862C13.385 22.5884 13.8162 21.6367 13.8606 20.629V1.95454H17.2709C17.202 1.56473 17.1694 1.16938 17.1736 0.77356H12.5072V19.426C12.4706 20.4383 12.0434 21.3971 11.3152 22.1014C10.5871 22.8056 9.61452 23.2005 8.60152 23.2033C7.97363 23.1993 7.35546 23.0478 6.79688 22.761C7.15807 23.2614 7.63244 23.6692 8.18129 23.9513C8.73013 24.2335 9.3379 24.3818 9.955 24.3843L9.95058 24.3755ZM23.6402 8.29069V7.26231C22.3814 7.2637 21.1503 6.89283 20.1017 6.19633C21.0222 7.26047 22.2644 7.99569 23.6402 8.29069Z"
                                                fill="#25F4EE"/>
                                            <path
                                                d="M20.123 6.18975C19.0938 5.01899 18.5261 3.51345 18.5263 1.95459H17.279C17.4398 2.81811 17.775 3.63979 18.2639 4.36947C18.7529 5.09915 19.3855 5.72152 20.123 6.1986V6.18975ZM8.59632 15.3678C7.72611 15.3769 6.88371 15.6755 6.20195 16.2164C5.52019 16.7573 5.03787 17.5097 4.83104 18.3551C4.62421 19.2004 4.70464 20.0905 5.05964 20.8851C5.41464 21.6796 6.02401 22.3334 6.79168 22.7434C6.37129 22.16 6.12003 21.4719 6.06556 20.7548C6.01109 20.0378 6.15552 19.3196 6.48294 18.6794C6.81037 18.0392 7.3081 17.5017 7.92134 17.1262C8.53458 16.7507 9.23956 16.5516 9.95865 16.551C10.3509 16.5556 10.7404 16.6167 11.1153 16.7323V11.9841C10.7324 11.9262 10.3459 11.8959 9.95865 11.8934H9.75076V15.5049C9.37493 15.4019 8.98582 15.3557 8.59632 15.3678Z"
                                                fill="#FE2C55"/>
                                            <path
                                                d="M23.6435 8.29065V11.9066C21.3192 11.902 19.0553 11.1662 17.1725 9.80336V19.2888C17.1678 21.5621 16.2614 23.7407 14.6523 25.3465C13.0432 26.9524 10.8627 27.8542 8.58937 27.8542C6.83194 27.8593 5.11633 27.3183 3.67969 26.3061C4.85106 27.5665 6.37488 28.4449 8.05263 28.8269C9.73038 29.2088 11.4843 29.0766 13.0858 28.4474C14.6873 27.8183 16.0622 26.7214 17.0314 25.2996C18.0006 23.8778 18.5191 22.1971 18.5193 20.4764V11.0065C20.4083 12.3605 22.675 13.087 24.9992 13.0831V8.43883C24.5435 8.43669 24.0893 8.38778 23.6435 8.29286V8.29065Z"
                                                fill="#FE2C55"/>
                                            <path
                                                d="M17.1776 19.2845V9.79903C19.0661 11.1542 21.3331 11.8807 23.6575 11.8757V8.2642C22.2847 7.97352 21.0432 7.24565 20.119 6.18975C19.383 5.71325 18.7516 5.09211 18.2631 4.36407C17.7745 3.63602 17.4391 2.81626 17.2771 1.95459H13.8647V20.6379C13.8299 21.4493 13.5437 22.2298 13.0458 22.8713C12.5479 23.5129 11.8629 23.9839 11.0856 24.219C10.3083 24.4541 9.47713 24.4418 8.70712 24.1838C7.9371 23.9258 7.26633 23.4348 6.78764 22.7787C5.91614 22.3315 5.24441 21.5732 4.9055 20.6541C4.56658 19.735 4.5852 18.7222 4.95768 17.8162C5.33015 16.9102 6.0293 16.1771 6.91665 15.7621C7.80401 15.3472 8.81484 15.2806 9.74894 15.5757V11.9067C8.08563 11.9422 6.46837 12.4595 5.09331 13.396C3.71825 14.3326 2.64448 15.6479 2.00226 17.1827C1.36004 18.7174 1.17695 20.4055 1.47522 22.0422C1.77349 23.679 2.54029 25.194 3.6826 26.4035C5.13294 27.3837 6.85098 27.8912 8.60113 27.8565C10.8743 27.8542 13.0537 26.9504 14.6615 25.3435C16.2692 23.7366 17.1741 21.5576 17.1776 19.2845Z"
                                                fill="white"/>
                                        </svg>
                                    </div>
                                    <div class="forum_main_cards_list--item_left_main">
                                        <div class="forum_main_cards_list--item_left_main_top">
                                            <a href="{{ route('forum.threads', 'tiktok') }}"
                                               class="forum_main_cards_list--item_left_main_top-link">TikTok</a>
                                        </div>
                                        <p class="forum_main_cards_list--item_left_main_bot-text">
                                            Topics: <span>{{ $themes['tiktok']['topik'] ?? 0 }}</span> | Messages:
                                            <span>{{ $themes['tiktok']['comments'] ?? 0 }}</span>
                                        </p>
                                    </div>
                                </div>
                                @if(!empty($themes['tiktok']['last_topik']))
                                    <div class="forum_main_cards_list--item_right">
                                        <div class="forum_main_links-group-item_main-last-avatar">
                                            @empty($themes['tiktok']['last_topik']['author']['photo'])
                                                <img loading="lazy" src="{{ asset('assets/images/card-pict.jpg') }}"
                                                     alt="avatar">
                                            @else
                                                <img loading="lazy"
                                                     src="{{ asset('storage/' . $themes['tiktok']['last_topik']['author']['photo']) }}"
                                                     alt="avatar">
                                            @endempty
                                        </div>
                                        <div class="forum_main_links-group-item_main-last-info">
                                            <div class="forum_main_cards_list--item_left_main_top">
                                                @if(!empty($themes['tiktok']['last_topik']['prefix']))
                                                    <p class="forum--tag {{ $colors[$themes['tiktok']['last_topik']['prefix']] }}">{{ $themes['tiktok']['last_topik']['prefix'] }}</p>
                                                @endif
                                                <a href="{{ route('forum.board', [$themes['tiktok']['last_topik']['theme'], $themes['tiktok']['last_topik']['link']]) }}"
                                                   class="forum_main_links-group-item_main-last-info-title">{{ $themes['tiktok']['last_topik']['title'] }}</a>
                                            </div>
                                            <p class="forum_main_links-group-item_main-last-info-text">{{ date('d/m/Y', strtotime($themes['tiktok']['last_topik']['created_at'])) }}
                                                | <a
                                                    href="{{ route('user.correspondence.page', $themes['tiktok']['last_topik']['author']['id']) }}">{{ $themes['tiktok']['last_topik']['author']['name'] }}</a>
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            </li>
                            <li class="forum_main_cards_list--item">
                                <div class="forum_main_cards_list--item_left">
                                    <div class="forum_main_cards_list--item_left_icon">
                                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_2002_19646)">
                                                <path
                                                    d="M10.0887 20.3024C9.3537 17.5595 6.539 15.9338 3.79539 16.669C-0.615737 17.851 -1.38165 23.8088 2.55614 26.0824C6.48486 28.3506 11.277 24.7375 10.0887 20.3024Z"
                                                    fill="white"/>
                                                <path
                                                    d="M27.3175 19.0632L18.5036 3.79702C17.8174 2.60837 16.7093 1.75814 15.3835 1.40288C10.9726 0.220751 7.33003 4.99756 9.60361 8.9354L18.4175 24.2015C19.8371 26.6603 22.9765 27.5028 25.4368 26.0824C27.8904 24.6656 28.7341 21.5168 27.3175 19.0632Z"
                                                    fill="white"/>
                                                <path
                                                    d="M11.9078 20.1622L12.9545 18.3493L8.0393 9.83595C7.64509 9.15318 7.38084 8.43055 7.2381 7.69678L3.00781 15.0239C6.89843 13.7817 11.0298 16.1326 11.9078 20.1622Z"
                                                    fill="white"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_2002_19646">
                                                    <rect width="28" height="28" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="forum_main_cards_list--item_left_main">
                                        <div class="forum_main_cards_list--item_left_main_top">
                                            <a href="{{ route('forum.threads', 'google-ads') }}"
                                               class="forum_main_cards_list--item_left_main_top-link">Google Ads</a>
                                        </div>
                                        <p class="forum_main_cards_list--item_left_main_bot-text">
                                            Topics: <span>{{ $themes['google-ads']['topik'] ?? 0 }}</span> | Messages:
                                            <span>{{ $themes['google-ads']['comments'] ?? 0 }}</span>
                                        </p>
                                    </div>
                                </div>
                                @if(!empty($themes['google-ads']['last_topik']))
                                    <div class="forum_main_cards_list--item_right">
                                        <div class="forum_main_links-group-item_main-last-avatar">
                                            @empty($themes['google-ads']['last_topik']['author']['photo'])
                                                <img loading="lazy" src="{{ asset('assets/images/card-pict.jpg') }}"
                                                     alt="avatar">
                                            @else
                                                <img loading="lazy"
                                                     src="{{ asset('storage/' . $themes['google-ads']['last_topik']['author']['photo']) }}"
                                                     alt="avatar">
                                            @endempty
                                        </div>
                                        <div class="forum_main_links-group-item_main-last-info">
                                            <div class="forum_main_cards_list--item_left_main_top">
                                                @if(!empty($themes['google-ads']['last_topik']['prefix']))
                                                    <p class="forum--tag {{ $colors[$themes['google-ads']['last_topik']['prefix']] }}">{{ $themes['google-ads']['last_topik']['prefix'] }}</p>
                                                @endif
                                                <a href="{{ route('forum.board', [$themes['google-ads']['last_topik']['theme'], $themes['google-ads']['last_topik']['link']]) }}"
                                                   class="forum_main_links-group-item_main-last-info-title">{{ $themes['google-ads']['last_topik']['title'] }}</a>
                                            </div>
                                            <p class="forum_main_links-group-item_main-last-info-text">{{ date('d/m/Y', strtotime($themes['google-ads']['last_topik']['created_at'])) }}
                                                | <a
                                                    href="{{ route('user.correspondence.page', $themes['google-ads']['last_topik']['author']['id']) }}">{{ $themes['google-ads']['last_topik']['author']['name'] }}</a>
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            </li>
                            <li class="forum_main_cards_list--item">
                                <div class="forum_main_cards_list--item_left">
                                    <div class="forum_main_cards_list--item_left_icon">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M27.125 9.30005H14.625C14.4925 9.30044 14.3656 9.35325 14.2719 9.44693C14.1782 9.54062 14.1254 9.66756 14.125 9.80005V22.2C14.1266 22.2972 14.1563 22.3919 14.2105 22.4725C14.2647 22.5532 14.3412 22.6164 14.4306 22.6545C14.52 22.6926 14.6185 22.7039 14.7143 22.6872C14.81 22.6704 14.8988 22.6262 14.97 22.56L17.925 19.705H27.125C27.1907 19.7053 27.2558 19.6925 27.3166 19.6675C27.3774 19.6424 27.4326 19.6056 27.4791 19.5591C27.5255 19.5126 27.5624 19.4574 27.5874 19.3967C27.6125 19.3359 27.6252 19.2708 27.625 19.205V9.80005C27.6246 9.66756 27.5718 9.54062 27.4781 9.44693C27.3844 9.35325 27.2575 9.30044 27.125 9.30005Z"
                                                fill="white"/>
                                            <path
                                                d="M15.665 23.28C15.4515 23.4795 15.1846 23.6128 14.8968 23.6636C14.609 23.7144 14.3126 23.6806 14.0437 23.5662C13.7747 23.4518 13.5447 23.2619 13.3817 23.0193C13.2186 22.7768 13.1294 22.4921 13.125 22.1999V9.8C13.1262 9.40253 13.2846 9.02168 13.5656 8.74063C13.8467 8.45957 14.2275 8.30117 14.625 8.3H21.375V4C21.3751 3.73734 21.3234 3.47723 21.2229 3.23455C21.1224 2.99186 20.9751 2.77135 20.7894 2.58562C20.6036 2.39989 20.3831 2.25257 20.1405 2.15209C19.8978 2.05161 19.6377 1.99993 19.375 2H17.615L16.335 5.195C16.2968 5.28544 16.2328 5.3626 16.151 5.41685C16.0692 5.4711 15.9732 5.50002 15.875 5.5H9.875C9.77683 5.50002 9.68084 5.4711 9.59902 5.41685C9.5172 5.3626 9.45319 5.28544 9.415 5.195C9.15865 4.55315 8.38423 2.62622 8.135 2H6.375C6.11234 1.99993 5.85223 2.05161 5.60955 2.15209C5.36686 2.25257 5.14635 2.39989 4.96062 2.58562C4.77489 2.77135 4.62757 2.99186 4.52709 3.23455C4.42661 3.47723 4.37493 3.73734 4.375 4V28C4.37493 28.2627 4.42661 28.5228 4.5271 28.7655C4.62758 29.0081 4.7749 29.2286 4.96063 29.4144C5.14636 29.6001 5.36687 29.7474 5.60955 29.8479C5.85223 29.9484 6.11234 30.0001 6.375 30H19.375C19.6377 30.0001 19.8978 29.9484 20.1405 29.8479C20.3831 29.7474 20.6036 29.6001 20.7894 29.4144C20.9751 29.2286 21.1224 29.0081 21.2229 28.7655C21.3234 28.5228 21.3751 28.2627 21.375 28V20.705H18.33L15.665 23.28Z"
                                                fill="white"/>
                                            <path
                                                d="M10.2187 4.5H15.5387C15.7725 3.89911 16.3075 2.59 16.5387 2H9.21875C9.44911 2.5865 9.98298 3.903 10.2187 4.5Z"
                                                fill="white"/>
                                        </svg>

                                    </div>
                                    <div class="forum_main_cards_list--item_left_main">
                                        <div class="forum_main_cards_list--item_left_main_top">
                                            <a href="{{ route('forum.threads', 'push-and-other-advertising-networks') }}"
                                               class="forum_main_cards_list--item_left_main_top-link">Push and other
                                                advertising networks</a>
                                        </div>
                                        <p class="forum_main_cards_list--item_left_main_bot-text">
                                            Topics:
                                            <span>{{ $themes['push-and-other-advertising-networks']['topik'] ?? 0 }}</span>
                                            | Messages:
                                            <span>{{ $themes['push-and-other-advertising-networks']['comments'] ?? 0 }}</span>
                                        </p>
                                    </div>
                                </div>
                                @if(!empty($themes['push-and-other-advertising-networks']['last_topik']))
                                    <div class="forum_main_cards_list--item_right">
                                        <div class="forum_main_links-group-item_main-last-avatar">
                                            @empty($themes['push-and-other-advertising-networks']['last_topik']['author']['photo'])
                                                <img loading="lazy" src="{{ asset('assets/images/card-pict.jpg') }}"
                                                     alt="avatar">
                                            @else
                                                <img loading="lazy"
                                                     src="{{ asset('storage/' . $themes['push-and-other-advertising-networks']['last_topik']['author']['photo']) }}"
                                                     alt="avatar">
                                            @endempty
                                        </div>
                                        <div class="forum_main_links-group-item_main-last-info">
                                            <div class="forum_main_cards_list--item_left_main_top">
                                                @if(!empty($themes['push-and-other-advertising-networks']['last_topik']['prefix']))
                                                    <p class="forum--tag {{ $colors[$themes['push-and-other-advertising-networks']['last_topik']['prefix']] }}">{{ $themes['push-and-other-advertising-networks']['last_topik']['prefix'] }}</p>
                                                @endif
                                                <a href="{{ route('forum.board', [$themes['push-and-other-advertising-networks']['last_topik']['theme'], $themes['push-and-other-advertising-networks']['last_topik']['link']]) }}"
                                                   class="forum_main_links-group-item_main-last-info-title">{{ $themes['push-and-other-advertising-networks']['last_topik']['title'] }}</a>
                                            </div>
                                            <p class="forum_main_links-group-item_main-last-info-text">{{ date('d/m/Y', strtotime($themes['push-and-other-advertising-networks']['last_topik']['created_at'])) }}
                                                | <a
                                                    href="{{ route('user.correspondence.page', $themes['push-and-other-advertising-networks']['last_topik']['author']['id']) }}">{{ $themes['push-and-other-advertising-networks']['last_topik']['author']['name'] }}</a>
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            </li>
                            <li class="forum_main_cards_list--item">
                                <div class="forum_main_cards_list--item_left">
                                    <div class="forum_main_cards_list--item_left_icon">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M22.9948 29.6667H6.99479C6.64117 29.6667 6.30203 29.5262 6.05198 29.2762C5.80193 29.0261 5.66146 28.687 5.66146 28.3334C5.66146 27.9798 5.80193 27.6406 6.05198 27.3906C6.30203 27.1405 6.64117 27 6.99479 27H22.9948C23.3484 27 23.6876 27.1405 23.9376 27.3906C24.1877 27.6406 24.3281 27.9798 24.3281 28.3334C24.3281 28.687 24.1877 29.0261 23.9376 29.2762C23.6876 29.5262 23.3484 29.6667 22.9948 29.6667ZM29.6615 7.00004V17.6667C29.6615 18.5422 29.489 19.4091 29.154 20.2179C28.819 21.0268 28.3279 21.7617 27.7088 22.3808C27.0898 22.9998 26.3549 23.4909 25.546 23.8259C24.7372 24.1609 23.8703 24.3334 22.9948 24.3334H6.99479C6.11931 24.3334 5.25241 24.1609 4.44357 23.8259C3.63473 23.4909 2.8998 22.9998 2.28075 22.3808C1.0305 21.1305 0.328125 19.4348 0.328125 17.6667V7.00004C0.328125 5.23193 1.0305 3.53624 2.28075 2.286C3.53099 1.03575 5.22668 0.333374 6.99479 0.333374H22.9948C23.8703 0.333374 24.7372 0.505812 25.546 0.840844C26.3549 1.17588 27.0898 1.66694 27.7088 2.286C28.3279 2.90505 28.819 3.63998 29.154 4.44882C29.489 5.25766 29.6615 6.12456 29.6615 7.00004ZM5.66146 9.66671C5.66146 10.0203 5.80193 10.3595 6.05198 10.6095C6.30203 10.8596 6.64117 11 6.99479 11H14.9948C15.3484 11 15.6876 10.8596 15.9376 10.6095C16.1876 10.3595 16.3281 10.0203 16.3281 9.66671C16.3281 9.31309 16.1876 8.97395 15.9376 8.7239C15.6876 8.47385 15.3484 8.33337 14.9948 8.33337H6.99479C6.64117 8.33337 6.30203 8.47385 6.05198 8.7239C5.80193 8.97395 5.66146 9.31309 5.66146 9.66671ZM24.3281 15C24.3281 14.6464 24.1877 14.3073 23.9376 14.0572C23.6876 13.8072 23.3484 13.6667 22.9948 13.6667H6.99479C6.64117 13.6667 6.30203 13.8072 6.05198 14.0572C5.80193 14.3073 5.66146 14.6464 5.66146 15C5.66146 15.3537 5.80193 15.6928 6.05198 15.9429C6.30203 16.1929 6.64117 16.3334 6.99479 16.3334H22.9948C23.3484 16.3334 23.6876 16.1929 23.9376 15.9429C24.1877 15.6928 24.3281 15.3537 24.3281 15Z"
                                                fill="white"/>
                                        </svg>
                                    </div>
                                    <div class="forum_main_cards_list--item_left_main">
                                        <div class="forum_main_cards_list--item_left_main_top">
                                            <a href="{{ route('forum.threads', 'ad-network') }}"
                                               class="forum_main_cards_list--item_left_main_top-link">AD-network
                                                blogs</a>
                                        </div>
                                        <p class="forum_main_cards_list--item_left_main_bot-text">
                                            Topics: <span>{{ $themes['ad-network']['topik'] ?? 0 }}</span> | Messages:
                                            <span>{{ $themes['ad-network']['comments'] ?? 0 }}</span>
                                        </p>
                                    </div>
                                </div>
                                @if(!empty($themes['ad-network']['last_topik']))
                                    <div class="forum_main_cards_list--item_right">
                                        <div class="forum_main_links-group-item_main-last-avatar">
                                            @empty($themes['ad-network']['last_topik']['author']['photo'])
                                                <img loading="lazy" src="{{ asset('assets/images/card-pict.jpg') }}"
                                                     alt="avatar">
                                            @else
                                                <img loading="lazy"
                                                     src="{{ asset('storage/' . $themes['ad-network']['last_topik']['author']['photo']) }}"
                                                     alt="avatar">
                                            @endempty
                                        </div>
                                        <div class="forum_main_links-group-item_main-last-info">
                                            <div class="forum_main_cards_list--item_left_main_top">
                                                @if(!empty($themes['ad-network']['last_topik']['prefix']))
                                                    <p class="forum--tag {{ $colors[$themes['ad-network']['last_topik']['prefix']] }}">{{ $themes['ad-network']['last_topik']['prefix'] }}</p>
                                                @endif
                                                <a href="{{ route('forum.board', [$themes['ad-network']['last_topik']['theme'], $themes['ad-network']['last_topik']['link']]) }}"
                                                   class="forum_main_links-group-item_main-last-info-title">{{ $themes['ad-network']['last_topik']['title'] }}</a>
                                            </div>
                                            <p class="forum_main_links-group-item_main-last-info-text">{{ date('d/m/Y', strtotime($themes['ad-network']['last_topik']['created_at'])) }}
                                                | <a
                                                    href="{{ route('user.correspondence.page', $themes['ad-network']['last_topik']['author']['id']) }}">{{ $themes['ad-network']['last_topik']['author']['name'] }}</a>
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            </li>
                        </ul>
                    </div>

                    <div class="forum_main_cards">
                        <h2 class="forum_main_cards-title">Technical part</h2>
                        <ul class="forum_main_cards_list">
                            <li class="forum_main_cards_list--item">
                                <div class="forum_main_cards_list--item_left">
                                    <div class="forum_main_cards_list--item_left_icon">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_2002_19927)">
                                                <path
                                                    d="M32.0044 21.6562C32.0044 17.6853 29.7263 14.1414 26.3145 12.4175C26.2085 20.0312 20.0356 26.2041 12.4219 26.3101C14.1458 29.7219 17.6897 32 21.6606 32C23.5225 32 25.333 31.5042 26.9238 30.562L31.9592 31.9548L30.5664 26.9194C31.5085 25.3286 32.0044 23.5181 32.0044 21.6562Z"
                                                    fill="white"/>
                                                <path
                                                    d="M24.4375 12.2188C24.4375 5.4812 18.9563 0 12.2188 0C5.4812 0 0 5.4812 0 12.2188C0 14.4146 0.584473 16.5525 1.69434 18.4294L0.0449219 24.3923L6.00806 22.7432C7.88501 23.853 10.0229 24.4375 12.2188 24.4375C18.9563 24.4375 24.4375 18.9563 24.4375 12.2188ZM10.3438 9.375H8.46875C8.46875 7.30713 10.1509 5.625 12.2188 5.625C14.2866 5.625 15.9688 7.30713 15.9688 9.375C15.9688 10.4246 15.5244 11.4333 14.7493 12.1423L13.1562 13.6003V15.0625H11.2812V12.7747L13.4834 10.759C13.877 10.3989 14.0938 9.90747 14.0938 9.375C14.0938 8.34106 13.2527 7.5 12.2188 7.5C11.1848 7.5 10.3438 8.34106 10.3438 9.375ZM11.2812 16.9375H13.1562V18.8125H11.2812V16.9375Z"
                                                    fill="white"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_2002_19927">
                                                    <rect width="32" height="32" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>

                                    </div>
                                    <div class="forum_main_cards_list--item_left_main">
                                        <div class="forum_main_cards_list--item_left_main_top">
                                            <a href="{{ route('forum.threads', 'faq') }}"
                                               class="forum_main_cards_list--item_left_main_top-link">FAQ</a>
                                        </div>
                                        <p class="forum_main_cards_list--item_left_main_bot-text">
                                            Topics: <span>{{ $themes['faq']['topik'] ?? 0 }}</span> | Messages:
                                            <span>{{ $themes['faq']['comments'] ?? 0 }}</span>
                                        </p>
                                    </div>
                                </div>
                                @if(!empty($themes['faq']['last_topik']))
                                    <div class="forum_main_cards_list--item_right">
                                        <div class="forum_main_links-group-item_main-last-avatar">
                                            @empty($themes['faq']['last_topik']['author']['photo'])
                                                <img loading="lazy" src="{{ asset('assets/images/card-pict.jpg') }}"
                                                     alt="avatar">
                                            @else
                                                <img loading="lazy"
                                                     src="{{ asset('storage/' . $themes['faq']['last_topik']['author']['photo']) }}"
                                                     alt="avatar">
                                            @endempty
                                        </div>
                                        <div class="forum_main_links-group-item_main-last-info">
                                            <div class="forum_main_cards_list--item_left_main_top">
                                                @if(!empty($themes['faq']['last_topik']['prefix']))
                                                    <p class="forum--tag {{ $colors[$themes['faq']['last_topik']['prefix']] }}">{{ $themes['faq']['last_topik']['prefix'] }}</p>
                                                @endif
                                                <a href="{{ route('forum.board', [$themes['faq']['last_topik']['theme'], $themes['faq']['last_topik']['link']]) }}"
                                                   class="forum_main_links-group-item_main-last-info-title">{{ $themes['faq']['last_topik']['title'] }}</a>
                                            </div>
                                            <p class="forum_main_links-group-item_main-last-info-text">{{ date('d/m/Y', strtotime($themes['faq']['last_topik']['created_at'])) }}
                                                | <a
                                                    href="{{ route('user.correspondence.page', $themes['faq']['last_topik']['author']['id']) }}">{{ $themes['faq']['last_topik']['author']['name'] }}</a>
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            </li>
                            <li class="forum_main_cards_list--item">
                                <div class="forum_main_cards_list--item_left">
                                    <div class="forum_main_cards_list--item_left_icon">
                                        <svg width="30" height="22" viewBox="0 0 30 22" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23 4H3C1.34961 4 0 5.3501 0 7V19C0 20.6499 1.34961 22 3 22H23C24.6504 22 26 20.6499 26 19V7C26 5.3501 24.6504 4 23 4ZM11 18H5C4.4502 18 4 17.5498 4 17C4 16.4502 4.4502 16 5 16H11C11.5498 16 12 16.4502 12 17C12 17.5498 11.5498 18 11 18ZM21 11H5C4.4502 11 4 10.5498 4 10C4 9.4502 4.4502 9 5 9H21C21.5498 9 22 9.4502 22 10C22 10.5498 21.5498 11 21 11ZM30 3V15C30 16.2998 29.1602 17.4102 28 17.8198V7C28 4.24023 25.7598 2 23 2H4.17969C4.58984 0.839844 5.7002 0 7 0H27C28.6504 0 30 1.3501 30 3Z"
                                                fill="white"/>
                                        </svg>
                                    </div>
                                    <div class="forum_main_cards_list--item_left_main">
                                        <div class="forum_main_cards_list--item_left_main_top">
                                            <a href="{{ route('forum.threads','payment-solutions') }}"
                                               class="forum_main_cards_list--item_left_main_top-link">Payment
                                                solutions</a>
                                        </div>
                                        <p class="forum_main_cards_list--item_left_main_bot-text">
                                            Topics: <span>{{ $themes['payment-solutions']['topik'] ?? 0 }}</span> |
                                            Messages:
                                            <span>{{ $themes['payment-solutions']['comments'] ?? 0 }}</span>
                                        </p>
                                    </div>
                                </div>
                                @if(!empty($themes['payment-solutions']['last_topik']))
                                    <div class="forum_main_cards_list--item_right">
                                        <div class="forum_main_links-group-item_main-last-avatar">
                                            @empty($themes['payment-solutions']['last_topik']['author']['photo'])
                                                <img loading="lazy" src="{{ asset('assets/images/card-pict.jpg') }}"
                                                     alt="avatar">
                                            @else
                                                <img loading="lazy"
                                                     src="{{ asset('storage/' . $themes['payment-solutions']['last_topik']['author']['photo']) }}"
                                                     alt="avatar">
                                            @endempty
                                        </div>
                                        <div class="forum_main_links-group-item_main-last-info">
                                            <div class="forum_main_cards_list--item_left_main_top">
                                                @if(!empty($themes['payment-solutions']['last_topik']['prefix']))
                                                    <p class="forum--tag {{ $colors[$themes['payment-solutions']['last_topik']['prefix']] }}">{{ $themes['payment-solutions']['last_topik']['prefix'] }}</p>
                                                @endif
                                                <a href="{{ route('forum.board', [$themes['payment-solutions']['last_topik']['theme'], $themes['payment-solutions']['last_topik']['link']]) }}"
                                                   class="forum_main_links-group-item_main-last-info-title">{{ $themes['payment-solutions']['last_topik']['title'] }}</a>
                                            </div>
                                            <p class="forum_main_links-group-item_main-last-info-text">{{ date('d/m/Y', strtotime($themes['payment-solutions']['last_topik']['created_at'])) }}
                                                | <a
                                                    href="{{ route('user.correspondence.page', $themes['payment-solutions']['last_topik']['author']['id']) }}">{{ $themes['payment-solutions']['last_topik']['author']['name'] }}</a>
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            </li>
                            <li class="forum_main_cards_list--item">
                                <div class="forum_main_cards_list--item_left">
                                    <div class="forum_main_cards_list--item_left_icon">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.72475 8.3175C7.87869 10.3192 7.3935 12.4884 7.34375 14.6875H14.6816V9.68357C12.7102 9.64369 10.8012 9.22732 9.00281 8.44288C8.9095 8.40213 8.817 8.35994 8.72475 8.3175Z"
                                                fill="white"/>
                                            <path
                                                d="M8.40925 7.47347C9.84625 4.38185 12.0614 1.86041 14.687 0.179409V0.00378418C10.8036 0.0825967 7.164 1.62928 4.40625 4.38028C4.4125 4.38597 5.83337 6.14122 8.40925 7.47347Z"
                                                fill="white"/>
                                            <path
                                                d="M8.68381 21.7022C10.5775 20.8233 12.5951 20.3587 14.6844 20.3164V15.3125H7.34375C7.37644 17.5373 7.845 19.7066 8.68381 21.7022Z"
                                                fill="white"/>
                                            <path
                                                d="M14.6807 29.0725V20.9414C12.6572 20.984 10.7097 21.4395 8.92969 22.2684C10.197 25.0037 12.1729 27.3788 14.6807 29.0725Z"
                                                fill="white"/>
                                            <path
                                                d="M8.97656 7.75253C10.7446 8.56834 12.6766 9.01634 14.6832 9.05853V0.928467C12.2259 2.59753 10.2551 4.99797 8.97656 7.75253Z"
                                                fill="white"/>
                                            <path
                                                d="M8.12637 21.9756C7.23275 19.8663 6.75081 17.5979 6.71806 15.3125H0C0.074625 18.9887 1.46512 22.4459 3.94706 25.1439C4.338 24.7959 5.64287 23.2549 8.12637 21.9756Z"
                                                fill="white"/>
                                            <path
                                                d="M21.9688 22.0281C24.3595 23.2829 25.6177 24.7579 26.0478 25.1416C28.5283 22.4439 29.918 18.9876 29.9926 15.3125H23.3996C23.3665 17.6169 22.8767 19.9039 21.9688 22.0281Z"
                                                fill="white"/>
                                            <path
                                                d="M8.15475 8.03893C6.66862 7.27731 5.32788 6.27868 4.16081 5.05987C4.15844 5.05743 4.15694 5.05456 4.15469 5.05206C4.116 5.00906 4.02137 4.89618 3.96787 4.83362C1.473 7.53481 0.0748125 11.0011 0 14.6875H6.72056C6.76919 12.4127 7.25931 10.1499 8.15475 8.03893Z"
                                                fill="white"/>
                                            <path
                                                d="M21.4174 21.7518C22.2693 19.7425 22.7452 17.5556 22.7781 15.3125H15.3125V20.3164C17.2839 20.3563 19.1929 20.7727 20.9913 21.5571C21.1347 21.6197 21.2764 21.6851 21.4174 21.7518Z"
                                                fill="white"/>
                                            <path
                                                d="M8.3815 22.5408C6.03975 23.7585 4.85888 25.1706 4.38281 25.5957C7.15594 28.3736 10.8084 29.9175 14.6876 29.9962V29.8206C11.994 28.0979 9.78731 25.5625 8.3815 22.5408Z"
                                                fill="white"/>
                                            <path
                                                d="M23.394 14.6875H29.9896C29.9147 10.9997 28.5155 7.53231 26.0189 4.83069C25.9379 4.92838 25.8442 5.04381 25.8287 5.05988C24.6885 6.25063 23.3828 7.23163 21.9375 7.98638C22.8471 10.1123 23.345 12.3938 23.394 14.6875Z"
                                                fill="white"/>
                                            <path
                                                d="M25.3903 25.3778C25.3883 25.3758 25.3859 25.3744 25.3839 25.3724C24.2976 24.2378 23.0614 23.3064 21.7186 22.5944C21.5444 22.9655 21.3577 23.3312 21.1577 23.6905C19.7324 26.2504 17.7125 28.395 15.3125 29.8994V29.9962C19.1005 29.9193 22.7779 28.4391 25.6195 25.5935L25.3961 25.3845C25.3939 25.3824 25.3924 25.3799 25.3903 25.3778Z"
                                                fill="white"/>
                                            <path
                                                d="M21.1659 22.3168C19.3582 21.4573 17.3749 20.9847 15.3125 20.9414V29.1563C17.8647 27.4675 19.8766 25.077 21.1659 22.3168Z"
                                                fill="white"/>
                                            <path
                                                d="M15.3125 0.844238V9.05849C17.358 9.01549 19.3257 8.55024 21.1214 7.70418C19.8204 4.92343 17.8135 2.50668 15.3125 0.844238Z"
                                                fill="white"/>
                                            <path
                                                d="M21.6908 7.42053C23.0414 6.70822 24.2846 5.77391 25.3768 4.63485L25.5896 4.37678C22.8323 1.62797 19.1943 0.0825967 15.3125 0.00378418V0.100659C18.1259 1.86478 20.3093 4.47303 21.6908 7.42053Z"
                                                fill="white"/>
                                            <path
                                                d="M21.3742 8.26904C19.5192 9.14004 17.4874 9.63967 15.3125 9.68367V14.6875H22.7754C22.7253 12.4707 22.2329 10.2841 21.3742 8.26904Z"
                                                fill="white"/>
                                        </svg>
                                    </div>
                                    <div class="forum_main_cards_list--item_left_main">
                                        <div class="forum_main_cards_list--item_left_main_top">
                                            <a href="{{ route('forum.threads', 'anti-detect-browsers') }}"
                                               class="forum_main_cards_list--item_left_main_top-link">Anti-detect
                                                browsers</a>
                                        </div>
                                        <p class="forum_main_cards_list--item_left_main_bot-text">
                                            Topics: <span>{{ $themes['anti-detect-browsers']['topik'] ?? 0 }}</span> |
                                            Messages:
                                            <span>{{ $themes['anti-detect-browsers']['comments'] ?? 0 }}</span>
                                        </p>
                                    </div>
                                </div>
                                @if(!empty($themes['anti-detect-browsers']['last_topik']))
                                    <div class="forum_main_cards_list--item_right">
                                        <div class="forum_main_links-group-item_main-last-avatar">
                                            @empty($themes['anti-detect-browsers']['last_topik']['author']['photo'])
                                                <img loading="lazy" src="{{ asset('assets/images/card-pict.jpg') }}"
                                                     alt="avatar">
                                            @else
                                                <img loading="lazy"
                                                     src="{{ asset('storage/' . $themes['anti-detect-browsers']['last_topik']['author']['photo']) }}"
                                                     alt="avatar">
                                            @endempty
                                        </div>
                                        <div class="forum_main_links-group-item_main-last-info">
                                            <div class="forum_main_cards_list--item_left_main_top">
                                                @if(!empty($themes['anti-detect-browsers']['last_topik']['prefix']))
                                                    <p class="forum--tag {{ $colors[$themes['anti-detect-browsers']['last_topik']['prefix']] }}">{{ $themes['anti-detect-browsers']['last_topik']['prefix'] }}</p>
                                                @endif
                                                <a href="{{ route('forum.board', [$themes['anti-detect-browsers']['last_topik']['theme'], $themes['anti-detect-browsers']['last_topik']['link']]) }}"
                                                   class="forum_main_links-group-item_main-last-info-title">{{ $themes['anti-detect-browsers']['last_topik']['title'] }}</a>
                                            </div>
                                            <p class="forum_main_links-group-item_main-last-info-text">{{ date('d/m/Y', strtotime($themes['anti-detect-browsers']['last_topik']['created_at'])) }}
                                                | <a
                                                    href="{{ route('user.correspondence.page', $themes['anti-detect-browsers']['last_topik']['author']['id']) }}">{{ $themes['anti-detect-browsers']['last_topik']['author']['name'] }}</a>
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            </li>
                            <li class="forum_main_cards_list--item">
                                <div class="forum_main_cards_list--item_left">
                                    <div class="forum_main_cards_list--item_left_icon">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M22.3933 15.9997C22.3933 19.5342 19.5279 22.3996 15.9934 22.3996C12.4589 22.3996 9.59375 19.5342 9.59375 15.9997C9.59375 12.4652 12.4589 9.6001 15.9934 9.6001C19.5279 9.6001 22.3933 12.4652 22.3933 15.9997Z"
                                                fill="white"/>
                                            <path
                                                d="M31.0401 15.0398H28.9004C28.4193 8.64951 23.3407 3.56996 16.9504 3.08834V0.960015C16.9504 0.429766 16.5204 0 15.9904 0C15.4601 0 15.0304 0.429766 15.0304 0.960015V3.08834C8.63985 3.56996 3.56088 8.64951 3.07984 15.0398H0.960015C0.429766 15.0398 0 15.4698 0 15.9998C0 16.53 0.429766 16.9598 0.960015 16.9598H3.07984C3.56088 23.35 8.63985 28.4296 15.0301 28.9112V31.0401C15.0301 31.5704 15.4599 32.0001 15.9901 32.0001C16.5201 32.0001 16.9498 31.5704 16.9498 31.0401V28.9112C23.3404 28.4299 28.4193 23.3503 28.9004 16.9598H31.0401C31.5704 16.9598 32.0001 16.53 32.0001 15.9998C32.0001 15.4698 31.5704 15.0398 31.0401 15.0398ZM15.9901 27.0392C9.8934 27.0389 4.95124 22.0962 4.95124 15.9995C4.95154 9.90248 9.89428 4.96032 15.991 4.96032C22.088 4.96032 27.0304 9.90307 27.0304 15.9998C27.0231 22.0941 22.0845 27.0325 15.9901 27.0392Z"
                                                fill="white"/>
                                        </svg>
                                    </div>
                                    <div class="forum_main_cards_list--item_left_main">
                                        <div class="forum_main_cards_list--item_left_main_top">
                                            <a href="{{ route('forum.threads', 'cloaking-and-trackers') }}"
                                               class="forum_main_cards_list--item_left_main_top-link">Cloaking and
                                                Trackers</a>
                                        </div>
                                        <p class="forum_main_cards_list--item_left_main_bot-text">
                                            Topics: <span>{{ $themes['cloaking-and-trackers']['topik'] ?? 0 }}</span> |
                                            Messages:
                                            <span>{{ $themes['cloaking-and-trackers']['comments'] ?? 0 }}</span>
                                        </p>
                                    </div>
                                </div>
                                @if(!empty($themes['cloaking-and-trackers']['last_topik']))
                                    <div class="forum_main_cards_list--item_right">
                                        <div class="forum_main_links-group-item_main-last-avatar">
                                            @empty($themes['cloaking-and-trackers']['last_topik']['author']['photo'])
                                                <img loading="lazy" src="{{ asset('assets/images/card-pict.jpg') }}"
                                                     alt="avatar">
                                            @else
                                                <img loading="lazy"
                                                     src="{{ asset('storage/' . $themes['cloaking-and-trackers']['last_topik']['author']['photo']) }}"
                                                     alt="avatar">
                                            @endempty
                                        </div>
                                        <div class="forum_main_links-group-item_main-last-info">
                                            <div class="forum_main_cards_list--item_left_main_top">
                                                @if(!empty($themes['cloaking-and-trackers']['last_topik']['prefix']))
                                                    <p class="forum--tag {{ $colors[$themes['cloaking-and-trackers']['last_topik']['prefix']] }}">{{ $themes['cloaking-and-trackers']['last_topik']['prefix'] }}</p>
                                                @endif
                                                <a href="{{ route('forum.board', [$themes['cloaking-and-trackers']['last_topik']['theme'], $themes['cloaking-and-trackers']['last_topik']['link']]) }}"
                                                   class="forum_main_links-group-item_main-last-info-title">{{ $themes['cloaking-and-trackers']['last_topik']['title'] }}</a>
                                            </div>
                                            <p class="forum_main_links-group-item_main-last-info-text">{{ date('d/m/Y', strtotime($themes['cloaking-and-trackers']['last_topik']['created_at'])) }}
                                                | <a
                                                    href="{{ route('user.correspondence.page', $themes['cloaking-and-trackers']['last_topik']['author']['id']) }}">{{ $themes['cloaking-and-trackers']['last_topik']['author']['name'] }}</a>
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            </li>
                            <li class="forum_main_cards_list--item">
                                <div class="forum_main_cards_list--item_left">
                                    <div class="forum_main_cards_list--item_left_icon">
                                        <svg width="32" height="30" viewBox="0 0 32 30" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M8 0.333374C3.58172 0.333374 0 3.91509 0 8.33337C0 11.116 1.42068 13.5668 3.57628 15C1.42068 16.4332 0 18.884 0 21.6667C0 26.085 3.58172 29.6667 8 29.6667H24C28.4183 29.6667 32 26.085 32 21.6667C32 18.884 30.5793 16.4332 28.4237 15C30.5793 13.5668 32 11.116 32 8.33337C32 3.91509 28.4183 0.333374 24 0.333374H8ZM10.6667 21.6667C10.6667 20.9303 11.2636 20.3334 12 20.3334H25.3333C26.0697 20.3334 26.6667 20.9303 26.6667 21.6667C26.6667 22.4031 26.0697 23 25.3333 23H12C11.2636 23 10.6667 22.4031 10.6667 21.6667ZM6.66667 23C7.40304 23 8 22.4031 8 21.6667C8 20.9303 7.40304 20.3334 6.66667 20.3334C5.93029 20.3334 5.33333 20.9303 5.33333 21.6667C5.33333 22.4031 5.93029 23 6.66667 23ZM10.6667 8.33337C10.6667 7.597 11.2636 7.00004 12 7.00004H25.3333C26.0697 7.00004 26.6667 7.597 26.6667 8.33337C26.6667 9.06975 26.0697 9.66671 25.3333 9.66671H12C11.2636 9.66671 10.6667 9.06975 10.6667 8.33337ZM6.66667 9.66671C7.40304 9.66671 8 9.06975 8 8.33337C8 7.597 7.40304 7.00004 6.66667 7.00004C5.93029 7.00004 5.33333 7.597 5.33333 8.33337C5.33333 9.06975 5.93029 9.66671 6.66667 9.66671Z"
                                                  fill="white"/>
                                        </svg>
                                    </div>
                                    <div class="forum_main_cards_list--item_left_main">
                                        <div class="forum_main_cards_list--item_left_main_top">
                                            <a href="{{ route('forum.threads', 'proxy') }}"
                                               class="forum_main_cards_list--item_left_main_top-link">Proxy</a>
                                        </div>
                                        <p class="forum_main_cards_list--item_left_main_bot-text">
                                            Topics: <span>{{ $themes['proxy']['topik'] ?? 0 }}</span> | Messages:
                                            <span>{{ $themes['proxy']['comments'] ?? 0 }}</span>
                                        </p>
                                    </div>
                                </div>
                                @if(!empty($themes['proxy']['last_topik']))
                                    <div class="forum_main_cards_list--item_right">
                                        <div class="forum_main_links-group-item_main-last-avatar">
                                            @empty($themes['proxy']['last_topik']['author']['photo'])
                                                <img loading="lazy" src="{{ asset('assets/images/card-pict.jpg') }}"
                                                     alt="avatar">
                                            @else
                                                <img loading="lazy"
                                                     src="{{ asset('storage/' . $themes['proxy']['last_topik']['author']['photo']) }}"
                                                     alt="avatar">
                                            @endempty
                                        </div>
                                        <div class="forum_main_links-group-item_main-last-info">
                                            <div class="forum_main_cards_list--item_left_main_top">
                                                @if(!empty($themes['proxy']['last_topik']['prefix']))
                                                    <p class="forum--tag {{ $colors[$themes['proxy']['last_topik']['prefix']] }}">{{ $themes['proxy']['last_topik']['prefix'] }}</p>
                                                @endif
                                                <a href="{{ route('forum.board', [$themes['proxy']['last_topik']['theme'], $themes['proxy']['last_topik']['link']]) }}"
                                                   class="forum_main_links-group-item_main-last-info-title">{{ $themes['proxy']['last_topik']['title'] }}</a>
                                            </div>
                                            <p class="forum_main_links-group-item_main-last-info-text">{{ date('d/m/Y', strtotime($themes['proxy']['last_topik']['created_at'])) }}
                                                | <a
                                                    href="{{ route('user.correspondence.page', $themes['proxy']['last_topik']['author']['id']) }}">{{ $themes['proxy']['last_topik']['author']['name'] }}</a>
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            </li>
                            <li class="forum_main_cards_list--item">
                                <div class="forum_main_cards_list--item_left">
                                    <div class="forum_main_cards_list--item_left_icon">
                                        <svg width="30" height="32" viewBox="0 0 30 32" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M29.35 13.3659C29.35 9.33128 26.0861 6.04442 22.0598 6.00731C21.1965 2.52807 18.0337 0 14.3752 0C10.0095 0 6.45775 3.55175 6.45775 7.91746C6.45775 7.95506 6.45799 7.99266 6.45848 8.0305C6.42162 8.02977 6.38475 8.02952 6.34789 8.02952C2.84765 8.02952 0 10.8769 0 14.3772C0 17.8774 2.84765 20.7251 6.34789 20.7251H7.06004V23.301C5.9309 23.6921 5.11767 24.7656 5.11767 26.0261C5.11767 27.6159 6.41112 28.9094 8.00096 28.9094C9.59105 28.9094 10.8845 27.6159 10.8845 26.0261C10.8845 24.7656 10.071 23.6921 8.94188 23.301V20.7251H13.7341V26.3915C12.605 26.7827 11.7915 27.8561 11.7915 29.1166C11.7915 30.7065 13.0849 31.9999 14.675 31.9999C16.2649 31.9999 17.5583 30.7065 17.5583 29.1166C17.5583 27.8561 16.7451 26.7827 15.6159 26.3915V20.7251H20.4079V23.301C19.2788 23.6921 18.4655 24.7656 18.4655 26.0261C18.4655 27.6159 19.759 28.9094 21.3488 28.9094C22.9389 28.9094 24.2324 27.6159 24.2324 26.0261C24.2324 24.7656 23.4189 23.6921 22.2898 23.301V20.7185C26.2097 20.561 29.35 17.3237 29.35 13.3659ZM8.0012 27.0278C7.44872 27.0278 6.9995 26.5783 6.9995 26.0261C6.9995 25.4736 7.44872 25.0244 8.0012 25.0244C8.55345 25.0244 9.00267 25.4736 9.00267 26.0261C9.00267 26.5783 8.55345 27.0278 8.0012 27.0278ZM14.675 30.1181C14.1228 30.1181 13.6736 29.6689 13.6736 29.1166C13.6736 28.5642 14.1228 28.1149 14.675 28.1149C15.2275 28.1149 15.6767 28.5642 15.6767 29.1166C15.6767 29.6689 15.2273 30.1181 14.675 30.1181ZM21.3491 27.0278C20.7966 27.0278 20.3474 26.5783 20.3474 26.0261C20.3474 25.4736 20.7966 25.0244 21.3491 25.0244C21.9013 25.0244 22.3508 25.4736 22.3508 26.0261C22.3508 26.5783 21.9013 27.0278 21.3491 27.0278Z"
                                                fill="white"/>
                                        </svg>
                                    </div>
                                    <div class="forum_main_cards_list--item_left_main">
                                        <div class="forum_main_cards_list--item_left_main_top">
                                            <a href="{{ route('forum.threads', 'domains-and-hosting') }}"
                                               class="forum_main_cards_list--item_left_main_top-link">Domains &
                                                Hosting</a>
                                        </div>
                                        <p class="forum_main_cards_list--item_left_main_bot-text">
                                            Topics: <span>{{ $themes['domains-and-hosting']['topik'] ?? 0 }}</span> |
                                            Messages:
                                            <span>{{ $themes['domains-and-hosting']['comments'] ?? 0 }}</span>
                                        </p>
                                    </div>
                                </div>
                                @if(!empty($themes['domains-and-hosting']['last_topik']))
                                    <div class="forum_main_cards_list--item_right">
                                        <div class="forum_main_links-group-item_main-last-avatar">
                                            @empty($themes['domains-and-hosting']['last_topik']['author']['photo'])
                                                <img loading="lazy" src="{{ asset('assets/images/card-pict.jpg') }}"
                                                     alt="avatar">
                                            @else
                                                <img loading="lazy"
                                                     src="{{ asset('storage/' . $themes['domains-and-hosting']['last_topik']['author']['photo']) }}"
                                                     alt="avatar">
                                            @endempty
                                        </div>
                                        <div class="forum_main_links-group-item_main-last-info">
                                            <div class="forum_main_cards_list--item_left_main_top">
                                                @if(!empty($themes['domains-and-hosting']['last_topik']['prefix']))
                                                    <p class="forum--tag {{ $colors[$themes['domains-and-hosting']['last_topik']['prefix']] }}">{{ $themes['domains-and-hosting']['last_topik']['prefix'] }}</p>
                                                @endif
                                                <a href="{{ route('forum.board', [$themes['domains-and-hosting']['last_topik']['theme'], $themes['domains-and-hosting']['last_topik']['link']]) }}"
                                                   class="forum_main_links-group-item_main-last-info-title">{{ $themes['domains-and-hosting']['last_topik']['title'] }}</a>
                                            </div>
                                            <p class="forum_main_links-group-item_main-last-info-text">{{ date('d/m/Y', strtotime($themes['domains-and-hosting']['last_topik']['created_at'])) }}
                                                | <a
                                                    href="{{ route('user.correspondence.page', $themes['domains-and-hosting']['last_topik']['author']['id']) }}">{{ $themes['domains-and-hosting']['last_topik']['author']['name'] }}</a>
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            </li>
                            <li class="forum_main_cards_list--item">
                                <div class="forum_main_cards_list--item_left">
                                    <div class="forum_main_cards_list--item_left_icon">
                                        <svg width="34" height="20" viewBox="0 0 34 20" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M28.3929 12.8512C28.1247 11.5972 27.7338 9.98716 27.2109 8.3626C26.5523 6.31629 25.8166 4.66909 25.0242 3.4668C23.8632 1.70518 22.5232 0.812012 21.0414 0.812012C19.2369 0.812012 18.5401 1.5622 17.981 2.33059C17.8888 2.45736 17.8017 2.57709 17.7104 2.67829L17.6988 2.69118C17.5415 2.86304 17.3007 2.96165 17.0379 2.96165C16.7752 2.96158 16.5344 2.86303 16.3762 2.69025L16.3664 2.67942C16.2742 2.57716 16.1871 2.45743 16.0949 2.33072C15.5358 1.56234 14.8389 0.812144 13.0346 0.812144C11.5527 0.812144 10.2127 1.70537 9.05171 3.46693C8.25935 4.66922 7.52363 6.31643 6.86502 8.36273C6.34512 9.97813 5.95558 11.5795 5.6875 12.8303L28.3929 12.8512Z"
                                                fill="white"/>
                                            <path
                                                d="M30.2596 19.188L3.73688 19.1652C2.00773 19.1637 0.543739 18.0435 0.0440981 16.4974C-0.142902 15.9187 0.287809 15.3263 0.902133 15.3268L33.0995 15.3544C33.7136 15.3549 34.1432 15.9477 33.9556 16.5261C33.4541 18.0715 31.9886 19.1894 30.2596 19.188Z"
                                                fill="white"/>
                                        </svg>
                                    </div>
                                    <div class="forum_main_cards_list--item_left_main">
                                        <div class="forum_main_cards_list--item_left_main_top">
                                            <a href="{{ route('forum.threads', 'spy-services') }}"
                                               class="forum_main_cards_list--item_left_main_top-link">SPY Services</a>
                                        </div>
                                        <p class="forum_main_cards_list--item_left_main_bot-text">
                                            Topics: <span>{{ $themes['spy-services']['topik'] ?? 0 }}</span> | Messages:
                                            <span>{{ $themes['spy-services']['comments'] ?? 0 }}</span>
                                        </p>
                                    </div>
                                </div>
                                @if(!empty($themes['spy-services']['last_topik']))
                                    <div class="forum_main_cards_list--item_right">
                                        <div class="forum_main_links-group-item_main-last-avatar">
                                            @empty($themes['spy-services']['last_topik']['author']['photo'])
                                                <img loading="lazy" src="{{ asset('assets/images/card-pict.jpg') }}"
                                                     alt="avatar">
                                            @else
                                                <img loading="lazy"
                                                     src="{{ asset('storage/' . $themes['spy-services']['last_topik']['author']['photo']) }}"
                                                     alt="avatar">
                                            @endempty
                                        </div>
                                        <div class="forum_main_links-group-item_main-last-info">
                                            <div class="forum_main_cards_list--item_left_main_top">
                                                @if(!empty($themes['spy-services']['last_topik']['prefix']))
                                                    <p class="forum--tag {{ $colors[$themes['spy-services']['last_topik']['prefix']] }}">{{ $themes['spy-services']['last_topik']['prefix'] }}</p>
                                                @endif
                                                <a href="{{ route('forum.board', [$themes['spy-services']['last_topik']['theme'], $themes['spy-services']['last_topik']['link']]) }}"
                                                   class="forum_main_links-group-item_main-last-info-title">{{ $themes['spy-services']['last_topik']['title'] }}</a>
                                            </div>
                                            <p class="forum_main_links-group-item_main-last-info-text">{{ date('d/m/Y', strtotime($themes['spy-services']['last_topik']['created_at'])) }}
                                                | <a
                                                    href="{{ route('user.correspondence.page', $themes['spy-services']['last_topik']['author']['id']) }}">{{ $themes['spy-services']['last_topik']['author']['name'] }}</a>
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            </li>
                            <li class="forum_main_cards_list--item">
                                <div class="forum_main_cards_list--item_left">
                                    <div class="forum_main_cards_list--item_left_icon">
                                        <svg width="30" height="32" viewBox="0 0 30 32" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.8631 9.06088C11.9382 10.1436 13.1753 10.7365 14.0695 10.1214C14.8561 9.57988 15.9298 10.1439 15.9298 11.0996V15.0314H18.8754C18.3523 12.8953 20.0459 10.8143 22.2989 10.9698C24.2811 11.1072 25.7511 13.0159 25.2561 15.0314H28.2314C30.7211 11.2673 28.2138 5.82126 23.3623 5.57213C23.9108 2.67519 21.6771 0.00488281 18.7498 0.00488281C17.6924 0.00488281 16.7155 0.356383 15.9298 0.948508V6.81682C15.9298 7.77182 14.8569 8.33676 14.0694 7.79501C13.1126 7.13676 11.7801 7.86388 11.8631 9.06088Z"
                                                fill="white"/>
                                            <path
                                                d="M5.78076 15.0315C6.73595 15.0315 7.30076 16.1047 6.75882 16.8921C6.10364 17.8441 6.82301 19.1806 8.02507 19.0976C9.11032 19.0224 9.70026 17.7843 9.08589 16.8918C8.5442 16.1048 9.1087 15.0315 10.0641 15.0315H14.0592V12.1474C12.0391 12.6437 10.1341 11.1681 9.99695 9.19049C9.84139 6.94705 11.9138 5.24212 14.0592 5.76743V0.948554C10.6958 -1.5862 5.87757 1.30805 6.61564 5.51012C1.7352 5.76943 -0.734614 11.2272 1.77657 15.0315H5.78076Z"
                                                fill="white"/>
                                            <path
                                                d="M28.2077 16.9059H24.2159C23.2602 16.9059 22.696 15.8325 23.2377 15.0455C23.8525 14.1527 23.261 12.915 22.1769 12.8398C20.975 12.7563 20.2552 14.0929 20.9106 15.0453C21.4524 15.8327 20.888 16.9059 19.9326 16.9059H15.9375V19.7883C18.0768 19.2645 20.1557 20.9625 19.9998 23.2113C19.8625 25.1897 17.957 26.6641 15.9375 26.1683V31.0515C19.3009 33.5862 24.1191 30.692 23.3811 26.4899C28.1442 26.2367 30.7917 20.893 28.2077 16.9059Z"
                                                fill="white"/>
                                            <path
                                                d="M18.1254 23.0817C18.2083 21.8853 16.8759 21.1575 15.9191 21.816C15.1321 22.3572 14.0586 21.7936 14.0586 20.8378V16.906H11.1114C11.6216 18.9823 10.0402 20.9759 7.91775 20.9759C5.77532 20.9759 4.22813 18.9571 4.73069 16.906H1.77632C-0.733497 20.7098 1.7315 26.1766 6.62625 26.4279C6.07769 29.3249 8.31138 31.9952 11.2387 31.9952C12.2961 31.9952 13.273 31.6437 14.0587 31.0516V25.1206C14.0587 24.1658 15.1317 23.6006 15.9189 24.1424C16.8113 24.7566 18.0501 24.1667 18.1254 23.0817Z"
                                                fill="white"/>
                                        </svg>
                                    </div>
                                    <div class="forum_main_cards_list--item_left_main">
                                        <div class="forum_main_cards_list--item_left_main_top">
                                            <a href="{{ route('forum.threads', 'creatives') }}"
                                               class="forum_main_cards_list--item_left_main_top-link">Creatives</a>
                                        </div>
                                        <p class="forum_main_cards_list--item_left_main_bot-text">
                                            Topics: <span>{{ $themes['creatives']['topik'] ?? 0 }}</span> | Messages:
                                            <span>{{ $themes['creatives']['comments'] ?? 0 }}</span>
                                        </p>
                                    </div>
                                </div>
                                @if(!empty($themes['creatives']['last_topik']))
                                    <div class="forum_main_cards_list--item_right">
                                        <div class="forum_main_links-group-item_main-last-avatar">
                                            @empty($themes['creatives']['last_topik']['author']['photo'])
                                                <img loading="lazy" src="{{ asset('assets/images/card-pict.jpg') }}"
                                                     alt="avatar">
                                            @else
                                                <img loading="lazy"
                                                     src="{{ asset('storage/' . $themes['creatives']['last_topik']['author']['photo']) }}"
                                                     alt="avatar">
                                            @endempty
                                        </div>
                                        <div class="forum_main_links-group-item_main-last-info">
                                            <div class="forum_main_cards_list--item_left_main_top">
                                                @if(!empty($themes['creatives']['last_topik']['prefix']))
                                                    <p class="forum--tag {{ $colors[$themes['creatives']['last_topik']['prefix']] }}">{{ $themes['creatives']['last_topik']['prefix'] }}</p>
                                                @endif
                                                <a href="{{ route('forum.board', [$themes['creatives']['last_topik']['theme'], $themes['creatives']['last_topik']['link']]) }}"
                                                   class="forum_main_links-group-item_main-last-info-title">{{ $themes['creatives']['last_topik']['title'] }}</a>
                                            </div>
                                            <p class="forum_main_links-group-item_main-last-info-text">{{ date('d/m/Y', strtotime($themes['creatives']['last_topik']['created_at'])) }}
                                                | <a
                                                    href="{{ route('user.correspondence.page', $themes['creatives']['last_topik']['author']['id']) }}">{{ $themes['creatives']['last_topik']['author']['name'] }}</a>
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            </li>
                        </ul>
                    </div>

                    <div class="forum_main_cards">
                        <h2 class="forum_main_cards-title">The rest</h2>
                        <ul class="forum_main_cards_list">
                            <li class="forum_main_cards_list--item">
                                <div class="forum_main_cards_list--item_left">
                                    <div class="forum_main_cards_list--item_left_icon">
                                        <svg width="15" height="28" viewBox="0 0 15 28" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.93128 15.7542H14.0237L14.7938 10.6798H9.93128V7.39725C9.93128 6.00896 10.6109 4.6583 12.7886 4.6583H15V0.342892C13.7029 0.133143 12.392 0.0185359 11.078 0C7.08024 0 4.45435 2.42742 4.45435 6.82228V10.6798H0V15.7479H4.45435V28H9.92496L9.93128 15.7542Z"
                                                fill="white"/>
                                        </svg>
                                    </div>
                                    <div class="forum_main_cards_list--item_left_main">
                                        <div class="forum_main_cards_list--item_left_main_top">
                                            <a href="{{ route('forum.threads', 'jobs') }}"
                                               class="forum_main_cards_list--item_left_main_top-link">Jobs/Job</a>
                                        </div>
                                        <p class="forum_main_cards_list--item_left_main_bot-text">
                                            Topics: <span>{{ $themes['jobs']['topik'] ?? 0 }}</span> | Messages:
                                            <span>{{ $themes['jobs']['comments'] ?? 0 }}</span>
                                        </p>
                                    </div>
                                </div>
                                @if(!empty($themes['jobs']['last_topik']))
                                    <div class="forum_main_cards_list--item_right">
                                        <div class="forum_main_links-group-item_main-last-avatar">
                                            @empty($themes['jobs']['last_topik']['author']['photo'])
                                                <img loading="lazy" src="{{ asset('assets/images/card-pict.jpg') }}"
                                                     alt="avatar">
                                            @else
                                                <img loading="lazy"
                                                     src="{{ asset('storage/' . $themes['jobs']['last_topik']['author']['photo']) }}"
                                                     alt="avatar">
                                            @endempty
                                        </div>
                                        <div class="forum_main_links-group-item_main-last-info">
                                            <div class="forum_main_cards_list--item_left_main_top">
                                                @if(!empty($themes['jobs']['last_topik']['prefix']))
                                                    <p class="forum--tag {{ $colors[$themes['jobs']['last_topik']['prefix']] }}">{{ $themes['jobs']['last_topik']['prefix'] }}</p>
                                                @endif
                                                <a href="{{ route('forum.board', [$themes['jobs']['last_topik']['theme'], $themes['jobs']['last_topik']['link']]) }}"
                                                   class="forum_main_links-group-item_main-last-info-title">{{ $themes['jobs']['last_topik']['title'] }}</a>
                                            </div>
                                            <p class="forum_main_links-group-item_main-last-info-text">{{ date('d/m/Y', strtotime($themes['jobs']['last_topik']['created_at'])) }}
                                                | <a
                                                    href="{{ route('user.correspondence.page', $themes['jobs']['last_topik']['author']['id']) }}">{{ $themes['jobs']['last_topik']['author']['name'] }}</a>
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            </li>
                            <li class="forum_main_cards_list--item">
                                <div class="forum_main_cards_list--item_left">
                                    <div class="forum_main_cards_list--item_left_icon">
                                        <svg width="24" height="30" viewBox="0 0 24 30" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6 8.00008H18L18.0427 7.99608C18.2347 7.97208 19 7.82542 19 7.00008C19 3.50275 16.164 0.666748 12.6667 0.666748C12.2227 0.666748 11.7747 0.666748 11.3307 0.666748C9.652 0.666748 8.04133 1.33341 6.85467 2.52141C5.66667 3.70808 5 5.31875 5 6.99742C5 7.93742 6 8.00008 6 8.00008ZM16.884 6.00008H7.11733C7.3 5.22408 7.696 4.50808 8.268 3.93475C9.08 3.12275 10.1827 2.66675 11.3307 2.66675H12.6667C14.716 2.66675 16.432 4.08941 16.884 6.00008Z"
                                                fill="white"/>
                                            <path
                                                d="M22.4117 8.188C22.3357 6.95867 21.3157 6 20.0837 6C16.6851 6 7.31973 6 3.92106 6C2.68906 6 1.66906 6.95867 1.59306 8.188C1.35973 11.9133 0.671731 22.9213 0.426397 26.8547C0.386397 27.4973 0.613064 28.128 1.0544 28.5973C1.49573 29.0667 2.1104 29.3333 2.7544 29.3333H21.2504C21.8944 29.3333 22.5091 29.0667 22.9504 28.5973C23.3917 28.128 23.6184 27.4973 23.5784 26.8547L22.4117 8.188ZM15.6691 11.6667C15.6691 12.192 15.5024 12.6827 15.2157 13.1067C14.5757 14.0533 13.3691 14.6667 12.0024 14.6667C10.6357 14.6667 9.42906 14.0533 8.78906 13.1067C8.5024 12.6827 8.33573 12.192 8.33573 11.6667C8.33573 11.1147 7.88773 10.6667 7.33573 10.6667C6.78373 10.6667 6.33573 11.1147 6.33573 11.6667C6.33573 12.5987 6.62373 13.4733 7.13173 14.2267C8.10773 15.6707 9.91706 16.6667 12.0024 16.6667C14.0877 16.6667 15.8971 15.6707 16.8731 14.2267C17.3811 13.4733 17.6691 12.5987 17.6691 11.6667C17.6691 11.1147 17.2211 10.6667 16.6691 10.6667C16.1171 10.6667 15.6691 11.1147 15.6691 11.6667Z"
                                                fill="white"/>
                                        </svg>
                                    </div>
                                    <div class="forum_main_cards_list--item_left_main">
                                        <div class="forum_main_cards_list--item_left_main_top">
                                            <a href="{{ route('forum.threads', 'sell') }}"
                                               class="forum_main_cards_list--item_left_main_top-link">Buy/Sell</a>
                                        </div>
                                        <p class="forum_main_cards_list--item_left_main_bot-text">
                                            Topics: <span>{{ $themes['sell']['topik'] ?? 0 }}</span> | Messages:
                                            <span>{{ $themes['sell']['comments'] ?? 0 }}</span>
                                        </p>
                                    </div>
                                </div>
                                @if(!empty($themes['sell']['last_topik']))
                                    <div class="forum_main_cards_list--item_right">
                                        <div class="forum_main_links-group-item_main-last-avatar">
                                            @empty($themes['sell']['last_topik']['author']['photo'])
                                                <img loading="lazy" src="{{ asset('assets/images/card-pict.jpg') }}"
                                                     alt="avatar">
                                            @else
                                                <img loading="lazy"
                                                     src="{{ asset('storage/' . $themes['sell']['last_topik']['author']['photo']) }}"
                                                     alt="avatar">
                                            @endempty
                                        </div>
                                        <div class="forum_main_links-group-item_main-last-info">
                                            <div class="forum_main_cards_list--item_left_main_top">
                                                @if(!empty($themes['sell']['last_topik']['prefix']))
                                                    <p class="forum--tag {{ $colors[$themes['sell']['last_topik']['prefix']] }}">{{ $themes['sell']['last_topik']['prefix'] }}</p>
                                                @endif
                                                <a href="{{ route('forum.board', [$themes['sell']['last_topik']['theme'], $themes['sell']['last_topik']['link']]) }}"
                                                   class="forum_main_links-group-item_main-last-info-title">{{ $themes['sell']['last_topik']['title'] }}</a>
                                            </div>
                                            <p class="forum_main_links-group-item_main-last-info-text">{{ date('d/m/Y', strtotime($themes['sell']['last_topik']['created_at'])) }}
                                                | <a
                                                    href="{{ route('user.correspondence.page', $themes['sell']['last_topik']['author']['id']) }}">{{ $themes['sell']['last_topik']['author']['name'] }}</a>
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            </li>
                            <li class="forum_main_cards_list--item">
                                <div class="forum_main_cards_list--item_left">
                                    <div class="forum_main_cards_list--item_left_icon">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M25.7939 30.309C26.0683 30.309 26.339 30.4134 26.545 30.6123C27.8615 31.8836 29.7819 32.3069 31.4891 31.777C30.3904 29.4882 30.2381 26.8659 31.0895 24.4379C32.1462 21.4171 32.411 18.3893 31.2084 15.3526C30.152 12.685 28.1132 10.4687 25.533 9.20483C25.6918 10.0511 25.7718 10.9133 25.7718 11.7847C25.7718 15.4833 24.3496 18.962 21.7672 21.58C19.1846 24.1983 15.7226 25.6705 12.019 25.7255C11.331 25.7363 10.646 25.6958 9.96875 25.6066C12.0042 29.1743 15.8429 31.498 20.0612 31.5606C21.9065 31.5891 23.6783 31.2025 25.3284 30.4145C25.4769 30.3434 25.6361 30.309 25.7939 30.309Z"
                                                fill="white"/>
                                            <path
                                                d="M12.0473 0.00259536C5.47734 -0.12786 0.0158772 5.18715 3.56248e-05 11.7557C-0.00384556 13.3605 0.309422 14.9165 0.931204 16.3806C0.940234 16.4019 0.94863 16.4234 0.956234 16.4453C1.80764 18.8732 1.65548 21.4954 0.556709 23.7844C2.26404 24.314 4.18419 23.8909 5.50079 22.6195C5.82514 22.3062 6.31045 22.2273 6.71742 22.4218C8.36724 23.2098 10.1393 23.5976 11.9845 23.568C18.5031 23.4712 23.6092 18.2953 23.6091 11.7847C23.6092 5.41614 18.4225 0.130754 12.0473 0.00259536ZM5.50792 13.5447C4.564 13.5447 3.79877 12.7807 3.79877 11.8384C3.79877 10.8961 4.564 10.1321 5.50792 10.1321C6.45184 10.1321 7.21706 10.8961 7.21706 11.8384C7.21699 12.7807 6.45184 13.5447 5.50792 13.5447ZM11.8046 13.5447C10.8607 13.5447 10.0955 12.7807 10.0955 11.8384C10.0955 10.8961 10.8607 10.1321 11.8046 10.1321C12.7486 10.1321 13.5138 10.8961 13.5138 11.8384C13.5138 12.7807 12.7486 13.5447 11.8046 13.5447ZM18.1014 13.5447C17.1575 13.5447 16.3923 12.7807 16.3923 11.8384C16.3923 10.8961 17.1575 10.1321 18.1014 10.1321C19.0453 10.1321 19.8106 10.8961 19.8106 11.8384C19.8106 12.7807 19.0453 13.5447 18.1014 13.5447Z"
                                                fill="white"/>
                                        </svg>
                                    </div>
                                    <div class="forum_main_cards_list--item_left_main">
                                        <div class="forum_main_cards_list--item_left_main_top">
                                            <a href="{{ route('forum.threads', 'floodlight') }}"
                                               class="forum_main_cards_list--item_left_main_top-link">Floodlight</a>
                                        </div>
                                        <p class="forum_main_cards_list--item_left_main_bot-text">
                                            Topics: <span>{{ $themes['floodlight']['topik'] ?? 0 }}</span> | Messages:
                                            <span>{{ $themes['floodlight']['comments'] ?? 0 }}</span>
                                        </p>
                                    </div>
                                </div>
                                @if(!empty($themes['floodlight']['last_topik']))
                                    <div class="forum_main_cards_list--item_right">
                                        <div class="forum_main_links-group-item_main-last-avatar">
                                            @empty($themes['floodlight']['last_topik']['author']['photo'])
                                                <img loading="lazy" src="{{ asset('assets/images/card-pict.jpg') }}"
                                                     alt="avatar">
                                            @else
                                                <img loading="lazy"
                                                     src="{{ asset('storage/' . $themes['floodlight']['last_topik']['author']['photo']) }}"
                                                     alt="avatar">
                                            @endempty
                                        </div>
                                        <div class="forum_main_links-group-item_main-last-info">
                                            <div class="forum_main_cards_list--item_left_main_top">
                                                @if(!empty($themes['floodlight']['last_topik']['prefix']))
                                                    <p class="forum--tag {{ $colors[$themes['floodlight']['last_topik']['prefix']] }}">{{ $themes['floodlight']['last_topik']['prefix'] }}</p>
                                                @endif
                                                <a href="{{ route('forum.board', [$themes['floodlight']['last_topik']['theme'], $themes['floodlight']['last_topik']['link']]) }}"
                                                   class="forum_main_links-group-item_main-last-info-title">{{ $themes['floodlight']['last_topik']['title'] }}</a>
                                            </div>
                                            <p class="forum_main_links-group-item_main-last-info-text">{{ date('d/m/Y', strtotime($themes['floodlight']['last_topik']['created_at'])) }}
                                                | <a
                                                    href="{{ route('user.correspondence.page', $themes['floodlight']['last_topik']['author']['id']) }}">{{ $themes['floodlight']['last_topik']['author']['name'] }}</a>
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            </li>
                            <li class="forum_main_cards_list--item">
                                <div class="forum_main_cards_list--item_left">
                                    <div class="forum_main_cards_list--item_left_icon">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16 0C12.8355 0 9.74207 0.938384 7.11088 2.69649C4.4797 4.45459 2.42894 6.95345 1.21793 9.87707C0.00693258 12.8007 -0.309921 16.0177 0.307443 19.1214C0.924806 22.2251 2.44866 25.0761 4.6863 27.3137C6.92394 29.5514 9.77487 31.0752 12.8786 31.6926C15.9823 32.3099 19.1993 31.9931 22.1229 30.7821C25.0466 29.5711 27.5454 27.5203 29.3035 24.8891C31.0616 22.2579 32 19.1645 32 16C31.9952 11.758 30.308 7.6911 27.3085 4.69155C24.3089 1.692 20.242 0.00476422 16 0V0ZM9.33334 9.33333C10.3938 9.33453 11.4106 9.75634 12.1605 10.5062C12.9103 11.2561 13.3322 12.2728 13.3333 13.3333H10.6667C10.6667 12.9797 10.5262 12.6406 10.2761 12.3905C10.0261 12.1405 9.68696 12 9.33334 12C8.97972 12 8.64058 12.1405 8.39053 12.3905C8.14048 12.6406 8.00001 12.9797 8.00001 13.3333H5.33334C5.33453 12.2728 5.75634 11.2561 6.50623 10.5062C7.25612 9.75634 8.27284 9.33453 9.33334 9.33333ZM16 26.6667C13.879 26.6643 11.8456 25.8207 10.3458 24.3209C8.84601 22.8211 8.00239 20.7877 8.00001 18.6667C8.00001 18.313 8.14048 17.9739 8.39053 17.7239C8.64058 17.4738 8.97972 17.3333 9.33334 17.3333H22.6667C23.0203 17.3333 23.3594 17.4738 23.6095 17.7239C23.8595 17.9739 24 18.313 24 18.6667C23.9976 20.7877 23.154 22.8211 21.6542 24.3209C20.1545 25.8207 18.121 26.6643 16 26.6667ZM24 13.3333C24 12.9797 23.8595 12.6406 23.6095 12.3905C23.3594 12.1405 23.0203 12 22.6667 12C22.3131 12 21.9739 12.1405 21.7239 12.3905C21.4738 12.6406 21.3333 12.9797 21.3333 13.3333H18.6667C18.6667 12.2725 19.0881 11.2551 19.8382 10.5049C20.5884 9.75476 21.6058 9.33333 22.6667 9.33333C23.7275 9.33333 24.745 9.75476 25.4951 10.5049C26.2452 11.2551 26.6667 12.2725 26.6667 13.3333H24Z"
                                                fill="white"/>
                                        </svg>
                                    </div>
                                    <div class="forum_main_cards_list--item_left_main">
                                        <div class="forum_main_cards_list--item_left_main_top">
                                            <a href="{{ route('forum.threads', 'humor') }}"
                                               class="forum_main_cards_list--item_left_main_top-link">Humor</a>
                                        </div>
                                        <p class="forum_main_cards_list--item_left_main_bot-text">
                                            Topics: <span>{{ $themes['humor']['topik'] ?? 0 }}</span> | Messages:
                                            <span>{{ $themes['humor']['comments'] ?? 0 }}</span>
                                        </p>
                                    </div>
                                </div>
                                @if(!empty($themes['humor']['last_topik']))
                                    <div class="forum_main_cards_list--item_right">
                                        <div class="forum_main_links-group-item_main-last-avatar">
                                            @empty($themes['humor']['last_topik']['author']['photo'])
                                                <img loading="lazy" src="{{ asset('assets/images/card-pict.jpg') }}"
                                                     alt="avatar">
                                            @else
                                                <img loading="lazy"
                                                     src="{{ asset('storage/' . $themes['humor']['last_topik']['author']['photo']) }}"
                                                     alt="avatar">
                                            @endempty
                                        </div>
                                        <div class="forum_main_links-group-item_main-last-info">
                                            <div class="forum_main_cards_list--item_left_main_top">
                                                @if(!empty($themes['humor']['last_topik']['prefix']))
                                                    <p class="forum--tag {{ $colors[$themes['humor']['last_topik']['prefix']] }}">{{ $themes['humor']['last_topik']['prefix'] }}</p>
                                                @endif
                                                <a href="{{ route('forum.board', [$themes['humor']['last_topik']['theme'], $themes['humor']['last_topik']['link']]) }}"
                                                   class="forum_main_links-group-item_main-last-info-title">{{ $themes['humor']['last_topik']['title'] }}</a>
                                            </div>
                                            <p class="forum_main_links-group-item_main-last-info-text">{{ date('d/m/Y', strtotime($themes['humor']['last_topik']['created_at'])) }}
                                                | <a
                                                    href="{{ route('user.correspondence.page', $themes['humor']['last_topik']['author']['id']) }}">{{ $themes['humor']['last_topik']['author']['name'] }}</a>
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="forum_main_last-button">
                    <p class="forum_main_last-button--title">Send suggestions for improving the forum</p>
                    <a href="{{ url('mailto:affjournal.media@gmail.com') }}" class="btn--blue-to-white">Button</a>
                </div>
            </section>

            <aside class="filter-aside forum">
                <div class="forum_aside_stats">
                    <h4 class="forum_aside_stats--title">Forum stats</h4>
                    <ul class="forum_aside_stats_list">
                        <li class="forum_aside_stats--item">
                            <p class="forum_aside_stats--item-type">Themes:</p>
                            <p class="forum_aside_stats--item-value">{{ $statistic['themes'] }}</p>
                        </li>
                        <li class="forum_aside_stats--item">
                            <p class="forum_aside_stats--item-type">Messages:</p>
                            <p class="forum_aside_stats--item-value">{{ $statistic['comments'] }}</p>
                        </li>
                        <li class="forum_aside_stats--item">
                            <p class="forum_aside_stats--item-type">Users</p>
                            <p class="forum_aside_stats--item-value">{{ $statistic['users'] }}</p>
                        </li>
                        <li class="forum_aside_stats--item">
                            <p class="forum_aside_stats--item-type">New user</p>
                            <div class="forum_aside_stats--item-user-wrapper">
                                <a href="{{ route('user.correspondence.page', $statistic['new_user']->id) }}"
                                   class="forum_aside_stats--item-value">{{ $statistic['new_user']->name }}</a>

                                <div
                                    class="forum-user-preview_card black forum_main_card_list--item_right-user-preview">
                                    <div class="forum-user-preview_card_main">
                                        <div class="forum-user-preview_card_main_info">
                                            <div class="forum-user-preview_card_main_info-avatar">
                                                @empty($statistic['new_user']->photo)
                                                    <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}"
                                                         alt="avatar">
                                                @else
                                                    <img loading="lazy"
                                                         src="{{asset('storage/' . $statistic['new_user']->photo)}}"
                                                         alt="avatar">
                                                @endempty
                                            </div>
                                            <div class="forum-user-preview_card_main_info_right">
                                                <p class="forum-user-preview_card_main_info-name">{{ $statistic['new_user']->name }}</p>
                                                <div class="forum-user-preview_card_main_info_right-items">
                                                    <p class="forum-user-preview_card_main_info_right-items-item">
                                                        Registration:
                                                        <span>{{ date('d/m/Y', strtotime($statistic['new_user']->created_at)) }}</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="forum-user-preview_card_bott">
                                        <p class="forum-user-preview_card_bott-text">Messages:
                                            <span>{{ $statistic['new_user']->comments->count() }}</span></p>
                                        <p class="forum-user-preview_card_bott-text">Reactions: <span>9 476</span></p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="filter-aside-banner sticky">
                    <img loading="lazy" src="{{asset('assets/images/filter-bunner.png')}}" alt="bunner">
                </div>
            </aside>
        </div>
    </section>

    <section class="breadcrambs bot">
        <div class="container">
            <ul class="breadcrambs_list">
                <li class="breadcrambs_list-item">
                    <a href="{{ route('index') }}">Homepage</a>
                </li>
                <li class="breadcrambs_list-item">
                    <a href="{{ route('forum') }}">Forum</a>
                </li>
            </ul>
        </div>
    </section>
@endsection

