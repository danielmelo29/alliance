<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Veiculos extends MX_Controller {
    
    public function __construct(){
        parent::__construct();    
    	$this->load->model('mdl_veiculos','table_veiculos');     
	}
        
    
    public function index(){
      	
	// consulta a banco de dados 
		
      // ainda nao vou usar  $this->load->model('mdl_dashboard');
	  //$data['query'] = $this->mdl_usuarios->get('nome');
      
    // Texto que indica onde você esta  
    	$data['query'] = $this->table_veiculos->get_veiculos();
        $data['breadcrumbs']=array('Home'=>'teste');  
        $data['titulo_pagina']='Visualizar/veiculos';
        $data['module']='veiculos';
        $data['view_file']='display';
		$data['msg']='Gerenciar';
		$data['submsg']='Veículos';
		$data['blue']='Novo veículo';
		$data['blue_link']='cadastros/veiculos';
       echo Modules::run('ace_admin/blank',$data);
    }
    
    
    
  
    
    
    
   
}

