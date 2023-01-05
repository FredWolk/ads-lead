@extends('admin.layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-3">Редактирование баннера - {{ $aside->id }}</h1>
                        <a class="text-success" href="{{ route('aside.edit', $aside->id) }}"><i class="fas fa-pen"></i></a>
                        <button form="delete" class="btn text-danger"><i class="fas fa-trash"></i></button>
                        <form id="delete" method="post" action="{{ route('aside.destroy', $aside->id) }}">
                            @csrf
                            @method('delete')
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('aside.index') }}">Баннер</a></li>
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
                                <td>Тип</td>
                                <td>{{ $aside->type }}</td>
                            </tr>
                            <tr>
                                <td>Файл</td>
                                <td>
                                @if($aside->type == 'image')
                                        <img width="400" src="{{ asset('storage/'.$aside->file) }}" alt="">
                                @else
                                        <video width="500" controls="controls" src="{{ asset('storage/'. $aside->file) }}"></video>
                                @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Статус</td>
                                <td>{{ $aside->status ? 'Активен' : 'Не активен' }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
