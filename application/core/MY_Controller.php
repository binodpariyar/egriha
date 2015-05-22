<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->check_login();
	}

	public function check_login(){
		if($this->session->userdata('id') == ""){
			redirect('login_admin');
		}
	}

}

class Client_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->check_login();
	}

	public function check_login(){
		if($this->session->userdata('client_id') == ""){
			redirect('login');
		}
	}

}

class Users_Controller extends CI_Controller {

	var $details;

	public function __construct() {
		parent::__construct();
		$this->check_login();
	}

	public function check_login(){
		if(!$this->ion_auth->logged_in()){
			redirect('login');
		}else{
			$this->details = $this->ion_auth->user()->row();
		}
	}

}
