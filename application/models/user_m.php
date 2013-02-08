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
        get('user');
        
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
      $this->db->where(array('nickname' => $nickname))
        ->or_where(array('mail' => $mail))
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
    
    function modify($id, $mail = '', $birthday = '') {
      if (!is_null($mail))
        $data['mail'] = $mail;
      if (!is_null($birthday))
        $data['birthday'] = $birthday;
      $this->db->where(array('id' => $id))
        ->update('user', $data);	
    }
}