<?php 

class Errores extends CI_Controller { 	
	function __construct()
	{
		parent::__construct();	
	}
	public function error404(){
		$this->load->view("errores/404.php");
	}
}