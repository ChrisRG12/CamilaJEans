<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Camila Jeans </title>
</head>

<body>

    {{-- navbar --}}
    <div class="navbar">
        <div class="logo">
            Camila Jeans
            {{-- <img src="{{ asset('imgs/imagen.png') }}"> --}}
        </div>
        <ul class="menu">
            <li><a href="/">Inicio</a></li>
            <li><a href="/Prod">Productos</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </div>

@yield('Contenido')

    <div class="footer">
        <div class="logo">Camila Jeans</div>
        <div class="copyright">
            &copy; 2023 - Todos los derechos reservados
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
