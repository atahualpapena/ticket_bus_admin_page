<div class="modal fade" tabindex="-1" role="dialog" id="modalBus">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title-bus">Modal title</h4>
      </div>
      
      <div class="modal-body-bus" style="padding:10px">
            <div class="row" style="padding:10px">
                  <div class="col-sm-12"> 
                          {{ csrf_field() }}
                          <input type="hidden" value="0" id="idBus">
                          <div class="form-group">
                                <label for="">Placa</label>
                                <input type="text" id="idplate" class="form-control">
                          </div>
                          <div class="form-group">
                                 <label for="">Año</label>
                                 <input type="text"  id="yearBus" class="form-control">
                          </div>
                         <div class="form-group">
                                <label for="">Capacidad</label>
                                <input type="text"  id="capacityBus" class="form-control">
                         </div>
                         <div class="form-group">
                                <label for="">Marca</label>
                                <input type="text"  id="brandBus" class="form-control">
                         </div>
                         <div class="form-group">
                                <label for="">Nota</label>
                                <textarea name=""  id="notesBus"  cols="30" rows="10" class="form-control"></textarea>
                         </div>
                  </div>
            </div>
      
      </div>
     
      <div class="modal-footer-bus" style="padding:10px; text-align: right;">
        <button type="button" class="btn btn-danger" onclick="deleteBus()"  style="/* text-align: left; */float: left;margin-left: 10px;">Eliminar</button>
        <button type="button" class="btn btn-primary" id="modal_save_bus" onclick="saveBus()">Guardar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->