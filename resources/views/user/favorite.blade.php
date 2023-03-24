@extends('user.layouts.user')

@section('content')
<section class="user-main alerts user_card favorite">
    <h1 class="user-main--title">Favorite entries</h1>
    <ul class="user_alerts_list">
        @for ($a=0; $a<30; $a++)
        <li class="user_alerts--item">
            <a href="{{ route('index') }}" class="user_alerts--item--link"></a>
            <div class="header--notif-body--item-icon-wrapper">
                <div class="header--notif-body--item-icon">
                    <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="user">
                </div>
            </div>
            <div class="header--notif-body--item-main">
                <div class="header--notif-body--item-main_top">
                    <p class="header--notif-body--item-main-type">We fire the bundles in a couple of clicks. We're going through the cloaca. Even at a discount.</p>
                    <p class="header--notif-body--item-main-time blue">AffJournal</p>
                </div>
                <p class="header--notif-body--item-main-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute...</p>
            </div>
        </li>
        @endfor
    </ul>
</section>
@endsection
