@extends('layouts.main')
@section('seo')
    <title>{{ $video["{$locale}title"] }}</title>
    <meta name="description" content="{{ $video["{$locale}description"] }}">
    <meta name="keywords" content="{{ $video["{$locale}keywords"] }}"/>
    <meta property="og:title" content="{{ $video["{$locale}og_title"] }}"/>
    <meta property="og:description" content="{{ $video["{$locale}og_description"] }}"/>
    <meta property="og:url" content="{{ url()->current() }}"/>
@endsection
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
                    <a href="{{ route('video') }}">{{ __('messages.video') }}</a>
                </li>
                <li class="breadcrambs_list-item">
                    {{ $video["{$locale}name"] }}
                </li>
            </ul>
        </div>
    </section>
    <section class="videopage">
        <div class="container">
            <h1 class="title">{{ $video["{$locale}name"] }}</h1>
            <div class="videopage_wrapper">
                <article class="videopage_main">
                    <iframe width="902px" height="512" src="https://www.youtube.com/embed/{{$video['video']}}"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    <ul class="cpapage_info--item_main_top-list">
                        @if(!empty($video['tags']))
                            @foreach($video['tags'] as $tag)
                                <li class="article--card_info_tags-list-item mobhide">
                                    <p class="article--card_info_tags-list-item--link">#{{ $tag }}</p>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                    <div class="videopage_main--text main__article">{!! $video["{$locale}content"] !!}</div>
                    <div class="filter-aside-banner to-show">
                        <img loading="lazy" src="{{asset('storage/'.$video["{$locale}image"])}}" alt="bunner">
                    </div>

                    <div class="videopage--comments">
                        <h2 class="videopage--comments-title">{{ __('messages.comments') }}</h2>
                        <p class="videopage--comments-text">
                            {{ __('messages.comments.text') }} —
                            <a href="{{ route('index') }}">affjournal</a>
                        </p>
                    </div>
                </article>
                @if(!empty($banner))
                    <aside class="filter-aside">
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
            </div>
        </div>
    </section>
    @if(!empty($moreVideo))
        <aside class="main-video aside-other-wideos">
            <div class="container">
                <h3 class="aside-other-wideos-title">{{ __('messages.other.videos') }}</h3>

                <div class="swiper">
                    <ul class="swiper-wrapper">
                        @foreach ($moreVideo as $video)
                            <li class="article--card swiper-slide">
                                <a class="article--card-link" href="{{ route('video.page', $i['link']) }}"></a>
                                <img loading="lazy" src="{{asset('storage/'.$i["{$locale}image"])}}" alt="banner">
                                <div class="article--card_info">
                                    <p class="article--card_info-date">{{ date('d/m/Y', strtotime($i['created_at'])) }}</p>
                                    <h3 class="article--card_info-title">{{ $i["{$locale}name"] }}</h3>
                                </div>
                            </li>
                        @endforeach
                    </ul>

                    <button type="button" class="swiper-button-prev swiper-button arrow--btn left">
                        <img loading="lazy" class="arrow--btn-black" src="{{asset('assets/images/icons/arrow-right-black.svg')}}"
                             alt="arrow">
                        <img loading="lazy" class="arrow--btn-blue" src="{{asset('assets/images/icons/arrow-right-blue.svg')}}"
                             alt="blue">
                    </button>
                    <button type="button" class="swiper-button-next swiper-button arrow--btn">
                        <img loading="lazy" class="arrow--btn-black" src="{{asset('assets/images/icons/arrow-right-black.svg')}}"
                             alt="arrow">
                        <img loading="lazy" class="arrow--btn-blue" src="{{asset('assets/images/icons/arrow-right-blue.svg')}}"
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
                    <a href="{{ route('video') }}">{{ __('messages.video') }}</a>
                </li>
                <li class="breadcrambs_list-item">
                    {{ $video["{$locale}name"] }}
                </li>
            </ul>
        </div>
    </section>
@endsection
