<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apartamentos extends MX_Controller {
    
    public function __construct(){
        parent::__construct();    
        
		$this->load->model('mdl_apartamentos','apt'); 
		$this->load->helper('text');   
    }
        
    
    public function index(){
    $data['apt1'] = $this->apt->get_apt()->result();	
	$data['breadcrumbs']=array('Home'=>'teste');  
    $data['titulo_pagina']='Apartamentos';
    $data['module']='apartamentos';
    $data['view_file']='display';
	$data['msg']='Gerenciar';
	$data['submsg']='Apartamentos';
	$data['blue']='Novo apartamento';
	$data['blue_link']='cadastros/apt';
    echo Modules::run('ace_admin/blank',$data);
    }
    
    
}

