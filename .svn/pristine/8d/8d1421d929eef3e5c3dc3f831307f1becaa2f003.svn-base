<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hotel_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function list_hotel(){}
    function insert_hotel(){}
    function update_hotel(){}
    function search_hotel(){}
    function get_hotel($user_id = null){
        $this->db->select('*');
        $this->db->from('hotels');
        $this->db->where('user_id=', $user_id);
    }
    
}
?>