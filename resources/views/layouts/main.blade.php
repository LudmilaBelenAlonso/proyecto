<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') :: IrisNews</title>
    <link rel="stylesheet" href="<?=url('css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?= url('css/estilos.css');?>"/>

</head>

<body>
<nav id="nbg" class="navbar navbar-expand-lg navbar-li navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">IrisNews</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-togle="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Abrir/cerrar menu de navegacion">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?=url('/');?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=url('acerca-de');?>">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=url('noticias');?>">Noticias</a>
                </li>
                @guest()
                <li class="nav-item">
                    <a class="nav-link" href="<?=route('auth.login.form');?>">Iniciar Sesión</a>
                </li>

                @endguest

                @auth()

                <li class="nav-item">
                    <form action="{{route('auth.logout')}}" method="post">
                        @csrf
                        <button class="btn btn-link nav-link">{{auth()->user()->email}} (Cerrar Sesión)</button>
                    </form>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<main class="container py-3">
    @if(Session::has('message.success'))
        <div class="alert alert-success mb3">{!! Session::get('message.success')!!}</div>
    @endif
    @if(Session::has('message.error'))
            <div class="alert alert-danger mb3">{!! Session::get('message.error')!!}</div>
        @endif

    @yield('main')
</main>


<footer class="footer">
    <p>Ludmila Alonso &copy; 2022</p>
</footer>
</body>
</html>
