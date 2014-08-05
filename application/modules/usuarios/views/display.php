<!--	<div class="table-header"><i class='icon-zoom-in bigger-130'></i> <a href="<?php echo $blue_link ?> " style='color: #fff'><?php echo $blue?></a></div>
-->
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	
	<?php echo '<script src='.base_url("assets/grid/js/i18n/grid.locale-pt-br.js").'></script>'?>
	<?php echo '<script src='.base_url("assets/grid/js/jquery.jqGrid.min.js").'></script>'?>
	<?php echo '<script src='.base_url("assets/grid/plugins/jquery.searchFilter.js").'></script>'?>
	<?php echo '<script src='.base_url("assets/grid/plugins/ui.multiselect.js").'></script>'?>
	<?php echo '<script src='.base_url("assets/grid/plugins/grid.addons.js").'></script>'?>
	<?php echo '<script src='.base_url("assets/grid/plugins/grid.postext.js").'></script>'?>
	<?php echo '<script src='.base_url("assets/grid/plugins/grid.setcolumns.js").'></script>'?>
	<?php echo '<script src='.base_url("assets/grid/plugins/jquery.contextmenu.js").'></script>'?>
	<?php echo '<script src='.base_url("assets/grid/plugins/jquery.tablednd.js").'></script>'?>
	<?php echo '<script src='.base_url("assets/grid/src/grid.common.js").'></script>'?>
	<?php echo '<script src='.base_url("assets/grid/src/grid.formedit.js").'></script>'?>
	<?php echo '<script src='.base_url("assets/grid/src/jqModal.js").'></script>'?>
	<?php echo '<script src='.base_url("assets/grid/src/jqDnR.js").'></script>'?>
	
	
	
	
	
		<table id="tab_user"><tr><td><td></tr></table>
		<div id="pager"></div>

	
<script type="text/javascript">

	$("#tab_user").jqGrid({
        url : "usuarios/xml_usuarios",
        height: 250, 
        width:850,	
        datatype: "xml",
        mtype: "POST",
        colNames: ["N° Id", "Nome","Login","Categ.","Contato","Apt","Permissão",'Ativo'],
        colModel: [
            { name: "ID_USUARIO", width: 55,sorttype:"int" },
            { name: "USU_NOME", editable : true, width: 55 },
            { name: "USU_LOGIN",editable : true, width: 55 },
            { name: "CON_CATEGORIA",editable : true, width: 90 },
            { name: "CONTATO",editable : true, width: 90 },
            { name: "Apt",editable : true, width: 55 },
            { name: "Perm",editable : true, width: 55 },
            { name: "Ativo",editable : true, width: 55 }
            ],
        pager: "#pager",
        rowNum: 10,
        rowTotal:50,
        rowList: [10, 20, 30],
        sortname: "ID_USUARIO",
        loadonce:true,
        sortorder: "desc",
        viewrecords: true,
        gridview: true,
        autoencode: true,
        caption: "Tabela Usuários"
    }); 
    
   
    
    jQuery('#tab_user').jqGrid('navGrid','#pager',{},
    {},
    {},
    {},
    {},
    {}
    )
</script>

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

