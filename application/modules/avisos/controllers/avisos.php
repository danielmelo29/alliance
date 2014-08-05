<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Avisos extends MX_Controller {
    
    public function __construct(){
        parent::__construct();    
        $this->load->helper(array('url','form'));    
    }
        
    
    public function index(){
        $this->load->model('mdl_avisos');
        $data['query'] = $this->mdl_avisos->get('aviso');
        
        $data['breadcrumbs']=array('Home'=>'avisos');  
        $data['titulo']='avisos Manutenção';
        $data['module']='avisos';
        $data['view_file']='display';
        
        
        $delete_id = $this->uri->segment(3);
        
            if (is_numeric($delete_id)) {
                $this->_delete($delete_id);
                redirect(base_url().'avisos');
            }
        
        echo Modules::run('ace_admin/blank',$data);
    }
    
    function create(){
        
        // Pega o id pelo link da página de administrator
        $update_id = $this->uri->segment(3);
        
        // pega o id do formulário via post(campo hidden)
        if (!isset($update_id)) {
            $update_id = $this->input->post('update_id',$id);
        }
        
        if (is_numeric($update_id)) {
            $data = $this->get_data_from_db($update_id);
            $data['update_id'] = $update_id;
        } else {
             $data = $this->get_data_from_post();
        }
        $data['breadcrumbs']=array('Home'=>'avisos','Novo'=>'avisos/create');      
        $data['module']='avisos';
        $data['titulo_pagina']='Novo Usuário';
        $data['view_file']='form';
        
        echo Modules::run('ace_admin/blank',$data);
    }
    
    function get_data_from_post(){
            $data['aviso']=$this->input->post('aviso',TRUE);
            $data['usuarios']=$this->input->post('usuarios',TRUE);
        return $data;
    }
    
    function get_data_from_db($update_id){
        $query = $this->get_where($update_id);
        foreach($query->result() as $row){
            $data['aviso']=$row->aviso;
            $data['usuarios']=$row->usuarios;
        }
        return $data;
    }
    
    function submit(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('aviso', 'aviso', 'required|xss_clean|min_length[3]');
        $this->form_validation->set_rules('usuarios', 'Usuário', 'required|xss_clean');
        
        $update_id = $this->input->post('update_id',TRUE);

        if ($this->form_validation->run() == FALSE){
            $this->create();
        }else{
            $data = $this->get_data_from_post();
            
                if (is_numeric($update_id)) {
                    $this->_update($update_id,$data);
                } else {
                    $this->_insert($data);
                }
                
            redirect('avisos');
        }
    }
    
       
    
    function get_where($id){
    $this->load->model('mdl_avisos');
    $query = $this->mdl_avisos->get_where($id);
    return $query;
    }
    
    function get_where_custom($col, $value) {
    $this->load->model('mdl_avisos');
    $query = $this->mdl_avisos->get_where_custom($col, $value);
    return $query;
    }
    
    function _insert($data){
    $this->load->model('mdl_avisos');
    $this->mdl_avisos->_insert($data);
    }
    
    function _update($id, $data){
    $this->load->model('mdl_avisos');
    $this->mdl_avisos->_update($id, $data);
    }
    
    function _delete($id){
    $this->load->model('mdl_avisos');
    $this->mdl_avisos->_delete($id);
    }
    
    function count_where($column, $value) {
    $this->load->model('mdl_avisos');
    $count = $this->mdl_avisos->count_where($column, $value);
    return $count;
    }
    
    function get_max() {
    $this->load->model('mdl_avisos');
    $max_id = $this->mdl_avisos->get_max();
    return $max_id;
    }
    
    function _custom_query($mysql_query) {
    $this->load->model('mdl_avisos');
    $query = $this->mdl_avisos->_custom_query($mysql_query);
    return $query;
    }
    
    
    
    
    
    
    
}

