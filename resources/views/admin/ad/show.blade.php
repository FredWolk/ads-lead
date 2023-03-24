@extends('admin.layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-3">Редактирование рекламы - {{ $ad['name'] }}</h1>
                        <a class="text-success" href="{{ route('ad.edit', $ad['id']) }}"><i
                                class="fas fa-pen"></i></a>
                        <button form="delete" class="btn text-danger"><i class="fas fa-trash"></i></button>
                        <form id="delete" method="post" action="{{ route('ad.destroy', $ad['id']) }}">
                            @csrf
                            @method('delete')
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('ad.index') }}">Рекламы</a></li>
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
                                <td>Название рекламы</td>
                                <td>{{ $ad->name }}</td>
                            </tr>
                            <tr>
                                <td>Просмотры</td>
                                <td>{{ $ad->views }}</td>
                            </tr>
                            <tr>
                                <td>Изображение</td>
                                <td><img loading="lazy" width="150" src="{{ asset('storage/'.$ad->image) }}" alt=""></td>
                            </tr>
                            <tr>
                                <td>Описание</td>
                                <td>
                                    {{ $ad->before_main_text }}
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
