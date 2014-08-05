<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Solicitacoes extends MX_Controller {
    
    public function __construct(){
        parent::__construct();    
        $this->load->helper(array('url','form'));    
    }
        
    
    public function index(){
        $this->load->model('mdl_solicitacoes');
        $data['query'] = $this->mdl_solicitacoes->get('nome');
        
        $data['breadcrumbs']=array('Home'=>'solicitacoes');  
        $data['titulo']='Usuários';
        $data['module']='solicitacoes';
        $data['view_file']='display';
        
        
        $delete_id = $this->uri->segment(3);
        
            if (is_numeric($delete_id)) {
                $this->_delete($delete_id);
                redirect(base_url().'solicitacoes');
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
        $data['breadcrumbs']=array('Home'=>'solicitacoes','Novo'=>'solicitacoes/create');      
        $data['module']='solicitacoes';
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
        $this->form_validation->set_rules('email', 'E-mail', 'required|xss_clean|is_unique[solicitacoes.email]|valid_email');
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
                
            redirect('solicitacoes');
        }
    }
    
       
    
    function get_where($id){
    $this->load->model('mdl_solicitacoes');
    $query = $this->mdl_solicitacoes->get_where($id);
    return $query;
    }
    
    function get_where_custom($col, $value) {
    $this->load->model('mdl_solicitacoes');
    $query = $this->mdl_solicitacoes->get_where_custom($col, $value);
    return $query;
    }
    
    function _insert($data){
    unset($data['rsenha']);
    $this->load->model('mdl_solicitacoes');
    $this->mdl_solicitacoes->_insert($data);
    }
    
    function _update($id, $data){
    $this->load->model('mdl_solicitacoes');
    $this->mdl_solicitacoes->_update($id, $data);
    }
    
    function _delete($id){
    $this->load->model('mdl_solicitacoes');
    $this->mdl_solicitacoes->_delete($id);
    }
    
    function count_where($column, $value) {
    $this->load->model('mdl_solicitacoes');
    $count = $this->mdl_solicitacoes->count_where($column, $value);
    return $count;
    }
    
    function get_max() {
    $this->load->model('mdl_solicitacoes');
    $max_id = $this->mdl_solicitacoes->get_max();
    return $max_id;
    }
    
    function _custom_query($mysql_query) {
    $this->load->model('mdl_solicitacoes');
    $query = $this->mdl_solicitacoes->_custom_query($mysql_query);
    return $query;
    }
    
    
    
    
    
    
    
}

