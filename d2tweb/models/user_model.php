<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model{
    
	function __construct()
    {
		parent::__construct();
	}
    function list_user()
    {
        $query = $this->db->get('users');
        return $query->result();
    }
    function insert_user($insert_data){
        $this->db->insert('users', $insert_data);
    }
    function del_user(){}
    function update_user(){}
    function search_user(){}
    function get_user(){}
    
 }