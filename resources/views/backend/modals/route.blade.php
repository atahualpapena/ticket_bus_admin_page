<div class="modal fade" tabindex="-1" role="dialog" id="modalRoute">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title-route">Modal title</h4>
      </div>
      
      <div class="modal-body-route" style="padding:10px">

                  <div>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#generals" aria-controls="generals" role="tab" data-toggle="tab">Generales</a></li>
                          <li role="presentation"><a href="#horary" aria-controls="horary" role="tab" data-toggle="tab">Horarios</a></li>
                          <li role="presentation"><a href="#history" aria-controls="history" role="tab" data-toggle="tab">Historial</a></li> 
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                          <div role="tabpanel" class="tab-pane active" id="generals"><br>
                                  <div class="col-sm-12"> 
                                          {{ csrf_field() }}
                                          <input type="hidden" value="0" id="idBus">
                                          <div class="form-group">
                                                <label for="">Punto de partida</label>
                                                <input type="text" id="idplate" class="form-control">
                                          </div>
                                          <div class="form-group">
                                                <label for="">Destino</label>
                                                <input type="text"  id="yearBus" class="form-control">
                                          </div>
                                        <div class="form-group">
                                                <label for="">Precio</label>
                                                <input type="text"  id="capacityBus" class="form-control">
                                        </div> 
                                </div>
                          </div>
                          <div role="tabpanel" class="tab-pane" id="horary"><br>
                                  <div class="col-sm-12"> 
                                            <table id="horary_table" class="table table-bordered table-hover table-condensed"> 
                                                    <thead>
                                                      <th>Descripción</th>
                                                      <th>Desde</th>
                                                      <th>Hasta</th>
                                                      <th>Precio</th>
                                                    </thead>
                                                    <tbody> 
                                                    </tbody>
                                                  </table> 
                  
                                                  <nav aria-label="Page navigation ">
                                                    <ul class="pager">
                                                      <li class="previous disabled" id="horary_prev" ><a href="#">← Anterior</a></li> 
                                                      <li id="info_pag_horary"> </li> 
                                                      <li class="next" id="horary_next" ><a href="#">Siguiente →</a></li>
                                                    </ul> 
                                                    <div class="col-sm-6"><span></span></div>
                                                  </nav> 
                                 </div>
                          </div>
                          <div role="tabpanel" class="tab-pane" id="history">
                          
                          </div> 
                        </div>

                      </div>
            <div class="row" style="padding:10px">
                  <div class="col-sm-12"> 
                          {{ csrf_field() }}
                  </div>
            </div>
      
      </div>
     
      <div class="modal-footer-route" style="padding:10px; text-align: right;">
        <button type="button" class="btn btn-danger" id="delete_route" onclick="deleteroute()"  style="/* text-align: left; */float: left;margin-left: 10px;">Eliminar</button>
        <button type="button" class="btn btn-primary" id="modal_save_route" onclick="saveroute()">Guardar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->