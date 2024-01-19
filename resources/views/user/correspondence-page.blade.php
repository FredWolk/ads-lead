@extends('user.layouts.user')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/summernote/summernote-bs4.min.css') }}">
    <style>
        .main__article p,
        .main__article p *,
        .main__article span,
        .main__article span *,
        .main__article li,
        .main__article div,
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
@endpush
@php($user = \Illuminate\Support\Facades\Auth::user())
@section('content')
    <section class="user-main corpage">
        @foreach($chat->messages as $k => $mes)
            <div class="user-main-corpage_top {{ $mes->user_id === $user->id ? 'revers' : '' }}">
                <div class="user-main-corpage_top_left">
                    <div class="user-main-corpage_top_left-wrapper">
                        <div class="header--notif-body--item-icon-wrapper">
                            <div class="user-main-corpage_top_left-icon">
                                @if($mes->user_id === $user->id)
                                    @empty($user->photo)
                                        <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="user">
                                    @else
                                        <img loading="lazy" src="{{asset('storage/'. $user->photo)}}" alt="user">
                                    @endempty
                                @else
                                    @empty($info->photo)
                                        <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="user">
                                    @else
                                        <img loading="lazy" src="{{asset('storage/'. $info->photo)}}" alt="user">
                                    @endempty
                                @endif
                            </div>
                        </div>
                        <div class="user-main-corpage_top_left-name-wrapper">
                            <p class="user-main-corpage_top_left-name">{{ $mes->user_id === $user->id ? $user->name : $info->name }}</p>
                            @if(false)
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
                            @endif
                        </div>
                    </div>
                </div>
                <div class="user-main-corpage_top_right">
                    <div class="user-main-corpage_top_right_top">
                        <p class="user-main-corpage_top_right_top-date">{{ date('d/m/Y', strtotime($mes->created_at)) }}</p>
                        <div class="user-main-corpage_top_right_top_right">
                            <p class="user-main-corpage_top_right_top_right-text">#{{ $k + 1 }}</p>
                        </div>
                    </div>
                    <div class="main__article user-main-corpage_top_right-text">{!! $mes->message !!}</div>
                    {{--                    <p class="user-main-corpage_top_right-last-text">The list is not complete, obviously. For each GEO and culture you can find dozens of local holidays (that are easily googleable). The idea is not in the holidays per se, but in the approaches. If you follow the world news, you’ll be able to create an ad for any occasion. Here are some examples of what we worked with when everyone else was using the same old methods.</p>--}}
                    {{--                    <div class="user-main-corpage_top_right_bottom">--}}
                    {{--                        <div class="user-main-corpage_top_right_bottom_left">--}}
                    {{--                            <button class="user-main-corpage_top_right_bottom--btn">--}}
                    {{--                                <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.20964 9.70866H7.79297V5.45866H9.20964M9.20964 12.542H7.79297V11.1253H9.20964M8.5013 1.91699C7.57111 1.91699 6.65002 2.10021 5.79063 2.45618C4.93124 2.81215 4.15038 3.3339 3.49263 3.99165C2.16425 5.32004 1.41797 7.12171 1.41797 9.00033C1.41797 10.8789 2.16425 12.6806 3.49263 14.009C4.15038 14.6667 4.93124 15.1885 5.79063 15.5445C6.65002 15.9004 7.57111 16.0837 8.5013 16.0837C10.3799 16.0837 12.1816 15.3374 13.51 14.009C14.8384 12.6806 15.5846 10.8789 15.5846 9.00033C15.5846 8.07013 15.4014 7.14904 15.0454 6.28965C14.6895 5.43026 14.1677 4.6494 13.51 3.99165C12.8522 3.3339 12.0714 2.81215 11.212 2.45618C10.3526 2.10021 9.4315 1.91699 8.5013 1.91699Z" fill="#014EFF"/></svg>--}}
                    {{--                                <span>Complaint</span>--}}
                    {{--                            </button>--}}
                    {{--                            <button class="user-main-corpage_top_right_bottom--btn">--}}
                    {{--                                <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="8.50688" cy="9.00492" r="7.085" fill="#014EFF"/><path d="M6.925 6C5.86187 6 5 6.86086 5 7.92274C5 9.84548 7.275 11.5934 8.5 12C9.725 11.5934 12 9.84548 12 7.92274C12 6.86086 11.1381 6 10.075 6C9.424 6 8.84825 6.32285 8.5 6.81699C8.32249 6.56445 8.08668 6.35834 7.81252 6.21613C7.53836 6.07392 7.23393 5.99978 6.925 6Z" fill="white"/></svg>--}}
                    {{--                                <span>Like</span>--}}
                    {{--                            </button>--}}
                    {{--                        </div>--}}
                    {{--                        <button class="user-main-corpage_top_right_bottom--btn"><span>Reply</span></button>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        @endforeach
        <div class="user-main-corpage_bot">
            <div class="user-main-corpage_bot_left">
                <div class="header--notif-body--item-icon-wrapper">
                    <div class="user-main-corpage_top_left-icon">
                        @empty(Auth::user()->photo)
                            <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="user">
                        @else
                            <img loading="lazy" src="{{asset('storage/'. Auth::user()->photo)}}" alt="user">
                        @endempty

                    </div>
                </div>
                <div class="user-main-corpage_top_left-name-wrapper">
                    <p class="user-main-corpage_top_left-name">{{ Auth::user()->name }}</p>
                </div>
            </div>
            <div class="user-main-corpage_bot_right-pagin">
                <form action="{{ route('chat.message.send', $chat->id) }}" method="POST"
                      class="user-main-corpage_bot_right">
                    @csrf
                    <div class="user-main-corpage_bot_right-pagin">
                            <textarea class="summernote" name="message" id="" cols="30"
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
    </section>
@endsection

@push('scripts')
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

        var interval = setTimeout(function () {
            location.reload();
        }, 30000);
        $(window).on('mousemove', function () {
            clearTimeout(interval)
            interval = setTimeout(function () {
                location.reload();
            }, 30000);
        })
        $(window).on('keydown', function () {
            clearTimeout(interval)
            interval = setTimeout(function () {
                location.reload();
            }, 30000);
        })
    </script>
@endpush
