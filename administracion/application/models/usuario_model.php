<?php
class Usuario_model extends CI_Model { 
   public function __construct() {
      parent::__construct();
   }
   public function usuario_por_nombre_contrasena($nombre, $clave){
      $this->db->select('id_codigo_cc, nombre_completo, tipo_usuario, password');
      $this->db->from('usuario');
      $this->db->where('id_codigo_cc', $nombre);
      $this->db->where('password', $clave);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
   }
}