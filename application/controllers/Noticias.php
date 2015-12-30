<?php 
class Noticias extends CI_Controller
{
	
	// propiedades 
		private $model;
	function __construct()
	{
		parent::__construct();
		$this->load->model("noticias/NoticiaModel");
		$this->model = new NoticiaModel();
	}
	public function index(){
		// muestra todas las noticias

	}
	public function noticia($id){
		$noticia = 
		$this->load->view("noticias/noticia.php");
	}
}