	
<div class="container-fluid">
	<div class="row-fluid">
	<div class="span12">
	</div>
	
	<div class="">
	
	
	
	<form class="form-horizontal" action="cadastros/add_apartamento" method="post" >
		
		<div class="control-group">
			<label class="control-label" >N° id</label>
			<div class="controls">
				<input  name="apt" type="text" value=<?php echo $query[0]->ID_APARTAMENTO ?> placeholder="N° do apartamento..." disabled/>
			</div>
		</div>
		
		
		<div class="control-group">
			<label class="control-label" >Apartamento</label>
			<div class="controls">
				<input name="apt" type="text" value=<?php echo $query[0]->APA_APARTAMENTO ?> placeholder="N° do apartamento..." disabled/>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" >Ramal</label>
			<div class="controls">
				<input name="ramal" type="text" placeholder="N° do ramal apartamento..."  value=<?php echo $query[0]->APA_RAMAL ?> />
			</div>
			</div>
		
		
		<div class="control-group">
			<label class="control-label">Obs.</label>
			<div class="controls">
				<textarea   name="obs_apt"  rows="4" disabled> <?php  if ($query[0]->APA_OBS == ' '){echo 'Não existe observações para este registro'; }else{ echo $query[0]->APA_OBS;} ; ?> </textarea>
			</div>
		</div>
		
		<div class="control-group">
			<div class="controls">
				
				<?php echo "<a class='btn btn-danger btn-primary' href=".base_url('cadastros/apartamento').">Cancelar</a>"?>
				<a data-toggle='modal' href="#edit_apt_modal"  role='button' class="btn btn-primary" type="submit">Atualizar</a>
			</div>
		</div>
	</form>
	
	</div>
	</div>
	</div>


				
				  
		
		
		
		<!-- Modal -->
		<div id="edit_apt_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">Editar apartamento</h3>
		</div>
		<div class="modal-body">
		<form class="form-horizontal" action=<?php echo base_url("cadastros/update_apartamento")?>   method="post" >
		<div class="control-group">
			
			<div class="control-group">
			<label class="control-label" >N° id</label>
			<div class="controls">
				<input  name="n_apt" readonly="readonly" type="text" value=<?php echo $query[0]->ID_APARTAMENTO ?> placeholder="N° do apartamento..."/>
			</div>
		</div>
		
			
			
			<label class="control-label" >Apartamento</label>
			<div class="controls">
				<input name="apt" type="text" placeholder="N° do apartamento..."  value=<?php echo $query[0]->APA_APARTAMENTO ?> />
			</div>
			</div>
		
		
			<div class="control-group">
			<label class="control-label" >Ramal</label>
			<div class="controls">
				<input name="ramal" type="text" placeholder="N° do ramal apartamento..."  value=<?php echo $query[0]->APA_RAMAL ?> />
			</div>
			</div>
		
			
			
			
			<div class="control-group">
			<label class="control-label">Obs.</label>
			<div class="controls">
				<textarea name="obs_apt" rows="4"><?php echo $query[0]->APA_OBS ?> </textarea>
			</div>
			</div>
			</div>
		
		
		<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Fechar</button>
		<button class="btn btn-primary">Salvar mudanças</button>
		</form>
		</div>
		</div>
		
	
	
	
	
	
	
	

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


<script>
	$(function($){
		
		$('#tabela_apt').dataTable() ;
		
		
	})
</script>
