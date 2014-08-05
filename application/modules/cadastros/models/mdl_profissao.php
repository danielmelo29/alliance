<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Mdl_profissao extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
	
	
	function get_profissao(){
	return $this->db->get('TAB_PROFISSAO')->result();	
	}
	
	function add_profissao($data){
	$this->db->insert('TAB_PROFISSAO',$data);	
	}

	function delete_profissao($id){
	$this->db->where('ID_PROFISSAO',$id);
 	$this->db->delete('TAB_PROFISSAO');
	}
	
	function get_update_profissao($id){
	$this->db->where('ID_PROFISSAO',$id);	
	return $this->db->get('TAB_PROFISSAO')->result();
	
	}
	
	function update_profissao($id,$data){
	$this->db->where('ID_PROFISSAO',$id);
	$this->db->update('TAB_PROFISSAO',$data);	
	}
	
	
}