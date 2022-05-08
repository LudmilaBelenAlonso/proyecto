<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') :: IrisNews - Panel de administración</title>
    <link rel="stylesheet" href="<?= url('css/estilos.css');?>"/>
    <link rel="stylesheet" href="<?=url('css/bootstrap.min.css');?>">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-li bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-togle="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Abrir/cerrar menu de navegacion">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?=url('/');?>">Volver a la Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=url('admin/dashboard');?>">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=url('admin/noticias');?>">Noticias</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<div class="container">
    @yield('main')
</div>


<footer class="footer">
    <p>Ludmila Alonso &copy; 2022</p>
</footer>
</body>
</html>
