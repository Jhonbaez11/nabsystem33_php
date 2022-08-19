<?php
class App_Model extends CI_Model
{
//-----------------------------------------GENERAL-------------------------------------------
	function get_all($tabla)
	{
		$query = $this -> db -> get($tabla);
		return $query -> result();
	}
	function get_coa($tabla)
	{
		$query = $this->db->get_where($tabla, array('nombre' => 'WINDOWS'));
		return $query -> result();
	}
	function get_id($id, $tabla, $campo)
	{
		$query = $this -> db -> get_where($tabla, array($campo => $id));
		return $query -> result();	
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
	public function excel($tabla)
	{
		$fields = $this->db->field_data($tabla);
		$query = $this->db->select('*')->get($tabla);
		return array("fields" => $fields, "query" => $query);
	}
//-----------------------------------------GENERAL-------------------------------------------
}