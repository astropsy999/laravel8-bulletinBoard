<html>

<head>
    <meta charset="UTF-8">
    <title>@yield('title') :: Объявления</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="/styles/main.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <a href="{{ route('index') }}" class="navbar-brand mr-auto ">Главная</a>
            <a href="{{ route('register') }}" class="nav-item nav-link ">Регистрация</a>
            <a href="{{ route('login') }}" class="nav-item nav-link">Вход</a>
            <a href="{{ route('home') }}" class="nav-item nav-link">Мои объявления</a>
            <form action="{{ route('logout') }}" method="POST" class="form-inline"> @csrf
                <input type="submit" class="btn btn-danger" value="Выход">
            </form>
        </nav>
        <h1 class="my-3 text-center">Объявления</h1> @yield('main')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>