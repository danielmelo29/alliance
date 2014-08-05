<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendario extends MX_Controller {
    
     
    
    public function index(){
        //$this->load->model('mdl_usuarios');
       // $data['query'] = $this->mdl_usuarios->get('nome');
        
        $data['breadcrumbs']=array('Home'=>'usuarios');  
        $data['titulo_pagina']='Calendario_reservas';
        $data['module']='calendario';
        $data['view_file']='display';
        $data['msg']='Calendário';
		$data['submsg']='Visualize todos os eventos';
		$data['blue']='Nova reserva';
		$data['blue_link']='reserva';
        
        
        echo Modules::run('ace_admin/blank',$data);
    }
    
   

    
}
