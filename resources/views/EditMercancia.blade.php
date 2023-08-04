@extends('principal')

@section('Contenido')


<div class="container mt-5 col-md-7">

<h3 class="display-2 text-center mb-5 fw-bold" style="color:#F9F8F8"> Camila Jeans</h3>
 @if ($errors->any())

  @foreach ($errors->all() as $error)
    
  <div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong> {{ $error }} </strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
 
  @endforeach  
@endif 


<div class="container">
    <div class="card text-center mb-5 mt-5 mx-auto" style="max-width: 400px; color:#F9F8F8">
      <div class="card-header">
        Agregar Mercancia
      </div>
  
      <div class="card-body">
        <form method="POST" action="{{route('Productos.store')}}">
          @csrf
  
          <div class="mb-3 d-flex">
            <label class="form-label me-3">Nombre:</label>
            <input type="text" class="form-control" name="txtnombre" value="{{ old('txtTitulo') }}">
            <p class="text-primary fst-Italic">
              {{ $errors->first('txtnombre') }}
            </p>
          </div>
  
          <div class="mb-3 d-flex">
            <label class="form-label me-3">Precio:</label>
            <input type="number" class="form-control" name="txtprecio" value="{{ old('txtprecio') }}">
            <p class="text-primary fst-Italic">
              {{ $errors->first('txtprecio') }}
            </p>
          </div>
  
          <div class="mb-3 d-flex">
            <label class="form-label me-3">Codigo:</label>
            <input type="text" class="form-control" name="txtcodigo" value="{{ old('txtcodigo') }}">
            <p class="text-primary fst-Italic">
              {{ $errors->first('txtcodigo') }}
            </p>
          </div>

          <div class="mb-3 d-flex">
            <label class="form-label me-3">Stock:</label>
            <input type="number" class="form-control" name="txtstock" value="{{ old('txtcodigo') }}">
            <p class="text-primary fst-Italic">
              {{ $errors->first('txtstock') }}
            </p>
          </div>
          
  
      </div>
  
      <div class="card-footer">
        <button type="submit" class="btn btn-secondary btn-lg">Guardar</button>
        </form>
      </div>
  
    </div>
  </div>

</div>
  

@stop