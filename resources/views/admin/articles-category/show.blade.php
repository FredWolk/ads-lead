@extends('admin.layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-5">Редактирование категории - {{ $article_category['name'] }}</h1>
                        <a class="text-success mr-5" href="{{ route('article-category.edit', $article_category['id']) }}"><i
                                class="fas fa-pen"></i></a>
                        <button form="delete" class="btn text-danger"><i class="fas fa-trash"></i></button>
                        <form id="delete" method="post" action="{{ route('article-category.destroy', $article_category['id']) }}">
                            @csrf
                            @method('delete')
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('article-category.index') }}">Категории</a></li>
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
                            @foreach($article_category->toArray() as $k => $i)
                                <tr>
                                    <td>{{ $k }}</td>
                                    <td>{{ $i }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
