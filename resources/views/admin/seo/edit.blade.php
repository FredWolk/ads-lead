@php
    use App\Models\Seo;
@endphp

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
                        <h1 class="m-0">Добавить SEO к странице</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('seo.index') }}">SEO</a></li>
                            <li class="breadcrumb-item active">Добавить SEO</li>
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
                    <form method="post" action="{{ route('seo.update', $seo->id) }}">
                        @csrf
                        @method('patch')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="pageSelect">Страница</label>
                                <select name="page" id="pageSelect" class="form-control">
                                    <option {{ $seo->page === Seo::MAIN_PAGE ? 'selected' : '' }} value="{{ Seo::MAIN_PAGE }}">Главная</option>
                                    <option {{ $seo->page === Seo::CPA_PAGE ? 'selected' : '' }} value="{{ Seo::CPA_PAGE }}">Партнерки</option>
                                    <option {{ $seo->page === Seo::ADS_PAGE ? 'selected' : '' }} value="{{ Seo::ADS_PAGE }}">Рекламы</option>
                                    <option {{ $seo->page === Seo::ARTICLES_PAGE ? 'selected' : '' }} value="{{ Seo::ARTICLES_PAGE }}">Статьи</option>
                                    <option {{ $seo->page === Seo::VIDEOS_PAGE ? 'selected' : '' }} value="{{ Seo::VIDEOS_PAGE }}">Видео</option>
                                    <option {{ $seo->page === Seo::EVENTS_PAGE ? 'selected' : '' }} value="{{ Seo::EVENTS_PAGE }}">События</option>
                                    <option {{ $seo->page === Seo::FORUM_PAGE ? 'selected' : '' }} value="{{ Seo::FORUM_PAGE }}">Форум</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="pageActive">Статус страницы</label>
                                <select name="status" id="pageActive" class="form-control">
                                    <option {{ $seo->status === 1 ? 'selected' : '' }} value="1">Активная</option>
                                    <option {{ $seo->status === 0 ? 'selected' : '' }} value="0">Не активная</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="h1">H1 (не на главной)</label>
                                <input name="h1" type="text" value="{{ $seo->h1 }}" class="form-control" id="h1"
                                       placeholder="Заголовок страницы">
                            </div>
                            @error('h1')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="pt_h1">H1 на португальском (не на главной)</label>
                                <input name="pt_h1" value="{{ $seo->pt_h1 }}" type="text" class="form-control" id="pt_h1"
                                       placeholder="Заголовок страницы">
                            </div>
                            @error('pt_h1')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="after_h1_text">Текст после заголовка</label>
                                <textarea class="form-control" rows="3" id="after_h1_text" name="after_h1_text" placeholder="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellen.">{{ $seo->after_h1_text }}</textarea>
                            </div>
                            @error('after_h1_text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="pt_after_h1_text">Текст после заголовка на португальском</label>
                                <textarea class="form-control" rows="3" id="pt_after_h1_text" name="pt_after_h1_text" placeholder="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellen.">{{ $seo->pt_after_h1_text }}</textarea>
                            </div>
                            @error('pt_after_h1_text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="seo_text">Сео текст</label>
                                <textarea class="form-control summernote" rows="3" id="seo_text" name="seo_text" placeholder="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellen.">{{ $seo->seo_text }}</textarea>
                            </div>
                            @error('seo_text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="pt_seo_text">Сео текст на португальском</label>
                                <textarea class="form-control summernote" rows="3" id="pt_seo_text" name="pt_seo_text" placeholder="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellen.">{{ $seo->pt_seo_text }}</textarea>
                            </div>
                            @error('pt_seo_text')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="row">
                                <div class="col-sm-6" data-lang="">
                                    <div class="form-group">
                                        <label for="title">TITLE</label>
                                        <input name="title" value="{{ $seo->title }}" type="text" class="form-control" id="title"
                                               placeholder="Заголовок страницы">
                                    </div>
                                    @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="description">DESCRIPTION</label>
                                        <input value="{{ $seo->description }}" name="description" type="text" class="form-control" id="description"
                                               placeholder="Описание страницы">
                                    </div>
                                    @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="keywords">KEYWORDS</label>
                                        <input value="{{ $seo->keywords }}" name="keywords" type="text" class="form-control" id="keywords"
                                               placeholder="Введите ключевые слова через ','">
                                    </div>
                                    @error('keywords')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="og_title">OG_TITLE</label>
                                        <input value="{{ $seo->og_title }}" name="og_title" type="text" class="form-control" id="og_title"
                                               placeholder="Заголовок страницы">
                                    </div>
                                    @error('og_title')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="og_description">OG_DESCRIPTION</label>
                                        <input value="{{ $seo->og_description }}" name="og_description" type="text" class="form-control" id="og_description"
                                               placeholder="Описание страницы">
                                    </div>
                                    @error('og_description')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="og_url">OG_URL</label>
                                        <input value="{{ $seo->og_url }}" name="og_url" type="text" class="form-control" id="og_url"
                                               placeholder="Ссылка на страницу">
                                    </div>
                                    @error('og_url')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="og_image">OG_IMAGE</label>
                                        <input value="{{ $seo->og_image }}" name="og_image" type="text" class="form-control" id="og_image"
                                               placeholder="Сылка на изображение">
                                    </div>
                                    @error('og_image')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="og_type">OG_TYPE</label>
                                        <input value="{{ $seo->og_type }}" name="og_type" type="text" class="form-control" id="og_type"
                                               placeholder="Тип страницы">
                                    </div>
                                    @error('og_type')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div id="meta_block" class="form-group gap__flex"></div>
                                    <input value="{{ !empty($seo->meta_tags) ? $seo->meta_tags : '[]' }}" type="hidden" id="meta_tags" name="meta_tags">
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
                                    <input value="{{ !empty($seo->og_tags) ? $seo->og_tags : '[]' }}" id="og_tags" type="hidden" name="og_tags">
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
                                        <input value="{{ $seo->pt_title }}" name="pt_title" type="text" class="form-control" id="pt_title"
                                               placeholder="Заголовок страницы">
                                    </div>
                                    @error('pt_title')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="pt_description">PT DESCRIPTION</label>
                                        <input value="{{ $seo->pt_description }}" name="pt_description" type="text" class="form-control" id="pt_description"
                                               placeholder="Описание страницы">
                                    </div>
                                    @error('pt_description')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="pt_keywords">PT KEYWORDS</label>
                                        <input value="{{ $seo->pt_keywords }}" name="pt_keywords" type="text" class="form-control" id="pt_keywords"
                                               placeholder="Введите ключевые слова через ','">
                                    </div>
                                    @error('pt_keywords')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="pt_og_title">PT OG_TITLE</label>
                                        <input value="{{ $seo->pt_og_title }}" name="pt_og_title" type="text" class="form-control" id="pt_og_title"
                                               placeholder="Заголовок страницы">
                                    </div>
                                    @error('pt_og_title')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="pt_og_description">PT OG_DESCRIPTION</label>
                                        <input value="{{ $seo->pt_og_description }}" name="pt_og_description" type="text" class="form-control" id="pt_og_description"
                                               placeholder="Описание страницы">
                                    </div>
                                    @error('pt_og_description')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="pt_og_url">PT OG_URL</label>
                                        <input value="{{ $seo->pt_og_url }}" name="pt_og_url" type="text" class="form-control" id="pt_og_url"
                                               placeholder="Ссылка на страницу">
                                    </div>
                                    @error('pt_og_url')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="pt_og_image">PT OG_IMAGE</label>
                                        <input value="{{ $seo->pt_og_image }}" name="pt_og_image" type="text" class="form-control" id="pt_og_image"
                                               placeholder="Сылка на изображение">
                                    </div>
                                    @error('pt_og_image')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="pt_og_type">PT OG_TYPE</label>
                                        <input value="{{ $seo->pt_og_type }}" name="pt_og_type" type="text" class="form-control" id="pt_og_type"
                                               placeholder="Тип страницы">
                                    </div>
                                    @error('pt_og_type')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div id="pt_meta_block" class="form-group pt_gap__flex"></div>

                                    <input value="{{ !empty($seo->pt_meta_tags) ? $seo->pt_meta_tags : '[]' }}" type="hidden" id="pt_meta_tags" name="pt_meta_tags">
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

                                    <input value="{{ !empty($seo->pt_og_tags) ? $seo->pt_og_tags : '[]' }}" id="pt_og_tags" type="hidden" name="pt_og_tags">
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
    <script>
        var meta = JSON.parse($('#meta_tags').val()),
            og = JSON.parse($('#og_tags').val());

        function render(type, content) {
            var block = $('#' + type + '_block');
            block.text('');
            content.map((e, key) => {
                block.append(`
                    <div data-id="${key}" data-type="${type}" class="alert alert-secondary">
                        Название: ${e.name}; Контент: ${e.content};
                    </div>
                `)
            })
        }
        render('og', og);
        render('meta', meta);

        function remove(type, id) {
            if (type === 'og') {
                og.splice(id, 1)
                render(type, og)
            } else {
                meta.splice(id, 1)
                render(type, meta)
            }
        }

        $('.gap__flex').on('click', '.alert', function () {
            let type = $(this).attr('data-type'),
                id = $(this).attr('data-id');
            remove(type, id);
        })

        $('.startFunc').on('click', function () {
            let obj = {},
                type = $(this).attr('data-type'),
                lang = $(this).attr('data-lang'),
                name = $('#' + lang + type + '_name'),
                content = $('#' + lang + type + '_content');

            obj.name = name.val();
            obj.content = content.val();

            if (type === 'og') {
                og.push(obj)
                $('#' + type + '_tags').val(JSON.stringify(og))
                render(type, og)
            } else {
                meta.push(obj)
                $('#' + type + '_tags').val(JSON.stringify(meta))
                render(type, meta)
            }
            name.val('');
            content.val('');
        });

        var pt_meta = JSON.parse($('#pt_meta_tags').val()),
            pt_og = JSON.parse($('#pt_og_tags').val())

        function pt_render(type, content) {
            var block = $('#pt_' + type + '_block');
            block.text('');
            content.map((e, key) => {
                block.append(`
                    <div data-id="${key}" data-type="${type}" class="alert alert-secondary">
                        Название: ${e.name}; Контент: ${e.content};
                    </div>
                `)
            })
        }

        pt_render('og', pt_og);
        pt_render('meta', pt_meta);

        function pt_remove(type, id) {
            if (type === 'og') {
                pt_og.splice(id, 1)
                pt_render(type, pt_og)
            } else {
                pt_meta.splice(id, 1)
                pt_render(type, pt_meta)
            }
        }


        $('.pt_gap__flex').on('click', '.alert', function () {
            let type = $(this).attr('data-type'),
                id = $(this).attr('data-id');
            pt_remove(type, id);
        })

        $('.pt_startFunc').on('click', function () {
            let obj = {},
                type = $(this).attr('data-type'),
                name = $('#pt_' + type + '_name'),
                content = $('#pt_' + type + '_content');

            obj.name = name.val();
            obj.content = content.val();

            if (type === 'og') {
                pt_og.push(obj)
                $('#pt_' + type + '_tags').val(JSON.stringify(pt_og))
                pt_render(type, pt_og)
            } else {
                pt_meta.push(obj)
                $('#pt_' + type + '_tags').val(JSON.stringify(pt_meta))
                pt_render(type, pt_meta)
            }
            name.val('');
            content.val('');
        });

        $('#title').on('input', function (){
            $('#og_title').val($(this).val())
        })
        $('#description').on('input', function (){
            $('#og_description').val($(this).val())
        })
        $('#pt_title').on('input', function (){
            $('#pt_og_title').val($(this).val())
        })
        $('#pt_description').on('input', function (){
            $('#pt_og_description').val($(this).val())
        })
    </script>
@endsection
