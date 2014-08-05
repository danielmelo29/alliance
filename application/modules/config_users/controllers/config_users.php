<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Config_users extends MX_Controller {
    
    public function __construct(){
        parent::__construct();    
        $this->load->helper(array('url','form'));    
   		// Testa se o usuário fez login
   		if(!$this->session->userdata('logado') || !$this->session->userdata('login')  ){
		redirect(base_url());
		}
   
    }
        
	public function index(){
      	
	// consulta a banco de dados 
		
      // ainda nao vou usar  $this->load->model('mdl_dashboard');
	  //$data['query'] = $this->mdl_usuarios->get('nome');
      
    // Texto que indica onde você esta  
    
        $data['breadcrumbs']=array('Home'=>'dashboard','Configurações_usuário'=>'config_user');  
        $data['titulo_pagina']='Configurações';
        $data['module']='config_users';
        $data['view_file']='display';
        $data['msg'] =  'a'  ;
        $data['submsg'] = 'a'  ;
        $data['blue'] =  'a' ;
        $data['blue_link'] =  'a' ;
        
       
        
        echo Modules::run('ace_admin/blank',$data);
    }
    
    
    
  
    
    
    
   
}

