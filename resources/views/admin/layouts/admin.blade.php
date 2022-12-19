<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet"
          href="{{ asset('assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/jqvmap/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/summernote/summernote-bs4.min.css') }}">
    @yield('style')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <svg width="60" height="38" viewBox="0 0 60 38" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M19.856 37.9729H8.57912C7.88359 37.9729 7.21655 37.6966 6.72473 37.2048L0.768111 31.2481C0.276298 30.7563 0 30.0893 0 29.3937L0 10.624C0 9.17562 1.17413 8.00149 2.6225 8.00149H7.49284L7.49284 3.13114C7.49284 1.68277 8.66698 0.508642 10.1153 0.508642L28.8851 0.508642C29.5806 0.508642 30.2477 0.78494 30.7395 1.27675L36.6961 7.23337C37.1879 7.72519 37.4642 8.39223 37.4642 9.08776V12.8718C37.4642 14.3202 36.2901 15.4943 34.8417 15.4943H32.5939C31.1455 15.4943 29.9714 14.3202 29.9714 12.8718L29.9714 10.624C29.9714 9.17562 28.7972 8.00149 27.3489 8.00149L7.49284 8.00149L7.49284 27.8575C7.49284 29.3059 8.66698 30.48 10.1153 30.48L19.856 30.48C21.3044 30.48 22.4785 31.6542 22.4785 33.1025L22.4785 35.3504C22.4785 36.7987 21.3044 37.9729 19.856 37.9729Z"
                fill="#014EFF"/>
            <path
                d="M39.9872 0.409215H51.2641C51.9597 0.409215 52.6267 0.685515 53.1185 1.17733L59.0752 7.13395C59.567 7.62576 59.8433 8.2928 59.8433 8.98833L59.8433 27.7581C59.8433 29.2065 58.6691 30.3806 57.2208 30.3806H52.3504V35.2509C52.3504 36.6993 51.1763 37.8734 49.7279 37.8734L30.9582 37.8734C30.2626 37.8734 29.5956 37.5971 29.1038 37.1053L23.1472 31.1487C22.6553 30.6569 22.379 29.9898 22.379 29.2943V25.5102C22.379 24.0619 23.5532 22.8877 25.0015 22.8877H27.2494C28.6978 22.8877 29.8719 24.0619 29.8719 25.5102L29.8719 27.7581C29.8719 29.2065 31.046 30.3806 32.4944 30.3806L52.3504 30.3806L52.3504 10.5246C52.3504 9.07619 51.1763 7.90206 49.7279 7.90206L39.9872 7.90206C38.5389 7.90206 37.3647 6.72793 37.3647 5.27956L37.3647 3.03171C37.3647 1.58335 38.5389 0.409215 39.9872 0.409215Z"
                fill="#014EFF"/>
        </svg>
    </div>

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('admin') }}" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
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
            <svg width="60" height="38" viewBox="0 0 60 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M19.856 37.9729H8.57912C7.88359 37.9729 7.21655 37.6966 6.72473 37.2048L0.768111 31.2481C0.276298 30.7563 0 30.0893 0 29.3937L0 10.624C0 9.17562 1.17413 8.00149 2.6225 8.00149H7.49284L7.49284 3.13114C7.49284 1.68277 8.66698 0.508642 10.1153 0.508642L28.8851 0.508642C29.5806 0.508642 30.2477 0.78494 30.7395 1.27675L36.6961 7.23337C37.1879 7.72519 37.4642 8.39223 37.4642 9.08776V12.8718C37.4642 14.3202 36.2901 15.4943 34.8417 15.4943H32.5939C31.1455 15.4943 29.9714 14.3202 29.9714 12.8718L29.9714 10.624C29.9714 9.17562 28.7972 8.00149 27.3489 8.00149L7.49284 8.00149L7.49284 27.8575C7.49284 29.3059 8.66698 30.48 10.1153 30.48L19.856 30.48C21.3044 30.48 22.4785 31.6542 22.4785 33.1025L22.4785 35.3504C22.4785 36.7987 21.3044 37.9729 19.856 37.9729Z"
                    fill="#014EFF"/>
                <path
                    d="M39.9872 0.409215H51.2641C51.9597 0.409215 52.6267 0.685515 53.1185 1.17733L59.0752 7.13395C59.567 7.62576 59.8433 8.2928 59.8433 8.98833L59.8433 27.7581C59.8433 29.2065 58.6691 30.3806 57.2208 30.3806H52.3504V35.2509C52.3504 36.6993 51.1763 37.8734 49.7279 37.8734L30.9582 37.8734C30.2626 37.8734 29.5956 37.5971 29.1038 37.1053L23.1472 31.1487C22.6553 30.6569 22.379 29.9898 22.379 29.2943V25.5102C22.379 24.0619 23.5532 22.8877 25.0015 22.8877H27.2494C28.6978 22.8877 29.8719 24.0619 29.8719 25.5102L29.8719 27.7581C29.8719 29.2065 31.046 30.3806 32.4944 30.3806L52.3504 30.3806L52.3504 10.5246C52.3504 9.07619 51.1763 7.90206 49.7279 7.90206L39.9872 7.90206C38.5389 7.90206 37.3647 6.72793 37.3647 5.27956L37.3647 3.03171C37.3647 1.58335 38.5389 0.409215 39.9872 0.409215Z"
                    fill="#014EFF"/>
            </svg>

            <span class="brand-text font-weight-light">AFF journal</span>
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
                        <a href="{{ route('video.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-window-maximize"></i>
                            <p>
                                Баннеры
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
<script src="{{ asset('assets/admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/sparklines/sparkline.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script
    src="{{ asset('assets/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/adminlte.min.js') }}"></script>
@yield('scripts')
</body>
</html>

