<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ace_admin extends MX_Controller {

	
	
	
	


    function blank($data){
    $this->load->view('blank',$data);
    }
    function login(){
    $this->load->view('login');
    }
    
    function admin($data){
    $this->load->view('admin',$data);
    }
	
	// minhas modificações método de validação de usuário 
	
	function validar()
	{
		//$this->load->library('form_validation');
		
		$log =	    $this->input->post('login') ;
		$new_senha =	$this->input->post('senha') ;
		$login =  strtoupper($log);
	   	$senha = sha1($new_senha);
		
		
		//$this->form_validation->set_rules('login', 'Login', 'required');
		//$this->form_validation->set_rules('password', 'Password', 'required');
		
	//if ($this->form_validation->run() == TRUE)
	//{
			
	$this->db->where('USU_LOGIN',$login);
	$this->db->where('USU_SENHA',$senha);
	$user =	$this->db->get('TAB_USUARIO')->result() ;
				
			echo '<pre>';
			print_r($user);
			echo '</pre>';
	if ($user == TRUE)
	{
	
		
	if ($user[0]->USU_ATIVO == 1) {
		
		/* Se houver um registro no banco de dados ,
		 * um array com informações do usuário será criado ,
		 * essas informações serão usadas para adicionar campos ao perfil do usuário , por exemplo fotos 
		 * e etc ...
		 *
		 *  */
		
		$array = array ('id_user' => $user[0]->ID_USUARIO , 'login' => $user[0]->USU_NOME, 'logado' => TRUE, 'foto' => $user[0]->USU_FOTO) ;
		
		$this->session->set_userdata($array) ;
		
		
		
	if ($user[0]->USU_PERMISSAO == 'A')
	{
			
		echo 'usuarios e administrador' ;
		
		// direcionar o usuário administrador para sua tela
		
		redirect(base_url('dashboard'));
	 	
	}else
	{
		/*
			echo '<pre>' ;
		 print_r($this->db->get('ci_sessions')->result()) ;
			echo '</pre>' ;
		*/
		 //redirect(base_url('usuarios'));
		
		
	}
	
	}else 
		{
			echo 'usuario esta marcado como inativo ' ;
		}
	
	
	
	}else
		{
			echo 'Não existe cadastro para este usúario ' ;	
		}
	
		
		
		
		
		
	}






	function logout(){
		
		$this->session->sess_destroy();
		redirect(base_url()) ;
		
	}
	
	// final método de validação 	
}

