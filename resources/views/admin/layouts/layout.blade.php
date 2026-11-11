<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Админ-панель</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://googleapis.com">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/admin/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Верхняя навигационная панель -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('home') }}" class="nav-link">На сайт</a>
                </li>
            </ul>
        </nav>

        <!-- Левое боковое меню (Сайдбар) -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="{{ route('admin.index') }}" class="brand-link">
                <span class="brand-text font-weight-light">Админ-панель</span>
            </a>

            <div class="sidebar">
                <nav class="mt-2">
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="{{ asset('assets/admin/dist/img/user2-160x160.jpg') }}"
                                class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">{{ auth()->user()->name }}</a>
                        </div>
                    </div>
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                        <li class="nav-item">
                            <a href="{{ route('admin.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Главная</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.categories.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-list"></i>
                                <p>Категории</p>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a href="{{ route('main') }}" class="nav-link">
                            <i class="fas fa-shopping-cart"></i>
                            <p>Shop</p>
                        </a>
                    </li>
                    </ul>
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>Выход</p>
                        </a>
                    </li>
                    
                </nav>
            </div>
        </aside>

        <!-- Меняющийся контент страниц -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <!-- Подвал -->
        <footer class="main-footer">
            <strong>Панель управления</strong>
        </footer>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/admin/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
