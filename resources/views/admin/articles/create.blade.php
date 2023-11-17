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
                        <h1 class="m-0">Добавить статью</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('article.index') }}">Статьи</a></li>
                            <li class="breadcrumb-item active">Добавить статью</li>
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
                    <form enctype="multipart/form-data" method="post" action="{{ route('article.store') }}">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="active">Статус публикации</label>
                                <select name="active" class="form-control" id="active">
                                    <option {{ old('active') == true ? 'selected' : '' }} value="1">Опубликовать</option>
                                    <option {{ old('active') == false ? 'selected' : '' }} value="0">Отложить</option>
                                </select>
                            </div>
                            @error('active')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="name">Название статьи</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name"
                                       placeholder="Название статьи">
                            </div>
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="link">Ссылка на статью</label>
                                <input type="text" name="link" value="{{ old('link') }}" class="form-control" id="link"
                                       placeholder="Название статьи">
                            </div>
                            @error('link')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="type">Тип статьи</label>
                                <select name="type" id="type" class="form-control">
                                    <option value="article">Статья</option>
                                    <option value="base">База знаний</option>
                                </select>
                            </div>
                            @error('type')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror


                            <div class="form-group">
                                <label for="pageSelect">Категория</label>
                                <select name="category" id="pageSelect" class="form-control">
                                    <option
                                        {{ old('category') === 'facebook' ? 'selected' : ''}} value="facebook">
                                        Facebook
                                    </option>
                                    <option
                                        {{ old('category') === 'google' ? 'selected' : ''}} value="google">
                                        Google
                                    </option>
                                    <option
                                        {{ old('category') === 'pop-up' ? 'selected' : ''}} value="pop-up">
                                        Pop-up
                                    </option>
                                    <option
                                        {{ old('category') === 'guides' ? 'selected' : ''}} value="guides">
                                        Guides
                                    </option>
                                    <option
                                        {{ old('category') === 'wiki' ? 'selected' : ''}} value="wiki">
                                        Wiki
                                    </option>
                                    <option
                                        {{ old('category') === 'creatives' ? 'selected' : ''}} value="creatives">
                                        Creatives
                                    </option>
                                </select>
                            </div>
                            @error('category')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="image">Изображение статьи</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input value="{{ old('image') }}" name="image" type="file"
                                               class="custom-file-input" id="image">
                                        <label class="custom-file-label" for="image">Выберите изображение статьи</label>
                                    </div>
                                </div>
                            </div>
                            @error('image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="prev_text">Описание статьи</label>
                                <textarea class="form-control" rows="3" id="prev_text" name="prev_text"
                                          placeholder="It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.The point of using Lorem Ipsum is that it has a more-or-less normal distribution… ...">{{ old('prev_text') }}</textarea>
                            </div>
                            @error('prev_text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="views">Просмотры</label>
                                <input type="number" min="0" name="views"
                                       value="{{ !empty(old('views')) ? old('views') : 0 }}" class="form-control"
                                       id="views" placeholder="На пример: 41">
                            </div>
                            @error('views')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label>Выберите автора</label>
                                <select name="author_id" class="form-control select2">
                                    @foreach($authors as $i)
                                        <option value="{{ $i['id'] }}">{{ $i['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('author_id')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="select1">Теги</label>
                                <select name="tags[]" multiple="multiple" class="form-control select1" id="select1">
                                    @if(!empty(old('tags')))
                                        @foreach(old('tags') as $i)
                                            <option value="{{ $i }}" selected>{{ $i }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            @error('tags')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="select2">Содержание</label>
                                <select name="contents[]" multiple="multiple" class="form-control select1" id="select2">
                                    @if(!empty(old('contents')))
                                        @foreach(old('contents') as $i)
                                            <option value="{{ $i }}" selected>{{ $i }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            @error('contents')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="select4">Для кого</label>
                                <select name="for_whom[]" multiple="multiple" class="form-control select1" id="select4">
                                    @if(!empty(old('for_whom')))
                                        @foreach(old('for_whom') as $i)
                                            <option value="{{ $i }}" selected>{{ $i }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            @error('for_whom')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="summernote">Контент статьи</label>
                                <textarea class="summernote" name="main_text"
                                          id="summernote">{{ old('main_text') }}</textarea>
                            </div>
                            @error('main_text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <button class="btn btn-warning" type="button" id="auto_text">Автозаполнение</button>

                            <div class="row">
                                <div class="form-group">
                                    <label for="title">TITLE</label>
                                    <input value="{{ old('title') }}" name="title" type="text" class="form-control"
                                           id="title"
                                           placeholder="Заголовок страницы">
                                </div>
                                @error('title')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="description">DESCRIPTION</label>
                                    <input value="{{ old('description') }}" name="description" type="text"
                                           class="form-control" id="description"
                                           placeholder="Описание страницы">
                                </div>
                                @error('description')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="keywords">KEYWORDS</label>
                                    <input value="{{ old('og_url') }}" name="keywords" type="text"
                                           class="form-control" id="keywords"
                                           placeholder="Введите ключевые слова через ','">
                                </div>
                                @error('keywords')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="og_title">OG_TITLE</label>
                                    <input value="{{ old('og_url') }}" name="og_title" type="text"
                                           class="form-control" id="og_title"
                                           placeholder="Заголовок страницы">
                                </div>
                                @error('og_title')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="og_description">OG_DESCRIPTION</label>
                                    <input value="{{ old('og_url') }}" name="og_description" type="text"
                                           class="form-control" id="og_description"
                                           placeholder="Описание страницы">
                                </div>
                                @error('og_description')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="og_url">OG_URL</label>
                                    <input value="{{ old('og_url') }}" name="og_url" type="text"
                                           class="form-control" id="og_url"
                                           placeholder="Ссылка на страницу">
                                </div>
                                @error('og_url')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="og_image">OG_IMAGE</label>
                                    <input value="{{ old('og_image') }}" name="og_image" type="text"
                                           class="form-control" id="og_image"
                                           placeholder="Сылка на изображение">
                                </div>
                                @error('og_image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="og_type">OG_TYPE</label>
                                    <input value="{{ old('og_type') }}" name="og_type" type="text"
                                           class="form-control" id="og_type"
                                           placeholder="Тип страницы">
                                </div>
                                @error('og_type')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div id="meta_block" class="form-group gap__flex"></div>
                                <input value="{{ old('meta_tags') }}" type="hidden" id="meta_tags" name="meta_tags">
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
                                <input value="{{ old('og_tags') }}" type="hidden" name="og_tags">
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
                            </div>
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
            CKEDITOR.replace('summernote');
            $('#auto_text').on('click', function () {
                let iframe = $('.form-group .cke_wysiwyg_frame')[0].contentDocument.all
                for(var el of iframe){
                    if (el.nodeName === 'H2'){
                        var opt = document.createElement('option');
                        opt.value = el.textContent.toLowerCase();
                        opt.innerHTML = el.textContent.toLowerCase();
                        opt.setAttribute('data-select2-tag', true)
                        opt.setAttribute('selected', true)
                        document.querySelector('#select2').appendChild(opt)
                    }
                }
                let arr = ['webmasters', 'affiliates'];
                arr.map((e) => {
                    console.log(e);
                    var val = document.createElement('option');
                    val.value = e;
                    val.innerHTML = e;
                    val.setAttribute('data-select4-tag', true)
                    val.setAttribute('selected', true)
                    document.querySelector('#select4').appendChild(val)
                })
            })
            $('.select2').select2()
            $('#select1').select2({
                tags: true,
            })
            $('#select2').select2({
                tags: true,
            })
            $('#select3').select2({
                tags: true,
            })
            $('#select4').select2({
                tags: true,
            })
            $('#select5').select2({
                tags: true,
            })
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
