@extends('layouts.main')

@section('content')
<section class="breadcrambs top">
    <div class="container">
        <ul class="breadcrambs_list">
            <li class="breadcrambs_list-item">
                <a href="{{ route('index') }}">Homepage</a>
            </li>
            <li class="breadcrambs_list-item">
                <a href="{{ route('events') }}">SBC Summit Latinoamérica</a>
            </li>
        </ul>
    </div>
</section>
<section class="videopage articlepage eventpage">
    <div class="container">
        <div class="articlepage_top"> 
            <div class="eventpage_top">
                <h1 class="title">SBC Summit Latinoamérica</h1>
                <p class="conference--evetn">conference</p>
            </div>
        </div>
        <div class="videopage_wrapper">
            <article class="videopage_main">
                <div class="videopage_main--image">
                    <img src="{{asset('assets/images/card-pict.jpg')}}" alt="banner">
                    <p class="conference--evetn">conference</p>
                </div>
                <div class="eventpage_card">
                    <div class="eventpage_card--item">
                        <p class="eventpage_card--item-title">Date</p>
                        <p class="eventpage_card--item-text">1-3 november 2022 - 9:00</p>
                    </div>
                    <div class="eventpage_card-line"></div>
                    <div class="eventpage_card--item">
                        <p class="eventpage_card--item-title">Location</p>
                        <p class="eventpage_card--item-text">Lago Events - 6 HaMea VeEsrim St., Rishon LeTsiyon, Israel</p>
                    </div>
                    <div class="eventpage_card-line"></div>
                    <div class="eventpage_card--item">
                        <p class="eventpage_card--item-title">social media</p>
                        <div class="eventpage_card--item_links">
                            <a class="eventpage_card--item--link" href="{{ route('index') }}">facebook</a>
                            <a class="eventpage_card--item--link" href="{{ route('index') }}">instagram</a>
                        </div>
                    </div>
                    <div class="eventpage_card-line"></div>
                    <div class="eventpage_card--item">
                        <p class="eventpage_card--item-title">website</p>
                        <a class="eventpage_card--item--link" href="{{ route('index') }}">adlead.pro</a>
                    </div>
                </div>
                <h2 class="articlepage--text-subtitle">Which holidays and events help you earn now</h2>
                <p class="videopage_main--text" style="margin-bottom: 20px">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                    <br>
                    <br>
                    Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                    <br>
                    <br>
                    Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
                    <br>
                    Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam qu.
                </p>
                <div class="filter-aside-banner to-show">
                    <img src="{{asset('assets/images/filter-bunner.png')}}" alt="bunner">
                </div>
            </article>
            <aside class="filter-aside">
                <div class="filter-aside-banner sticky">
                    <img src="{{asset('assets/images/filter-bunner.png')}}" alt="bunner">
                </div>
            </aside>
        </div>
    </div>
</section>
<aside class="main-video aside-other-wideos">
    <div class="container">
        <h3 class="aside-other-wideos-title">Related Events</h3>

        <div class="swiper">
            <ul class="swiper-wrapper">
                @for ($i=0; $i<6; $i++)
                    <li class="eventpage_asidecard swiper-slide">
                        <a class="eventpage_asidecard--link" href="{{ route('index') }}"></a>
                        <div class="eventpage_asidecard_main">
                            <div class="eventpage_asidecard_main_left">
                                <img src="{{asset('assets/images/card-pict.jpg')}}" alt="banner">
                            </div>
                            <div class="eventpage_asidecard_main_left_info">
                                <p class="eventpage_asidecard_main_left_info-date">11/14-18/2022</p>
                                <h4 class="eventpage_asidecard_main_left_info-title">iGaming Crossroads Summit</h4>
                            </div>

                            <div class="eventpage_asidecard_main-icon">
                                <img src="{{asset('assets/images/card-pict.jpg')}}" alt="banner">
                            </div>
                        </div>
                    </li>
                @endfor
            </ul>

            <button type="button" class="swiper-button-prev swiper-button arrow--btn left">
                <img class="arrow--btn-black" src="{{asset('assets/images/icons/arrow-right-black.svg')}}" alt="arrow">
                <img class="arrow--btn-blue" src="{{asset('assets/images/icons/arrow-right-blue.svg')}}" alt="blue">
            </button>
            <button type="button" class="swiper-button-next swiper-button arrow--btn">
                <img class="arrow--btn-black" src="{{asset('assets/images/icons/arrow-right-black.svg')}}" alt="arrow">
                <img class="arrow--btn-blue" src="{{asset('assets/images/icons/arrow-right-blue.svg')}}" alt="blue">
            </button>

            <div class="main_articles--mobile">
                <div class="main_articles_top_link-wrapp-arrows">
                    @for ($i=0; $i<10; $i++)
                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.2425 6L6.43923 2.1967L8.56055 0.0753784L15.9852 7.5L8.56055 14.9246L6.43923 12.8033L10.2425 9L1.13593 9L1.13593 6H10.2425Z" fill="#272C31"/></svg>
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
                <a href="{{ route('events') }}">SBC Summit Latinoamérica</a>
            </li>
        </ul>
    </div>
</section>
@endsection