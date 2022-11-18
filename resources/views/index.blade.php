@extends('layouts.main')

@section('content')
<section class="main_articles">
    <div class="container">
        <h1 class="mainpage-title"><span>Affjournal</span> — is your guide to traffic arbitrage</h1>
        <div class="main_articles_top">
            <h2 class="title">Last articles</h2>
            <div class="main_articles_top_link-wrapp">
                <div class="main_articles_top_link-wrapp-arrows">
                    @for ($i=0; $i<10; $i++)
                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.2425 6L6.43923 2.1967L8.56055 0.0753784L15.9852 7.5L8.56055 14.9246L6.43923 12.8033L10.2425 9L1.13593 9L1.13593 6H10.2425Z" fill="#272C31"/></svg>                        
                    @endfor
                </div>
                <a class="btn--grey" href="{{ route('index') }}">Show all</a>
            </div>
        </div>
        <ul class="main_articles_info">
            <li class="article--card big">
                <a class="article--card-link" href="{{ route('index') }}"></a>
                <img src="{{asset('assets/images/card-pict.jpg')}}" alt="banner">
                <div class="article--card_info">
                    <p class="article--card_info-date">01/21/2022</p>
                    <ul class="article--card_info_tags-list">
                        <li class="article--card_info_tags-list-item mobhide">
                            <a class="article--card_info_tags-list-item--link" href="{{ route('index') }}">#facebook</a>
                        </li>
                        <li class="article--card_info_tags-list-item mobhide">
                            <a class="article--card_info_tags-list-item--link" href="{{ route('index') }}">#affiliatemarketing</a>
                        </li>
                        <li class="article--card_info_tags-list-item mobhide">
                            <a class="article--card_info_tags-list-item--link" href="{{ route('index') }}">#gambling</a>
                        </li>
                    </ul>
                    <h3 class="article--card_info-title">What are BINs and what should I do with this information</h3>
                    <p class="article--card_info-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.The point of using Lorem Ipsum is that it has a more-or-less normal distribution…</p>
                    <p class="article--card_info-author">by <a href="{{ route('index') }}">Wade Warren</a></p>

                    <div class="article--card_info-views">
                        <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.99967 1.29167C8.07227 1.2881 9.1241 1.58729 10.0342 2.15484C10.9444 2.72239 11.6759 3.53526 12.1447 4.5C11.6765 5.46517 10.9451 6.27843 10.0348 6.84606C9.12453 7.41368 8.07242 7.71259 6.99967 7.70833C5.92693 7.71259 4.87481 7.41368 3.96454 6.84606C3.05427 6.27843 2.3229 5.46517 1.85467 4.5C2.32345 3.53526 3.05496 2.72239 3.9651 2.15484C4.87525 1.58729 5.92708 1.2881 6.99967 1.29167V1.29167ZM6.99967 0.125C4.08301 0.125 1.59217 1.93917 0.583008 4.5C1.59217 7.06083 4.08301 8.875 6.99967 8.875C9.91634 8.875 12.4072 7.06083 13.4163 4.5C12.4072 1.93917 9.91634 0.125 6.99967 0.125ZM6.99967 3.04167C7.38645 3.04167 7.75738 3.19531 8.03087 3.4688C8.30436 3.74229 8.45801 4.11323 8.45801 4.5C8.45801 4.88677 8.30436 5.25771 8.03087 5.5312C7.75738 5.80469 7.38645 5.95833 6.99967 5.95833C6.6129 5.95833 6.24197 5.80469 5.96848 5.5312C5.69499 5.25771 5.54134 4.88677 5.54134 4.5C5.54134 4.11323 5.69499 3.74229 5.96848 3.4688C6.24197 3.19531 6.6129 3.04167 6.99967 3.04167V3.04167ZM6.99967 1.875C5.55301 1.875 4.37467 3.05333 4.37467 4.5C4.37467 5.94667 5.55301 7.125 6.99967 7.125C8.44634 7.125 9.62467 5.94667 9.62467 4.5C9.62467 3.05333 8.44634 1.875 6.99967 1.875Z" fill="#181A1C"/></svg>                        
                        <span>1 947</span>
                    </div>
                    <div class="article--card-top">
                        <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.45249 14.5C0.584113 12.8834 -0.171071 11.3532 0.260689 9.26339C0.579434 7.72023 1.62315 6.46472 1.72322 4.92452C2.16906 5.73587 2.35536 6.32092 2.40517 7.16877C3.82318 5.43144 4.76022 3.02637 4.81571 0.5C4.81571 0.5 8.50908 2.67012 8.75143 5.9481C9.06938 5.27245 9.22944 4.19936 8.91149 3.50389C9.86532 4.1994 15.4482 10.3737 8.15528 14.5C9.52643 11.8302 8.50901 8.22787 6.12832 6.56412C6.28732 7.27951 6.00856 9.9477 4.95533 11.1201C5.24716 9.16111 4.67767 8.33276 4.67767 8.33276C4.67767 8.33276 4.4822 9.43005 3.72382 10.5385C3.03129 11.5507 2.55144 12.6251 3.45249 14.5Z" fill="white"/></svg>                            
                        <p>TOP</p>
                    </div>
                </div>
            </li>

            @for ($i=0; $i<3; $i++)
            <li class="article--card">
                <a class="article--card-link" href="{{ route('index') }}"></a>
                <img src="{{asset('assets/images/card-pict.jpg')}}" alt="banner">
                <div class="article--card_info">
                    <p class="article--card_info-date">01/21/2022</p>
                    <ul class="article--card_info_tags-list">
                        <li class="article--card_info_tags-list-item mobhide">
                            <a class="article--card_info_tags-list-item--link" href="{{ route('index') }}">#facebook</a>
                        </li>
                        <li class="article--card_info_tags-list-item mobhide">
                            <a class="article--card_info_tags-list-item--link" href="{{ route('index') }}">#affiliatemarketing</a>
                        </li>
                        <li class="article--card_info_tags-list-item mobhide">
                            <a class="article--card_info_tags-list-item--link" href="{{ route('index') }}">#gambling</a>
                        </li>
                    </ul>
                    <h3 class="article--card_info-title">What are BINs and what should I do with this information</h3>
                    <p class="article--card_info-author">by <a href="{{ route('index') }}">Wade Warren</a></p>

                    <div class="article--card_info-views">
                        <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.99967 1.29167C8.07227 1.2881 9.1241 1.58729 10.0342 2.15484C10.9444 2.72239 11.6759 3.53526 12.1447 4.5C11.6765 5.46517 10.9451 6.27843 10.0348 6.84606C9.12453 7.41368 8.07242 7.71259 6.99967 7.70833C5.92693 7.71259 4.87481 7.41368 3.96454 6.84606C3.05427 6.27843 2.3229 5.46517 1.85467 4.5C2.32345 3.53526 3.05496 2.72239 3.9651 2.15484C4.87525 1.58729 5.92708 1.2881 6.99967 1.29167V1.29167ZM6.99967 0.125C4.08301 0.125 1.59217 1.93917 0.583008 4.5C1.59217 7.06083 4.08301 8.875 6.99967 8.875C9.91634 8.875 12.4072 7.06083 13.4163 4.5C12.4072 1.93917 9.91634 0.125 6.99967 0.125ZM6.99967 3.04167C7.38645 3.04167 7.75738 3.19531 8.03087 3.4688C8.30436 3.74229 8.45801 4.11323 8.45801 4.5C8.45801 4.88677 8.30436 5.25771 8.03087 5.5312C7.75738 5.80469 7.38645 5.95833 6.99967 5.95833C6.6129 5.95833 6.24197 5.80469 5.96848 5.5312C5.69499 5.25771 5.54134 4.88677 5.54134 4.5C5.54134 4.11323 5.69499 3.74229 5.96848 3.4688C6.24197 3.19531 6.6129 3.04167 6.99967 3.04167V3.04167ZM6.99967 1.875C5.55301 1.875 4.37467 3.05333 4.37467 4.5C4.37467 5.94667 5.55301 7.125 6.99967 7.125C8.44634 7.125 9.62467 5.94667 9.62467 4.5C9.62467 3.05333 8.44634 1.875 6.99967 1.875Z" fill="#181A1C"/></svg>                        
                        <span>1 947</span>
                    </div>
                </div>
            </li>
            @endfor
        </ul>

        <div class="main_articles--mobile">
            <div class="swiper">
                <ul class="swiper-wrapper">
                    @for ($i=0; $i<6; $i++)
                        <li class="article--card swiper-slide">
                            <a class="article--card-link" href="{{ route('index') }}"></a>
                            <img src="{{asset('assets/images/card-pict.jpg')}}" alt="banner">
                            <div class="article--card_info">
                                <ul class="article--card_info_tags-list">
                                    <li class="article--card_info_tags-list-item mobhide">
                                        <a class="article--card_info_tags-list-item--link" href="{{ route('index') }}">#facebook</a>
                                    </li>
                                    <li class="article--card_info_tags-list-item mobhide">
                                        <a class="article--card_info_tags-list-item--link" href="{{ route('index') }}">#affiliatemarketing</a>
                                    </li>
                                    <li class="article--card_info_tags-list-item mobhide">
                                        <a class="article--card_info_tags-list-item--link" href="{{ route('index') }}">#gambling</a>
                                    </li>
                                </ul>
                                <h3 class="article--card_info-title">What are BINs and what should I do with this information</h3>
                                <p class="article--card_info-author">by <a href="{{ route('index') }}">Wade Warren</a></p>
            
                                <div class="article--card_info-views">
                                    <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.99967 1.29167C8.07227 1.2881 9.1241 1.58729 10.0342 2.15484C10.9444 2.72239 11.6759 3.53526 12.1447 4.5C11.6765 5.46517 10.9451 6.27843 10.0348 6.84606C9.12453 7.41368 8.07242 7.71259 6.99967 7.70833C5.92693 7.71259 4.87481 7.41368 3.96454 6.84606C3.05427 6.27843 2.3229 5.46517 1.85467 4.5C2.32345 3.53526 3.05496 2.72239 3.9651 2.15484C4.87525 1.58729 5.92708 1.2881 6.99967 1.29167V1.29167ZM6.99967 0.125C4.08301 0.125 1.59217 1.93917 0.583008 4.5C1.59217 7.06083 4.08301 8.875 6.99967 8.875C9.91634 8.875 12.4072 7.06083 13.4163 4.5C12.4072 1.93917 9.91634 0.125 6.99967 0.125ZM6.99967 3.04167C7.38645 3.04167 7.75738 3.19531 8.03087 3.4688C8.30436 3.74229 8.45801 4.11323 8.45801 4.5C8.45801 4.88677 8.30436 5.25771 8.03087 5.5312C7.75738 5.80469 7.38645 5.95833 6.99967 5.95833C6.6129 5.95833 6.24197 5.80469 5.96848 5.5312C5.69499 5.25771 5.54134 4.88677 5.54134 4.5C5.54134 4.11323 5.69499 3.74229 5.96848 3.4688C6.24197 3.19531 6.6129 3.04167 6.99967 3.04167V3.04167ZM6.99967 1.875C5.55301 1.875 4.37467 3.05333 4.37467 4.5C4.37467 5.94667 5.55301 7.125 6.99967 7.125C8.44634 7.125 9.62467 5.94667 9.62467 4.5C9.62467 3.05333 8.44634 1.875 6.99967 1.875Z" fill="#181A1C"/></svg>                        
                                    <span>1 947</span>
                                </div>
                            </div>
                        </li>
                    @endfor
                </ul>
                <div class="main_articles_top_link-wrapp-arrows">
                    @for ($i=0; $i<10; $i++)
                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.2425 6L6.43923 2.1967L8.56055 0.0753784L15.9852 7.5L8.56055 14.9246L6.43923 12.8033L10.2425 9L1.13593 9L1.13593 6H10.2425Z" fill="#272C31"/></svg>                        
                    @endfor
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <a class="btn--grey" href="{{ route('index') }}">Show all</a>
        </div>
    </div>
