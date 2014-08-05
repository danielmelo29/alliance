<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Mdl_estacionamento extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
	public function get_estacionamento_apt(){
	return	$this->db->get('TAB_APARTAMENTO');
	}
	
	
	
	public function get_estacionamento(){
	$this->db->where('ATIVO',1 );	
	$this->db->select("GAR.GAR_VAGA ,GAR.ID_GARAGEM, GAR.GAR_OBS ,GAR.GAR_DATA_CADASTRO , APA.APA_APARTAMENTO");
	$this->db->from("TAB_GARAGEM AS GAR");	
	$this->db->join("TAB_APARTAMENTO AS APA","APA.ID_APARTAMENTO = GAR.ID_APARTAMENTO");
	return $this->db->get();
	}
	
	public function add_estacionamento($data){
	$this->db->insert('TAB_GARAGEM',$data);
	}
	
	public function delete_estacionamento($id){
	$this->db->where('ID_GARAGEM',$id);
	$this->db->delete('TAB_GARAGEM');
	}
	
	function get_update_estacionamento($id){
	$this->db->where('ID_GARAGEM',$id);	
	$this->db->select("GAR.GAR_VAGA ,GAR.ID_GARAGEM, GAR.GAR_OBS ,GAR.GAR_DATA_CADASTRO , APA.APA_APARTAMENTO");
	$this->db->from("TAB_GARAGEM AS GAR");	
	$this->db->join("TAB_APARTAMENTO AS APA","APA.ID_APARTAMENTO = GAR.ID_APARTAMENTO");
	return $this->db->get()->result();
	}
	
	function update_estacionamento($id,$data){
	$this->db->where('ID_GARAGEM',$id);
	$this->db->update('TAB_GARAGEM',$data);	
	}

}