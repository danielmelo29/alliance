<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MX_Controller {
    
    public function __construct(){
        parent::__construct();    
        $this->load->helper(array('url','form'));    
   
   		// Verifica se o usuário fez logon 
   		if(!$this->session->userdata('logado') || !$this->session->userdata('login')){
			redirect(base_url());
		}
   
   
    }
        
    
    public function index(){
      	
	// consulta a banco de dados 
		
      // ainda nao vou usar  $this->load->model('mdl_dashboard');
	  //$data['query'] = $this->mdl_usuarios->get('nome');
      
    // Texto que indica onde você esta  
    
        $data['breadcrumbs']=array('Home'=>'dashboard');  
        
        $data['titulo_pagina']='HOME';
        $data['module']='dashboard';
        $data['view_file']='display';
		$data['msg']='Página' ;
		$data['submsg']='principal';
		$data['blue']='dashboard' ;
		$data['blue_link']='cadastros';
        
        
       
        
        echo Modules::run('ace_admin/blank',$data);
    }
    
    
    
  
    
    
    
   
}

