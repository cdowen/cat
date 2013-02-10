<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Goods_parent_class_m extends CI_Model {
	function __construct() {
		parent::__construct();
                $this->load->database();
	}
	/*通过id获得父类*/
	function get_parentclass_by_id($id)
	{
		$result = $this->db
				->where(array('id' => $id))
				->get('goods_parent_class');
        if ($result->num_rows() > 0)
            return $result->result();
        else
            return null;
	}
	/*添加父类*/
	function insert_parentclass($name)
	{
		$post = array(
			'name'=$name;
		)
		$this->db
                ->insert('goods_parent_class',$post);
	}
	/*通过id修改父类*/
	function update_parentclass_by_id($id,$name)
	{
		$post=array(
			'name'=> $name,
			);
		$this->db->where('id',$id);
		$this->db->update('goods_parent_class',$post);
	}
	/*通过id删除父类*/
	function delete_parentclass_by_id($id)
	{
		$this->db->delete('goods_parent_class', array('id' => $id));
	}
}
?>