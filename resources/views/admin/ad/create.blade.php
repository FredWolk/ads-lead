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
                        <h1 class="m-0">Добавить рекламу</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('ad.index') }}">Рекламы</a></li>
                            <li class="breadcrumb-item active">Добавить рекламу</li>
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
                    <form enctype="multipart/form-data" method="post" action="{{ route('ad.store') }}">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="name">Название рекламы</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name"
                                       placeholder="Название рекламы">
                            </div>
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="link">Ссылка на рекламу</label>
                                <input type="text" name="link" value="{{ old('link') }}" class="form-control" id="link">
                            </div>
                            @error('link')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="pt_name">Название рекламы на португальском</label>
                                <input type="text" name="pt_name" value="{{ old('pt_name') }}" class="form-control"
                                       id="pt_name" placeholder="Название рекламы">
                            </div>
                            @error('pt_name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="image">Изображение рекламы</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input value="{{ old('image') }}" name="image" type="file"
                                               class="custom-file-input" id="image">
                                        <label class="custom-file-label" for="image">Выберите изображение
                                            рекламы</label>
                                    </div>
                                </div>
                            </div>
                            @error('image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="pt_image">Изображение рекламы на португальском</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input value="{{ old('pt_image') }}" name="pt_image" type="file"
                                               class="custom-file-input" id="pt_image">
                                        <label class="custom-file-label" for="pt_image">Выберите изображение
                                            рекламы</label>
                                    </div>
                                </div>
                            </div>
                            @error('pt_image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="logo">Логотип рекламы</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input value="{{ old('logo') }}" name="logo" type="file"
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
                                          placeholder="Превью текст рекламы">{{ old('prev_text') }}</textarea>
                            </div>
                            @error('prev_text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="pt_prev_text">Превью текст рекламы на португальском</label>
                                <textarea name="pt_prev_text" class="form-control"
                                          id="pt_prev_text"
                                          placeholder="Превью текст рекламы на португальском">{{ old('pt_prev_text') }}</textarea>
                            </div>
                            @error('pt_prev_text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="url">Веб сайт рекламы</label>
                                <input type="url" name="url" value="{{ old('url') }}" class="form-control"
                                       id="url" placeholder="https://google.com">
                            </div>
                            @error('url')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="views">Просмотры</label>
                                <input type="number" name="views" value="{{ !empty(old('views')) ? old('views') : 0 }}" class="form-control"
                                       id="views" placeholder="На пример: 41">
                            </div>
                            @error('views')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="summernote">Текст перед рекламой</label>
                                <textarea class="summernote" name="before_main_text"
                                          id="summernote">{{ old('before_main_text') }}</textarea>
                            </div>
                            @error('main_text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="summernote1">Текст перед рекламой на португальском</label>
                                <textarea class="summernote" name="pt_before_main_text"
                                          id="summernote1">{{ old('pt_before_main_text') }}</textarea>
                            </div>
                            @error('pt_main_text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="summernote2">Контент рекламы</label>
                                <textarea class="summernote" name="main_text"
                                          id="summernote2">{{ old('main_text') }}</textarea>
                            </div>
                            @error('main_text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="summernote3">Контент португальской рекламы</label>
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
                                    <label for="select1">Формат рекламы</label>
                                    <select name="advertising_formats[]" multiple="multiple" class="form-control select1"
                                            id="select1">
                                        @foreach(json_decode($filters['advertising_formats']) as $i)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('verticales_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="select2">Страны</label>
                                    <select name="countries[]" multiple="multiple" class="form-control select1"
                                            id="select2">
                                        @if(!empty($filters['countries']))
                                            @foreach(json_decode($filters['countries']) as $i)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                @error('countries_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="select3">Модели оплаты</label>
                                    <select name="payment_systems[]" multiple="multiple" class="form-control select1"
                                            id="select3">
                                        @if(!empty($filters['payment_systems']))
                                            @foreach(json_decode($filters['payment_systems']) as $i)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                @error('payment_models_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="select4">Минимальная сумма пополнения</label>
                                    <select name="minimum_top_up_amount[]" multiple="multiple"
                                            class="form-control select1" id="select4">
                                        @if(!empty($filters['minimum_top_up_amount']))
                                            @foreach(json_decode($filters['minimum_top_up_amount']) as $i)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                @error('payment_schedule_id')
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
                                    <input value="{{ old('date_of_creation') }}" name="date_of_creation" type="text"
                                           class="form-control"
                                           id="date_of_creation"
                                           placeholder="2022">
                                </div>
                                @error('date_of_creation')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="traffic_volume_per_month">Количество трафика</label>
                                    <input value="{{ old('traffic_volume_per_month') }}" name="traffic_volume_per_month"
                                           type="text"
                                           class="form-control" id="traffic_volume_per_month"
                                           placeholder="Количество трафика">
                                </div>
                                @error('traffic_volume_per_month')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="formats">Рекламные форматы</label>
                                    <input value="{{ old('formats') }}" name="formats" type="text"
                                           class="form-control"
                                           id="formats"
                                           placeholder="Форматы">
                                </div>
                                @error('formats')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="forbidden_subjects">Запрещеные вертикали</label>
                                    <input value="{{ old('forbidden_subjects') }}" name="forbidden_subjects" type="text"
                                           class="form-control"
                                           id="forbidden_subjects"
                                           placeholder="Запрещеные вертикали">
                                </div>
                                @error('forbidden_subjects')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="average_click_price">Минимальная цена за клик</label>
                                    <input value="{{ old('average_click_price') }}"
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
                                    <input value="{{ old('top_up_methods') }}" name="top_up_methods" type="text"
                                           class="form-control"
                                           id="top_up_methods"
                                           placeholder="Платежные системы">
                                </div>
                                @error('top_up_methods')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="minimum_deposit">Минималка на пополнение</label>
                                    <input value="{{ old('minimum_deposit') }}" name="minimum_deposit" type="text"
                                           class="form-control"
                                           id="minimum_deposit"
                                           placeholder="Минималка на пополнение">
                                </div>
                                @error('minimum_deposit')
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
                            </div>

                            <div class="card card-success p-3">
                                <div class="card-header">
                                    <h3 class="card-title">Рейтинги</h3>
                                </div>
                                <div class="form-group">
                                    <label for="rating_support">Поддержки</label>
                                    <input type="number" max="5" name="rating_support" value="{{ old('rating_support') }}" class="form-control"
                                           id="rating_support" placeholder="На пример: 4">
                                </div>
                                @error('rating_support')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="rating_traffic_quality">Траффика</label>
                                    <input type="number" max="5" name="rating_traffic_quality" value="{{ old('rating_traffic_quality') }}" class="form-control"
                                           id="rating_traffic_quality" placeholder="На пример: 5">
                                </div>
                                @error('rating_traffic_quality')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="rating_number_of_geos">ГЕО</label>
                                    <input type="number" max="5" name="rating_number_of_geos" value="{{ old('rating_number_of_geos') }}" class="form-control"
                                           id="rating_number_of_geos" placeholder="На пример: 3">
                                </div>
                                @error('rating_number_of_geos')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="rating_price_per_click">Цены за клик</label>
                                    <input type="number" max="5" name="rating_price_per_click" value="{{ old('rating_price_per_click') }}" class="form-control"
                                           id="rating_price_per_click" placeholder="На пример: 5">
                                </div>
                                @error('rating_price_per_click')
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
                                               placeholder="Введите ключевые слова через ';'">
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
                                               placeholder="Введите ключевые слова через ';'">
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
            $('.summernote').summernote();
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
