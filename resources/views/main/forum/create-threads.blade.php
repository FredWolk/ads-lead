@extends('layouts.main')

@section('content')
    <style>
        .create__flex {
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }

        .custom-select--btn span {
            font-weight: 500;
        }

        .custom-select_list-item {
            width: auto;
        }
    </style>
    <section class="articlespage forumpage">
        <div class="container">
            <div class="forumpage-board--main-list-wrapper">
                <div style="margin-top: 20px;" class="user-main-corpage_bot">
                    <div class="user-main-corpage_bot_left">
                        <div class="header--notif-body--item-icon-wrapper">
                            <div class="user-main-corpage_top_left-icon">
                                <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="user">
                            </div>
                        </div>
                        <div class="user-main-corpage_top_left-name-wrapper">
                            <p class="user-main-corpage_top_left-name">Bessie Cooper</p>
                        </div>
                    </div>
                    <form action="" method="POST" class="user-main-corpage_bot_right">
                        <div class="user-main-corpage_bot_right-pagin">
                            <div class="create__flex">
                                <div class="popup_main-inputs-item">
                                    <div class="custom-select_wrapper">
                                        <button type="button" class="custom-select--btn">
                                            <span style="color: white" id="slect__input">Без префикса</span>
                                            <svg width="16" height="11" viewBox="0 0 16 11" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M2.69554 0.87868L0.574219 3L7.99884 10.4246L15.4235 3L13.3021 0.878681L7.99884 5.93933L2.69554 0.87868Z"
                                                      fill="#272C31"/>
                                            </svg>
                                        </button>

                                        <div class="custom-select_list-wrapper">
                                            <ul class="custom-select_list">
                                                <li class="custom-select_list-item">
                                                    <label class="forum--tag color1 custom-select_list-item-label">
                                                        <input type="radio" data-color="color1"
                                                               class="custom-radio input-hide"
                                                               name="prefix"
                                                               value="Gambling">
                                                        <span class="custom-select_list-item-label-text">Gambling</span>
                                                    </label>
                                                </li>
                                                <li class="custom-select_list-item">
                                                    <label class="forum--tag color2 custom-select_list-item-label">
                                                        <input type="radio" data-color="color2"
                                                               class="custom-radio input-hide"
                                                               name="prefix"
                                                               value="Betting">
                                                        <span class="custom-select_list-item-label-text">Betting</span>
                                                    </label>
                                                </li>
                                                <li class="custom-select_list-item">
                                                    <label class="forum--tag color3 custom-select_list-item-label">
                                                        <input type="radio" data-color="color3"
                                                               class="custom-radio input-hide"
                                                               name="prefix"
                                                               value="Nutra">
                                                        <span class="custom-select_list-item-label-text">Nutra</span>
                                                    </label>
                                                </li>
                                                <li class="custom-select_list-item">
                                                    <label class="forum--tag color4 custom-select_list-item-label">
                                                        <input type="radio" data-color="color4"
                                                               class="custom-radio input-hide"
                                                               name="prefix"
                                                               value="Sweepstakes">
                                                        <span
                                                            class="custom-select_list-item-label-text">Sweepstakes</span>
                                                    </label>
                                                </li>
                                                <li class="custom-select_list-item">
                                                    <label class="forum--tag color5 custom-select_list-item-label">
                                                        <input type="radio" data-color="color5"
                                                               class="custom-radio input-hide"
                                                               name="prefix"
                                                               value="Ppc">
                                                        <span class="custom-select_list-item-label-text">Ppc</span>
                                                    </label>
                                                </li>
                                                <li class="custom-select_list-item">
                                                    <label class="forum--tag color6 custom-select_list-item-label">
                                                        <input type="radio" data-color="color6"
                                                               class="custom-radio input-hide"
                                                               name="prefix"
                                                               value="Whitehat">
                                                        <span class="custom-select_list-item-label-text">Whitehat</span>
                                                    </label>
                                                </li>
                                                <li class="custom-select_list-item">
                                                    <label class="forum--tag color7 custom-select_list-item-label">
                                                        <input type="radio" data-color="color7"
                                                               class="custom-radio input-hide"
                                                               name="prefix"
                                                               value="Cpi">
                                                        <span class="custom-select_list-item-label-text">Cpi</span>
                                                    </label>
                                                </li>
                                                <li class="custom-select_list-item">
                                                    <label class="forum--tag color8 custom-select_list-item-label">
                                                        <input type="radio" data-color="color8"
                                                               class="custom-radio input-hide"
                                                               name="prefix"
                                                               value="Wap-Click">
                                                        <span
                                                            class="custom-select_list-item-label-text">Wap-Click</span>
                                                    </label>
                                                </li>
                                                <li class="custom-select_list-item">
                                                    <label class="forum--tag color9 custom-select_list-item-label">
                                                        <input type="radio" data-color="color9"
                                                               class="custom-radio input-hide"
                                                               name="prefix"
                                                               value="Mobile content">
                                                        <span
                                                            class="custom-select_list-item-label-text">Mobile content</span>
                                                    </label>
                                                </li>
                                                <li class="custom-select_list-item">
                                                    <label class="forum--tag color10 custom-select_list-item-label">
                                                        <input type="radio" data-color="color10"
                                                               class="custom-radio input-hide"
                                                               name="prefix"
                                                               value="E-commerce">
                                                        <span
                                                            class="custom-select_list-item-label-text">E-commerce</span>
                                                    </label>
                                                </li>
                                                <li class="custom-select_list-item">
                                                    <label class="forum--tag color11 custom-select_list-item-label">
                                                        <input type="radio" data-color="color11"
                                                               class="custom-radio input-hide"
                                                               name="prefix"
                                                               value="Travel">
                                                        <span class="custom-select_list-item-label-text">Travel</span>
                                                    </label>
                                                </li>
                                                <li class="custom-select_list-item">
                                                    <label class="forum--tag color12 custom-select_list-item-label">
                                                        <input type="radio" data-color="color12"
                                                               class="custom-radio input-hide"
                                                               name="prefix"
                                                               value="Utilites">
                                                        <span class="custom-select_list-item-label-text">Utilites</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="popup_main-inputs-item">
                                    <input placeholder="Enter your name" required class="input-style" type="text"
                                           name="name" id="Name">
                                </div>
                            </div>
                            <div>

                            </div>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
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
@endsection

@section('scripts')
    <script>
        $('input[name="prefix"]').on('input', function () {
            let value = $(this).val(),
                color = $(this).attr('data-color')
            $('#slect__input').removeClass().addClass(`forum--tag ${color}`).val(value);
        })
    </script>
@endsection
