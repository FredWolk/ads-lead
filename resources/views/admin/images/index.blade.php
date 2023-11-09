@extends('admin.layouts.admin')
@section('style')
    <style>
        .images_body {
            display: flex;
            align-items: center;
            gap: 15px;
            width: 100%;
            flex-wrap: wrap;
            padding: 10px;
        }

        .image_card {
            position: relative;
            max-width: 200px;
            max-height: 200px;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }

        .image_button {
            position: absolute;
            right: 0;
            top: 0;
            display: flex;
            align-items: center;
        }

        .image_item {
            object-fit: contain;
            width: 200px;
            height: 200px;
        }
    </style>
@endsection()
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Изображения</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                            <li class="breadcrumb-item active">Изображения</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <section class="content">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="card-title">Изображения</h3>
                                <a href="{{ route('images.create') }}" class="btn btn-dark btn-sm">Добавить</a>
                            </div>
                        </div>
                        <div class="images_body card-body">
                            @foreach($images as $image)
                                <div class="image_card">
                                    <div class="image_button">
                                        <a class="text-success" href="{{ route('images.edit', $image['id']) }}"><i
                                                class="fas fa-pen"></i></a>
                                        <button form="delete_{{ $image['id'] }}" class="btn text-danger"><i
                                                class="fas fa-trash"></i>
                                        </button>
                                        <form id="delete_{{ $image['id'] }}" class="delete" method="post"
                                              action="{{ route('images.destroy', $image['id']) }}">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </div>
                                    <img class="image_item" width="200" height="200"
                                         src="{{ asset("storage/$image->link") }}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="pagination">
                        {{ $images->onEachSide(1)->links() }}
                    </div>
                </section>
            </div>
        </section>
    </div>
@endsection
@section('scripts')
    <script>
        $('.image_item').on('click', function () {
            var $tmp = $("<textarea>");
            var url = $(this).attr('src');
            $("body").append($tmp);
            $tmp.val(url).select();
            document.execCommand("copy");
            $tmp.remove();
            alert('Ссылка скопирована!')
        })
        var flag = false
        $('.delete').on('submit', function (e) {
            if (!flag) {
                e.preventDefault();
                var result = confirm('Вы действительно хотите удалить это изображение?')
            }
            if (result) {
                flag = true;
                $(this).submit()
            }
        })
    </script>
@endsection
