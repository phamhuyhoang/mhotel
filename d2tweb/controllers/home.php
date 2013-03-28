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
        $user_id  = $this->session->userdata('user_id');
        //load
        $this->load->model('hotel_model');
        $data['check_hotel'] = $this->hotel_model->get_hotel($user_id);
        
       $this->layout->view("home/index", $data);
	}
    public function profile(){}

    public function process_hotel(){
        $this->load->model('hotel_model');
        if ($this->input->post()){
            $now = date("Y-m-d H:i:s");
            $insert_data = array(
                'user_id'       => $this->session->userdata('user_id'),
                'name'          => $this->input->post('hotel_name', TRUE),
                'address'       => $this->input->post('address', TRUE),
                'phone'         => $this->input->post('phone', TRUE),
                'email'         => $this->input->post('email', TRUE),
                'description'   => $this->input->post('description', TRUE),
                'website'       => $this->input->post('website', TRUE),
                'create_time'   => $now
            );
            
            $rs = $this->hotel_model->insert_hotel($insert_data);

            $msg = array('url' => 'room');        
            echo json_encode($msg);
            return false;
        }else{
            $msg = array('err' => "Lỗi");            
            echo json_encode($msg);
        } 
    }
}