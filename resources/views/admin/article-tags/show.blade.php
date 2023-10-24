@extends('admin.layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-5">Хештег - {{ $article_tag['tag_name'] }}</h1>
                        <a class="text-success mr-5" href="{{ route('article-tags.edit', $article_tag['id']) }}"><i
                                class="fas fa-pen"></i></a>
                        <button form="delete" class="btn text-danger"><i class="fas fa-trash"></i></button>
                        <form id="delete" method="post" action="{{ route('article-tags.destroy', $article_tag['id']) }}">
                            @csrf
                            @method('delete')
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('article-tags.index') }}">Хештеги</a></li>
                            <li class="breadcrumb-item active">Редактирование</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Параметр</th>
                                <th>Значение параметра</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Хештег</td>
                                <td>{{ $article_tag['tag_name'] }}</td>
                            </tr>
                            <tr>
                                <td>Ссылка</td>
                                <td>{{ $article_tag['link'] }}</td>
                            </tr>
                            <tr>
                                <td>Title</td>
                                <td>{{ $article_tag['title'] }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
