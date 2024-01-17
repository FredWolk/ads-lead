@extends('user.layouts.user')

@section('content')
    <section class="user-main alerts user_card favorite">
        <h1 class="user-main--title">Favorite entries</h1>
        <ul class="user_alerts_list">
            @foreach($favorite as $f)
                <li class="user_alerts--item">
                    <a href="{{ route('forum.board', [$f->thread->theme, $f->thread->link]) }}" class="user_alerts--item--link"></a>
                    <div class="header--notif-body--item-icon-wrapper">
                        <div class="header--notif-body--item-icon">
                            @empty($f->thread->author->photo)
                                <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="user">
                            @else
                                <img loading="lazy" src="{{asset('storage/'. $f->thread->author->photo)}}" alt="user">
                            @endempty
                        </div>
                    </div>
                    <div class="header--notif-body--item-main">
                        <div class="header--notif-body--item-main_top">
                            <p class="header--notif-body--item-main-type">{{ $f->thread->title }}</p>
                            <p class="header--notif-body--item-main-time blue">{{ $f->thread->author->name }}</p>
                        </div>
                        <div class="header--notif-body--item-main-text">{!! mb_substr(strip_tags($f->thread->content), 0, 300) !!}...</div>
                    </div>
                </li>
            @endforeach
        </ul>
        {{ $favorite->onEachSide(1)->links() }}
    </section>
@endsection
