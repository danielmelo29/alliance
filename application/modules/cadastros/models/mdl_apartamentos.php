<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Mdl_apartamentos extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
	
	
	function ID_APARTAMENTO_WHERE($id){
	$this->db->where('ID_APARTAMENTO',$id);
	$query = $this->db->get('TAB_APARTAMENTO')->result();	
	return $query ;
	}
	
	function get_apartamento_usuario(){
	$this->db->select('APT.ID_APARTAMENTO, APT.APA_APARTAMENTO,APT.APA_OBS,APT.APA_RAMAL');
	$this->db->from('TAB_APARTAMENTO AS APT');
	return $this->db->get()->result();
	}

	function insert_apartamento($id){
	$this->db->insert('TAB_APARTAMENTO',$id);	
	}

	function delete_apartamento($id){
	$this->db->where('ID_APARTAMENTO',$id);
 	$this->db->delete('TAB_APARTAMENTO');
	}
	
	function update_apartamento($id,$data){
	$this->db->where('ID_APARTAMENTO',$id);
	$this->db->update('TAB_APARTAMENTO',$data);	
	}
}