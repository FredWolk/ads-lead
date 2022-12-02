@extends('admin.layouts.admin')
@php(
  $pageName = [
    'main' => 'Главная',
    'cpa' => 'Партнерки',
    'ads' => 'Реклама',
    'articles' => 'Статьи',
    'videos' => 'Видео',
    'events' => 'События',
    'forum' => 'Форум',
  ]
)
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">SEO</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                            <li class="breadcrumb-item active">SEO</li>
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
                            <h3 class="card-title">Страницы</h3>
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
                                    <th style="width: 20%">
                                        Название страницы
                                    </th>
                                    <th style="width: 8%" class="text-center">
                                        Видимость
                                    </th>
                                    <th class="text-right" style="width: 40%">
                                        <a href="{{ route('seo.create') }}" class="btn btn-dark btn-sm">Добавить</a>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($seo as $k => $i)
                                <tr>
                                    <td>
                                        {{ $k + 1 }}
                                    </td>
                                    <td>
                                        <a>
                                            {{ $pageName[$i['page']] }}
                                        </a>
                                        <br>
                                        <small>
                                            Создано {{ date('d.m.Y', strtotime($i['created_at'])) }}
                                        </small>
                                    </td>
                                    <td class="project-state">
                                        <span class="badge badge-{{ $i['status'] === 1 ? 'success' : 'danger' }}">{{ $i['status'] === 1 ? 'Активна' : 'Не активна' }}</span>
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="{{ route('seo.show', $i['id']) }}">
                                            <i class="fas fa-folder">
                                            </i>
                                            Просмотр
                                        </a>
                                        <a class="btn btn-info btn-sm" href="{{ route('seo.edit', $i['id']) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Редактировать
                                        </a>
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
