@extends('user.layouts.user')

@section('content')
<section class="user-main corpage">
    <div class="user-main-corpage_top">
        <div class="user-main-corpage_top_left">
            <div class="user-main-corpage_top_left-wrapper">
                <div class="header--notif-body--item-icon-wrapper">
                    <div class="user-main-corpage_top_left-icon">
                        <img src="{{asset('assets/images/card-pict.jpg')}}" alt="user">
                    </div>
                    <div class="header--notif-body--item-icon-online"></div> {{-- CCOM для отсутствия в онлайне - класс grey --}}
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
                <button style="background: #F9A826;" {{-- CCOM цвет можешь выводить сюда, на главной value цветов внутри чекбоксов --}}
                type="button" class="user_card-main-example-btn">Elf 80 lvl</button>
            </div>
            <ul class="user-main_trophies_list">
                @for ($a=0; $a<3; $a++)
                <li class="user-main_trophies--item active">
                    <div class="user-main_trophies--item-main">
                        <div class="user-main_trophies--item-main-image">
                            <img src="{{asset('assets/images/card-pict.jpg')}}" alt="avatar">
                        </div>
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
                        <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.5 15.5C10.875 15.5 10.3438 15.2812 9.90625 14.8438C9.46875 14.4062 9.25 13.875 9.25 13.25C9.25 13.1625 9.25625 13.0717 9.26875 12.9777C9.28125 12.8842 9.3 12.8 9.325 12.725L4.0375 9.65C3.825 9.8375 3.5875 9.98425 3.325 10.0903C3.0625 10.1967 2.7875 10.25 2.5 10.25C1.875 10.25 1.34375 10.0312 0.90625 9.59375C0.46875 9.15625 0.25 8.625 0.25 8C0.25 7.375 0.46875 6.84375 0.90625 6.40625C1.34375 5.96875 1.875 5.75 2.5 5.75C2.7875 5.75 3.0625 5.803 3.325 5.909C3.5875 6.0155 3.825 6.1625 4.0375 6.35L9.325 3.275C9.3 3.2 9.28125 3.11575 9.26875 3.02225C9.25625 2.92825 9.25 2.8375 9.25 2.75C9.25 2.125 9.46875 1.59375 9.90625 1.15625C10.3438 0.71875 10.875 0.5 11.5 0.5C12.125 0.5 12.6562 0.71875 13.0938 1.15625C13.5312 1.59375 13.75 2.125 13.75 2.75C13.75 3.375 13.5312 3.90625 13.0938 4.34375C12.6562 4.78125 12.125 5 11.5 5C11.2125 5 10.9375 4.94675 10.675 4.84025C10.4125 4.73425 10.175 4.5875 9.9625 4.4L4.675 7.475C4.7 7.55 4.71875 7.63425 4.73125 7.72775C4.74375 7.82175 4.75 7.9125 4.75 8C4.75 8.0875 4.74375 8.178 4.73125 8.2715C4.71875 8.3655 4.7 8.45 4.675 8.525L9.9625 11.6C10.175 11.4125 10.4125 11.2655 10.675 11.159C10.9375 11.053 11.2125 11 11.5 11C12.125 11 12.6562 11.2188 13.0938 11.6562C13.5312 12.0938 13.75 12.625 13.75 13.25C13.75 13.875 13.5312 14.4062 13.0938 14.8438C12.6562 15.2812 12.125 15.5 11.5 15.5Z" fill="#014EFF"/></svg>       
                        
                        <div class="user-main-corpage_top_right_top_right--btn-body">
                            <div class="user-main-corpage_top_right_top_right--btn-body_top">
                                <p class="user-main-corpage_top_right_top_right--btn-body_top-text">Share</p>
                            </div>
                            <div class="user-main-corpage_top_right_top_right--btn-body_bot">
                                <a href="{{ route('index') }}" class="user-main-corpage_top_right_top_right--btn-body_bot--link">Instagram</a>
                                <a href="{{ route('index') }}" class="user-main-corpage_top_right_top_right--btn-body_bot--link">Telegram</a>
                                <a href="{{ route('index') }}" class="user-main-corpage_top_right_top_right--btn-body_bot--link">Facebook</a>
                                <a href="{{ route('index') }}" class="user-main-corpage_top_right_top_right--btn-body_bot--link">YouTube</a>
                                <a href="{{ route('index') }}" class="user-main-corpage_top_right_top_right--btn-body_bot--link">LinledIn</a>
                            </div>
                        </div>
                    </button>
                    <p class="user-main-corpage_top_right_top_right-text">#1</p>
                </div>
            </div>
            <h1 class="user-main-corpage_top_right-title">Which holidays and events help you earn now</h1>
            <div class="user-main-corpage_top_right-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam dicta praesentium in inventore optio dolores, facere accusamus nisi nulla, laborum explicabo sunt non voluptate. Quibusdam expedita doloribus, accusamus vel minus et a placeat repellat, deserunt quidem quia officiis dignissimos nobis. Id amet aliquid laudantium quia nihil assumenda quo illum magni. Deserunt, labore sequi tempore eveniet voluptatum amet illo ipsum ab in iure repellat minus explicabo minima cumque quibusdam aspernatur recusandae nulla laborum repudiandae veritatis sunt sed eaque aliquid. Esse nobis est similique pariatur temporibus quia earum error rem. Iusto perspiciatis temporibus ad magnam voluptas? Reiciendis quas atque laudantium cumque eum impedit at repudiandae eos eaque, dolor dignissimos dolores error perferendis culpa non optio totam, vel inventore ducimus deserunt? Facere provident molestias placeat nesciunt quibusdam! Modi quia nemo mollitia qui dolorem voluptatibus obcaecati velit. Suscipit veritatis, eligendi autem voluptas laudantium minima quasi, quo ex mollitia ullam, tempora molestiae hic omnis odit perferendis excepturi! Maiores, ut mollitia facilis sit fugiat molestias. Tempore dignissimos dolore, fugiat reprehenderit vel perferendis ex voluptatibus, perspiciatis vero eligendi velit nulla voluptas ratione quibusdam quod laudantium! Non rem quaerat provident distinctio fugiat, consequatur est libero a ducimus cupiditate eius ab explicabo minus sunt, enim amet inventore autem itaque molestias dolores id quasi. Illo a, laboriosam at assumenda repellendus reprehenderit repellat quas vero totam distinctio sapiente dolorem deserunt autem, saepe recusandae voluptatum ad ducimus qui, reiciendis dicta nisi quidem tempore facere.
            </div>
            <p class="user-main-corpage_top_right-last-text">The list is not complete, obviously. For each GEO and culture you can find dozens of local holidays (that are easily googleable). The idea is not in the holidays per se, but in the approaches. If you follow the world news, you’ll be able to create an ad for any occasion. Here are some examples of what we worked with when everyone else was using the same old methods.</p>
            <div class="user-main-corpage_top_right_bottom">
                <div class="user-main-corpage_top_right_bottom_left">
                    <button class="user-main-corpage_top_right_bottom--btn">
                        <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.20964 9.70866H7.79297V5.45866H9.20964M9.20964 12.542H7.79297V11.1253H9.20964M8.5013 1.91699C7.57111 1.91699 6.65002 2.10021 5.79063 2.45618C4.93124 2.81215 4.15038 3.3339 3.49263 3.99165C2.16425 5.32004 1.41797 7.12171 1.41797 9.00033C1.41797 10.8789 2.16425 12.6806 3.49263 14.009C4.15038 14.6667 4.93124 15.1885 5.79063 15.5445C6.65002 15.9004 7.57111 16.0837 8.5013 16.0837C10.3799 16.0837 12.1816 15.3374 13.51 14.009C14.8384 12.6806 15.5846 10.8789 15.5846 9.00033C15.5846 8.07013 15.4014 7.14904 15.0454 6.28965C14.6895 5.43026 14.1677 4.6494 13.51 3.99165C12.8522 3.3339 12.0714 2.81215 11.212 2.45618C10.3526 2.10021 9.4315 1.91699 8.5013 1.91699Z" fill="#014EFF"/></svg>
                        <span>Complaint</span>
                    </button>
                    <button class="user-main-corpage_top_right_bottom--btn">
                        <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="8.50688" cy="9.00492" r="7.085" fill="#014EFF"/><path d="M6.925 6C5.86187 6 5 6.86086 5 7.92274C5 9.84548 7.275 11.5934 8.5 12C9.725 11.5934 12 9.84548 12 7.92274C12 6.86086 11.1381 6 10.075 6C9.424 6 8.84825 6.32285 8.5 6.81699C8.32249 6.56445 8.08668 6.35834 7.81252 6.21613C7.53836 6.07392 7.23393 5.99978 6.925 6Z" fill="white"/></svg>                            
                        <span>Like</span>
                    </button>
                </div>
                <button class="user-main-corpage_top_right_bottom--btn"><span>Reply</span></button>
            </div>
        </div>
    </div>
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
</section>
@endsection