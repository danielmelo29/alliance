<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Mdl_reservas extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    

    function get_table() {
    $table = "reservas";
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
    
    function get_where($idreservas){
    $table = $this->get_table();
    $this->db->where('idreservas', $idreservas);
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
    
    function _update($idreservas, $data){
    $table = $this->get_table();
    $this->db->where('idreservas', $idreservas);
    $this->db->update($table, $data);
    }
    
    function _delete($idreservas){
    $table = $this->get_table();
    $this->db->where('idreservas', $idreservas);
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
    $this->db->select_max('idreservas');
    $query = $this->db->get($table);
    $row=$query->row();
    $idreservas=$row->idreservas;
    return $idreservas;
    }
    
    function _custom_query($mysql_query) {
    $query = $this->db->query($mysql_query);
    return $query;
    }
    
}