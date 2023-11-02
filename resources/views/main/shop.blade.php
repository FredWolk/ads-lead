@extends('layouts.main')
@section('seo')
    @if(!empty($seo))
        <title>{{ $seo["title"] }}</title>
        <meta name="description" content="{{ $seo["description"] }}">
        <meta name="keywords" content="{{ $seo["keywords"] }}"/>
        <meta property="og:title" content="{{ $seo["og_title"] }}"/>
        <meta property="og:description" content="{{ $seo["og_description"] }}"/>
        <meta property="og:url" content="{{ url()->current() }}"/>
    @endif
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
                    Shop
                </li>
            </ul>
        </div>
    </section>
    <section class="articlespage">
        <div class="container">
            @empty($seo)
                <h1 class="title">Shop</h1>
            @else
                <h1 class="title">{{ $seo["{$locale}h1"] }}</h1>
                <p class="articlespage-text">{{ $seo["{$locale}after_h1_text"] }}</p>
            @endempty
            <div class="shop_body">
                @foreach($category as $cat)
                    <div class="shop_block hide">
                        <svg class="shop_block-arrow" width="16" height="16" viewBox="0 0 16 16" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M6.78009 6.28775L2.97679 10.091L0.855469 7.96973L8.28009 0.545105L15.7047 7.96973L13.5834 10.091L9.78009 6.28775L9.78009 15.3943L6.78009 15.3943L6.78009 6.28775Z"
                                  fill="#014EFF"/>
                        </svg>
                        <h3 class="shop_block-title">{{ $cat->name }}:</h3>
                        <p class="shop_block-description">{{ $cat->description }}</p>
                        <ul class="shop_block-list">
                            @foreach($cat->shops as $shop)
                                <li class="shop_block-item">
                                    <a class="shop_block-item-link" href="{{ $shop->link }}">
                                        <img class="shop_block-item-img" src="{{ asset('storage/'.$shop->image) }}"
                                             alt="">
                                        <div class="shop_block-item-info">
                                            <svg class="shop_block-item-arrow" width="15" height="15"
                                                 viewBox="0 0 15 15"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M8.37879 4.5H3.00011V1.5H13.5001V12H10.5001V6.62132L4.06077 13.0607L1.93945 10.9393L8.37879 4.5Z"
                                                      fill="#272C31"/>
                                            </svg>
                                            <h4 class="shop_block-item-title">{{ $shop->name }}</h4>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
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
                    Shop
                </li>
            </ul>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        $('.shop_block').on('click', function () {
            $(this).toggleClass('hide');
        })
    </script>
@endsection
