<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
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
       $this->layout->view('site/index', $data);
	}
    
    public function register(){
        $data['title'] = 'Đăng ký';
        //load
        $this->load->model('user_model');
        $this->form_validation->set_error_delimiters('<p class="fg-color-yellow" >', '</p>');
        
        //validation form register
        $this->form_validation->set_rules('full_name', 'Full name', 'required|min_length[7]|xss_clean');
        $this->form_validation->set_rules('hotel_name', 'Hotel name', 'required|min_length[10]|xss_clean');
        $this->form_validation->set_rules('mobile', 'Mobile', 'numeric|min_length[10]|max_length[11]|xss_clean');
        $this->form_validation->set_rules('phone', 'Phone', 'numeric|min_length[5]|max_length[12]|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_emails');
        $this->form_validation->set_rules('address', 'Address', 'required|min_length[10]|xss_clean');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|xss_clean');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|min_length[5]|xss_clean');        
            
        if ($this->input->post() && $this->form_validation->run() == TRUE){
            $password = $this->input->post('username', TRUE);
            $passconf = $this->input->post('passconf', TRUE);
            if($password = $passconf){
                $now = date("Y-m-d H:i:s");
                $insert_data = array(
                    'full_name'  => $this->input->post('full_name', TRUE),
                    'hotel_name' => $this->input->post('hotel_name', TRUE),
                    'mobile'     => $this->input->post('mobile', TRUE),
                    'phone'      => $this->input->post('phone', TRUE),
                    'email'      => $this->input->post('email', TRUE),
                    'address'    => $this->input->post('address', TRUE),
                    'username'   => $this->input->post('username', TRUE),
                    'password'   => md5($this->input->post('password', TRUE)),
                    'create_time'=> $now
                );
                
                $this->user_model->insert_user($insert_data);
                
                redirect('login/index');
            }
            
        }
        $this->layout->view('site/register', $data);
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('');
    }
    
}