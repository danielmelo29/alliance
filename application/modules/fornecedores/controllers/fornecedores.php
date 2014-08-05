<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fornecedores extends MX_Controller {
    
    public function __construct(){
        parent::__construct();    
        $this->load->helper(array('url','form'));    
    }
        
    
    public function index(){
        $this->load->model('mdl_fornecedores');
        $data['query'] = $this->mdl_fornecedores->get('nome');
        
        $data['breadcrumbs']=array('Home'=>'fornecedores');  
        $data['titulo_pagina']='Fornecedores';
        $data['module']='fornecedores';
        $data['view_file']='display';
		$data['msg']='Lista ';
		$data['submsg']='de fornecedores';
		$data['blue']='Novo fornecedor';
		$data['blue_link']='fornecedores';
		
        
        
        $delete_id = $this->uri->segment(3);
        
            if (is_numeric($delete_id)) {
                $this->_delete($delete_id);
                redirect(base_url().'fornecedores');
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
        $data['breadcrumbs']=array('Home'=>'fornecedores','Novo'=>'fornecedores/create');      
        $data['module']='fornecedores';
        $data['titulo']='Novo Usuário';
        $data['view_file']='form';
        
        echo Modules::run('ace_admin/blank',$data);
    }
    
    function get_data_from_post(){
            $data['nome']=$this->input->post('nome',TRUE);
            $data['cnpj']=$this->input->post('cnpj',TRUE);
            $data['descricao']=$this->input->post('descricao',TRUE);
            $data['responsavel']=$this->input->post('responsavel',TRUE);
            $data['site']=$this->input->post('site',TRUE);
            $data['email']=$this->input->post('email',TRUE);
                
        return $data;
    }
    
    function get_data_from_db($update_id){
        $query = $this->get_where($update_id);
        foreach($query->result() as $row){
            $data['nome']=$row->nome;
            $data['cnpj']=$row->cnpj;
            $data['descricao']=$row->descricao;
            $data['responsavel']=$row->responsavel;
            $data['site']=$row->site;
            $data['email']=$row->email;
        }
        return $data;
    }
    
    function submit(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nome', 'Nome', 'required|xss_clean|min_length[3]');
        $this->form_validation->set_rules('cnpj', 'CNPJ', 'required|xss_clean|min_length[3]');
        $this->form_validation->set_rules('descricao', 'Descricao', 'required|xss_clean|min_length[3]');
        $this->form_validation->set_rules('responsavel', 'Responsavel', 'required|xss_clean|min_length[3]');
        $this->form_validation->set_rules('site', 'Site', 'required|xss_clean|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'xss_clean');
        
        
        
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
                
            redirect('fornecedores');
        }
    }
    
       
    
    function get_where($id){
    $this->load->model('mdl_fornecedores');
    $query = $this->mdl_fornecedores->get_where($id);
    return $query;
    }
    
    function get_where_custom($col, $value) {
    $this->load->model('mdl_fornecedores');
    $query = $this->mdl_fornecedores->get_where_custom($col, $value);
    return $query;
    }
    
    function _insert($data){
    unset($data['rsenha']);
    $this->load->model('mdl_fornecedores');
    $this->mdl_fornecedores->_insert($data);
    }
    
    function _update($id, $data){
    $this->load->model('mdl_fornecedores');
    $this->mdl_fornecedores->_update($id, $data);
    }
    
    function _delete($id){
    $this->load->model('mdl_fornecedores');
    $this->mdl_fornecedores->_delete($id);
    }
    
    function count_where($column, $value) {
    $this->load->model('mdl_fornecedores');
    $count = $this->mdl_fornecedores->count_where($column, $value);
    return $count;
    }
    
    function get_max() {
    $this->load->model('mdl_fornecedores');
    $max_id = $this->mdl_fornecedores->get_max();
    return $max_id;
    }
    
    function _custom_query($mysql_query) {
    $this->load->model('mdl_fornecedores');
    $query = $this->mdl_fornecedores->_custom_query($mysql_query);
    return $query;
    }
    
    
    
    
    
    
    
}

