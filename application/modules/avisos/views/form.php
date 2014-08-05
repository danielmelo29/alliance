<?php

echo validation_errors('<p style="color:red">','</p>');
echo form_open('avisos/submit');

echo '<p>'.form_label('Aviso','Aviso');
echo form_input('aviso',$aviso).'</p>';

echo '<p>'.form_label('Usuário','Usuário');
echo form_input('usuarios',$usuarios).'</p>';


    if (isset($update_id)) {
        echo form_hidden('update_id',$update_id);
    }

echo form_submit('submint','Submit').'</p>';


