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
                        <h1 class="m-0">Добавить категорию</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('article-category.index') }}">Категории</a></li>
                            <li class="breadcrumb-item active">Добавить категорию</li>
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
                    <form method="post" action="{{ route('article-category.store') }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="pageSelect">Название категории</label>
                                <select name="name" id="pageSelect" class="form-control">
                                    <option
                                        {{ old('page') === 'facebook' ? 'selected' : ''}} value="facebook">
                                        Facebook
                                    </option>
                                    <option
                                        {{ old('page') === 'google' ? 'selected' : ''}} value="google">
                                        Google
                                    </option>
                                    <option
                                        {{ old('page') === 'pop-up' ? 'selected' : ''}} value="pop-up">
                                        Pop-up
                                    </option>
                                    <option
                                        {{ old('page') === 'guides' ? 'selected' : ''}} value="guides">
                                        Guides
                                    </option>
                                    <option
                                        {{ old('page') === 'wiki' ? 'selected' : ''}} value="wiki">
                                        Wiki
                                    </option>
                                    <option
                                        {{ old('page') === 'creatives' ? 'selected' : ''}} value="creatives">
                                        Creatives
                                    </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="summernote">Сео текст</label>
                                <textarea class="form-control summernote" rows="3" id="summernote" name="seo_text"
                                          placeholder="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellen.">{{ old('seo_text') }}</textarea>
                            </div>
                            @error('seo_text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="title">TITLE</label>
                                <input name="title" type="text" class="form-control" id="title"
                                       placeholder="Заголовок страницы">
                            </div>
                            @error('title')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="description">DESCRIPTION</label>
                                <input name="description" type="text" class="form-control" id="description"
                                       placeholder="Описание страницы">
                            </div>
                            @error('description')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="keywords">KEYWORDS</label>
                                <input name="keywords" type="text" class="form-control" id="keywords"
                                       placeholder="Введите ключевые слова через ','">
                            </div>
                            @error('keywords')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="og_title">OG_TITLE</label>
                                <input name="og_title" type="text" class="form-control" id="og_title"
                                       placeholder="Заголовок страницы">
                            </div>
                            @error('og_title')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="og_description">OG_DESCRIPTION</label>
                                <input name="og_description" type="text" class="form-control" id="og_description"
                                       placeholder="Описание страницы">
                            </div>
                            @error('og_description')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="og_url">OG_URL</label>
                                <input name="og_url" type="text" class="form-control" id="og_url"
                                       placeholder="Ссылка на страницу">
                            </div>
                            @error('og_url')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="og_image">OG_IMAGE</label>
                                <input name="og_image" type="text" class="form-control" id="og_image"
                                       placeholder="Сылка на изображение">
                            </div>
                            @error('og_image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="og_type">OG_TYPE</label>
                                <input name="og_type" type="text" class="form-control" id="og_type"
                                       placeholder="Тип страницы">
                            </div>
                            @error('og_type')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div id="meta_block" class="form-group gap__flex"></div>
                            <input type="hidden" id="meta_tags" name="meta_tags">
                            <div class="form-group">
                                <label for="meta_name">META_TAGS</label>
                                <div class="input-group">
                                    <input type="text" class="form-control col-2" id="meta_name" placeholder="Name">
                                    <input type="text" class="form-control" id="meta_content" placeholder="Content">
                                    <button data-lang="" data-type="meta" type="button" id="add_meta"
                                            class="startFunc btn btn-warning">Добавить
                                    </button>
                                </div>
                            </div>
                            @error('meta_tags')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div id="og_block" class="form-group gap__flex"></div>
                            <input type="hidden" name="og_tags">
                            <div class="form-group">
                                <label for="og_name">OG_TAGS</label>
                                <div class="input-group">
                                    <input type="text" class="form-control col-2" id="og_name" placeholder="Name">
                                    <input type="text" class="form-control" id="og_content" placeholder="Content">
                                    <button data-lang="" data-type="og" type="button" id="add_og"
                                            class="startFunc btn btn-warning">Добавить
                                    </button>
                                </div>
                            </div>
                            @error('og_tags')
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
    <script src="{{ asset('assets/admin/js/seo-function.js') }}"></script>
    <script>
        $(function () {
            CKEDITOR.replace('summernote');
        })
    </script>
@endsection
