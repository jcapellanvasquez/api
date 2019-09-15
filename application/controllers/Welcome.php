<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function  __construct() {
		parent::__construct();


	//https://getcomposer.org/doc/00-intro.md#installation-windows
		// Param1 => nombre de la clase modelo
		// Param2 => valor por defecto
		// Param3 => boolean para que se conecte a la bd
		$this->load->model('Ejemplo_model','',true);
	}

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		echo json_encode($this->Ejemplo_model->get_users());
	}

	public function get_users() {
		//echo "ruta";
		header('Access-Control-Allow-Origin: *');
		echo json_encode($this->Ejemplo_model->get_users());
	}

	public function set_user() {
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Headers: X-Requested-With');
		header('Access-Control-Allow-Methods: *');

		 if (isset($_POST["user"])) {
			$params = json_decode($_POST["user"],true);
			$this->Ejemplo_model->set_user($params);
		 }
	}

	

	public function test() {
		echo "test";
	}
}
