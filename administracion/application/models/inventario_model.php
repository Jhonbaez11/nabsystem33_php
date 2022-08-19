<?php
class Inventario_Model extends CI_Model
{
//-----------------------------------------GENERAL-------------------------------------------
	// function get_all_prin()
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('ficha_tecnica');
	// 	$this->db->join('usuario', 'usuario.id_codigo_cc = ficha_tecnica.id_codigo_cc');
	// 	$this->db->join('usuario_dominio', 'usuario_dominio.id_usu_dom = ficha_tecnica.id_usu_dom');
	// 	$this->db->join('net_red', 'net_red.id_red = ficha_tecnica.id_red');
	// 	$this->db->join('sede', 'sede.id_sede = ficha_tecnica.id_sede');
	// 	$this->db->join('area', 'area.id_area = ficha_tecnica.id_area');
	// 	//$this->db->where('sede.id_sede', 'ficha_tecnica.id_sede');
	// 	$query = $this->db->get();
	// 	return $query -> result();
	// }	
	function get_all_prin()
	{
		$this->db->select('*');
		$this->db->from('inventario');
		$this->db->join('categoria', 'categoria.id_categoria = inventario.id_categoria');
		$this->db->join('subcategoria', 'subcategoria.id_subcategoria = inventario.id_subcategoria');
		//$this->db->where('sede.id_sede', 'ficha_tecnica.id_sede');
		$query = $this->db->get();
		return $query -> result();
	}	
	function get_all_detalles($id_post)
	{
		$this->db->select('*');
		$this->db->from('ficha_tecnica');
		$this->db->join('usuario', 'usuario.id_codigo_cc = ficha_tecnica.id_codigo_cc');
		$this->db->join('usuario_dominio', 'usuario_dominio.id_usu_dom = ficha_tecnica.id_usu_dom');
		$this->db->join('net_red', 'net_red.id_red = ficha_tecnica.id_red');
		$this->db->join('sede', 'sede.id_sede = ficha_tecnica.id_sede');
		$this->db->join('area', 'area.id_area = ficha_tecnica.id_area');
		$this->db->join('equipo', 'equipo.id_equipo = ficha_tecnica.id_equipo');
		//$this->db->join('software', 'software.id_usu_dom = usuario_dominio.id_usu_dom OR software.id_usu_dom=6');
		$this->db->where('id_ficha', $id_post);
		$this->db->where_not_in('usuario_dominio.id_usu_dom', '1');
		$query = $this->db->get();
		return $query -> result();
	}
	function get_all_inventario($id_post)
	{
		$this->db->select('*');
		$this->db->from('inventario');		
		$this->db->join('categoria', 'categoria.id_categoria = inventario.id_categoria');
		$this->db->join('subcategoria', 'subcategoria.id_subcategoria = inventario.id_subcategoria');		
		//$this->db->join('software', 'software.id_usu_dom = usuario_dominio.id_usu_dom OR software.id_usu_dom=6');
		$this->db->where('id', $id_post);		
		$query = $this->db->get();
		return $query -> result();
	}
	function get_id_det_soft($id_post)
	{
		$this->db->select('*');
		$this->db->from('software');
		$this->db->join('usuario_dominio', 'software.id_usu_dom = usuario_dominio.id_usu_dom');		
		$this->db->where('usuario_dominio.id_usu_dom', $id_post);
		$this->db->or_where('usuario_dominio.id_usu_dom =', '2');
		$query = $this->db->get();
		return $query -> result();
	}
	function get_id_det_peri($id_post)
	{
		$this->db->select('*');
		$this->db->from('perifericos');
		$this->db->join('equipo', 'perifericos.id_equipo = equipo.id_equipo');		
		$this->db->where('equipo.id_equipo', $id_post);
		$query = $this->db->get();
		return $query -> result();
	}
	function get_all($tabla)
	{
		$query = $this -> db -> get($tabla);
		return $query -> result();
	}
	public function excel($tabla)
	{
		$fields = $this->db->field_data($tabla);
		$query = $this->db->select('*')->get($tabla);
		return array("fields" => $fields, "query" => $query);
	}	
	function insert($data, $tabla)
	{
		$this->db->insert($tabla, $data);
	}
	function update($id_tabla, $id_post, $tabla, $data)
	{
		$this->db->where($id_tabla, $id_post);
		$this->db->update($tabla, $data);
	}	
	function delete($tabla, $id_tabla, $id_post)
	{
		$this->db->delete($tabla, array($id_tabla => $id_post));
	}
//-----------------------------------------GENERAL-------------------------------------------
}