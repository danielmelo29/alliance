<a href="#add_area_modal" data-toggle="modal" class="btn btn-primary btn-success" > + Add garagem</a>
	
	
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
		  	  <h3 id="myModalLabel"> Cadastro vaga de estacionamento </h3>
		 	  </div>
		 	  <div class="modal-body">
		     <form class="form-horizontal" action="cadastros/update_estacionamento" method="post" >
			<div class="control-group">
			<label class="control-label" >Vaga</label>
			<div class="controls">
				<input name="vaga" type="text" placeholder="101-b,102-a,etc..." />
			</div>
			</div>
		
			<div class="control-group">
			<label class="control-label">Apartamento</label>
			<div class="controls">
				<select name="vaga_apt">
					<?php foreach ($query2 as $linha) {
						echo "<option value=$linha->ID_APARTAMENTO>  $linha->APA_APARTAMENTO</ooption>";
					} ?>
				</select>
			</div>
			</div>
			
		
			<div class="control-group">
			<label class="control-label">Obs.</label>
			<div class="controls">
				<textarea name="vaga_obs" rows="4"> </textarea>
			</div>
			</div>
			
			</div>
		  	<div class="modal-footer">
		    <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Fechar</button>
		    <button class="btn btn-primary">Cadastrar</button>
		  	</form>
		  	</div>
			</div>
	
			
				
			<div class="table-header"><i class='icon-zoom-in bigger-130'></i> <a href="<?php echo $blue_link ?> " style='color: #fff'><?php echo $blue?></a></div>	
 	 		<table id="tabela_garagem" class="table table-striped table-bordered table-hover"> 
			<thead>
			<th>N° id</th>
			<th>Apart.</th>
			<th>Vaga</th>
			<th>Obs</th>
			<th>Data cadastro</th>
			<th>Ações</th>
			</thead>
			<tbody>
			<?php 
			foreach ($query as $linha) {
			echo '<tr>';
			echo "<td>$linha->ID_GARAGEM</td>";
			echo "<td>$linha->APA_APARTAMENTO</td>";
			echo "<td>$linha->GAR_VAGA</td>";
			echo "<td>$linha->GAR_OBS</td>";
			echo "<td>$linha->GAR_DATA_CADASTRO</td>" ;
			echo "<td>
			<a title=Deletar_apt_$linha->GAR_VAGA class=red href=".base_url('cadastros/delete_estacionamento').'/'.$linha->ID_GARAGEM."><i class=icon-trash></i></a>
			|<a id=edit_apt title=Editar_apt_$linha->GAR_VAGA class=green href=".base_url('cadastros/get_update_estacionamento').'/'.$linha->ID_GARAGEM."><i class=icon-pencil></i></a>
			</td>"; 
			echo '</tr>';
			}?>
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
	$('#tabela_garagem').dataTable();
	})
	
	</script>


