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
                        <h1 class="m-0">Редактировать вакансию - {{ $vacancy->name }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('vacancies.index') }}">Вакансии</a></li>
                            <li class="breadcrumb-item active">Редактировать вакансию</li>
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
                    <form enctype="multipart/form-data" method="post" action="{{ route('vacancies.update', $vacancy->id) }}">
                        @csrf
                        @method('patch')

                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-4">
                                    <label for="is_top">ТОП</label>
                                    <select name="is_top" class="form-control" id="is_top">
                                        <option {{ $vacancy->is_top == true ? 'selected' : '' }} value="1">Да</option>
                                        <option {{ $vacancy->is_top == false ? 'selected' : '' }} value="0">Нет</option>
                                    </select>
                                </div>
                                @error('is_top')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="name">Название вакансии</label>
                                <input type="text" name="name" value="{{ $vacancy->name }}" class="form-control" id="name"
                                       placeholder="Название вакансии">
                            </div>
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="link">Ссылка на вакансию</label>
                                <input type="text" name="link" value="{{ $vacancy->link }}" class="form-control" id="link"
                                       placeholder="Название вакансии">
                            </div>
                            @error('link')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="firma">Фирма</label>
                                <input type="text" name="firma" value="{{ $vacancy->firma }}" class="form-control" id="firma"
                                       placeholder="Adlead PRO">
                            </div>
                            @error('firma')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="salary">Зарплата</label>
                                <input type="text" name="salary" value="{{ $vacancy->salary }}" class="form-control" id="salary"
                                       placeholder="2000">
                            </div>
                            @error('salary')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="location">Локация</label>
                                <input type="text" name="location" value="{{ $vacancy->location }}" class="form-control" id="location"
                                       placeholder="All world">
                            </div>
                            @error('location')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="summernote2">Контент вакансии</label>
                                <textarea class="summernote" name="text"
                                          id="summernote2">{{ $vacancy->text }}</textarea>
                            </div>
                            @error('text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="card card-success p-3">
                                <div class="card-header">
                                    <h3 class="card-title">Соц. сети и отзыв редакции</h3>
                                </div>

                                <div class="form-group">
                                    <label for="e_mail">Почта</label>
                                    <input type="email" name="e_mail" value="{{ $vacancy->e_mail }}"
                                           class="form-control"
                                           id="e_mail" placeholder="https://e_mail.com">
                                </div>
                                @error('e_mail')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="linkedin">Линкедин</label>
                                    <input type="text" name="linkedin" value="{{ $vacancy->linkedin }}" class="form-control"
                                           id="linkedin" placeholder="https://linkedin.com">
                                </div>
                                @error('linkedin')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="telegram">Телеграм</label>
                                    <input type="text" name="telegram" value="{{ $vacancy->telegram }}" class="form-control"
                                           id="telegram" placeholder="https://telegram.com">
                                </div>
                                @error('telegram')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="title">TITLE</label>
                                <input value="{{ $vacancy->title }}" name="title" type="text" class="form-control"
                                       id="title"
                                       placeholder="Заголовок страницы">
                            </div>
                            @error('title')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="description">DESCRIPTION</label>
                                <input value="{{ $vacancy->description }}" name="description" type="text"
                                       class="form-control" id="description"
                                       placeholder="Описание страницы">
                            </div>
                            @error('description')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="keywords">KEYWORDS</label>
                                <input value="{{ $vacancy->og_url }}" name="keywords" type="text"
                                       class="form-control" id="keywords"
                                       placeholder="Введите ключевые слова через ','">
                            </div>
                            @error('keywords')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="og_title">OG_TITLE</label>
                                <input value="{{ $vacancy->og_url }}" name="og_title" type="text"
                                       class="form-control" id="og_title"
                                       placeholder="Заголовок страницы">
                            </div>
                            @error('og_title')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="og_description">OG_DESCRIPTION</label>
                                <input value="{{ $vacancy->og_url }}" name="og_description" type="text"
                                       class="form-control" id="og_description"
                                       placeholder="Описание страницы">
                            </div>
                            @error('og_description')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="og_url">OG_URL</label>
                                <input value="{{ $vacancy->og_url }}" name="og_url" type="text"
                                       class="form-control" id="og_url"
                                       placeholder="Ссылка на страницу">
                            </div>
                            @error('og_url')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="og_image">OG_IMAGE</label>
                                <input value="{{ $vacancy->og_image }}" name="og_image" type="text"
                                       class="form-control" id="og_image"
                                       placeholder="Сылка на изображение">
                            </div>
                            @error('og_image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="og_type">OG_TYPE</label>
                                <input value="{{ $vacancy->og_type }}" name="og_type" type="text"
                                       class="form-control" id="og_type"
                                       placeholder="Тип страницы">
                            </div>
                            @error('og_type')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div id="meta_block" class="form-group gap__flex"></div>
                            <input value="{{ $vacancy->meta_tags }}" type="hidden" id="meta_tags" name="meta_tags">
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
                            <input value="{{ $vacancy->og_tags }}" type="hidden" name="og_tags">
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
            CKEDITOR.replace('summernote2');
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