</section>
<section class="main-cpa">
    <div class="container">
        <h2 class="title">CPA-networks</h2>
        <div class="main-cpa_wrapper">
            <div class="main-cpa_review">
                <p class="main-cpa-subt">review</p>
                <ul class="main_articles_info">
                    @for ($i=0; $i<4; $i++)
                    <li class="article--card">
                        <a class="article--card-link" href="{{ route('index') }}"></a>
                        <img src="{{asset('assets/images/card-pict.jpg')}}" alt="banner">
                        <div class="article--card_info">
                            <ul class="article--card_info_tags-list">
                                <li class="article--card_info_tags-list-item">
                                    <a class="article--card_info_tags-list-item--link" href="{{ route('index') }}">#facebook</a>
                                </li>
                                <li class="article--card_info_tags-list-item">
                                    <a class="article--card_info_tags-list-item--link" href="{{ route('index') }}">#affiliatemarketing</a>
                                </li>
                                <li class="article--card_info_tags-list-item">
                                    <a class="article--card_info_tags-list-item--link" href="{{ route('index') }}">#gambling</a>
                                </li>
                            </ul>
                            <h3 class="article--card_info-title">What are BINs and what should I do with this information</h3>
        
                            <div class="article--card_info-views">
                                <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.99967 1.29167C8.07227 1.2881 9.1241 1.58729 10.0342 2.15484C10.9444 2.72239 11.6759 3.53526 12.1447 4.5C11.6765 5.46517 10.9451 6.27843 10.0348 6.84606C9.12453 7.41368 8.07242 7.71259 6.99967 7.70833C5.92693 7.71259 4.87481 7.41368 3.96454 6.84606C3.05427 6.27843 2.3229 5.46517 1.85467 4.5C2.32345 3.53526 3.05496 2.72239 3.9651 2.15484C4.87525 1.58729 5.92708 1.2881 6.99967 1.29167V1.29167ZM6.99967 0.125C4.08301 0.125 1.59217 1.93917 0.583008 4.5C1.59217 7.06083 4.08301 8.875 6.99967 8.875C9.91634 8.875 12.4072 7.06083 13.4163 4.5C12.4072 1.93917 9.91634 0.125 6.99967 0.125ZM6.99967 3.04167C7.38645 3.04167 7.75738 3.19531 8.03087 3.4688C8.30436 3.74229 8.45801 4.11323 8.45801 4.5C8.45801 4.88677 8.30436 5.25771 8.03087 5.5312C7.75738 5.80469 7.38645 5.95833 6.99967 5.95833C6.6129 5.95833 6.24197 5.80469 5.96848 5.5312C5.69499 5.25771 5.54134 4.88677 5.54134 4.5C5.54134 4.11323 5.69499 3.74229 5.96848 3.4688C6.24197 3.19531 6.6129 3.04167 6.99967 3.04167V3.04167ZM6.99967 1.875C5.55301 1.875 4.37467 3.05333 4.37467 4.5C4.37467 5.94667 5.55301 7.125 6.99967 7.125C8.44634 7.125 9.62467 5.94667 9.62467 4.5C9.62467 3.05333 8.44634 1.875 6.99967 1.875Z" fill="#181A1C"/></svg>                        
                                <span>1 947</span>
                            </div>
                        </div>
                    </li>
                    @endfor
                </ul>

                <div class="main_articles--mobile">
                    <div class="swiper">
                        <ul class="swiper-wrapper">
                            @for ($i=0; $i<6; $i++)
                                <li class="article--card swiper-slide">
                                    <a class="article--card-link" href="{{ route('index') }}"></a>
                                    <img src="{{asset('assets/images/card-pict.jpg')}}" alt="banner">
                                    <div class="article--card_info">
                                        <ul class="article--card_info_tags-list">
                                            <li class="article--card_info_tags-list-item">
                                                <a class="article--card_info_tags-list-item--link" href="{{ route('index') }}">#facebook</a>
                                            </li>
                                            <li class="article--card_info_tags-list-item">
                                                <a class="article--card_info_tags-list-item--link" href="{{ route('index') }}">#affiee</a>
                                            </li>
                                            <li class="article--card_info_tags-list-item">
                                                <a class="article--card_info_tags-list-item--link" href="{{ route('index') }}">#gambling</a>
                                            </li>
                                        </ul>
                                        <h3 class="article--card_info-title">What are BINs and what should I do with this information</h3>
                    
                                        <div class="article--card_info-views">
                                            <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.99967 1.29167C8.07227 1.2881 9.1241 1.58729 10.0342 2.15484C10.9444 2.72239 11.6759 3.53526 12.1447 4.5C11.6765 5.46517 10.9451 6.27843 10.0348 6.84606C9.12453 7.41368 8.07242 7.71259 6.99967 7.70833C5.92693 7.71259 4.87481 7.41368 3.96454 6.84606C3.05427 6.27843 2.3229 5.46517 1.85467 4.5C2.32345 3.53526 3.05496 2.72239 3.9651 2.15484C4.87525 1.58729 5.92708 1.2881 6.99967 1.29167V1.29167ZM6.99967 0.125C4.08301 0.125 1.59217 1.93917 0.583008 4.5C1.59217 7.06083 4.08301 8.875 6.99967 8.875C9.91634 8.875 12.4072 7.06083 13.4163 4.5C12.4072 1.93917 9.91634 0.125 6.99967 0.125ZM6.99967 3.04167C7.38645 3.04167 7.75738 3.19531 8.03087 3.4688C8.30436 3.74229 8.45801 4.11323 8.45801 4.5C8.45801 4.88677 8.30436 5.25771 8.03087 5.5312C7.75738 5.80469 7.38645 5.95833 6.99967 5.95833C6.6129 5.95833 6.24197 5.80469 5.96848 5.5312C5.69499 5.25771 5.54134 4.88677 5.54134 4.5C5.54134 4.11323 5.69499 3.74229 5.96848 3.4688C6.24197 3.19531 6.6129 3.04167 6.99967 3.04167V3.04167ZM6.99967 1.875C5.55301 1.875 4.37467 3.05333 4.37467 4.5C4.37467 5.94667 5.55301 7.125 6.99967 7.125C8.44634 7.125 9.62467 5.94667 9.62467 4.5C9.62467 3.05333 8.44634 1.875 6.99967 1.875Z" fill="#181A1C"/></svg>                        
                                            <span>1 947</span>
                                        </div>
                                    </div>
                                </li>
                            @endfor
                        </ul>
                        <div class="main_articles_top_link-wrapp-arrows">
                            @for ($i=0; $i<10; $i++)
                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.2425 6L6.43923 2.1967L8.56055 0.0753784L15.9852 7.5L8.56055 14.9246L6.43923 12.8033L10.2425 9L1.13593 9L1.13593 6H10.2425Z" fill="#272C31"/></svg>                        
                            @endfor
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <aside class="main-cpa_aside">
                <div class="main-cpa-subt_wrapp">
                    <p class="main-cpa-subt">TOp-5</p>
                    <a class="link--blue" href="{{ route('index') }}">
                        <span>Show all</span>
                        <img src="{{asset('assets/images/icons/arrow-right-blue.svg')}}" alt="arrow">
                    </a>
                </div>
                <ul class="main-cpa_aside_list">
                    @for ($i=0; $i<5; $i++)
                    <li class="main-cpa_aside_list-item">
                        <div class="main-cpa_aside_list-item_top">
                            <div class="main-cpa_aside_list-item_top-logo">
                                <img src="{{asset('assets/images/logo.png')}}" alt="logo">
                            </div>
                            <ul class="article--card_info_tags-list">
                                <li class="article--card_info_tags-list-item">
                                    <a class="article--card_info_tags-list-item--link" href="{{ route('index') }}">#facebook</a>
                                </li>
                                <li class="article--card_info_tags-list-item">
                                    <a class="article--card_info_tags-list-item--link" href="{{ route('index') }}">#nutra</a>
                                </li>
                                <li class="article--card_info_tags-list-item">
                                    <a class="article--card_info_tags-list-item--link" href="{{ route('index') }}">#gambling</a>
                                </li>
                            </ul>
                        </div>
                        <div class="main-cpa_aside_list-item_links">
                            <a class="link--black-rotateble-arrows" href="{{ route('index') }}">
                                <span>read more</span>
                                <div class="link--black-rotateble-arrows-group">
                                    @for ($a=0; $a<3; $a++)
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.37879 4.5H3.00011V1.5H13.5001V12H10.5001V6.62132L4.06077 13.0607L1.93945 10.9393L8.37879 4.5Z" fill="#272C31"/></svg>
                                    @endfor
                                </div>
                            </a>
                            <a class="link--blue-sphere" href="{{ route('index') }}">
                                <img src="{{asset('assets/images/icons/sphere.svg')}}" alt="sphere">
                                <span>site name</span>
                            </a>
                        </div>
                    </li>
                    @endfor
                </ul>
            </aside>
        </div>
    </div>
