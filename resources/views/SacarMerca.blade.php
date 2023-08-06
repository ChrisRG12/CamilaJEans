@extends('principal')
@section('Contenido')


<div class="container">
    <div class="card text-center mb-5 mt-5 mx-auto" style="max-width: 400px; color:#0e0d0d">
      <div class="card-header">
        Agregar Mercancia
      </div>
  
      <div class="card-body">

          <form action="{{ route('Productos.stock', ['id' => $producto->idProducto]) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="stock_anterior">Stock anterior:</label>
            <input class="form-control" type="number" name="stock_anterior" id="stock_anterior" value="{{ $producto->stock }}" readonly>
    
            <label for="restar_stock">Restar del stock:</label>
            <input class="form-control" type="number" name="txtstock" id="restar_stock" required>
  
      </div>
  
      <div class="card-footer">
        <button type="submit" class="btn btn-secondary btn-lg">Actualizar</button>
        </form>
      </div>
  
    </div>
  </div>



@stop
