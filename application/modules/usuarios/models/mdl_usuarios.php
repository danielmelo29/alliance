<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Mdl_usuarios extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    function get_table_simples()
	{
	$select = $this->db->get('TAB_USUARIO')->result();	
	return $select ;
	}
	
	function get_table_contatos()
	{
			
		$this->db->select('USU.ID_USUARIO,USU.USU_NOME,USU.USU_LOGIN,TIPO.CON_CATEGORIA, 
		 CON.CON_END_CONTATO ,APT.APA_APARTAMENTO,USU.USU_PERMISSAO');
		$this->db->from('TAB_USUARIO AS USU');	
		$this->db->join('TAB_CONTATO AS CON','USU.ID_USUARIO = CON.ID_USUARIO');
		$this->db->join('TAB_TIPO_CONTATO AS TIPO','TIPO.ID_TIPO_CONTATO = CON.ID_TIPO_CONTATO' );
		$this->db->join('TAB_APARTAMENTO AS APT','USU.ID_APARTAMENTO = APT.ID_APARTAMENTO' );
		$query = $this->db->get()->result();
		RETURN $query ;
	}
	
	//CONSULTA PARA AS 3 TABELAS
	
	//SELECT USU.USU_NOME, TIPO.CON_CATEGORIA ,CON.CON_END_CONTATO, APT.APA_APARTAMENTO FROM TAB_USUARIO AS USU
	//NATURAL  JOIN TAB_CONTATO AS CON	
	//INNER JOIN TAB_TIPO_CONTATO AS TIPO
	//ON TIPO.ID_TIPO_CONTATO = CON.ID_TIPO_CONTATO 
	//INNER JOIN TAB_APARTAMENTO AS APT
	//ON USU.ID_APARTAMENTO = APT.ID_APARTAMENTO

	public function new_table()
	{
		
	$page = 1 ;
	$limit =10 ;
	$sidx = ' ID_USUARIO' ;
	$sord = 'asc' ;	
	
	 //conta o numero de registro na tabela
	$count = $this->db->count_all('TAB_USUARIO');	
	
	// calcula o total da paginação
	
	if( $count > 0 && $limit > 0){
		
		$total_pages = ceil($count/$limit);	
	}
	else {
		$total_pages = 0 ;};
	
	
	// calcula a posição inicial das linhas
	if($page > $total_pages) $page = $total_pages;
	$start = $limit*$page - $limit;
	
	
	if($start < 0) $start = 0; 
	
		// REFAZER A QUERY
		// SE O USUARIO CADASTRADO , NÃO TIVER UM APT OU CONTATO CADASTRADO ,NAO FUNCIONA
		
		
 		$this->db->select('USU.ID_USUARIO,USU.USU_NOME,USU.USU_LOGIN,TIPO.CON_CATEGORIA,USU.USU_PERMISSAO,USU.USU_ATIVO, 
		 CON.CON_END_CONTATO ,APT.APA_APARTAMENTO,USU.USU_PERMISSAO,CON_END_CONTATO AS CONTATO ');
		$this->db->from('TAB_USUARIO AS USU');	
		$this->db->join('TAB_CONTATO AS CON','USU.ID_USUARIO = CON.ID_USUARIO' ,'left');
		$this->db->join('TAB_TIPO_CONTATO AS TIPO','TIPO.ID_TIPO_CONTATO = CON.ID_TIPO_CONTATO','left' );
		$this->db->join('TAB_APARTAMENTO AS APT','USU.ID_APARTAMENTO = APT.ID_APARTAMENTO','left' );
		$this->db->order_by('ID_USUARIO','asc');
		$retorno = $this->db->get()->result();
 		//$this->db->limit($start,$limit);
 		
	
	
	
	header("Content-type: text/xml;charset=utf-8");

	$s = "<?xml version='1.0' encoding='utf-8'?>";
	$s .=  "<rows>";
	$s .= "<page>".$page."</page>";
	$s .= "<total>".$total_pages."</total>";
	$s .= "<records>".$count."</records>";

	foreach ($retorno as $linha) {
	if ($linha->USU_PERMISSAO == 'A'){$PERM = 'Admin';}else {$PERM = 'Usuario' ;};	
	if ($linha->USU_ATIVO == 1){$ATIVO = 'Ativo';}else {$ATIVO = 'Inativo' ;};	
	
		
	$s .= "<row id='". $linha->ID_USUARIO."'>";            
    $s .= "<cell>". $linha->ID_USUARIO."</cell>";
	$s .= "<cell>". $linha->USU_NOME."</cell>";
	$s .= "<cell>". $linha->USU_LOGIN."</cell>";
	$s .= "<cell>". $linha->CON_CATEGORIA."</cell>";
	$s .= "<cell>". $linha->CON_END_CONTATO."</cell>";
	$s .= "<cell>". $linha->APA_APARTAMENTO."</cell>";
	$s .= "<cell>". $PERM."</cell>";
	$s .= "<cell>". $ATIVO."</cell>";
	
	
	$s .= "</row>";
	}
	echo $s .= '</rows>';
	
	
	
	
	}
	
	
	
	
/*
    function get_table() {
    $table = "usuarios";
    return $table;
    }
    
    function get($order_by){
    $table = $this->get_table();
    $this->db->order_by($order_by);
    $query=$this->db->get($table);
    return $query;
    }
    
    function get_with_limit($limit, $offset, $order_by) {
    $table = $this->get_table();
    $this->db->limit($limit, $offset);
    $this->db->order_by($order_by);
    $query=$this->db->get($table);
    return $query;
    }
    
    function get_where($idusuarios){
    $table = $this->get_table();
    $this->db->where('idusuarios', $idusuarios);
    $query=$this->db->get($table);
    return $query;
    }
    
    function get_where_custom($col, $value) {
    $table = $this->get_table();
    $this->db->where($col, $value);
    $query=$this->db->get($table);
    return $query;
    }
    
    function _insert($data){
    $table = $this->get_table();
    $this->db->insert($table, $data);
    }
    
    function _update($idusuarios, $data){
    $table = $this->get_table();
    $this->db->where('idusuarios', $idusuarios);
    $this->db->update($table, $data);
    }
    
    function _delete($idusuarios){
    $table = $this->get_table();
    $this->db->where('idusuarios', $idusuarios);
    $this->db->delete($table);
    }
    
    function count_where($column, $value) {
    $table = $this->get_table();
    $this->db->where($column, $value);
    $query=$this->db->get($table);
    $num_rows = $query->num_rows();
    return $num_rows;
    }
    
    function count_all() {
    $table = $this->get_table();
    $query=$this->db->get($table);
    $num_rows = $query->num_rows();
    return $num_rows;
    }
    
    function get_max() {
    $table = $this->get_table();
    $this->db->select_max('idusuarios');
    $query = $this->db->get($table);
    $row=$query->row();
    $idusuarios=$row->idusuarios;
    return $idusuarios;
    }
    
    function _custom_query($mysql_query) {
    $query = $this->db->query($mysql_query);
    return $query;
    }
    */
}