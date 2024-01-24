@extends('user.layouts.user')

@section('content')
    <section class="user-main alerts user_card">
        <h1 class="user-main--title">Alerts <span>( {{ $new > 0 ? $new : 0}} new)</span></h1>
        <ul class="user_alerts_list">
            @foreach($notification as $not)
                <li class="user_alerts--item">
                    <div class="header--notif-body--item-icon-wrapper">
                        <div class="header--notif-body--item-icon">
                            <img loading="lazy" src="{{asset('storage/'. $not->init_user_photo)}}" alt="user">
                        </div>
                    </div>
                    <div class="header--notif-body--item-main">
                        <div class="header--notif-body--item-main_top">
                            <p class="header--notif-body--item-main-type">{{ $not->title }}</p>
                            <p class="header--notif-body--item-main-time">{{ date('d/m/Y', strtotime($not->created_at)) }}</p>
                        </div>
                        <p class="header--notif-body--item-main-text">{!! $not->message !!}</p>
                    </div>
                </li>
            @endforeach
        </ul>
        {{ $notification->onEachSide(1)->links() }}
    </section>
@endsection

@push('scripts')
    <script>
        setTimeout(function () {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                url: "{{route('user.alerts.read')}}",
                type: 'POST',
            })
        }, 5000)
    </script>
@endpush
