@extends('principal')

@section('contenido')

@if(session()->has('confirmacion'))
{!! 
" <script> 
      Swal.fire(
      'Muy Bien Very Good!',
      'Usuario Guardado',
      'success'  
) </script> "!!}
@endif

@if(session()->has('Eliminado'))
{!! 
" <script> 
      Swal.fire(
      'Eliminado',
      'Usuario Eliminado',
      'success'  
) </script> "!!}
@endif


@if(session()->has('Actualizar'))
{!! 
" <script> 
      Swal.fire(
      'Muy Bien Very Good!',
      'Usuario Editado',
      'success'  
) </script> "!!}
@endif

<div class="contenedor">

    <div class="btn-contenedor" >
        <a href="Agregar">
        <button class="btn" style="background-color:rgb(40, 179, 114)"> Agregar Usuarios </button> </a>
    </div>
    </div>
    
    <div class="grid-container text-center">
    
        @foreach ($ConsultaUsuario as $consulta)
    
          <div class="tarjeta">
            <div class="tarjeta-header"> <span>Nombre:</span>  {{ $consulta->name }}</div>
            <div class="tarjeta-body"> <span>Tipo:</span> {{ $consulta->Tipo }}</div>
      
            <div class="tarjeta-footer">
              <a href="#" class="btn btn-warning"> Editar</a>
              <a href="#" class="btn btn-danger"> Borrar</a>
            </div>
          </div>

        @endforeach
      </div>
      

@stop