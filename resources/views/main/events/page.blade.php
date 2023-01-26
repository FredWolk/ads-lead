@extends('layouts.main')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/fonts-style.css') }}">
@endsection
@section('content')
    <section class="breadcrambs top">
        <div class="container">
            <ul class="breadcrambs_list">
                <li class="breadcrambs_list-item">
                    <a href="{{ route('index') }}">Homepage</a>
                </li>
                <li class="breadcrambs_list-item">
                    <a href="{{ route('events') }}">{{ $event["${locale}name"] }}</a>
                </li>
            </ul>
        </div>
    </section>
    <section class="videopage articlepage eventpage">
        <div class="container">
            <div class="articlepage_top">
                <div class="eventpage_top">
                    <h1 class="title">{{ $event["${locale}name"] }}</h1>
                    <p class="conference--evetn">{{ $event['type'] }}</p>
                </div>
            </div>
            <div class="videopage_wrapper">
                <article class="videopage_main">
                    <div class="videopage_main--image">
                        <img src="{{asset('storage/' . $event["{$locale}image"])}}" alt="banner">
                        <p class="conference--evetn">conference</p>
                    </div>
                    <div class="eventpage_card">
                        <div class="eventpage_card--item">
                            <p class="eventpage_card--item-title">Date</p>
                            <p class="eventpage_card--item-text">{{ $event["{$locale}form_date"] }}</p>
                        </div>
                        <div class="eventpage_card-line"></div>
                        <div class="eventpage_card--item">
                            <p class="eventpage_card--item-title">Location</p>
                            <p class="eventpage_card--item-text">{{ $event["{$locale}form_location"] }}</p>
                        </div>
                        <div class="eventpage_card-line"></div>
                        <div class="eventpage_card--item">
                            @php
                                if (!empty($event['form_social']))
                                    $arr = explode('||', $event['form_social'])
                            @endphp
                            <p class="eventpage_card--item-title">social media</p>
                            <div class="eventpage_card--item_links">
                                @if(!empty($arr))
                                    @foreach($arr as $i)
                                        @php($link = explode('$$', $i))
                                        <a class="eventpage_card--item--link" target="_blank"
                                           href="{{ $link[1] }}">{{ $link[0] }}</a>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="eventpage_card-line"></div>
                        <div class="eventpage_card--item">
                            <p class="eventpage_card--item-title">website</p>
                            <a class="eventpage_card--item--link" target="_blank"
                               href="{{ $event['form_site'] }}">{{ substr($event['form_site'], 8) }}</a>
                        </div>
                    </div>
                    <div class="videopage_main--text main__article"
                         style="margin-bottom: 20px">{!! $event["{$locale}content"] !!}</div>
                    <div class="filter-aside-banner to-show">
                        <img src="{{asset('assets/images/filter-bunner.png')}}" alt="bunner">
                    </div>
                </article>
                <aside class="filter-aside">
                    @if(!empty($banner))
                        <aside class="filter-aside">
                            <div class="filter-aside-banner sticky">
                                <a target="_blank" href="{{ $banner->link }}">
                                    @if($banner->type == 'image')
                                        <img src="{{asset('storage/'. $banner->file)}}" alt="bunner">
                                    @else
                                        <video src="{{ asset('storage/'. $banner->file) }}" autoplay loop muted></video>
                                    @endif
                                </a>
                            </div>
                        </aside>
                    @endif
                </aside>
            </div>
        </div>
    </section>
    @if(!empty($more_events))
        <aside class="main-video aside-other-wideos">
            <div class="container">
                <h3 class="aside-other-wideos-title">Related Events</h3>

                <div class="swiper">
                    <ul class="swiper-wrapper">
                        @foreach($more_events as $ev)
                            <li class="eventpage_asidecard swiper-slide">
                                <a class="eventpage_asidecard--link" href="{{ route('index') }}"></a>
                                <div class="eventpage_asidecard_main">
                                    <div class="eventpage_asidecard_main_left">
                                        <img src="{{asset('storage/'. $ev["{$locale}image"])}}" alt="banner">
                                    </div>
                                    <div class="eventpage_asidecard_main_left_info">
                                        <p class="eventpage_asidecard_main_left_info-date">{{ $ev["{$locale}date"] }}</p>
                                        <h4 class="eventpage_asidecard_main_left_info-title">{{ $ev["{$locale}name"] }}</h4>
                                    </div>

                                    <div class="eventpage_asidecard_main-icon">
                                        <img src="{{asset('assets/images/card-pict.jpg')}}" alt="banner">
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>

                    <button type="button" class="swiper-button-prev swiper-button arrow--btn left">
                        <img class="arrow--btn-black" src="{{asset('assets/images/icons/arrow-right-black.svg')}}"
                             alt="arrow">
                        <img class="arrow--btn-blue" src="{{asset('assets/images/icons/arrow-right-blue.svg')}}"
                             alt="blue">
                    </button>
                    <button type="button" class="swiper-button-next swiper-button arrow--btn">
                        <img class="arrow--btn-black" src="{{asset('assets/images/icons/arrow-right-black.svg')}}"
                             alt="arrow">
                        <img class="arrow--btn-blue" src="{{asset('assets/images/icons/arrow-right-blue.svg')}}"
                             alt="blue">
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
    @endif
    <section class="breadcrambs bot">
        <div class="container">
            <ul class="breadcrambs_list">
                <li class="breadcrambs_list-item">
                    <a href="{{ route('index') }}">Homepage</a>
                </li>
                <li class="breadcrambs_list-item">
                    <a href="{{ route('events') }}">SBC Summit Latinoamérica</a>
                </li>
            </ul>
        </div>
    </section>
@endsection
