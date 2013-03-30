<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Controller {
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
	   $data['title'] = 'customer';
     //  echo 'hoang';
       $this->load->model('customer_model');
       $insert_data = array('name'=>'Hoang', 
                            'address' => 'hai phong',
                            'birthday' => '1988-1-11',
                            'passport' => '123123123',
                            'phone' => '982934093',
                            'job' => 'ky su',
                            'sex' => '1',
                            'country' => 'tau khua'
                            );
       $add = $this->customer_model->insert_customer($insert_data);
       /**
         * if($add){
         *             $show = $this->test_model->list_test();
         *             print_r($show);
         *        }
         */
       $this->layout->view('test/index', $data);
    }

  
    public function ajaxjson(){
        $data['title'] = 'Test ajax json';
        $this->load->view('test/ajaxjson', $data);
    }
    public function process(){
        $name = trim($this->input->post('name'));
        $array = array('result' => $name);
        echo json_encode($array);
        //$this->load->view('test/ajaxjson', $data);
    }


    public function lietke(){
    $data['title'] = 'customer';  
    $this->load->model('customer_model');  
    $add = $this->customer_model->list_customer();
    echo "<pre>";
    print_r($add);
    echo "</pre>";
    $this->layout->view('test/index', $data);    
    }  

    public function get(){
    $data['title'] = 'customer';  
    $this->load->model('customer_model');  
    $add = $this->customer_model->get_customer(2);
    echo "<pre>";
    print_r($add);
    echo "</pre>";
    $this->layout->view('test/index', $data);    
    } 

    public function delete(){
    $data['title'] = 'customer';  
    $this->load->model('customer_model');  
    $this->customer_model->del_customer(2);
    
    $this->layout->view('test/index', $data);    
    } 
}