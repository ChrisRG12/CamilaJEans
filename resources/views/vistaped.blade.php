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

@if(session()->has('confirmacion'))
{!! 
" <script> 
      Swal.fire(
      'Muy Bien!',
      'Pedido Guardado',
      'success'  
) </script> "!!}
@endif

@if(session()->has('Eliminado'))
{!! 
" <script> 
      Swal.fire(
      'Eliminado',
      'Pedido Eliminado',
      'success'  
) </script> "!!}
@endif


@if(session()->has('Actualizar'))
{!! 
" <script> 
      Swal.fire(
      'Muy Bien!',
      'Pedido Editado',
      'success'  
) </script> "!!}
@endif

<div class="contenedor">

    <div class="btn-contenedor" >
        <a href="pedidos">
        <button class="btn" style="background-color:rgb(40, 179, 114)"> Agregar Pedidos </button> </a>
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
                  <a href="{{route('pedidos.edit' , $Tienda->id)}}" class="btn btn-warning"> Editar</a>
            </div>
          </div>

          @include('verPedidos')

        @endforeach
      </div>
      

@stop