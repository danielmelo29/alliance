<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends MX_Controller {
    
    public function __construct(){
        	
		 parent::__construct();    
         $this->load->helper(array('url','form','text'));    
		 $this->load->model('mdl_usuarios','usuario');
        	
			
		//if(!$this->session->userdata('logado') || !$this->session->userdata('login')  ){
			
			//redirect(base_url());
		
		//}
	 }
    	public function index(){
        $data['_selec'] = $this->usuario->get_table_simples();
		$data['_select'] = $this->usuario->get_table_contatos();
		$data['breadcrumbs']=array('Home'=>'dashboard','Usuários'=>'usuarios');  
        $data['titulo_pagina']='Usuários';
        $data['module']='usuarios';
        $data['view_file']='display';
		$data['msg']='Gerência' ;
		$data['submsg']='de usuários';
		$data['blue']='Novo Usuário' ;
		$data['blue_link']='cadastros';
        echo Modules::run('ace_admin/blank',$data);
    	}

		public function xml_usuarios(){
		$data['xml_dados'] = $this->usuario->new_table();	
		$data['titulo_pagina']='Usuários/get';
        $data['module']='usuarios';
        $data['view_file']='table_user.php';
		$data['msg']='Receber' ;
		$data['submsg']='os dados da tabela';
		$data['blue']='TAB_USUARIO' ;
		$data['blue_link']='#';
        echo Modules::run('ace_admin',$data);
    	}    
}

