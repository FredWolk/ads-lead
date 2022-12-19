@extends('user.layouts.user')

@section('content')
<section class="user-main alerts user_card">
    <h1 class="user-main--title">Correspondence</h1>
    <ul class="user_alerts_list">
        @for ($a=0; $a<30; $a++)
        <li class="user_correspondence--item">
            <div class="user_correspondence--item_first">
                <div class="header--notif-body--item-icon">
                    <img src="{{asset('assets/images/card-pict.jpg')}}" alt="user">
                </div>
                <div class="user_correspondence--item_first_main">
                    <p class="user_correspondence--item_first_main-text">In a laoreet purus. Integer turpis quam, fg dfdfg fdgh fdghfdghg laoreet...</p>
                    <div class="user_correspondence--item_first_main_bot">
                        <a href="{{ route('user.correspondence') }}" class="user_correspondence--item_first_main-link">Robert Fox</a>
                        <p class="user_correspondence--item_first_main-date">12/10/13</p>
                    </div>
                </div>
            </div>
            <div class="user_correspondence--item_second">
                <p class="user_correspondence--item_second-text">Answers: <span>5</span></p>
                <p class="user_correspondence--item_second-text">Participants: <span>2</span></p>
            </div>
            <div class="user_correspondence--item_last-wrpapper">
                <div class="user_correspondence--item_last">
                    <div class="user_correspondence--item_last_main">
                        <p class="user_correspondence--item_last_main-date">12/4/17</p>
                        <a href="{{ route('user.correspondence') }}" class="user_correspondence--item_last_main-link">Leslie Alexander</a>
                    </div>
                    <div class="header--notif-body--item-icon">
                        <img src="{{asset('assets/images/card-pict.jpg')}}" alt="user">
                    </div>
                </div>
                <button type="button" class="user_correspondence-delete--btn"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_895_22271)"><path d="M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41Z" fill="#181A1C"/></g><defs><clipPath id="clip0_895_22271"><rect width="24" height="24" fill="white"/></clipPath></defs></svg></button>
            </div>
        </li>
        @endfor
    </ul>
</section>
<div class="popup--delete-wrapper-back">
    <div class="popup--delete-wrapper">
        <section class="popup--delete">
            <p class="popup--delete-title">Delete correspondence</p>
            <p class="popup--delete-text">Are you sure you want to delete the correspondence</p>
            <button type="button" style="max-width: 161px; height: 40px;" class="btn--blue header_buttons-blue-btn">
                <span>Delete</span>
                <img src="{{asset('assets/images/icons/arrow-right-white.svg')}}" alt="arrow">
            </button>

            <button type="button" class="popup--delete--btn-close"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_895_22271)"><path d="M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41Z" fill="#181A1C"/></g><defs><clipPath id="clip0_895_22271"><rect width="24" height="24" fill="white"/></clipPath></defs></svg></button>
        </section>
    </div>
</div>
@endsection