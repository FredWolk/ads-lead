@extends('admin.layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-3">Редактирование статьи - {{ $article['name'] }}</h1>
                        <a class="text-success" href="{{ route('article.edit', $article['id']) }}"><i
                                class="fas fa-pen"></i></a>
                        <button form="delete" class="btn text-danger"><i class="fas fa-trash"></i></button>
                        <form id="delete" method="post" action="{{ route('article.destroy', $article['id']) }}">
                            @csrf
                            @method('delete')
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('article.index') }}">Статьи</a></li>
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
                                <td>Название статьи</td>
                                <td>{{ $article->name }}</td>
                            </tr>
                            <tr>
                                <td>Просмотры</td>
                                <td>{{ $article->views }}</td>
                            </tr>
                            <tr>
                                <td>Тип статьи</td>
                                <td>{{ $article->type }}</td>
                            </tr>
                            <tr>
                                <td>Изображение</td>
                                <td><img width="150" src="{{ asset('storage/'.$article->image) }}" alt=""></td>
                            </tr>
                            <tr>
                                <td>Теги</td>
                                <td>
                                    @if(!empty($article->tags))
                                        @foreach($article->tags as $i)
                                            {{ $i }};
                                        @endforeach
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Содержание</td>
                                <td>
                                    @if(!empty($article->contents))
                                        @foreach($article->contents as $i)
                                            {{ $i }};
                                        @endforeach
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Для кого</td>
                                <td>
                                    @if(!empty($article->for_whom))
                                        @foreach($article->for_whom as $i)
                                            {{ $i }};
                                        @endforeach
                                    @endif
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
