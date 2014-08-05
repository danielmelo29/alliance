
	
	
	<a href="#add_profissao_modal" data-toggle="modal" class="btn btn-primary btn-success" > + Add profissao</a>
	
	
	
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
			</div>
			
			
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
				<label class="control-label">Profissão </label>
					<div class="controls">
					<input name="add_profissao" type="text" class="span6" placeholder="Eletrecista,construtor,pedreiro ...">
					</div>
				</div>	
			
			<div class="control-group">	
				<label class="control-label">Obs. </label>
					<div class="controls">
					<input name="add_obs" type="text" class="span6" placeholder="Comentário...">
					</div>
			</div>	
			
			
			</div>
			<div class="modal-footer">
		    <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Fechar</button>
		    <button class="btn btn-primary">Cadastro</button>
		  	</form>
		  	</div>
			</div>
	
	
	<div class="table-header"> <i class="icon-leaf"></i> <span>Profissões cadastrados</span></div>
	<table id="tabela_profissao" class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th> N° id</th>
				<th> Profissão</th>
				<th>Obs</th>			
				<th>Cadastro</th>			
				<th>Ações</th>			
			</tr>	
		</thead>	
		<tbody>
				<?php 
				 foreach ($query as $linha)
				 	{
				 		echo "<tr>" ;
				 			echo "<td> $linha->ID_PROFISSAO</td>";
				 			echo "<td> $linha->PRO_PROFISSAO</td>";
				 			echo "<td> $linha->PRO_OBS</td>";
							echo "<td> $linha->PRO_DATA_CADASTRO</td>";
				 			echo "<td><a title=Delete_$linha->PRO_PROFISSAO class=red href=".base_url('cadastros/delete_profissao').'/'.$linha->ID_PROFISSAO."><i class=icon-trash></i> </a>|";
				 			echo "<a title=Edit_$linha->PRO_PROFISSAO class=green href=".base_url('cadastros/get_update_profissao').'/'.$linha->ID_PROFISSAO."> <i class=icon-pencil></i> </a></td>";
				 				
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
	$('#tabela_profissao').dataTable();
	})
	</script>

