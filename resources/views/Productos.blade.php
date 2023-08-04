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


<div class="container">

<div class="btn-container" >
    <button class="btnr">Agregar</button>
</div>


 

<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Codigo</th>
            <th>Stock</th>
            <th>Opciones</th>
        </tr>
    </thead>
    @foreach ($ConsultaProductos as $consulta)
    <tbody>
        <tr>
            <td>{{ $consulta->idProducto }}</td>
            <td>{{ $consulta->nombre }}</td>
            <td>{{ $consulta->precio }}</td>
            <td>{{ $consulta->codigo }}</td>
            <td>{{ $consulta->stock }}</td>
            <td>
                <a href="{{route('Productos.edit' , $consulta->idProducto)}}" class="btn btn-warning"> Editar</a>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalEliminar{{$consulta->idProducto}}">
                    Eliminar <i class="bi bi-trash-fill"></i>
                 </button>
            </td>
        </tr>
    </tbody>
    @include('EliminarProd')
    @endforeach

</table>

</div>

@endsection
