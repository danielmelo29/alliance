<h2 class="header smaller lighter blue">Reservas</h2>
<div class="table-header"><i class='icon-zoom-in bigger-130'></i> <a href="<?=base_url('reservas/create') ?>" style='color: #fff'>NOVO REGISTRO</a></div>

<div id="sample-table-2_wrapper" class="dataTables_wrapper" role="grid">
	<div class="row-fluid">
		<div class="span6">
			<div class="dataTables_length" id="sample-table-2_length">
				<label>Display
					<select aria-controls="sample-table-2" size="1" name="sample-table-2_length">
						<option selected="selected" value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option>
					</select> records</label>
			</div>
		</div>
		<div class="span6">
			<div id="sample-table-2_filter" class="dataTables_filter">
				<label>Search:
					<input aria-controls="sample-table-2" type="text">
				</label>
			</div>
		</div>
	</div>
	<table aria-describedby="sample-table-2_info" id="sample-table-2" class="table table-striped table-bordered table-hover dataTable">
		<thead>
			<tr role="row">
				<th style="width: 63px;"  class="sorting">Código</th>
				<th style="width: 163px;" class="sorting">Inicio</th>
				<th style="width: 220px;" class="sorting">Términoi</th>
				<th style="width: 122px;" class="sorting">Área</th>
				<th style="width: 122px;" class="sorting">Morador</th>
				<th style="width: 122px;" class="sorting">Ações</th>
				
			</tr>
		</thead>

		<tbody aria-relevant="all" aria-live="polite" role="alert">
			 <?php 
                  foreach ($query->result() as $row) {
                      $edit_url=base_url().'reservas/create/'.$row->idreservas; 
                      $del_url=base_url().'reservas/index/'.$row->idreservas;  
                                   
                      echo" <tr class='odd'>
                        <td class='center'>$row->idreservas</td>
        
                        <td class=''>$row->dt_inicio</td>
                        <td class=''>$row->dt_fim</td>
                        <td class=''>$row->areas</td>
                        <td class=''>$row->usuarios</td>
                        
                       
                        
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
	<div class="row-fluid">
		<div class="span6">
			<div id="sample-table-2_info" class="dataTables_info">
				Showing 1 to 23 of 23 entries
			</div>
		</div>
		<div class="span6">
			<div class="dataTables_paginate paging_bootstrap pagination">
				<ul>
					<li class="prev disabled">
						<a href="#"><i class="icon-double-angle-left"></i></a>
					</li>
					<li class="active">
						<a href="#">1</a>
					</li>
					<li class="next disabled">
						<a href="#"><i class="icon-double-angle-right"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

