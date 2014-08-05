<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Mdl_veiculos extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
	function get_veiculos()
	{
		$vei = $this->db->get('TAB_VEICULOS_USUARIOS')->result();
		return $vei ;
	}
    
    function get_modelos_veiculos()
	{
		$vei = $this->db->get('TAB_MODELOS_VEICULOS')->result();
		return $vei ;
	}
    
}