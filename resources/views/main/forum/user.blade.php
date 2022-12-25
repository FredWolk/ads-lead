@extends('layouts.main')

@section('content')
<section class="breadcrambs top">
    <div class="container">
        <ul class="breadcrambs_list">
            <li class="breadcrambs_list-item">
                <a href="{{ route('index') }}">Homepage</a>
            </li>
            <li class="breadcrambs_list-item">
                <a href="{{ route('forum.user') }}">User page</a>
            </li>
        </ul>
    </div>
</section>

<section class="articlespage forumpage">
    <div class="container">
        <div class="forum_userpage-main">
            <div class="forum_userpage-main_left">
                <div class="user-main-corpage_top_left-icon">
                    <img src="{{asset('assets/images/card-pict.jpg')}}" alt="user">
                </div>
                <button style="margin: 0px; max-width: 250px; height: 40px;" type="button" class="user_card-main-example-btn" style="background: #F9A826;">Elf 80 lvl</button>

                <button style="max-width: 250px; height: 50px; margin-top: 25px;" class="btn--blue header_buttons-blue-btn">
                    <span>Subscribe</span>
                    <img src="{{asset('assets/images/icons/arrow-right-white.svg')}}" alt="arrow">
                </button>
            </div>
            <div class="forum_userpage-main_info">
                <div class="user-main-corpage_top_left-name-wrapper">
                    <a href="{{ route('index') }}" class="user-main-corpage_top_left-name">Jerome Bell</a>

                    <div class="forum-user-preview_card forum_main_card_list--item_right-user-preview">
                        <div class="forum-user-preview_card_main">
                            <div class="forum-user-preview_card_main_info">
                                <div class="forum-user-preview_card_main_info-avatar">
                                    <img src="{{asset('assets/images/card-pict.jpg')}}" alt="avatar">
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
                            <button type="button" class="user_card-main-example-btn" style="background: #F9A826;">Elf 80 lvl</button>
                        </div>
                        <div class="forum-user-preview_card_bott">
                            <p class="forum-user-preview_card_bott-text">Messages: <span>9 476</span></p>
                            <p class="forum-user-preview_card_bott-text">Reactions: <span>9 476</span></p>
                            <p class="forum-user-preview_card_bott-text">Trophies: <span>9 476</span></p>
                        </div>
                    </div>
                </div>

                <div class="forum_userpage-main_info_group">
                    <div class="forum_userpage-main_info_group_item">
                        <p class="forum_userpage-main_info_group_item-text">Registration: <span>8 Aug 2021</span></p>
                        <p class="forum_userpage-main_info_group_item-text">Last activity: <span>20 Sep 2022</span></p>
                    </div>
                    <div class="forum_userpage-main_info_group-line"></div>
                    <div class="forum_userpage-main_info_group_item">
                        <p class="forum_userpage-main_info_group_item-text">Messages: <span>6 879</span></p>
                        <p class="forum_userpage-main_info_group_item-text">Rections: <span>87</span></p>
                    </div>
                </div>

                <p class="forum_userpage-main_info_troph">Trophies</p>
                <ul class="user-main_trophies_list">
                    @for ($a=0; $a<4; $a++)
                    <li class="user-main_trophies--item active">
                        <div class="user-main_trophies--item-main">
                            <div class="user-main_trophies--item-main-image">
                                <img src="{{asset('assets/images/card-pict.jpg')}}" alt="avatar">
                            </div>
                            <div class="puser-main_trophies--item-main-text">First</div>
                        </div>

                        <button type="button" class="user_card--toltip--btn user-main_trophies--item-toolti-btn">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="9.5" cy="9.5" r="9.5" fill="#014EFF"/><path d="M9.0298 10.5597C9.0298 10.3329 9.06394 10.1319 9.13222 9.95694C9.2067 9.78194 9.29671 9.62639 9.40223 9.49028C9.51397 9.35417 9.63191 9.22778 9.75605 9.11111C9.8802 8.99444 9.99503 8.88426 10.1006 8.78056C10.2123 8.67037 10.3023 8.55694 10.3706 8.44028C10.4451 8.32361 10.4823 8.19398 10.4823 8.05139C10.4823 7.81806 10.3892 7.63009 10.203 7.4875C10.023 7.34491 9.78088 7.27361 9.47672 7.27361C9.18498 7.27361 8.92427 7.33843 8.6946 7.46806C8.46493 7.5912 8.27561 7.7662 8.12663 7.99306L7 7.30278C7.24829 6.90741 7.5928 6.59306 8.03352 6.35972C8.47424 6.11991 9.00807 6 9.63501 6C10.1006 6 10.5102 6.0713 10.8641 6.21389C11.2179 6.35 11.4941 6.55093 11.6927 6.81667C11.8976 7.08241 12 7.40972 12 7.79861C12 8.05139 11.9628 8.275 11.8883 8.46944C11.8138 8.66389 11.7176 8.83241 11.5996 8.975C11.4817 9.11759 11.3544 9.25046 11.2179 9.37361C11.0875 9.49676 10.9634 9.61667 10.8454 9.73333C10.7275 9.85 10.6282 9.97315 10.5475 10.1028C10.473 10.2324 10.4358 10.3847 10.4358 10.5597H9.0298ZM9.73743 13C9.47672 13 9.26257 12.9125 9.09497 12.7375C8.92737 12.5625 8.84358 12.3551 8.84358 12.1153C8.84358 11.869 8.92737 11.6648 9.09497 11.5028C9.26257 11.3343 9.47672 11.25 9.73743 11.25C10.0043 11.25 10.2185 11.3343 10.3799 11.5028C10.5475 11.6648 10.6313 11.869 10.6313 12.1153C10.6313 12.3551 10.5475 12.5625 10.3799 12.7375C10.2185 12.9125 10.0043 13 9.73743 13Z" fill="white"/></svg>
        
                            <p class="user_card-tooltip_body">
                                Awarded when the user wrote 1 message and activated the account.
                            </p>
                        </button>
                    </li>
                    @endfor
                </ul>
                <button style="max-width: 250px; height: 50px; margin-top: 25px;" class="btn--blue header_buttons-blue-btn to-show">
                    <span>Subscribe</span>
                    <img src="{{asset('assets/images/icons/arrow-right-white.svg')}}" alt="arrow">
                </button>
                <p class="forum_userpage-main_info_last-text">The list is not complete, obviously. For each GEO and culture you can find dozens of local holidays (that are easily googleable). The idea is not in the holidays per se, but in the approaches. If you follow the world news, you’ll be able to create an ad for any occasion. Here are some examples of what we worked with when everyone else was using the same old methods.</p>
            </div>
        </div>

        <div class="forum_userpage-bot">
            <p class="write-to-user-text">Write to a user</p>
            <div class="user-main-corpage_bot">
                <div class="user-main-corpage_bot_left">
                    <div class="header--notif-body--item-icon-wrapper">
                        <div class="user-main-corpage_top_left-icon">
                            <img src="{{asset('assets/images/card-pict.jpg')}}" alt="user">
                        </div>
                    </div>
                    <div class="user-main-corpage_top_left-name-wrapper">
                        <a href="{{ route('index') }}" class="user-main-corpage_top_left-name">Bessie Cooper</a>
    
                        <div class="forum-user-preview_card forum_main_card_list--item_right-user-preview">
                            <div class="forum-user-preview_card_main">
                                <div class="forum-user-preview_card_main_info">
                                    <div class="forum-user-preview_card_main_info-avatar">
                                        <img src="{{asset('assets/images/card-pict.jpg')}}" alt="avatar">
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
                                <button type="button" class="user_card-main-example-btn" style="background: #F9A826;">Elf 80 lvl</button>
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
                    <div class="user-main-corpage_bot_right-pagin">
                        input-plagin
                    </div>
                    <button style="max-width: 161px; height: 40px;" class="btn--blue header_buttons-blue-btn">
                        <span>Send</span>
                        <img src="{{asset('assets/images/icons/arrow-right-white.svg')}}" alt="arrow">
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
                <a href="{{ route('forum.user') }}">User page</a>
            </li>
        </ul>
    </div>
</section>
@endsection