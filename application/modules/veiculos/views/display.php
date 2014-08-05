



<table id="tabela_veiculos" class="table table-striped table-bordered table-hover">
<thead>
	<tr>
		<th style="width: 100px"> Id </th>
		<th style="width: 100px"> Placa </th>
		<th style="width: 100px"> Modelo </th>
		<th style="width: 100px"> Cor </th>
		<th style="width: 100px"> Propiétario </th>
	</tr>
</thead>	
	<tbody>
		<tr>
			<?php 
			foreach ($query as $linha) {
			echo '<td>'.$linha->id_veiculos_usuario.'</td>' ;
			echo '<td>'.$linha->placa.'</td>' ;
			echo '<td>'.$linha->modelo.'</td>' ;
			echo '<td>'.$linha->cor.'</td>' ;
			echo '<td>'.$linha->id_usuario.'</td>' ;
			}
  			?>

		</tr>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

 


	
   
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/jquery.dataTables.bootstrap.js"></script>
<script src="assets/js/jquery.colorbox-min.js"></script>


<script type="text/javascript">

	$(function($){
		$('#tabela_veiculos').dataTable();
	});

</script>


