<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ace_admin extends MX_Controller {

	function administrador($data) {
		$this->load->view ( 'administrador', $data );
	}
	
	function morador($data) {
		$this->load->view ( 'morador', $data );
	}
	
	function login($data) {
		$this->load->view ( 'login',$data );
	}
	
}

