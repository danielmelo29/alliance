

  
<?php echo '<script src='.base_url('assets/jgrid/js/jquery-1.11.0.min.js>').'></script>' ?>
<?php echo '<script src='.base_url('assets/jgrid/js/jquery.jqGrid.min.js>').'></script>' ?>
<?php echo '<script src='.base_url('assets/jgrid/js/jquery.jqGrid.src.js>').'></script>' ?>

<button id="t" class="btn ">teste</button>
<script type="text/javascript">

$(document).ready(function(){
 jQuery("#teste").jqGrid({
			datatype: "local", 
			height: 250, width:580,	
			colNames:['No ID','Data', 'Cliente', 'Valor','Taxa','Total','Anotações'], 
			/* colModel: aqui são definidos detalhes dos dados, tais como: width(largura) da coluna do campo, tipo de dado (sorttype), alinhamento */
			colModel:[ 
				{name:'id',index:'id', width:60, sorttype:"int"}, 
				{name:'invdate',index:'invdate', width:90, sorttype:"date"}, 
				{name:'name',index:'name', width:100}, 
				{name:'amount',index:'amount', width:80, align:"right",sorttype:"float"}, 
				{name:'tax',index:'tax', width:80, align:"right",sorttype:"float"}, 
				{name:'total',index:'total', width:80,align:"right",sorttype:"float"}, 
				{name:'note',index:'note', width:150, sortable:false} ], 
			/* imgpath = local das imagens do tema escolhido, veja as pasta themes para ver os diferentes temas */
		
			multiselect: false, 
			caption: "Manipulando Array de dados" 
		}); 
		/* Looping que percorre todo o array 'mydata' e preenche a tabela através do método jQuery().addRowData(i, data) */	
		var mydata = [
					{id:"1",invdate:"2007-10-01",name:"test",note:"note",amount:"200.00",tax:"10.00",total:"210.00"}, 
					{id:"2",invdate:"2007-10-02",name:"test2",note:"note2",amount:"300.00",tax:"20.00",total:"320.00"}, 
					{id:"3",invdate:"2007-09-01",name:"test3",note:"note3",amount:"400.00",tax:"30.00",total:"430.00"}, 
					{id:"4",invdate:"2007-10-04",name:"test",note:"note",amount:"200.00",tax:"10.00",total:"210.00"}, 
					{id:"5",invdate:"2007-10-05",name:"test2",note:"note2",amount:"300.00",tax:"20.00",total:"320.00"}, 
					{id:"6",invdate:"2007-09-06",name:"test3",note:"note3",amount:"400.00",tax:"30.00",total:"430.00"}, 
					{id:"7",invdate:"2007-10-04",name:"test",note:"note",amount:"200.00",tax:"10.00",total:"210.00"}, 
					{id:"8",invdate:"2007-10-03",name:"test2",note:"note2",amount:"300.00",tax:"20.00",total:"320.00"}, 
					{id:"9",invdate:"2007-09-01",name:"test3",note:"note3",amount:"400.00",tax:"30.00",total:"430.00"} 
					]; 
		
			for(var i=0;i<=mydata.length;i++) 
			
			
				jQuery("#teste").addRowData(i+1,mydata[i]);

});


</script>


<table id="teste" class="scroll" cellpadding="0" cellspacing="0"></table>
