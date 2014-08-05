<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Mdl_apartamentos extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
	function get_apt(){
	$apt = $this->db->get('TAB_APARTAMENTO');
	return $apt;		
	}
	
	

}