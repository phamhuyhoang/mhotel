<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Customer_model extends CI_Model{
    
	function __construct()
    {
		parent::__construct();
	}
    function list_customer()
    {
        $query = $this->db->get('customers');
        return $query->result();
    }
    function insert_customer($insert_data){
        $this->db->insert('customers', $insert_data);
    }
    function del_customer($customers_id){
         $this->db->where('id', $customers_id);
         $this->db->delete('customers');

    }
    function update_customer(){}
    function search_customer(){}
    function get_customer($customers_id){
        $this->db->select('*');
        $this->db->from('customers');
        $this->db->where('id', $customers_id);
        $query = $this->db->get();
        return $query->result();
    }
    
 }