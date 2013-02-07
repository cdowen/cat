<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//TODO : 权限控制

class stuff_m extends CI_model {
  
  function __construct(){
    parent::__construct();
    $this->load->database();
  }
  
  /**
  * 根据员工id得到员工
  *@param type $id
  */
  
  function get_staff($id){
    $result = $this->db
            ->where(array('id' => $id))
            ->get('staff');

    if ($result->num_rows() > 0)
       return $result->result_array()[0];
    else
       return null;
  }
  
  /**
  *根据员工名得到员工
  *@param type $name
  */
    
  function get_staff_by_name($name){
    $result = $this->db
	      ->where(array('name' => $name))
	      ->get('staff');
	      
    if ($result->num_rows() > 0)
       return $result->result_array()[0];
    else
       return null;
  }
  
  function add_staff($name, $pwd, $power) {
    $result = $this->db
        ->insert()
  }
