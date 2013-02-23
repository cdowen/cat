<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class goods extends CI_Controller {
  
  public function detail($gid) {
  
    $head_data['jses']=array('engine10/jquery.js', 'engine10/wowslider.js', 'engine10/script.js', 'js/jquery-1.9.0.js', 'js/jquery-ui-1.10.0.custom.js', 'js/main.js', 'js/shop.js');
    $head_data['csses'] = array('css/main.css', 'css/reset.css', 'css/shop.css', 'css/ui-lightness/jquery-ui-1.10.0.custom.css', 'engine10/style.css');
    
    $this->load->model('goods_m');
    $goods = $this->goods_m->get_goods_by_id($gid)[0];
    
    
    $this->load->view('common_head', $head_data);
    $this->load->view('detail.php', $goods);
    $this->load->view('common_bottom');
    
  }
}