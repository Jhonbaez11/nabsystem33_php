<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);

class Inventario extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Inventario_Model');
		$this->load->helper('mysql_to_excel_helper');
	}	
//--------------------------------------SEDES-----------------------------------------------
	public function Inventario_Idv()
	{		
		if($this->session->userdata('logueado')==TRUE){ 
		$data['title']      	= 'NABSYSTEM33 - INVENTARIO';
		$data['directorio'] 	= '../../';
		$data['nombre']     	= '';
		$data['meta']       	= '<meta charset="utf-8">';	
		$tabla 					= "inventario";
		$data['queryallprin']   = $this->Inventario_Model->get_all_prin();		
		$tabla_categoria				=	'categoria';
		$data['queryallcategoria']   = $this->Inventario_Model->get_all($tabla_categoria);
		$tabla_subcategoria				=	'subcategoria';
		$data['queryallsubcategoria']   = $this->Inventario_Model->get_all($tabla_subcategoria);		
		//print_r($data['queryall']);
		$this->load->view('template/cabecera', $data);		
		$this->load->view('template/header', $data);
		$this->load->view('inventario/inventario', $data);
		} else
		{
			//redirect('home/Index');
			header('Location: ../Home/Index');
		}
	}	
	public function Inventario_Detalles()
	{		
		if($this->session->userdata('logueado')==TRUE){ 
		$data['title']            	= 'NABSYSTEM33 - INVENTARIO';
		$data['directorio']       	= '../../';
		$data['nombre']           	= '';
		$data['meta']             	= '<meta charset="utf-8">';	
		$id_post                  	= $_GET['id'];		
		$data['queryallinventario'] = $this->Inventario_Model->get_all_inventario($id_post);		
		$tabla_categoria				=	'categoria';
		$data['queryallcategoria']   	= $this->Inventario_Model->get_all($tabla_categoria);
		$tabla_subcategoria				=	'subcategoria';
		$data['queryallsubcategoria']   	= $this->Inventario_Model->get_all($tabla_subcategoria);
		//print_r($data['queryall']);
		$this->load->view('template/cabecera', $data);		
		$this->load->view('template/header', $data);
		$this->load->view('inventario/inventario_det', $data);
		} else
		{
			//redirect('home/Index');
			header('Location: ../Home/Index');
		}
	}		
	public function Inventario_Insertar()
	{			
		if($this->session->userdata('logueado')==TRUE){ 
		$data = array
		(			
		'nombre'    		=>$this->input->post('nombre'),
		'id_categoria'      =>$this->input->post('id_categoria'),
		'id_subcategoria'   =>$this->input->post('id_subcategoria'),
		'descripcion'   	=>$this->input->post('descripcion'),
		'precios'   		=>$this->input->post('precios'),
		'unid'   			=>$this->input->post('unid')
		);		
		//print_r($data);
		$tabla 				=	'inventario';
		$this ->Inventario_Model->insert($data, $tabla);				
		echo' <script language="javascript">
			alert("Ingresado Correctamente!");
			</script>';		
		//redirect(base_url().'index.php/Inventario/Inventario_Idv');
		header('Location: Inventario_Idv');
		} else
		{
			//redirect('home/Index');
			header('Location: ../Home/Index');
		}
	}
	public function Inventario_Actualizar()
	{			
		if($this->session->userdata('logueado')==TRUE){ 
		$data = array
		(			
		'nombre'    			=>$this->input->post('nombre'),
		'id_categoria'       	=>$this->input->post('id_categoria'),
		'id_subcategoria'   	=>$this->input->post('id_subcategoria'),
		'descripcion'   		=>$this->input->post('descripcion'),
		'precios'   			=>$this->input->post('precios'),
		'unid'   				=>$this->input->post('unid')
		);		
		//print_r($data);
		$id_tabla 				= 'id';		
		$id_post 				= $this->input->post('id');
		$tabla 					= 'inventario';
		$this->Inventario_Model->update($id_tabla, $id_post, $tabla, $data);				
		echo' <script language="javascript">
		alert("Actualizado Correctamente!")
		history.go(-1);
		</script>';
		//redirect(base_url().'index.php/Inventario/Inventario_Idv');
		} else
		{
			//redirect('home/Index');
			header('Location: ../Home/Index');
		}
	}
	public function Inventario_Eliminar()
	{
		if($this->session->userdata('logueado')==TRUE){ 
		$tabla 					= 'inventario';	
		$id_tabla 				= 'id';				
		$id_post 				= $_GET['id'];					
		$this ->Inventario_Model->delete($tabla, $id_tabla, $id_post);
		echo' <script language="javascript">
				alert("Eliminado Correctamente!");
				</script>';		
		//redirect(base_url().'index.php/inventario/Inventario_Idv');
				header('Location: Inventario_Idv');
		} else
		{
			//redirect('home/Index');
			header('Location: ../Home/Index');
		}
	}

	public function Hoja_Vida_Idv()
	{		
		if($this->session->userdata('logueado')==TRUE){ 
		$data['title']            	= 'NABSYSTEM33 - INVENTARIO';
		$data['directorio']       	= '../../';
		$data['nombre']           	= '';
		$data['meta']             	= '<meta charset="utf-8">';	
		$id_post                  	= $_GET['id'];
		$data['queryalldetalles'] 	= $this->Inventario_Model->get_all_inventario($id_post);
		$tabla_sede					=	'sede';
		$data['queryallsede']   	= $this->Inventario_Model->get_all($tabla_sede);
		$tabla_area					=	'area';
		$data['queryallarea']   	= $this->Inventario_Model->get_all($tabla_area);
		$this->load->view('template/cabecera', $data);		
		//$this->load->view('template/header', $data);
		$this->load->view('inventario/inventario_hv', $data);
		} else
		{
			//redirect('home/Index');
			header('Location: ../Home/Index');
		}
	}	
	public function Excel_Inventario()
	{
		//$this->load->model('App_Model');
		$tabla 						= 'inventario';
 		to_excel($this->Inventario_Model->excel($tabla), "Inventario");
	}
//--------------------------------------SEDES-----------------------------------------------
}