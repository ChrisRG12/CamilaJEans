@extends('principal')
@section('Contenido')

@if(session()->has('confirmacion')) 
{!! " <script> Swal.fire(
 'Correcto!',
 'Producto Guardado!',
 'success'  ) </script> "!!}

@endif

@if(session()->has('Eliminado')) 
{!! " <script> Swal.fire(
 'Correcto!',
 'Recuerdo Eliminado!',
 'success'  ) </script> "!!}

@endif


<div class="container">

<div class="btn-container" >
    <button class="btn">Agregar</button>
  </div>


 

<table>
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
                <a class="btn btn-secondary"> Editar</a>
                <a class="btn btn-secondary"> Eliminar</a>
            </td>
        </tr>
    </tbody>
    @endforeach

</table>

</div>

@endsection
