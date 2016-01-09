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
		//echo "hola";
		$noticia 	= $this->model->getNoticia($id);
		$data 		= array('noticia' => $noticia[0] );
		$this->load->view("noticias/noticia.php",$data);
	}
}