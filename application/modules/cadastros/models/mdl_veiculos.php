<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Mdl_veiculos extends CI_Model {

    function __construct()
    {
    parent::__construct();
    }
    
	function get_cat_veiculo(){
	return	$this->db->get('TAB_CAT_VEICULO')->result();
	}
	
	function insert_veiculo($data){
	$this->db->insert('TAB_CAT_VEICULO',$data);
	}
	
	function  delete_veiculo($id){
	$this->db->where('ID_CAT_VEICULO',$id);
	$this->db->delete('TAB_CAT_VEICULO');
	}
	
	function get_update_veiculo($id){
	$this->db->where('ID_CAT_VEICULO',$id) ;
	return $this->db->get('TAB_CAT_VEICULO')->result();	
	}
	
	function update_veiculo($id,$data){
	$this->db->where('ID_CAT_VEICULO',$id) ;
	$this->db->update('TAB_CAT_VEICULO',$data);	
	}
	
}