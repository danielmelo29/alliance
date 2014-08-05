<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Documentos extends MX_Controller {
    
    public function __construct(){
        parent::__construct();    
        $this->load->helper(array('url','form'));    
    }
        
    
    public function index(){
        $this->load->model('mdl_documentos');
        $data['query'] = $this->mdl_documentos->get_custom('select u.nome,d.* from documentos d, usuarios u where u.idusuarios=d.usuarios');
        
        $data['breadcrumbs']=array('Home'=>'documentos');  
        $data['titulo_pagina']='Documentos';
        $data['module']='documentos';
        $data['view_file']='display';
		$data['msg']='Gerenciador ';
		$data['submsg']='de Documentos';
		$data['blue']='Novo fornecedor';
		$data['blue_link']='Documentos';
        
        
        $delete_id = $this->uri->segment(3);
        
            if (is_numeric($delete_id)) {
                $this->_delete($delete_id);
                redirect(base_url().'documentos');
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
        $data['breadcrumbs']=array('Home'=>'documentos','Novo'=>'documentos/create');      
        $data['module']='documentos';
        $data['titulo']='Novo Usuário';
        $data['view_file']='form';
        
        echo Modules::run('ace_admin/blank',$data);
    }
    
    function get_data_from_post(){
            $data['nome']=$this->input->post('nome',TRUE);
            $data['senha']=$this->input->post('senha',TRUE);
            $data['rsenha']=$this->input->post('rsenha',TRUE);
            $data['email']=$this->input->post('email',TRUE);
            $data['tipo']=$this->input->post('tipo',TRUE);
            $data['ativo']=$this->input->post('ativo',TRUE);
        return $data;
    }
    
    function get_data_from_db($update_id){
        $query = $this->get_where($update_id);
        foreach($query->result() as $row){
            $data['nome']=$row->nome;
            $data['senha']=$row->senha;
            $data['email']=$row->email;
            $data['tipo']=$row->tipo;
            $data['ativo']=$row->ativo;
        }
        return $data;
    }
    
    function submit(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nome', 'Nome', 'required|xss_clean|min_length[3]');
        $this->form_validation->set_rules('senha', 'Senha', 'required|min_length[6]|xss_clean');
        $this->form_validation->set_rules('rsenha', 'Repita a Senha', 'required|min_length[6]|xss_clean|matches[senha]');
        $this->form_validation->set_rules('email', 'E-mail', 'required|xss_clean|is_unique[documentos.email]|valid_email');
        $this->form_validation->set_rules('tipo', 'Tipo', 'required|xss_clean');
        $this->form_validation->set_rules('ativo', 'Ativo', 'required|xss_clean');
        
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
                
            redirect('documentos');
        }
    }
    
       
    
    function get_where($id){
    $this->load->model('mdl_documentos');
    $query = $this->mdl_documentos->get_where($id);
    return $query;
    }
    
    function get_where_custom($col, $value) {
    $this->load->model('mdl_documentos');
    $query = $this->mdl_documentos->get_where_custom($col, $value);
    return $query;
    }
    
    function _insert($data){
    unset($data['rsenha']);
    $this->load->model('mdl_documentos');
    $this->mdl_documentos->_insert($data);
    }
    
    function _update($id, $data){
    $this->load->model('mdl_documentos');
    $this->mdl_documentos->_update($id, $data);
    }
    
    function _delete($id){
    $this->load->model('mdl_documentos');
    $this->mdl_documentos->_delete($id);
    }
    
    function count_where($column, $value) {
    $this->load->model('mdl_documentos');
    $count = $this->mdl_documentos->count_where($column, $value);
    return $count;
    }
    
    function get_max() {
    $this->load->model('mdl_documentos');
    $max_id = $this->mdl_documentos->get_max();
    return $max_id;
    }
    
    function _custom_query($mysql_query) {
    $this->load->model('mdl_documentos');
    $query = $this->mdl_documentos->_custom_query($mysql_query);
    return $query;
    }
    
    
    
    
    
    
    
}

