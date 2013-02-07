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
    function get_user_by_id($id) {
        $result = $this->db
                ->where(array('id' => $id))
                ->get('user');

        if (count($result) > 0)
            return $result[0];
        else
            return null;
    }

    /**
     * 通过用户名获取用户信息
     * 
     * @param type $name
     * @return array
     */
    function get_user_by_name($name) {
        $result = $this->db
                ->where(array('name' => $name))
                ->get('user');

        if (count($result) > 0)
            return $result[0];
        else
            return null;
    }
    
    /**
     * 创建用户
     * @param type $pwd
     * @param type $nickname
     * @param type $birthday
     */
    
    function create_user($nickname, $pwd, $mail, $birthday='') {
        if (is_null($nickname))
            return 'e_null_name';
        if (is_null($pwd))
            return 'e_null_pwd';
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
}