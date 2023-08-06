

<!-- Modal -->
<div class="modal fade" id="modalEliminar{{$consulta->idProducto}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEliminar" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title text-center" id="staticBackdropLabel">Eliminar Producto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="{{route('Productos.destroy',$consulta->idProducto)}} ">
          @csrf
          {!!method_field('DELETE')!!}

        <div class="modal-body">


          <h5 class="text-primary text-center"> <span style="color: black">Nombre:</span> {{$consulta->nombre}} </h5>
          <h5 class="card-title text-center"> <span style="color: black">Codgio:</span>  {{$consulta->codigo}} </h5>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
        </div>

      </div>
    </div>
  </div>