<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
*员工相关数据
*/

class stuff_m extends CI_model {
  
  function __construct(){
    parent::__construct();
    $this->load->database();
  }
  
  /**
  * 根据员工id得到员工
  *@param type $id
  */
  
  function get_by_id($id){
    $result = $this->db
      ->where(array('id' => $id))
      ->limit(1)
      ->get('staff');

    if ($result->num_rows() > 0)
      return $result->result_array()[0];
    else
      return null;
  }
  
  /**
  *根据员工名得到员工
  *
  *@param type $name
  */
    
  function get_by_name($name){
    $result = $this->db
      ->where(array('name' => $name))
      ->limit(1)
      ->get('staff');
      
    if ($result->num_rows() > 0)
      return $result->result_array()[0];
    else
      return null;
  }
  
  /**
  *创建员工
  *@param type $name, 员工姓名
  *@param type $pwd, 密码
  *@param type $type, 员工类别，1,2,3三种
  */
  
  function create($name, $pwd, $type) {
    $data = array('name'=>$name, 'pass'=>sha1($pwd), 'class'=>$type);
    $result = $this->db
      ->insert('staff', $data);
  }
  
  /**
  *根据id删除员工
  *
  *@param type $id
  */
  
  function delete($id) {
    $this->db
      ->where('id'=>$id)
      ->limit(1)
      ->delete('staff');
  }
