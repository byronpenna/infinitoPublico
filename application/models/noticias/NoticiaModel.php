<?php 
class NoticiaModel extends CI_Model
{
	
	function __construct()
	{

	}
	public function getNoticia($id){
		$sqlQuery = "SELECT * 
					FROM `noticias` 
					WHERE idNoticia = $id";
		$query 		= $this->db->query($sqlQuery);
		$noticias 	= $query->result();
		return $noticias;
	}
}