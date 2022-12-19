@extends('user.layouts.user')

@section('content')
<section class="user-main subs">
    <div class="user_card">
        <p class="user-main--title">Your subscribers <span>(67)</span></p>
        <div class="user_card--line"></div>
        <ul class="user-main__subscribers_list">
            @for ($a=0; $a<80; $a++)
            <li class="user-main__subscribers_list-item">
                <a class="user-main__subscribers_list-item-link" href="{{ route('index') }}"></a>
                <div class="user-main__subscribers_list-item-icon">
                    <img src="{{asset('assets/images/card-pict.jpg')}}" alt="avatar">
                </div>
                <p class="user-main__subscribers_list-item-name">Darrell Steward</p>
            </li>
            @endfor
        </ul>
        <button type="button" class="link--blue user-main_subscribers-show-all--btn">
            <span>Show all</span>
            <img src="{{asset('assets/images/icons/arrow-right-blue.svg')}}" alt="arrow">
        </button>
    </div>
    <div class="user_card">
        <p class="user-main--title">Your subscriptions <span>(476)</span></p>
        <div class="user_card--line"></div>
        <ul class="user-main__subscribers_list">
            @for ($i=0; $i<80; $i++)
            <li class="user-main__subscribers_list-item">
                <a class="user-main__subscribers_list-item-link" href="{{ route('index') }}"></a>
                <div class="user-main__subscribers_list-item-icon">
                    <img src="{{asset('assets/images/card-pict.jpg')}}" alt="avatar">
                </div>
                <p class="user-main__subscribers_list-item-name">Darrell Steward</p>
            </li>
            @endfor
        </ul>
        <button type="button" class="link--blue user-main_subscribers-show-all--btn">
            <span>Show all</span>
            <img src="{{asset('assets/images/icons/arrow-right-blue.svg')}}" alt="arrow">
        </button>
    </div>
</section>
@endsection