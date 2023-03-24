@extends('admin.layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование автора - {{ $author->name }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('author.index') }}">Авторы</a></li>
                            <li class="breadcrumb-item active">Изменить автора</li>
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
                    <form enctype="multipart/form-data" method="post"
                          action="{{ route('author.update', $author->id) }}">
                        @csrf
                        @method('patch')
                        <div class="card-body">

                            <div class="form-group">
                                <label for="name">Имя автора</label>
                                <input type="text" name="name" value="{{ $author->name }}" class="form-control"
                                       id="name" placeholder="Имя автора">
                            </div>
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <img loading="lazy" width="150" src="{{ asset('storage/'.$author->photo) }}" alt="">
                            <div class="form-group">
                                <label for="photo">Фото автора</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input value="{{ $author->photo }}" name="photo" type="file"
                                               class="custom-file-input" id="photo">
                                        <label class="custom-file-label" for="photo">Выберите фото автора</label>
                                    </div>
                                </div>
                            </div>
                            @error('image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary">Сохранить</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

    <script>
        $(function () {
            bsCustomFileInput.init();
        });
    </script>

@endsection
