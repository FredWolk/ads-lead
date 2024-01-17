@extends('user.layouts.user')

@section('content')
    <section class="user-main subs">
        <div class="user_card">
            <p class="user-main--title">Your subscribers <span>({{ $imSubscribed->count() }})</span></p>
            <div class="user_card--line"></div>
            <ul class="user-main__subscribers_list">
                @foreach($imSubscribed as $i)
                    <li class="user-main__subscribers_list-item">
                        <a class="user-main__subscribers_list-item-link" href="{{ route('index') }}"></a>
                        <div class="user-main__subscribers_list-item-icon">
                            @empty($i->im->photo)
                                <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="avatar">
                            @else
                                <img loading="lazy" src="{{asset('storage/'. $i->im->photo)}}" alt="avatar">
                            @endempty
                        </div>
                        <p class="user-main__subscribers_list-item-name">{{ $i->im->name }}</p>
                    </li>
                @endforeach
            </ul>
            @if($imSubscribed->count() > 12)
                <button type="button" class="link--blue user-main_subscribers-show-all--btn">
                    <span>Show all</span>
                    <img loading="lazy" src="{{asset('assets/images/icons/arrow-right-blue.svg')}}" alt="arrow">
                </button>
            @endif
        </div>
        <div class="user_card">
            <p class="user-main--title">Your subscriptions <span>({{ $mySubscribers->count() }})</span></p>
            <div class="user_card--line"></div>
            <ul class="user-main__subscribers_list">
                @foreach($mySubscribers as $my)
                    <li class="user-main__subscribers_list-item">
                        <a class="user-main__subscribers_list-item-link" href="{{ route('index') }}"></a>
                        <div class="user-main__subscribers_list-item-icon">
                            @empty($my->my->photo)
                                <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="avatar">
                            @else
                                <img loading="lazy" src="{{asset('storage/'. $my->my->photo)}}" alt="avatar">
                            @endempty
                        </div>
                        <p class="user-main__subscribers_list-item-name">{{ $my->my->name }}</p>
                    </li>
                @endforeach
            </ul>
            @if($mySubscribers->count() > 12)
                <button type="button" class="link--blue user-main_subscribers-show-all--btn">
                    <span>Show all</span>
                    <img loading="lazy" src="{{asset('assets/images/icons/arrow-right-blue.svg')}}" alt="arrow">
                </button>
            @endif
        </div>
    </section>
@endsection
