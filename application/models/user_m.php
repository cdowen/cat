<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_m extends CI_Model {
  
  function __construct(){
    parent::__construct();
    $this->load->database();
  }
  

     /**
     * 通过用户ID获得用户信息
     * 
     * @param type $id
     * @return array
     */
    function get_by_id($id) {
      $result = $this->db
        ->where(array('id' => $id))
        ->limit(1)
        ->get('user');

      if ($result->num_rows() > 0)
        return $result->result_array()[0];
      else
        return null;
    }

    /**
     * 通过用户名搜索用户
     * 
     * @param type $name
     * @return array
     */
    function get_by_name($name) {
      $result = $this->db
        ->like(array('name' => $name))
        ->get('user');

      if ($result->num_rows() > 0)
        return $result->result_array();
      else
        return null;
    }
    
    /**
     * 根据用户注册邮箱获取用户
     * 
     *@param type $mail
     */
    
    function get_by_mail($mail) {
      $result = $this->db
        ->where(array('mail'=>$mail))
        ->limit(1)
        ->get('user');
        
      if ($result->num_rows()>0)
        return $result->result_array()[0];
      else
        return null;
    }
    
    /**
     * 创建用户
     * @param type $pwd
     * @param type $nickname
     * @param type $mail
     * @param type $birthday
     */
    
    function create($nickname, $pwd, $mail, $birthday='') {
      $this->db
        ->where(array('mail' => $mail))
        ->limit(1)
        ->from('user');
      if ($this->db->count_all_results('user')!=0)
        return 'e_already_exists';
      $pwd = sha1($pwd);  
      $post = array(
        'pwd' => $pwd,
        'nickname' => $nickname,
        'birthday' => $birthday,
        'mail'=> $mail,
        'point'=>'0'
      );
        
      $this->db
        ->insert('user',$post);
    }
    
    /**
     * 修改用户邮箱和生日
     *@param type $id
     *@param type $mail
     *@param type $birthday
     */
    
    function modify($id, $pwd ='', $mail = '', $birthday = '') {
      if (!is_null($mail))
        $data['mail'] = $mail;
      if (!is_null($pwd))
        $data['pwd'] = $pwd;
      if (!is_null($birthday))
        $data['birthday'] = $birthday;
      $this->db
        ->where(array('id' => $id))
        ->update('user', $data);	
    }
    
    /**
     * 根据用户id取得用户喜欢的商品
     * 
     * @param type $id
     * @param type array $option limit, offset
     */
    
    function get_like($id, $option=array()) {
      $this->db->where(array('uid'=> $id));
      if (isset($option['limit'])){
        $this->db->limit($option['limit']);
        if (isset($option['offset']))
          $this->db->limit($option['limit'], $option['offset']);
      }
      $result = $this->db->get('like');
      if ($result->count_all_results()>0)
        return $result->result_array();
      else
        return null;
    }
    
    /**
     * 添加用户喜欢商品，添加前会检验是否已存在
     * 
     * @param $uid
     * @param $gid
     */
    
    function add_like($uid, $gid) {
      $result = $this->db
        ->where(array('uid'=>$uid, 'gid'=>$gid))
        ->limit(1)
        ->get('like');
      if ($result->count_all_results()==0){
        $data = array('uid' =>$uid, 'git'=>$gid, 'date'=>date(Y-m-d));
        $this->db
          ->insert('like', $data);
      }
    }
}