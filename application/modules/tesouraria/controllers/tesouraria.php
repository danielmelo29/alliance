<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tesouraria extends MX_Controller {
    
    public function __construct(){
        parent::__construct();    
        $this->load->helper(array('url','form'));    
    }
        
    
    public function index(){
        $this->load->model('mdl_tesouraria');
        $data['query'] = $this->mdl_tesouraria->get('descricao');
        
        $data['breadcrumbs']=array('Home'=>'tesouraria');  
        $data['titulo']='Tesouraria';
        $data['module']='tesouraria';
        $data['view_file']='display';
        
        
        $delete_id = $this->uri->segment(3);
        
            if (is_numeric($delete_id)) {
                $this->_delete($delete_id);
                redirect(base_url().'tesouraria');
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
        $data['breadcrumbs']=array('Home'=>'tesouraria','Novo'=>'tesouraria/create');      
        $data['module']='tesouraria';
        $data['titulo']='Novo Usuário';
        $data['view_file']='form';
        
        echo Modules::run('ace_admin/blank',$data);
    }
    
    function get_data_from_post(){
            $data['descricao']=$this->input->post('descricao',TRUE);
            $data['data']=$this->input->post('data',TRUE);
            $data['valor']=$this->input->post('valor',TRUE);
            $data['tipo']=$this->input->post('tipo',TRUE);
        return $data;
    }
    
    function get_data_from_db($update_id){
        $query = $this->get_where($update_id);
        foreach($query->result() as $row){
            $data['descricao']=$row->descricao;
            $data['data']=$row->data;
            $data['valor']=$row->valor;
            $data['tipo']=$row->tipo;
        }
        return $data;
    }
    
    function submit(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('descricao', 'descricao', 'required|xss_clean|min_length[3]');
        $this->form_validation->set_rules('data', 'data', 'required|xss_clean|min_length[3]');
        $this->form_validation->set_rules('valor', 'valor', 'required|xss_clean|min_length[3]');
        $this->form_validation->set_rules('tipo', 'tipo', 'required|xss_clean');
        
        
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
                
            redirect('tesouraria');
        }
    }
    
       
    
    function get_where($id){
    $this->load->model('mdl_tesouraria');
    $query = $this->mdl_tesouraria->get_where($id);
    return $query;
    }
    
    function get_where_custom($col, $value) {
    $this->load->model('mdl_tesouraria');
    $query = $this->mdl_tesouraria->get_where_custom($col, $value);
    return $query;
    }
    
    function _insert($data){
    unset($data['rsenha']);
    $this->load->model('mdl_tesouraria');
    $this->mdl_tesouraria->_insert($data);
    }
    
    function _update($id, $data){
    $this->load->model('mdl_tesouraria');
    $this->mdl_tesouraria->_update($id, $data);
    }
    
    function _delete($id){
    $this->load->model('mdl_tesouraria');
    $this->mdl_tesouraria->_delete($id);
    }
    
    function count_where($column, $value) {
    $this->load->model('mdl_tesouraria');
    $count = $this->mdl_tesouraria->count_where($column, $value);
    return $count;
    }
    
    function get_max() {
    $this->load->model('mdl_tesouraria');
    $max_id = $this->mdl_tesouraria->get_max();
    return $max_id;
    }
    
    function _custom_query($mysql_query) {
    $this->load->model('mdl_tesouraria');
    $query = $this->mdl_tesouraria->_custom_query($mysql_query);
    return $query;
    }
    
    
    
    
    
    
    
}

