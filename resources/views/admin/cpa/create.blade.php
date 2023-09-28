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
                        <h1 class="m-0">Добавить партнерку</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('cpa.index') }}">Партнерки</a></li>
                            <li class="breadcrumb-item active">Добавить партнерку</li>
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
                    <form enctype="multipart/form-data" method="post" action="{{ route('cpa.store') }}">
                        @csrf
                        <div class="card-body">

                            <div class="row">
                                <div class="form-group col-4">
                                    <label for="is_main">На главной</label>
                                    <select name="is_main" class="form-control" id="is_main">
                                        <option {{ old('is_main') == true ? 'selected' : '' }} value="1">Да</option>
                                        <option {{ old('is_main') == false ? 'selected' : '' }} value="0">Нет</option>
                                    </select>
                                </div>
                                @error('is_main')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group col-4">
                                    <label for="is_top">Топ-5</label>
                                    <select name="is_top" class="form-control" id="is_top">
                                        <option {{ old('is_top') == true ? 'selected' : '' }} value="1">Да</option>
                                        <option {{ old('is_top') == false ? 'selected' : '' }} value="0">Нет</option>
                                    </select>
                                </div>
                                @error('is_top')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group col-4">
                                    <label for="is_recomendated">Рекомендован</label>
                                    <select name="is_recomendated" class="form-control" id="is_recomendated">
                                        <option {{ old('is_recomendated') == true ? 'selected' : '' }} value="1">Да
                                        </option>
                                        <option {{ old('is_recomendated') == false ? 'selected' : '' }} value="0">Нет
                                        </option>
                                    </select>
                                </div>
                                @error('is_recomendated')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="name">Название партнерки</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name"
                                       placeholder="Название партнерки">
                            </div>
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="link">Ссылка на партнерку</label>
                                <input type="text" name="link" value="{{ old('link') }}" class="form-control" id="link"
                                       placeholder="Название партнерки">
                            </div>
                            @error('link')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="pt_name">Название партнерки на португальском</label>
                                <input type="text" name="pt_name" value="{{ old('pt_name') }}" class="form-control"
                                       id="pt_name" placeholder="Название партнерки">
                            </div>
                            @error('pt_name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="image">Изображение партнерки</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input value="{{ old('image') }}" name="image" type="file"
                                               class="custom-file-input" id="image">
                                        <label class="custom-file-label" for="image">Выберите изображение
                                            партнерки</label>
                                    </div>
                                </div>
                            </div>
                            @error('image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="pt_image">Изображение партнерки на португальском</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input value="{{ old('pt_image') }}" name="pt_image" type="file"
                                               class="custom-file-input" id="pt_image">
                                        <label class="custom-file-label" for="pt_image">Выберите изображение
                                            партнерки</label>
                                    </div>
                                </div>
                            </div>
                            @error('pt_image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="logo">Логотип партнерки</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input value="{{ old('logo') }}" name="logo" type="file"
                                               class="custom-file-input" id="logo">
                                        <label class="custom-file-label" for="logo">Выберите логотип партнерки</label>
                                    </div>
                                </div>
                            </div>
                            @error('logo')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="prev_text">Превью текст партнерки</label>
                                <textarea name="prev_text" class="form-control"
                                          id="views"
                                          placeholder="Превью текст партнерки">{{ old('prev_text') }}</textarea>
                            </div>
                            @error('prev_text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="pt_prev_text">Превью текст партнерки на португальском</label>
                                <textarea name="pt_prev_text" class="form-control"
                                          id="pt_prev_text"
                                          placeholder="Превью текст партнерки на португальском">{{ old('pt_prev_text') }}</textarea>
                            </div>
                            @error('pt_prev_text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="url">Веб сайт партнерки</label>
                                <input type="url" name="url" value="{{ old('url') }}" class="form-control"
                                       id="url" placeholder="https://google.com">
                            </div>
                            @error('url')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="views">Просмотры</label>
                                <input type="number" name="views" value="{{ !empty(old('views')) ? old('views') : 0 }}"
                                       class="form-control"
                                       id="views" placeholder="На пример: 41">
                            </div>
                            @error('views')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="summernote">Текст перед статьей</label>
                                <textarea class="summernote" name="before_main_text"
                                          id="summernote">{{ old('before_main_text') }}</textarea>
                            </div>
                            @error('main_text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="summernote1">Текст перед статьей на португальском</label>
                                <textarea class="summernote" name="pt_before_main_text"
                                          id="summernote1">{{ old('pt_before_main_text') }}</textarea>
                            </div>
                            @error('pt_main_text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="summernote2">Контент статьи</label>
                                <textarea class="summernote" name="main_text"
                                          id="summernote2">{{ old('main_text') }}</textarea>
                            </div>
                            @error('main_text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="summernote3">Контент португальской статьи</label>
                                <textarea class="summernote" name="pt_main_text"
                                          id="summernote3">{{ old('pt_main_text') }}</textarea>
                            </div>
                            @error('pt_main_text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            {{--  ФИЛЬТРЫ  --}}
                            <div class="card card-success p-3">
                                <div class="card-header">
                                    <h3 class="card-title">Фильтры</h3>
                                </div>
                                <div class="form-group">
                                    <label for="select2">Главная вертикаль</label>
                                    <select name="main_verticales" class="form-control select2"
                                            id="select2">
                                        @foreach(json_decode($filters['vertical']) as $i)
                                            <option
                                                {{ old('main_verticales') == $i ? 'selected' : '' }} value="{{ $i }}">{{ $i }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('main_verticales')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="select1">Вертикали</label>
                                    <select name="verticales[]" multiple="multiple" class="form-control select1"
                                            id="select1">
                                        @foreach(json_decode($filters['vertical']) as $i)
                                            <option
                                                {{ !empty(old('verticales')) && in_array($i, old('verticales')) ? 'selected' : ''}} value="{{ $i }}">{{ $i }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('verticales')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="select2">Страны</label>
                                    <select name="countries[]" multiple="multiple" class="form-control select1"
                                            id="select2">
                                        @if(!empty($filters['countries']))
                                            @foreach(json_decode($filters['countries']) as $i)
                                                <option
                                                    {{ !empty(old('countries')) && in_array($i, old('countries')) ? 'selected' : ''}} value="{{ $i }}">{{ $i }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                @error('countries')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="select3">Модели оплаты</label>
                                    <select name="payment_models[]" multiple="multiple" class="form-control select1"
                                            id="select3">
                                        @if(!empty($filters['payment_models']))
                                            @foreach(json_decode($filters['payment_models']) as $i)
                                                <option
                                                    {{ !empty(old('payment_models')) && in_array($i, old('payment_models')) ? 'selected' : ''}} value="{{ $i }}">{{ $i }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                @error('payment_models')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="select4">Периодичность выплат</label>
                                    <select name="payment_schedule_f[]" multiple="multiple"
                                            class="form-control select1" id="select4">
                                        @if(!empty($filters['payment_schedule']))
                                            @foreach(json_decode($filters['payment_schedule']) as $i)
                                                <option
                                                    {{ !empty(old('payment_schedule_f')) && in_array($i, old('payment_schedule_f')) ? 'selected' : ''}} value="{{ $i }}">{{ $i }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                @error('payment_schedule_f')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="select5">Платежные системы</label>
                                    <select name="payment_systems[]" multiple="multiple" class="form-control select1"
                                            id="select5">
                                        @if(!empty($filters['payment_systems']))
                                            @foreach(json_decode($filters['payment_systems']) as $i)
                                                <option
                                                    {{ !empty(old('payment_systems')) && in_array($i, old('payment_systems')) ? 'selected' : ''}} value="{{ $i }}">{{ $i }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                @error('payment_systems')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{--  Доп. информация о партнерке   --}}

                            <div class="card card-success p-3">
                                <div class="card-header">
                                    <h3 class="card-title">Доп. информация о партнерке</h3>
                                </div>
                                <div class="form-group">
                                    <label for="date_of_creation">Дата создания</label>
                                    <input value="{{ old('date_of_creation') }}" name="date_of_creation" type="text"
                                           class="form-control"
                                           id="date_of_creation"
                                           placeholder="2022">
                                </div>
                                @error('date_of_creation')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="geography_of_offers">География офферов</label>
                                    <input value="{{ old('geography_of_offers') }}" name="geography_of_offers"
                                           type="text"
                                           class="form-control" id="geography_of_offers"
                                           placeholder="География офферов">
                                </div>
                                @error('geography_of_offers')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="themes_of_offers">Вертикали</label>
                                    <input value="{{ old('themes_of_offers') }}" name="themes_of_offers" type="text"
                                           class="form-control"
                                           id="themes_of_offers"
                                           placeholder="Вертикали">
                                </div>
                                @error('themes_of_offers')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="inhaus_offers">Инхаус офферы</label>
                                    <input value="{{ old('inhaus_offers') }}" name="inhaus_offers" type="text"
                                           class="form-control"
                                           id="inhaus_offers"
                                           placeholder="Инхаус офферы">
                                </div>
                                @error('inhaus_offers')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="minimum_withdrawal_amount">Минималка на вывод</label>
                                    <input value="{{ old('minimum_withdrawal_amount') }}"
                                           name="minimum_withdrawal_amount"
                                           type="text" class="form-control"
                                           id="minimum_withdrawal_amount"
                                           placeholder="Минималка на вывод">
                                </div>
                                @error('minimum_withdrawal_amount')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="payment_methods">Платежные системы</label>
                                    <input value="{{ old('payment_methods') }}" name="payment_methods" type="text"
                                           class="form-control"
                                           id="payment_methods"
                                           placeholder="Платежные системы">
                                </div>
                                @error('payment_methods')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="payment_schedule">Периодичность выплат</label>
                                    <input value="{{ old('payment_schedule') }}" name="payment_schedule" type="text"
                                           class="form-control"
                                           id="payment_schedule"
                                           placeholder="Периодичность выплат">
                                </div>
                                @error('payment_schedule')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror


                                <div class="form-group">
                                    <label for="referral_program">Реферальная программа</label>
                                    <input value="{{ old('referral_program') }}" name="referral_program" type="text"
                                           class="form-control"
                                           id="referral_program"
                                           placeholder="Реферальная программа">
                                </div>
                                @error('referral_program')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="tools">Инструменты</label>
                                    <input value="{{ old('tools') }}" name="tools" type="text" class="form-control"
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
                                <div class="form-group">
                                    <label for="manager_image">Фото менеджера</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input value="{{ old('manager_image') }}" name="manager_image" type="file"
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
                                    <input value="{{ old('manager_name') }}" name="manager_name" type="text"
                                           class="form-control"
                                           id="manager_name"
                                           placeholder="Albert Flores">
                                </div>
                                @error('manager_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="manager_position">Должность менеджера</label>
                                    <input value="{{ old('manager_position') }}" name="manager_position" type="text"
                                           class="form-control"
                                           id="manager_position"
                                           placeholder="Manager">
                                </div>
                                @error('manager_position')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="manager_link">Ссылка на мессенджер</label>
                                    <input value="{{ old('manager_link') }}" name="manager_link" type="text"
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
                                    <input type="url" name="facebook" value="{{ old('facebook') }}" class="form-control"
                                           id="facebook" placeholder="https://facebook.com">
                                </div>
                                @error('facebook')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="instagram">Инстаграм</label>
                                    <input type="url" name="instagram" value="{{ old('instagram') }}"
                                           class="form-control"
                                           id="instagram" placeholder="https://instagram.com">
                                </div>
                                @error('instagram')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="linkedin">Инстаграм</label>
                                    <input type="url" name="linkedin" value="{{ old('linkedin') }}" class="form-control"
                                           id="linkedin" placeholder="https://linkedin.com">
                                </div>
                                @error('linkedin')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="forum_link">Ссылка на форум</label>
                                    <input type="url" name="forum_link" value="{{ old('forum_link') }}"
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
                                              placeholder="Отзыв редакции">{{ old('editorial_opinion') }}</textarea>
                                </div>
                                @error('editorial_opinion')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="pt_editorial_opinion">Отзыв редакции на португальском</label>
                                    <textarea name="pt_editorial_opinion" class="form-control"
                                              id="pt_editorial_opinion"
                                              placeholder="Отзыв редакции на португальском">{{ old('pt_editorial_opinion') }}</textarea>
                                </div>
                                @error('pt_editorial_opinion')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="card card-success p-3">
                                <div class="card-header">
                                    <h3 class="card-title">Рейтинги</h3>
                                </div>
                                <div class="form-group">
                                    <label for="rating_support">Поддержки</label>
                                    <input type="number" max="5" name="rating_support"
                                           value="{{ old('rating_support') }}" class="form-control"
                                           id="rating_support" placeholder="На пример: 4">
                                </div>
                                @error('rating_support')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="rating_payments">Оплат</label>
                                    <input type="number" max="5" name="rating_payments"
                                           value="{{ old('rating_payments') }}" class="form-control"
                                           id="rating_payments" placeholder="На пример: 5">
                                </div>
                                @error('rating_payments')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="rating_offers">Офферов</label>
                                    <input type="number" max="5" name="rating_offers" value="{{ old('rating_offers') }}"
                                           class="form-control"
                                           id="rating_offers" placeholder="На пример: 3">
                                </div>
                                @error('rating_offers')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="rating_betting">Ставок</label>
                                    <input type="number" max="5" name="rating_betting"
                                           value="{{ old('rating_betting') }}" class="form-control"
                                           id="rating_betting" placeholder="На пример: 5">
                                </div>
                                @error('rating_betting')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="title">TITLE</label>
                                        <input value="{{ old('title') }}" name="title" type="text" class="form-control"
                                               id="title"
                                               placeholder="Заголовок страницы">
                                    </div>
                                    @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="description">DESCRIPTION</label>
                                        <input value="{{ old('description') }}" name="description" type="text"
                                               class="form-control" id="description"
                                               placeholder="Описание страницы">
                                    </div>
                                    @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="keywords">KEYWORDS</label>
                                        <input value="{{ old('og_url') }}" name="keywords" type="text"
                                               class="form-control" id="keywords"
                                               placeholder="Введите ключевые слова через ','">
                                    </div>
                                    @error('keywords')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="og_title">OG_TITLE</label>
                                        <input value="{{ old('og_url') }}" name="og_title" type="text"
                                               class="form-control" id="og_title"
                                               placeholder="Заголовок страницы">
                                    </div>
                                    @error('og_title')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="og_description">OG_DESCRIPTION</label>
                                        <input value="{{ old('og_url') }}" name="og_description" type="text"
                                               class="form-control" id="og_description"
                                               placeholder="Описание страницы">
                                    </div>
                                    @error('og_description')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="og_url">OG_URL</label>
                                        <input value="{{ old('og_url') }}" name="og_url" type="text"
                                               class="form-control" id="og_url"
                                               placeholder="Ссылка на страницу">
                                    </div>
                                    @error('og_url')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="og_image">OG_IMAGE</label>
                                        <input value="{{ old('og_image') }}" name="og_image" type="text"
                                               class="form-control" id="og_image"
                                               placeholder="Сылка на изображение">
                                    </div>
                                    @error('og_image')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="og_type">OG_TYPE</label>
                                        <input value="{{ old('og_type') }}" name="og_type" type="text"
                                               class="form-control" id="og_type"
                                               placeholder="Тип страницы">
                                    </div>
                                    @error('og_type')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div id="meta_block" class="form-group gap__flex"></div>
                                    <input value="{{ old('meta_tags') }}" type="hidden" id="meta_tags" name="meta_tags">
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
                                    <input value="{{ old('og_tags') }}" type="hidden" name="og_tags">
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
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="pt_title">PT TITLE</label>
                                        <input value="{{ old('pt_title') }}" name="pt_title" type="text"
                                               class="form-control" id="pt_title"
                                               placeholder="Заголовок страницы">
                                    </div>
                                    @error('pt_title')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="pt_description">PT DESCRIPTION</label>
                                        <input value="{{ old('pt_description') }}" name="pt_description" type="text"
                                               class="form-control" id="pt_description"
                                               placeholder="Описание страницы">
                                    </div>
                                    @error('pt_description')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="pt_keywords">PT KEYWORDS</label>
                                        <input value="{{ old('pt_keywords') }}" name="pt_keywords" type="text"
                                               class="form-control" id="pt_keywords"
                                               placeholder="Введите ключевые слова через ','">
                                    </div>
                                    @error('pt_keywords')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="pt_og_title">PT OG_TITLE</label>
                                        <input value="{{ old('pt_og_title') }}" name="pt_og_title" type="text"
                                               class="form-control" id="pt_og_title"
                                               placeholder="Заголовок страницы">
                                    </div>
                                    @error('pt_og_title')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="pt_og_description">PT OG_DESCRIPTION</label>
                                        <input value="{{ old('pt_og_description') }}" name="pt_og_description"
                                               type="text" class="form-control" id="pt_og_description"
                                               placeholder="Описание страницы">
                                    </div>
                                    @error('pt_og_description')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="pt_og_url">PT OG_URL</label>
                                        <input value="{{ old('pt_og_url') }}" name="pt_og_url" type="text"
                                               class="form-control" id="pt_og_url"
                                               placeholder="Ссылка на страницу">
                                    </div>
                                    @error('pt_og_url')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="pt_og_image">PT OG_IMAGE</label>
                                        <input value="{{ old('pt_og_image') }}" name="pt_og_image" type="text"
                                               class="form-control" id="pt_og_image"
                                               placeholder="Сылка на изображение">
                                    </div>
                                    @error('pt_og_image')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="pt_og_type">PT OG_TYPE</label>
                                        <input value="{{ old('pt_og_type') }}" name="pt_og_type" type="text"
                                               class="form-control" id="pt_og_type"
                                               placeholder="Тип страницы">
                                    </div>
                                    @error('pt_og_type')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div id="pt_meta_block" class="form-group pt_gap__flex"></div>

                                    <input value="{{ old('pt_meta_tags') }}" type="hidden" id="pt_meta_tags"
                                           name="pt_meta_tags">
                                    <div class="form-group">
                                        <label for="pt_meta_name">PT META_TAGS</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control col-2" id="pt_meta_name"
                                                   placeholder="Name">
                                            <input type="text" class="form-control" id="pt_meta_content"
                                                   placeholder="Content">
                                            <button data-type="meta" type="button" id="pt_add_meta"
                                                    class="pt_startFunc btn btn-warning">Добавить
                                            </button>
                                        </div>
                                    </div>
                                    @error('pt_meta_tags')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div id="pt_og_block" class="form-group pt_gap__flex"></div>

                                    <input value="{{ old('pt_og_tags') }}" type="hidden" name="pt_og_tags">
                                    <div class="form-group">
                                        <label for="pt_og_name">PT OG_TAGS</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control col-2" id="pt_og_name"
                                                   placeholder="Name">
                                            <input type="text" class="form-control" id="pt_og_content"
                                                   placeholder="Content">
                                            <button data-type="og" type="button" id="pt_add_og"
                                                    class="pt_startFunc btn btn-warning">Добавить
                                            </button>
                                        </div>
                                    </div>
                                    @error('og_tags')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
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
            CKEDITOR.replace('summernote');
            CKEDITOR.replace('summernote2');
            CKEDITOR.replace('summernote3');
            // $('.summernote').summernote({
            //     height: 300,
            //     maxHeight: 500,
            //     toolbar: [
            //         ['insert', ['picture', 'link', 'video', 'table', 'hr']],
            //         ['fontsize', ['fontname', 'fontsize', 'fontsizeunit', 'color', 'forecolor', 'backcolor', 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
            //         ['paragraph', ['style', 'ol', 'ul', 'paragraph', 'height']],
            //         ['misc', ['fullscreen', 'codeview', 'undo', 'redo', 'help']],
            //     ],
            //     fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Helvetica', 'Impact', 'Tahoma', 'Times New Roman', 'Verdana', 'Roboto', 'Montserrat'],
            //     fontNamesIgnoreCheck: ['Roboto', 'Montserrat']
            // });
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
