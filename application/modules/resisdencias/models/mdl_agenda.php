<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Mdl_agenda extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    

    function get_table() {
    $table = "agenda_manutencao";
    return $table;
    }
    
    function get($order_by){
    $table = $this->get_table();
    $this->db->order_by($order_by);
    $query=$this->db->get($table);
    return $query;
    }
    
    function get_with_limit($limit, $offset, $order_by) {
    $table = $this->get_table();
    $this->db->limit($limit, $offset);
    $this->db->order_by($order_by);
    $query=$this->db->get($table);
    return $query;
    }
    
    function get_where($idagenda){
    $table = $this->get_table();
    $this->db->where('idagenda', $idagenda);
    $query=$this->db->get($table);
    return $query;
    }
    
    function get_where_custom($col, $value) {
    $table = $this->get_table();
    $this->db->where($col, $value);
    $query=$this->db->get($table);
    return $query;
    }
    
    function _insert($data){
    $table = $this->get_table();
    $this->db->insert($table, $data);
    }
    
    function _update($idagenda, $data){
    $table = $this->get_table();
    $this->db->where('idagenda', $idagenda);
    $this->db->update($table, $data);
    }
    
    function _delete($idagenda){
    $table = $this->get_table();
    $this->db->where('idagenda', $idagenda);
    $this->db->delete($table);
    }
    
    function count_where($column, $value) {
    $table = $this->get_table();
    $this->db->where($column, $value);
    $query=$this->db->get($table);
    $num_rows = $query->num_rows();
    return $num_rows;
    }
    
    function count_all() {
    $table = $this->get_table();
    $query=$this->db->get($table);
    $num_rows = $query->num_rows();
    return $num_rows;
    }
    
    function get_max() {
    $table = $this->get_table();
    $this->db->select_max('idagenda');
    $query = $this->db->get($table);
    $row=$query->row();
    $idagenda=$row->idagenda;
    return $idagenda;
    }
    
    function _custom_query($mysql_query) {
    $query = $this->db->query($mysql_query);
    return $query;
    }
    
}