<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Estacionamento extends MX_Controller {
    
    public function __construct(){
        parent::__construct();    
        $this->load->helper(array('url','form'));    
    }
        
    
    public function index(){
      	
	// consulta a banco de dados 
		
      // ainda nao vou usar  $this->load->model('mdl_dashboard');
	  //$data['query'] = $this->mdl_usuarios->get('nome');
      
    // Texto que indica onde você esta  
    
        $data['breadcrumbs']=array('Home'=>'teste');  
        
        $data['titulo_pagina']='Estacionamento';
        $data['module']='estacionamento';
        $data['view_file']='display';
		$data['msg']='display';
		$data['submsg']=' ';
		$data['blue']=' ';
		$data['blue_link']=' ';
        echo Modules::run('ace_admin/blank',$data);
    }
    
    
    
  
    
    
    
   
}

