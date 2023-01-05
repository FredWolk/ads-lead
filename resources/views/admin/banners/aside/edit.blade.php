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
                        <h1 class="m-0">Редактировать баннер</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('aside.index') }}">Баннеры</a></li>
                            <li class="breadcrumb-item active">Редактировать баннер</li>
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
                    <form method="post" enctype="multipart/form-data" action="{{ route('aside.update', $aside->id) }}">
                        @csrf
                        @method('patch')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="type">Тип баннера</label>
                                <select name="type" id="type" class="form-control">
                                    <option {{ $aside->type == 'image' ? 'selected' : '' }} value="image">
                                        Изображение\GIF
                                    </option>
                                    <option {{ $aside->type == 'video' ? 'selected' : '' }} value="video">Видео</option>
                                </select>
                            </div>
                            @error('type')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            @if($aside->type == 'image')
                                <img width="400" src="{{ asset('storage/'. $aside->file) }}" alt="">
                            @else
                                <video width="400" src="{{ asset('storage/'. $aside->file) }}" controls="controls"></video>
                            @endif
                            <div class="form-group">
                                <label for="file">Изображение баннера</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input value="{{ $aside->file }}" name="file" type="file"
                                               class="custom-file-input" id="file">
                                        <label class="custom-file-label" for="file">Выберите изображение
                                            Баннера</label>
                                    </div>
                                </div>
                            </div>
                            @error('file')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="link">Ссылка</label>
                                <input name="link" type="url" class="form-control" value="{{ $aside->link }}" id="link"
                                       placeholder="https://google.com">
                            </div>
                            @error('link')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="status">Статус</label>
                                <select name="status" id="status" class="form-control">
                                    <option {{ $aside->status == 1 ? 'selected' : '' }} value="1">Активен</option>
                                    <option {{ $aside->status == 0 ? 'selected' : '' }} value="0">Не активен</option>
                                </select>
                            </div>
                            @error('status')
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

        $('#title').on('input', function () {
            $('#og_title').val($(this).val())
        })
        $('#description').on('input', function () {
            $('#og_description').val($(this).val())
        })
        $('#pt_title').on('input', function () {
            $('#pt_og_title').val($(this).val())
        })
        $('#pt_description').on('input', function () {
            $('#pt_og_description').val($(this).val())
        })
    </script>
@endsection
