@extends('admin.layouts.admin')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактировать категорию - {{ $category_shop->name }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('shop.index') }}">Категории магазина</a></li>
                            <li class="breadcrumb-item active">Редактировать категорию</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Заполните все поля формы</h3>
                    </div>
                    <form enctype="multipart/form-data" method="post" action="{{ route('category-shop.update', $category_shop->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Название магазина</label>
                                <input type="text" name="name" value="{{ $category_shop->name }}" class="form-control" id="name"
                                       placeholder="Название магазина">
                            </div>
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="description">Описание категории</label>
                                <textarea class="form-control" rows="3" id="description" name="description"
                                          placeholder="It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.The point of using Lorem Ipsum is that it has a more-or-less normal distribution… ...">{{ $category_shop->description }}</textarea>
                            </div>
                            @error('description')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="card-footer">
                                <button class="btn btn-primary">Сохранить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('scripts')
@endsection
