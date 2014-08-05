<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Galeria extends MX_Controller {
    
     
    
    public function index(){
        //$this->load->model('mdl_usuarios');
       // $data['query'] = $this->mdl_usuarios->get('nome');
        
        $data['breadcrumbs']=array('Home'=>'galeria');  
        $data['titulo_pagina']='Galeria';
        $data['module']='galeria';
        $data['view_file']='display';
		$data['msg']='Galeria';
		$data['submsg']='Visualize suas lindas imagens';
		$data['blue']='Upload fotos';
		$data['blue_link']='upload_fotos';
        
        
        
        echo Modules::run('ace_admin/blank',$data);
    }
    
   

    
}

