
@extends('layouts.main')

@section('content')
<section class="breadcrambs top">
    <div class="container">
        <ul class="breadcrambs_list">
            <li class="breadcrambs_list-item">
                <a href="{{ route('index') }}">Homepage</a>
            </li>
            <li class="breadcrambs_list-item">
                <a href="{{ route('events') }}">Events</a>
            </li>
        </ul>
    </div>
</section>

<section class="cpapage eventspage">
    <div class="container">
        <section class="cpapage_main">
            <div class="cpapage_main-to-hide" style="margin-block: 25px">
                <h1 class="title">Events</h1>
                <p style="margin-bottom: 20px" class="articlespage-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellen.</p>
            </div>
            <div class="cpapage_info-wrapper">
                <div class="cpapage_info--block">
                    <ul class="cpapage_info-list events">
                        @for ($i=0; $i<4; $i++)
                                <li class="article--card">
                                    <a class="article--card-link" href="{{ route('index') }}"></a>
                                    <img src="{{asset('assets/images/card-pict.jpg')}}" alt="banner">
                                    <div class="article--card_info">
                                        <div class="eventcard-item">
                                            <p class="main-events__article--card_info_top-text"><svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.5 6.1875C4.0856 6.1875 3.68817 6.02288 3.39515 5.72985C3.10212 5.43683 2.9375 5.0394 2.9375 4.625C2.9375 4.2106 3.10212 3.81317 3.39515 3.52015C3.68817 3.22712 4.0856 3.0625 4.5 3.0625C4.9144 3.0625 5.31183 3.22712 5.60485 3.52015C5.89788 3.81317 6.0625 4.2106 6.0625 4.625C6.0625 4.83019 6.02208 5.03337 5.94356 5.22294C5.86504 5.41251 5.74995 5.58476 5.60485 5.72985C5.45976 5.87495 5.28751 5.99004 5.09794 6.06856C4.90837 6.14708 4.70519 6.1875 4.5 6.1875ZM4.5 0.25C3.33968 0.25 2.22688 0.710936 1.40641 1.53141C0.585936 2.35188 0.125 3.46468 0.125 4.625C0.125 7.90625 4.5 12.75 4.5 12.75C4.5 12.75 8.875 7.90625 8.875 4.625C8.875 3.46468 8.41406 2.35188 7.59359 1.53141C6.77312 0.710936 5.66032 0.25 4.5 0.25Z" fill="#272C31"/></svg>USA | HOLLYWOOD |FLORIDA</p>
                                            <div class="main-events__article--card_info_top-date">
                                                <span>1-3 NOVEMBER 2022</span>
                                            </div>
                                        </div>
                                        <h2 class="article--card_info-title">SBC Summit Latinoamérica</h2>
                                        <p class="eventcard-item-organizer">organizer <span>ABC Club</span></p>
                                    </div>
                                </li>
                            @endfor
                    </ul>
                </div>

                <div class="pagination">
                    <button type="button" class="pagination_button left">
                        <img src="{{asset('assets/images/icons/arrow-right-white.svg')}}" alt="arrow">
                    </button>
                    <ul class="pagination_list">
                        <li class="pagination--item active">1</li>
                        <li class="pagination--item">2</li>
                        <li class="pagination--item">3</li>
                        <li class="pagination--item">4</li>
                    </ul>
                    <button type="button" class="pagination_button right">
                        <img src="{{asset('assets/images/icons/arrow-right-white.svg')}}" alt="arrow">
                    </button>
                </div>
            </div>
            <aside class="articles_seo-text">
                <h3 class="articles_seo-text--title">seo text</h3>
                <p class="articles_seo-text--text">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                    <br>    
                    <br>
                    Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                    <br>
                    <br>
                    Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
                    <br>    
                    Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit </p>
                <button type="button" class="link--black-rotateble-arrows readmore--btn">
                    <span>read more</span>
                    <div class="link--black-rotateble-arrows-group">
                        @for ($a=0; $a<3; $a++)
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.37879 4.5H3.00011V1.5H13.5001V12H10.5001V6.62132L4.06077 13.0607L1.93945 10.9393L8.37879 4.5Z" fill="#272C31"/></svg>
                        @endfor
                    </div>
                </button>
            </aside>
        </section>

        <aside class="filter-aside">
            <form action="/" method="GET">
                <ul class="filter-aside_list">
                    <li class="filter-aside_list-item">
                        <button type="button" class="filter-aside--btn">
                            <p class="filter-aside--btn-text">Time period</p>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.9971 3.09753H11.0031V11.003H3.09761V12.997H11.0031V20.9025H12.9971V12.997H20.9026V11.003H12.9971V3.09753Z" fill="#181A1C"/></svg>                            
                        </button>
                        <div class="filter-aside_list-item_wrapper">
                            <form action="" method="POST">
                                <div class="main-events_right_top_month_arrows">
                                    <button type="button" class="arrow--btn left">
                                        <img class="arrow--btn-black" src="{{asset('assets/images/icons/arrow-right-black.svg')}}" alt="arrow">
                                        <img class="arrow--btn-blue" src="{{asset('assets/images/icons/arrow-right-blue.svg')}}" alt="blue">
                                    </button>
                                    <p class="events-filter-aside-time">2023</p>
                                    <button type="button" class="arrow--btn">
                                        <img class="arrow--btn-black" src="{{asset('assets/images/icons/arrow-right-black.svg')}}" alt="arrow">
                                        <img class="arrow--btn-blue" src="{{asset('assets/images/icons/arrow-right-blue.svg')}}" alt="blue">
                                    </button>
                                </div>
                                <div class="events-filter-aside-month-checkbox-wrapper">
                                    <div class="custom-checkbox-month-labels">
                                        <label class="custom-checkbox-month-label">
                                            <input class="input-hide" type="checkbox" name="month" value="January">
                                            <div class="custom-checkbox-month-label-wrap">
                                                <span class="custom-checkbox-month-label-text">January</span>
                                            </div>
                                        </label>
                                        <label class="custom-checkbox-month-label">
                                            <input class="input-hide" type="checkbox" name="month" value="February">
                                            <div class="custom-checkbox-month-label-wrap">
                                                <span class="custom-checkbox-month-label-text">February</span>
                                            </div>
                                        </label>
                                        <label class="custom-checkbox-month-label">
                                            <input class="input-hide" type="checkbox" name="month" value="March">
                                            <div class="custom-checkbox-month-label-wrap">
                                                <span class="custom-checkbox-month-label-text">March</span>
                                            </div>
                                        </label>
                                        <label class="custom-checkbox-month-label">
                                            <input class="input-hide" type="checkbox" name="month" value="April">
                                            <div class="custom-checkbox-month-label-wrap">
                                                <span class="custom-checkbox-month-label-text">April</span>
                                            </div>
                                        </label>
                                        <label class="custom-checkbox-month-label">
                                            <input class="input-hide" type="checkbox" name="month" value="May">
                                            <div class="custom-checkbox-month-label-wrap">
                                                <span class="custom-checkbox-month-label-text">May</span>
                                            </div>
                                        </label>
                                        <label class="custom-checkbox-month-label">
                                            <input class="input-hide" type="checkbox" name="month" value="June">
                                            <div class="custom-checkbox-month-label-wrap">
                                                <span class="custom-checkbox-month-label-text">June</span>
                                            </div>
                                        </label>
                                        <label class="custom-checkbox-month-label">
                                            <input class="input-hide" type="checkbox" name="month" value="July">
                                            <div class="custom-checkbox-month-label-wrap">
                                                <span class="custom-checkbox-month-label-text">July</span>
                                            </div>
                                        </label>
                                        <label class="custom-checkbox-month-label">
                                            <input class="input-hide" type="checkbox" name="month" value="August">
                                            <div class="custom-checkbox-month-label-wrap">
                                                <span class="custom-checkbox-month-label-text">August</span>
                                            </div>
                                        </label>
                                        <label class="custom-checkbox-month-label">
                                            <input class="input-hide" type="checkbox" name="month" value="September">
                                            <div class="custom-checkbox-month-label-wrap">
                                                <span class="custom-checkbox-month-label-text">September</span>
                                            </div>
                                        </label>
                                        <label class="custom-checkbox-month-label">
                                            <input class="input-hide" type="checkbox" name="month" value="October">
                                            <div class="custom-checkbox-month-label-wrap">
                                                <span class="custom-checkbox-month-label-text">October</span>
                                            </div>
                                        </label>
                                        <label class="custom-checkbox-month-label">
                                            <input class="input-hide" type="checkbox" name="month" value="November">
                                            <div class="custom-checkbox-month-label-wrap">
                                                <span class="custom-checkbox-month-label-text">November</span>
                                            </div>
                                        </label>
                                        <label class="custom-checkbox-month-label">
                                            <input class="input-hide" type="checkbox" name="month" value="December">
                                            <div class="custom-checkbox-month-label-wrap">
                                                <span class="custom-checkbox-month-label-text">December</span>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                </ul>
            </form>
            <div class="filter-aside-banner sticky">
                <img src="{{asset('assets/images/filter-bunner.png')}}" alt="bunner">
            </div>
        </aside>

        <div class="cpapage_main-to-show">
            <h1 class="title">CPA-networks</h1>
            <p class="articlespage-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellen.</p>
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
                <a href="{{ route('events') }}">Events</a>
            </li>
        </ul>
    </div>
</section>
@endsection
