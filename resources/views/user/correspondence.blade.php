@extends('user.layouts.user')

@section('content')
    <section class="user-main alerts user_card">
        <h1 class="user-main--title">Correspondence</h1>
        <ul class="user_alerts_list">
            @foreach ($chats as $chat)
                <li class="user_correspondence--item">
                    <div class="user_correspondence--item_first">
                        <div class="header--notif-body--item-icon">
                            @if(\Illuminate\Support\Facades\Auth::id() === $chat->user_1)
                                @empty($chat->userTwo->photo)
                                    <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="user">
                                @else
                                    <img loading="lazy" src="{{asset('storage/'. $chat->userTwo->photo)}}" alt="user">
                                @endempty
                            @else
                                @empty($chat->userOne->photo)
                                    <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="user">
                                @else
                                    <img loading="lazy" src="{{asset('storage/'. $chat->userOne->photo)}}" alt="user">
                                @endempty
                            @endif

                        </div>
                        <div class="user_correspondence--item_first_main">
                            <a href="{{ route('user.correspondence.page', \Illuminate\Support\Facades\Auth::id() === $chat->user_1 ? $chat->user_2 : $chat->user_1) }}"
                               class="user_correspondence--item_first_main-text">{{ mb_substr(strip_tags($chat->lastComment->message), 0, 200) }}
                                ...</a>
                            <div class="user_correspondence--item_first_main_bot">
                                <p class="user_correspondence--item_first_main-link">{{ Auth::id() === $chat->user_1 ? $chat->userTwo->name : $chat->userOne->name }}</p>
                                <p class="user_correspondence--item_first_main-date">{{ date('d/m/Y', strtotime($chat->lastComment->created_at)) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="user_correspondence--item_last-wrpapper">
                        {{--                <div class="user_correspondence--item_last">--}}
                        {{--                    <div class="user_correspondence--item_last_main">--}}
                        {{--                        <a href="{{ route('user.correspondence') }}" class="user_correspondence--item_last_main-link">Leslie Alexander</a>--}}
                        {{--                    </div>--}}
                        {{--                    <div class="header--notif-body--item-icon">--}}
                        {{--                        <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="user">--}}
                        {{--                    </div>--}}
                        {{--                </div>--}}
                        <p class="user_correspondence--item_second-text">Answers:
                            <span>{{ $chat->messages_count }}</span></p>
                        <button data-id="{{ $chat->id }}" type="button" class="user_correspondence-delete--btn">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_895_22271)">
                                    <path
                                        d="M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41Z"
                                        fill="#181A1C"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_895_22271">
                                        <rect width="24" height="24" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </button>
                    </div>
                </li>
            @endforeach
        </ul>
        {{ $chats->onEachSide(1)->links() }}
    </section>
    <div class="popup--delete-wrapper-back">
        <div class="popup--delete-wrapper">
            <section class="popup--delete">
                <p class="popup--delete-title">Delete correspondence</p>
                <p class="popup--delete-text">Are you sure you want to delete the correspondence</p>
                <button id="delete_chat" type="button" style="max-width: 161px; height: 40px;" class="btn--blue header_buttons-blue-btn">
                    <span>Delete</span>
                    <img loading="lazy" src="{{asset('assets/images/icons/arrow-right-white.svg')}}" alt="arrow">
                </button>
                <button type="button" class="popup--delete--btn-close">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_895_22271)">
                            <path
                                d="M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41Z"
                                fill="#181A1C"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_895_22271">
                                <rect width="24" height="24" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                </button>
            </section>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        var id = 0;
        $('.user_correspondence-delete--btn').on('click', function () {
            id = $(this).attr('data-id');
            $('.popup--delete-wrapper-back').fadeIn(300);
        });

        $('#delete_chat').on('click', function () {
            $.ajax({
                headers: {
                  'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                url: "{{ route('chat.message.delete') }}"+"/"+id,
                method: 'DELETE',
                dataType: 'JSON'
            }).done(function (rsp) {
                if (rsp.status)
                    location.reload()
            })
        })


    </script>
@endpush
