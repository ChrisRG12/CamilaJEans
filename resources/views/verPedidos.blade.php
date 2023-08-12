

<!-- Modal -->
<div class="modal fade" id="modalVer{{$Tienda->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalVer" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title text-center" id="staticBackdropLabel">Ver Pedido</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">


          <h5 class="text-primary text-center"> <span style="color: black">Tienda:</span> {{$Tienda->name}} </h5>
          <h5 class="text-primary text-center"> <span style="color: black">Nombre:</span> {{$Tienda->nombre}} </h5>
          <h5 class="text-primary text-center"> <span style="color: black">Codigo:</span> {{$Tienda->codigo}} </h5>
          <h5 class="text-primary text-center"> <span style="color: black">Piezas:</span> {{$Tienda->piezas}} </h5>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>