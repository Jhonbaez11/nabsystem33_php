<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);

class User extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('App_Model');
		//$this->load->helper('mysql_to_excel_helper');
	}	
//--------------------------------------SEDES-----------------------------------------------
	public function User_Idv()
	{		
		if($this->session->userdata('logueado')==TRUE){ 
		$data['title']      = 'NABSYSTEM33 - USUARIOS';
		$data['directorio'] = '../../';
		$data['nombre']     = '';
		$data['meta']       = '<meta charset="utf-8">';	
		$tabla              ='usuario';
		$campo              ='id_codigo_cc';
		$data['queryall']   = $this->App_Model->get_all($tabla);	
		$this->load->view('template/cabecera', $data);		
		$this->load->view('template/header', $data);
		$this->load->view('user/user', $data);
		} else
		{
			//redirect('home/Index');
			header('Location: ../Home/Index');
		}
	}
	public function User_Idv_Act()
	{		
		if($this->session->userdata('logueado')==TRUE){ 
		$data['title']      = 'NABSYSTEM33 - USUARIOS';
		$data['directorio'] = '../../';
		$data['nombre']     = '';
		$data['meta']       = '<meta charset="utf-8">';	
		$id 				= $_GET['id'];
		$tabla 				= 'usuario';
		$campo 				= 'id_codigo_cc';
		$data['query']      = $this->App_Model->get_id($id, $tabla, $campo);
		$this->load->view('user/user_act', $data);
		} else
		{
			//redirect('home/Index');
			header('Location: ../Home/Index');
		}
	}	
	public function User_Insertar()
	{		
		if($this->session->userdata('logueado')==TRUE){ 	
		$data = array
		(			
		'id_codigo_cc'    =>$this->input->post('id_codigo_cc'),
		'nombre_completo' =>$this->input->post('nombre_completo'),
		'tel_extencion'   =>$this->input->post('tel_extencion'),
		'email'           =>$this->input->post('email'),
		'cargo'           =>$this->input->post('cargo'),
		'estado'          =>$this->input->post('estado'),
		'tipo_usuario'    =>$this->input->post('tipo_usuario'),
		'password'        =>$this->input->post('password')
		);		
		//print_r($data);
		$tabla 		=	'usuario';
		$this -> App_Model ->insert($data, $tabla);	
		echo' <script language="javascript">
			alert("Ingresado Correctamente!");
			</script>';		
		//redirect(base_url().'index.php/user/User_Idv');
			header('Location: User_Idv');
		} else
		{
			//redirect('home/Index');
			header('Location: ../Home/Index');
		}
	}
	public function User_Actualizar()
	{
		if($this->session->userdata('logueado')==TRUE){ 
		$id_tabla 			= 'id_codigo_cc';		
		$id_post 			= $this->input->post('id_codigo_cc');
		$tabla 				= 'usuario';
		$data 				= array
		(			
		'id_codigo_cc'    	=>$this->input->post('id_codigo_cc'),
		'nombre_completo' 	=>$this->input->post('nombre_completo'),
		'tel_extencion'   	=>$this->input->post('tel_extencion'),
		'email'           	=>$this->input->post('email'),
		'cargo'           	=>$this->input->post('cargo'),
		'estado'          	=>$this->input->post('estado'),
		'tipo_usuario'    	=>$this->input->post('tipo_usuario'),		
		'password'        	=>$this->input->post('password')
		);		
		$this -> App_Model ->update($id_tabla, $id_post, $tabla, $data);
		echo' <script language="javascript">
		alert("Actualizado Correctamente!");
		</script>';		
		//redirect(base_url().'index.php/User/User_Idv');
		header('Location: User_Idv');
		} else
		{
			//redirect('home/Index');
			header('Location: ../Home/Index');
		}
	}
	public function User_Eliminar()
	{
		if($this->session->userdata('logueado')==TRUE){ 
		$tabla 		= 'usuario';	
		$id_tabla 	= 'id_codigo_cc';				
		//$id_post 	= $this->input->post('id_sede');
		$id_post 	= $_GET['id'];					
		$this -> App_Model ->delete($tabla, $id_tabla, $id_post);
		echo' <script language="javascript">
				alert("Eliminado Correctamente!");
				</script>';		
		//redirect(base_url().'index.php/user/User_Idv');
				header('Location: User_Idv');
		} else
		{
			//redirect('home/Index');
			header('Location: ../Home/Index');
		}
	}
//--------------------------------------SEDES-----------------------------------------------
}