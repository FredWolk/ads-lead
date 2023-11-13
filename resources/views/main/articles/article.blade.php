@extends('layouts.main')
@section('seo')
    <title>{{ $article["{$locale}title"] }}</title>
    <meta name="description" content="{{ $article["{$locale}description"] }}">
    <meta name="keywords" content="{{ $article["{$locale}keywords"] }}"/>
    <meta property="og:title" content="{{ $article["{$locale}og_title"] }}"/>
    <meta property="og:description" content="{{ $article["{$locale}og_description"] }}"/>
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
                    <a href="{{ route('articles') }}">{{ __('messages.articles') }}</a>
                </li>
                <li class="breadcrambs_list-item">
                    {{ $article["{$locale}name"] }}
                </li>
            </ul>
        </div>
    </section>
    <section class="videopage articlepage">
        <div class="container">
            <div class="articlepage_top">
                <h1 class="title">{{ $article["{$locale}name"] }}</h1>
                <div class="videopage_main-underimage_autor to-show">
                    <div class="videopage_main-underimage_autor-image">
                        <img loading="lazy" src="{{asset('storage/'. $article['author']['photo'])}}" alt="autor">
                    </div>
                    <p class="videopage_main-underimage_autor-link">by
                        <a href="{{ route('article.author', $article['author']['link']) }}">{{ $article['author']['name'] }}</a>
                    </p>
                </div>
                <div class="articlepage_bot">
                    <div class="articlepage_bot_item">
                        <p class="articlepage--date">Date written:<span
                                class="articlepage--date-text-value">{{ date('d/m/Y', strtotime($article['created_at'])) }}</span>
                        </p>
                    </div>
                    <div class="articlepage_bot_item">
                        <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.9987 1.79167C8.07129 1.7881 9.12312 2.08729 10.0333 2.65484C10.9434 3.22239 11.6749 4.03526 12.1437 5C11.6755 5.96517 10.9441 6.77843 10.0338 7.34606C9.12356 7.91368 8.07144 8.21259 6.9987 8.20833C5.92596 8.21259 4.87384 7.91368 3.96357 7.34606C3.0533 6.77843 2.32192 5.96517 1.8537 5C2.32247 4.03526 3.05398 3.22239 3.96413 2.65484C4.87427 2.08729 5.9261 1.7881 6.9987 1.79167ZM6.9987 0.625C4.08203 0.625 1.5912 2.43917 0.582031 5C1.5912 7.56083 4.08203 9.375 6.9987 9.375C9.91536 9.375 12.4062 7.56083 13.4154 5C12.4062 2.43917 9.91536 0.625 6.9987 0.625ZM6.9987 3.54167C7.38547 3.54167 7.7564 3.69531 8.02989 3.9688C8.30339 4.24229 8.45703 4.61323 8.45703 5C8.45703 5.38677 8.30339 5.75771 8.02989 6.0312C7.7564 6.30469 7.38547 6.45833 6.9987 6.45833C6.61192 6.45833 6.24099 6.30469 5.9675 6.0312C5.69401 5.75771 5.54036 5.38677 5.54036 5C5.54036 4.61323 5.69401 4.24229 5.9675 3.9688C6.24099 3.69531 6.61192 3.54167 6.9987 3.54167ZM6.9987 2.375C5.55203 2.375 4.3737 3.55333 4.3737 5C4.3737 6.44667 5.55203 7.625 6.9987 7.625C8.44536 7.625 9.6237 6.44667 9.6237 5C9.6237 3.55333 8.44536 2.375 6.9987 2.375Z"
                                fill="#181A1C"/>
                        </svg>
                        <span class="articlepage--date-text-value">{{ $article['views'] }}</span>
                    </div>
                </div>
            </div>
            <div class="videopage_wrapper">
                <article class="videopage_main">
                    <div class="videopage_main--image">
                        <img loading="lazy" src="{{asset('storage/' . $article["{$locale}image"])}}" alt="banner">
                    </div>
                    <div class="videopage_main-underimage">
                        <div class="videopage_main-underimage_autor to-hide">
                            <div class="videopage_main-underimage_autor-image">
                                <img loading="lazy" src="{{asset('storage/'. $article['author']['photo'])}}"
                                     alt="autor">
                            </div>
                            <p class="videopage_main-underimage_autor-link">by <a
                                    href="{{ route('article.author', $article['author']['link']) }}">{{ $article['author']['name'] }}</a></p>
                        </div>

                        <ul class="cpapage_info--item_main_top-list cpapage_info--item_main_top-list-articlepage">
                            @if(!empty($article['tags']))
                                @foreach($article['tags'] as $tag)
                                    <li class="article--card_info_tags-list-item mobhide">
                                        <a href="{{ !empty($tagArr[$tag]) ? route('article.tag', $tagArr[$tag]) : '#' }}" class="article--card_info_tags-list-item--link">#{{ $tag }}</a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    <div class="article__menu--prev">
                        <p class="article__menu--prev-text">View the table of contents</p>
                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2443_22702)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M6.00079 10.2425L2.19749 6.43923L0.0761718 8.56055L7.50079 15.9852L14.9254 8.56055L12.8041 6.43923L9.00079 10.2425L9.00079 1.13593L6.00079 1.13593L6.00079 10.2425Z"
                                      fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_2443_22702">
                                    <rect width="16" height="15" fill="white"
                                          transform="matrix(-4.37114e-08 1 1 4.37114e-08 0 0)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="articlepage_menu active">
                        @if(!empty($article["{$locale}contents"]))
                            <div class="articlepage_menu--item">
                                <p class="articlepage_menu--item-title">{{ __('messages.сontent') }}</p>
                                <ul class="articlepage_menu--item_list">
                                    @foreach($article["{$locale}contents"] as $k => $v)
                                        <li class="articlepage_menu--item_list-item">
                                            <a class="contents_link" href="">{{ $k+1 . '. ' . $v }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(!empty($article["{$locale}contents"]))
                            <div class="articlepage_menu--item">
                                <p class="articlepage_menu--item-title">{{ __('messages.who') }}</p>
                                <ul class="articlepage_menu--item_list">
                                    @foreach($article["{$locale}for_whom"] as $k => $v)
                                        <li class="articlepage_menu--item_list-item">
                                            {{ $k+1 . '. ' . $v }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <svg class="article__menu-arrow" width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2443_22714)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M8.99921 5.75747L12.8025 9.56077L14.9238 7.43945L7.49921 0.0148326L0.0745858 7.43945L2.19591 9.56077L5.99921 5.75747L5.99921 14.8641L8.99921 14.8641L8.99921 5.75747Z"
                                      fill="#181A1C"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_2443_22714">
                                    <rect width="16" height="15" fill="white"
                                          transform="matrix(-4.37114e-08 -1 -1 4.37114e-08 15 16)"/>
                                </clipPath>
                            </defs>
                        </svg>

                    </div>
                    <div class="videopage_main--text main__article" style="margin-bottom: 43px">
                        {!! $article["{$locale}main_text"] !!}
                    </div>
                    <div class="videopage_main-underimage change">
                        <div class="videopage_main-underimage_autor to-hide">
                            <div class="videopage_main-underimage_autor-image">
                                <img loading="lazy" src="{{asset('storage/'. $article['author']['photo'])}}"
                                     alt="autor">
                            </div>
                            <p class="videopage_main-underimage_autor-link">by <a
                                    href="{{ route('article.author', $article['author']['link']) }}">{{ $article['author']['name'] }}</a></p>
                        </div>
                        <ul class="cpapage_info--item_main_top-list cpapage_info--item_main_top-list-articlepage">
                            @if(!empty($article['tags']))
                                @foreach($article['tags'] as $tag)
                                    <li class="article--card_info_tags-list-item mobhide">
                                        <a href="{{ !empty($tagArr[$tag]) ? route('article.tag', $tagArr[$tag]) : '#' }}" class="article--card_info_tags-list-item--link">#{{ $tag }}</a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    <div class="articlepage__links">
                        <div class="articlepage__links-item">
                            <p class="articlepage__links-item-title">{{ __('messages.subscribe') }}</p>
                            <ul class="articlepage__links-item_list">
                                <li class="articlepage__links-item_list-item">
                                    <a class="articlepage__links-item_list-item--link" target="_blank"
                                       href="{{ \Illuminate\Support\Facades\App::getLocale() === 'en' ? 'https://instagram.com/affjournal?igshid=YmMyMTA2M2Y=' : 'https://instagram.com/affjournal_br?igshid=YmMyMTA2M2Y=' }}">instagram</a>
                                </li>
                                <li class="articlepage__links-item_list-item">
                                    <a class="articlepage__links-item_list-item--link" target="_blank"
                                       href="{{ \Illuminate\Support\Facades\App::getLocale() === 'en' ? 'https://t.me/affjournal_eng' : 'https://t.me/affiliatejournal' }}">telegram</a>
                                </li>
                                <li class="articlepage__links-item_list-item">
                                    <a class="articlepage__links-item_list-item--link" target="_blank"
                                       href="{{ \Illuminate\Support\Facades\App::getLocale() === 'en' ? 'https://www.facebook.com/profile.php?id=100089855863483' : 'https://www.facebook.com/profile.php?id=100089869573266' }}">facebook</a>
                                </li>
                                <li class="articlepage__links-item_list-item">
                                    <a class="articlepage__links-item_list-item--link" target="_blank"
                                       href="https://www.linkedin.com/in/affjournal-eng-b23466265/recent-activity/">linkedin</a>
                                </li>
                            </ul>
                        </div>
                        <div class="articlepage__links-line"></div>
                        <div class="articlepage__links-item">
                            <p class="articlepage__links-item-title">{{ __('messages.share') }}</p>
                            <ul class="articlepage__links-item_list">
                                <li class="articlepage__links-item_list-item">
                                    <a class="articlepage__links-item_list-item--link" target="_blank"
                                       href="https://t.me/share/url?url={{ url()->current() }}">telegram</a>
                                </li>
                                @if(false)
                                    <li class="articlepage__links-item_list-item">
                                        <a class="articlepage__links-item_list-item--link" href="{{ route('index') }}">facebook</a>
                                    </li>
                                    <li class="articlepage__links-item_list-item">
                                        <a class="articlepage__links-item_list-item--link" href="{{ route('index') }}">twitter</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="articlepage--comments">
                        <h2 class="videopage--comments-title">comments ....<span>({{ !empty($article->comments) ? $article->comments->count() : '0' }})</span>
                        </h2>
                        <div class="articlepage--comments_main">
                            @empty($article->comments)
                                <p class="articlepage--comments-none">Be the first to comment</p>
                            @else
                                @foreach($article->comments as $comment)
                                    <ul class="articlepage--comments_main_list">
                                        <li class="articlepage--comments_main_list-item">
                                            <div class="articlepage--review-integration_autor">
                                                <div class="videopage_main-underimage_autor-image">
                                                    @if(!empty($comment->author->photo))
                                                        <img loading="lazy"
                                                             src="{{ asset('storage/'. $comment->author->photo)}}"
                                                             alt="autor">
                                                    @else
                                                        <img loading="lazy"
                                                             src="{{ asset('assets/images/card-pict.jpg')}}"
                                                             alt="autor">
                                                    @endif
                                                </div>
                                                <div class="articlepage--review-integration_autor-text-wrapp">
                                                    <p class="articlepage--review-integration_autor-text-wrapp-name">{{ $comment->author->name }}</p>
                                                    <p class="articlepage--review-integration_autor-text-wrapp-company">{{ date('d.m.Y', strtotime($comment->created_at)) }}</p>
                                                </div>
                                            </div>
                                            <p class="articlepage--comments_main_list-item-text">{{ $comment->text }}</p>
                                        </li>
                                    </ul>
                                @endforeach
                            @endempty
                        </div>
                        <h2 class="videopage--comments-title">Leave a comment</h2>
                        <div class="articlepage--comments_main">
                            @auth
                                <p id="comment__text" style="font-size: 16px; color: #00a87d"></p>
                                <form id="comment_send" class="articlepage--comments_main-form">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $article['id'] }}">
                                    <textarea id="comment" required minlength="1" placeholder="Leave a comment here"
                                              class="input-textarea" name="comment"></textarea>
                                    <button class="btn--blue header_buttons-blue-btn">
                                        <span>Send</span>
                                        <img loading="lazy" src="{{asset('assets/images/icons/arrow-right-white.svg')}}"
                                             alt="arrow">
                                    </button>
                                </form>
                            @else
                                <p class="articlepage--comments-none">You must be
                                    <button class="login--btn" type="button">login</button>
                                    in to leave a comment
                                </p>
                            @endauth
                        </div>
                    </div>
                </article>
                <aside style="height: 100%" class="filter-aside--sticky">
                    @if(!empty($banner))
                        <div class="filter-aside-banner sticky">
                            <a data-type="aside_banner" class="banner_check" target="_blank" href="{{ $banner->link }}">
                                @if($banner->type == 'image')
                                    <img loading="lazy" src="{{asset('storage/'. $banner->file)}}" alt="bunner">
                                @else
                                    <video src="{{ asset('storage/'. $banner->file) }}" autoplay loop muted></video>
                                @endif
                            </a>
                        </div>
                    @endif
                </aside>
            </div>
        </div>
    </section>
    <aside class="main-video aside-other-wideos">
        <div class="container">
            <h3 class="aside-other-wideos-title">Related article</h3>
            <div class="swiper">
                <ul class="swiper-wrapper">
                    @foreach($moreArticle as $i)
                        <li class="article--card swiper-slide">
                            <a class="article--card-link" href="{{ route('article', $i['link']) }}"></a>
                            <img loading="lazy" src="{{asset('storage/' . $i['image'])}}" alt="banner">
                            <div class="article--card_info">
                                <p class="article--card_info-date">{{ date('d/m/Y', strtotime($i['created_at'])) }}</p>
                                <h3 class="article--card_info-title">{{ $i["{$locale}name"] }}</h3>
                            </div>
                            @if(date('d.m.Y', strtotime(' -2 day ')) > date('d.m.Y', strtotime($i['created_at'])))
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
                    <a href="{{ route('articles') }}">{{ __('messages.articles') }}</a>
                </li>
                <li class="breadcrambs_list-item">
                    {{ $article["{$locale}name"] }}
                </li>
            </ul>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        var headers = $('.videopage_main--text')[0].children;
        let iterator = 1;
        for (let e of headers) {
            if (e.nodeName === 'H2') {
                e.setAttribute('id', iterator++);
            }
        }
        let i = 1;
        for (let a of $('.articlepage_menu--item_list-item a')) {
            a.setAttribute('href', `#${i++}`);
        }

        $('.contents_link').on('click', function (e) {
            var link = this.getAttribute('href');
            $('html, body').animate({
                scrollTop: $(link).offset().top - 100
            }, 1000);
        })

        $('.article__menu--prev').on('click', function () {
            $(this).slideUp(300);
            $('.articlepage_menu').removeClass('active')
        })
        $('.article__menu-arrow').on('click', function () {
            $('.article__menu--prev').slideDown(300);
            $('.articlepage_menu').addClass('active')
        })

        $('#comment_send').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                url: '{{ route('article.comment') }}',
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
