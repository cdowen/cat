<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Goods_m extends CI_Model {
	function __construct() {
		parent::__construct();
                $this->load->database();
	}
	/*通过id获取商品信息*/
	function get_goods_by_id($id) {
        $result = $this->db
                ->where(array('id' => $id))
                ->get('goods');
		
        if ($result->num_rows() > 0)
            return $result->result();
        else
            return null;
	}
	/*通过name获取商品信息*/
	function get_goods_by_name($name) {
        $result = $this->db
                ->where(array('name' => $name))
                ->get('goods');
		
        if ($result->num_rows() > 0)
            return $result->result();
        else
            return null;
	}
	/*通过classid获取某一分类下所有商品信息*/
	function get_allgoods_by_classid($classid){
		$result = $this->db
				->where(array('classid' => $classid))
				->get('goods');
				
        if ($result->num_rows() > 0)
            return $result->result();
        else
            return null;
	}
	/*
		添加商品
		销售量sold和被喜欢数liked默认为0
		新添加的商品默认为下架，以免商家未调整完毕
	*/
	function create_goods($name,$classid,$price,$left,$info)
	{
		$post=array(
			'name'=> $name,
			'classid'=> $classid,
			'price'=> $price,
			'left'=> $left,
			'sold'=> 0,
			'liked'=> 0,
			'info'=> $info,
			'inuse'=> FALSE
			);
		 $this->db
                ->insert('goods',$post);
	}
	/*
		通过id修改商品信息，增加一个上下架的状态
	*/
	function update_goods_by_id($id,$name,$classid,$price,$left,$info,$inuse)
	{
		$post=array(
			'name'=> $name,
			'classid'=> $classid,
			'price'=> $price,
			'left'=> $left,
			'info'=> $info,
			'inuse'=> $inuse
			);
		$this->db->where('id',$id);
		$this->db->update('goods',$post);
	}
	/*
		通过id删除某个商品
	*/
	function delete_goods_by_id($id)
	{
		$this->db->delete('goods', array('id' => $id));
	}
	/*
		通过classid删除某一分类下的所有商品（当删除分类时使用）
	*/
	function delete_allgoods_by_classid($classid)
	{
		$this->db->delete('goods', array('classid' => $classid));
	}
	
}

?>