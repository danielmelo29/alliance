<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Mdl_area extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
	function get_area(){
		return $this->db->get('TAB_AREA');
	}
	
	function add_area($data){
		$this->db->insert('TAB_AREA',$data) ;
	}
	
	function delete_area($id){
		$this->db->where('ID_AREA',$id);
		$this->db->delete('TAB_AREA');	
	}
	
	function get_update_profissao($id){
	$this->db->where('ID_AREA',$id);	
	$this->db->select('ID_AREA,ARE_NOME,ARE_OBS');
	$this->db->from('TAB_AREA AS AREA');
	return $this->db->get()->result();
	}
	
	function update_area($id,$data){
	$this->db->where('ID_AREA',$id);
	$this->db->update('TAB_AREA',$data);	
	}
}