<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Mdl_area extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    

    function get_area() {
    $table = $this->db->get('areas')->result();
    return $table;
    }
    
       
}