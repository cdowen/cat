<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cat extends CI_Controller {
  
    
  /**
   * default controller for cat
   * index page
   */
  
  public function index(){
    
    $head_data['jses']=array('engine6/jquery.js', 'engine6/wowslider.js', 'engine6/script.js', 'js/jquery-1.9.0.js', 'js/jquery-ui-1.10.0.custom.js', 'js/jquery.carouFredSel-6.2.0-packed.js', 'js/main.js', 'js/index.js');
    $head_data['csses'] = array('css/main.css', 'css/reset.css', 'css/index.css', 'css/ui-lightness/jquery-ui-1.10.0.custom.css', 'engine6/style.css');
    $head_data['index'] = true;
    
    $this->load->model('settings_m');
    $info_data = $this->settings_m->get_info();
    
    $this->load->model('pic_m');
    $goods = $this->settings_m->get_goods();
    $index_data['fetured_pics'] = $pics;
    
    $this->load->view('common_head', $head_data);
    $this->load->view('index', $index_data);
    $this->load->view('common_bottom');
  }