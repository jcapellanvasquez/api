<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
	function  __construct() {
		parent::__construct();
		$this->load->model('Ejemplo_model','',true);
    }
    
    public function test() {
        echo "test";
    }

    public function authenticate() {
		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header('Content-Type: application/json');

		
		$usuario="";

		 if (isset($_POST["usuario"]) && isset($_POST["usuario"])) {
			//$params = json_decode($_POST["user"],true);
			$usuario = $this->Ejemplo_model->get_token($_POST);
			//base64_encode($usuario)
			echo json_encode(["response"=> base64_encode($usuario)]);
		 } else {
			echo json_encode(["response" => "variable post vacia"]);
		 }
	}

    
}