</section>
<section class="main-video">
    <div class="container">
        <div class="main_articles_top">
            <div class="main-video-top-left">
                <h2 class="title">Video</h2>
                <a class="link--blue" href="{{ route('index') }}">
                    <span>Show all</span>
                    <img src="{{asset('assets/images/icons/arrow-right-blue.svg')}}" alt="arrow">
                </a>
            </div>
            <div class="main_articles_top_link-wrapp">
                <div class="main_articles_top_link-wrapp-arrows">
                    @for ($i=0; $i<10; $i++)
                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.2425 6L6.43923 2.1967L8.56055 0.0753784L15.9852 7.5L8.56055 14.9246L6.43923 12.8033L10.2425 9L1.13593 9L1.13593 6H10.2425Z" fill="#272C31"/></svg>                        
                    @endfor
                </div>
                <a class="btn--red" href="{{ route('index') }}">
                    <span>our youtube</span>
                    <img src="{{asset('assets/images/icons/youtube.svg')}}" alt="youtube">
                </a>
            </div>
        </div>

        <div class="swiper">
            <ul class="swiper-wrapper">
                @for ($i=0; $i<6; $i++)
                    <li class="article--card swiper-slide">
                        <a class="article--card-link" href="{{ route('index') }}"></a>
                        <img src="{{asset('assets/images/card-pict.jpg')}}" alt="banner">
                        <div class="article--card_info">
                            <p class="article--card_info-date">01/21/2022</p>
                            <h3 class="article--card_info-title">Traffic Arbitrage from scratch in 2022. How to start and how much can a beginner earn?</h3>
                        </div>

                        <div class="article--card-top main-video--card-top">
                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.74588 0.83398C7.34828 0.388673 6.65161 0.388674 6.25401 0.833981L5.594 1.57319C5.37062 1.82337 5.03669 1.94491 4.70476 1.89685L3.724 1.75483C3.13319 1.66928 2.59951 2.11709 2.58117 2.71378L2.55072 3.7043C2.54041 4.03954 2.36274 4.34729 2.07756 4.52383L1.23497 5.04545C0.72739 5.35969 0.606415 6.04577 0.975915 6.51466L1.58928 7.29301C1.79688 7.55644 1.85858 7.9064 1.75361 8.22494L1.44344 9.16613C1.25659 9.73312 1.60493 10.3365 2.18937 10.4581L3.15955 10.6601C3.48791 10.7285 3.76013 10.9569 3.88447 11.2684L4.25186 12.1888C4.47318 12.7432 5.12783 12.9815 5.65376 12.699L6.52679 12.2301C6.82227 12.0714 7.17763 12.0714 7.4731 12.2301L8.34614 12.699C8.87206 12.9815 9.52672 12.7432 9.74804 12.1888L10.1154 11.2684C10.2398 10.9569 10.512 10.7285 10.8403 10.6601L11.8105 10.4581C12.395 10.3365 12.7433 9.73312 12.5565 9.16614L12.2463 8.22494C12.1413 7.9064 12.203 7.55644 12.4106 7.293L13.024 6.51466C13.3935 6.04577 13.2725 5.35969 12.7649 5.04545L11.9223 4.52383C11.6372 4.34729 11.4595 4.03954 11.4492 3.7043L11.4187 2.71378C11.4004 2.11709 10.8667 1.66928 10.2759 1.75483L9.29514 1.89685C8.9632 1.94491 8.62928 1.82337 8.4059 1.57319L7.74588 0.83398ZM6.12527 4.01082L6.42217 7.58175H7.63388L7.93882 4.01082H6.12527ZM6.37403 9.45147C6.54522 9.61731 6.76456 9.70023 7.03204 9.70023C7.29953 9.70023 7.51619 9.61731 7.68203 9.45147C7.85322 9.28563 7.93882 9.08769 7.93882 8.85765C7.93882 8.62227 7.85322 8.427 7.68203 8.27186C7.51619 8.11137 7.29953 8.03112 7.03204 8.03112C6.76456 8.03112 6.54522 8.11137 6.37403 8.27186C6.20284 8.427 6.11724 8.62227 6.11724 8.85765C6.11724 9.08769 6.20284 9.28563 6.37403 9.45147Z" fill="white"/></svg>
                            <p>NEW</p>
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

        <div class="main_articles--mobile">
            <a class="btn--red" href="{{ route('index') }}">
                <span>our youtube</span>
                <img src="{{asset('assets/images/icons/youtube.svg')}}" alt="youtube">
            </a>
        </div>
    </div>
