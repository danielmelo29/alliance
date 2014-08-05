<?php


echo form_open('usuarios/submit');

echo '<p>'.form_label('Nome','Nome');
echo form_input('nome').'</p>';

echo '<p>'.form_label('Senha','Senha');
echo form_password('senha').'</p>';

echo '<p>'.form_label('Repita a Senha','Repita a Senha');
echo form_password('rsenha').'</p>';

echo '<p>'.form_label('Email','Email');
echo form_input('email').'</p>';

echo '<p>'.form_label('Tipo','Tipo');
echo form_input('tipo').'</p>';

echo '<p>'.form_label('Ativo','Ativo');
echo form_input('ativo').'</p>';
   

echo form_submit('submint','Submit').'</p>';
