	
	<a href="#add_area_modal" data-toggle="modal" class="btn btn-primary btn-success" > + Add área</a>
	
	
	<div class="container-fluid">
	<div class="row-fluid">
	<div class="span12">
	</div>
	
	<div>
	
		
		
		
	
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
		     <form class="form-horizontal" action="cadastros/add_area" method="post" >
			<div class="control-group">
			<label class="control-label" >Áreas</label>
			<div class="controls">
				<input name="area" type="text" placeholder="Piscina,churrascaria,etc..." />
			</div>
			</div>
		
			<div class="control-group">
			<label class="control-label">Obs.</label>
			<div class="controls">
				<textarea name="obs_area" rows="4"> </textarea>
			</div>
			</div>
			</div>
		  	<div class="modal-footer">
		    <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Fechar</button>
		    <button class="btn btn-primary">Cadastrar</button>
		  	</form>
		  	</div>
			</div>
	
	
	
	
	
	
		<div class="table-header"> <i class="icon-leaf"></i> <span>Modelos cadastrados</span></div>
	<table id="tabela_area" class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th> N° id</th>
				<th> Área</th>
				<th> Obser.</th>
				<th>Ações</th>			
			</tr>	
		</thead>	
		<tbody>
				<?php foreach ($query as $linha) {
					echo '<tr>';
					echo "<td>$linha->ID_AREA</td>";
					echo "<td>$linha->ARE_NOME </td>";
					echo "<td>$linha->ARE_OBS </td>";
					echo "<td><a title=Delete_$linha->ARE_NOME class=red href=".base_url('cadastros/delete_area').'/'.$linha->ID_AREA."><i class=icon-trash></i> </a>|";
				 			echo "<a title=Edit_$linha->ARE_NOME class=green href=".base_url('cadastros/get_update_area').'/'.$linha->ID_AREA."> <i class=icon-pencil></i> </a></td>";
				 			
					echo '</tr>';
				} ?>			
		</tbody>
	</table>

	


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


