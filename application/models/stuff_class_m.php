<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class stuff_class_m extends CI_Model {
  
  function __construct(){
    parent::__construct();
    $this->load->database();
  }
  
  /**
   * 根据id得到分类描述
   * 
   * @param type $id
   */
  
  function get_by_id($id) {
    $result = $this->db
      ->where(array('id'=>$id))
      ->limit(1)
      ->get('stuff_class');
    if ($result ->num_rows()>0)
      return $result->result_array()[0];
  }
  
  /**
   * 列出所有分类
   */
  
  function list() {
    return $this->db->get('stuff_class');
  }
  
  /**
   * 添加分类
   * 
   * @param type $name
   * @param type $power
   */
  
  function add($name, $power) {
    $power['name'] = $name;
    $this->db
      ->insert('stuff_class', $power);
  }
  
  /**
   * 删除分类
   * 
   * @param type $id
   */
  
  function delete($id) {
    $this->db
      ->where(array('id'=>$id))
      ->delete('stuff_class');
  }
}