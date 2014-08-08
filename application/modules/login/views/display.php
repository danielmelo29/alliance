<?php

if (isset($erro)) {
	echo '<p style="color:red">** '.$erro.' **</p>';
}

echo form_open('login/submit');

echo form_error('login');
echo '<p>'.form_label('Login','Login');
echo form_input('login','').'</p>';

echo form_error('senha');
echo '<p>'.form_label('Senha','Senha');
echo form_password('senha','').'</p>';


echo form_submit('Logar','Logar').'</p>';