</section>
<section class="main-adn">
    <div class="container">
        <h2 class="title">Ad-networks</h2>
        <div class="main-cpa_wrapper">
            <div class="main-cpa_review">
                <p class="main-cpa-subt">review</p>
                <ul class="main_articles_info">
                    @for ($i=0; $i<4; $i++)
                    <li class="article--card">
                        <a class="article--card-link" href="{{ route('index') }}"></a>
                        <img src="{{asset('assets/images/card-pict.jpg')}}" alt="banner">
                        <div class="article--card_info">
                            <ul class="article--card_info_tags-list">
                                <li class="article--card_info_tags-list-item">
                                    <a class="article--card_info_tags-list-item--link" href="{{ route('index') }}">#facebook</a>
                                </li>
                                <li class="article--card_info_tags-list-item">
                                    <a class="article--card_info_tags-list-item--link" href="{{ route('index') }}">#affiliatemarketing</a>
                                </li>
                                <li class="article--card_info_tags-list-item">
                                    <a class="article--card_info_tags-list-item--link" href="{{ route('index') }}">#gambling</a>
                                </li>
                            </ul>
                            <h3 class="article--card_info-title">What are BINs and what should I do with this information</h3>
        
                            <div class="article--card_info-views">
                                <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.99967 1.29167C8.07227 1.2881 9.1241 1.58729 10.0342 2.15484C10.9444 2.72239 11.6759 3.53526 12.1447 4.5C11.6765 5.46517 10.9451 6.27843 10.0348 6.84606C9.12453 7.41368 8.07242 7.71259 6.99967 7.70833C5.92693 7.71259 4.87481 7.41368 3.96454 6.84606C3.05427 6.27843 2.3229 5.46517 1.85467 4.5C2.32345 3.53526 3.05496 2.72239 3.9651 2.15484C4.87525 1.58729 5.92708 1.2881 6.99967 1.29167V1.29167ZM6.99967 0.125C4.08301 0.125 1.59217 1.93917 0.583008 4.5C1.59217 7.06083 4.08301 8.875 6.99967 8.875C9.91634 8.875 12.4072 7.06083 13.4163 4.5C12.4072 1.93917 9.91634 0.125 6.99967 0.125ZM6.99967 3.04167C7.38645 3.04167 7.75738 3.19531 8.03087 3.4688C8.30436 3.74229 8.45801 4.11323 8.45801 4.5C8.45801 4.88677 8.30436 5.25771 8.03087 5.5312C7.75738 5.80469 7.38645 5.95833 6.99967 5.95833C6.6129 5.95833 6.24197 5.80469 5.96848 5.5312C5.69499 5.25771 5.54134 4.88677 5.54134 4.5C5.54134 4.11323 5.69499 3.74229 5.96848 3.4688C6.24197 3.19531 6.6129 3.04167 6.99967 3.04167V3.04167ZM6.99967 1.875C5.55301 1.875 4.37467 3.05333 4.37467 4.5C4.37467 5.94667 5.55301 7.125 6.99967 7.125C8.44634 7.125 9.62467 5.94667 9.62467 4.5C9.62467 3.05333 8.44634 1.875 6.99967 1.875Z" fill="#181A1C"/></svg>                        
                                <span>1 947</span>
                            </div>
                        </div>
                    </li>
                    @endfor
                </ul>

                <div class="main_articles--mobile">
                    <div class="swiper">
                        <ul class="swiper-wrapper">
                            @for ($i=0; $i<6; $i++)
                                <li class="article--card swiper-slide">
                                    <a class="article--card-link" href="{{ route('index') }}"></a>
                                    <img src="{{asset('assets/images/card-pict.jpg')}}" alt="banner">
                                    <div class="article--card_info">
                                        <ul class="article--card_info_tags-list">
                                            <li class="article--card_info_tags-list-item">
                                                <a class="article--card_info_tags-list-item--link" href="{{ route('index') }}">#facebook</a>
                                            </li>
                                            <li class="article--card_info_tags-list-item">
                                                <a class="article--card_info_tags-list-item--link" href="{{ route('index') }}">#affiee</a>
                                            </li>
                                            <li class="article--card_info_tags-list-item">
                                                <a class="article--card_info_tags-list-item--link" href="{{ route('index') }}">#gambling</a>
                                            </li>
                                        </ul>
                                        <h3 class="article--card_info-title">What are BINs and what should I do with this information</h3>
                    
                                        <div class="article--card_info-views">
                                            <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.99967 1.29167C8.07227 1.2881 9.1241 1.58729 10.0342 2.15484C10.9444 2.72239 11.6759 3.53526 12.1447 4.5C11.6765 5.46517 10.9451 6.27843 10.0348 6.84606C9.12453 7.41368 8.07242 7.71259 6.99967 7.70833C5.92693 7.71259 4.87481 7.41368 3.96454 6.84606C3.05427 6.27843 2.3229 5.46517 1.85467 4.5C2.32345 3.53526 3.05496 2.72239 3.9651 2.15484C4.87525 1.58729 5.92708 1.2881 6.99967 1.29167V1.29167ZM6.99967 0.125C4.08301 0.125 1.59217 1.93917 0.583008 4.5C1.59217 7.06083 4.08301 8.875 6.99967 8.875C9.91634 8.875 12.4072 7.06083 13.4163 4.5C12.4072 1.93917 9.91634 0.125 6.99967 0.125ZM6.99967 3.04167C7.38645 3.04167 7.75738 3.19531 8.03087 3.4688C8.30436 3.74229 8.45801 4.11323 8.45801 4.5C8.45801 4.88677 8.30436 5.25771 8.03087 5.5312C7.75738 5.80469 7.38645 5.95833 6.99967 5.95833C6.6129 5.95833 6.24197 5.80469 5.96848 5.5312C5.69499 5.25771 5.54134 4.88677 5.54134 4.5C5.54134 4.11323 5.69499 3.74229 5.96848 3.4688C6.24197 3.19531 6.6129 3.04167 6.99967 3.04167V3.04167ZM6.99967 1.875C5.55301 1.875 4.37467 3.05333 4.37467 4.5C4.37467 5.94667 5.55301 7.125 6.99967 7.125C8.44634 7.125 9.62467 5.94667 9.62467 4.5C9.62467 3.05333 8.44634 1.875 6.99967 1.875Z" fill="#181A1C"/></svg>                        
                                            <span>1 947</span>
                                        </div>
                                    </div>
                                </li>
                            @endfor
                        </ul>
                        <div class="main_articles_top_link-wrapp-arrows">
                            @for ($i=0; $i<10; $i++)
                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.2425 6L6.43923 2.1967L8.56055 0.0753784L15.9852 7.5L8.56055 14.9246L6.43923 12.8033L10.2425 9L1.13593 9L1.13593 6H10.2425Z" fill="#272C31"/></svg>                        
                            @endfor
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <aside class="main-cpa_aside">
                <div class="main-cpa-subt_wrapp">
                    <p class="main-cpa-subt">TOp-5</p>
                    <a class="link--blue" href="{{ route('index') }}">
                        <span>Show all</span>
                        <img src="{{asset('assets/images/icons/arrow-right-blue.svg')}}" alt="arrow">
                    </a>
                </div>
                <ul class="main-cpa_aside_list">
                    @for ($i=0; $i<5; $i++)
                    <li class="main-cpa_aside_list-item">
                        <div class="main-cpa_aside_list-item_top">
                            <div class="main-cpa_aside_list-item_top-logo">
                                <img src="{{asset('assets/images/logo.png')}}" alt="logo">
                            </div>
                            <ul class="article--card_info_tags-list">
                                <li class="article--card_info_tags-list-item">
                                    <a class="article--card_info_tags-list-item--link" href="{{ route('index') }}">#facebook</a>
                                </li>
                                <li class="article--card_info_tags-list-item">
                                    <a class="article--card_info_tags-list-item--link" href="{{ route('index') }}">#nutra</a>
                                </li>
                                <li class="article--card_info_tags-list-item">
                                    <a class="article--card_info_tags-list-item--link" href="{{ route('index') }}">#gambling</a>
                                </li>
                            </ul>
                        </div>
                        <div class="main-cpa_aside_list-item_links">
                            <a class="link--black-rotateble-arrows" href="{{ route('index') }}">
                                <span>read more</span>
                                <div class="link--black-rotateble-arrows-group">
                                    @for ($a=0; $a<3; $a++)
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.37879 4.5H3.00011V1.5H13.5001V12H10.5001V6.62132L4.06077 13.0607L1.93945 10.9393L8.37879 4.5Z" fill="#272C31"/></svg>
                                    @endfor
                                </div>
                            </a>
                            <a class="link--blue-sphere" href="{{ route('index') }}">
                                <img src="{{asset('assets/images/icons/sphere.svg')}}" alt="sphere">
                                <span>site name</span>
                            </a>
                        </div>
                    </li>
                    @endfor
                </ul>
            </aside>
        </div>
    </div>
