<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);

class Categoria extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('App_Model');
		//$this->load->helper('mysql_to_excel_helper');
	}	
//--------------------------------------SEDES-----------------------------------------------
	public function Categoria_Idv()
	{		
		if($this->session->userdata('logueado')==TRUE){
		$data['title']      = 'NABSYSTEM33 - CATEGORIAS';
		$data['directorio'] = '../../';
		$data['nombre']     = '';
		$data['meta']       = '<meta charset="utf-8">';	
		$tabla              ='categoria';
		$campo              ='id_categoria';
		$data['queryall']   = $this->App_Model->get_all($tabla);	
		$this->load->view('template/cabecera', $data);		
		$this->load->view('template/header', $data);
		$this->load->view('categoria/categorias', $data);
		} else
		{
			//redirect('home/Index');
			header('Location: ../home/index');
		}
	}
	public function Categoria_Idv_Act()
	{		
		if($this->session->userdata('logueado')==TRUE){
		$data['title']      = 'NABSYSTEM33 - CATEGORIAS';
		$data['directorio'] = '../../';
		$data['nombre']     = '';
		$data['meta']       = '<meta charset="utf-8">';	
		$id 				= $_GET['id'];
		$tabla 				= 'categoria';
		$campo 				= 'id_categoria';
		$data['query']      = $this->App_Model->get_id($id, $tabla, $campo);
		$this->load->view('categoria/categorias_act', $data);
		} else
		{
			//redirect('home/Index');
			header('Location: ../home/index');
		}
	}	
	public function Categoria_Insertar()
	{			
		if($this->session->userdata('logueado')==TRUE){
		$data = array
		(			
		'nom_categoria'	=>$this->input->post('nom_categoria')
		);		
		//print_r($data);
		$tabla 			=	'categoria';
		$this -> App_Model ->insert($data, $tabla);	
		echo' <script language="javascript">
			alert("Ingresado Correctamente!");
			</script>';		
		//redirect(base_url().'index.php/categoria/categoria_idv');
			header('Location: categoria_idv');
		} else
		{
			//redirect('home/Index');
			header('Location: ../home/index');
		}
	}
	public function Categoria_Actualizar()
	{
		if($this->session->userdata('logueado')==TRUE){
		$id_tabla 			= 'id_categoria';		
		$id_post 			= $this->input->post('id_categoria');
		$tabla 				= 'categoria';
		$data 				= array
			(			
			'nombre_categoria'	=>$this->input->post('nom_categoria')
			);		
		$this -> App_Model ->update($id_tabla, $id_post, $tabla, $data);
		echo' <script language="javascript">
				alert("Actualizado Correctamente!");
				</script>';		
		//redirect(base_url().'index.php/categoria/categorias_idv');
				header('Location: categoria_idv');
		} else
		{
			//redirect('home/Index');
			header('Location: ../home/index');
		}
	}
	public function Categoria_Eliminar()
	{
		if($this->session->userdata('logueado')==TRUE){
		$tabla 		= 'categoria';	
		$id_tabla 	= 'id_categoria';				
		//$id_post 	= $this->input->post('id_sede');
		$id_post 	= $_GET['id'];					
		$this -> App_Model ->delete($tabla, $id_tabla, $id_post);
		echo' <script language="javascript">
				alert("Eliminado Correctamente!");
				</script>';		
		//redirect(base_url().'index.php/categoria/categoria_idv');
				header('Location: categoria_idv');
		} else
		{
			//redirect('home/Index');
			header('Location: ../home/index');
		}
	}
//--------------------------------------SEDES-----------------------------------------------
}