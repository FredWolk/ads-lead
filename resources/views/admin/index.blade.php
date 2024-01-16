@extends('admin.layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Статистика по баннерам</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item active">Баннеры</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <section class="content">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Баннеры</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0" style="display: block;">
                            <table class="table table-striped projects">
                                <thead>
                                <tr>
                                    <th style="width: 1%">
                                        #
                                    </th>
                                    <th style="width: 30%">
                                        Название баннера
                                    </th>
                                    <th style="width: 30%">
                                        Просмотры
                                    </th>
                                    <th style="width: 30%">
                                        Клики
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($banners as $k => $i)
                                    <tr>
                                        <td>
                                            {{ $k + 1 }}
                                        </td>
                                        <td>
                                            <a>
                                                <b>{{ $i['banner'] }}</b>
                                            </a>
                                            <br>
                                            <small>
                                                Создано {{ date('d.m.Y', strtotime($i['created_at'])) }}
                                            </small>
                                        </td>
                                        <td>
                                            {{ $i['views'] }}
                                        </td>
                                        <td>
                                            {{ $i['clicks'] }}
                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
                <section class="content">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Баннеры</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="accordion">
                                @if(!empty($history))
                                    @php($id = 0)
                                    @foreach($history as $k => $h)
                                        @php($id = $id + 1)
                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h4 class="card-title w-100">
                                                    <a class="d-block w-100" data-toggle="collapse" href="#collapse_{{$id}}">
                                                        {{ date('d.m.Y', strtotime($k)) }}
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse_{{$id}}" class="collapse" data-parent="#accordion">
                                                <div class="card-body p-0" style="display: block;">
                                                    <table class="table table-striped projects">
                                                        <thead>
                                                        <tr>
                                                            <th style="width: 1%">
                                                                #
                                                            </th>
                                                            <th style="width: 30%">
                                                                Название баннера
                                                            </th>
                                                            <th style="width: 30%">
                                                                Просмотры
                                                            </th>
                                                            <th style="width: 30%">
                                                                Клики
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($h as $ke => $i)
                                                            <tr>
                                                                <td>
                                                                    {{ $ke + 1 }}
                                                                </td>
                                                                <td>
                                                                    <a>
                                                                        <b>{{ $i['banner'] }}</b>
                                                                    </a>
                                                                    <br>
                                                                    <small>
                                                                        Создано {{ date('d.m.Y', strtotime($i['created_at'])) }}
                                                                    </small>
                                                                </td>
                                                                <td>
                                                                    {{ $i['views'] }}
                                                                </td>
                                                                <td>
                                                                    {{ $i['clicks'] }}
                                                                </td>
                                                            </tr>

                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div>
@endsection
