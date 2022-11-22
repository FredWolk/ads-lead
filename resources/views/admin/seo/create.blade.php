@php
  use App\Models\Seo;
@endphp

@extends('admin.layouts.admin')

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
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="pageSelect">Страница</label>
                                <select id="pageSelect" class="form-control">
                                    <option value="{{ Seo::MAIN_PAGE }}">Главная</option>
                                    <option value="{{ Seo::CPA_PAGE }}">Партнерки</option>
                                    <option value="{{ Seo::ADS_PAGE }}">Рекламы</option>
                                    <option value="{{ Seo::ARTICLES_PAGE }}">Статьи</option>
                                    <option value="{{ Seo::VIDEOS_PAGE }}">Видео</option>
                                    <option value="{{ Seo::EVENTS_PAGE }}">События</option>
                                    <option value="{{ Seo::FORUM_PAGE }}">Форум</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">TITLE</label>
                                <input type="text" class="form-control" id="title" placeholder="Заголовок страницы">
                            </div>
                            <div class="form-group">
                                <label for="description">DESCRIPTION</label>
                                <input type="text" class="form-control" id="description" placeholder="Описание страницы">
                            </div>
                            <div class="form-group">
                                <label for="keywords">KEYWORDS</label>
                                <input type="text" class="form-control" id="keywords" placeholder="Ключевые слова страницы">
                            </div>
                            <div class="form-group">
                                <label for="meta_tags">META_TAGS</label>
                                <input type="text" class="form-control" id="meta_tags" placeholder="Ключевые слова страницы">
                            </div>
                            <div class="form-group">
                                <label for="og_tags">OG_TAGS</label>
                                <input type="text" class="form-control" id="og_tags" placeholder="Ключевые слова страницы">
                            </div>

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

@endsection
