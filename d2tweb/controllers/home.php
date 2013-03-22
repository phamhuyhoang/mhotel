<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
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
	   $data['title'] = 'Trang chủ';
       $this->layout->view("home/index", $data);
	}
    public function profile(){}
    public function register(){}
}