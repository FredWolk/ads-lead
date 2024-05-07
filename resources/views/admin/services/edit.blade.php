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
                        <h1 class="m-0">Редактировать сервис</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('services.index') }}">Сервисы</a></li>
                            <li class="breadcrumb-item active">Редактировать сервис</li>
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
                    <form enctype="multipart/form-data" method="post"
                          action="{{ route('services.update', $service->id) }}">
                        @csrf
                        @method('patch')
                        <div class="card-body">

                            <div class="row">
                                <div class="form-group col-4">
                                    <label for="is_recomendated">Рекомендован</label>
                                    <select name="is_recomendated" class="form-control" id="is_recomendated">
                                        <option {{ $service->is_recomendated == true ? 'selected' : '' }} value="1">Да
                                        </option>
                                        <option {{ $service->is_recomendated == false ? 'selected' : '' }} value="0">
                                            Нет
                                        </option>
                                    </select>
                                </div>
                                @error('is_recomendated')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="name">Название сервиса</label>
                                <input type="text" name="name" value="{{ $service->name }}" class="form-control"
                                       id="name"
                                       placeholder="Название рекламы">
                            </div>
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="listing_rating">Рейтинг в листинге</label>
                                <input type="number" name="listing_rating" value="{{ $service->listing_rating }}" class="form-control" id="listing_rating">
                            </div>
                            @error('listing_rating')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <img loading="lazy" width="150" src="{{ asset('storage/'.$service->logo) }}" alt="">
                            <div class="form-group">
                                <label for="logo">Логотип рекламы</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input value="{{ $service->logo }}" name="logo" type="file"
                                               class="custom-file-input" id="logo">
                                        <label class="custom-file-label" for="logo">Выберите логотип рекламы</label>
                                    </div>
                                </div>
                            </div>
                            @error('logo')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="select1">Тип сервиса</label>
                                <select name="type[]" multiple="multiple" class="form-control select1" id="select1">
                                    @foreach(\App\Models\Services::getType() as $type)
                                        <option value="{{ $type }}" {{ in_array($type, $service->type) ? 'selected' : '' }}>{{ $type }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('type')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="prev_text">Превью текст рекламы</label>
                                <textarea name="prev_text" class="form-control"
                                          id="prev_text"
                                          placeholder="Превью текст рекламы">{{ $service->prev_text }}</textarea>
                            </div>
                            @error('prev_text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="url">Веб сайт рекламы</label>
                                <input type="url" name="url" value="{{ $service->url }}" class="form-control"
                                       id="url" placeholder="https://google.com">
                            </div>
                            @error('url')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="link">Отзыв о сервисе</label>
                                <input type="url" name="link" value="{{ $service->link }}" class="form-control"
                                       id="link"
                                       placeholder="https://affjournal.com/articles/how-to-set-up-cloaking-with-cloaking.house">
                            </div>
                            @error('link')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="card card-success p-3">
                                <div class="card-header">
                                    <h3 class="card-title">Промокод</h3>
                                </div>
                                <div class="form-group">
                                    <label for="promocode">Промокод</label>
                                    <input value="{{ $service->promocode }}" name="promocode" type="text"
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
                                              placeholder="Описание промокода">{{ $service->promocode_desc }}</textarea>
                                </div>
                                @error('promocode_desc')
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
    <script src="{{ asset('assets/admin/js/seo-function.js') }}"></script>
    <script src="{{ asset('assets/admin/js/select2.min.js') }}"></script>

    <script>
        $(function () {
            bsCustomFileInput.init();
            $('#select1').select2({
                tags: true,
            })
        });
    </script>

@endsection
