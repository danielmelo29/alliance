	
<div class="container-fluid">
	<div class="row-fluid">
	<div class="span12">
	</div>
	<div class="span2">
	</div>		
	<div class="span10">
	
	
	
	<form class="form-horizontal" action="cadastros/add_user" method="post" >
		<div class="control-group">
			<label class="control-label" >Nome</label>
			<div class="controls">
				
				<div class="input-prepend">
					<span class="add-on"><i class="icon-user"></i></span>
					<input class='span12' name="nome" type="text" placeholder="Nome do morador" />
				</div>
								
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" >Sobrenome</label>
			<div class="controls">
				
				<div class="input-prepend">
					<span class="add-on"><i class="icon-user"></i></span>
					<input class='span12' name="sobrenome" type="text" placeholder="Nome do morador" />
				</div>
								
			</div>
		</div>
		
		
		
		<div class="control-group">
			<label class="control-label" >Senha</label>
			<div class="controls">
				<div class="input-prepend">
					<span class="add-on"><i class="icon-keyboard"></i></span>
				<input class='span12' name="senha" type="password" placeholder="Senha" />
				</div>
			
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" >Repetir senha</label>
			<div class="controls">
				<div class="input-prepend">
				<span class="add-on"><i class="icon-retweet"></i></span>
				<input class='span12' type="password" placeholder="Repetir senha" />
				
				</div>
			</div>
		</div>
		
		<div class="control-group">
		<label class="control-label" >Login</label>
			<div class="controls">
				
				<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input class='span12' name="login" type="text" placeholder="Usado para fazer login" />
				</div>
			
			</div>
		</div>
		
		<div class="control-group">
		<label class="control-label" >Email</label>
			<div class="controls">
				<div class="input-prepend">
					<span class="add-on"><i class="icon-envelope"></i></span>
				<input class="span12" name="email" type="text" placeholder="Email" />
				</div>
			</div>
		</div>
		
		<div class="control-group">
			<div class="controls">
		
		<label class="inline">
		 	<input name="ativo" type="checkbox" value="1" />
		 	<span class="lbl"> Ativar usuário </span>
		</label>
		
		</div>
		</div>
		
		<div class="control-group">
		<label class="control-label" >Apartamento</label>
			<div class="controls">
				<select name="apt">
					<option default></option>
					
				</select><a href="#" class="btn btn-small btn-success">Novo apt</a>
			</div>
		</div>
		
		
		
		<div class="control-group">
		<label class="control-label" >Tipo de morador</label>
			<div class="controls">
				<select>
					<option default></option>
					<option value="P">Proprietário</option>
					<option value="D">Dependente</option>
					
				</select>
			</div>
		</div>
		
		<div class="control-group">
		<label class="control-label" >Permissões no sistema</label>
			<div class="controls">
				<select>
					<option default></option>
					<option value="A">Administrador</option>
					<option value="M">Morador</option>
					
				</select>
			</div>
		</div>
		
		
		
		<div class="control-group">
			<div class="controls">
				<button class="btn btn-primary" type="submit">Cadastrar</button>
			</div>
		</div>
	</form>
	
	</div>
	
	</div>
	</div>
	</div>



<?php


echo '<script src=http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js></script>';
		//<!--[if IE]>
echo     '<script src=http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js></script>';

echo	'<script type="text/javascript">
			if("ontouchend" in document) document.write(<script src=assets/js/jquery.mobile.custom.min.js>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/typeahead-bs2.min.js"></script>' ;
		
echo 	'<script type="text/javascript">
			if("ontouchend" in document) document.write(<script src=assets/js/jquery.mobile.custom.min.js>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>';

echo		'<script src=assets/js/ace.min.js></script>' ;
echo		'<script src=assets/js/jquery-2.0.3.min.js> </script>';
echo		'<script src=assets/js/bootstrap.min.js></script>';
echo		'<script src=assets/js/typeahead-bs2.min.js></script>';
echo		'<script src=assets/js/jquery-ui-1.10.3.custom.min.js></script>';
echo		'<script src=assets/js/jquery.ui.touch-punch.min.js></script>';
echo		'<script src=assets/js/jquery.slimscroll.min.js></script>';
echo		'<script src=assets/js/jquery.easy-pie-chart.min.js></script>';
echo		'<script src=assets/js/jquery.sparkline.min.js></script>';
echo		'<script src=assets/js/flot/jquery.flot.min.js></script>';
echo		'<script src=assets/js/flot/jquery.flot.pie.min.js></script>';
echo		'<script src=assets/js/flot/jquery.flot.resize.min.js></script>';
echo		'<script src=assets/js/ace-elements.min.js></script>';
echo		'<script src=assets/js/ace.min.js></script>';

?>