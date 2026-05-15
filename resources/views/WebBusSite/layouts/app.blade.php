<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Автовокзал</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">Система Автовокзала</a>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @auth
                        <li class="nav-item"><a class="nav-link" href="/buses">Автобусы</a></li>
                        <li class="nav-item"><a class="nav-link" href="/routes">Маршруты</a></li>
                        <li class="nav-item"><a class="nav-link" href="/rides">Рейсы</a></li>
                        @if(auth()->user()->role === 'dispatcher' || auth()->user()->role === 'admin')
                            <li class="nav-item"><a class="nav-link text-warning" href="/dispatcher">Панель Диспетчера</a></li>
                        @endif
                        @if(auth()->user()->role === 'admin')
                            <li class="nav-item"><a class="nav-link text-danger" href="/admin">Панель Админа</a></li>
                        @endif
                    @endauth
                </ul>

                <div class="d-flex align-items-center text-white">
                    @auth
                        <span class="me-3">{{ auth()->user()->username }} ({{ auth()->user()->role }})</span>
                        <form action="/logout" method="POST" class="m-0">
                            @csrf
                            <button type="submit" class="btn btn-outline-light btn-sm">Выйти</button>
                        </form>
                    @else
                        <a href="/login" class="btn btn-outline-light btn-sm me-2">Вход</a>
                        <a href="/register" class="btn btn-light btn-sm">Регистрация</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </div>

    <script src="https://jsdelivr.net"></script>
</body>

</html>