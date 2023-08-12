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
            Solicitar Pedido
          </div>
      
          <div class="card-body">
            <form method="POST" action="{{ route('pedidos.store')}}">
              @csrf
      
              {{-- Select 1 --}}
              <div class="mb-1 text-center">
                <label for="text" class="form-label" placeholder="Autor"></label>
                <select class="form-select" name="txtproducto" aria-label="Default select example">
                    <option selected>Nombre del producto:</option>
                    
                    @foreach ($ConsultaProductos as $producto)
                        <option value="{{ $producto->nombre }}">{{ $producto->nombre }}</option>
                    @endforeach
                
                </select>
                <p class="text-secondary fst-Italic">
                    {{$errors->first('txtAutor')}}
                </p>
            </div>
      
              {{-- Select 2 --}}
              <div class="mb-1 text-center">
                <label for="text" class="form-label" placeholder="Autor"></label>
                <select class="form-select" name="txtcodigo" aria-label="Default select example">
                    <option selected>Codigo del producto:</option>
                    
                    @foreach ($ConsultaProductos as $producto)
                        <option value="{{ $producto->codigo }}">{{ $producto->codigo }}</option>
                    @endforeach
                
                </select>
                <p class="text-secondary fst-Italic">
                    {{$errors->first('txtAutor')}}
                </p>
            </div>
      
              <div class="mb-3 d-flex" style="color: black">
                <label class="form-label me-3">Piezas:</label>
                <input type="number" class="form-control" name="txtpiezas" value="{{ old('txttelefono') }}">
                <p class="text-primary fst-Italic">
                  {{ $errors->first('txtcodigo') }}
                </p>
              </div>
              
      
          </div>
      
          <div class="card-footer">
            <button type="submit" class="btn btn-secondary btn-lg">Solicitar</button>
            </form>
          </div>
      
        </div>
      </div>
    
    </div>



















@endsection