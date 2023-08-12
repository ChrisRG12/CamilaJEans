@php
   $rol = auth()->user()->Tipo;
   if ($rol == "Administrador") {
        $plantilla = "principal"; // Cambia 'plantilla_administrador' por el nombre de la plantilla para administradores.
   } elseif ($rol == "Tienda") {
        $plantilla = "plantilla"; // Cambia 'plantilla_tienda' por el nombre de la plantilla para tiendas.
   } else {
        $plantilla = "plantilla"; // Plantilla por defecto en caso de otros roles o valores.
   }
@endphp
@extends($plantilla)
@section('contenido')


@if(session()->has('Eliminado'))
{!! 
" <script> 
      Swal.fire(
      'Atendido',
      'Pedido Atendido',
      'success'  
) </script> "!!}
@endif


<div class="contenedor">

    <div class="btn-contenedor" >
        <a href="#">
        <button class="btn" style="background-color:rgb(40, 179, 114)"> Todos los pedidos </button> </a>
    </div>
    </div>
    
    <div class="grid-container text-center">
    
        @foreach ($Pedidos as $Tienda)
    
          <div class="tarjeta">
            <div class="tarjeta-header"> <span>Fecha:</span>  {{ $Tienda->created_at }}</div>
            <div class="tarjeta-body"> <span>Nomnre del Producto:</span> {{ $Tienda->nombre }}</div>
      
            <div class="tarjeta-footer">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalVer{{$Tienda->id}}">
                    Ver Pedido</i>
                  </button>
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalEliminar{{$Tienda->id}}">
                    Atender</i>
                  </button>
            </div>
          </div>

          @include('verPedidos')
          @include('EliminarPedido')
          

        @endforeach
      </div>
      

@stop