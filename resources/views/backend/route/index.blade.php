@include('backend.template.header') 
@include('backend.template.menu')
<div class="main-content">
			<div class="main"> 
			<div class="widget">  
								<div class="row" style="padding:20px;">
										<div class="col-sm-12">
												<div class="form-group"> 
																 
																<div class="input-group  "> 
																	<input type="text" class="form-control" id="search_route" onkeypress="searchroute()" placeholder="Escriba aqui...">
																	<div class="input-group-addon">
																		<li class="glyphicon glyphicon-search"></li>
																	</div>    
																</div>  
												</div>  
												<div class="form-group">   
																		<button class="btn btn-primary" onclick="addroute()">
																			<li class="glyphicon glyphicon-plus"></li>Agregar ruta
																		</button><br><br>

																<table id="route_table" class="table table-bordered table-hover table-condensed"> 
																	 <thead>
																		 <th>Nombre de la Ruta</th>
																		 <th>Desde</th>
																		 <th>Hasta</th>
																		 <th>Precio</th>
																	 </thead>
																	 <tbody> 
																	 </tbody>
																</table> 
 
																<nav aria-label="Page navigation ">
																	<ul class="pager">
																		<li class="previous disabled" id="route_prev" ><a href="#">← Anterior</a></li> 
																		<li id="info_pag_route"> </li> 
																		<li class="next" id="route_next" ><a href="#">Siguiente →</a></li>
																	</ul> 
																	<div class="col-sm-6"><span></span></div>
																</nav>  
												</div> 
										</div>   
						</div>
					</div> 
				</div>  
</div> 
<style>
td:hover
{
	cursor:pointer;
}
</style>
@include('backend.template.footer')
@include('backend.modals.route')
<script src="{{asset('js/routes/index.js')}}"></script>