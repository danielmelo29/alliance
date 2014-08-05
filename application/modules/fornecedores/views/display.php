
	<table aria-describedby="sample-table-2_info" id="tabela-fornecedores" class="table table-striped table-bordered table-hover dataTable">
		<thead>
			<tr role="row">
				<th style="width: 63px;"  >Código</th>
				<th style="width: 63px;" >Nome</th>
				<th style="width: 63px;" >Cnpj</th>
				<th style="width: 63px;" >Descrição</th>
				<th style="width: 63px;" >Telefone</th>
				<th style="width: 63px;" >Email</th>
				<th style="width: 63px;" >Ações</th>
				
			</tr>
		</thead>

		<tbody aria-relevant="all" aria-live="polite" role="alert">
			 <?php 
                  foreach ($query->result() as $row) {
                      
                      $edit_url=base_url().'fornecedores/create/'.$row->idfornecedores; 
                      $del_url=base_url().'fornecedores/index/'.$row->idfornecedores;  
                                           
                      echo" <tr class='odd'>
                        <td class='center'>$row->idfornecedores</td>
        
                        <td class=''>$row->nome</td>
                        <td class=''>$row->cnpj</td>
                        <td class='hidden-480'>".substr($row->descricao, 0,30)."... </td>
                         <td class='hidden-480'> -----------</td>
                        <td class='hidden-480'>$row->email</td>
                        
                        <td class='td-actions '>
                        <div class='hidden-phone visible-desktop action-buttons'>
                            <a class='green' href='$edit_url'> <i class='icon-pencil bigger-130'></i> </a>
        
                            <a class='red' href='$del_url'> <i class='icon-trash bigger-130'></i> </a>
                        </div>
                        
                        </td>
                    </tr>";
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
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>



		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/typeahead-bs2.min.js"></script>

		
		
		
		
		
		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>
		

		

		
<script src="assets/js/ace.min.js"></script>
<script src="assets/js/jquery-2.0.3.min.js"> </script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/typeahead-bs2.min.js"></script>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="bootstrap.min.js"></script>
 
<!-- bootbox code -->
<script src="bootbox.min.js"></script>	
	
   
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/jquery.dataTables.bootstrap.js"></script>
<script src="assets/js/jquery.colorbox-min.js"></script>

		                
<!-- inline scripts related to this page -->

		

		<script type="text/javascript">
		
			jQuery(function($) {
				
				var oTable1 = $('#tabela-fornecedores').dataTable({
				"aoColumns": [
			      { "bSortable": true },
			      { "bSortable": false },
			      { "bSortable": false },
			      { "bSortable": false },
			      { "bSortable": false },
				  { "bSortable": false },
			      { "bSortable": false }] 
				} );
				
				
				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
						
				});
			
			
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			})
		</script>	
		   
   
   
   



		
			
	
	
	



	
	
	