<?php 
class WelcomeModel extends CI_Model
{
	function __construct()
	{
	}
	public function getNoticias($n=3){
		$sqlQuery ="SELECT * 
					FROM noticias 
					WHERE estado = 1 
					ORDER BY idNoticia desc 
					LIMIT 0,$n";
		$query 		= $this->db->query($sqlQuery);
		$noticias 	= $query->result();
		return $noticias;
	}
}