<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Telefones extends MX_Controller {
    
    public function __construct(){
        parent::__construct();    
        $this->load->helper(array('url','form'));    
    }
        
    
    public function index(){
               
        $data['breadcrumbs']=array('Home'=>'dashboard');  
        $data['titulo_pagina']='Ramais';
        $data['module']='telefones';
        $data['view_file']='display';
        $data['msg'] = 'Lista' ; 
        $data['submsg'] = 'Ramais telefonicos' ;
		$data['blue'] = 'Adicionar ramal' ;
		$data['blue_link'] = '#' ;
		
		
        
           
        
        echo Modules::run('ace_admin/blank',$data);
    }
    
 
    
}

