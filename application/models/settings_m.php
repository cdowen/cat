<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class settings_m extends CI_Model {
  
  function __construct(){
    parent::__construct();
    $this->load->database();
  }
  
  function get_goods(){
    $result = $this->db
      ->select('goods')
      ->get('settings');
    return $result->result_array()[0];
  }
  
  function update_goods($goods) {
    $this->db
      ->update('settings', array('goods'=>$goods));
  }
  
  function get_info() {
    $result = $this->db
      ->select('info')
      ->get('settings');
  }
  
  function update_info($info) {
    $this->db
      ->update('settings', array('info' =>$info));
  }
}