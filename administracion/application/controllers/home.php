<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('App_Model');
		//$this->load->helper('mysql_to_excel_helper');
	}	
//--------------------------------------INICIO----------------------------------------------
	public function Index()
	{		
		$data['title']      = 'NABSYSTEM33';
		$data['directorio'] = '../../';
		$data['nombre']     = '';
		$data['meta']       = '<meta charset="utf-8">';	
		$this->load->view('template/cabecera', $data);
        $this->load->view('template/header', $data);
		$this->load->view('index/index');
        $this->load->view('template/footer');               
	}	
	public function Inicio()
	{		
		if($this->session->userdata('logueado')==TRUE){ 
		$data['title']      = 'NABSYSTEM33 - MANUALES';
		$data['directorio'] = '../../';
		$data['nombre']     = '';
		$data['meta']       = '<meta charset="utf-8">';	
		$this->load->view('template/cabecera', $data);		
		$this->load->view('template/header', $data);
		$this->load->view('index/inicio', $data);
		} else
		{
			//redirect('home/Index');
			header('Location: Index');
		}
	}
	public function Manual_Mantiz()
	{		
		if($this->session->userdata('logueado')==TRUE){ 
		$data['title']      = 'NABSYSTEM33 - MANUAL DE MANTIZ';
		$data['directorio'] = '../../';
		$data['nombre']     = '';
		$data['meta']       = '<meta charset="utf-8">';	
		$this->load->view('template/cabecera', $data);		
		$this->load->view('template/header', $data);
		$this->load->view('index/manual_mantiz', $data);
		} else
		{
			//redirect('home/Index');
			header('Location: Index');
		}
	}
//--------------------------------------INICIO----------------------------------------------	
}