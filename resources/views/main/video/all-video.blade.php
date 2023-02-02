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
@section('content')
    <section class="breadcrambs top">
        <div class="container">
            <ul class="breadcrambs_list">
                <li class="breadcrambs_list-item">
                    <a href="{{ route('index') }}">Homepage</a>
                </li>
                <li class="breadcrambs_list-item">
                    <a href="{{ route('video') }}">{{ !empty($seo) ? $seo["{$locale}h1"] : __('messages.video') }}</a>
                </li>
            </ul>
        </div>
    </section>

    <section class="allvideopage articlespage">
        <div class="container">
            <div class="allvideopage_top">
                <div class="allvideopage_top-left">
                    @empty($seo)
                        <h1 class="title">{{ __('messages.video') }}</h1>
                    @else
                        <h1 class="title">{{ $seo["{$locale}h1"] }}</h1>
                        <p class="articlespage-text">{{ $seo["{$locale}after_h1_text"] }}</p>
                    @endempty
                </div>

                <div class="main_articles_top_link-wrapp">
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
                    <a class="btn--red" href="{{ route('index') }}">
                        <span>{{ __('messages.youtube') }}</span>
                        <img src="{{asset('assets/images/icons/youtube.svg')}}" alt="youtube">
                    </a>
                </div>
            </div>

            <ul class="main_articles_info">
                @foreach ($video as $k => $i)
                    <li class="article--card">
                        <a class="article--card-link" href="{{ route('video.page', $i['link']) }}"></a>
                        <img src="{{asset('storage/'.$i["{$locale}image"])}}" alt="banner">
                        <div class="article--card_info">
                            <p class="article--card_info-date">{{ date('d/m/Y', strtotime($i['created_at'])) }}</p>
                            <h3 class="article--card_info-title">{{ $i["{$locale}name"] }}</h3>
                        </div>
                        @if($k == 0)
                            <div class="article--card-top main-video--card-top">
                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M7.74588 0.83398C7.34828 0.388673 6.65161 0.388674 6.25401 0.833981L5.594 1.57319C5.37062 1.82337 5.03669 1.94491 4.70476 1.89685L3.724 1.75483C3.13319 1.66928 2.59951 2.11709 2.58117 2.71378L2.55072 3.7043C2.54041 4.03954 2.36274 4.34729 2.07756 4.52383L1.23497 5.04545C0.72739 5.35969 0.606415 6.04577 0.975915 6.51466L1.58928 7.29301C1.79688 7.55644 1.85858 7.9064 1.75361 8.22494L1.44344 9.16613C1.25659 9.73312 1.60493 10.3365 2.18937 10.4581L3.15955 10.6601C3.48791 10.7285 3.76013 10.9569 3.88447 11.2684L4.25186 12.1888C4.47318 12.7432 5.12783 12.9815 5.65376 12.699L6.52679 12.2301C6.82227 12.0714 7.17763 12.0714 7.4731 12.2301L8.34614 12.699C8.87206 12.9815 9.52672 12.7432 9.74804 12.1888L10.1154 11.2684C10.2398 10.9569 10.512 10.7285 10.8403 10.6601L11.8105 10.4581C12.395 10.3365 12.7433 9.73312 12.5565 9.16614L12.2463 8.22494C12.1413 7.9064 12.203 7.55644 12.4106 7.293L13.024 6.51466C13.3935 6.04577 13.2725 5.35969 12.7649 5.04545L11.9223 4.52383C11.6372 4.34729 11.4595 4.03954 11.4492 3.7043L11.4187 2.71378C11.4004 2.11709 10.8667 1.66928 10.2759 1.75483L9.29514 1.89685C8.9632 1.94491 8.62928 1.82337 8.4059 1.57319L7.74588 0.83398ZM6.12527 4.01082L6.42217 7.58175H7.63388L7.93882 4.01082H6.12527ZM6.37403 9.45147C6.54522 9.61731 6.76456 9.70023 7.03204 9.70023C7.29953 9.70023 7.51619 9.61731 7.68203 9.45147C7.85322 9.28563 7.93882 9.08769 7.93882 8.85765C7.93882 8.62227 7.85322 8.427 7.68203 8.27186C7.51619 8.11137 7.29953 8.03112 7.03204 8.03112C6.76456 8.03112 6.54522 8.11137 6.37403 8.27186C6.20284 8.427 6.11724 8.62227 6.11724 8.85765C6.11724 9.08769 6.20284 9.28563 6.37403 9.45147Z"
                                          fill="white"/>
                                </svg>
                                <p>NEW</p>
                            </div>
                        @endif
                    </li>
                @endforeach
            </ul>
            <div class="pagination">
                {{ $video->links() }}
            </div>
            @if(!empty($seo))
                <aside class="articles_seo-text">
                    <h3 class="articles_seo-text--title">seo text</h3>
                    <div class="articles_seo-text--text">{!! $seo["{$locale}seo_text"] !!}</div>
                    <button type="button" class="link--black-rotateble-arrows readmore--btn">
                        <span>read more</span>
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
                    </button>
                </aside>
            @endif
        </div>
    </section>

    <section class="breadcrambs bot">
        <div class="container">
            <ul class="breadcrambs_list">
                <li class="breadcrambs_list-item">
                    <a href="{{ route('index') }}">Homepage</a>
                </li>
                <li class="breadcrambs_list-item">
                    <a href="{{ route('video') }}">{{ __('messages.video') }}</a>
                </li>
            </ul>
        </div>
    </section>
@endsection
