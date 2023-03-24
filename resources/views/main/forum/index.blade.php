@extends('layouts.main')

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
        </ul>
    </div>
</section>

<section class="cpapage cpa-catalog-page forum">
    <div class="container">
        <section class="cpapage_main">
            <h1 class="mainpage-title"><span>Affjournal</span> — is your guide to traffic arbitrage</h1>

            <div class="forum_main_card first">
                <div class="forum_main_card_top">
                    <div class="forum_main_card_top_buttons-tabs">
                        <button type="button" class="forum_main_card_top--tab-btn active" id="tab1">Latest answers</button>
                        <button type="button" class="forum_main_card_top--tab-btn" id="tab2">New Topics</button>
                        <button type="button" class="forum_main_card_top--tab-btn" id="tab3">Popular of the week</button>
                        <button type="button" class="forum_main_card_top--tab-btn" id="tab4">My topics</button>
                    </div>
                    <a style="max-width: 155px; height: 30px;" class="btn--blue header_buttons-blue-btn" href="{{ route('index') }}">
                        <span>Edited by</span>
                        <img loading="lazy" src="{{asset('assets/images/icons/arrow-right-white.svg')}}" alt="arrow">
                    </a>
                </div>
                <div class="forum_main_card_tabs">
                    <div class="forum_main_card_tabs--tab active" id="tab1">
                            <ul class="forum_main_card_list">
                                <li class="forum_main_card_list--item">
                                    <div class="forum_main_card_list--item_left">
                                        <span class="forum_main_card_list--item-num">1</span>
                                        <div class="forum_main_card_list--item_left-head">
                                            <p class="forum--tag color1">Case</p>
                                            <a href="{{ route('index') }}" class="forum_main_card_list--item_left-head-title">Serious.Partners - international partner network</a>
                                        </div>
                                    </div>
                                    <div class="forum_main_card_list--item_right">
                                        <p class="forum_main_card_list--item_right-time">17 min. ago</p>
                                        <div class="forum_main_card_list--item_right-wrapper">
                                            <a href="{{ route('index') }}" class="forum_main_card_list--item_right-name">Serious.Partners</a>

                                            <div class="forum-user-preview_card forum_main_card_list--item_right-user-preview">
                                                <div class="forum-user-preview_card_main">
                                                    <div class="forum-user-preview_card_main_info">
                                                        <div class="forum-user-preview_card_main_info-avatar">
                                                            <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="avatar">
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
                                </li>
                            </ul>
                    </div>
                    <div class="forum_main_card_tabs--tab" id="tab2">
                            <ul class="forum_main_card_list">
                                <li class="forum_main_card_list--item">
                                    <div class="forum_main_card_list--item_left">
                                        <span class="forum_main_card_list--item-num">1</span>
                                        <div class="forum_main_card_list--item_left-head">
                                            <p class="forum--tag color2">Case</p>
                                            <a href="{{ route('index') }}" class="forum_main_card_list--item_left-head-title">Serious.Partners - international partner network</a>
                                        </div>
                                    </div>
                                    <div class="forum_main_card_list--item_right">
                                        <p class="forum_main_card_list--item_right-time">17 min. ago</p>
                                        <div class="forum_main_card_list--item_right-wrapper">
                                            <a href="{{ route('index') }}" class="forum_main_card_list--item_right-name">Serious.Partners</a>

                                            <div class="forum-user-preview_card forum_main_card_list--item_right-user-preview">
                                                <div class="forum-user-preview_card_main">
                                                    <div class="forum-user-preview_card_main_info">
                                                        <div class="forum-user-preview_card_main_info-avatar">
                                                            <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="avatar">
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
                                </li>
                            </ul>
                    </div>
                    <div class="forum_main_card_tabs--tab" id="tab3">
                            <ul class="forum_main_card_list">
                                <li class="forum_main_card_list--item">
                                    <div class="forum_main_card_list--item_left">
                                        <span class="forum_main_card_list--item-num">1</span>
                                        <div class="forum_main_card_list--item_left-head">
                                            <p class="forum--tag color3">Case</p>
                                            <a href="{{ route('index') }}" class="forum_main_card_list--item_left-head-title">Serious.Partners - international partner network</a>
                                        </div>
                                    </div>
                                    <div class="forum_main_card_list--item_right">
                                        <p class="forum_main_card_list--item_right-time">17 min. ago</p>
                                        <div class="forum_main_card_list--item_right-wrapper">
                                            <a href="{{ route('index') }}" class="forum_main_card_list--item_right-name">Serious.Partners</a>

                                            <div class="forum-user-preview_card forum_main_card_list--item_right-user-preview">
                                                <div class="forum-user-preview_card_main">
                                                    <div class="forum-user-preview_card_main_info">
                                                        <div class="forum-user-preview_card_main_info-avatar">
                                                            <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="avatar">
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
                                </li>
                            </ul>
                    </div>
                    <div class="forum_main_card_tabs--tab" id="tab4">
                            <ul class="forum_main_card_list">
                                <li class="forum_main_card_list--item">
                                    <div class="forum_main_card_list--item_left">
                                        <span class="forum_main_card_list--item-num">1</span>
                                        <div class="forum_main_card_list--item_left-head">
                                            <p class="forum--tag color4">Case</p>
                                            <a href="{{ route('index') }}" class="forum_main_card_list--item_left-head-title">Serious.Partners - international partner network</a>
                                        </div>
                                    </div>
                                    <div class="forum_main_card_list--item_right">
                                        <p class="forum_main_card_list--item_right-time">17 min. ago</p>
                                        <div class="forum_main_card_list--item_right-wrapper">
                                            <a href="{{ route('index') }}" class="forum_main_card_list--item_right-name">Serious.Partners</a>

                                            <div class="forum-user-preview_card forum_main_card_list--item_right-user-preview">
                                                <div class="forum-user-preview_card_main">
                                                    <div class="forum-user-preview_card_main_info">
                                                        <div class="forum-user-preview_card_main_info-avatar">
                                                            <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="avatar">
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
                                </li>
                            </ul>
                    </div>
                </div>
            </div>

            <div class="filter-aside-banner to-show">
                <img loading="lazy" src="{{asset('assets/images/filter-bunner.png')}}" alt="bunner">
            </div>

            <div class="forum_main_links-group">
                <div class="forum_main_links-group-item">
                    <a href="{{ route('index') }}" class="forum_main_links-group-item--link"></a>

                    <div class="forum_main_links-group-item_main">
                        <p class="forum_main_links-group-item_main-title">CPA-networks blogs</p>
                        <div class="forum_main_links-group-item_main-group">
                            <p class="forum_main_links-group-item_main-text">Topics: <span>67</span></p>
                            <p class="forum_main_links-group-item_main-text">Messages: <span>927</span></p>
                        </div>
                        <div class="forum_main_links-group-item_main-last">
                            <div class="forum_main_links-group-item_main-last-avatar">
                                <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="avatar">
                            </div>
                            <div class="forum_main_links-group-item_main-last-info">
                                <p class="forum_main_links-group-item_main-last-info-title">Serious.Partners - international partner network</p>
                                <p class="forum_main_links-group-item_main-last-info-text">10 Nov 2022 | ADLEAD PRO</p>
                            </div>
                        </div>
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.5248 7.79998H5.20176V2.59998H23.4018V20.8H18.2018V11.4769L7.04024 22.6385L3.36328 18.9615L14.5248 7.79998Z" fill="#F7FAFF"/></svg>
                    </div>
                </div>
                <div class="forum_main_links-group-item">
                    <a href="{{ route('index') }}" class="forum_main_links-group-item--link"></a>

                    <div class="forum_main_links-group-item_main">
                        <p class="forum_main_links-group-item_main-title">Webmasters blogs</p>
                        <div class="forum_main_links-group-item_main-group">
                            <p class="forum_main_links-group-item_main-text">Topics: <span>67</span></p>
                            <p class="forum_main_links-group-item_main-text">Messages: <span>927</span></p>
                        </div>
                        <div class="forum_main_links-group-item_main-last">
                            <div class="forum_main_links-group-item_main-last-avatar">
                                <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="avatar">
                            </div>
                            <div class="forum_main_links-group-item_main-last-info">
                                <p class="forum_main_links-group-item_main-last-info-title">Serious.Partners - international partner network</p>
                                <p class="forum_main_links-group-item_main-last-info-text">10 Nov 2022 | ADLEAD PRO</p>
                            </div>
                        </div>
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.5248 7.79998H5.20176V2.59998H23.4018V20.8H18.2018V11.4769L7.04024 22.6385L3.36328 18.9615L14.5248 7.79998Z" fill="#F7FAFF"/></svg>
                    </div>
                </div>
            </div>

            <div class="forum_main_cards-wrapper">
                <div class="forum_main_cards">
                    <h2 class="forum_main_cards-title">Traffic source</h2>
                    <ul class="forum_main_cards_list">
                        <li class="forum_main_cards_list--item">
                            <div class="forum_main_cards_list--item_left">
                                <div class="forum_main_cards_list--item_left_icon">
                                    <svg width="15" height="28" viewBox="0 0 15 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.93128 15.7542H14.0237L14.7938 10.6798H9.93128V7.39725C9.93128 6.00896 10.6109 4.6583 12.7886 4.6583H15V0.342892C13.7029 0.133143 12.392 0.0185359 11.078 0C7.08024 0 4.45435 2.42742 4.45435 6.82228V10.6798H0V15.7479H4.45435V28H9.92496L9.93128 15.7542Z" fill="white"/></svg>
                                </div>
                                <div class="forum_main_cards_list--item_left_main">
                                    <div class="forum_main_cards_list--item_left_main_top">
                                        <p class="forum--tag color2">New</p>
                                        <a href="{{ route('index') }}" class="forum_main_cards_list--item_left_main_top-link">Facebook</a>
                                    </div>
                                    <p class="forum_main_cards_list--item_left_main_bot-text">
                                        Topics: <span>556</span> | Messages: <span>32 429</span>
                                    </p>
                                </div>
                            </div>
                            <div class="forum_main_cards_list--item_right">
                                <div class="forum_main_links-group-item_main-last-avatar">
                                    <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="avatar">
                                </div>
                                <div class="forum_main_links-group-item_main-last-info">
                                    <div class="forum_main_cards_list--item_left_main_top">
                                        <p class="forum--tag color1">Case</p>
                                        <a href="{{ route('index') }}" class="forum_main_links-group-item_main-last-info-title">Googling cookies to farm a Facebook account. Sites with the FB pixel</a>
                                    </div>
                                    <p class="forum_main_links-group-item_main-last-info-text">10 Nov 2022 | <a href="{{ route('index') }}">ADLEAD PRO</a></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="forum_main_cards">
                    <h2 class="forum_main_cards-title">Technical part</h2>
                    <ul class="forum_main_cards_list">
                        <li class="forum_main_cards_list--item">
                            <div class="forum_main_cards_list--item_left">
                                <div class="forum_main_cards_list--item_left_icon">
                                    <svg width="15" height="28" viewBox="0 0 15 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.93128 15.7542H14.0237L14.7938 10.6798H9.93128V7.39725C9.93128 6.00896 10.6109 4.6583 12.7886 4.6583H15V0.342892C13.7029 0.133143 12.392 0.0185359 11.078 0C7.08024 0 4.45435 2.42742 4.45435 6.82228V10.6798H0V15.7479H4.45435V28H9.92496L9.93128 15.7542Z" fill="white"/></svg>
                                </div>
                                <div class="forum_main_cards_list--item_left_main">
                                    <div class="forum_main_cards_list--item_left_main_top">
                                        <a href="{{ route('index') }}" class="forum_main_cards_list--item_left_main_top-link">FAQ</a>
                                    </div>
                                    <p class="forum_main_cards_list--item_left_main_bot-text">
                                        Topics: <span>556</span> | Messages: <span>32 429</span>
                                    </p>
                                </div>
                            </div>
                            <div class="forum_main_cards_list--item_right">
                                <div class="forum_main_links-group-item_main-last-avatar">
                                    <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="avatar">
                                </div>
                                <div class="forum_main_links-group-item_main-last-info">
                                    <div class="forum_main_cards_list--item_left_main_top">
                                        <p class="forum--tag color1">Case</p>
                                        <a href="{{ route('index') }}" class="forum_main_links-group-item_main-last-info-title">Googling cookies to farm a Facebook account. Sites with the FB pixel</a>
                                    </div>
                                    <p class="forum_main_links-group-item_main-last-info-text">10 Nov 2022 | <a href="{{ route('index') }}">ADLEAD PRO</a></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="forum_main_cards">
                    <h2 class="forum_main_cards-title">The rest</h2>
                    <ul class="forum_main_cards_list">
                        <li class="forum_main_cards_list--item">
                            <div class="forum_main_cards_list--item_left">
                                <div class="forum_main_cards_list--item_left_icon">
                                    <svg width="15" height="28" viewBox="0 0 15 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.93128 15.7542H14.0237L14.7938 10.6798H9.93128V7.39725C9.93128 6.00896 10.6109 4.6583 12.7886 4.6583H15V0.342892C13.7029 0.133143 12.392 0.0185359 11.078 0C7.08024 0 4.45435 2.42742 4.45435 6.82228V10.6798H0V15.7479H4.45435V28H9.92496L9.93128 15.7542Z" fill="white"/></svg>
                                </div>
                                <div class="forum_main_cards_list--item_left_main">
                                    <div class="forum_main_cards_list--item_left_main_top">
                                        <a href="{{ route('index') }}" class="forum_main_cards_list--item_left_main_top-link">Jobs/Job</a>
                                    </div>
                                    <p class="forum_main_cards_list--item_left_main_bot-text">
                                        Topics: <span>556</span> | Messages: <span>32 429</span>
                                    </p>
                                </div>
                            </div>
                            <div class="forum_main_cards_list--item_right">
                                <div class="forum_main_links-group-item_main-last-avatar">
                                    <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="avatar">
                                </div>
                                <div class="forum_main_links-group-item_main-last-info">
                                    <div class="forum_main_cards_list--item_left_main_top">
                                        <a href="{{ route('index') }}" class="forum_main_links-group-item_main-last-info-title">Googling cookies to farm a Facebook account. Sites with the FB pixel</a>
                                    </div>
                                    <p class="forum_main_links-group-item_main-last-info-text">10 Nov 2022 | <a href="{{ route('index') }}">ADLEAD PRO</a></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="forum_main_last-button">
                <p class="forum_main_last-button--title">Send suggestions for improving the forum</p>
                <a href="{{ route('index') }}" class="btn--blue-to-white">Button</a>
            </div>
        </section>

        <aside class="filter-aside forum">
            <div class="forum_aside_stats">
                <h4 class="forum_aside_stats--title">Forum stats</h4>
                <ul class="forum_aside_stats_list">
                    <li class="forum_aside_stats--item">
                        <p class="forum_aside_stats--item-type">Themes:</p>
                        <p class="forum_aside_stats--item-value">500</p>
                    </li>
                    <li class="forum_aside_stats--item">
                        <p class="forum_aside_stats--item-type">Messages:</p>
                        <p class="forum_aside_stats--item-value">105 764</p>
                    </li>
                    <li class="forum_aside_stats--item">
                        <p class="forum_aside_stats--item-type">Users</p>
                        <p class="forum_aside_stats--item-value">1 983</p>
                    </li>
                    <li class="forum_aside_stats--item">
                        <p class="forum_aside_stats--item-type">New user</p>
                        <div class="forum_aside_stats--item-user-wrapper">
                            <a href="{{ route('index') }}" class="forum_aside_stats--item-value">Wade Warren</a>

                            <div class="forum-user-preview_card black forum_main_card_list--item_right-user-preview">
                                <div class="forum-user-preview_card_main">
                                    <div class="forum-user-preview_card_main_info">
                                        <div class="forum-user-preview_card_main_info-avatar">
                                            <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="avatar">
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
                    </li>
                </ul>
            </div>

            <div class="filter-aside-banner sticky">
                <img loading="lazy" src="{{asset('assets/images/filter-bunner.png')}}" alt="bunner">
            </div>
        </aside>
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
        </ul>
    </div>
</section>
@endsection
