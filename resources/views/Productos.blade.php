@extends('principal')
@section('Contenido')

<div class="container">
<h1> Productos </h1>

<div class="btn-container" >
    <button class="btn">Agregar</button>
  </div>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Producto 1</td>
            <td>$10.00</td>
            <td>100</td>
            <td>Editar y Eliminar</td>
        </tr>
    </tbody>
</table>

</div>

@endsection
