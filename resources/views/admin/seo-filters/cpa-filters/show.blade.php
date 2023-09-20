@extends('admin.layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-3">Редактирование фильтра - {{ $cpa_seo_filter['filter_name'] }}</h1>
                        <a class="text-success" href="{{ route('cpa-seo-filter.edit', $cpa_seo_filter['id']) }}"><i
                                class="fas fa-pen"></i></a>
                        <button form="delete" class="btn text-danger"><i class="fas fa-trash"></i></button>
                        <form id="delete" method="post"
                              action="{{ route('cpa-seo-filter.destroy', $cpa_seo_filter['id']) }}">
                            @csrf
                            @method('delete')
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('cpa-seo-filter.index') }}">CPA фильтры</a>
                            </li>
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
                                <td>Название фильтра</td>
                                <td>{{ $cpa_seo_filter->filter_name }}</td>
                            </tr>
                            <tr>
                                <td>Сео текст</td>
                                <td>{{ $cpa_seo_filter->seo_text }}</td>
                            </tr>
                            <tr>
                                <td>Тайтл</td>
                                <td>
                                    {{ $cpa_seo_filter->title }}
                                </td>
                            </tr>
                            <tr>
                                <td>Описание</td>
                                <td>
                                    {{ $cpa_seo_filter->description }}
                                </td>
                            </tr>
                            <tr>
                                <td>Ключевые слова</td>
                                <td>
                                    {{ $cpa_seo_filter->keywords }}
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
