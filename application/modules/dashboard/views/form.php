
<?php

echo validation_errors('<p style="color:red">','</p>');
echo form_open('usuarios/submit');

echo '<p>'.form_label('Nome','Nome');
echo form_input('nome',$nome).'</p>';

echo '<p>'.form_label('Senha','Senha');
echo form_password('senha',$senha).'</p>';

echo '<p>'.form_label('Repita a Senha','Repita a Senha');
echo form_password('rsenha',$senha).'</p>';

echo '<p>'.form_label('Email','Email');
echo form_input('email',$email).'</p>';

echo '<p>'.form_label('Tipo','Tipo');
echo form_input('tipo',$tipo).'</p>';

echo '<p>'.form_label('Ativo','Ativo');
echo form_input('ativo',$ativo).'</p>';
    if (isset($update_id)) {
        echo form_hidden('update_id',$update_id);
    }

echo form_submit('submint','Submit').'</p>';


		
		