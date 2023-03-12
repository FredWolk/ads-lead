@extends('admin.layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Комментарии к статьям</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                            <li class="breadcrumb-item active">Комментарии к статьям</li>
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
                            <h3 class="card-title">Комментации</h3>
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
                                    <th style="width: 50%">
                                        Текст комментария
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($comments as $k => $i)
                                    <tr>
                                        <td>
                                            {{ $k + 1 }}
                                        </td>
                                        <td>
                                            <a>
                                                <b>{{ $i['text'] }}</b>
                                            </a>
                                            <br>
                                            <small>
                                                Создано {{ date('d.m.Y', strtotime($i['created_at'])) }}
                                            </small>
                                        </td>
                                        <td class="project-actions text-right d-flex justify-content-end">
                                            <button form="confirm_{{$k}}" class="btn btn-info btn-sm d-inline mr-2">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Подтвердить
                                            </button>
                                            <form id="confirm_{{$k}}" method="post" action="{{route('comments.adv.success', $i['id']) }}">
                                                @method('put')
                                                @csrf
                                            </form>
                                            <button form="delete_{{$k}}" class="btn btn-danger btn-sm d-inline">
                                                <i class="fas fa-trash">
                                                </i>
                                                Удалить
                                            </button>
                                            <form id="delete_{{$k}}" method="post" action="{{route('comments.adv.delete', $i['id']) }}">
                                                @method('delete')
                                                @csrf
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div>
@endsection
