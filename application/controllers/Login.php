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
		header('Access-Control-Allow-Headers: X-Requested-With');
		header('Access-Control-Allow-Methods: *');
		$usuario="";

		 if (isset($_POST["user"])) {
			$params = json_decode($_POST["user"],true);
			$usuario = $this->Ejemplo_model->get_token($params);
			echo base64_encode($usuario);
		 } else {
			 echo "variable post vacia";
		 }
	}

    
}
