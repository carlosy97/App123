<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JornadasModel extends CI_Model
{
 
 
	public function agregar($jornada){
		$this->db->insert('jornadas',$jornada);
	}
	public function seleccionar_todo(){
		$this ->db->select('*');
		$this->db->from("jornadas");
		
		$resultado = $this->db->get();
		return $resultados->result();
	}
	public function eliminar($idJornadas){
		$this->db->where('idJornadas',$idJornadas);
		$this->db->delete('jornadas');
	}
	public function actualizar($jornada,$idJornadas){
		$this->db->where('idJornadas',$idJornadas);
		$this->db->update('jornadas',$jornada);
	}
  
	}

?>