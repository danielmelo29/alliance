<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cadastros extends MX_Controller {
    
    public function __construct(){
        parent::__construct();    
        $this->load->helper(array('url','form'));    
    
		$this->load->model('mdl_usuarios','table_user');
		$this->load->model('mdl_veiculos','veiculo');
		$this->load->model('mdl_area','area');
		$this->load->model('mdl_apartamentos','apt');
		
	}
        
    
    public function index(){
    $data['breadcrumbs']=array('Home'=>'dashboard','cadastros_usuario'=>'');  
    $data['titulo_pagina']='Cadastro/usuario';
    $data['module']='cadastros';
    $data['view_file']='user';
	$data['msg']='Cadastros' ;
	$data['submsg']='novos usuários';
	$data['blue']='Gerenciar usuários' ;
	$data['blue_link']='usuarios';
    echo Modules::run('ace_admin/blank',$data);
    }
	
	// Bloco crud do apartamento
	
	public function apartamento(){
	$data['query'] = $this->apt->get_apartamento_usuario();	
    $data['breadcrumbs']=array('Home'=>'dashboard','Apartamentos'=>'');  
    $data['titulo_pagina']='Cadastro/apt';
    $data['module']='cadastros';
    $data['view_file']='apt';
	$data['msg']='Cadastrar' ;
	$data['submsg']='Apartamento';
	$data['blue']='Gerenciar apartamentos' ;
	$data['blue_link']= '#';
    echo Modules::run('ace_admin/blank',$data);
    }
	
	public function add_apartamento(){
	$apt['APA_APARTAMENTO'] = $this->input->post('apt');
	$apt['APA_OBS'] =strtoupper($this->input->post('obs_apt'));
	$apt['APA_RAMAL'] = (int)$this->input->post('ramal');
	$this->apt->insert_apartamento($apt);
	echo redirect('cadastros/apartamento');	
	}
	
	public function get_update_apartamento(){
	$id = $this->uri->segment(3);
	$data['query'] = $query = $this->apt->ID_APARTAMENTO_WHERE($id);
	$data['breadcrumbs']=array('Home'=>'dashboard','Apartamentos'=>'');  
    $data['titulo_pagina']='Cadastro/update';
    $data['module']='cadastros';
    $data['view_file']='up_apt';
	$data['msg']='Atualizar' ;
	$data['submsg']='apartamento';
	$data['blue']='Gerenciar Apartamentos' ;
	$data['blue_link']= base_url('apartamentos');
    echo Modules::run('ace_admin/blank',$data);
    }
	
	public function update_apartamento(){
	$id = $this->input->post('n_apt');
	$this->input->post('apt');
	strtoupper($this->input->post('obs_apt'));
	$data = array(
	'APA_APARTAMENTO' => $this->input->post('apt'),
	'APA_OBS' => strtoupper($this->input->post('obs_apt')),
	'APA_RAMAL' => (int)$this->input->post('ramal')	
	 ) ; 
	$this->apt->update_apartamento($id,$data);
	redirect('cadastros/apartamento','refresh') ;			
	}
	
	public function del_apartamento(){
	$id = $this->uri->segment(3);
	$this->apt->delete_apartamento($id);
	redirect('cadastros/apartamento','refresh') ;			
	}
	// Final bloco crud do apartamento
	
	
	
	
	// mostrar cadastrar novos tipos de veiculos bicicleta,motos,etc...
	//
	public function veiculos(){
	$data['query'] = $this->veiculo->get_cat_veiculo();	
	$data['breadcrumbs']=array('Home'=>'dashboard','cadastros'=>'','veiculos' =>'');  
    $data['titulo_pagina']='Cadastro/veiculos';
    $data['module']='cadastros';
    $data['view_file']='veiculos';
	$data['msg']='Cadastrar' ;
	$data['submsg']='Veículos';
	$data['blue']='Gerenciar Veiculos' ;
	$data['blue_link']= base_url('veiculos');
    echo Modules::run('ace_admin/blank',$data);
    }
	
	public function add_veiculo(){
	$data['CAT_VEICULO'] = strtoupper($this->input->post('modelo_veiculo'));
	$this->veiculo->insert_veiculo($data);
	redirect('cadastros/veiculos','refresh');
	}
	
	public function del_veiculo(){
	$id = $this->uri->segment(3);
	$this->veiculo->delete_veiculo($id);
	redirect('cadastros/veiculos','refresh');
	}

	public function get_update_veiculo(){
	$id = $this->uri->segment(3);
	$data['query'] =  $this->veiculo->get_update_veiculo($id);	
	$data['breadcrumbs']=array('Home'=>'dashboard','cadastros'=>'','veiculos' =>'');  
    $data['titulo_pagina']='Cadastro/veiculos';
    $data['module']='cadastros';
    $data['view_file']='up_veiculos';
	$data['msg']='Cadastrar' ;
	$data['submsg']='Veículos';
	$data['blue']='Gerenciar Veiculos' ;
	$data['blue_link']= base_url('veiculos');
    echo Modules::run('ace_admin/blank',$data);
    }

	public function update_veiculo(){
	$id = $this->input->post('id_veiculo');
	$data = array(
	'CAT_VEICULO' => strtoupper($this->input->post('modelo_veiculo'))
	);
	
	$this->veiculo->update_veiculo($id,$data);
	redirect('cadastros/veiculos','refresh');	
	}
	
	// final veiculo cadastro
	
	
	
		
	//Cadastrar area em comum entre os usuarios ex. piscina,varanda,etc...
	public function area(){
	$data['query'] =$this->area->get_area()->result();	
    $data['breadcrumbs']=array('Home'=>'dashboard','cadastros'=>'','veiculos' =>'');  
    $data['titulo_pagina']='Cadastro/area';
    $data['module']='cadastros';
    $data['view_file']='area';
	$data['msg']='Cadastrar' ;
	$data['submsg']='área';
	$data['blue']='Gerenciar Áreas' ;
	$data['blue_link']= base_url('area');
    echo Modules::run('ace_admin/blank',$data);
    }
	
	public function add_area(){
	$data['ARE_NOME'] = strtoupper($this->input->post('area'));
	$data['ARE_OBS'] = $this->input->post('obs_area');
	$this->area->add_area($data);
	redirect('cadastros/area','refresh');
	}
	
	public function delete_area(){
	$id = $this->uri->segment(3);
	$this->area->delete_area($id);
	redirect(base_url('cadastros/area'),'refresh');
	}
	
	public function get_update_area(){
	$id = $this->uri->segment(3);
	$data['query'] =  $this->area->get_update_area($id);
	$data['breadcrumbs']=array('Home'=>'dashboard','cadastros'=>'','veiculos' =>'');  
    $data['titulo_pagina']='Cadastro/veiculos';
    $data['module']='cadastros';
    $data['view_file']='up_area';
	$data['msg']='Editar' ;
	$data['submsg']='áreas';
	$data['blue']='Gerenciar areas' ;
	$data['blue_link']= base_url('areas');
    echo Modules::run('ace_admin/blank',$data);
    }

	public function update_area(){
	$id = $this->input->post('id_area');
	$data = array(
	'ARE_NOME' => strtoupper($this->input->post('area')),
	'ARE_OBS' => strtoupper($this->input->post('are_obs'))
	);
	$this->area->update_area($id,$data);
	redirect('cadastros/area','refresh');	
	}
// final crud grupo areas


// inicio crud grupo estacionamento	
	public function estacionamento(){
	$this->load->model('mdl_estacionamento','estacionamento');
	$data['query'] = $this->estacionamento->get_estacionamento()->result();	
	$data['query2'] = $this->estacionamento->get_estacionamento_apt()->result();
	$data['breadcrumbs']=array('Home'=>'dashboard','cadastros'=>'','veiculos' =>'');  
    $data['titulo_pagina']='Cadastro/veiculos';
    $data['module']='cadastros';
    $data['view_file']='estacionamento';
	$data['msg']='Cadastrar' ;
	$data['submsg']='Veículos';
	$data['blue']='Gerenciar Veiculos' ;
	$data['blue_link']= base_url('veiculos');
    echo Modules::run('ace_admin/blank',$data);
    }
	
	public function add_estacionamento(){
	$data['GAR_VAGA'] = strtoupper($this->input->post('vaga'));	
	$data['GAR_OBS'] =  strtoupper($this->input->post('vaga_obs'));	
	$data['ID_APARTAMENTO'] =  strtoupper($this->input->post('vaga_apt'));	
	$this->load->model('mdl_estacionamento','estacionamento');
	$this->estacionamento->add_estacionamento($data);	
	redirect('cadastros/estacionamento','refresh') ;
	}

	public function delete_estacionamento(){
	$id = $this->uri->segment(3);	
	$this->load->model('mdl_estacionamento','estacionamento');
	$this->estacionamento->delete_estacionamento($id);
	redirect('cadastros/estacionamento');
	}
	
	public function get_update_estacionamento(){
	 $id = $this->uri->segment(3);
	$this->load->model('mdl_estacionamento','estacionamento');
	$data['query2'] = $this->estacionamento->get_estacionamento_apt()->result();
	
	$data['query'] = $this->estacionamento->get_update_estacionamento($id);
	$data['breadcrumbs']=array('Home'=>'dashboard','cadastros'=>'','veiculos' =>'');  
    $data['titulo_pagina']='Cadastro/veiculos';
    $data['module']='cadastros';
    $data['view_file']='up_estacionamento';
	$data['msg']='Editar' ;
	$data['submsg']='áreas';
	$data['blue']='Gerenciar areas' ;
	$data['blue_link']= base_url('areas');
    echo Modules::run('ace_admin/blank',$data);
    }

	public function update_estacionamento(){
	$id = $this->input->post('id_area');
	
	$data = array(
	'GAR_VAGA' => strtoupper($this->input->post('vaga')),
	'GAR_OBS' => strtoupper($this->input->post('vaga_obs')),
	'ID_APARTAMENTO' => $this->input->post('id_apt')
	);
	$this->load->model('mdl_estacionamento','estacionamento');
	$this->estacionamento->update_estacionamento($id,$data);
	redirect('cadastros/estacionamento','refresh');	
	}
//Final crud grupo estacionamento


	public function profissao(){
	$this->load->model('mdl_profissao','profissao');
	$data['query'] = $this->profissao->get_profissao();
	$data['breadcrumbs']=array('Home'=>'');  
    $data['titulo_pagina']='Cadastro/Profissoes';
    $data['module']='cadastros';
    $data['view_file']='profissao';
	$data['msg']='Cadastros' ;
	$data['submsg']='novos usuários';
	$data['blue']='Gerenciar usuários' ;
	$data['blue_link']='usuarios';
    echo Modules::run('ace_admin/blank',$data);
    }
	public function add_profissao(){
	$this->load->model('mdl_profissao','profissao');	
	$data['PRO_PROFISSAO'] = strtoupper($this->input->post('add_profissao'));
	$data['PRO_OBS'] = strtoupper($this->input->post('add_obs'));
	$this->profissao->add_profissao($data);	
	redirect('cadastros/profissao');
	}		
	public function delete_profissao(){
	$this->load->model('mdl_profissao','profissao');	
	$id = $this->uri->segment(3);
	$this->profissao->delete_profissao($id);	
	redirect('cadastros/profissao');
	}	
	public function get_update_profissao(){
	$this->load->model('mdl_profissao','profissao');
	$id = $this->uri->segment(3);
	$data['query'] = $this->profissao->get_update_profissao($id);
	$data['breadcrumbs']=array('Home'=>'');  
    $data['titulo_pagina']='Cadastro/Profissoes';
    $data['module']='cadastros';
    $data['view_file']='up_profissao';
	$data['msg']='Cadastros' ;
	$data['submsg']='novos usuários';
	$data['blue']='Gerenciar usuários' ;
	$data['blue_link']='usuarios';
    echo Modules::run('ace_admin/blank',$data);
    }
	public function update_profissao(){
	$this->load->model('mdl_profissao','profissao');	
	$id = $this->input->post('id_prof');
	$data['PRO_PROFISSAO'] = strtoupper($this->input->post('add_profissao'));
	$data['PRO_OBS'] = strtoupper($this->input->post('add_obs'));
	$this->profissao->update_profissao($data);	
	redirect('cadastros/profissao');
		
	}	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	
	 function get_data_from_post(){
            $data['nome']=$this->input->post('nome',TRUE);
            $data['senha']=$this->input->post('senha',TRUE);
            //$data['rsenha']=$this->input->post('rsenha',TRUE);
            $data['email']=$this->input->post('email',TRUE);
            $data['tipo']=$this->input->post('tipo',TRUE);
            $data['ativo']=$this->input->post('ativo',TRUE);
      
	    return $data;
    }
	

	
	function submit(){
		
		
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('nome', 'Nome', 'required|xss_clean|min_length[3]');
       	$this->form_validation->set_rules('sobrenome', 'Sobrenome', 'required|xss_clean|min_length[3]');
       
	   
	    $this->form_validation->set_rules('senha', 'Senha', 'required|min_length[6]|xss_clean');
        $this->form_validation->set_rules('rsenha', 'Repita a Senha', 'required|min_length[6]|xss_clean|matches[senha]');
        $this->form_validation->set_rules('email', 'E-mail', 'required|xss_clean|is_unique[usuarios.email]|valid_email');
        
        $this->form_validation->set_rules('tipo', 'Tipo', 'required|xss_clean');
        $this->form_validation->set_rules('ativo', 'Ativo', 'required|xss_clean');
        
		
		
        $update_id = $this->input->post('update_id',TRUE);

        // TESTE , atender aos sequisitos de validação 
        if ($this->form_validation->run() == FALSE){
       
	   
	   
	      redirect('cadastros');
       
	   
	   }else{
            $data = $this->get_data_from_post();
            
                if (is_numeric($update_id)) {
                    $this->_update($update_id,$data);
                } else {
                    $this->table_user->_insert($data);
                }
               
            redirect('cadastros/novo_usuarios');
        }
    }
    
	
	
    public function add_user(){
    	
	$new_user['nome']	    =	 $this->input->post('nome');
	$new_user['sobrenome']	=	 $this->input->post('sobrenome');
	$new_user['login']	    =	 $this->input->post('login');
	$new_senha = $this->input->post('senha'); 
	$new_user['senha']	= sha1($new_senha);	
	$new_user['email']	=	 $this->input->post('email');
	$new_user['ativo']	=	 $this->input->post('ativo');
	$new_user['apt']	=	 $this->input->post('apt');
	$new_user['proprietario']	=	 $this->input->post('proprietario');
	$new_user['tipo']	=	 $this->input->post('tipo');
	echo redirect('cadastros');		
		
    }
    
    
  
    
    
    
   
}

