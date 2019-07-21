<div class="modal fade" tabindex="-1" role="dialog" id="modalDriver">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title-driver">Modal title</h4>
      </div>
      
      <div class="modal-body-driver" style="padding:10px">
            <div class="row" style="padding:10px">
                  <div class="col-sm-12"> 
                          {{ csrf_field() }}
                          <input type="hidden" value="0" id="iddriver">
                          <div class="form-group">
                                <label for="">Nombre</label>
                                <input type="text" id="firstname" class="form-control">
                          </div>
                          <div class="form-group">
                                 <label for="">Apellido</label>
                                 <input type="text"  id="lastname" class="form-control">
                          </div>
                         <div class="form-group">
                                <label for="">Licencia</label>
                                <input type="text"  id="drivernumber" class="form-control">
                         </div>
                         <div class="form-group">
                                <label for="">Sexo</label>
                                <select id="sex" class="form-control" >
                                  <option value="1">Masculino</option>
                                  <option  value="2">Femenino</option>
                                  <option  value="3">Otro</option>
                                </select>
                         </div> 
                         <div class="form-group">
                                <label for="">Fecha de nacimiento</label>
                                <input type="date"  id="birthdate" class="form-control">
                         </div> 
                  </div>
            </div>
      
      </div>
     
      <div class="modal-footer-driver" style="padding:10px; text-align: right;">
        <button type="button" class="btn btn-danger" id="delete_driver" onclick="deleteDriver()"  style="/* text-align: left; */float: left;margin-left: 10px;">Eliminar</button>
        <button type="button" class="btn btn-primary" id="modal_save_driver" onclick="saveDriver()">Guardar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->