
	
	
	<a href="#add_veiculo_modal" data-toggle="modal" class="btn btn-primary btn-success" > + Add veiculo</a>
	
	
	
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
			</div>
			
			
		</div>	
	</div>
	
	
	
	
	<!-- Modal -->
	          <div id="add_veiculo_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-header">
		  	  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		  	  <h3 id="myModalLabel"> Cadastro de veículos</h3>
		 	  </div>
		 	  <div class="modal-body">
		     <form class="form-horizontal" action="cadastros/add_veiculo" method="post">
				<div class="control-group">	
				<label class="control-label">Veículo </label>
					<div class="controls">
					<input name="modelo_veiculo" type="text" class="span6" placeholder="motos,carros,barcos,etc...">
					</div>
				</div>	
			</div>
		  	<div class="modal-footer">
		    <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Fechar</button>
		    <button class="btn btn-primary">Cadastro</button>
		  	</form>
		  	</div>
			</div>
	
	
	<div class="table-header"> <i class="icon-leaf"></i> <span>Modelos cadastrados</span></div>
	<table id="tabela_veiculos" class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th> N° id</th>
				<th> Veiculo</th>
				<th>Ações</th>			
			</tr>	
		</thead>	
		<tbody>
				<?php 
				 foreach ($query as $linha)
				 	{
				 		echo "<tr>" ;
				 			echo "<td> $linha->ID_CAT_VEICULO</td>";
				 			echo "<td> $linha->CAT_VEICULO</td>";
				 			echo "<td><a title=Delete_$linha->CAT_VEICULO class=red href=".base_url('cadastros/del_veiculo').'/'.$linha->ID_CAT_VEICULO."><i class=icon-trash></i> </a>|";
				 			echo "<a title=Edit_$linha->CAT_VEICULO class=green href=".base_url('cadastros/get_update_veiculo').'/'.$linha->ID_CAT_VEICULO."> <i class=icon-pencil></i> </a></td>";
				 				
				 		echo "</tr>" ;
					}
				?>	
			
		</tbody>
	</table>	
	
	
	
	
	
	
	
	
	
	
	
	
		
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

