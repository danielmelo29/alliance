<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Area extends MX_Controller {
    
    public function __construct(){
        parent::__construct();   
		$this->load->helper('text');
        $this->load->model('mdl_area','table_area');
	}
        
    
    public function index(){
    	$data['query'] = $this->table_area->get_area();
		$data['breadcrumbs']=array('Home'=>'teste');  
        $data['titulo_pagina']='Cadastro/area';
        $data['module']='area';
        $data['view_file']='display';
		$data['msg']='Áreas';
		$data['submsg']='para reservas';
		$data['blue']='Novo área';
		$data['blue_link']='cadastros/area';
        echo Modules::run('ace_admin/blank',$data);
    	
	
		}
    
    
    
  
    
    
    
   
}

