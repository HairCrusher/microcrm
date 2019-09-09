<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>

<div id="app">
    <nav class="navbar navbar-expand-lg mb-3 navbar-dark bg-primary">
        <a class="navbar-brand" href="/">MicroCRM</a>
        @if(Auth::check())
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="/">Мои исполнители</a>
                    </li>
                    <li class="nav-item {{ Request::is('events') ? 'active' : '' }}">
                        <a class="nav-link" href="/events">Эвенты</a>
                    </li>
                    <li class="nav-item {{ Request::is('tasks') ? 'active' : '' }}">
                        <a class="nav-link" href="/tasks">Мои задачи</a>
                    </li>
                    <li class="flex-grow-1"></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->full_name() }} [{{ Auth::user()->vk_name  }} - {{ Auth::user()->vk_id  }}]
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/groups">Группы в VK</a>
                            <a class="dropdown-item" href="/logout">Выход</a>
                        </div>
                    </li>
                </ul>
            </div>
        @endif
    </nav>

    @yield('content')


</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="{{ asset('main.jss') }}"></script>
<script>
    $(document).ready(function () {
        $('.action-btn').click(function (e) {
            e.preventDefault();
            var data = $(this).data();
            console.log(data);
            var route = this.href;
            console.log(route);

            $.ajax({
                url: route,
                method: data.method,
                data: data,
                success: function (resp) {
                    console.log(resp);
                }
            });

        });
    });
</script>
</body>
</html>