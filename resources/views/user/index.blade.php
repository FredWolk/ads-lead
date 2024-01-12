@extends('user.layouts.user')

@section('content')
    <section class="user-main">
        <div class="user-main_settings user_card">
            <p class="user-main--title">Settings</p>
            <div class="user_card--line"></div>
            <p class="user-main--subtitle">E-mail</p>
            <p class="user-main-email">{{ $userInfo->email }}</p>
            @if(false)
                <button type="button" class="link--blue user-main-email-edit--btn">
                    <span>Edit</span>
                    <img loading="lazy" src="{{asset('assets/images/icons/arrow-right-blue.svg')}}" alt="arrow">
                </button>
                <form action="" method="GET" class="new-email-group">
                    <div class="new-email-group_left">
                        <label class="input-email-label" for="input-email">New E-mail</label>
                        <input id="input-email" type="email" class="input-style" required placeholder="New E-mail">
                    </div>
                    <button style="max-width: 161px; height: 50px" class="btn--blue header_buttons-blue-btn">
                        <span>Save</span>
                        <img loading="lazy" src="{{asset('assets/images/icons/arrow-right-white.svg')}}" alt="arrow">
                    </button>
                </form>
            @endif
            <div class="user_card--line"></div>
            <form action="{{ route('setting.change.name') }}" method="post" class="new-name-group">
                @csrf
                <div class="new-email-group_left">
                    <label class="input-email-label" for="input-email">New Name</label>
                    <input name="name" type="text" class="input-style" required placeholder="New Name">
                </div>
                <button style="max-width: 161px; height: 50px" class="btn--blue header_buttons-blue-btn">
                    <span>Save</span>
                    <img loading="lazy" src="{{asset('assets/images/icons/arrow-right-white.svg')}}" alt="arrow">
                </button>
            </form>
            <div class="user_card--line"></div>

            @if(Session::has('success'))
                <h2 style="color: green; margin-bottom: 20px;">{{Session::get('success')}}</h2>
            @endif

            <p class="user-main--subtitle">Status</p>
            <form action="{{ route('setting.status.change') }}" method="post" class="user-main--status-form">
                @csrf
                <textarea style="height: 117px" class="input-style input-textarea" required
                          placeholder="Set the status to 80 characters, which will be seen by all users on the forum"
                          name="status" maxlength="80">{{ $userInfo->status }}</textarea>
                <button style="max-width: 161px; height: 50px" class="btn--blue header_buttons-blue-btn">
                    <span>Save</span>
                    <img loading="lazy" src="{{asset('assets/images/icons/arrow-right-white.svg')}}" alt="arrow">
                </button>
            </form>
            <div class="user_card--line"></div>
            @if(false)
                <div class="user_card-tooltip-wrapper">
                    <p class="user-main--subtitle">Status</p>
                    <button type="button" class="user_card--toltip--btn">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="9.5" cy="9.5" r="9.5" fill="#014EFF"/>
                            <path
                                d="M9.0298 10.5597C9.0298 10.3329 9.06394 10.1319 9.13222 9.95694C9.2067 9.78194 9.29671 9.62639 9.40223 9.49028C9.51397 9.35417 9.63191 9.22778 9.75605 9.11111C9.8802 8.99444 9.99503 8.88426 10.1006 8.78056C10.2123 8.67037 10.3023 8.55694 10.3706 8.44028C10.4451 8.32361 10.4823 8.19398 10.4823 8.05139C10.4823 7.81806 10.3892 7.63009 10.203 7.4875C10.023 7.34491 9.78088 7.27361 9.47672 7.27361C9.18498 7.27361 8.92427 7.33843 8.6946 7.46806C8.46493 7.5912 8.27561 7.7662 8.12663 7.99306L7 7.30278C7.24829 6.90741 7.5928 6.59306 8.03352 6.35972C8.47424 6.11991 9.00807 6 9.63501 6C10.1006 6 10.5102 6.0713 10.8641 6.21389C11.2179 6.35 11.4941 6.55093 11.6927 6.81667C11.8976 7.08241 12 7.40972 12 7.79861C12 8.05139 11.9628 8.275 11.8883 8.46944C11.8138 8.66389 11.7176 8.83241 11.5996 8.975C11.4817 9.11759 11.3544 9.25046 11.2179 9.37361C11.0875 9.49676 10.9634 9.61667 10.8454 9.73333C10.7275 9.85 10.6282 9.97315 10.5475 10.1028C10.473 10.2324 10.4358 10.3847 10.4358 10.5597H9.0298ZM9.73743 13C9.47672 13 9.26257 12.9125 9.09497 12.7375C8.92737 12.5625 8.84358 12.3551 8.84358 12.1153C8.84358 11.869 8.92737 11.6648 9.09497 11.5028C9.26257 11.3343 9.47672 11.25 9.73743 11.25C10.0043 11.25 10.2185 11.3343 10.3799 11.5028C10.5475 11.6648 10.6313 11.869 10.6313 12.1153C10.6313 12.3551 10.5475 12.5625 10.3799 12.7375C10.2185 12.9125 10.0043 13 9.73743 13Z"
                                fill="white"/>
                        </svg>

                        <p class="user_card-tooltip_body">
                            Awarded when the user wrote 1 message and activated the account.
                        </p>
                    </button>
                </div>
                <button type="button" class="user_card-main-example-btn">Elf 80 lvl</button>
                <div class="custom-radio-color-group-wrapper">
                    <div class="custom-radio-color-group">
                        <label class="custom-radio-color-label">
                            <input type="radio" name="color" class="input-hide custom-radio-color" value="#F9A826">
                            <div class="custom-radio-color-indicator" style="background: #F9A826;"></div>
                        </label>
                        <label class="custom-radio-color-label">
                            <input type="radio" name="color" class="input-hide custom-radio-color" value="#F50057">
                            <div class="custom-radio-color-indicator" style="background: #F50057;"></div>
                        </label>
                        <label class="custom-radio-color-label">
                            <input type="radio" name="color" class="input-hide custom-radio-color" value="#00B0FF">
                            <div class="custom-radio-color-indicator" style="background: #00B0FF;"></div>
                        </label>
                        <label class="custom-radio-color-label">
                            <input type="radio" name="color" class="input-hide custom-radio-color" value="#333333">
                            <div class="custom-radio-color-indicator" style="background: #333333;"></div>
                        </label>
                        <label class="custom-radio-color-label">
                            <input type="radio" name="color" class="input-hide custom-radio-color" value="#00BFA6">
                            <div class="custom-radio-color-indicator" style="background: #00BFA6;"></div>
                        </label>
                        <label class="custom-radio-color-label">
                            <input type="radio" name="color" class="input-hide custom-radio-color" value="#6C63FF">
                            <div class="custom-radio-color-indicator" style="background: #6C63FF;"></div>
                        </label>
                        <label class="custom-radio-color-label">
                            <input type="radio" name="color" class="input-hide custom-radio-color" value="#536DFE">
                            <div class="custom-radio-color-indicator" style="background: #536DFE;"></div>
                        </label>
                    </div>

                    <button type="button" class="custom-radio-color-group-button active">
                        <div class="custom-radio-color-indicator" style="background: #F9A826;"></div>
                        <span>Background Color</span>
                    </button>
                </div>
            @endif
        </div>
        <div class="user-main_right">
            <div class="user-main_info user_card">
                <p class="user-main--title">Information</p>
                <div class="user_card--line"></div>
                <div class="user-main_info_group">
                    <div class="user-main_info_group--item">
                        <p class="user-main_info-subt">Registered:</p>
                        <p class="user-main_info_group--item-text">{{ date('d.m.Y', strtotime($userInfo->created_at)) }}</p>
                    </div>
                    @if(false)
                        <div class="user-main_info_group--item">
                            <p class="user-main_info-subt">Subscribers:</p>
                            <div class="user-main_info_group--item_group">
                                <div class="user-main_info_group--item_group-subs">
                                    <div class="user-main_info_group--item_group-subs-item">
                                        <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="avatar">
                                    </div>
                                    <div class="user-main_info_group--item_group-subs-item">
                                        <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="avatar">
                                    </div>
                                    <div class="user-main_info_group--item_group-subs-item">
                                        <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="avatar">
                                    </div>
                                </div>
                                <p class="user-main_info_group--item_group-text">+ 134</p>
                            </div>
                        </div>
                        <div cla$userInfo->created_atss="user-main_info_group--item">
                            <p class="user-main_info-subt">Your messages:</p>
                            <p class="user-main_info_group--item-text">1 867</p>
                        </div>
                    @endif
                </div>
            </div>
            @if(false)
                <div class="user-main_trophies user_card">
                    <p class="user-main--title">Trophies</p>
                    <div class="user_card--line"></div>
                    <ul class="user-main_trophies_list">
                        <li class="user-main_trophies--item active">
                            <div class="user-main_trophies--item-main">
                                <div class="user-main_trophies--item-main-image">
                                    <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="avatar">
                                </div>
                                <div class="puser-main_trophies--item-main-text">First</div>
                            </div>

                            <button type="button" class="user_card--toltip--btn user-main_trophies--item-toolti-btn">
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
                        @for ($a=0; $a<30; $a++)
                            <li class="user-main_trophies--item">
                                <div class="user-main_trophies--item-main">
                                    <div class="user-main_trophies--item-main-image">
                                        <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="avatar">
                                    </div>
                                    <div class="puser-main_trophies--item-main-text">First</div>
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
                    <button type="button" class="link--blue user-main_trophies-show-all--btn">
                        <span>Show all</span>
                        <img loading="lazy" src="{{asset('assets/images/icons/arrow-right-blue.svg')}}" alt="arrow">
                    </button>
                </div>
            @endif
        </div>
    </section>
@endsection
