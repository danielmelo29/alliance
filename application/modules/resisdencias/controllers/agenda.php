<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Agenda extends MX_Controller {
    
    public function __construct(){
        parent::__construct();    
        $this->load->helper(array('url','form'));    
    }
        
    
    public function index(){
        $this->load->model('mdl_agenda');
        $data['query'] = $this->mdl_agenda->get('titulo');
        
        $data['breadcrumbs']=array('Home'=>'Agenda');  
        $data['titulo']='Agenda Manutenção';
        $data['module']='agenda';
        $data['view_file']='display';
        
        
        $delete_id = $this->uri->segment(3);
        
            if (is_numeric($delete_id)) {
                $this->_delete($delete_id);
                redirect(base_url().'agenda');
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
        $data['breadcrumbs']=array('Home'=>'agenda','Novo'=>'agenda/create');      
        $data['module']='agenda';
        $data['titulo_pagina']='Novo Usuário';
        $data['view_file']='form';
        
        echo Modules::run('ace_admin/blank',$data);
    }
    
    function get_data_from_post(){
            $data['titulo']=$this->input->post('titulo',TRUE);
            $data['data']=$this->input->post('data',TRUE);
            $data['hora']=$this->input->post('hora',TRUE);
            $data['descricao']=$this->input->post('descricao',TRUE);
            $data['usuarios']=$this->input->post('usuarios',TRUE);
        return $data;
    }
    
    function get_data_from_db($update_id){
        $query = $this->get_where($update_id);
        foreach($query->result() as $row){
            $data['titulo']=$row->titulo;
            $data['data']=$row->data;
            $data['hora']=$row->hora;
            $data['descricao']=$row->descricao;
            $data['usuarios']=$row->usuarios;
        }
        return $data;
    }
    
    function submit(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('titulo', 'titulo', 'required|xss_clean|min_length[3]');
        $this->form_validation->set_rules('data', 'Data', 'required|min_length[6]|xss_clean');
        $this->form_validation->set_rules('hora', 'Horário', 'required|min_length[6]|xss_clean');
        $this->form_validation->set_rules('descricao', 'Descrição', 'required|xss_clean');
    
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
                
            redirect('agenda');
        }
    }
    
       
    
    function get_where($id){
    $this->load->model('mdl_agenda');
    $query = $this->mdl_agenda->get_where($id);
    return $query;
    }
    
    function get_where_custom($col, $value) {
    $this->load->model('mdl_agenda');
    $query = $this->mdl_agenda->get_where_custom($col, $value);
    return $query;
    }
    
    function _insert($data){
    $this->load->model('mdl_agenda');
    $this->mdl_agenda->_insert($data);
    }
    
    function _update($id, $data){
    $this->load->model('mdl_agenda');
    $this->mdl_agenda->_update($id, $data);
    }
    
    function _delete($id){
    $this->load->model('mdl_agenda');
    $this->mdl_agenda->_delete($id);
    }
    
    function count_where($column, $value) {
    $this->load->model('mdl_agenda');
    $count = $this->mdl_agenda->count_where($column, $value);
    return $count;
    }
    
    function get_max() {
    $this->load->model('mdl_agenda');
    $max_id = $this->mdl_agenda->get_max();
    return $max_id;
    }
    
    function _custom_query($mysql_query) {
    $this->load->model('mdl_agenda');
    $query = $this->mdl_agenda->_custom_query($mysql_query);
    return $query;
    }
    
    
    
    
    
    
    
}

