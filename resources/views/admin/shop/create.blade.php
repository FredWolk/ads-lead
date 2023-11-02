@extends('admin.layouts.admin')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/select2.min.css') }}">
@endsection

@section('content')
    <style>
        .select2-container--default .select2-selection--single {
            height: 38px;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__display {
            color: black;
            padding-left: 10px !important;
        }

        .select2-container--default .select2-dropdown .select2-search__field:focus, .select2-container--default .select2-search--inline .select2-search__field:focus {
            border: none !important;
        }
    </style>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавить магазин</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('shop.index') }}">Магазины</a></li>
                            <li class="breadcrumb-item active">Добавить магазин</li>
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
                    <form enctype="multipart/form-data" method="post" action="{{ route('shop.store') }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Название магазина</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name"
                                       placeholder="Название рекламы">
                            </div>
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="image">Логотип магазина</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input value="{{ old('image') }}" name="image" type="file"
                                               class="custom-file-input" id="image">
                                        <label class="custom-file-label" for="image">Выберите логотип магазина</label>
                                    </div>
                                </div>
                            </div>
                            @error('image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="row">
                                <div class="form-group col-4">
                                    <label for="category_id">Категория магазина</label>
                                    <select name="category_id" class="form-control" id="category_id">
                                        @foreach($category as $cat)
                                        <option {{ old('category_id') == true ? 'selected' : '' }} value="{{ $cat->id }}">
                                            {{ $cat->name }}
                                        </option>

                                        @endforeach
                                    </select>
                                </div>
                                @error('category_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="link">Веб сайт магазина</label>
                                <input type="url" name="link" value="{{ old('link') }}" class="form-control"
                                       id="link" placeholder="https://google.com">
                            </div>
                            @error('link')
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
    <script src="{{ asset('assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/seo-function.js') }}"></script>

    <script>
        $(function () {
            bsCustomFileInput.init();
        });
    </script>

@endsection
