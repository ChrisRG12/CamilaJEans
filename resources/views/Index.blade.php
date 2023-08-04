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


    <div class="card-containerr">
        <div class="card">
          <div class="card-body">
            
            <p> Agregar Mercancia </p>
          </div>
          <div class="card-footer">
            <a href="Agregar">
            <button class="btn">Botón</button> </a>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <p> Ver stock de productos </p>
          </div>
          <div class="card-footer">
            <button class="btn">Botón</button>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
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
