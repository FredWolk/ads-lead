@extends('user.layouts.user')

@section('content')
<section class="user-main alerts user_card">
    <h1 class="user-main--title">Alerts <span>( 9 new)</span></h1>
    <ul class="user_alerts_list">
        <li class="user_alerts--item">
            <div class="header--notif-body--item-icon-wrapper">
                <div class="header--notif-body--item-icon">
                    <img src="{{asset('assets/images/card-pict.jpg')}}" alt="user">
                </div>
                <div class="header--notif-body--item-icon-online"></div>
            </div>
            <div class="header--notif-body--item-main">
                <div class="header--notif-body--item-main_top">
                    <a href="{{ route('index') }}" class="header--notif-body--item-main-type">New subscriber</a>
                    <p class="header--notif-body--item-main-time">13 minutes ago</p>
                </div>
                <p class="header--notif-body--item-main-text">You are subscribed to a user Jendosina  <a href="{{ route('index') }}">Jendosina</a></p>
            </div>
        </li>
        @for ($a=0; $a<30; $a++)
        <li class="user_alerts--item">
            <div class="header--notif-body--item-icon-wrapper">
                <div class="header--notif-body--item-icon">
                    <img src="{{asset('assets/images/card-pict.jpg')}}" alt="user">
                </div>
                <div class="header--notif-body--item-icon-online grey"></div>
            </div>
            <div class="header--notif-body--item-main">
                <div class="header--notif-body--item-main_top">
                    <a href="{{ route('index') }}" class="header--notif-body--item-main-type">New subscriber</a>
                    <p class="header--notif-body--item-main-time">13 minutes ago</p>
                </div>
                <p class="header--notif-body--item-main-text">You are subscribed to a user Jendosina  <a href="{{ route('index') }}">Jendosina</a></p>
            </div>
        </li>
        @endfor
    </ul>
</section>
@endsection