</section>
<section class="main-events">
    <div class="container">
        <h2 class="title">Events</h2>
        <div class="main-events_wrapper">
            <div class="main-events_left">
                <div class="main-cpa-subt_wrapp">
                    <h3 class="main-cpa-subt">Coming Event</h3>
                    <a class="link--blue" href="{{ route('index') }}">
                        <span>Show all</span>
                        <img src="{{asset('assets/images/icons/arrow-right-blue.svg')}}" alt="arrow">
                    </a>
                </div>

                <li class="article--card hide">
                    <a class="article--card-link" href="{{ route('index') }}"></a>
                    <img src="{{asset('assets/images/card-pict.jpg')}}" alt="banner">
                    <div class="article--card_info">
                        <div class="main-events__article--card_info_top">
                            <div class="main-events__article--card_info_top-date">
                                <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.3333 1.49984H11.6666V0.166504H10.3333V1.49984H3.66658V0.166504H2.33325V1.49984H1.66659C0.933252 1.49984 0.333252 2.09984 0.333252 2.83317V13.4998C0.333252 14.2332 0.933252 14.8332 1.66659 14.8332H12.3333C13.0666 14.8332 13.6666 14.2332 13.6666 13.4998V2.83317C13.6666 2.09984 13.0666 1.49984 12.3333 1.49984ZM12.3333 13.4998H1.66659V4.83317H12.3333V13.4998Z" fill="white"/></svg>
                                <span>1-3 NOVEMBER 2022</span>
                            </div>
                            <p class="main-events__article--card_info_top-text">USA | HOLLYWOOD |FLORIDA</p>
                        </div>
                        <h4 class="article--card_info-title">SBC Summit Latinoamérica</h4>
                    </div>
                </li>

                <div class="main_articles--mobile">
                    <div class="swiper">
                        <ul class="swiper-wrapper">
                            @for ($i=0; $i<6; $i++)
                                <li class="article--card swiper-slide">
                                    <a class="article--card-link" href="{{ route('index') }}"></a>
                                    <img src="{{asset('assets/images/card-pict.jpg')}}" alt="banner">
                                    <div class="article--card_info">
                                        <p class="main-events__article--card_info_top-text">USA | HOLLYWOOD |FLORIDA</p>
                                        <h4 class="article--card_info-title">SBC Summit Latinoamérica</h4>
                                        <div class="main-events__article--card_info_top-date">
                                            <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.3333 1.49984H11.6666V0.166504H10.3333V1.49984H3.66658V0.166504H2.33325V1.49984H1.66659C0.933252 1.49984 0.333252 2.09984 0.333252 2.83317V13.4998C0.333252 14.2332 0.933252 14.8332 1.66659 14.8332H12.3333C13.0666 14.8332 13.6666 14.2332 13.6666 13.4998V2.83317C13.6666 2.09984 13.0666 1.49984 12.3333 1.49984ZM12.3333 13.4998H1.66659V4.83317H12.3333V13.4998Z" fill="white"/></svg>
                                            <span>1-3 NOVEMBER 2022</span>
                                        </div>
                                    </div>
                                </li>
                            @endfor
                        </ul>
                        <div class="main_articles_top_link-wrapp-arrows">
                            @for ($i=0; $i<10; $i++)
                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.2425 6L6.43923 2.1967L8.56055 0.0753784L15.9852 7.5L8.56055 14.9246L6.43923 12.8033L10.2425 9L1.13593 9L1.13593 6H10.2425Z" fill="#272C31"/></svg>                        
                            @endfor
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                    <a class="btn--grey" href="{{ route('index') }}">Show all</a>
                </div>
            </div>
            
            <div class="main-events_right">
                <div class="main-events_right_top">
                    <h3 class="main-cpa-subt">Calendar</h3>

                    <div class="main-events_right_top_month">
                        <div class="main-events_right_top_month_arrows">
                            <button type="button" class="arrow--btn left">
                                <img class="arrow--btn-black" src="{{asset('assets/images/icons/arrow-right-black.svg')}}" alt="arrow">
                                <img class="arrow--btn-blue" src="{{asset('assets/images/icons/arrow-right-blue.svg')}}" alt="blue">
                            </button>
                            <button type="button" class="arrow--btn">
                                <img class="arrow--btn-black" src="{{asset('assets/images/icons/arrow-right-black.svg')}}" alt="arrow">
                                <img class="arrow--btn-blue" src="{{asset('assets/images/icons/arrow-right-blue.svg')}}" alt="blue">
                            </button>
                        </div>
                        <p class="main-events_right_top_month-text">december 2022</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 