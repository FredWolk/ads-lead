@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/summernote/summernote-bs4.min.css') }}">
    <style>
        .delete__popup-back {
            background-color: rgba(0, 0, 0, 0.3);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            z-index: 100;
        }

        .delete__popup-modal {
            background-color: white;
            padding: 30px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 730px;
            width: 100%;
        }

        .delete__popup-header {
        }

        .popup__delete-close {
            position: absolute;
            right: 25px;
            top: 25px;
            font-size: 30px;
            cursor: pointer;
            line-height: 20px;
        }

        .main__article p,
        .main__article p *,
        .main__article span,
        .main__article span *,
        .main__article li,
        .main__article li * {
            font-family: 'Montserrat' !important;
            font-style: normal !important;
            font-size: 18px !important;
            line-height: 160% !important;
            color: #272C31 !important;
            width: 100% !important;
        }

        .main__article a, .main__article a * {
            font-family: 'Montserrat' !important;
            font-style: normal !important;
            font-weight: 500 !important;
            font-size: 18px !important;
            line-height: 160% !important;
            text-decoration-line: underline !important;
            color: #014EFF !important;
        }

        .main__article h1, .main__article h1 * {
            font-family: 'Jost' !important;
            font-style: normal !important;
            font-weight: 700 !important;
            font-size: 30px !important;
            line-height: 120% !important;
            text-transform: uppercase !important;
            color: #014EFF !important;
        }

        .main__article h2, .main__article h2 * {
            font-family: 'Jost' !important;
            font-style: normal !important;
            font-weight: 700 !important;
            font-size: 28px !important;
            line-height: 120% !important;
            text-transform: uppercase !important;
            color: #014EFF !important;
        }

        .main__article h3, .main__article h3 * {
            font-family: 'Jost' !important;
            font-style: normal !important;
            font-weight: 700 !important;
            font-size: 25px !important;
            line-height: 120% !important;
            text-transform: uppercase !important;
            color: #014EFF !important;
        }


        .main__article b, .main__article b * {
            font-family: 'Montserrat' !important;
            font-style: normal !important;
            font-weight: 500 !important;
            font-size: 18px !important;
            line-height: 160% !important;
            color: #272C31 !important;
        }

        .main__article i, .main__article i * {
            font-family: 'Montserrat' !important;
            font-style: italic !important;
            font-weight: 500 !important;
            font-size: 18px !important;
            line-height: 160% !important;
            color: #272C31 !important;
        }

        .main__article img {
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
                                    <div data-id="{{ $thread->id }}"
                                         class="forumpage-board_top-pagin-wrapp-right-more--body-link author_delete">
                                        Delete the
                                        topic
                                    </div>
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
                            </div>
                        </div>
                        <div class="user-main-corpage_top_left_last">
                            <div class="user-main-corpage_top_left_last-group">
                                <p class="user-main-corpage_top_left_last-group-text">Registration:</p>
                                <p class="user-main-corpage_top_left_last-group-value">{{ date('d/m/Y', strtotime($thread->author->created_at)) }}</p>
                            </div>
                            <div class="user-main-corpage_top_left_last-group">
                                <p class="user-main-corpage_top_left_last-group-text">Messages:</p>
                                <p class="user-main-corpage_top_left_last-group-value">{{ $thread->author->comments->count() }}</p>
                            </div>
                            <div class="user-main-corpage_top_left_last-group">
                                <p class="user-main-corpage_top_left_last-group-text">Reactions:</p>
                                <p class="user-main-corpage_top_left_last-group-value">2</p>
                            </div>
                        </div>
                    </div>
                    <div class="user-main-corpage_top_right">
                        <div class="user-main-corpage_top_right_top">
                            <p class="user-main-corpage_top_right_top-date">{{ date('d/m/Y', strtotime($thread->created_at)) }}</p>
                            <div class="user-main-corpage_top_right_top_right">
                                @if(false)
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
                                @endif
                                <p class="user-main-corpage_top_right_top_right-text">#1</p>
                            </div>
                        </div>
                        <h1 class="user-main-corpage_top_right-title">{{ $thread->title }}</h1>
                        <div class="user-main-corpage_top_right-text main__article">
                            {!! $thread->content !!}
                        </div>
                        @auth()
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
                                    @if($thread->user_id === \Illuminate\Support\Facades\Auth::id())
                                        <button class="user-main-corpage_top_right_bottom--btn">
                                            <svg width="17" height="18" viewBox="0 0 17 18" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.5013 1.91675C4.5913 1.91675 1.41797 5.09008 1.41797 9.00008C1.41797 12.9101 4.5913 16.0834 8.5013 16.0834C12.4113 16.0834 15.5846 12.9101 15.5846 9.00008C15.5846 5.09008 12.4113 1.91675 8.5013 1.91675ZM9.14589 13.3563C9.09638 13.4049 9.03373 13.4378 8.96568 13.4511C8.89763 13.4643 8.82719 13.4573 8.76309 13.4309C8.69898 13.4045 8.64403 13.3599 8.60505 13.3026C8.56607 13.2452 8.54478 13.1777 8.5438 13.1084V12.5417H8.5013C7.59464 12.5417 6.68797 12.1947 5.9938 11.5076C5.51286 11.0255 5.18095 10.415 5.03775 9.74929C4.89455 9.08354 4.94612 8.39063 5.1863 7.75342C5.32089 7.39216 5.79547 7.30008 6.06464 7.57633C6.22047 7.73216 6.25589 7.95883 6.18505 8.15717C5.85922 9.0355 6.04339 10.0555 6.75172 10.7638C7.24755 11.2597 7.89922 11.4934 8.55089 11.4792V10.8134C8.55089 10.4947 8.93339 10.3388 9.15297 10.5655L10.3005 11.713C10.4421 11.8547 10.4421 12.0742 10.3005 12.2159L9.14589 13.3563ZM10.938 10.4309C10.8647 10.3556 10.8145 10.2609 10.7932 10.158C10.7719 10.0552 10.7803 9.94833 10.8176 9.85008C11.1434 8.97175 10.9592 7.95175 10.2509 7.24342C9.75505 6.74758 9.10339 6.50675 8.4588 6.52092V7.18675C8.4588 7.5055 8.0763 7.66133 7.85672 7.43467L6.70214 6.29425C6.56047 6.15258 6.56047 5.933 6.70214 5.79133L7.84964 4.64383C7.89914 4.5953 7.9618 4.56236 8.02984 4.5491C8.09789 4.53584 8.16833 4.54284 8.23244 4.56923C8.29654 4.59563 8.35149 4.64026 8.39047 4.69759C8.42945 4.75492 8.45075 4.82243 8.45172 4.89175V5.4655C9.37255 5.45133 10.3005 5.78425 11.0017 6.49258C11.4827 6.97469 11.8146 7.58512 11.9578 8.25087C12.101 8.91662 12.0494 9.60953 11.8092 10.2467C11.6746 10.6151 11.2071 10.7072 10.938 10.4309Z"
                                                    fill="#014EFF"/>
                                            </svg>
                                            <span>Change</span>
                                        </button>
                                        <button data-id="{{ $thread->id }}"
                                                class="user-main-corpage_top_right_bottom--btn author_delete">
                                            <svg width="17" height="18" viewBox="0 0 17 18" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="8.50688" cy="9.00492" r="7.085" fill="#014EFF"/>
                                                <path
                                                    d="M6.25 11.625C6.25 12.0375 6.5875 12.375 7 12.375H10C10.4125 12.375 10.75 12.0375 10.75 11.625V7.875C10.75 7.4625 10.4125 7.125 10 7.125H7C6.5875 7.125 6.25 7.4625 6.25 7.875V11.625ZM10.75 6H9.8125L9.54625 5.73375C9.47875 5.66625 9.38125 5.625 9.28375 5.625H7.71625C7.61875 5.625 7.52125 5.66625 7.45375 5.73375L7.1875 6H6.25C6.04375 6 5.875 6.16875 5.875 6.375C5.875 6.58125 6.04375 6.75 6.25 6.75H10.75C10.9563 6.75 11.125 6.58125 11.125 6.375C11.125 6.16875 10.9563 6 10.75 6Z"
                                                    fill="white"/>
                                            </svg>
                                            <span>delete</span>
                                        </button>
                                    @endif
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
                            </div>
                        @endauth
                    </div>
                </div>
                <div class="pagination">
                    {{ $comments->links() }}
                </div>
                @foreach($comments as $key => $comment)
                    <div class="user-main-corpage_top">
                        <div class="user-main-corpage_top_left">
                            <div class="user-main-corpage_top_left-wrapper">
                                <div class="header--notif-body--item-icon-wrapper">
                                    <div class="user-main-corpage_top_left-icon">
                                        @empty($comment->author->photo)
                                            <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}"
                                                 alt="avatar">
                                        @else
                                            <img loading="lazy" src="{{asset('storage/' . $comment->author->photo)}}"
                                                 alt="avatar">
                                        @endempty
                                    </div>
                                    <div
                                        class="header--notif-body--item-icon-online"></div> {{-- CCOM для отсутствия в онлайне - класс grey --}}
                                </div>
                                <div class="user-main-corpage_top_left-name-wrapper">
                                    <a href="{{ route('index') }}"
                                       class="user-main-corpage_top_left-name">{{ $comment->author->name }}</a>
                                </div>
                            </div>
                            <div class="user-main-corpage_top_left_last">
                                <div class="user-main-corpage_top_left_last-group">
                                    <p class="user-main-corpage_top_left_last-group-text">Registration:</p>
                                    <p class="user-main-corpage_top_left_last-group-value">{{ date('d/m/Y', strtotime($comment->author->created_at)) }}</p>
                                </div>
                                <div class="user-main-corpage_top_left_last-group">
                                    <p class="user-main-corpage_top_left_last-group-text">Messages:</p>
                                    <p class="user-main-corpage_top_left_last-group-value">{{ $comment->author->comments->count() }}</p>
                                </div>
                                <div class="user-main-corpage_top_left_last-group">
                                    <p class="user-main-corpage_top_left_last-group-text">Reactions:</p>
                                    <p class="user-main-corpage_top_left_last-group-value">2</p>
                                </div>
                            </div>
                        </div>
                        <div class="user-main-corpage_top_right">
                            <div class="user-main-corpage_top_right_top">
                                <p class="user-main-corpage_top_right_top-date">{{ date('d/m/Y', strtotime($comment->created_at)) }}</p>
                                <div class="user-main-corpage_top_right_top_right">
                                    @if(false)
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
                                    @endif
                                    <p class="user-main-corpage_top_right_top_right-text">#{{ $key + 2 }}</p>
                                </div>
                            </div>
                            <div class="user-main-corpage_top_right-text main__article">
                                {!! $comment->content !!}
                            </div>
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
                                    <button data-id="{{ $comment->id }}"
                                            class="user-main-corpage_top_right_bottom--btn delete__comments">
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
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="pagination">
                    {{ $comments->links() }}
                </div>
                @auth()
                    <div style="margin-top: 20px;" class="user-main-corpage_bot">
                        <div class="user-main-corpage_bot_left">
                            <div class="header--notif-body--item-icon-wrapper">
                                <div class="user-main-corpage_top_left-icon">
                                    @empty(\Illuminate\Support\Facades\Auth::user()->photo)
                                        <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}"
                                             alt="avatar">
                                    @else
                                        <img loading="lazy"
                                             src="{{asset('storage/' . \Illuminate\Support\Facades\Auth::user()->photo)}}"
                                             alt="avatar">
                                    @endempty
                                </div>
                            </div>
                            <div class="user-main-corpage_top_left-name-wrapper">
                                <a href="{{ route('index') }}"
                                   class="user-main-corpage_top_left-name">{{ \Illuminate\Support\Facades\Auth::user()->name }}</a>
                            </div>
                        </div>
                        <form action="{{ route('store.thread.comment', $thread->id) }}" method="POST"
                              class="user-main-corpage_bot_right">
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
                @endauth
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
                    <a href="{{ route('forum.threads', $thread->theme) }}">{{ $thread->theme }}</a>
                </li>
                <li class="breadcrambs_list-item">
                    <p>{{ $thread->title }}</p>
                </li>
            </ul>
        </div>
    </section>
    <div style="display:none;" class="delete__popup-back">
        <div class="delete__popup-modal">
            <div class="delete__popup-header">
                <h4 class="user-main-corpage_top_right-title">Delete Message</h4>
                <button class="popup__delete-close">&times;</button>
            </div>
            <form class="delete__popup-body" action="" method="post">
                @csrf
                @method('DELETE')
                <textarea style="resize: none; width: 100%; border: 1px solid; padding: 20px;"
                          placeholder="Reason for removal" name=""
                          id="" cols="30"
                          rows="4"></textarea>
                <button style="max-width: 161px; height: 40px;" class="btn--blue header_buttons-blue-btn">
                    <span>Send</span>
                    <img loading="lazy" src="{{asset('assets/images/icons/arrow-right-white.svg')}}"
                         alt="arrow">
                </button>
            </form>
        </div>
    </div>
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
        $('.delete__comments').on('click', function () {
            let id = $(this).attr('data-id'),
                route = `{{ route('delete.thread.comment') }}/${id}`;

            $('.delete__popup-body').attr('action', route);
            $('.delete__popup-back').fadeIn(300);
        })
        $('.delete__popup-back, .popup__delete-close').on('click', function (e) {
            if (e.target === this)
                $('.delete__popup-back').fadeOut(300);
        })
        $('.author_delete').on('click', function () {
            let id = $(this).attr('data-id'),
                route = `{{ route('delete.thread') }}/${id}`;

            $('.delete__popup-body').attr('action', route);
            $('.delete__popup-back').fadeIn(300);
        })
    </script>
@endsection
