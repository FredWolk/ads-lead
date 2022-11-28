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
                        <h1 class="m-0">Добавить SEO к странице</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Добавить SEO</li>
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
                    <form method="post" action="{{ route('seo.store') }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="pageSelect">Страница</label>
                                <select name="page" id="pageSelect" class="form-control">
                                    <option value="{{ Seo::MAIN_PAGE }}">Главная</option>
                                    <option value="{{ Seo::CPA_PAGE }}">Партнерки</option>
                                    <option value="{{ Seo::ADS_PAGE }}">Рекламы</option>
                                    <option value="{{ Seo::ARTICLES_PAGE }}">Статьи</option>
                                    <option value="{{ Seo::VIDEOS_PAGE }}">Видео</option>
                                    <option value="{{ Seo::EVENTS_PAGE }}">События</option>
                                    <option value="{{ Seo::FORUM_PAGE }}">Форум</option>
                                </select>
                            </div>
                            @error('content')
                            <div class="text-danger">Поле контент не может быть пустым</div>
                            @enderror
                            <div class="form-group">
                                <label for="pageActive">Статус страницы</label>
                                <select name="status" id="pageActive" class="form-control">
                                    <option value="1">Активная</option>
                                    <option value="0">Не активная</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">TITLE</label>
                                <input name="title" type="text" class="form-control" id="title" placeholder="Заголовок страницы">
                            </div>
                            @error('title')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="description">DESCRIPTION</label>
                                <input name="description" type="text" class="form-control" id="description" placeholder="Описание страницы">
                            </div>
                            @error('description')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="keywords">KEYWORDS</label>
                                <input name="keywords" type="text" class="form-control" id="keywords" placeholder="Введите ключевые слова через ';'">
                            </div>
                            @error('keywords')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group gap__flex">
                                <div class="alert alert-secondary">
                                    A simple secondary alert withan
                                </div>
                                <div class="alert alert-secondary">
                                    A simple secondary alert withan
                                </div>
                            </div>
                            <input type="hidden" name="meta_tags">
                            <div class="form-group">
                                <label for="meta_tags">META_TAGS</label>
                                <div class="input-group">
                                    <input type="text" class="form-control col-2" id="meta_tags" placeholder="Name">
                                    <input type="text" class="form-control" id="meta_tags" placeholder="Content">
                                    <button type="button" class="btn btn-warning">Добавить</button>
                                </div>
                            </div>
                            @error('meta_tags')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group gap__flex">
                                <div class="alert alert-secondary">
                                    A simple secondary alert withan
                                </div>
                                <div class="alert alert-secondary">
                                    A simple secondary alert withan
                                </div>
                            </div>
                            <input type="hidden" name="og_tags">
                            <div class="form-group">
                                <label for="og_tags">OG_TAGS</label>
                                <div class="input-group">
                                    <input type="text" class="form-control col-2" id="meta_tags" placeholder="Name">
                                    <input type="text" class="form-control" id="meta_tags" placeholder="Content">
                                    <button type="button" class="btn btn-warning">Добавить</button>
                                </div>
                            </div>
                            @error('og_tags')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary">Сохранить</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('scripts')
    <script>

    </script>
@endsection
