@extends('principal')
@section('contenido')

@if(session()->has('confirmacion')) 
{!! " <script> Swal.fire(
 'Correcto!',
 'Proveedor Guardado!',
 'success'  ) </script> "!!}

@endif

@if(session()->has('Actualizar')) 
{!! " <script> Swal.fire(
 'Correcto!',
 'Proveedor Actualizado!',
 'success'  ) </script> "!!}

@endif


@if(session()->has('Eliminado'))
{!! 
" <script> 
  Swal.fire({
  icon: 'error',
  title: 'Correcto',
  text: 'Proveedor Eliminado!',
}) </script> "!!}
@endif




<div class="contenedor">

<div class="btn-contenedor" >
    <a href="Provedores/Create">
    <button class="btn" style="background-color:rgb(40, 179, 114)"> Proveedores </button> </a>
</div>
</div>

<div class="grid-container text-center">

    @foreach ($ConsultaProveedor as $consulta)

      <div class="tarjeta">
        <div class="tarjeta-header"> <span>Nombre:</span>  {{ $consulta->nombre }}</div>
        <div class="tarjeta-body"> <span>Telefono:</span> {{ $consulta->telefono }}</div>
        <div class="tarjeta-body"> <span>Correo:</span> {{ $consulta->correo }}</div>
  
        <div class="tarjeta-footer">
          <a href="{{route('provedor.edit' , $consulta->idProvedor)}}" class="btn btn-warning"> Editar</a>
           <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalEliminarr{{$consulta->idProvedor}}">
            Eliminar <i class="bi bi-trash-fill"></i>
          </button> 
        </div>
      </div>

      @include('EliminarProv')
      <!-- Puedes repetir las tarjetas para que se sigan mostrando en filas adicionales -->
    @endforeach
  </div>
  

@endsection
