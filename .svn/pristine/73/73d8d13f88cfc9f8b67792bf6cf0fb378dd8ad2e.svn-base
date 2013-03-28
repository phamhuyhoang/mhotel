<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {
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
	   $data['title'] = 'Test';
       $this->load->model('test_model');
       $insert_data = array('name'=>'Hoa', 'description' => 'la chi ho');
       $add = $this->test_model->insert_test($insert_data);
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
}