@extends('user.layouts.user')

@section('content')
    <section style="gap: 0px;" class="user-main user_card secur">
        <h1 class="user-main--title">Security</h1>
        <div class="user_card--line"></div>

        @if($errors->any())
            <h2 style="color: red; margin-bottom: 20px;">{{$errors->first()}}</h2>
        @endif

        @if(Session::has('success'))
            <h2 style="color: green; margin-bottom: 20px;">{{Session::get('success')}}</h2>
        @endif
        <form id="pasChange" method="POST" action="{{ route('setting.password.change') }}" class="user-main_security">
            @csrf
            <div class="user-main_security_wrapper">
                <div class="user-main_security--group">
                    <label class="user-main_security--group-label">
                        <span>Your current password</span>
                        <div class="popup_main-input-password-wrapper">
                            <input placeholder="Enter your password" value="{{ old('old_password') }}" required
                                   class="input-style input-password"
                                   type="password" name="old_password">

                            <label class="popup_main-input-view-password-label">
                                <input class="popup_main-input-view-password input-hide" type="checkbox"
                                       name="viewpasswors">
                                <div class="popup_main-input-view-password-label-icon">
                                    <img loading="lazy" loading="lazy" src="{{asset('assets/images/icons/eye.svg')}}" alt="eye">
                                </div>
                            </label>
                        </div>
                    </label>
                    <p class="user-main_security--group-text">For security reasons, you must specify the current
                        password before changing it.</p>
                </div>
                <div class="user-main_security--group">
                    <label class="user-main_security--group-label">
                        <span>New password</span>
                        <div class="popup_main-input-password-wrapper">
                            <input placeholder="New password" value="{{ old('password') }}" required
                                   class="input-style input-password"
                                   type="password" name="password">

                            <label class="popup_main-input-view-password-label">
                                <input class="popup_main-input-view-password input-hide" type="checkbox"
                                       name="viewpasswors">
                                <div class="popup_main-input-view-password-label-icon">
                                    <img loading="lazy" src="{{asset('assets/images/icons/eye.svg')}}" alt="eye">
                                </div>
                            </label>
                        </div>
                    </label>
                    <div
                        class="user-main_security--group-level {{-- CCOM добавляй классы - level2, level3, level4 (по умолчанию красный) --}} ">
                        <div class="user-main_security--group-level-fill"></div>
                    </div>
                    <p class="user-main_security--group-text">Too easy a password</p>
                </div>
                <div class="user-main_security--group">
                    <label class="user-main_security--group-label">
                        <span>Confirm the new password</span>
                        <div class="popup_main-input-password-wrapper">
                            <input placeholder="Confirm the new password" value="{{ old('password_confirmation') }}"
                                   required class="input-style input-password"
                                   type="password" name="password_confirmation">

                            <label class="popup_main-input-view-password-label">
                                <input class="popup_main-input-view-password input-hide" type="checkbox"
                                       name="viewpasswors">
                                <div class="popup_main-input-view-password-label-icon">
                                    <img loading="lazy" src="{{asset('assets/images/icons/eye.svg')}}" alt="eye">
                                </div>
                            </label>
                        </div>
                    </label>
                </div>
                <button style="max-width: 100%; height: 50px;" class="btn--blue header_buttons-blue-btn">
                    <span>Save</span>
                    <img loading="lazy" src="{{asset('assets/images/icons/arrow-right-white.svg')}}" alt="arrow">
                </button>
            </div>
        </form>
    </section>
@endsection
@push('scripts')
    <script>


        {{--$('#pasChange').on('submit', function (e) {--}}
        {{--    e.preventDefault()--}}
        {{--    $.ajax({--}}
        {{--        url: '{{ route('setting.password.change') }}',--}}
        {{--        data: $(this).serialize(),--}}
        {{--        type: 'POST',--}}
        {{--    }).done(function (r) {--}}
        {{--        if (r.status) {--}}
        {{--            console.log(r);--}}
        {{--        } else {--}}
        {{--            console.log(r)--}}
        {{--        }--}}
        {{--    })--}}
        {{--});--}}
    </script>
@endpush
