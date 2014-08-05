<h2 class="header smaller lighter blue">AGENDA</h2>
<div class="table-header"><i class='icon-zoom-in bigger-130'></i> <a href="<?=base_url('agenda/create') ?>" style='color: #fff'>NOVO REGISTRO</a></div>

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
				<th style="width: 163px;" class="sorting">TÍTULO</th>
				<th style="width: 220px;" class="sorting">DESCRIÇÃO</th>
				<th style="width: 122px;" class="sorting">DATA</th>
				<th style="width: 139px;"  class="hidden-480 sorting">HORA</th>
				<th style="width: 173px;"  class="sorting_disabled">Ações</th>
			</tr>
		</thead>

		<tbody aria-relevant="all" aria-live="polite" role="alert">
			 <?php 
                  foreach ($query->result() as $row) {
                      $edit_url=base_url().'agenda/create/'.$row->idagenda; 
                      $del_url=base_url().'agenda/index/'.$row->idagenda;  
                                   
                      echo" <tr class='odd'>
                        <td class='center'>$row->idagenda</td>
        
                        <td class=''>$row->titulo</td>
                         <td class='hidden-480'>".substr($row->descricao, 0,50)."... </td>
                        <td class=''>$row->data</td>
                        <td class='hidden-480'>$row->hora</td>
                       
                        
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

