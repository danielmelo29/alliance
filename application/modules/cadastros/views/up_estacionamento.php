<div class="container-fluid">
	<div class="row-fluid">
			<div class="span12"></div>
	
	<div>
	
		
		 <form class="form-horizontal" action="cadastros/add_estacionamento" method="post" >
			
			<div class="control-group">
			<label class="control-label" >N° id</label>
			<div class="controls">
				<input readonly="readonly" value=" <?php echo $query[0]->ID_GARAGEM?>"  type="text"  />
			</div>
			</div>
		
			
			
			<div class="control-group">
			<label class="control-label" >Vaga</label>
			<div class="controls">
				<input readonly="readonly" value="<?php echo $query[0]->GAR_VAGA?>"   type="text"   />
			</div>
			</div>
		
			<div class="control-group">
			<label class="control-label">Apartamento</label>
			<div class="controls">
				
				<input type="text" value="<?php echo $query[0]->APA_APARTAMENTO?>" readonly="readonly"  />
				
				</div>
			</div>
			
		
			<div class="control-group">
			<label class="control-label">Obs.</label>
			<div class="controls">
				<textarea readonly="readonly"  rows="4"> <?php  if ($query[0]->GAR_OBS == ' '){echo 'Não existe observações para este registro'; }else{ echo $query[0]->GAR_OBS;} ; ?>  </textarea>
			</div>
			</div>
				
			<div class="control-group">
			<label class="control-label" >Vaga</label>
			<div class="controls">
				<a href=<?php echo base_url('cadastros/estacionamento')?> data-toggle="modal" class="btn btn-primary btn-danger" > <i class="icon-off"></i> Cancelar</a>
	
				<a href="#add_area_modal" data-toggle="modal" class="btn btn-primary btn-success" ><i class="icon-pencil"></i> Editar garagem</a>
	
			</div>
			</div>
				</form>		
		
	
	</div>
	</div>
	</div>
	
	<!-- Modal -->
	          <div id="add_area_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-header">
		  	  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		  	  <h3 id="myModalLabel"> Cadastro vaga de estacionamento </h3>
		 	  </div>
		 	  <div class="modal-body">
		    	
		    	<form class="form-horizontal" action=<?php echo base_url('cadastros/update_estacionamento')  ?> method="post" >
			
			<div class="control-group">
			<label class="control-label" >N° id</label>
			<div class="controls">
				<input name="id_area" readonly="readonly" value=" <?php echo $query[0]->ID_GARAGEM?>"  type="text"  />
			</div>
			</div>
		
			
			
			<div class="control-group">
			<label class="control-label" >Vaga</label>
			<div class="controls">
				<input name="vaga"  value="<?php echo $query[0]->GAR_VAGA?>"   type="text"   />
			</div>
			</div>
		
			<div class="control-group">
			<label class="control-label">Apartamento</label>
			<div class="controls">
				
				<select name="id_apt" >
					<?php foreach ($query2 as $linha) {
						echo "<option value=$linha->ID_APARTAMENTO>  $linha->APA_APARTAMENTO</ooption>";
					} ?>
				</select>
				</div>
			</div>
			
		
			<div class="control-group">
			<label class="control-label">Obs.</label>
			<div class="controls">
				<textarea  name="vaga_obs" rows="4"> <?php  if ($query[0]->GAR_OBS == ' '){echo 'Não existe observações para este registro'; }else{ echo $query[0]->GAR_OBS;} ; ?>  </textarea>
			</div>
			</div>
				
				
			 </div>
		  	 <div class="modal-footer">
		     <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Fechar</button>
		     <button class="btn btn-primary">Cadastrar</button>
		  	 </form>
		  	 </div>
			 </div>
	
			
		

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url('assets/js/jquery-2.0.3.min.js')?>'>"+"<"+"/script>");
		</script>
		
		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url('assets/js/jquery-2.0.3.min.js')?>'>"+"<"+"/script>");
		</script>
		
		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		
		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
<?php echo '<script src='.base_url("assets/js/ace.min.js").'></script>' ?>	
<?php echo '<script src='.base_url("assets/js/jquery-2.0.3.min.js").'></script>' ?>	
<?php echo '<script src='.base_url("assets/js/bootstrap.min.js").'></script>' ?>	
<?php echo '<script src='.base_url("assets/js/jquery-ui-1.10.3.custom.min.js").'></script>' ?>	
<?php echo '<script src='.base_url("assets/js/jquery.ui.touch-punch.min.js").'></script>' ?>	
<?php echo '<script src='.base_url("assets/js/jquery.slimscroll.min.js").'></script>' ?>	
<?php echo '<script src='.base_url("assets/js/jquery.easy-pie-chart.min.js").'></script>' ?>	
<?php echo '<script src='.base_url("assets/js/jquery.sparkline.min.js").'></script>' ?>	
<?php echo '<script src='.base_url("assets/js/flot/jquery.flot.min.js").'></script>' ?>	
<?php echo '<script src='.base_url("assets/js/flot/jquery.flot.pie.min.js").'></script>' ?>	
<?php echo '<script src='.base_url("assets/js/flot/jquery.flot.resize.min.js").'></script>' ?>	
<?php echo '<script src='.base_url("assets/js/ace-elements.min.js").'></script>' ?>	
<?php echo '<script src='.base_url("assets/js/ace.min.js").'></script>' ?>

