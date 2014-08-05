<table id="tabela_areas" class="table table-striped table-bordered table-hover"> 
<thead>
	<tr>
		<th style="width: 100px">Nome</th>
		<th style="width: 100px">Observação</th>
		<th style="width: 100px">Estado</th>
		<th style="width: 100px">Deletar</th>
	
	</tr>
</thead>	

<tbody>
	<?php 
		foreach ($query as $linha) {
		if($linha->situacao == 'L'){$estado = "<span class=label label-success>Liberado</span>'";}else{$estado = "<span class=label label-info>Obras</span>'";}
		echo '<tr>';
		echo '<td>'.$linha->nome.'</td>' ;
		echo '<td>'.word_limiter($linha->obs,3).' <a href=#>mais</a></td>' ;
		echo '<td>'.$estado.'</td>' ;
		
		echo "<td><a id=excluir  class=red href=".base_url('cadastros/del_area').'/'.$linha->idareas.">Excluir<i class=icon-trash> </i> </a></td>" ;
		
		
		echo '</tr>';
	}
	?>
<tbody>
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

	
<script type="text/javascript"> 
$(document).ready(function(){
	$('#excluir').click(function(){
	alert('deseja excluir') ;
	});
});
</script>

<script type="text/javascript">
$(function($){
	$('#tabela_areas').dataTable();
});
</script>


