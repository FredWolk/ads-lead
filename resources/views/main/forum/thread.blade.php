@extends('layouts.main')

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
                <li class="breadcrambs_list-item">
                    <p>{{ $link }}</p>
                </li>
            </ul>
        </div>
    </section>

    <section class="cpapage cpa-catalog-page forum threads">
        <div class="container">
            <section class="cpapage_main">
                <div class="forum_treads_top">
                    <h1 class="forum_treads_top-title">{{ $link }}</h1>

                    <div class="cpapage_main-to-show">
                        <form action="/" method="GET">
                            <ul class="filter-aside_list">
                                <li class="filter-aside_list-item">
                                    <button type="button" class="filter-aside--btn">
                                        <p class="filter-aside--btn-text">TAGS (random)</p>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.9971 3.09753H11.0031V11.003H3.09761V12.997H11.0031V20.9025H12.9971V12.997H20.9026V11.003H12.9971V3.09753Z"
                                                fill="#181A1C"/>
                                        </svg>
                                    </button>
                                    <div class="filter-aside_list-item_wrapper">
                                        <ul class="filter-aside_list-item_wrap_list">
                                            @foreach (array_values($arrTags) as $key => $value)
                                                @if($key < 20)
                                                    <li class="filter-aside_list-item_wrap_list-item">
                                                        <a class="filter-aside_label-text"
                                                           href="{{ route('forum.filter', $value) }}">#{{ $value }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>

                <div class="filter-aside-banner to-show">
                    <img loading="lazy" src="{{asset('assets/images/filter-bunner.png')}}" alt="bunner">
                </div>

                <ul class="forum_treads_list">
                    @foreach($threads as $thread)
                        <li class="forum_treads_list--item">
                            <div class="forum_treads_list--item_left">
                                <div class="forum_treads_list--item_left-avatar">
                                    @empty($thread['author']['photo'])
                                        <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="avatar">
                                    @else
                                        <img loading="lazy" src="{{asset('storage/'.$thread['author']['photo'])}}"
                                             alt="avatar">
                                    @endempty
                                </div>
                                <div class="forum_treads_list--item_left_info">
                                    <div class="forum_treads_list--item_left_info_top">
                                        @if(!empty($thread['prefix']))
                                            <p class="forum--tag {{ !empty($thread['prefix']) ? $colors[$thread['prefix']] : '' }}">{{ $thread['prefix'] }}</p>
                                        @endif
                                        <a href="{{ route('forum.board', [$thread['theme'], $thread['link']]) }}"
                                           class="forum_main_card_list--item_left-head-title">{{ $thread['title'] }}</a>
                                    </div>
                                    <div class="forum_treads_list--item_left_info_bottom">
                                        <a href="{{ route('index') }}"
                                           class="forum_treads_list--item_left_info_bottom-name">{{ $thread['author']['name'] }}</a>
                                        <div
                                            class="forum-user-preview_card forum_main_card_list--item_right-user-preview">
                                            <div class="forum-user-preview_card_main">
                                                <div class="forum-user-preview_card_main_info">
                                                    <div class="forum-user-preview_card_main_info-avatar">
                                                        @empty($thread['author']['photo'])
                                                            <img loading="lazy"
                                                                 src="{{asset('assets/images/card-pict.jpg')}}"
                                                                 alt="avatar">
                                                        @else
                                                            <img loading="lazy"
                                                                 src="{{asset('storage/'.$thread['author']['photo'])}}"
                                                                 alt="avatar">
                                                        @endempty
                                                    </div>
                                                    <div class="forum-user-preview_card_main_info_right">
                                                        <p class="forum-user-preview_card_main_info-name">{{ $thread['author']['name'] }}</p>
                                                        <div class="forum-user-preview_card_main_info_right-items">
                                                            <p class="forum-user-preview_card_main_info_right-items-item">
                                                                Registration:
                                                                <span>{{ date('d/m/Y', strtotime($thread['author']['created_at'])) }}</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if(false)
                                                    <button type="button" class="user_card-main-example-btn"
                                                            style="background: #F9A826;">Elf 80 lvl
                                                    </button>
                                                @endif
                                            </div>
                                            <div class="forum-user-preview_card_bott">
                                                <p class="forum-user-preview_card_bott-text">Messages:
                                                    <span>{{ $thread['author']['comments_count'] }}</span>
                                                </p>
                                                <p class="forum-user-preview_card_bott-text">Reactions:
                                                    <span>9 476</span>
                                                </p>
                                            </div>
                                        </div>

                                        <p class="forum_treads_list--item_left_info_bottom-date">
                                            | {{ date('d/m/Y', strtotime($thread['created_at'])) }}</p>
                                        @if(false)
                                            <button data-author="{{ $thread['author']['id'] }}"
                                                    class="trackThread forum_treads_list--item_left_info_bottom-tracking"
                                                    type="button">
                                                <svg class="svg1" width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_752_21272)">
                                                        <path
                                                            d="M11.0807 3.73913L10.2582 2.91663L6.9974 6.17746L3.73656 2.91663L2.91406 3.73913L6.1749 6.99996L2.91406 10.2608L3.73656 11.0833L6.9974 7.82246L10.2582 11.0833L11.0807 10.2608L7.8199 6.99996L11.0807 3.73913Z"
                                                            fill="#F7FAFF"/>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_752_21272">
                                                            <rect width="14" height="14" fill="white"/>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <svg class="svg2" width="11" height="12" viewBox="0 0 11 12" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.50521 10.2854L4.84063 9.68042C2.48021 7.54 0.921875 6.12375 0.921875 4.39583C0.921875 2.97958 2.03104 1.875 3.44271 1.875C4.24021 1.875 5.00563 2.24625 5.50521 2.82833C6.00479 2.24625 6.77021 1.875 7.56771 1.875C8.97937 1.875 10.0885 2.97958 10.0885 4.39583C10.0885 6.12375 8.53021 7.54 6.16979 9.68042L5.50521 10.2854Z"
                                                        fill="#181A1C"/>
                                                </svg>
                                                <span>Tracking</span>
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="forum_treads_list--item_mid">
                                <p class="forum_treads_list--item_mid-text">Answers:
                                    <span>{{ $thread['comments_count'] }}</span></p>
                                <p class="forum_treads_list--item_mid-text">Viewings:
                                    <span>{{ $thread['views'] }}</span></p>
                            </div>
                            <div class="forum_treads_list--item_right">
                                <div class="forum_treads_list--item_right_info">
                                    <p class="forum_treads_list--item_right_info-date">{{ date('d/m/Y', strtotime($thread->author->created_at)) }}</p>
                                    <a href="{{ route('index') }}"
                                       class="forum_treads_list--item_right_info-name">{{ $thread->author->name }}</a>

                                    <div class="forum-user-preview_card forum_main_card_list--item_right-user-preview">
                                        <div class="forum-user-preview_card_main">
                                            <div class="forum-user-preview_card_main_info">
                                                <div class="forum-user-preview_card_main_info-avatar">
                                                    @empty($thread['author']['photo'])
                                                        <img loading="lazy"
                                                             src="{{asset('assets/images/card-pict.jpg')}}"
                                                             alt="avatar">
                                                    @else
                                                        <img loading="lazy"
                                                             src="{{asset('storage/'.$thread['author']['photo'])}}"
                                                             alt="avatar">
                                                    @endempty
                                                </div>
                                                <div class="forum-user-preview_card_main_info_right">
                                                    <p class="forum-user-preview_card_main_info-name">{{ $thread->author->name }}</p>
                                                    <div class="forum-user-preview_card_main_info_right-items">
                                                        <p class="forum-user-preview_card_main_info_right-items-item">
                                                            Registration:
                                                            <span>{{ date('d/m/Y', strtotime($thread->author->created_at)) }}</span>
                                                        </p>
                                                        @if(false)
                                                            <p class="forum-user-preview_card_main_info_right-items-item">
                                                                Last activity: <span>Today at 12:15 p.m.</span>
                                                            </p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="forum-user-preview_card_bott">
                                            <p class="forum-user-preview_card_bott-text">Messages:
                                                <span>{{ $thread->author->comments->count() }}</span>
                                            </p>
                                            <p class="forum-user-preview_card_bott-text">Reactions: <span>9 476</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="forum_treads_list--item_right-avatar">
                                    @empty($thread['author']['photo'])
                                        <img loading="lazy"
                                             src="{{asset('assets/images/card-pict.jpg')}}"
                                             alt="avatar">
                                    @else
                                        <img loading="lazy"
                                             src="{{asset('storage/'.$thread['author']['photo'])}}"
                                             alt="avatar">
                                    @endempty
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <div style="margin-top: 40px;" class="pagination">
                    {{ $threads->onEachSide(1)->links() }}
                </div>
            </section>

            <aside class="filter-aside forum threads">
                <form action="/" method="GET">
                    <ul class="filter-aside_list">
                        <li class="filter-aside_list-item">
                            <button type="button" class="filter-aside--btn">
                                <p class="filter-aside--btn-text">TAGS (random)</p>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.9971 3.09753H11.0031V11.003H3.09761V12.997H11.0031V20.9025H12.9971V12.997H20.9026V11.003H12.9971V3.09753Z"
                                        fill="#181A1C"/>
                                </svg>
                            </button>
                            <div class="filter-aside_list-item_wrapper">
                                <ul class="filter-aside_list-item_wrap_list">
                                    @foreach (array_values($arrTags) as $key => $value)
                                        @if($key < 20)
                                            <li class="filter-aside_list-item_wrap_list-item">
                                                <a class="filter-aside_label-text"
                                                   href="{{ route('forum.filter', $value) }}">#{{ $value }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                    </ul>
                </form>
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
                <li class="breadcrambs_list-item">
                    <p>{{ $link }}</p>
                </li>
            </ul>
        </div>
    </section>
@endsection
