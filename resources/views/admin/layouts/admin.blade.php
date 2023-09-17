<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/summernote/summernote-bs4.min.css') }}">
    @yield('style')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img loading="lazy" width="20%" src="{{asset('assets/images/icons/logo.webp')}}" alt="Aff journal">
    </div>

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('admin') }}" class="nav-link">Home</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
        </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="{{ route('admin') }}" class="brand-link">
            <img loading="lazy" width="100%" src="{{asset('assets/images/icons/logo.webp')}}" alt="Aff journal">
        </a>

        <div class="sidebar">

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="{{ route('seo.index') }}" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                SEO
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('topick.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-filter"></i>
                            <p>
                                Топики
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('filters.edit', 1) }}" class="nav-link">
                            <i class="nav-icon fas fa-filter"></i>
                            <p>
                                Фильтры
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('article.index') }}" class="nav-link">
                            <i class="nav-icon far fa-newspaper"></i>
                            <p>
                                Статьи
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('author.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Авторы
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('cpa.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-handshake"></i>
                            <p>
                                Партнерки
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('ad.index') }}" class="nav-link">
                            <i class="nav-icon fab fa-buysellads"></i>
                            <p>
                                Рекламы
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('event.index') }}" class="nav-link">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                Ивенты
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('video.index') }}" class="nav-link">
                            <i class="nav-icon fab fa-youtube"></i>
                            <p>
                                Видео
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('services.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-taxi"></i>
                            <p>
                                Сервисы
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-window-maximize"></i>
                            <p>
                                Баннеры
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">
                                <a href="{{ route('button.index') }}" class="nav-link">
                                    <i class="fas fa-window-minimize nav-icon"></i>
                                    <p>Кнопка</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('top.index') }}" class="nav-link">
                                    <i class="nav-icon fas fa-window-maximize"></i>
                                    <p>Большой</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aside.index') }}" class="nav-link">
                                    <i class="fas fa-window-restore nav-icon"></i>
                                    <p>Маленький</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('forum.index') }}" class="nav-link">
                                    <i class="fab fa-wpforms nav-icon"></i>
                                    <p>Форум</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('popup.index') }}" class="nav-link">
                                    <i class="fab fa-wpforms nav-icon"></i>
                                    <p>Попап</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-window-maximize"></i>
                            <p>
                                Комментарии
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">
                                <a href="{{ route('comments.article.index') }}" class="nav-link">
                                    <i class="fas fa-newspaper nav-icon"></i>
                                    <p>Статьи</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('comments.cpa.index') }}" class="nav-link">
                                    <i class="fas fa-hands-helping nav-icon"></i>
                                    <p>CPA</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('comments.adv.index') }}" class="nav-link">
                                    <i class="fab fa-adversal nav-icon"></i>
                                    <p>ADS</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('users.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-taxi"></i>
                            <p>
                                Пользователи
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    @yield('content')

    <footer class="main-footer">
        <strong>Copyright &copy; {{ date('Y') }} <a href="#">AFF Journal</a>.</strong>
        All rights reserved.
    </footer>
</div>

<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/adminlte.min.js') }}"></script>
@yield('scripts')
</body>
</html>

