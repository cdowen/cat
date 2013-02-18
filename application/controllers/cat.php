<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cat extends CI_Controller {
  
  /**
   * default controller for cat
   * index page
   */
  
  public function index(){
    $this->load->view('common_head');
    $this->load->view('index');
    $this->load->view('common_bottom');
  }
}