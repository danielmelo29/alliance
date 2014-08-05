<?php

echo validation_errors('<p style="color:red">','</p>');
echo form_open('funcionarios/submit');

echo '<p>'.form_label('Nome','Nome');
echo form_input('nome',$nome).'</p>';

echo '<p>'.form_label('Cargo','Cargo');
echo form_input('cargo',$cargo).'</p>';

echo '<p>'.form_label('Horário de Início','Horário de Início');
echo form_input('h_inicio',$h_inicio).'</p>';

echo '<p>'.form_label('Horário de Saída','Horário de Saída');
echo form_input('h_fim',$h_fim).'</p>';

    if (isset($update_id)) {
        echo form_hidden('update_id',$update_id);
    }

echo form_submit('submint','Submit').'</p>';

