<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Goods_class_m extends CI_Model {
	function __construct() {
		parent::__construct();
                $this->load->database();
	}
	/*通过classid得到子类*/
	function get_class_by_classid($classid)
	{
        $result = $this->db
                ->where(array('classid' => $classid))
                ->get('goods_class');
        if ($result->num_rows() > 0)
            return $result->result();
        else
            return null;
	}
	/*添加子类*/
	function insert_class($name,$parentid)
	{
		$post=array(
			'name'=> $name,
			'parentid'=> $parentid,
			);
		 $this->db
                ->insert('goods_class',$post);
	}
	/*通过classid更新子类*/
	function update_class_by_classid($classid,$name,$parentid)
	{
		$post=array(
			'name'=> $name,
			'parentid'=> $parentid,
			);
		$this->db->where('classid',$classid);
		$this->db->update('goods_class',$post);
	}
	/*通过classid删除子类*/
	function delete_class_by_classid($classid)
	{
		$this->db->delete('goods_class', array('classid' => $classid));
	}
?>