<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Login Page - Ace Admin</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet" />
		<link href="<?=base_url('assets/css/bootstrap-responsive.min.css')?>" rel="stylesheet" />
		<link rel="stylesheet" href="<?=base_url('assets/css/font-awesome.min.css')?>" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="<?=base_url('assets/css/font-awesome-ie7.min.css')?>" />
		<![endif]-->

		<!--page specific plugin styles-->

		<!--fonts-->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

	3<!--ace styles-->

		<link rel="stylesheet" href="<?=base_url('assets/css/ace.min.css')?>" />
		<link rel="stylesheet" href="<?=base_url('assets/css/ace-responsive.min.css')?>" />
		<link rel="stylesheet" href="<?=base_url('assets/css/ace-skins.min.css')?>" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?=base_url('assets/css/ace-ie.min.css')?>" />
		<![endif]-->

		<!--inline styles related to this page-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

	<body class="login-layout">
		<div class="main-container container-fluid">
			<div class="main-content">
				<div class="row-fluid">
					<div class="span12">
						<div class="login-container">
							<div class="row-fluid">
								<div class="center">
									<h1>
										<i class="icon-leaf green"></i>
										<span class="red">ALLIANCE</span>
										<span class="white "> <i>sistemas </i> </span>
									</h1>
									<h4 class="blue">&copy; Alliance sistemas</h4>
								</div>
							</div>

							<div class="space-6"></div>

							<div class="row-fluid">
								<div class="position-relative">
									<div id="login-box" class="login-box visible widget-box no-border">
										<div class="widget-body">
											<div class="widget-main">
												<h4 class="header blue lighter bigger">
													<i class="icon-coffee green"></i>
													Por favor entre com seu login
												</h4>

												<div class="space-6"></div>
						
	
	
		<!-- -- >  Inicio do campo validar <!-- -->
	
	
						 <form action="ace_admin/validar" method="post" > 
							
						<fieldset>
						<label>
						<span class="block input-icon input-icon-right">
						<input type="text" class="span12" required="Preencha este campo" placeholder="Login" name="login" />
						<i class="icon-user"></i>
						</span>
						</label>
  						<label>
						<span class="block input-icon input-icon-right">
						<input type="password" class="span12" required="Não pode ser vazio" placeholder="Senha" name="password" />
	  					<i class="icon-lock"></i>
						</span>
						</label>
						<div class="space"></div>
						<div class="clearfix">
						<label class="inline">
						<input type="checkbox" />
						<span class="lbl"> Lembre-me</span>
						</label>
						<button onclick="return true;" class="width-35 pull-right btn btn-small btn-primary">
						<i class="icon-key"></i>
						Login
						</button>
						</div>
						<div class="space-4"></div>
						</fieldset>
						</form> 
												
						
						
		<!-- -- >  Final campo validar <!-- -->				
						
						
												
												
												<div class="social-or-login center">
													<span class="bigger-110">Ou use para logar</span>
												</div>

												<div class="social-login center">
													<a class="btn btn-primary">
														<i class="icon-facebook"></i>
													</a>

													<a class="btn btn-info">
														<i class="icon-twitter"></i>
													</a>

													<a class="btn btn-danger">
														<i class="icon-google-plus"></i>
													</a>
												</div>
											</div><!--/widget-main-->

											<div class="toolbar clearfix">
												<div>
													<a href="#" onclick="show_box('forgot-box'); return false;" class="forgot-password-link">
														<i class="icon-arrow-left"></i>
														Esqueci minha senha
													</a>
												</div>

												<div>
													<a href="#" onclick="show_box('signup-box'); return false;" class="user-signup-link">
														 Não tenho cadastro
														<i class="icon-arrow-right"></i>
													</a>
												</div>
											</div>
										</div><!--/widget-body-->
									</div><!--/login-box-->

									<div id="forgot-box" class="forgot-box widget-box no-border">
										<div class="widget-body">
											<div class="widget-main">
												<h4 class="header red lighter bigger">
													<i class="icon-key"></i>
													Recupere sua senha
												</h4>

												<div class="space-6"></div>
												<p>
													Email para recuperar a senha 
												</p>

												<form />
													<fieldset>
														<label>
															<span class="block input-icon input-icon-right">
																<input type="email" class="span12" placeholder="Email" />
																<i class="icon-envelope"></i>
															</span>
														</label>

														<div class="clearfix">
															<button onclick="return false;" class="width-35 pull-right btn btn-small btn-danger">
																<i class="icon-lightbulb"></i>
																Enviar
															</button>
														</div>
													</fieldset>
												</form>
											</div><!--/widget-main-->

											<div class="toolbar center">
												<a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
													Login
													<i class="icon-arrow-right"></i>
												</a>
											</div>
										</div><!--/widget-body-->
									</div><!--/forgot-box-->

									<div id="signup-box" class="signup-box widget-box no-border">
										<div class="widget-body">
											<div class="widget-main">
												<h4 class="header green lighter bigger">
													<i class="icon-group blue"></i>
													Novo cadastro
												</h4>

												<div class="space-6"></div>
												<p> Preencha os campos: </p>

												<form />
													<fieldset>
														<label>
															<span class="block input-icon input-icon-right">
																<input type="email" class="span12" placeholder="Email" />
																<i class="icon-envelope"></i>
															</span>
														</label>

														<label>
															<span class="block input-icon input-icon-right">
																<input type="text" class="span12" placeholder="Login" />
																<i class="icon-user"></i>
															</span>
														</label>

														<label>
															<span class="block input-icon input-icon-right">
																<input type="password" class="span12" placeholder="Password" />
																<i class="icon-lock"></i>
															</span>
														</label>

														<label>
															<span class="block input-icon input-icon-right">
																<input type="password" class="span12" placeholder="Repita password" />
																<i class="icon-retweet"></i>
															</span>
														</label>

														<label>
															<span class="block input-icon input-icon-right">
																<input type="text" class="span12" placeholder="APT" />
																<i class="icon-asterisk"></i>
															</span>
														</label>
														
														
														
														<label>
															<input type="checkbox" />
															<span class="lbl">
																aceito os termos do 
																<a href="#">Contrato</a>
															</span>
														</label>

														<div class="space-24"></div>

														<div class="clearfix">
															<button type="reset" class="width-30 pull-left btn btn-small">
																<i class="icon-refresh"></i>
																Limpar
															</button>

															<button onclick="return false;" class="width-65 pull-right btn btn-small btn-success">
																Registro
																<i class="icon-arrow-right icon-on-right"></i>
															</button>
														</div>
													</fieldset>
												</form>
											</div>

											<div class="toolbar center">
												<a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
													<i class="icon-arrow-left"></i>
													Login
												</a>
											</div>
										</div><!--/widget-body-->
									</div><!--/signup-box-->
								</div><!--/position-relative-->
							</div>
						</div>
					</div><!--/.span-->
				</div><!--/.row-fluid-->
			</div>
		</div><!--/.main-container-->

		<!--basic scripts-->

		<!--[if !IE]>-->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<!--<![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?=base_url('assets/js/jquery-2.0.3.min.js')?>'>"+"<"+"/script>");
		</script>

		<!--<![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='<?=base_url('assets/js/jquery-1.10.2.min.js')?>'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='<?=base_url('assets/js/jquery.mobile.custom.min.js')?>'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!--page specific plugin scripts-->

		<!--ace scripts-->

		<script src="<?=base_url('assets/js/ace-elements.min.js')?>"></script>
		<script src="<?=base_url('assets/js/ace.min.js')?>"></script>

		<!--inline scripts related to this page-->

		<script type="text/javascript">
			function show_box(id) {
			 $('.widget-box.visible').removeClass('visible');
			 $('#'+id).addClass('visible');
			}
		</script>
	</body>
</html>
