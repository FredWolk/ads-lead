@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/summernote/summernote-bs4.min.css') }}">
@endsection

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
                    <a href="{{ route('forum.threads', $thread->theme) }}">{{ $thread->theme }}</a>
                </li>
                <li class="breadcrambs_list-item">
                    <p>{{ $thread->title }}</p>
                </li>
            </ul>
        </div>
    </section>

    <section class="articlespage forumpage">
        <div class="container">
            <h1 class="forumpage-board--title">{{ $thread->title }}</h1>
            <div class="forumpage-board_top">
                <div class="forumpage-board_top_left">
                    <div class="forumpage-board_top_left_first">
                        <div class="forumpage-board_top_left_first-avatar">
                            @empty($thread->author->photo)
                                <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="avatar">
                            @else
                                <img loading="lazy" src="{{asset('storage/' . $thread->author->photo)}}" alt="avatar">
                            @endempty
                        </div>
                        <a href="{{ route('index') }}"
                           class="forumpage-board_top_left_first-name">{{ $thread->author->name }}</a>

                        <div class="forum-user-preview_card forum_main_card_list--item_right-user-preview">
                            <div class="forum-user-preview_card_main">
                                <div class="forum-user-preview_card_main_info">
                                    <div class="forum-user-preview_card_main_info-avatar">
                                        @empty($thread->author->photo)
                                            <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}"
                                                 alt="avatar">
                                        @else
                                            <img loading="lazy" src="{{asset('storage/' . $thread->author->photo)}}"
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="forum-user-preview_card_bott">
                                <p class="forum-user-preview_card_bott-text">Messages:
                                    <span>{{ $thread->author->comments->count() }}</span></p>
                                <p class="forum-user-preview_card_bott-text">Reactions: <span>9 476</span></p>
                            </div>
                        </div>
                    </div>
                    <ul style="margin: 0;" class="article--card_info_tags-list">
                        @if(!empty($thread->tags))
                            @foreach($thread->tags as $tag)
                                <li class="article--card_info_tags-list-item mobhide">
                                    <p class="article--card_info_tags-list-item--link">#{{ $tag }}</p>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                <div class="forumpage-board_top-right">
                    <div class="articlepage_bot_item">
                        <p class="articlepage--date">Date written:<span
                                class="articlepage--date-text-value">{{ date('d/m/Y', strtotime($thread->created_at)) }}</span>
                        </p>
                    </div>
                    <div class="articlepage_bot_item">
                        <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.9987 1.79167C8.07129 1.7881 9.12312 2.08729 10.0333 2.65484C10.9434 3.22239 11.6749 4.03526 12.1437 5C11.6755 5.96517 10.9441 6.77843 10.0338 7.34606C9.12356 7.91368 8.07144 8.21259 6.9987 8.20833C5.92596 8.21259 4.87384 7.91368 3.96357 7.34606C3.0533 6.77843 2.32192 5.96517 1.8537 5C2.32247 4.03526 3.05398 3.22239 3.96413 2.65484C4.87427 2.08729 5.9261 1.7881 6.9987 1.79167ZM6.9987 0.625C4.08203 0.625 1.5912 2.43917 0.582031 5C1.5912 7.56083 4.08203 9.375 6.9987 9.375C9.91536 9.375 12.4062 7.56083 13.4154 5C12.4062 2.43917 9.91536 0.625 6.9987 0.625ZM6.9987 3.54167C7.38547 3.54167 7.7564 3.69531 8.02989 3.9688C8.30339 4.24229 8.45703 4.61323 8.45703 5C8.45703 5.38677 8.30339 5.75771 8.02989 6.0312C7.7564 6.30469 7.38547 6.45833 6.9987 6.45833C6.61192 6.45833 6.24099 6.30469 5.9675 6.0312C5.69401 5.75771 5.54036 5.38677 5.54036 5C5.54036 4.61323 5.69401 4.24229 5.9675 3.9688C6.24099 3.69531 6.61192 3.54167 6.9987 3.54167ZM6.9987 2.375C5.55203 2.375 4.3737 3.55333 4.3737 5C4.3737 6.44667 5.55203 7.625 6.9987 7.625C8.44536 7.625 9.6237 6.44667 9.6237 5C9.6237 3.55333 8.44536 2.375 6.9987 2.375Z"
                                fill="#181A1C"/>
                        </svg>
                        <span class="articlepage--date-text-value">{{ $thread->views }}</span>
                    </div>
                </div>
            </div>
            <div class="forumpage-board_top-pagin-wrapp">
                <div class="forumpage-board_top-pagin-wrapp-right">
                    @auth()
                        <button class="forum_treads_list--item_left_info_bottom-tracking" type="button">
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
                    @endauth

                    @if($thread->user_id === \Illuminate\Support\Facades\Auth::id())
                        <button type="button" class="forumpage-board_top-pagin-wrapp-right-more--btn">
                            <svg width="40" height="24" viewBox="0 0 40 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="2" fill="#014EFF"/>
                                <circle cx="20" cy="12" r="2" fill="#014EFF"/>
                                <circle cx="28" cy="12" r="2" fill="#014EFF"/>
                                <rect x="0.5" y="0.5" width="39" height="23" rx="11.5" stroke="#014EFF"/>
                            </svg>

                            <div class="forumpage-board_top-pagin-wrapp-right-more--body">
                                <div class="forumpage-board_top-pagin-wrapp-right-more--body-top">
                                    <p class="forumpage-board_top-pagin-wrapp-right-more--body-top-text">More</p>
                                </div>
                                <div class="forumpage-board_top-pagin-wrapp-right-more--body-bot">
                                    <a href="{{ route('index') }}"
                                       class="forumpage-board_top-pagin-wrapp-right-more--body-link">Edit Topic</a>
                                    <a href="{{ route('index') }}"
                                       class="forumpage-board_top-pagin-wrapp-right-more--body-link">Delete the
                                        topic</a>
                                </div>
                            </div>
                        </button>
                    @endif
                </div>
            </div>

            <div class="forumpage-board--main-list-wrapper">
                <div class="user-main-corpage_top">
                    <div class="user-main-corpage_top_left">
                        <div class="user-main-corpage_top_left-wrapper">
                            <div class="header--notif-body--item-icon-wrapper">
                                <div class="user-main-corpage_top_left-icon">
                                    @empty($thread->author->photo)
                                        <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}"
                                             alt="avatar">
                                    @else
                                        <img loading="lazy" src="{{asset('storage/' . $thread->author->photo)}}"
                                             alt="avatar">
                                    @endempty
                                </div>
                                <div
                                    class="header--notif-body--item-icon-online"></div> {{-- CCOM для отсутствия в онлайне - класс grey --}}
                            </div>
                            <div class="user-main-corpage_top_left-name-wrapper">
                                <a href="{{ route('index') }}"
                                   class="user-main-corpage_top_left-name">{{ $thread->author->name }}</a>

                                <div class="forum-user-preview_card forum_main_card_list--item_right-user-preview">
                                    <div class="forum-user-preview_card_main">
                                        <div class="forum-user-preview_card_main_info">
                                            <div class="forum-user-preview_card_main_info-avatar">
                                                @empty($thread->author->photo)
                                                    <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}"
                                                         alt="avatar">
                                                @else
                                                    <img loading="lazy"
                                                         src="{{asset('storage/' . $thread->author->photo)}}"
                                                         alt="avatar">
                                                @endempty
                                            </div>
                                            <div class="forum-user-preview_card_main_info_right">
                                                <p class="forum-user-preview_card_main_info-name">Wade Warren</p>
                                                <div class="forum-user-preview_card_main_info_right-items">
                                                    <p class="forum-user-preview_card_main_info_right-items-item">
                                                        Registration: <span>21 Oct. 2022</span>
                                                    </p>
                                                    <p class="forum-user-preview_card_main_info_right-items-item">
                                                        Last activity: <span>Today at 12:15 p.m.</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="user_card-main-example-btn"
                                                style="background: #F9A826;">Elf 80 lvl
                                        </button>
                                    </div>
                                    <div class="forum-user-preview_card_bott">
                                        <p class="forum-user-preview_card_bott-text">Messages: <span>9 476</span></p>
                                        <p class="forum-user-preview_card_bott-text">Reactions: <span>9 476</span></p>
                                        <p class="forum-user-preview_card_bott-text">Trophies: <span>9 476</span></p>
                                    </div>
                                </div>
                            </div>
                            <button style="background: #F9A826;"
                                    {{-- CCOM цвет можешь выводить сюда, на главной value цветов внутри чекбоксов --}}
                                    type="button" class="user_card-main-example-btn">Elf 80 lvl
                            </button>
                        </div>
                        <ul class="user-main_trophies_list">
                            @for ($a=0; $a<3; $a++)
                                <li class="user-main_trophies--item active">
                                    <div class="user-main_trophies--item-main">
                                        <div class="user-main_trophies--item-main-image">
                                            <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}"
                                                 alt="avatar">
                                        </div>
                                    </div>

                                    <button type="button"
                                            class="user_card--toltip--btn user-main_trophies--item-toolti-btn">
                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="9.5" cy="9.5" r="9.5" fill="#014EFF"/>
                                            <path
                                                d="M9.0298 10.5597C9.0298 10.3329 9.06394 10.1319 9.13222 9.95694C9.2067 9.78194 9.29671 9.62639 9.40223 9.49028C9.51397 9.35417 9.63191 9.22778 9.75605 9.11111C9.8802 8.99444 9.99503 8.88426 10.1006 8.78056C10.2123 8.67037 10.3023 8.55694 10.3706 8.44028C10.4451 8.32361 10.4823 8.19398 10.4823 8.05139C10.4823 7.81806 10.3892 7.63009 10.203 7.4875C10.023 7.34491 9.78088 7.27361 9.47672 7.27361C9.18498 7.27361 8.92427 7.33843 8.6946 7.46806C8.46493 7.5912 8.27561 7.7662 8.12663 7.99306L7 7.30278C7.24829 6.90741 7.5928 6.59306 8.03352 6.35972C8.47424 6.11991 9.00807 6 9.63501 6C10.1006 6 10.5102 6.0713 10.8641 6.21389C11.2179 6.35 11.4941 6.55093 11.6927 6.81667C11.8976 7.08241 12 7.40972 12 7.79861C12 8.05139 11.9628 8.275 11.8883 8.46944C11.8138 8.66389 11.7176 8.83241 11.5996 8.975C11.4817 9.11759 11.3544 9.25046 11.2179 9.37361C11.0875 9.49676 10.9634 9.61667 10.8454 9.73333C10.7275 9.85 10.6282 9.97315 10.5475 10.1028C10.473 10.2324 10.4358 10.3847 10.4358 10.5597H9.0298ZM9.73743 13C9.47672 13 9.26257 12.9125 9.09497 12.7375C8.92737 12.5625 8.84358 12.3551 8.84358 12.1153C8.84358 11.869 8.92737 11.6648 9.09497 11.5028C9.26257 11.3343 9.47672 11.25 9.73743 11.25C10.0043 11.25 10.2185 11.3343 10.3799 11.5028C10.5475 11.6648 10.6313 11.869 10.6313 12.1153C10.6313 12.3551 10.5475 12.5625 10.3799 12.7375C10.2185 12.9125 10.0043 13 9.73743 13Z"
                                                fill="white"/>
                                        </svg>

                                        <p class="user_card-tooltip_body">
                                            Awarded when the user wrote 1 message and activated the account.
                                        </p>
                                    </button>
                                </li>
                            @endfor
                        </ul>
                        <div class="user-main-corpage_top_left_last">
                            <div class="user-main-corpage_top_left_last-group">
                                <p class="user-main-corpage_top_left_last-group-text">Registration:</p>
                                <p class="user-main-corpage_top_left_last-group-value">8/15/17</p>
                            </div>
                            <div class="user-main-corpage_top_left_last-group">
                                <p class="user-main-corpage_top_left_last-group-text">Messages:</p>
                                <p class="user-main-corpage_top_left_last-group-value">194</p>
                            </div>
                            <div class="user-main-corpage_top_left_last-group">
                                <p class="user-main-corpage_top_left_last-group-text">Reactions:</p>
                                <p class="user-main-corpage_top_left_last-group-value">2</p>
                            </div>
                        </div>
                    </div>
                    <div class="user-main-corpage_top_right">
                        <div class="user-main-corpage_top_right_top">
                            <p class="user-main-corpage_top_right_top-date">8/15/17</p>
                            <div class="user-main-corpage_top_right_top_right">
                                <button class="user-main-corpage_top_right_top_right--btn" type="button">
                                    <svg width="14" height="16" viewBox="0 0 14 16" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.5 15.5C10.875 15.5 10.3438 15.2812 9.90625 14.8438C9.46875 14.4062 9.25 13.875 9.25 13.25C9.25 13.1625 9.25625 13.0717 9.26875 12.9777C9.28125 12.8842 9.3 12.8 9.325 12.725L4.0375 9.65C3.825 9.8375 3.5875 9.98425 3.325 10.0903C3.0625 10.1967 2.7875 10.25 2.5 10.25C1.875 10.25 1.34375 10.0312 0.90625 9.59375C0.46875 9.15625 0.25 8.625 0.25 8C0.25 7.375 0.46875 6.84375 0.90625 6.40625C1.34375 5.96875 1.875 5.75 2.5 5.75C2.7875 5.75 3.0625 5.803 3.325 5.909C3.5875 6.0155 3.825 6.1625 4.0375 6.35L9.325 3.275C9.3 3.2 9.28125 3.11575 9.26875 3.02225C9.25625 2.92825 9.25 2.8375 9.25 2.75C9.25 2.125 9.46875 1.59375 9.90625 1.15625C10.3438 0.71875 10.875 0.5 11.5 0.5C12.125 0.5 12.6562 0.71875 13.0938 1.15625C13.5312 1.59375 13.75 2.125 13.75 2.75C13.75 3.375 13.5312 3.90625 13.0938 4.34375C12.6562 4.78125 12.125 5 11.5 5C11.2125 5 10.9375 4.94675 10.675 4.84025C10.4125 4.73425 10.175 4.5875 9.9625 4.4L4.675 7.475C4.7 7.55 4.71875 7.63425 4.73125 7.72775C4.74375 7.82175 4.75 7.9125 4.75 8C4.75 8.0875 4.74375 8.178 4.73125 8.2715C4.71875 8.3655 4.7 8.45 4.675 8.525L9.9625 11.6C10.175 11.4125 10.4125 11.2655 10.675 11.159C10.9375 11.053 11.2125 11 11.5 11C12.125 11 12.6562 11.2188 13.0938 11.6562C13.5312 12.0938 13.75 12.625 13.75 13.25C13.75 13.875 13.5312 14.4062 13.0938 14.8438C12.6562 15.2812 12.125 15.5 11.5 15.5Z"
                                            fill="#014EFF"/>
                                    </svg>

                                    <div class="user-main-corpage_top_right_top_right--btn-body">
                                        <div class="user-main-corpage_top_right_top_right--btn-body_top">
                                            <p class="user-main-corpage_top_right_top_right--btn-body_top-text">
                                                Share</p>
                                        </div>
                                        <div class="user-main-corpage_top_right_top_right--btn-body_bot">
                                            <a href="{{ route('index') }}"
                                               class="user-main-corpage_top_right_top_right--btn-body_bot--link">Instagram</a>
                                            <a href="{{ route('index') }}"
                                               class="user-main-corpage_top_right_top_right--btn-body_bot--link">Telegram</a>
                                            <a href="{{ route('index') }}"
                                               class="user-main-corpage_top_right_top_right--btn-body_bot--link">Facebook</a>
                                            <a href="{{ route('index') }}"
                                               class="user-main-corpage_top_right_top_right--btn-body_bot--link">YouTube</a>
                                            <a href="{{ route('index') }}"
                                               class="user-main-corpage_top_right_top_right--btn-body_bot--link">LinledIn</a>
                                        </div>
                                    </div>
                                </button>
                                <p class="user-main-corpage_top_right_top_right-text">#1</p>
                            </div>
                        </div>
                        <h1 class="user-main-corpage_top_right-title">Which holidays and events help you earn now</h1>
                        <div class="user-main-corpage_top_right-text">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam dicta praesentium in
                            inventore optio dolores, facere accusamus nisi nulla, laborum explicabo sunt non voluptate.
                            Quibusdam expedita doloribus, accusamus vel minus et a placeat repellat, deserunt quidem
                            quia officiis dignissimos nobis. Id amet aliquid laudantium quia nihil assumenda quo illum
                            magni. Deserunt, labore sequi tempore eveniet voluptatum amet illo ipsum ab in iure repellat
                            minus explicabo minima cumque quibusdam aspernatur recusandae nulla laborum repudiandae
                            veritatis sunt sed eaque aliquid. Esse nobis est similique pariatur temporibus quia earum
                            error rem. Iusto perspiciatis temporibus ad magnam voluptas? Reiciendis quas atque
                            laudantium cumque eum impedit at repudiandae eos eaque, dolor dignissimos dolores error
                            perferendis culpa non optio totam, vel inventore ducimus deserunt? Facere provident
                            molestias placeat nesciunt quibusdam! Modi quia nemo mollitia qui dolorem voluptatibus
                            obcaecati velit. Suscipit veritatis, eligendi autem voluptas laudantium minima quasi, quo ex
                            mollitia ullam, tempora molestiae hic omnis odit perferendis excepturi! Maiores, ut mollitia
                            facilis sit fugiat molestias. Tempore dignissimos dolore, fugiat reprehenderit vel
                            perferendis ex voluptatibus, perspiciatis vero eligendi velit nulla voluptas ratione
                            quibusdam quod laudantium! Non rem quaerat provident distinctio fugiat, consequatur est
                            libero a ducimus cupiditate eius ab explicabo minus sunt, enim amet inventore autem itaque
                            molestias dolores id quasi. Illo a, laboriosam at assumenda repellendus reprehenderit
                            repellat quas vero totam distinctio sapiente dolorem deserunt autem, saepe recusandae
                            voluptatum ad ducimus qui, reiciendis dicta nisi quidem tempore facere.
                        </div>
                        <p class="user-main-corpage_top_right-last-text">The list is not complete, obviously. For each
                            GEO and culture you can find dozens of local holidays (that are easily googleable). The idea
                            is not in the holidays per se, but in the approaches. If you follow the world news, you’ll
                            be able to create an ad for any occasion. Here are some examples of what we worked with when
                            everyone else was using the same old methods.</p>
                        <div class="user-main-corpage_top_right_bottom">
                            <div class="user-main-corpage_top_right_bottom_left">
                                <button class="user-main-corpage_top_right_bottom--btn">
                                    <svg width="17" height="18" viewBox="0 0 17 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.20964 9.70866H7.79297V5.45866H9.20964M9.20964 12.542H7.79297V11.1253H9.20964M8.5013 1.91699C7.57111 1.91699 6.65002 2.10021 5.79063 2.45618C4.93124 2.81215 4.15038 3.3339 3.49263 3.99165C2.16425 5.32004 1.41797 7.12171 1.41797 9.00033C1.41797 10.8789 2.16425 12.6806 3.49263 14.009C4.15038 14.6667 4.93124 15.1885 5.79063 15.5445C6.65002 15.9004 7.57111 16.0837 8.5013 16.0837C10.3799 16.0837 12.1816 15.3374 13.51 14.009C14.8384 12.6806 15.5846 10.8789 15.5846 9.00033C15.5846 8.07013 15.4014 7.14904 15.0454 6.28965C14.6895 5.43026 14.1677 4.6494 13.51 3.99165C12.8522 3.3339 12.0714 2.81215 11.212 2.45618C10.3526 2.10021 9.4315 1.91699 8.5013 1.91699Z"
                                            fill="#014EFF"/>
                                    </svg>
                                    <span>Complaint</span>
                                </button>
                                <button class="user-main-corpage_top_right_bottom--btn">
                                    <svg width="17" height="18" viewBox="0 0 17 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.5013 1.91675C4.5913 1.91675 1.41797 5.09008 1.41797 9.00008C1.41797 12.9101 4.5913 16.0834 8.5013 16.0834C12.4113 16.0834 15.5846 12.9101 15.5846 9.00008C15.5846 5.09008 12.4113 1.91675 8.5013 1.91675ZM9.14589 13.3563C9.09638 13.4049 9.03373 13.4378 8.96568 13.4511C8.89763 13.4643 8.82719 13.4573 8.76309 13.4309C8.69898 13.4045 8.64403 13.3599 8.60505 13.3026C8.56607 13.2452 8.54478 13.1777 8.5438 13.1084V12.5417H8.5013C7.59464 12.5417 6.68797 12.1947 5.9938 11.5076C5.51286 11.0255 5.18095 10.415 5.03775 9.74929C4.89455 9.08354 4.94612 8.39063 5.1863 7.75342C5.32089 7.39216 5.79547 7.30008 6.06464 7.57633C6.22047 7.73216 6.25589 7.95883 6.18505 8.15717C5.85922 9.0355 6.04339 10.0555 6.75172 10.7638C7.24755 11.2597 7.89922 11.4934 8.55089 11.4792V10.8134C8.55089 10.4947 8.93339 10.3388 9.15297 10.5655L10.3005 11.713C10.4421 11.8547 10.4421 12.0742 10.3005 12.2159L9.14589 13.3563ZM10.938 10.4309C10.8647 10.3556 10.8145 10.2609 10.7932 10.158C10.7719 10.0552 10.7803 9.94833 10.8176 9.85008C11.1434 8.97175 10.9592 7.95175 10.2509 7.24342C9.75505 6.74758 9.10339 6.50675 8.4588 6.52092V7.18675C8.4588 7.5055 8.0763 7.66133 7.85672 7.43467L6.70214 6.29425C6.56047 6.15258 6.56047 5.933 6.70214 5.79133L7.84964 4.64383C7.89914 4.5953 7.9618 4.56236 8.02984 4.5491C8.09789 4.53584 8.16833 4.54284 8.23244 4.56923C8.29654 4.59563 8.35149 4.64026 8.39047 4.69759C8.42945 4.75492 8.45075 4.82243 8.45172 4.89175V5.4655C9.37255 5.45133 10.3005 5.78425 11.0017 6.49258C11.4827 6.97469 11.8146 7.58512 11.9578 8.25087C12.101 8.91662 12.0494 9.60953 11.8092 10.2467C11.6746 10.6151 11.2071 10.7072 10.938 10.4309Z"
                                            fill="#014EFF"/>
                                    </svg>
                                    <span>Change</span>
                                </button>
                                <button class="user-main-corpage_top_right_bottom--btn">
                                    <svg width="17" height="18" viewBox="0 0 17 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="8.50688" cy="9.00492" r="7.085" fill="#014EFF"/>
                                        <path
                                            d="M6.25 11.625C6.25 12.0375 6.5875 12.375 7 12.375H10C10.4125 12.375 10.75 12.0375 10.75 11.625V7.875C10.75 7.4625 10.4125 7.125 10 7.125H7C6.5875 7.125 6.25 7.4625 6.25 7.875V11.625ZM10.75 6H9.8125L9.54625 5.73375C9.47875 5.66625 9.38125 5.625 9.28375 5.625H7.71625C7.61875 5.625 7.52125 5.66625 7.45375 5.73375L7.1875 6H6.25C6.04375 6 5.875 6.16875 5.875 6.375C5.875 6.58125 6.04375 6.75 6.25 6.75H10.75C10.9563 6.75 11.125 6.58125 11.125 6.375C11.125 6.16875 10.9563 6 10.75 6Z"
                                            fill="white"/>
                                    </svg>
                                    <span>delete</span>
                                </button>
                                <button class="user-main-corpage_top_right_bottom--btn">
                                    <svg width="17" height="18" viewBox="0 0 17 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="8.50688" cy="9.00492" r="7.085" fill="#014EFF"/>
                                        <path
                                            d="M6.925 6C5.86187 6 5 6.86086 5 7.92274C5 9.84548 7.275 11.5934 8.5 12C9.725 11.5934 12 9.84548 12 7.92274C12 6.86086 11.1381 6 10.075 6C9.424 6 8.84825 6.32285 8.5 6.81699C8.32249 6.56445 8.08668 6.35834 7.81252 6.21613C7.53836 6.07392 7.23393 5.99978 6.925 6Z"
                                            fill="white"/>
                                    </svg>
                                    <span>Like</span>
                                </button>
                            </div>
                            <button class="user-main-corpage_top_right_bottom--btn"><span>Reply</span></button>
                        </div>
                    </div>
                </div>
                <div class="pagination">
                    {{ $comments->links() }}
                </div>
                <div style="margin-top: 20px;" class="user-main-corpage_bot">
                    <div class="user-main-corpage_bot_left">
                        <div class="header--notif-body--item-icon-wrapper">
                            <div class="user-main-corpage_top_left-icon">
                                <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="user">
                            </div>
                        </div>
                        <div class="user-main-corpage_top_left-name-wrapper">
                            <a href="{{ route('index') }}" class="user-main-corpage_top_left-name">Bessie Cooper</a>

                            <div class="forum-user-preview_card forum_main_card_list--item_right-user-preview">
                                <div class="forum-user-preview_card_main">
                                    <div class="forum-user-preview_card_main_info">
                                        <div class="forum-user-preview_card_main_info-avatar">
                                            <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}"
                                                 alt="avatar">
                                        </div>
                                        <div class="forum-user-preview_card_main_info_right">
                                            <p class="forum-user-preview_card_main_info-name">Wade Warren</p>
                                            <div class="forum-user-preview_card_main_info_right-items">
                                                <p class="forum-user-preview_card_main_info_right-items-item">
                                                    Registration: <span>21 Oct. 2022</span>
                                                </p>
                                                <p class="forum-user-preview_card_main_info_right-items-item">
                                                    Last activity: <span>Today at 12:15 p.m.</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="user_card-main-example-btn"
                                            style="background: #F9A826;">Elf 80 lvl
                                    </button>
                                </div>
                                <div class="forum-user-preview_card_bott">
                                    <p class="forum-user-preview_card_bott-text">Messages: <span>9 476</span></p>
                                    <p class="forum-user-preview_card_bott-text">Reactions: <span>9 476</span></p>
                                    <p class="forum-user-preview_card_bott-text">Trophies: <span>9 476</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="" method="POST" class="user-main-corpage_bot_right">
                        @csrf
                        <div class="user-main-corpage_bot_right-pagin">
                            <textarea class="summernote" name="content" id="" cols="30"
                                      rows="10">{{ old('content') }}</textarea>
                        </div>
                        <button style="max-width: 161px; height: 40px;" class="btn--blue header_buttons-blue-btn">
                            <span>Send</span>
                            <img loading="lazy" src="{{asset('assets/images/icons/arrow-right-white.svg')}}"
                                 alt="arrow">
                        </button>
                    </form>
                </div>
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
                    <a href="{{ route('forum') }}">Forum</a>
                </li>
                <li class="breadcrambs_list-item">
                    <a href="{{ route('forum') }}">How To Optimize TikTok Ads Like A Pro: The 5-Step Guide</a>
                </li>
            </ul>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script>
        $('.summernote').summernote({
            height: 300,
            maxHeight: 500,
            toolbar: [
                ['insert', ['picture', 'link', 'table', 'hr']],
                ['fontsize', ['fontname', 'fontsize', 'fontsizeunit', 'color', 'forecolor', 'backcolor', 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
                ['paragraph', ['style', 'ol', 'ul', 'paragraph', 'height']],
                ['misc', ['fullscreen', 'codeview', 'undo', 'redo', 'help']],
            ],
            fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Helvetica', 'Impact', 'Tahoma', 'Times New Roman', 'Verdana', 'Roboto', 'Montserrat'],
            fontNamesIgnoreCheck: ['Roboto', 'Montserrat']
        });
    </script>
@endsection
