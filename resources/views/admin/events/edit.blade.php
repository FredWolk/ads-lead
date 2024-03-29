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
                        <h1 class="m-0">Добавить событие</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('event.index') }}">События</a></li>
                            <li class="breadcrumb-item active">Добавить собитые</li>
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
                    <form enctype="multipart/form-data" method="post" action="{{ route('event.update', $event->id) }}">
                        @csrf
                        @method('patch')
                        <div class="card-body">

                            <div class="form-group">
                                <label for="name">Название собития</label>
                                <input type="text" name="name" value="{{ $event->name }}" class="form-control"
                                       id="name"
                                       placeholder="Название собития">
                            </div>
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="link">Ссылка на событие</label>
                                <input type="text" name="link" value="{{ $event->link }}" class="form-control"
                                       id="link">
                            </div>
                            @error('link')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="type">Тип события</label>
                                <select name="type" id="type" class="form-control">
                                    <option {{$event->type === 'meetup' ? 'selected' : '' }} value="meetup">Meetup
                                    </option>
                                    <option {{$event->type === 'preparty' ? 'selected' : '' }} value="preparty">
                                        Preparty
                                    </option>
                                    <option {{$event->type === 'afterparty' ? 'selected' : '' }} value="afterparty">
                                        Afterparty
                                    </option>
                                    <option {{$event->type === 'conference' ? 'selected' : '' }} value="conference">
                                        Conference
                                    </option>
                                </select>
                            </div>
                            @error('type')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="location">Место проведения</label>
                                <input type="text" name="location" value="{{ $event->location }}" class="form-control"
                                       id="location"
                                       placeholder="USA | HOLLYWOOD | FLORIDA">
                            </div>
                            @error('location')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="organizer">Организатор</label>
                                <input type="text" name="organizer" value="{{ $event->organizer }}"
                                       class="form-control"
                                       id="organizer"
                                       placeholder="ABC Club">
                            </div>
                            @error('organizer')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="date">Дата проведения</label>
                                <input type="text" name="date" value="{{ $event->date }}" class="form-control"
                                       id="date"
                                       placeholder="1-3 NOVEMBER 2022">
                            </div>
                            @error('date')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="image">Изображение собития</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input value="{{ $event->image }}" name="image" type="file"
                                               class="custom-file-input" id="image">
                                        <label class="custom-file-label" for="image">Выберите изображение
                                            собития</label>
                                    </div>
                                </div>
                            </div>
                            @error('image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="summernote2">Контент события</label>
                                <textarea class="summernote" name="content"
                                          id="summernote2">{{ $event->content }}</textarea>
                            </div>
                            @error('content')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            {{--  Доп. информация о рекламе   --}}

                            <div class="card card-success p-3">
                                <div class="card-header">
                                    <h3 class="card-title">Доп. информация о событии</h3>
                                </div>
                                <div class="form-group">
                                    <label for="form_date">Дата события</label>
                                    <input value="{{ $event->form_date }}" name="form_date" type="text"
                                           class="form-control"
                                           id="form_date"
                                           placeholder="Lago Events - 6 HaMea VeEsrim St., Rishon LeTsiyon, Israel">
                                </div>
                                @error('form_date')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="form_location">Место проведения</label>
                                    <input value="{{ $event->form_location }}" name="form_location" type="text"
                                           class="form-control"
                                           id="form_location"
                                           placeholder="Lago Events - 6 HaMea VeEsrim St., Rishon LeTsiyon, Israel">
                                </div>
                                @error('form_location')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="form_social">Социальные сети</label>
                                    <input value="{{ $event->form_social }}" name="form_social" type="text"
                                           class="form-control"
                                           id="form_social"
                                           placeholder="instagram$$https://instagramm.com">
                                </div>
                                @error('form_social')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="form_site">Веб-сайт</label>
                                    <input value="{{ $event->form_site }}" name="form_site" type="text"
                                           class="form-control"
                                           id="form_site"
                                           placeholder="https://google.com">
                                </div>
                                @error('form_site')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="filtration_date">Дата для фильтрации</label>
                                    <input value="{{ $event->filtration_date }}" name="filtration_date" type="date"
                                           class="form-control"
                                           id="filtration_date"
                                           placeholder="22.10.2022">
                                </div>
                                @error('filtration_date')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror


                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label for="title">TITLE</label>
                                    <input value="{{ $event->title }}" name="title" type="text"
                                           class="form-control"
                                           id="title"
                                           placeholder="Заголовок страницы">
                                </div>
                                @error('title')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="description">DESCRIPTION</label>
                                    <input value="{{ $event->description }}" name="description" type="text"
                                           class="form-control" id="description"
                                           placeholder="Описание страницы">
                                </div>
                                @error('description')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="keywords">KEYWORDS</label>
                                    <input value="{{ $event->og_url }}" name="keywords" type="text"
                                           class="form-control" id="keywords"
                                           placeholder="Введите ключевые слова через ','">
                                </div>
                                @error('keywords')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="og_title">OG_TITLE</label>
                                    <input value="{{ $event->og_url }}" name="og_title" type="text"
                                           class="form-control" id="og_title"
                                           placeholder="Заголовок страницы">
                                </div>
                                @error('og_title')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="og_description">OG_DESCRIPTION</label>
                                    <input value="{{ $event->og_url }}" name="og_description" type="text"
                                           class="form-control" id="og_description"
                                           placeholder="Описание страницы">
                                </div>
                                @error('og_description')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="og_url">OG_URL</label>
                                    <input value="{{ $event->og_url }}" name="og_url" type="text"
                                           class="form-control" id="og_url"
                                           placeholder="Ссылка на страницу">
                                </div>
                                @error('og_url')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="og_image">OG_IMAGE</label>
                                    <input value="{{ $event->og_image }}" name="og_image" type="text"
                                           class="form-control" id="og_image"
                                           placeholder="Сылка на изображение">
                                </div>
                                @error('og_image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="og_type">OG_TYPE</label>
                                    <input value="{{ $event->og_type }}" name="og_type" type="text"
                                           class="form-control" id="og_type"
                                           placeholder="Тип страницы">
                                </div>
                                @error('og_type')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div id="meta_block" class="form-group gap__flex"></div>
                                <input value="{{ $event->meta_tags }}" type="hidden" id="meta_tags"
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
                                <input value="{{ $event->og_tags }}" type="hidden" name="og_tags">
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
            $('#select1, #select2, #select3, #select4, #select5').select2()
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
