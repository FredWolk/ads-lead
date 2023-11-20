@extends('layouts.main')
@section('seo')
    <title>{{ $tag->title }}</title>
    <meta name="description" content="{{ $tag->description }}">
    <meta name="keywords" content="{{ $tag->keywords }}"/>
    <meta property="og:title" content="{{ $tag->og_title }}"/>
    <meta property="og:description" content="{{ $tag->og_description }}"/>
    <meta property="og:url" content="{{ url()->current() }}"/>
@endsection
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
                    <a href="{{ route('articles') }}">Articles</a>
                </li>
                <li class="breadcrambs_list-item">
                    {{ $tag->name }}
                </li>
            </ul>
        </div>
    </section>

    <section class="articlespage">
        <div class="container">
            <h1 class="title">{{ $tag->name }}</h1>

            <ul class="main_articles_info">
                @foreach($articles as $article)
                    @continue(empty($article["image"]) && empty($article["name"]))
                    <li class="article--card">
                        <a class="article--card-link" href="{{ route('article', $article['link']) }}"></a>
                        <img loading="lazy" src="{{asset('storage/' . $article["image"])}}" alt="banner">
                        <div class="article--card_info">
                            <p class="article--card_info-date">{{ date('d/m/Y', strtotime($article['created_at'])) }}</p>
                            <ul class="article--card_info_tags-list">
                                @if(!empty($article['tags']))
                                    @foreach($article['tags'] as $t)
                                        <li class="article--card_info_tags-list-item mobhide">
                                            <a href="{{ !empty($tagArr[$t]) ? route('article.tag', $tagArr[$t]) : '#' }}" class="article--card_info_tags-list-item--link">#{{ $t }}</a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                            <h2 class="article--card_info-title">{{ $article["name"] }}</h2>
                            <p class="article--card_info-author">by <a
                                    href="{{ route('article.author', $article['author']['link']) }}">{{ $article['author']['name'] }}</a>
                            </p>

                            <div class="article--card_info-views">
                                <svg width="14" height="9" viewBox="0 0 14 9" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.99967 1.29167C8.07227 1.2881 9.1241 1.58729 10.0342 2.15484C10.9444 2.72239 11.6759 3.53526 12.1447 4.5C11.6765 5.46517 10.9451 6.27843 10.0348 6.84606C9.12453 7.41368 8.07242 7.71259 6.99967 7.70833C5.92693 7.71259 4.87481 7.41368 3.96454 6.84606C3.05427 6.27843 2.3229 5.46517 1.85467 4.5C2.32345 3.53526 3.05496 2.72239 3.9651 2.15484C4.87525 1.58729 5.92708 1.2881 6.99967 1.29167V1.29167ZM6.99967 0.125C4.08301 0.125 1.59217 1.93917 0.583008 4.5C1.59217 7.06083 4.08301 8.875 6.99967 8.875C9.91634 8.875 12.4072 7.06083 13.4163 4.5C12.4072 1.93917 9.91634 0.125 6.99967 0.125ZM6.99967 3.04167C7.38645 3.04167 7.75738 3.19531 8.03087 3.4688C8.30436 3.74229 8.45801 4.11323 8.45801 4.5C8.45801 4.88677 8.30436 5.25771 8.03087 5.5312C7.75738 5.80469 7.38645 5.95833 6.99967 5.95833C6.6129 5.95833 6.24197 5.80469 5.96848 5.5312C5.69499 5.25771 5.54134 4.88677 5.54134 4.5C5.54134 4.11323 5.69499 3.74229 5.96848 3.4688C6.24197 3.19531 6.6129 3.04167 6.99967 3.04167V3.04167ZM6.99967 1.875C5.55301 1.875 4.37467 3.05333 4.37467 4.5C4.37467 5.94667 5.55301 7.125 6.99967 7.125C8.44634 7.125 9.62467 5.94667 9.62467 4.5C9.62467 3.05333 8.44634 1.875 6.99967 1.875Z"
                                        fill="#181A1C"/>
                                </svg>
                                <span>{{ $article['views'] }}</span>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="pagination">
                {{ $articles->onEachSide(1)->links() }}
            </div>
            @if(!empty($tag->seo_text) && empty($_GET['page']))
                <aside class="articles_seo-text">
                    <div class="articles_seo-text--text">{!! $tag->seo_text !!}</div>
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
                    <a href="{{ route('articles') }}">Articles</a>
                </li>
                <li class="breadcrambs_list-item">
                    {{ $tag->name }}
                </li>
            </ul>
        </div>
    </section>
@endsection
