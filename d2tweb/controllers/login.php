<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    /**
    *
    */
    public function __construct(){
        parent::__construct();
		$this->load->helper("url");
		
		$this->load->library("layout"); // Nap thu vien layout
        $this->layout->setLayout("layout"); //Set file layout
		
    }
	public function index(){
	   $data['title'] = 'Đăng nhập';
       $this->load->view("login/index", $data);
	}
    public function process(){
        
    }
}