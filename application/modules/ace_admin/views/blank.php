<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title><?=$titulo_pagina?></title>

		<meta name="description" content="" />
		
		<!-- JqGrid -->
				
		<link href="<?php echo base_url('assets/grid/css/ui.jqgrid.css')?>"  rel="stylesheet" />
			<link href="<?php echo base_url('assets/css/jquery-ui-1.10.3.custom.min.css')?>"  rel="stylesheet" />
	
		<link href="<?php echo base_url('assets/grid/ui-themes/themes/base/jquery-ui.css')?>"  rel="stylesheet" /> 
		<link href="<?php echo base_url('assets/grid/plugins/searchFilter.css')?>"  rel="stylesheet" />
		<link href="<?php echo base_url('assets/grid/plugins/ui.multiselect.css')?>"  rel="stylesheet" />
		
		<!--basic styles-->

		<link href="<?php echo base_url('assets/css/bootstrap.min.css')?>"  rel="stylesheet" />
		<link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css')?>" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>" />

		
		<!-- Mudanças significativas -->
		
		
		<meta name="description" content="responsive photo gallery using colorbox" />
		

		<!-- basic styles -->

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<link rel="stylesheet" href="assets/css/colorbox.css" />

		<!-- fonts -->

		
		<!-- ace styles -->

		<link rel="stylesheet" href="assets/css/ace.min.css" />
		
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="assets/js/ace-extra.min.js"></script>

		
		
		<link rel="stylesheet" href="assets/css/fullcalendar.css" />
		
		<!-- Final das mudanças -->
		
		<link rel="stylesheet" href="assets/css/ace.min.css" />
		
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />

	

		<!--[if IE 7]>
		  <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome-ie7.min.css')?>" />
		<![endif]-->

		<!--page specific plugin styles-->

		<!--fonts-->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!--ace styles-->

		<link rel="stylesheet" href="<?php echo base_url('assets/css/ace.min.css')?>" />
		<link rel="stylesheet" href="<?php echo base_url('assets/css/ace-responsive.min.css')?>" />
		<link rel="stylesheet" href="<?php echo base_url('assets/css/ace-skins.min.css')?>" />

		
		
		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo base_url('assets/css/ace-ie.min.css')?>" />
		<![endif]-->

		<!--inline styles related to this page-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

	<body>


		<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small>
							<i class="icon-leaf"></i>
							ALLIANCE -Administrador  
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
						

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-bell-alt icon-animated-bell"></i>
								<span class="badge badge-important">3</span>
							</a>

							<ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-warning-sign"></i>
									<?php echo 	'8 Notificações' ?>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-pink icon-comment"></i>
												Novo Comentário
											</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="btn btn-mini btn-primary icon-user"></i>
										Bob just signed up as an editor ...
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-success icon-shopping-cart"></i>
												Novas Ordens
											</span>
											<span class="pull-right badge badge-success">+8</span>
										</div>
									</a>
								</li>


								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-info icon-twitter"></i>
												Followers
											</span>
											<span class="pull-right badge badge-info">+11</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										See all notifications
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">8</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-envelope-alt"></i>
								<?php echo 	'8 Mensagens' ?>
								</li>

								<li>
									<a href="#">
										<img src="assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												Ciao sociis natoque penatibus et auctor ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>a moment ago</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												Vestibulum id ligula porta felis euismod ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20 minutes ago</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												Nullam quis risus eget urna mollis ornare ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>3:15 pm</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										See all messages
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="light-blue">
						<?php // Editar esta linha para surgir a foto do usuário ?>
							
							
							
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src= <?php echo  base_url("assets/avatars").'/'.$this->session->userdata('foto') ?>  alt="Jason's Photo" />
								<span class="user-info">
									<small>Bem vindo,</small>
									<?php echo  $this->session->userdata('login')?>
								
								</span>

								<i class="icon-caret-down"></i>
							</a>
							
							<?php // final da linha para mudar o icone ?>
							
						<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
								<li>
									<a href="config_users">
										<i class="icon-cog"></i>
										Configurações
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-user"></i>
										Perfil
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href=<?php echo base_url('ace_admin/logout')?> >
										<i class="icon-off"></i>
										Sair
									</a>
								</li>
							</ul>
						</li>
					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>

		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>

			<div class="sidebar" id="sidebar">
				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-small btn-success">
							<i class="icon-signal"></i>
						</button>

						<button class="btn btn-small btn-info">
							<i class="icon-pencil"></i>
						</button>

						<button class="btn btn-small btn-warning">
							<i class="icon-group"></i>
						</button>

						<button class="btn btn-small btn-danger">
							<i class="icon-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!--#sidebar-shortcuts-->

				
				
				
				
				
				
				
				
				
				
				<!-- Menu lateral -->
				
				<ul class="nav nav-list">
					
					     <li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-user"></i>
								<span class="menu-text"> Cadastros </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="<?=base_url('cadastros')?>">
										<i class="icon-double-angle-right"></i>
										   Usuários
									</a>
								</li>

								<li>
									<a href="<?=base_url('cadastros/apartamento')?>">
										<i class="icon-double-angle-right"></i>
										   Apartamentos
									</a>
								</li>
									
								<li>
									<a href="<?=base_url('cadastros/veiculos')?>">
										<i class="icon-double-angle-right"></i>
										   Veículos
									</a>
								</li>
								
								<li>
									<a href="<?=base_url('cadastros/area')?>">
										<i class="icon-double-angle-right"></i>
										   Áreas
									</a>
								</li>
									
								<li>
									<a href="#">
										<i class="icon-double-angle-right"></i>
										Funcionários
									</a>
								</li>
												
								<li>
									<a href="#">
										<i class="icon-double-angle-right"></i>
										Telefones
									</a>
								</li>
								
								<li>
									<a href="#">
										<i class="icon-double-angle-right"></i>
										Fornecedores
									</a>
								</li>
								
								<li>
									<a href="#">
										<i class="icon-double-angle-right"></i>
										Prestadores de Serviços
									</a>
								</li>
								
							</ul>
						</li>
					
					<!-- final do menu e sub-menu -->
					
					<!--Inicio grupos colapse -->
					<ul class="nav nav-list">
					
					     <li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-th-list"></i>
								<span class="menu-text"> Grupos </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								

								<li>
									<a href="<?=base_url('cadastros/apartamento')?>">
										<i class="icon-double-angle-right"></i>
										   Apartamentos
									</a>
								</li>
									
								
								
								
								<li>
									<a href="<?=base_url('cadastros/veiculos')?>">
										<i class="icon-double-angle-right"></i>
										   Veículos
									</a>
								</li>
								
								<li>
									<a href="<?=base_url('cadastros/area')?>">
										<i class="icon-double-angle-right"></i>
										   Áreas
									</a>
								</li>
									
								
								<li>
									<a href="<?=base_url('cadastros/estacionamento')?>">
										<i class="icon-double-angle-right"></i>
										   Estacionamento
									</a>
								</li>
								
								<li>
									<a href="<?=base_url('cadastros/profissao')?>">
									<i class="icon-double-angle-right"></i>
										Profissões
									</a>	
								</li>
								
							</ul>
						</li>
					
					
					
					<!--Final grupos colapse -->
	

					<li>
						<a href="<?=base_url('funcionarios')?>">
							<i class="icon-edit"></i>
			    <span class="menu-text"> Funcionários</span></a> </li>

					<li>
						<a href="<?=base_url('fornecedores')?>">
							<i class="icon-list-alt"></i>
							<span class="menu-text"> Fornecedores </span>
						</a>
					</li>

					
					<li>
						<a href="<?=base_url('galeria')?>">
							<i class="icon-picture"></i>
							<span class="menu-text"> Galeria </span>
						</a>
					</li>



					<li>
						<a href="<?=base_url('documentos')?>">
							<i class="icon-calendar"></i>

							<span class="menu-text">
								Documentos
								<span class="badge badge-transparent tooltip-error" title="2&nbsp;Documentos&nbsp">
									<i class="icon-warning-sign red bigger-130"></i>
								</span>
							</span>
						</a>
					</li>

					



					
					<!--  ultimo sub-menu -->
					
					
					 <li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-desktop"></i>
								<span class="menu-text"> Visualizar </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								
								<li>
									<a href="<?=base_url('usuarios')?>">
										<i class="icon-double-angle-right"></i>
										  Usuários
									</a>
								</li>
								
								<li>
									<a href="<?=base_url('apartamentos')?>">
										<i class="icon-double-angle-right"></i>
										  Apartamentos
									</a>
								</li>
								
								<li>
									<a href="<?=base_url('veiculos')?>">
										<i class="icon-double-angle-right"></i>
										  Veículos
									</a>
								</li>
								
								
								<li>
									<a href="<?=base_url('area')?>">
										<i class="icon-double-angle-right"></i>
										  Áreas
									</a>
								</li>
								
								<li>
									<a href="<?=base_url('telefones')?>">
										<i class="icon-double-angle-right"></i>
										  Ramais
									</a>
								</li>
								
								
								<li>
									<a href="<?=base_url('cftv')?>">
										<i class="icon-double-angle-right"></i>
										  Câmeras
									</a>
								</li>

								<li>
									<a href="<?=base_url('calendario')?>">
										<i class="icon-double-angle-right"></i>
										  Reservas
									</a>
								</li>
								
								<li>
									<a href="#">
										<i class="icon-double-angle-right"></i>
										  Lembretes
									</a>
								</li>
								
								
							</ul>
						
							<li>
						<a href="#">
							<i class="icon-calendar"></i>

							<span class="menu-text">
								Caixa de sugestões
								<span class="badge badge-primary"> 1 </span>
									
								</span>
							</span>
						</a>
					</li>
						
						</li>
				</ul><!--/.nav-list-->

			
			
			<!-- Final menu lateral  -->
			
			
			
				
			  <div class="sidebar-collapse" id="sidebar-collapse">
					<i class="icon-double-angle-left"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="breadcrumbs" id="breadcrumbs">
				    
					<ul class="breadcrumb">
				    <?php 
				    
				    echo "<i class='icon-home home-icon'></i>";
                    
                    #print_r($breadcrumbs);exit;
                    foreach ($breadcrumbs as $breadcrumb => $link) {
                        
                            echo "<li>
                            
                            <a href='$link'>$breadcrumb</a>
                                <span class='divider'>
                                    <i class='icon-angle-right arrow-icon'></i>
                                </span>
                            </li> ";
                            
                        }
  				    
				    ?>
				    </ul><!--.breadcrumb-->

					
				</div>
				
				

				<div class="page-content">
					<div class="row-fluid">
						<div class="span12">
							<!--PAGE CONTENT BEGINS-->
					<div class="page-header">	
						<h1>
							<?php echo  $msg ?> 
							<small>
								<i class="icon-double-angle-right"></i>
								<?php echo  $submsg ?>
							</small>
						</h1>
						</div>
						
	
							   <?php
                                    $this->load->view($module.'/'.$view_file);
                                ?>


							<!--PAGE CONTENT ENDS-->
						</div><!--/.span-->
					</div><!--/.row-fluid-->
				</div><!--/.page-content-->

			

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>

		<!--basic scripts-->

		<!--[if !IE]>-->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<!--<![endif]-->

		<!--[if IE]>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <![endif]-->

		<!--[if !IE]>-->

		
		             
		               
		               

		
		
		
			
	<?php	
		
		
		echo '<div class=footer>';
	echo '<div class=footer-inner>';
		echo '<div class=footer-content>' ;
          echo '<div class=center>' ;
			echo '<span class=bigger-120>' ;
			   echo '<i class="icon-leaf green"></i>' ;
					echo '<span class=red bolder>' ;
					echo 'Alliance' ;
				echo '</span>' ;
						echo ' &copysistema 2014' ;
				echo '</span>' ;
			echo '</div>' ;
		echo '</div>';
	echo '</div>';
		
	?>	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		
		
		
		
		
	</body>
</html>
