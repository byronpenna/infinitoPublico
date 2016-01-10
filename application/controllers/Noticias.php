<?php 
include_once(APPPATH.'controllers/PadreController.php');
class Noticias extends PadreController
{
	
	// propiedades 
		private $model;
	// funciones magicas
		function __construct()
		{
			parent::__construct();
			$this->load->model("noticias/NoticiaModel");
			$this->model = new NoticiaModel();
		}
	// metodos
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