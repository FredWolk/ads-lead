

@extends('admin.layouts.admin')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.min.css') }}">
@endsection

@section('content')
    <style>
        .select2-container--default .select2-selection--single{
            height: 38px;
        }
        .select2-container--default .select2-selection--multiple .select2-selection__choice__display{
            color: black;
            padding-left: 10px !important;
        }
        .select2-container--default .select2-dropdown .select2-search__field:focus, .select2-container--default .select2-search--inline .select2-search__field:focus{
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
                    <form method="post" action="{{ route('article.store') }}">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="name">Название статьи</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" placeholder="Название статьи">
                            </div>
                            <div class="form-group">
                                <label for="link">Ссылка на статью</label>
                                <input type="text" name="link" value="{{ old('link') }}" class="form-control" id="link" placeholder="Название статьи">
                            </div>
                            <div class="form-group">
                                <label for="pt_name">Название статьи на португальском</label>
                                <input type="text" name="pt_name" value="{{ old('pt_name') }}" class="form-control" id="pt_name" placeholder="Название статьи">
                            </div>
                            <div class="form-group">
                                <label for="image">Изображение статьи</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input name="image" type="file" class="custom-file-input" id="image">
                                        <label class="custom-file-label" for="image">Выберите изображение статьи</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="views">Просмотры</label>
                                <input type="number" name="views" value="{{ old('views') }}" class="form-control" id="views" placeholder="На пример: 41">
                            </div>
                            <div class="form-group">
                                <label>Выберите автора</label>
                                <select class="form-control select2">
                                    <option value="1">Автор 1</option>
                                    <option value="2">Автор 2</option>
                                    <option value="3">Автор 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="select1">Теги</label>
                                <select name="tags[]" multiple="multiple" class="form-control select1" id="select1">
                                    @if(!empty($filters->vertical))
                                        @foreach(json_decode($filters->vertical, 1) as $i)
                                            <option value="{{ $i }}" selected>{{ $i }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="select2">Контент</label>
                                <select name="contents[]" multiple="multiple" class="form-control select1" id="select2">
                                    @if(!empty($filters->vertical))
                                        @foreach(json_decode($filters->vertical, 1) as $i)
                                            <option value="{{ $i }}" selected>{{ $i }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="select3">Контент на португальском</label>
                                <select name="pt_contents[]" multiple="multiple" class="form-control select1" id="select3">
                                    @if(!empty($filters->vertical))
                                        @foreach(json_decode($filters->vertical, 1) as $i)
                                            <option value="{{ $i }}" selected>{{ $i }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="select4">Для кого</label>
                                <select name="for_whom[]" multiple="multiple" class="form-control select1" id="select4">
                                    @if(!empty($filters->vertical))
                                        @foreach(json_decode($filters->vertical, 1) as $i)
                                            <option value="{{ $i }}" selected>{{ $i }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="select5">Для кого на португальском</label>
                                <select name="pt_for_whom[]" multiple="multiple" class="form-control select1" id="select5">
                                    @if(!empty($filters->vertical))
                                        @foreach(json_decode($filters->vertical, 1) as $i)
                                            <option value="{{ $i }}" selected>{{ $i }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="summernote">Контент статьи</label>
                                <textarea name="main_text" id="summernote"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="summernote2">Контент португальской статьи</label>
                                <textarea name="pt_main_text" id="summernote2"></textarea>
                            </div>








                            <div class="row">
                                <div class="col-sm-6">
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
                                               placeholder="Введите ключевые слова через ';'">
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
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="pt_title">PT TITLE</label>
                                        <input name="pt_title" type="text" class="form-control" id="pt_title"
                                               placeholder="Заголовок страницы">
                                    </div>
                                    @error('pt_title')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="pt_description">PT DESCRIPTION</label>
                                        <input name="pt_description" type="text" class="form-control" id="pt_description"
                                               placeholder="Описание страницы">
                                    </div>
                                    @error('pt_description')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="pt_keywords">PT KEYWORDS</label>
                                        <input name="pt_keywords" type="text" class="form-control" id="pt_keywords"
                                               placeholder="Введите ключевые слова через ';'">
                                    </div>
                                    @error('pt_keywords')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="pt_og_title">PT OG_TITLE</label>
                                        <input name="pt_og_title" type="text" class="form-control" id="pt_og_title"
                                               placeholder="Заголовок страницы">
                                    </div>
                                    @error('pt_og_title')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="pt_og_description">PT OG_DESCRIPTION</label>
                                        <input name="pt_og_description" type="text" class="form-control" id="pt_og_description"
                                               placeholder="Описание страницы">
                                    </div>
                                    @error('pt_og_description')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="pt_og_url">PT OG_URL</label>
                                        <input name="pt_og_url" type="text" class="form-control" id="pt_og_url"
                                               placeholder="Ссылка на страницу">
                                    </div>
                                    @error('pt_og_url')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="pt_og_image">PT OG_IMAGE</label>
                                        <input name="pt_og_image" type="text" class="form-control" id="pt_og_image"
                                               placeholder="Сылка на изображение">
                                    </div>
                                    @error('pt_og_image')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="pt_og_type">PT OG_TYPE</label>
                                        <input name="pt_og_type" type="text" class="form-control" id="pt_og_type"
                                               placeholder="Тип страницы">
                                    </div>
                                    @error('pt_og_type')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div id="pt_meta_block" class="form-group pt_gap__flex"></div>

                                    <input type="hidden" id="pt_meta_tags" name="pt_meta_tags">
                                    <div class="form-group">
                                        <label for="pt_meta_name">PT META_TAGS</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control col-2" id="pt_meta_name" placeholder="Name">
                                            <input type="text" class="form-control" id="pt_meta_content" placeholder="Content">
                                            <button data-type="meta" type="button" id="pt_add_meta"
                                                    class="pt_startFunc btn btn-warning">Добавить
                                            </button>
                                        </div>
                                    </div>
                                    @error('pt_meta_tags')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div id="pt_og_block" class="form-group pt_gap__flex"></div>

                                    <input type="hidden" name="pt_og_tags">
                                    <div class="form-group">
                                        <label for="pt_og_name">PT OG_TAGS</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control col-2" id="pt_og_name" placeholder="Name">
                                            <input type="text" class="form-control" id="pt_og_content" placeholder="Content">
                                            <button data-type="og" type="button" id="pt_add_og"
                                                    class="pt_startFunc btn btn-warning">Добавить
                                            </button>
                                        </div>
                                    </div>
                                    @error('og_tags')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
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
    <script src="{{ asset('assets/admin/plugins/summernote/summernote-bs4.min.js">') }}"></script>
    <script src="{{ asset('assets/admin/js/seo-function.js') }}"></script>

    <script>
        $(function () {
            $('#summernote').summernote();
            $('#summernote2').summernote();
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
    </script>

@endsection
