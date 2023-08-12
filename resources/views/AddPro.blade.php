@extends('principal')

@section('contenido')


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
    <div class="card text-center mb-5 mt-5 mx-auto" style="max-width: 400px; color:#0e0d0d">
      <div class="card-header">
        Agregar Provedoor
      </div>
  
      <div class="card-body">
        <form method="POST" action="{{route('provedor.store')}}">
          @csrf
  
          <div class="mb-3 d-flex" style="color: black">
            <label class="form-label md-3">Nombre:</label>
            <input type="text" class="form-control" name="txtnombre" value="{{ old('txtnombre') }}">
            <p class="text-primary fst-Italic">
              {{ $errors->first('txtnombre') }}
            </p>
          </div>
  
          <div class="mb-3 d-flex" style="color: black">
            <label class="form-label me-3">Correo:</label>
            <input type="email" class="form-control" name="txtcorreo" value="{{ old('txtcorreo') }}">
            <p class="text-primary fst-Italic">
              {{ $errors->first('txtprecio') }}
            </p>
          </div>
  
          <div class="mb-3 d-flex" style="color: black">
            <label class="form-label me-3">Telefono:</label>
            <input type="number" class="form-control" name="txttelefono" value="{{ old('txttelefono') }}">
            <p class="text-primary fst-Italic">
              {{ $errors->first('txtcodigo') }}
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