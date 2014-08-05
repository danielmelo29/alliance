<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class reservas extends MX_Controller {
    
    public function __construct(){
        parent::__construct();    
        $this->load->helper(array('url','form'));    
    }
        
    
    public function index(){
        $this->load->model('mdl_reservas');
        $data['query'] = $this->mdl_reservas->get('dt_inicio');
        
        $data['breadcrumbs']=array('Home'=>'reservas');  
        $data['titulo_pagina']='Reservas';
        $data['module']='reservas';
        $data['view_file']='display';
        
        
        $delete_id = $this->uri->segment(3);
        
            if (is_numeric($delete_id)) {
                $this->_delete($delete_id);
                redirect(base_url().'reservas');
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
        $data['breadcrumbs']=array('Home'=>'reservas','Novo'=>'reservas/create');      
        $data['module']='reservas';
        $data['titulo_pagina']='Novo Usuário';
        $data['view_file']='form';
        
        echo Modules::run('ace_admin/blank',$data);
    }
    
    function get_data_from_post(){
            $data['dt_inicio']=$this->input->post('dt_inicio',TRUE);
            $data['dt_fim']=$this->input->post('dt_fim',TRUE);
            $data['valor']=$this->input->post('valor',TRUE);
            $data['status']=$this->input->post('status',TRUE);
            $data['obs']=$this->input->post('obs',TRUE);
            $data['areas']=$this->input->post('areas',TRUE);
            $data['usuarios']=$this->input->post('usuarios',TRUE);
        return $data;
    }
    
    function get_data_from_db($update_id){
        $query = $this->get_where($update_id);
        foreach($query->result() as $row){
            $data['dt_inicio']=$row->dt_inicio;
            $data['dt_fim']=$row->dt_fim;
            $data['valor']=$row->valor;
            $data['status']=$row->status;
            $data['obs']=$row->obs;
            $data['areas']=$row->areas;
            $data['usuarios']=$row->usuarios;
        }
        return $data;
    }
    
    function submit(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('dt_inicio', 'dt_inicio', 'required|xss_clean|min_length[3]');
        $this->form_validation->set_rules('dt_fim', 'dt_fim', 'required|min_length[6]|xss_clean');
        $this->form_validation->set_rules('valor', 'Valor', 'required|xss_clean');
       // $this->form_validation->set_rules('status', 'Status', 'required|xss_clean');
        $this->form_validation->set_rules('obs', 'Observação', 'required|xss_clean');
        $this->form_validation->set_rules('areas', 'Área', 'required|xss_clean');
    
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
                
            redirect('reservas');
        }
    }
    
       
    
    function get_where($id){
    $this->load->model('mdl_reservas');
    $query = $this->mdl_reservas->get_where($id);
    return $query;
    }
    
    function get_where_custom($col, $value) {
    $this->load->model('mdl_reservas');
    $query = $this->mdl_reservas->get_where_custom($col, $value);
    return $query;
    }
    
    function _insert($data){
    $this->load->model('mdl_reservas');
    $this->mdl_reservas->_insert($data);
    }
    
    function _update($id, $data){
    $this->load->model('mdl_reservas');
    $this->mdl_reservas->_update($id, $data);
    }
    
    function _delete($id){
    $this->load->model('mdl_reservas');
    $this->mdl_reservas->_delete($id);
    }
    
    function count_where($column, $value) {
    $this->load->model('mdl_reservas');
    $count = $this->mdl_reservas->count_where($column, $value);
    return $count;
    }
    
    function get_max() {
    $this->load->model('mdl_reservas');
    $max_id = $this->mdl_reservas->get_max();
    return $max_id;
    }
    
    function _custom_query($mysql_query) {
    $this->load->model('mdl_reservas');
    $query = $this->mdl_reservas->_custom_query($mysql_query);
    return $query;
    }
    
    
    
    
    
    
    
}

