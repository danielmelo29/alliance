	
	
	
	<div class="container-fluid">
	<div class="row-fluid">
	<div class="span12">
	</div>
	
	<div>
	
	
		<form class="form-horizontal" action="cadastros/add_area" method="post" >
			
			<div class="control-group">
			<label class="control-label" >N° id</label>
			<div class="controls">
				<input  type="text" readonly="readonly" value="<?php echo $query[0]->ID_AREA?>" placeholder="Piscina,churrascaria,etc..." />
			</div>
			</div>
		
			
			
			<div class="control-group">
			<label class="control-label" >Áreas</label>
			<div class="controls">
				<input  type="text" readonly="readonly" value="<?php echo $query[0]->ARE_NOME?>"  placeholder="Piscina,churrascaria,etc..." />
			</div>
			</div>
		
			<div class="control-group">
			<label class="control-label">Obs.</label>
			<div class="controls">
				<textarea readonly="readonly" name="obs_area" rows="4"> <?php  if ($query[0]->ARE_OBS == ' '){echo 'Não existe observações para este registro'; }else{ echo $query[0]->ARE_OBS;} ; ?> </textarea>
			</div>
			</div>
			
			<div class="control-group">
				
			<div class="controls">
				<a href="#"  class="btn btn-primary btn-danger" ><i class="icon-off"></i> Cancelar</a>
	
				<a href="#add_area_modal" data-toggle="modal" class="btn btn-primary btn-success" ><i class="icon-pencil"></i> Editar área</a>
	
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
		  	  <h3 id="myModalLabel"> Cadastro de Área </h3>
		 	  </div>
		 	  <div class="modal-body">
		    
		     <form class="form-horizontal" action=<?php echo base_url('cadastros/update_area') ?> method="post" >
				
				<div class="control-group">
			<label class="control-label" >N° id</label>
			<div class="controls">
				<input name="id_area" type="text"  value="<?php echo $query[0]->ID_AREA?>" placeholder="Piscina,churrascaria,etc..." />
			</div>
			</div>
			
			<div class="control-group">
			<label class="control-label" >Áreas</label>
			<div class="controls">
				<input name="area"  type="text"  value="<?php echo $query[0]->ARE_NOME?>"  placeholder="Piscina,churrascaria,etc..." />
			</div>
			</div>
		
			<div class="control-group">
			<label class="control-label">Obs.</label>
			<div class="controls">
				<textarea name="are_obs"  name="obs_area" rows="4"> <?php  if ($query[0]->ARE_OBS == ' '){echo 'Não existe observações para este registro'; }else{ echo $query[0]->ARE_OBS;} ; ?> </textarea>
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

<!-- JS dependencies -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<?php echo '<script src='.base_url("assets/js/jquery.dataTables.min.js").'></script>' ?>	
<?php echo '<script src='.base_url("assets/js/jquery.dataTables.bootstrap.js").'></script>' ?>	


	<script>
		$(function($) {
	$('#tabela_area').dataTable();
	})
	
	</script>


