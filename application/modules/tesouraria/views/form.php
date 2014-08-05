<?php

echo validation_errors('<p style="color:red">','</p>');
echo form_open('tesouraria/submit');

echo '<p>'.form_label('Descrição','Descrição');
echo form_input('descricao',$descricao).'</p>';

echo '<p>'.form_label('Data','Data');
echo form_input('data',$data).'</p>';

echo '<p>'.form_label('Valor','Valor');
echo form_input('valor',$valor).'</p>';

echo '<p>'.form_label('Tipo','Tipo');
echo form_input('tipo',$tipo).'</p>';


    if (isset($update_id)) {
        echo form_hidden('update_id',$update_id);
    }

echo form_submit('submint','Submit').'</p>';


