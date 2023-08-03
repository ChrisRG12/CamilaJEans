@extends('principal')

@section('Contenido')

<div class="welcome">
    <h1>¡Bienvenido a Camila Jeans!</h1>

    <p>Camila Jeans es tu mejor opción para comprar ropa de cualquier tipo y en cualquier temporada del año.
        Nuestra amplia selección de prendas de vestir y accesorios te permitirá lucir a la moda en cada ocasión.
        Ya sea que estés buscando ropa casual, elegante, deportiva o de noche, tenemos lo que necesitas.
        Además, actualizamos constantemente nuestra colección para seguir las últimas tendencias de la moda.
        No importa si es primavera, verano, otoño o invierno, en Camila Jeans encontrarás las prendas perfectas
        para cada época del año. ¡Ven y descubre lo mejor en moda con nosotros!
    </p>


    <div class="card-container">
        <div class="card">
          <div class="card-body">
            <img src="imagen1.jpg" alt="Imagen 1">
            <p> Agregar Mercancia </p>
          </div>
          <div class="card-footer">
            <button class="btn">Botón</button>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <img src="imagen2.jpg" alt="Imagen 2">
            <p> Ver stock de productos </p>
          </div>
          <div class="card-footer">
            <button class="btn">Botón</button>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <img src="imagen3.jpg" alt="Imagen 3">
            <p> Imprimir ticket </p>
          </div>
          <div class="card-footer">
            <button class="btn">Botón</button>
          </div>
        </div>
      </div>


    {{-- <button class="bounce-button">&#8595;</button> --}}
</div>

@endsection
