<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);

class Subcategoria extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('App_Model');
		//$this->load->helper('mysql_to_excel_helper');
	}	
//--------------------------------------SUBCATEGORIAS-----------------------------------------------
	public function Subcategoria_Idv()
	{		
		if($this->session->userdata('logueado')==TRUE){
		$data['title']      = 'NABSYSTEM33 - SUBCATEGORIAS';
		$data['directorio'] = '../../';
		$data['nombre']     = '';
		$data['meta']       = '<meta charset="utf-8">';	
		$tabla              ='subcategoria';
		$campo              ='id_subcategoria';
		$data['queryall']   = $this->App_Model->get_all($tabla);	
		$this->load->view('template/cabecera', $data);		
		$this->load->view('template/header', $data);
		$this->load->view('subcategoria/subcategorias', $data);
		} else
		{
			//redirect('home/Index');
			header('Location: ../Home/Index');
		}
	}
	public function Subcategoria_Idv_Act()
	{		
		if($this->session->userdata('logueado')==TRUE){
		$data['title']      = 'NABSYSTEM33 - SUBCATEGORIAS';
		$data['directorio'] = '../../';
		$data['nombre']     = '';
		$data['meta']       = '<meta charset="utf-8">';	
		$id 				= $_GET['id'];
		$tabla 				= 'subcategoria';
		$campo 				= 'id_subcategoria';
		$data['query']      = $this->App_Model->get_id($id, $tabla, $campo);
		$this->load->view('subcategoria/subcategoria_act', $data);
		} else
		{
			//redirect('home/Index');
			header('Location: ../Home/Index');
		}
	}	
	public function Subcategoria_Insertar()
	{			
		if($this->session->userdata('logueado')==TRUE){
		$data = array
		(			
		'nom_subcategoria'	=>$this->input->post('nom_subcategoria')
		);		
		//print_r($data);
		$tabla 			=	'subcategoria';
		$this -> App_Model ->insert($data, $tabla);	
		echo' <script language="javascript">
			alert("Ingresado Correctamente!");
			</script>';		
		//redirect(base_url().'index.php/subcategoria/subcategoria_idv');
			header('Location: subcategoria_idv');
		} else
		{
			//redirect('home/Index');
			header('Location: ../Home/Index');
		}
	}
	public function Subcategoria_Actualizar()
	{
		if($this->session->userdata('logueado')==TRUE){
		$id_tabla 			= 'id_subcategoria';		
		$id_post 			= $this->input->post('id_subcategoria');
		$tabla 				= 'subcategoria';
		$data 				= array
			(			
			'nom_subcategoria'	=>$this->input->post('nom_subcategoria')
			);		
		$this -> App_Model ->update($id_tabla, $id_post, $tabla, $data);
		echo' <script language="javascript">
				alert("Actualizado Correctamente!");
				</script>';		
		//redirect(base_url().'index.php/subcategoria/subcategoria_idv');
				header('Location: subcategoria_idv');
		} else
		{
			//redirect('home/Index');
			header('Location: ../Home/Index');
		}
	}
	public function Subcategoria_Eliminar()
	{
		if($this->session->userdata('logueado')==TRUE){
		$tabla 		= 'subcategoria';	
		$id_tabla 	= 'id_subcategoria';				
		//$id_post 	= $this->input->post('id_sede');
		$id_post 	= $_GET['id'];					
		$this -> App_Model ->delete($tabla, $id_tabla, $id_post);
		echo' <script language="javascript">
				alert("Eliminado Correctamente!");
				</script>';		
		//redirect(base_url().'index.php/subcategoria/subcategoria_idv');
				header('Location: subcategoria_idv');
		} else
		{
			//redirect('home/Index');
			header('Location: ../Home/Index');
		}
	}
//--------------------------------------SUBCATEGORIAS-----------------------------------------------
}