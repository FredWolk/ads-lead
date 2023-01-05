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
                        <h1 class="m-0">Редактировать баннер форума</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('forum.index') }}">Баннеры</a></li>
                            <li class="breadcrumb-item active">Редактировать баннер форума</li>
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
                    <form method="post" enctype="multipart/form-data" action="{{ route('forum.update', $forum->id) }}">
                        @csrf
                        @method('patch')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="type">Тип баннера</label>
                                <select name="type" id="type" class="form-control">
                                    <option {{ $forum->type == 'image' ? 'selected' : '' }} value="image">
                                        Изображение\GIF
                                    </option>
                                    <option {{ $forum->type == 'video' ? 'selected' : '' }} value="video">Видео</option>
                                </select>
                            </div>
                            @error('type')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            @if($forum->type == 'image')
                                <img width="400" src="{{ asset('storage/'. $forum->file) }}" alt="">
                            @else
                                <video width="400" src="{{ asset('storage/'. $forum->file) }}" controls="controls"></video>
                            @endif
                            <div class="form-group">
                                <label for="file">Изображение баннера</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input value="{{ $forum->file }}" name="file" type="file"
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
                                <input name="link" type="url" class="form-control" value="{{ $forum->link }}" id="link"
                                       placeholder="https://google.com">
                            </div>
                            @error('link')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="status">Статус</label>
                                <select name="status" id="status" class="form-control">
                                    <option {{ $forum->status == 1 ? 'selected' : '' }} value="1">Активен</option>
                                    <option {{ $forum->status == 0 ? 'selected' : '' }} value="0">Не активен</option>
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

