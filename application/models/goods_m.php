<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class goods_m extends CI_model { 

  function __construct(){
    parent::__construct();
    $this->load->database();
  }
  /**
  *根据商品id得到商品
  *@param type $id
  */
  
  function get_by_id($id){
    $result = $this->db
            ->where(array('id' => $id))
            ->get('goods');

    if ($result->num_rows() > 0)
       return $result->result_array()[0];
    else
       return null;
  }
  
  /**
  *根据商品名搜索商品
  *@param type $name
  */
    
  function get_by_name($name){
    $result = $this->db
              ->like(array('name' => $name))
              ->get('goods');
              
    if ($result->num_rows() > 0)
       return $result->result_array();
    else
       return null;
  }

}