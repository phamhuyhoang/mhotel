<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
		$this->load->helper("url");
        if(!$this->session->userdata('validated')){
            redirect('login');
        }
		
		$this->load->library("layout"); // Nap thu vien layout
        $this->layout->setLayout("layout"); //Set file layout
		
    }

	public function index(){
        $data['title'] = 'Quản lý phòng khách sạn';
        $data['sess']  = $this->session->userdata('username');
         //load
        $this->load->model('hotel_model');
        $data['check_hotel'] = $this->hotel_model->get_hotel();
        
       $this->layout->view("home/index", $data);
	}
    public function profile(){}
    public function register(){}
}