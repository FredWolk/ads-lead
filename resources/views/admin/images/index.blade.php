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
        /*--PAGINATION--*/
        .pagination {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }
        .pagination button {
            border: none;
            outline: none;
            background: none;
        }
        .pagination_button {
            padding: 0px !important;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--blue);
            transition-timing-function: cubic-bezier(.5, -1, .5, 2);
            position: relative;
        }

        .pagination_button::after {
            content: '';
            position: absolute;
            left: 100%;
            top: 0;
            width: 10px;
            height: 100%;
            transition-duration: 0.3s;
            transform-origin: left;
            transform: scaleX(0);
            background-color: var(--blue);
        }

        .pagination_button img {
            transition-duration: 0.3s;
        }

        .pagination_button.left {
            transform: scaleX(-1);
            margin-left: 10px;
        }

        .pagination_button.right {
            margin-right: 10px;
        }

        .pagination_button:hover img {
            margin-right: -7px;
        }

        .pagination_button:hover::after {
            transform: scaleX(1);
        }

        .pagination_list {
            display: flex;
            align-items: center;
            gap: 3px;
            list-style: none;
            margin-bottom: 0;
            padding-left: 0;
        }

        .pagination--item {
            width: 40px;
            height: 40px;
            background: #FFFFFF;
            border: 1px solid #272C31;
            font-weight: 700;
            font-size: 14px;
            line-height: 160%;
            text-align: center;
            color: #181A1C;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            transition-duration: 0.3s;
            user-select: none;
            cursor: pointer;
        }

        .pagination--item a {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .pagination--item:hover {
            border: 1px solid var(--blue);
        }

        .pagination--item.active {
            border: 1px solid var(--blue);
            color: var(--blue);
        }

        /*--PAGINATION--*/

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
