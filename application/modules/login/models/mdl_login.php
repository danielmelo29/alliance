<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Mdl_login extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    function logar($LOGIN, $SENHA) {
    	$this->db->where('USU_LOGIN', $LOGIN);
    	$this->db->where('USU_SENHA', $SENHA);
    	$query=$this->db->get('TAB_USUARIO');
    	if ($query->num_rows==1) {
    		return $query->result()[0];
    	}
    }
}