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
                        <h1 class="m-0">Редактирование статьи - {{ $article->name }}</h1>
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
                    <form enctype="multipart/form-data" method="post"
                          action="{{ route('article.update', $article->id) }}">
                        @csrf
                        @method('patch')
                        <div class="card-body">

                            <div class="form-group">
                                <label for="name">Название статьи</label>
                                <input type="text" name="name" value="{{ $article->name }}" class="form-control"
                                       id="name" placeholder="Название статьи">
                            </div>
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="link">Ссылка на статью</label>
                                <input type="text" name="link" value="{{ $article->link }}" class="form-control"
                                       id="link" placeholder="Название статьи">
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
                                <label for="pt_name">Название статьи на португальском</label>
                                <input type="text" name="pt_name" value="{{ $article->pt_name }}" class="form-control"
                                       id="pt_name" placeholder="Название статьи">
                            </div>
                            @error('pt_name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <img width="150" src="{{ asset('storage/'.$article->image) }}" alt="">
                            <div class="form-group">
                                <label for="image">Изображение статьи</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input value="{{ $article->image }}" name="image" type="file"
                                               class="custom-file-input" id="image">
                                        <label class="custom-file-label" for="image">Выберите изображение статьи</label>
                                    </div>
                                </div>
                            </div>
                            @error('image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <img width="150" src="{{ asset('storage/'. $article->pt_image) }}" alt="">
                            <div class="form-group">
                                <label for="pt_image">Изображение статьи на португальском</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input value="{{ $article->pt_image }}" name="pt_image" type="file"
                                               class="custom-file-input" id="pt_image">
                                        <label class="custom-file-label" for="pt_image">Выберите изображение
                                            статьи</label>
                                    </div>
                                </div>
                            </div>
                            @error('pt_image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="prev_text">Описание статьи</label>
                                <textarea class="form-control" rows="3" id="prev_text" name="prev_text"
                                          placeholder="It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.The point of using Lorem Ipsum is that it has a more-or-less normal distribution… ...">{{ $article->prev_text }}</textarea>
                            </div>
                            @error('prev_text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="pt_prev_text">Описание статьи на португальском</label>
                                <textarea class="form-control" rows="3" id="pt_prev_text" name="pt_prev_text"
                                          placeholder="It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.The point of using Lorem Ipsum is that it has a more-or-less normal distribution… ...">{{ $article->pt_prev_text }}</textarea>
                            </div>
                            @error('pt_prev_text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="views">Просмотры</label>
                                <input type="number" name="views" value="{{ $article->views }}" class="form-control"
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
                                    @if(!empty($article->tags))
                                        @foreach($article->tags as $i)
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
                                    @if(!empty($article->contents))
                                        @foreach($article->contents as $i)
                                            <option value="{{ $i }}" selected>{{ $i }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            @error('contents')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="select3">Контент на португальском</label>
                                <select name="pt_contents[]" multiple="multiple" class="form-control select1"
                                        id="select3">
                                    @if(!empty($article->pt_contents))
                                        @foreach($article->pt_contents as $i)
                                            <option value="{{ $i }}" selected>{{ $i }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            @error('pt_contents')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="select4">Для кого</label>
                                <select name="for_whom[]" multiple="multiple" class="form-control select1" id="select4">
                                    @if(!empty($article->for_whom))
                                        @foreach($article->for_whom as $i)
                                            <option value="{{ $i }}" selected>{{ $i }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            @error('for_whom')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="select5">Для кого на португальском</label>
                                <select name="pt_for_whom[]" multiple="multiple" class="form-control select1"
                                        id="select5">
                                    @if(!empty($article->pt_for_whom))
                                        @foreach($article->pt_for_whom as $i)
                                            <option value="{{ $i }}" selected>{{ $i }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            @error('pt_for_whom')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="summernote">Контент статьи</label>
                                <textarea name="main_text" class="summernote"
                                          id="summernote">{{ $article->main_text }}</textarea>
                            </div>
                            @error('main_text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="summernote2">Контент португальской статьи</label>
                                <textarea name="pt_main_text" class="summernote"
                                          id="summernote2">{{ $article->pt_main_text }}</textarea>
                            </div>
                            @error('pt_main_text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="title">TITLE</label>
                                        <input value="{{ $article->title }}" name="title" type="text"
                                               class="form-control" id="title"
                                               placeholder="Заголовок страницы">
                                    </div>
                                    @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="description">DESCRIPTION</label>
                                        <input value="{{ $article->description }}" name="description" type="text"
                                               class="form-control" id="description"
                                               placeholder="Описание страницы">
                                    </div>
                                    @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="keywords">KEYWORDS</label>
                                        <input value="{{ $article->og_url }}" name="keywords" type="text"
                                               class="form-control" id="keywords"
                                               placeholder="Введите ключевые слова через ','">
                                    </div>
                                    @error('keywords')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="og_title">OG_TITLE</label>
                                        <input value="{{ $article->og_url }}" name="og_title" type="text"
                                               class="form-control" id="og_title"
                                               placeholder="Заголовок страницы">
                                    </div>
                                    @error('og_title')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="og_description">OG_DESCRIPTION</label>
                                        <input value="{{ $article->og_url }}" name="og_description" type="text"
                                               class="form-control" id="og_description"
                                               placeholder="Описание страницы">
                                    </div>
                                    @error('og_description')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="og_url">OG_URL</label>
                                        <input value="{{ $article->og_url }}" name="og_url" type="text"
                                               class="form-control" id="og_url"
                                               placeholder="Ссылка на страницу">
                                    </div>
                                    @error('og_url')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="og_image">OG_IMAGE</label>
                                        <input value="{{ $article->og_image }}" name="og_image" type="text"
                                               class="form-control" id="og_image"
                                               placeholder="Сылка на изображение">
                                    </div>
                                    @error('og_image')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="og_type">OG_TYPE</label>
                                        <input value="{{ $article->og_type }}" name="og_type" type="text"
                                               class="form-control" id="og_type"
                                               placeholder="Тип страницы">
                                    </div>
                                    @error('og_type')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div id="meta_block" class="form-group gap__flex"></div>
                                    <input value="{{ $article->meta_tags }}" type="hidden" id="meta_tags"
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
                                    <input value="{{ $article->og_tags }}" type="hidden" name="og_tags">
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
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="pt_title">PT TITLE</label>
                                        <input value="{{ $article->pt_title }}" name="pt_title" type="text"
                                               class="form-control" id="pt_title"
                                               placeholder="Заголовок страницы">
                                    </div>
                                    @error('pt_title')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="pt_description">PT DESCRIPTION</label>
                                        <input value="{{ $article->pt_description }}" name="pt_description" type="text"
                                               class="form-control" id="pt_description"
                                               placeholder="Описание страницы">
                                    </div>
                                    @error('pt_description')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="pt_keywords">PT KEYWORDS</label>
                                        <input value="{{ $article->pt_keywords }}" name="pt_keywords" type="text"
                                               class="form-control" id="pt_keywords"
                                               placeholder="Введите ключевые слова через ','">
                                    </div>
                                    @error('pt_keywords')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="pt_og_title">PT OG_TITLE</label>
                                        <input value="{{ $article->pt_og_title }}" name="pt_og_title" type="text"
                                               class="form-control" id="pt_og_title"
                                               placeholder="Заголовок страницы">
                                    </div>
                                    @error('pt_og_title')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="pt_og_description">PT OG_DESCRIPTION</label>
                                        <input value="{{ $article->pt_og_description }}" name="pt_og_description"
                                               type="text" class="form-control" id="pt_og_description"
                                               placeholder="Описание страницы">
                                    </div>
                                    @error('pt_og_description')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="pt_og_url">PT OG_URL</label>
                                        <input value="{{ $article->pt_og_url }}" name="pt_og_url" type="text"
                                               class="form-control" id="pt_og_url"
                                               placeholder="Ссылка на страницу">
                                    </div>
                                    @error('pt_og_url')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="pt_og_image">PT OG_IMAGE</label>
                                        <input value="{{ $article->pt_og_image }}" name="pt_og_image" type="text"
                                               class="form-control" id="pt_og_image"
                                               placeholder="Сылка на изображение">
                                    </div>
                                    @error('pt_og_image')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="pt_og_type">PT OG_TYPE</label>
                                        <input value="{{ $article->pt_og_type }}" name="pt_og_type" type="text"
                                               class="form-control" id="pt_og_type"
                                               placeholder="Тип страницы">
                                    </div>
                                    @error('pt_og_type')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div id="pt_meta_block" class="form-group pt_gap__flex"></div>

                                    <input value="{{ $article->pt_meta_tags }}" type="hidden" id="pt_meta_tags"
                                           name="pt_meta_tags">
                                    <div class="form-group">
                                        <label for="pt_meta_name">PT META_TAGS</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control col-2" id="pt_meta_name"
                                                   placeholder="Name">
                                            <input type="text" class="form-control" id="pt_meta_content"
                                                   placeholder="Content">
                                            <button data-type="meta" type="button" id="pt_add_meta"
                                                    class="pt_startFunc btn btn-warning">Добавить
                                            </button>
                                        </div>
                                    </div>
                                    @error('pt_meta_tags')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div id="pt_og_block" class="form-group pt_gap__flex"></div>

                                    <input value="{{ $article->pt_og_tags }}" type="hidden" name="pt_og_tags">
                                    <div class="form-group">
                                        <label for="pt_og_name">PT OG_TAGS</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control col-2" id="pt_og_name"
                                                   placeholder="Name">
                                            <input type="text" class="form-control" id="pt_og_content"
                                                   placeholder="Content">
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
    <script src="{{ asset('assets/admin/js/seo-function.js') }}"></script>

    <script>

        $(function () {
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
