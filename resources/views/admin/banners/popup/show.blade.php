@extends('admin.layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-3">Редактирование попапа - {{ $popup->title }}</h1>
                        <a class="text-success" href="{{ route('popup.edit', $popup->id) }}"><i class="fas fa-pen"></i></a>
                        <button form="delete" class="btn text-danger"><i class="fas fa-trash"></i></button>
                        <form id="delete" method="post" action="{{ route('popup.destroy', $popup->id) }}">
                            @csrf
                            @method('delete')
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('popup.index') }}">Попап</a></li>
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
                                <td>Текст кнопки</td>
                                <td>{{ $popup->title }}</td>
                            </tr>
                            <tr>
                                <td>Ссылка</td>
                                <td>{{ $popup->link }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
