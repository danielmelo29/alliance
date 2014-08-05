<?php

echo validation_errors('<p style="color:red">','</p>');
echo form_open('agenda/submit');

echo '<p>'.form_label('Título','Titulo');
echo form_input('titulo',$titulo).'</p>';


echo '<p>'.form_label('Data','Data');
echo form_input('data',$data).'</p>';

echo '<p>'.form_label('Horário','Horario');
echo form_input('hora',$hora).'</p>';

echo '<p>'.form_label('Descrição','Descrição');
echo form_input('descricao',$descricao).'</p>';

echo '<p>'.form_label('Usuário','Usuário');
echo form_input('usuarios',$usuarios).'</p>';


    if (isset($update_id)) {
        echo form_hidden('update_id',$update_id);
    }

echo form_submit('submint','Submit').'</p>';


