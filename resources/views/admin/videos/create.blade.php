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
                        <h1 class="m-0">Добавить видео</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('video.index') }}">Видео</a></li>
                            <li class="breadcrumb-item active">Добавить видео</li>
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
                    <form enctype="multipart/form-data" method="post" action="{{ route('video.store') }}">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="name">Название видео</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name"
                                       placeholder="Название видео">
                            </div>
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="link">Ссылка на событие</label>
                                <input type="text" name="link" value="{{ old('link') }}" class="form-control" id="link">
                            </div>
                            @error('link')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="image">Изображение видео</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input value="{{ old('image') }}" name="image" type="file"
                                               class="custom-file-input" id="image">
                                        <label class="custom-file-label" for="image">Выберите изображение
                                            видео</label>
                                    </div>
                                </div>
                            </div>
                            @error('image')
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
                                <label for="video">Вставьте ссылку с ютуба</label>
                                <input type="text" name="video" value="{{ old('video') }}" class="form-control"
                                       id="video" placeholder="https://www.youtube.com/watch?v=0MLvEgHZlUQ">
                            </div>
                            @error('video')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="summernote2">Контент под видео</label>
                                <textarea class="summernote" name="content"
                                          id="summernote2">{{ old('content') }}</textarea>
                            </div>
                            @error('content')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

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
            $('#video').on('paste', function () {
                setTimeout(() => {
                    let link = new URL($(this).val());
                    $(this).val(link.searchParams.get('v'));
                }, 1)
            });
            $('.summernote').summernote({
                height: 300,
                maxHeight: 500,
                toolbar: [
                    ['insert', ['picture', 'link', 'video', 'table', 'hr']],
                    ['fontsize', ['fontname', 'fontsize', 'fontsizeunit', 'color', 'forecolor', 'backcolor', 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
                    ['paragraph', ['style', 'ol', 'ul', 'paragraph', 'height']],
                    ['misc', ['fullscreen', 'codeview', 'undo', 'redo', 'help']],
                ],
                fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Helvetica', 'Impact', 'Tahoma', 'Times New Roman', 'Verdana', 'Roboto', 'Montserrat'],
                fontNamesIgnoreCheck: ['Roboto', 'Montserrat']
            });
            $('#select1').select2({
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
