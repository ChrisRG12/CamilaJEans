@extends('plantilla')

@section('contenido')


@if(session()->has('Error'))
{!! 
" <script> 
  Swal.fire({
  icon: 'error',
  title: 'Usuario Incorrecto',
  text: 'Revise sus credenciales!',
}) </script> "!!}
@endif


<div class="container w-75 mt-5 rounded shadow">
    <div class="row align-items-stretch">
      <!--md mediano, lg largo, xl extralargo-->
      
      <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 " style="display: flex; aling-items: center; justify-content: center;">
        <img src="\imgs\Camila.png" width="480" height="700" alt=""> 
        {{-- <video src="\ima\vidd.mp4" width="110%" autoplay muted loop></video> --}}
      </div>
  
      <div class="col bg-white p-5 rounded-end" style="color: rgb(57, 36, 58)">
        <div class="px-lg-5 pt-lg-4 pb-lg-3 w-100 border-0" id="imagen" style="display: flex; aling-items: center; justify-content: center;">
            <img src="\ima\Mac.png" width="150" height="120" alt="">
            {{-- <video src="\ima\vidd.mp4" width="150" height="120" autoplay muted loop></video> --}}
          </div>
          <h2 class="fw-bold text-center pt-3 mb-5 ">Iniciar Sesion</h2>
          @if ($errors->any())

@foreach ($errors->all() as $error)
  
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong> Falntan campos </strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endforeach  
@endif


          <!--Form-->
  
          <form method="post" action="Incia/Sesion" >
            @csrf

              <div class="mb-4">

                <label for="text" class="form-label">Usuario</label>
                <input type="text" class="form-control" name="txtuser">
              </div>

              <div class="mb-4">

                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="txtcontra">
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-dark">Iniciar Sesion</button>
              </div>

              <div class="my-3">
                {{-- <span>¿No tienes cuenta?<a href="{{route('Usuario.create')}}" class="nav-link"> <p style="color: blue">Registrate </p></a></span> --}}
              </div>
  
          </form>
  
      </div>
    </div>
  </div> 
@stop