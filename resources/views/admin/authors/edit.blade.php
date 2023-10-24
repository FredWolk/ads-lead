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

                            <div class="form-group">
                                <label for="link">Ссылка на автора</label>
                                <input type="text" name="link" value="{{ $author->link }}" class="form-control" id="link"
                                       placeholder="Имя автора">
                            </div>
                            @error('link')
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

                            <div class="form-group">
                                <label for="summernote">Сео текст</label>
                                <textarea class="summernote" name="seo_text"
                                          id="summernote">{{ $author->seo_text }}</textarea>
                            </div>
                            @error('seo_text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="title">TITLE</label>
                                <input value="{{ $author->title }}" name="title" type="text"
                                       class="form-control" id="title"
                                       placeholder="Заголовок страницы">
                            </div>
                            @error('title')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="description">DESCRIPTION</label>
                                <input value="{{ $author->description }}" name="description" type="text"
                                       class="form-control" id="description"
                                       placeholder="Описание страницы">
                            </div>
                            @error('description')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="keywords">KEYWORDS</label>
                                <input value="{{ $author->keywords }}" name="keywords" type="text"
                                       class="form-control" id="keywords"
                                       placeholder="Введите ключевые слова через ','">
                            </div>
                            @error('keywords')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="og_title">OG_TITLE</label>
                                <input value="{{ $author->og_title }}" name="og_title" type="text"
                                       class="form-control" id="og_title"
                                       placeholder="Заголовок страницы">
                            </div>
                            @error('og_title')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="og_description">OG_DESCRIPTION</label>
                                <input value="{{ $author->og_description }}" name="og_description" type="text"
                                       class="form-control" id="og_description"
                                       placeholder="Описание страницы">
                            </div>
                            @error('og_description')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="og_url">OG_URL</label>
                                <input value="{{ $author->og_url }}" name="og_url" type="text"
                                       class="form-control" id="og_url"
                                       placeholder="Ссылка на страницу">
                            </div>
                            @error('og_url')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="og_image">OG_IMAGE</label>
                                <input value="{{ $author->og_image }}" name="og_image" type="text"
                                       class="form-control" id="og_image"
                                       placeholder="Сылка на изображение">
                            </div>
                            @error('og_image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="og_type">OG_TYPE</label>
                                <input value="{{ $author->og_type }}" name="og_type" type="text"
                                       class="form-control" id="og_type"
                                       placeholder="Тип страницы">
                            </div>
                            @error('og_type')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div id="meta_block" class="form-group gap__flex"></div>
                            <input value="{{ $author->meta_tags }}" type="hidden" id="meta_tags"
                                   name="meta_tags">
                            <div class="form-group">
                                <label for="meta_name">META_TAGS</label>
                                <div class="input-group">
                                    <input type="text" class="form-control col-2" id="meta_name"
                                           placeholder="Name">
                                    <input type="text" class="form-control" id="meta_content"
                                           placeholder="Content">
                                    <button data-lang="" data-type="meta" type="button" id="add_meta"
                                            class="startFunc btn btn-warning">Добавить
                                    </button>
                                </div>
                            </div>
                            @error('meta_tags')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div id="og_block" class="form-group gap__flex"></div>
                            <input value="{{ $author->og_tags }}" type="hidden" name="og_tags">
                            <div class="form-group">
                                <label for="og_name">OG_TAGS</label>
                                <div class="input-group">
                                    <input type="text" class="form-control col-2" id="og_name"
                                           placeholder="Name">
                                    <input type="text" class="form-control" id="og_content"
                                           placeholder="Content">
                                    <button data-lang="" data-type="og" type="button" id="add_og"
                                            class="startFunc btn btn-warning">Добавить
                                    </button>
                                </div>
                            </div>
                            @error('og_tags')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror


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
    <script src="{{ asset('assets/admin/js/seo-function.js') }}"></script>

    <script>
        $(function () {
            CKEDITOR.replace('summernote');
            bsCustomFileInput.init();
        });
        $('#name').on('input', function () {
            var j = createLink($(this).val());
            j = j.replace(/ /g, '-');
            j = j.replace(/,-/g, '-');
            j = j.replace(/\\/g, '-');
            j = j.replace(/\//g, '-');
            $('#link').val(j.toLowerCase());
        })
    </script>

@endsection
