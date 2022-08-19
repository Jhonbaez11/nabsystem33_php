<?php
if (!defined('BASEPATH'))
   exit('No direct script access allowed');
class Usuarios extends CI_Controller {
   public function __construct() {
      parent::__construct();
   }
   public function iniciar_sesion() {
      $data = array();
      $this->load->view('index/index', $data);
   }
   public function iniciar_sesion_post() {
      if ($this->input->post()) {
         $nombre  = $this->input->post('nombre');
         $clave   = $this->input->post('clave');
         $this->load->model('usuario_model');
         $usuario = $this->usuario_model->usuario_por_nombre_contrasena($nombre, $clave);
         if ($usuario) {
            $usuario_data        = array(
               'id_codigo_cc'    => $usuario->id_codigo_cc,
               'nombre_completo' => $usuario->nombre_completo,               
               'tipo_usuario'    => $usuario->tipo_usuario,
               'logueado'        => TRUE
            );
            $this->session->set_userdata($usuario_data);
            print_r($usuario_data);
            header('Location: logueado');
            //redirect('usuarios/logueado');
         } else {
            //redirect('home/Index');
            header('Location: ../home/index');
         }
      } else {
         $this->iniciar_sesion();
      }
   }
   public function logueado() {
      if($this->session->userdata('logueado')){
         $data                         = array();
         $data['nombre_completo']      = $this->session->userdata('nombre_completo');
         $data['tipo_usuario']         = $this->session->userdata('tipo_usuario');
         $data['title']                = 'ADMIN - NABSYSTEM33';
         $data['directorio']           = '../../';           
         $this->load->view('template/cabecera', $data);     
         $this->load->view('template/header', $data);
         $this->load->view('index/inicio', $data);
      }else{
         //redirect('home/Index');
         header('Location: ../home/index');
      }
   }
   public function cerrar_sesion() {
      $usuario_data = array(
         'logueado' => FALSE
      );
      $this->session->set_userdata($usuario_data);
      //redirect('home/Index');
      header('Location: ../home/index');
   }
}