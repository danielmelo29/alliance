<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ace_admin extends MX_Controller {

	function blank($data) {
		$this->load->view ( 'blank', $data );
	}
	function login($data) {
		$this->load->view ( 'login',$data );
	}
	function admin($data) {
		$this->load->view ( 'admin', $data );
	}
	
}

