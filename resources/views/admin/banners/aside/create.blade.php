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
                        <h1 class="m-0">Добавить боковой баннер</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('aside.index') }}">Баннеры</a></li>
                            <li class="breadcrumb-item active">Добавить боковой баннер</li>
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
                    <form enctype="multipart/form-data" method="post" action="{{ route('aside.store') }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="type">Тип баннера</label>
                                <select name="type" id="type" class="form-control">
                                    <option {{ old('type') == 'image' ? 'selected' : '' }} value="image">Изображение\GIF</option>
                                    <option {{ old('type') == 'video' ? 'selected' : '' }} value="video">Видео</option>
                                </select>
                            </div>
                            @error('type')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="file">Изображение баннера</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input value="{{ old('file') }}" name="file" type="file"
                                               class="custom-file-input" id="file">
                                        <label class="custom-file-label" for="file">Выберите изображение
                                            Баннера</label>
                                    </div>
                                </div>
                            </div>
                            @error('file')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="link">Ссылка</label>
                                <input name="link" type="url" class="form-control" value="{{ old('link') }}" id="link"
                                       placeholder="https://google.com">
                            </div>
                            @error('link')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="show">Отображение</label>
                                <select name="show" id="show" class="form-control">
                                    <option {{ old('show') == 'all' ? 'selected' : '' }} value="all">Общий</option>
                                    <option {{ old('show') == 'cpa' ? 'selected' : '' }} value="cpa">ПП</option>
                                    <option {{ old('show') == 'ad' ? 'selected' : '' }} value="ad">Сетки</option>
                                    <option {{ old('show') == 'tools' ? 'selected' : '' }} value="tools">Сервисы</option>
                                </select>
                            </div>
                            @error('show')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="status">Статус</label>
                                <select name="status" id="status" class="form-control">
                                    <option {{ old('status') == 1 ? 'selected' : '' }} value="1">Активен</option>
                                    <option {{ old('status') == 0 ? 'selected' : '' }} value="0">Не активен</option>
                                </select>
                            </div>
                            @error('status')
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
