<a href="#add_apartamento_modal" data-toggle="modal" class="btn btn-primary btn-success" > + Add apartamento</a>
		
		
<div class="container-fluid">
	<div class="row-fluid">
	<div class="span12">
	</div>
	
	<div class="">
	
	
	
		

		<!-- Modal -->
		<div id="add_apartamento_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-header">
		  	  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		  	  <h3 id="myModalLabel">Modal header</h3>
		 	  </div>
		 	  <div class="modal-body">
		      <form class="form-horizontal" action="cadastros/add_apartamento" method="post" >
			 
			  <div class="control-group">
			  <label class="control-label" >Apartamento</label>
			  <div class="controls">
			 <input name="apt" type="text" placeholder="N° do apartamento..." />
			 </div>
			 </div> 
			
			 <div class="control-group">
			  <label class="control-label" >Ramal</label>
			  <div class="controls">
			 <input name="ramal" type="text" placeholder="N° do ramal apartamento..." />
			 </div>
			 </div> 
			
			
			
			<div class="control-group">
			<label class="control-label">Obs.</label>
			<div class="controls">
				<textarea name="obs_apt" rows="4"> </textarea>
			</div>
			</div>
	
		 	 </div>
		  	<div class="modal-footer">
		    <button class="btn" data-dismiss="modal" aria-hidden="true">Fechar</button>
		    <button class="btn btn-primary">Salvar mudanças</button>
		  	</form>
		  	</div>
			</div>

			<br></br>
	
	
	

	<div class="table-header"><i class='icon-zoom-in bigger-130'></i> <a href="<?php echo $blue_link ?> " style='color: #fff'><?php echo $blue?></a></div>	
 	 <table id="tabela_apt" class="table table-striped table-bordered table-hover"> 
		<thead>
			<th>N° id</th>
			<th>Apartamento</th>
			<th>Ramal</th>
			<th>Obs</th>
			<th>Ações</th>
			
		</thead>
		<tbody>
			
				   <?php 
				   foreach ($query as $linha) {
					echo '<tr>';
					echo "<td>$linha->ID_APARTAMENTO</td>";   
				   	echo "<td>$linha->APA_APARTAMENTO</td>";
					echo "<td>$linha->APA_RAMAL</td>";
				   	echo "<td>$linha->APA_OBS</td>";
				
				   	echo "<td>
				   		 <a title=Deletar_apt_$linha->APA_APARTAMENTO class=red href=".base_url('cadastros/del_apartamento').'/'.$linha->ID_APARTAMENTO."><i class=icon-trash></i></a>
				   	    |<a id=edit_apt title=Editar_apt_$linha->APA_APARTAMENTO class=green href=".base_url('cadastros/get_update_apartamento').'/'.$linha->ID_APARTAMENTO."><i class=icon-pencil></i></a>
				   	     </td>"; 
				   	echo '</tr>';
					
				   }
				   ?>
			</tr>		
		</tbody>
	</table>
	

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
	$(function($){
		
		$('#tabela_apt').dataTable() ;
	})
</script>





