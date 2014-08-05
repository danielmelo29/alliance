<button id="click"> click </button>

<table id="tabela_apt" class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th style="width: 64px;" class="sorting"> ID APARTAMENTO</th>
            <th style="width: 64px;" class="sorting">APARTAMENTO</th>
            <th style="width: 64px;" class="sorting">Obs.</th>
            
            <th style="width: 64px;" >DELETAR</th>
            
        </tr>
    </thead>
    <tbody>
   <?php  foreach ($apt1 as $linha) {
        echo '<tr>';
		echo '<td>'.$linha->id_apartamento.'</td>' ;
		echo '<td>'.$linha->apartamento.'</td>' ;
  		echo '<td>'.word_limiter($linha->obs,5). '<a href=#><i class=icon-eye-open></i></a></td>' ;
		echo ' <td> <div class=visible-md visible-lg hidden-sm hidden-xs action-buttons>
																
						<a class=red href=$del_url   >
						
						<i class=icon-trash bigger-130></i>
						</a>
						</div></td>';
		
		
  		echo '</tr>';
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
	
<script>

var aux = {
	
	get : function(){
		alert(this.nome);
	},
	
	nome : "daniel",
	sobre : "melo" 
}
	
	
	
	

$("#click").click(function(){
	aux.get();
})

</script>	
	
	
	<!-- script da tabela -->
<script type="text/javascript">

$(function($) {
	$('#tabela_apt').dataTable();

})

</script>	