<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	private $model;
	function __construct(){
		parent::__construct();
		$this->load->model("welcome/WelcomeModel");
		$this->model = new WelcomeModel();
	}
	public function index()
	{
		$noticias = $this->model->getNoticias();
		$data = array('noticias' => $noticias );
		$this->load->view('welcome/index.php',$data);
	}

}
