@extends('admin.layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $trade['title'] }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item active">Сообщения</li>
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
                            <h3 class="card-title">Сообщения</h3>
                            <div class="card-tools">
                                <form method="post" action="{{ route('complaint.delete', $trade['id']) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">
                                        Удалить тред
                                    </button>
                                </form>
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
                                        Сообщение
                                    </th>
                                    <th style="width: 30%">
                                        ID юзера
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($messages as $k => $i)
                                    <tr>
                                        <td>
                                            {{ $k + 1 }}
                                        </td>
                                        <td>
                                            <a>
                                                <b>{{ $i['message'] }}</b>
                                            </a>
                                        </td>
                                        <td>
                                            {{ $i['user_id'] }}
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
