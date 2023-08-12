<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"  href="{{asset('styles.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="/css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Camila Jeans</title>
</head>
<body >
    <style>
    body{
        background-color: darkslategray;
    }
    </style>

        {{-- navbar --}}
        <div class="navbar">
            <div class="logo">
                Camila Jeans
            </div>
            <ul class="menu">
                <li><a href="InicioT">Inicio</a></li>
                <li><a href="Disponibilidad"> MercanciaDisponible</a></li>
                <li><a href="verpedidos"> Pedidos </a></li>
                <li><a href="{{route('Cierra.Sesion')}}"><span>Cerrar Sesion</span> </a></li>
            </ul>
        </div>
    

@yield('contenido')


<div class="footer">
    <div class="logo">Camila Jeans</div>
    <div class="copyright">
        &copy; 2023 - Todos los derechos reservados
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>