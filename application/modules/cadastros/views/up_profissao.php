	
	<div class="table-header"></div>
	
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
			</div>
				
				<form class="form-horizontal" action="cadastros/add_profissao" method="post" >
				
				<div class="control-group">	
				<label class="control-label">N° id </label>
					<div class="controls">
					<input readonly="readonly" name="add_profissao" type="text" class="span1" value="<?php echo $query[0]->ID_PROFISSAO?>" />
					</div>
				</div>	
			
				
				
				<div class="control-group">	
				<label class="control-label">Profissão </label>
					<div class="controls">
					<input readonly="readonly" name="add_profissao" type="text" class="span6" value="<?php echo $query[0]->PRO_PROFISSAO?>" >
					</div>
				</div>	
			
			<div class="control-group">	
				<label class="control-label">Obs. </label>
					<div class="controls">
					<textarea readonly="readonly" name="add_obs" placeholder="Comentário..."><?php  if ($query[0]->PRO_OBS == ' '){echo 'Não existe observações para este registro'; }else{ echo $query[0]->PRO_OBS;} ; ?></textarea>
					</div>
			</div>	
			
			<div class="control-group">	
				<div class="controls">
					<a href="#add_profissao_modal" data-toggle="modal" class="btn btn-primary btn-danger" ><i class="icon-off"></i>Editar profissao</a>

					<a href="#add_profissao_modal" data-toggle="modal" class="btn btn-primary btn-success" ><i class="icon-pencil"></i> Editar profissao</a>

					</div>
			</div>	
			
			
			</form>
			
			
		</div>	
	</div>
	
	
	
	
	<!-- Modal -->
	          <div id="add_profissao_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-header">
		  	  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		  	  <h3 id="myModalLabel"> Cadastro de profissões</h3>
		 	  </div>
		 	  <div class="modal-body">
		     <form class="form-horizontal" action="cadastros/add_profissao" method="post">
				<div class="control-group">	
				<label class="control-label">N° id </label>
					<div class="controls">
					<input  name="add_profissao" type="text" class="span1" value="<?php echo $query[0]->ID_PROFISSAO?>" />
					</div>
				</div>	
			
				
				
				<div class="control-group">	
				<label class="control-label">Profissão </label>
					<div class="controls">
					<input name="add_profissao" type="text" class="span6" value="<?php echo $query[0]->PRO_PROFISSAO?>"  >
					</div>
				</div>	
			

			<div class="control-group">	
				<label class="control-label">Obs. </label>
					<div class="controls">
					<textarea  name="add_obs" placeholder="Comentário..."><?php  if ($query[0]->PRO_OBS == ' '){echo 'Não existe observações para este registro'; }else{ echo $query[0]->PRO_OBS;} ; ?></textarea>
					</div>
			</div>	
			
			
			</div>
			<div class="modal-footer">
		    <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Fechar</button>
		    <button class="btn btn-primary">Cadastro</button>
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
	$('#tabela_profissao').dataTable();
	})
	</script>

