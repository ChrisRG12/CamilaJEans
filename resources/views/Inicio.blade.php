@extends('plantilla')

@section('contenido')


<div class="welcome">


      <div class="container mt-5 mb-4 col-md-8 bg-light">

        <h1>¡Bienvenido a Camila Jeans!</h1>
      
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
       <div class="carousel-indicators">
         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
       </div>
       <div class="carousel-inner">
         <div class="carousel-item active">
           <img src="https://th.bing.com/th/id/OIP.MONZlczYfRvQ_LPEOKjyFwHaE8?pid=ImgDet&rs=1" class="d-block w-100" alt="...">
         </div>
         <div class="carousel-item">
           <img src="https://th.bing.com/th/id/OIP.fOIDD8olnJrk7xPMMcOlLQHaE7?w=245&h=180&c=7&r=0&o=5&pid=1.7" class="d-block w-100" alt="...">
         </div>
         <div class="carousel-item">
           <img src="https://th.bing.com/th/id/OIP.oQYotVCIddAZU0VsugifMQHaEA?w=335&h=182&c=7&r=0&o=5&pid=1.7" class="d-block w-100" alt="...">
         </div>
       </div>
       <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
       </button>
       <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
       </button>
     </div>
        <br>
         <div class="card-body">
             <p class="card-text"> Camila Jeans es tu mejor opción para comprar ropa de cualquier tipo y en cualquier temporada del año.
              Nuestra amplia selección de prendas de vestir y accesorios te permitirá lucir a la moda en cada ocasión.
              Ya sea que estés buscando ropa casual, elegante, deportiva o de noche, tenemos lo que necesitas.
              Además, actualizamos constantemente nuestra colección para seguir las últimas tendencias de la moda.
              No importa si es primavera, verano, otoño o invierno, en Camila Jeans encontrarás las prendas perfectas
              para cada época del año. ¡Ven y descubre lo mejor en moda con nosotros!
            </div>
     <a href="Disponibilidad">
      <button class="btn mb-3" style="background-color: rgb(182, 95, 112)"> Disponibilidad de Mercancia</button> </a>


     
     </div>
     


    {{-- <button class="bounce-button">&#8595;</button> --}}
</div>

@endsection
