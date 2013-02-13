<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pic_m extends CI_Model {
	function __construct() {
		parent::__construct();
                $this->load->database();
	}
	/*通过gid获得多个图片*/
	function get_pic_by_gid($gid)
	{
		$result = $this->db
				->where(array('gid' => $gid))
				->get('pic');
        if ($result->num_rows() > 0)
            return $result->result();
        else
            return null;
	}
	/*通过content获得某个图片*/
	function get_pic_by_content($content)
	{
		$result = $this->db
				->where(array('content' => $content))
				->get('pic');
        if ($result->num_rows() > 0)
            return $result->result();
        else
            return null;
	}
	/*通过id修改图片*/
	/*
	function update_pic_by_gid($id,$type,$content)
	{
		$post=array(
			'type'=> $type,
			'content'=> $content,
			);
		$this->db->where('id',$id);
		$this->db->update('pic',$post);
	}
	*/
	/*添加图片*/
	function insert_pic($gid,$type,$content)
	{
		$post=array(
			'gid'=> $gid,
			'type'=> $type,
			'content'=> $content,
			);
      $this->db
        ->where(array('content' => $content))
        ->limit(1)
        ->from('pic');
      if ($this->db->count_all_results('pic')!=0)
        return 'e_already_exists';
		 $this->db
                ->insert('pic',$post);
	}
	
	/*通过content删除图片*/
	function delete_pic_by_content($content)
	{
		$this->db->delete('pic', array('content' => $content));
	}
	/*通过gid删除某商品的所有图片*/
	function delete_pic_by_gid($gid)
	{
		$this->db->delete('pic', array('gid' => $gid));
	}
}
?>