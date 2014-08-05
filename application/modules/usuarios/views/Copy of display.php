<table id="tabela_usuarios" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th style="width: 64px;" class="sorting" >ID</th>
			<th style="width: 100px;" >Nome</th>
			<th style="width: 100px;" >Login</th>
			<th style="width: 100px;" >Apt</th>
			<th style="width: 100px;" >Perm.</th>
			
				
		</tr>
	</thead>

	<tbody aria-relevant="all" aria-live="polite" role="alert">
	 
	 
	 
		<?php 
		/*
		echo '<pre>';
		print_r($_selec);
		echo '</pre>';
		
		
		echo '<pre>';
		print_r($_select);
		echo '</pre>';
		
		*/
		foreach ($_select as $linha)
		{
			
			if($linha->USU_PERMISSAO == 'A' ){$perm = 'ADMIN';};
		
			echo "<tr>";
			echo "<td>$linha->ID_USUARIO</td>" ;
			echo "<td>$linha->USU_NOME</td>" ;
			echo "<td>$linha->USU_LOGIN</td>" ;
			echo "<td>$linha->APA_APARTAMENTO</td>" ;
			echo '<td>'.$perm.'</td>' ;
			echo "</tr>";
		}
		?>	 
	 </tbody>
</table>
	
	 
				
	 <?php /*
   foreach ($query->result() as $row) 
   {
   
   	echo "	<tr>" ;
	  			 
   
   	$edit_url=base_url().'usuarios/create/'.$row->idusuarios; 
   	$del_url=base_url().'usuarios/index/'.$row->idusuarios;  
   
   // 
   
   	if ($row->ativo==1) {$status='<span class="label label-info">Ativo</span>';}else{$status='<span class="label label-warning">Inativo</span>';}
   	if ($row->tipo=='A') {$tipo='Administrador';}else{$tipo='Morador';}
   	if ($row->proprietario=='P') {$proprietario='Propiétario';}else{$proprietario='Dependente';}
   
				
	echo 		"
					<td>$row->nome</td>
					<td>$row->login</td>
					
					<td class=hidden-480>$row->email</td>
					<td >$row->apt</td>
					<td>$proprietario</td>
					
					<td> $tipo</td>

					
					<td class='hidden-480  sorting_1'>$status</td>
					
						
						<td>
						<div class=visible-md visible-lg hidden-sm hidden-xs action-buttons>
																
						<a class=green href=$edit_url>
								<i class=icon-pencil bigger-130></i>
						</a>

						<a class=red href=$del_url   >
						
						<i class=icon-trash bigger-130></i>
						</a>
						</div>

						
									
							</tr>"  ;
							
	 }
   
   */?>						
							
	
	
	

		
		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url('assets/js/jquery-2.0.3.min.js')?>'>"+"<"+"/script>");
		</script>
		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>
		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		
<script src="assets/js/ace.min.js"></script>
<script src="assets/js/jquery-2.0.3.min.js"> </script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="assets/js/jquery.slimscroll.min.js"></script>
<script src="assets/js/jquery.easy-pie-chart.min.js"></script>
<script src="assets/js/jquery.sparkline.min.js"></script>
<script src="assets/js/flot/jquery.flot.min.js"></script>
<script src="assets/js/flot/jquery.flot.pie.min.js"></script>
<script src="assets/js/flot/jquery.flot.resize.min.js"></script>
<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>

 <!-- JS dependencies -->


	<br></br>
	<br></br>

	<table id="teste" class="table table-striped table-bordered table-hover">
		<thead>
			<th>Column 1</th>
			<th>Column 2</th>
			
		</thead>
		<tbody>
			<tr>
				<td>Column 1</td>
				<td>Column 2</td>
			</tr>
		</tbody>
	</table>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> 
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/jquery.dataTables.bootstrap.js"></script>
<script src="assets/js/jquery.colorbox-min.js"></script>

		                
<!-- inline scripts related to this page -->


		<script type="text/javascript">
			
		</script>
		
		
		

		<script type="text/javascript">
		
			jQuery(function($) {
				$('#tabela_usuarios').dataTable();
				
				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
						
				});
			
			
				
			})
		</script>	
		   
   
   
   



		
		