@extends('admin.layouts.admin')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/select2.min.css') }}">
@endsection

@section('content')
    <style>
        .select2-container--default .select2-selection--single {
            height: 38px;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__display {
            color: black;
            padding-left: 10px !important;
        }

        .select2-container--default .select2-dropdown .select2-search__field:focus, .select2-container--default .select2-search--inline .select2-search__field:focus {
            border: none !important;
        }
    </style>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактировать рекламу - {{ $ad->name }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('ad.index') }}">Рекламы</a></li>
                            <li class="breadcrumb-item active">Редактировать рекламу</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Заполните все поля формы</h3>
                    </div>
                    <form enctype="multipart/form-data" method="post" action="{{ route('ad.update', $ad->id) }}">
                        @csrf
                        @method('patch')
                        <div class="card-body">

                            <div class="row">
                                <div class="form-group col-4">
                                    <label for="is_main">На главной</label>
                                    <select name="is_main" class="form-control" id="is_main">
                                        <option {{ $ad->is_main == true ? 'selected' : '' }} value="1">Да</option>
                                        <option {{ $ad->is_main == false ? 'selected' : '' }} value="0">Нет</option>
                                    </select>
                                </div>
                                @error('is_main')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group col-4">
                                    <label for="is_top">Топ-5</label>
                                    <select name="is_top" class="form-control" id="is_top">
                                        <option {{ $ad->is_top == true ? 'selected' : '' }} value="1">Да</option>
                                        <option {{ $ad->is_top == false ? 'selected' : '' }} value="0">Нет</option>
                                    </select>
                                </div>
                                @error('is_top')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group col-4">
                                    <label for="is_recomendated">Рекомендован</label>
                                    <select name="is_recomendated" class="form-control" id="is_recomendated">
                                        <option {{ $ad->is_recomendated == true ? 'selected' : '' }} value="1">Да
                                        </option>
                                        <option {{ $ad->is_recomendated == false ? 'selected' : '' }} value="0">Нет
                                        </option>
                                    </select>
                                </div>
                                @error('is_recomendated')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="name">Название рекламы</label>
                                <input type="text" name="name" value="{{ $ad->name }}" class="form-control" id="name"
                                       placeholder="Название рекламы">
                            </div>
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="link">Ссылка на рекламу</label>
                                <input type="text" name="link" value="{{ $ad->link }}" class="form-control" id="link">
                            </div>
                            @error('link')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="listing_rating">Рейтинг в листинге</label>
                                <input type="number" name="listing_rating" value="{{ $ad->listing_rating }}" class="form-control" id="listing_rating">
                            </div>
                            @error('listing_rating')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <img loading="lazy" width="150" src="{{ asset('storage/'. $ad->image) }}" alt="">
                            <div class="form-group">
                                <label for="image">Изображение рекламы</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input value="{{ $ad->image }}" name="image" type="file"
                                               class="custom-file-input" id="image">
                                        <label class="custom-file-label" for="image">Выберите изображение
                                            рекламы</label>
                                    </div>
                                </div>
                            </div>
                            @error('image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <img loading="lazy" width="150" src="{{ asset('storage/'. $ad->logo) }}" alt="">
                            <div class="form-group">
                                <label for="logo">Логотип рекламы</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input value="{{ $ad->logo }}" name="logo" type="file"
                                               class="custom-file-input" id="logo">
                                        <label class="custom-file-label" for="logo">Выберите логотип рекламы</label>
                                    </div>
                                </div>
                            </div>
                            @error('logo')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="prev_text">Превью текст рекламы</label>
                                <textarea name="prev_text" class="form-control"
                                          id="views"
                                          placeholder="Превью текст рекламы">{{ $ad->prev_text }}</textarea>
                            </div>
                            @error('prev_text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="url">Веб сайт рекламы</label>
                                <input type="url" name="url" value="{{ $ad->url }}" class="form-control"
                                       id="url" placeholder="https://google.com">
                            </div>
                            @error('url')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="views">Просмотры</label>
                                <input type="number" name="views" value="{{ $ad->views }}" class="form-control"
                                       id="views" placeholder="На пример: 41">
                            </div>
                            @error('views')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="summernote">Текст перед статьей</label>
                                <textarea class="summernote" name="before_main_text"
                                          id="summernote">{{ $ad->before_main_text }}</textarea>
                            </div>
                            @error('main_text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="summernote2">Контент статьи</label>
                                <textarea class="summernote" name="main_text"
                                          id="summernote2">{{ $ad->main_text }}</textarea>
                            </div>
                            @error('main_text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            {{--  ФИЛЬТРЫ  --}}
                            <div class="card card-success p-3">
                                <div class="card-header">
                                    <h3 class="card-title">Фильтры</h3>
                                </div>
                                <div class="form-group">
                                    <label for="select1">Основной формат рекламы</label>
                                    <select name="main_advertising_formats" class="form-control select1"
                                            id="select1">
                                        @foreach(json_decode($filters['advertising_formats']) as $i)
                                            <option
                                                {{ $ad->main_advertising_formats == $i ? 'selected' : '' }} value="{{ $i }}">{{ $i }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('main_advertising_formats')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="select1">Формат рекламы</label>
                                    <select name="advertising_formats[]" multiple="multiple"
                                            class="form-control select1"
                                            id="select1">
                                        @foreach(json_decode($filters['advertising_formats']) as $i)
                                            <option
                                                {{ !empty($ad->advertising_formats) && in_array($i, $ad->advertising_formats) ? 'selected' : '' }} value="{{ $i }}">{{ $i }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('advertising_formats')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="select2">Страны</label>
                                    <select name="countries[]" multiple="multiple" class="form-control select1"
                                            id="select2">
                                        @if(!empty($filters['countries']))
                                            @foreach(json_decode($filters['countries']) as $i)
                                                <option
                                                    {{ !empty($ad->countries) && in_array($i, $ad->countries) ? 'selected' : '' }} value="{{ $i }}">{{ $i }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                @error('countries')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="select3">Модели оплаты</label>
                                    <select name="payment_systems[]" multiple="multiple" class="form-control select1"
                                            id="select3">
                                        @if(!empty($filters['payment_systems']))
                                            @foreach(json_decode($filters['payment_systems']) as $i)
                                                <option
                                                    {{ !empty($ad->payment_systems) && in_array($i, $ad->payment_systems) ? 'selected' : '' }} value="{{ $i }}">{{ $i }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                @error('payment_systems')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="select4">Минимальная сумма пополнения</label>
                                    <select name="minimum_top_up_amount[]" multiple="multiple"
                                            class="form-control select1" id="select4">
                                        @if(!empty($filters['minimum_top_up_amount']))
                                            @foreach(json_decode($filters['minimum_top_up_amount']) as $i)
                                                <option
                                                    {{ !empty($ad->minimum_top_up_amount) && in_array($i, $ad->minimum_top_up_amount) ? 'selected' : '' }} value="{{ $i }}">{{ $i }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                @error('minimum_top_up_amount')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="card card-success p-3">
                                <div class="card-header">
                                    <h3 class="card-title">Промокод</h3>
                                </div>
                                <div class="form-group">
                                    <label for="promocode">Промокод</label>
                                    <input value="{{ $ad->promocode }}" name="promocode" type="text"
                                           class="form-control"
                                           id="promocode"
                                           placeholder="PIVKO2023">
                                </div>
                                @error('promocode')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="promocode_desc">Описание промокода</label>
                                    <textarea name="promocode_desc" class="form-control"
                                              id="promocode_desc"
                                              placeholder="Описание промокода">{{ $ad->promocode_desc }}</textarea>
                                </div>
                                @error('promocode_desc')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                            </div>


                            {{--  Доп. информация о рекламе   --}}

                            <div class="card card-success p-3">
                                <div class="card-header">
                                    <h3 class="card-title">Доп. информация о рекламе</h3>
                                </div>
                                <div class="form-group">
                                    <label for="date_of_creation">Дата создания</label>
                                    <input value="{{ $ad->date_of_creation }}" name="date_of_creation" type="text"
                                           class="form-control"
                                           id="date_of_creation"
                                           placeholder="2022">
                                </div>
                                @error('date_of_creation')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="traffic_volume_per_month">Количество трафика</label>
                                    <input value="{{ $ad->traffic_volume_per_month }}" name="traffic_volume_per_month"
                                           type="text"
                                           class="form-control" id="traffic_volume_per_month"
                                           placeholder="Количество трафика">
                                </div>
                                @error('traffic_volume_per_month')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="formats">Рекламные форматы</label>
                                    <input value="{{ $ad->formats }}" name="formats" type="text"
                                           class="form-control"
                                           id="formats"
                                           placeholder="Форматы">
                                </div>
                                @error('formats')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="forbidden_subjects">Запрещеные вертикали</label>
                                    <input value="{{ $ad->forbidden_subjects }}" name="forbidden_subjects" type="text"
                                           class="form-control"
                                           id="forbidden_subjects"
                                           placeholder="Запрещеные вертикали">
                                </div>
                                @error('forbidden_subjects')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="average_click_price">Минимальная цена за клик</label>
                                    <input value="{{ $ad->average_click_price }}"
                                           name="average_click_price"
                                           type="text" class="form-control"
                                           id="average_click_price"
                                           placeholder="Минимальная цена за клик">
                                </div>
                                @error('average_click_price')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="top_up_methods">Платежные системы</label>
                                    <input value="{{ $ad->top_up_methods }}" name="top_up_methods" type="text"
                                           class="form-control"
                                           id="top_up_methods"
                                           placeholder="Платежные системы">
                                </div>
                                @error('top_up_methods')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="minimum_deposit">Минималка на пополнение</label>
                                    <input value="{{ $ad->minimum_deposit }}" name="minimum_deposit" type="text"
                                           class="form-control"
                                           id="minimum_deposit"
                                           placeholder="Минималка на пополнение">
                                </div>
                                @error('minimum_deposit')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror


                                <div class="form-group">
                                    <label for="referral_program">Реферальная программа</label>
                                    <input value="{{ $ad->referral_program }}" name="referral_program" type="text"
                                           class="form-control"
                                           id="referral_program"
                                           placeholder="Реферальная программа">
                                </div>
                                @error('referral_program')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="tools">Инструменты</label>
                                    <input value="{{ $ad->tools }}" name="tools" type="text" class="form-control"
                                           id="tools"
                                           placeholder="Инструменты">
                                </div>
                                @error('tools')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Информация о менеджере --}}
                            <div class="card card-success p-3">
                                <div class="card-header">
                                    <h3 class="card-title">Информация о менеджере</h3>
                                </div>

                                <img loading="lazy" width="150" src="{{ asset('storage/'.$ad->manager_image) }}"
                                     alt="">
                                <div class="form-group">
                                    <label for="manager_image">Фото менеджера</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input value="{{ $ad->manager_image }}" name="manager_image" type="file"
                                                   class="custom-file-input" id="manager_image">
                                            <label class="custom-file-label" for="manager_image">Выберите фото
                                                менеджера</label>
                                        </div>
                                    </div>
                                </div>
                                @error('manager_image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="manager_name">Имя менеджера</label>
                                    <input value="{{ $ad->manager_name }}" name="manager_name" type="text"
                                           class="form-control"
                                           id="manager_name"
                                           placeholder="Albert Flores">
                                </div>
                                @error('manager_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="manager_position">Должность менеджера</label>
                                    <input value="{{ $ad->manager_position }}" name="manager_position" type="text"
                                           class="form-control"
                                           id="manager_position"
                                           placeholder="Manager">
                                </div>
                                @error('manager_position')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="manager_link">Ссылка на мессенджер</label>
                                    <input value="{{ $ad->manager_link }}" name="manager_link" type="text"
                                           class="form-control"
                                           id="manager_link"
                                           placeholder="https://t.me/bla-bla-bla">
                                </div>
                                @error('manager_link')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="card card-success p-3">
                                <div class="card-header">
                                    <h3 class="card-title">Соц. сети и отзыв редакции</h3>
                                </div>

                                <div class="form-group">
                                    <label for="facebook">Фейсбук</label>
                                    <input type="url" name="facebook" value="{{ $ad->facebook }}" class="form-control"
                                           id="facebook" placeholder="https://facebook.com">
                                </div>
                                @error('facebook')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="instagram">Инстаграм</label>
                                    <input type="url" name="instagram" value="{{ $ad->instagram }}"
                                           class="form-control"
                                           id="instagram" placeholder="https://instagram.com">
                                </div>
                                @error('instagram')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="linkedin">Инстаграм</label>
                                    <input type="url" name="linkedin" value="{{ $ad->linkedin }}" class="form-control"
                                           id="linkedin" placeholder="https://linkedin.com">
                                </div>
                                @error('linkedin')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="forum_link">Ссылка на форум</label>
                                    <input type="url" name="forum_link" value="{{ $ad->forum_link }}"
                                           class="form-control"
                                           id="forum_link" placeholder="https://forum_link.com">
                                </div>
                                @error('forum_link')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="editorial_opinion">Отзыв редакции</label>
                                    <textarea name="editorial_opinion" class="form-control"
                                              id="editorial_opinion"
                                              placeholder="Отзыв редакции">{{ $ad->editorial_opinion }}</textarea>
                                </div>
                                @error('editorial_opinion')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="card card-success p-3">
                                <div class="card-header">
                                    <h3 class="card-title">Рейтинги</h3>
                                </div>
                                <div class="form-group">
                                    <label for="rating_support">Поддержки</label>
                                    <input type="number" max="5" name="rating_support" value="{{ $ad->rating_support }}"
                                           class="form-control"
                                           id="rating_support" placeholder="На пример: 4">
                                </div>
                                @error('rating_support')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="rating_traffic_quality">Траффика</label>
                                    <input type="number" max="5" name="rating_traffic_quality"
                                           value="{{ $ad->rating_traffic_quality }}" class="form-control"
                                           id="rating_traffic_quality" placeholder="На пример: 5">
                                </div>
                                @error('rating_traffic_quality')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="rating_number_of_geos">ГЕО</label>
                                    <input type="number" max="5" name="rating_number_of_geos"
                                           value="{{ $ad->rating_number_of_geos }}" class="form-control"
                                           id="rating_number_of_geos" placeholder="На пример: 3">
                                </div>
                                @error('rating_number_of_geos')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="rating_price_per_click">Цены за клик</label>
                                    <input type="number" max="5" name="rating_price_per_click"
                                           value="{{ $ad->rating_price_per_click }}" class="form-control"
                                           id="rating_price_per_click" placeholder="На пример: 5">
                                </div>
                                @error('rating_price_per_click')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label for="title">TITLE</label>
                                    <input value="{{ $ad->title }}" name="title" type="text" class="form-control"
                                           id="title"
                                           placeholder="Заголовок страницы">
                                </div>
                                @error('title')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="description">DESCRIPTION</label>
                                    <input value="{{ $ad->description }}" name="description" type="text"
                                           class="form-control" id="description"
                                           placeholder="Описание страницы">
                                </div>
                                @error('description')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="keywords">KEYWORDS</label>
                                    <input value="{{ $ad->og_url }}" name="keywords" type="text"
                                           class="form-control" id="keywords"
                                           placeholder="Введите ключевые слова через ','">
                                </div>
                                @error('keywords')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="og_title">OG_TITLE</label>
                                    <input value="{{ $ad->og_url }}" name="og_title" type="text"
                                           class="form-control" id="og_title"
                                           placeholder="Заголовок страницы">
                                </div>
                                @error('og_title')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="og_description">OG_DESCRIPTION</label>
                                    <input value="{{ $ad->og_url }}" name="og_description" type="text"
                                           class="form-control" id="og_description"
                                           placeholder="Описание страницы">
                                </div>
                                @error('og_description')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="og_url">OG_URL</label>
                                    <input value="{{ $ad->og_url }}" name="og_url" type="text"
                                           class="form-control" id="og_url"
                                           placeholder="Ссылка на страницу">
                                </div>
                                @error('og_url')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="og_image">OG_IMAGE</label>
                                    <input value="{{ $ad->og_image }}" name="og_image" type="text"
                                           class="form-control" id="og_image"
                                           placeholder="Сылка на изображение">
                                </div>
                                @error('og_image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="og_type">OG_TYPE</label>
                                    <input value="{{ $ad->og_type }}" name="og_type" type="text"
                                           class="form-control" id="og_type"
                                           placeholder="Тип страницы">
                                </div>
                                @error('og_type')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div id="meta_block" class="form-group gap__flex"></div>
                                <input value="{{ $ad->meta_tags }}" type="hidden" id="meta_tags" name="meta_tags">
                                <div class="form-group">
                                    <label for="meta_name">META_TAGS</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control col-2" id="meta_name"
                                               placeholder="Name">
                                        <input type="text" class="form-control" id="meta_content"
                                               placeholder="Content">
                                        <button data-lang="" data-type="meta" type="button" id="add_meta"
                                                class="startFunc btn btn-warning">Добавить
                                        </button>
                                    </div>
                                </div>
                                @error('meta_tags')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div id="og_block" class="form-group gap__flex"></div>
                                <input value="{{ $ad->og_tags }}" type="hidden" name="og_tags">
                                <div class="form-group">
                                    <label for="og_name">OG_TAGS</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control col-2" id="og_name"
                                               placeholder="Name">
                                        <input type="text" class="form-control" id="og_content"
                                               placeholder="Content">
                                        <button data-lang="" data-type="og" type="button" id="add_og"
                                                class="startFunc btn btn-warning">Добавить
                                        </button>
                                    </div>
                                </div>
                                @error('og_tags')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary">Сохранить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/seo-function.js') }}"></script>

    <script>
        $(function () {
            $('.summernote').summernote({
                height: 300,
                maxHeight: 500,
                toolbar: [
                    ['insert', ['picture', 'link', 'video', 'table', 'hr']],
                    ['fontsize', ['fontname', 'fontsize', 'fontsizeunit', 'color', 'forecolor', 'backcolor', 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
                    ['paragraph', ['style', 'ol', 'ul', 'paragraph', 'height']],
                    ['misc', ['fullscreen', 'codeview', 'undo', 'redo', 'help']],
                ],
                fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Helvetica', 'Impact', 'Tahoma', 'Times New Roman', 'Verdana', 'Roboto', 'Montserrat'],
                fontNamesIgnoreCheck: ['Roboto', 'Montserrat']
            });
            $('.select2').select2()
            $('#select1, #select2, #select3, #select4, #select5').select2()
            bsCustomFileInput.init();
        });

        $('#name').on('input', function () {
            var j = createLink($(this).val());
            j = j.replace(/ /g, '-');
            j = j.replace(/,-/g, '-');
            j = j.replace(/\\/g, '-');
            j = j.replace(/\//g, '-');
            $('#link').val(j.toLowerCase());
        })
    </script>

@endsection
