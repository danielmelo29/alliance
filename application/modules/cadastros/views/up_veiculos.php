
	
	
	
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
			</div>
			
			
		</div>	
	</div>
		
			 <form class="form-horizontal" action="cadastros/add_veiculo" method="post">
				
				<div class="control-group">	
				<label class="control-label">N° id </label>
					<div class="controls">
					<input name="modelo_veiculo" value="<?php echo $query[0]->ID_CAT_VEICULO?>" type="text" readonly="readonly"  class="span6" placeholder="motos,carros,barcos,etc...">
					</div>
				</div>	
				
				
				
				<div class="control-group">	
				<label class="control-label">Veículo </label>
					<div class="controls">
					<input name="modelo_veiculo" value="<?php echo $query[0]->CAT_VEICULO?>" type="text" class="span6" readonly="readonly" placeholder="motos,carros,barcos,etc...">
					</div>
				</div>	
				
				<div class="control-group">
				 <div class="controls">
					<a class="btn btn-primary btn-danger" href=<?php echo base_url('cadastros/veiculos')?> <i class="icon-off"></i>Cancelar</a>
				
					<a href="#edit_veiculo_modal" data-toggle="modal" class="btn btn-primary btn-success" > <i class="icon-pencil"></i> Edit veiculo</a>
	
				</div>
				</div>
				
				
	
	
				</form>
		
		
	
	
	<!-- Modal -->
	          <div id="edit_veiculo_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-header">
		  	  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		  	  <h3 id="myModalLabel"> Cadastro de veículos</h3>
		 	  </div>
		 	  <div class="modal-body">
		     <form class="form-horizontal" action=<?php echo base_url('cadastros/update_veiculo') ?> method="post">
			
				<div class="control-group">	
				<label class="control-label">N° id </label>
					<div class="controls">
					<input name="id_veiculo" value="<?php echo $query[0]->ID_CAT_VEICULO?>" type="text" readonly="readonly"  class="span6" placeholder="motos,carros,barcos,etc...">
					</div>
				</div>	
				
				<div class="control-group">	
				<label class="control-label">Veículo </label>
					<div class="controls">
					<input name="modelo_veiculo" value="<?php echo $query[0]->CAT_VEICULO?>" type="text" class="span6"  placeholder="motos,carros,barcos,etc...">
					</div>
				</div>	
				


			</div>
		  	<div class="modal-footer">
		    <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Fechar</button>
		    <button class="btn btn-primary">Salvar mudanças</button>
		  	</form>
		  	</div>
			</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
		
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<!--<![endif]-->

		<!--[if IE]>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <![endif]-->

		<!--[if !IE]>-->

		
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
   




<script src="assets/js/jquery.colorbox-min.js"></script>
	

	
	<script type="text/javascript">
	$(function($) {
	$('#tabela_veiculos').dataTable();
	})
	</script>

