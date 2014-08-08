<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends MX_Controller {
	
	function __construct() {
		 $this->load->model('mdl_login','login');
		 $this->load->helper(array('form'));
		
	}
	
	function index() {
 		$data['titulo_pagina']='Sistema Alliance - Login';
        $data['module']='login';
        $data['view_file']='display';
		echo Modules::run('ace_admin/login',$data);
		
	}
	
	public function redirecionamento_administrador($data){
		
		$data['breadcrumbs']=array('Home'=>'Agenda');
		$data['titulo']='Home Administrador';
		$data['module']='administrador';
		$data['view_file']='display';	
		echo Modules::run('ace_admin/blank',$data);
	}
	
	public function redirecionamento_morador($data){
	
		$data['breadcrumbs']=array('Home'=>'Agenda');
		$data['titulo']='Agenda Manutenção';
		$data['module']='agenda';
		$data['view_file']='display';
		echo Modules::run('ace_admin/morador',$data);
	}
	
	function autenticar()	{
		$login =  strtoupper($this->input->post('login'));
		$senha = sha1($this->input->post('senha'));
		$user = $this->load->login->logar($login,$senha);
		
		if ($user == TRUE){
			if ($user->USU_ATIVO == 1) {
					
/* Havendo um registro no banco de dados , será criado um array com informações do usuário para adicionar campos ao perfil do usuário
 *  , como fotos nome etc */
					
				$array = array ('id_user' => $user->ID_USUARIO , 'login' => $user->USU_LOGIN,'nome' => $user->USU_NOME.' '.$user->USU_SOBRENOME, 'foto' => $user->USU_FOTO) ;
					
				$this->session->set_userdata($array) ;
				echo '<pre>';
				print_r($user);
				exit;
			}else{
				echo 'usuario esta marcado como inativo ' ;
			}
	
			switch ($user->USU_PERMISSAO) {
				case 'A':
					$this->redirecionamento_administrador($data);
					break;
	
				case 'M':
					$this->redirecionamento_morador($data);;
					break;
	
				default:
					$this->redirecionamento_geral($data);
					break;
			}
		}else{
			echo 'usuario não esta cadastrado no sistema ' ;
		}
	}
	
	
	function validar() {
		;
	}
	
	function logout(){
	
		$this->session->sess_destroy();
		redirect(base_url()) ;
	
	}
	
	function submit(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('login', 'Login', 'required|xss_clean');
		$this->form_validation->set_rules('senha', 'Senha', 'required|xss_clean');
	
		if ($this->form_validation->run() == false){
			$this->index();
		}else{
			$this->autenticar();
		}
	}
}
?>