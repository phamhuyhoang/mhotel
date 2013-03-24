<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Test_model extends CI_Model{
    
	function __construct()
    {
		parent::__construct();
	}
    function list_test()
    {
        $query = $this->db->get('tests');
        return $query->result();
    }
    function insert_test($insert_data)
    {
        $this->db->insert('tests', $insert_data);
    }
    function del_user(){}
    function update_user(){}
    function search_user(){}
    function get_user(){}
    
 }