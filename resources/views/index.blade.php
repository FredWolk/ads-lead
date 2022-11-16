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
                        <li class="article--card_info_tags-list-item">#facebook</li>
                        <li class="article--card_info_tags-list-item">#affiliatemarketing</li>
                        <li class="article--card_info_tags-list-item">#gambling</li>
                    </ul>
                    <h3 class="article--card_info-title">What are BINs and what should I do with this information</h3>
                    <p class="article--card_info-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.The point of using Lorem Ipsum is that it has a more-or-less normal distribution…</p>
                    <p class="article--card_info-author">by <span>Wade Warren</span></p>

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
                        <li class="article--card_info_tags-list-item">#facebook</li>
                        <li class="article--card_info_tags-list-item">#affiliatemarketing</li>
                        <li class="article--card_info_tags-list-item">#gambling</li>
                    </ul>
                    <h3 class="article--card_info-title">What are BINs and what should I do with this information</h3>
                    <p class="article--card_info-author">by <span>Wade Warren</span></p>

                    <div class="article--card_info-views">
                        <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.99967 1.29167C8.07227 1.2881 9.1241 1.58729 10.0342 2.15484C10.9444 2.72239 11.6759 3.53526 12.1447 4.5C11.6765 5.46517 10.9451 6.27843 10.0348 6.84606C9.12453 7.41368 8.07242 7.71259 6.99967 7.70833C5.92693 7.71259 4.87481 7.41368 3.96454 6.84606C3.05427 6.27843 2.3229 5.46517 1.85467 4.5C2.32345 3.53526 3.05496 2.72239 3.9651 2.15484C4.87525 1.58729 5.92708 1.2881 6.99967 1.29167V1.29167ZM6.99967 0.125C4.08301 0.125 1.59217 1.93917 0.583008 4.5C1.59217 7.06083 4.08301 8.875 6.99967 8.875C9.91634 8.875 12.4072 7.06083 13.4163 4.5C12.4072 1.93917 9.91634 0.125 6.99967 0.125ZM6.99967 3.04167C7.38645 3.04167 7.75738 3.19531 8.03087 3.4688C8.30436 3.74229 8.45801 4.11323 8.45801 4.5C8.45801 4.88677 8.30436 5.25771 8.03087 5.5312C7.75738 5.80469 7.38645 5.95833 6.99967 5.95833C6.6129 5.95833 6.24197 5.80469 5.96848 5.5312C5.69499 5.25771 5.54134 4.88677 5.54134 4.5C5.54134 4.11323 5.69499 3.74229 5.96848 3.4688C6.24197 3.19531 6.6129 3.04167 6.99967 3.04167V3.04167ZM6.99967 1.875C5.55301 1.875 4.37467 3.05333 4.37467 4.5C4.37467 5.94667 5.55301 7.125 6.99967 7.125C8.44634 7.125 9.62467 5.94667 9.62467 4.5C9.62467 3.05333 8.44634 1.875 6.99967 1.875Z" fill="#181A1C"/></svg>                        
                        <span>1 947</span>
                    </div>
                </div>
            </li>
            @endfor
        </ul> 
    </div>
</section>
@endsection 