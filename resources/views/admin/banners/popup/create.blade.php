@php
    use App\Models\Seo;
@endphp

@extends('admin.layouts.admin')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавить рекламный попап</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('button.index') }}">Рекламный попап</a></li>
                            <li class="breadcrumb-item active">Добавить рекламный попап</li>
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
                    <form method="post" action="{{ route('button.store') }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Заголовок</label>
                                <input name="title" type="text" class="form-control" value="{{ old('title') }}"
                                       id="title"
                                       placeholder="Дарим бабло">
                            </div>
                            @error('title')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="text">Текст</label>
                                <input name="text" type="text" class="form-control" value="{{ old('text') }}" id="text"
                                       placeholder="Дарим бабло для вашего пикинеса">
                            </div>
                            @error('text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="button_text">Текст кнопки</label>
                                <input name="button_text" type="text" class="form-control"
                                       value="{{ old('button_text') }}" id="button_text"
                                       placeholder="Дарим бабло">
                            </div>
                            @error('button_text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="button_link">Ссылка кнопки</label>
                                <input name="button_link" type="url" class="form-control"
                                       value="{{ old('button_link') }}" id="button_link"
                                       placeholder="https://google.com">
                            </div>
                            @error('button_link')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="color_text">Цвет текста кнопки</label>
                                <input name="color_text" type="color" class="form-control"
                                       value="{{ old('color_text') }}" id="color_text"
                                       placeholder="#000000">
                            </div>
                            @error('color_text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="color_back">Цвет фона кнопки</label>
                                <input name="color_back" type="color" class="form-control"
                                       value="{{ old('color_back') }}" id="color_back"
                                       placeholder="#ffffff">
                            </div>
                            @error('color_back')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="logo">Логотип</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input value="{{ old('logo') }}" name="logo" type="file"
                                               class="custom-file-input" id="logo">
                                        <label class="custom-file-label" for="logo">Выберите Логотип</label>
                                    </div>
                                </div>
                            </div>
                            @error('logo')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

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
    <script>
        $(function () {
            bsCustomFileInput.init();
        });
    </script>
@endsection
