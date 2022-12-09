@extends('admin.layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-3">Редактирование партнерки - {{ $cpa['name'] }}</h1>
                        <a class="text-success" href="{{ route('cpa.edit', $cpa['id']) }}"><i
                                class="fas fa-pen"></i></a>
                        <button form="delete" class="btn text-danger"><i class="fas fa-trash"></i></button>
                        <form id="delete" method="post" action="{{ route('cpa.destroy', $cpa['id']) }}">
                            @csrf
                            @method('delete')
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('cpa.index') }}">Партнерки</a></li>
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
                                <td>Название партнерки</td>
                                <td>{{ $cpa->name }}</td>
                            </tr>
                            <tr>
                                <td>Просмотры</td>
                                <td>{{ $cpa->views }}</td>
                            </tr>
                            <tr>
                                <td>Изображение</td>
                                <td><img width="150" src="{{ asset('storage/'.$cpa->image) }}" alt=""></td>
                            </tr>
                            <tr>
                                <td>Описание</td>
                                <td>
                                    {{ $cpa->before_main_text }}
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
