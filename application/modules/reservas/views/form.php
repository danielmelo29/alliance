<?php

echo validation_errors('<p style="color:red">','</p>');
echo form_open('reservas/submit');

echo '<p>'.form_label('Data de Início','Data de Início');
echo form_input('dt_inicio',$dt_inicio).'</p>';


echo '<p>'.form_label('Data de término','Data de término');
echo form_input('dt_fim',$dt_fim).'</p>';

$status='null';
echo form_hidden('status',$status);
echo '<p>'.form_label('Observação','Observação');
echo form_input('obs',$obs).'</p>';

echo '<p>'.form_label('Valor','Valor');
echo form_input('valor',$valor).'</p>';

echo '<p>'.form_label('Área','Área');
echo form_input('areas',$areas).'</p>';

echo '<p>'.form_label('Usuário','Usuário');
echo form_input('usuarios',$usuarios).'</p>';


    if (isset($update_id)) {
        echo form_hidden('update_id',$update_id);
    }

echo form_submit('submint','Submit').'</p>';


