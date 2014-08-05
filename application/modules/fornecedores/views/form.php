<?php

echo validation_errors('<p style="color:red">','</p>');
echo form_open('fornecedores/submit');

echo '<p>'.form_label('Nome','Nome');
echo form_input('nome',$nome).'</p>';

echo '<p>'.form_label('CNPJ','CNPJ');
echo form_input('cnpj',$cnpj).'</p>';

echo '<p>'.form_label('Descrição','Descrição');
echo form_input('descricao',$descricao).'</p>';

echo '<p>'.form_label('Responsável','Responsável');
echo form_input('responsavel',$responsavel).'</p>';

echo '<p>'.form_label('Site','Site');
echo form_input('site',$site).'</p>';

echo '<p>'.form_label('Email','Email');
echo form_input('email',$email).'</p>';

    if (isset($update_id)) {
        echo form_hidden('update_id',$update_id);
    }

echo form_submit('submint','Submit').'</p>';


