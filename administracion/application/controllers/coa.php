<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);

class Coa extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('App_Model');
		//$this->load->helper('mysql_to_excel_helper');
	}	
//--------------------------------------SEDES-----------------------------------------------
	public function Coa_Idv()
	{		
		if($this->session->userdata('logueado')==TRUE){ 
		$data['title']      = 'HELPDESK - COA';
		$data['directorio'] = '../../';
		$data['nombre']     = '';
		$data['meta']       = '<meta charset="utf-8">';	
		$tabla              ='software';
		$campo              ='id_software';
		$data['queryall']   = $this->App_Model->get_coa($tabla);			
		$this->load->view('template/cabecera', $data);		
		$this->load->view('template/header', $data);
		$this->load->view('coa/coa', $data);
		} else
		{
			//redirect('home/Index');
			header('Location: ../Home/Index');
		}
	}		
	public function Coa_Idv_Act()
	{		
		if($this->session->userdata('logueado')==TRUE){ 
		$data['title']      = 'HELPDESK - COA';
		$data['directorio'] = '../../';
		$data['nombre']     = '';
		$data['meta']       = '<meta charset="utf-8">';	
		$id 				= $_GET['id'];
		$tabla 				= 'software';
		$campo 				= 'id_software';
		$data['query']      = $this->App_Model->get_id($id, $tabla, $campo);
		$this->load->view('coa/coa_up', $data);
		} else
		{
			//redirect('home/Index');
			header('Location: ../Home/Index');
		}
	}	
	function do_upload()
	{
		$config['upload_path'] 		= './uploads/coa/';
		$coa1 = rand();
		$coa2 = $this->input->post('id');
		$config['file_name'] 		= ("coa-".$coa2."-".$coa1.".jpg");		
		$config['allowed_types'] 	= 'gif|jpg|png';
		$config['max_size'] 		= '10000';
		$config['max_width'] 		= '3024';
		$config['max_height'] 		= '1768';
		$this->load->library('upload', $config);
		$id_tabla 					= 'id';		
		$id_post 					= $this->input->post('id');
		$tabla 						= 'inventario';
		$data1 = array
		(			
		'coa'       =>'coa'.'-'.$this->input->post('id').'-'.$coa1.".jpg"
		);
		if ( ! $this->upload->do_upload())
		{
		$error = array('error' => $this->upload->display_errors());
		$this->load->view('upload_form', $error);
		//echo "error";
		echo' <script language="javascript">
		alert("Error!")
		history.go(-1);
		</script>';
		}
		else
		{
		$data = array('upload_data' => $this->upload->data());
		//print_r ($data1);
		$this -> App_Model ->update($id_tabla, $id_post, $tabla, $data1);
		echo' <script language="javascript">
		alert("Actualizado Correctamente!")
		history.go(-1);
		</script>';
		}	
	}
//--------------------------------------SEDES-----------------------------------------------
}