<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    /**
    *
    */
    public function __construct(){
        parent::__construct();
		$this->load->helper("url");
        if($this->session->userdata('validated')){
            redirect('home');
        }
		
		$this->load->library("layout"); // Nap thu vien layout
        $this->layout->setLayout("layout"); //Set file layout
		
    }
	public function index(){
 	  $data['title'] = 'Đăng nhập';
       $this->load->view("login/index", $data);
	}
    public function process(){
        // Load the model
        $this->load->model('login_model');
        $this->form_validation->set_error_delimiters('<p class="fg-color-white" >', '</p>');
        
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|xss_clean');
        
        if ($this->input->post() && $this->form_validation->run() == TRUE){
            // Validate the user can login
            $rs = $this->login_model->validate();
            
            if($rs){
                $msg = array('url' => 'home');        
                echo json_encode($msg);
                return false;
            }else{
                $msg = array('err' => "Tài khoản hoặc mật khẩu không đúng!");            
                echo json_encode($msg);
            } 
        }else{
            $msg = array('err' => "Tài khoản hoặc mật khẩu không đúng!");            
            echo json_encode($msg);
        } 
    }
}