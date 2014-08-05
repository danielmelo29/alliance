<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Funcionarios extends MX_Controller {
    
    public function __construct(){
        parent::__construct();    
        $this->load->helper(array('url','form'));    
    }
        
    
    public function index(){
        $this->load->model('mdl_funcionarios');
        $data['query'] = $this->mdl_funcionarios->get('nome');
        
        $data['breadcrumbs']=array('Home'=>'dashboard','funcionarios' =>'funcionarios');  
        $data['titulo_pagina']='Funcionários';
        $data['module']='funcionarios';
        $data['view_file']='display';
        $data['msg']='Lista de ';
		$data['submsg']='funcionarios';
		$data['blue']='Novo funcionario';
		$data['blue_link']='#';
        
        $delete_id = $this->uri->segment(3);
        
            if (is_numeric($delete_id)) {
                $this->_delete($delete_id);
                redirect(base_url().'funcionarios');
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
        $data['breadcrumbs']=array('Home'=>'funcionarios','Novo'=>'funcionarios/create');      
        $data['module']='funcionarios';
        $data['titulo']='Novo Usuário';
        $data['view_file']='form';
        
        echo Modules::run('ace_admin/blank',$data);
    }
    
    function get_data_from_post(){
            $data['nome']=$this->input->post('nome',TRUE);
            $data['cargo']=$this->input->post('cargo',TRUE);
            $data['h_inicio']=$this->input->post('h_inicio',TRUE);
            $data['h_fim']=$this->input->post('h_fim',TRUE);
        return $data;
    }
    
    function get_data_from_db($update_id){
        $query = $this->get_where($update_id);
        foreach($query->result() as $row){
            $data['nome']=$row->nome;
            $data['cargo']=$row->cargo;
            $data['h_inicio']=$row->h_inicio;
            $data['h_fim']=$row->h_fim;
        }
        return $data;
    }
    
    function submit(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nome', 'Nome', 'required|xss_clean|min_length[3]');
        $this->form_validation->set_rules('cargo', 'Cargo', 'required|xss_clean');
        $this->form_validation->set_rules('h_inicio', 'Horário de Início', 'required|xss_clean');
        $this->form_validation->set_rules('h_fim', 'Horário de saída', 'required|xss_clean');
       
        
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
                
            redirect('funcionarios');
        }
    }
    
       
    
    function get_where($id){
    $this->load->model('mdl_funcionarios');
    $query = $this->mdl_funcionarios->get_where($id);
    return $query;
    }
    
    function get_where_custom($col, $value) {
    $this->load->model('mdl_funcionarios');
    $query = $this->mdl_funcionarios->get_where_custom($col, $value);
    return $query;
    }
    
    function _insert($data){
    unset($data['rsenha']);
    $this->load->model('mdl_funcionarios');
    $this->mdl_funcionarios->_insert($data);
    }
    
    function _update($id, $data){
    $this->load->model('mdl_funcionarios');
    $this->mdl_funcionarios->_update($id, $data);
    }
    
    function _delete($id){
    $this->load->model('mdl_funcionarios');
    $this->mdl_funcionarios->_delete($id);
    }
    
    function count_where($column, $value) {
    $this->load->model('mdl_funcionarios');
    $count = $this->mdl_funcionarios->count_where($column, $value);
    return $count;
    }
    
    function get_max() {
    $this->load->model('mdl_funcionarios');
    $max_id = $this->mdl_funcionarios->get_max();
    return $max_id;
    }
    
    function _custom_query($mysql_query) {
    $this->load->model('mdl_funcionarios');
    $query = $this->mdl_funcionarios->_custom_query($mysql_query);
    return $query;
    }
    
    
    
    
    
    
    
}

