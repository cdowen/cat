<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message_m extends CI_Model {
	function __construct() {
		parent::__construct();
                $this->load->database();
	}
	/*通过uid获取用户所有留言*/
	function get_message_by_uid($uid)
	{
		$result = $this->db
				->where(array('uid' => $uid))
				->get('message');
        if ($result->num_rows() > 0)
            return $result->result();
        else
            return null;
	}
	/*获取所有留言*/
	function get_allmessage()
	{
		$result = $this->db
				->get('message');
        if ($result->num_rows() > 0)
            return $result->result();
        else
            return null;
	}
	/*获取所有未回复留言*/
	function get_newmessage()
	{
		$result = $this->db
				->where(array('sid' => 0))
				->get('message');
        if ($result->num_rows() > 0)
            return $result->result();
        else
            return null;
	}
	/*获取所有已回复留言*/
	function get_oldmessage()
	{
		$result = $this->db
				->where('sid !=',0)
				->get('message');
        if ($result->num_rows() > 0)
            return $result->result();
        else
            return null;
	}
	/*通过sid获取管理员回复的留言*/
	function get_message_by_sid($sid)
	{
		$result = $this->db
				->where('sid',$sid)
				->get('message');
        if ($result->num_rows() > 0)
            return $result->result();
        else
            return null;
	}
	/*添加新留言*/
	function insert_message($uid,$time,$content)
	{
		$post=array(
			'uid'=> $uid,
			'time'=> $time,
			'content'=> $content,
			'sid'=> 0,
			'replytime'=> '',
			'reply'=> '',
			);
		
		 $this->db
                ->insert('message',$post);
	}
	/*管理员通过id回复留言（会覆盖）*/
	function messager_update_message_by_id($sid,$id,$replytime,$reply)
	{
		$post=array(
			'sid'=> $sid,
			'replytime'=> $replytime,
			'reply'=> $reply
			);
		$this->db->where('id',$id);
		$this->db->update('message',$post);
	}
	/*
		用户更改留言内容（仅在管理员未回复时有效）
		为方便管理员查看，更新留言的时间不记录，只记录添加留言的时间
	*/
	function user_update_message_by_id($id,$content)
	{
      $result=$this->db
        ->where(array('id' => $id,'sid !=' => 0));
      if ($this->db->count_all_results('message')!=0)
	  {
		//echo '管理员已回复，无法修改';
        return 'e_already_exists';
	 }
		$post=array(
			'content'=> $content,
			);
		$this->db->where('id',$id);
		$this->db->update('message',$post);
	}
	/*通过id删除留言*/
	function delete_message_by_id($id)
	{
		$this->db->delete('message', array('id' => $id));
	}
}
?>