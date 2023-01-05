@extends('admin.layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-3">Редактирование баннера - {{ $top->id }}</h1>
                        <a class="text-success" href="{{ route('top.edit', $top->id) }}"><i class="fas fa-pen"></i></a>
                        <button form="delete" class="btn text-danger"><i class="fas fa-trash"></i></button>
                        <form id="delete" method="post" action="{{ route('top.destroy', $top->id) }}">
                            @csrf
                            @method('delete')
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('top.index') }}">Баннер</a></li>
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
                                <td>{{ $top->type }}</td>
                            </tr>
                            <tr>
                                <td>Файл</td>
                                <td>
                                @if($top->type == 'image')
                                        <img width="400" src="{{ asset('storage/'.$top->file) }}" alt="">
                                @else
                                        <video width="500" autoplay controls="controls" src="{{ asset('storage/'. $top->file) }}"></video>
                                @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Статус</td>
                                <td>{{ $top->status ? 'Активен' : 'Не активен' }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
