@extends('principal')
@section('Contenido')

@if(session()->has('confirmacion')) 
{!! " <script> Swal.fire(
 'Correcto!',
 'Producto Guardado!',
 'success'  ) </script> "!!}

@endif

@if(session()->has('Actualizar')) 
{!! " <script> Swal.fire(
 'Correcto!',
 'Producto Actualizado!',
 'success'  ) </script> "!!}

@endif


@if(session()->has('Eliminado')) 
{!! " <script> Swal.fire(
 'Correcto!',
 'Producto Eliminado!',
 'success'  ) </script> "!!}

@endif


<div class="contenedor">

<div class="btn-contenedor" >
    <a href="Agregar">
    <button class="btn" style="background-color:rgb(40, 179, 114)">Agregar Mercancia </button> </a>
</div>
</div>

<div class="grid-container text-center">

    @foreach ($ConsultaProductos as $consulta)

      <div class="tarjeta">
        <div class="tarjeta-header"> <span>Nombre:</span>  {{ $consulta->nombre }}</div>
        <div class="tarjeta-body"> <span>Precio:</span> {{ $consulta->precio }}</div>
        <div class="tarjeta-body"> <span>Codigo:</span> {{ $consulta->codigo }}</div>
        <div class="tarjeta-body"> <span>Stock:</span> {{ $consulta->stock }}</div>
  
        <div class="tarjeta-footer">
          <a href="{{route('Productos.edit' , $consulta->idProducto)}}" class="btn btn-warning"> Editar</a>
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalEliminar{{$consulta->idProducto}}">
            Eliminar <i class="bi bi-trash-fill"></i>
          </button>
        </div>
      </div>

      @include('EliminarProd')
      <!-- Puedes repetir las tarjetas para que se sigan mostrando en filas adicionales -->
    @endforeach
  </div>
  

@endsection
