@extends('layouts.main')
@if(!empty($seo))
    @section('seo')
        <title>{{ $seo["title"] }}</title>
        <meta name="description" content="{{ $seo["description"] }}">
        <meta name="keywords" content="{{ $seo["keywords"] }}"/>
        <meta property="og:title" content="{{ $seo["og_title"] }}"/>
        <meta property="og:description" content="{{ $seo["og_description"] }}"/>
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
                    {{ !empty($seo) ? $seo["h1"] : __('messages.articles') }}
                </li>
            </ul>
        </div>
    </section>

    <section class="articlespage">
        <div class="container">
            @empty($seo)
                <h1 class="title">{{ __('messages.articles') }}</h1>
            @else
                <h1 class="title">{{ $seo["h1"] }}</h1>
                <p class="articlespage-text">{{ $seo["after_h1_text"] }}</p>
            @endempty

            <ul class="vacancies_main">
                @foreach($vacancies as $v)
                    <li class="vacancies_card">
                        @if($v->is_top)
                            <svg width="76" height="31" viewBox="0 0 76 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="76" height="31" rx="15.5" fill="url(#paint0_linear_2581_14462)"/>
                                <g clip-path="url(#clip0_2581_14462)">
                                    <path d="M19.453 22.5C16.5846 20.8834 15.8294 19.3532 16.2612 17.2634C16.5799 15.7202 17.6236 14.4647 17.7237 12.9245C18.1696 13.7359 18.3558 14.3209 18.4057 15.1688C19.8237 13.4314 20.7607 11.0264 20.8162 8.5C20.8162 8.5 24.5096 10.6701 24.7519 13.9481C25.0699 13.2724 25.2299 12.1994 24.912 11.5039C25.8658 12.1994 31.4487 18.3737 24.1558 22.5C25.5269 19.8302 24.5095 16.2279 22.1288 14.5641C22.2878 15.2795 22.0091 17.9477 20.9558 19.1201C21.2477 17.1611 20.6782 16.3328 20.6782 16.3328C20.6782 16.3328 20.4827 17.4301 19.7243 18.5385C19.0318 19.5507 18.5519 20.6251 19.453 22.5Z" fill="white"/>
                                </g>
                                <path d="M36.88 20V13.484H34.3V11.6H41.824V13.484H39.256V20H36.88ZM46.828 20.168C46.156 20.168 45.536 20.06 44.968 19.844C44.4 19.628 43.904 19.324 43.48 18.932C43.064 18.532 42.74 18.068 42.508 17.54C42.276 17.012 42.16 16.432 42.16 15.8C42.16 15.168 42.276 14.588 42.508 14.06C42.74 13.532 43.064 13.072 43.48 12.68C43.904 12.28 44.4 11.972 44.968 11.756C45.536 11.54 46.156 11.432 46.828 11.432C47.508 11.432 48.128 11.54 48.688 11.756C49.256 11.972 49.748 12.28 50.164 12.68C50.58 13.072 50.904 13.532 51.136 14.06C51.376 14.588 51.496 15.168 51.496 15.8C51.496 16.432 51.376 17.016 51.136 17.552C50.904 18.08 50.58 18.54 50.164 18.932C49.748 19.324 49.256 19.628 48.688 19.844C48.128 20.06 47.508 20.168 46.828 20.168ZM46.828 18.2C47.148 18.2 47.444 18.144 47.716 18.032C47.996 17.92 48.236 17.76 48.436 17.552C48.644 17.336 48.804 17.08 48.916 16.784C49.036 16.488 49.096 16.16 49.096 15.8C49.096 15.432 49.036 15.104 48.916 14.816C48.804 14.52 48.644 14.268 48.436 14.06C48.236 13.844 47.996 13.68 47.716 13.568C47.444 13.456 47.148 13.4 46.828 13.4C46.508 13.4 46.208 13.456 45.928 13.568C45.656 13.68 45.416 13.844 45.208 14.06C45.008 14.268 44.848 14.52 44.728 14.816C44.616 15.104 44.56 15.432 44.56 15.8C44.56 16.16 44.616 16.488 44.728 16.784C44.848 17.08 45.008 17.336 45.208 17.552C45.416 17.76 45.656 17.92 45.928 18.032C46.208 18.144 46.508 18.2 46.828 18.2ZM52.7404 20V11.6H56.5804C57.3484 11.6 58.0084 11.724 58.5604 11.972C59.1204 12.22 59.5524 12.58 59.8564 13.052C60.1604 13.516 60.3124 14.068 60.3124 14.708C60.3124 15.34 60.1604 15.888 59.8564 16.352C59.5524 16.816 59.1204 17.176 58.5604 17.432C58.0084 17.68 57.3484 17.804 56.5804 17.804H54.0604L55.1164 16.772V20H52.7404ZM55.1164 17.024L54.0604 15.932H56.4364C56.9324 15.932 57.3004 15.824 57.5404 15.608C57.7884 15.392 57.9124 15.092 57.9124 14.708C57.9124 14.316 57.7884 14.012 57.5404 13.796C57.3004 13.58 56.9324 13.472 56.4364 13.472H54.0604L55.1164 12.38V17.024Z" fill="white"/>
                                <defs>
                                    <linearGradient id="paint0_linear_2581_14462" x1="3" y1="7" x2="72.9256" y2="17.56" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#001AEB"/>
                                        <stop offset="1" stop-color="#007FF0"/>
                                    </linearGradient>
                                    <clipPath id="clip0_2581_14462">
                                        <rect width="14" height="14" fill="white" transform="translate(15 8.5)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        @endif
                        <div class="vacancies_card-main">
                            <h3 class="vacancies_main-title">{{ $v->name }}</h3>
                            <p class="vacancies_main-firma">{{ $v->firma }}</p>
                            <div class="vacancies_hr"></div>
                            <div class="vacancies_main-block">
                                <div class="vacancies_block-info">
                                    <p class="vacancies_block-title">DATE</p>
                                    <p class="vacancies_block-text">{{ date('d/m/Y', strtotime($v->created_at)) }}</p>
                                </div>
                                <div class="vacancies_block-info">
                                    <p class="vacancies_block-title">LOCATION</p>
                                    <p class="vacancies_block-text">{{ $v->location }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="vacancies_card-more">
                            <div class="vacancies_more-info">
                                <p class="vacancies_info-title">SALARY</p>
                                <p class="vacancies_info-text">from ${{$v->salary}}</p>
                            </div>
                            <a class="btn--blue header_buttons-blue-btn" href="{{ route('vacancies.page', $v->link) }}">
                                <span>show more</span>
                                <img loading="lazy" src="http://localhost/assets/images/icons/arrow-right-white.svg" alt="arrow">
                            </a>
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="pagination">
                {{ $vacancies->onEachSide(1)->links() }}
            </div>
            @if(!empty($seo) && empty($_GET['page']))
                <aside class="articles_seo-text">
                    <div class="articles_seo-text--text">{!! $seo["seo_text"] !!}</div>
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
                    {{ !empty($seo) ? $seo["h1"] : __('messages.articles') }}
                </li>
            </ul>
        </div>
    </section>
@endsection
