<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cftv extends MX_Controller {
    
   // Carregar os modulos do codeigniter
   
    public function __construct(){
        parent::__construct();    
       
	    $this->load->helper(array('url','form'));    
    }
        
    
     public function index(){
     $data['breadcrumbs']=array('Home'=>'dashboard','Câmeras'=>'cameras');  
     $data['titulo_pagina']='Câmeras';
     $data['module']='cftv';
     $data['view_file']='display';
	 $data['msg']='Lista ';
	 $data['submsg']='de Dvr\'s';
	 $data['blue']='Novo Dvr';
	 $data['blue_link']='dvr';
     echo Modules::run('ace_admin/blank',$data);
     }
    
    
    
  
    
    
    
   
}

