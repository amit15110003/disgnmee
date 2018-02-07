<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Model
{
	
	
	function get_user($name, $pwd)
	{
		$this->db->where('username', $name);
		$this->db->where('password', md5($pwd));
        $query = $this->db->get('admin');
		return $query->result();
	}
	
	public function get_client($limit, $start)
	{	
		$this->db->limit($limit, $start);
		$this->db->order_by("created","desc");
		$query=$this->db->get('user');
		
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	
	}

	public function get_subscriber($limit, $start)
	{	
		$this->db->limit($limit, $start);
		$query=$this->db->get('subscribe');
		
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	
	}

	function countproduct()
	{
		$this->db->select_sum('id');
	    $this->db->from('product');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}
	function countclient()
	{
		$this->db->select_sum('id');
	    $this->db->from('user');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}
	function countsubscriber()
	{
		$this->db->select_sum('id');
	    $this->db->from('subscribe');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}
	

	// get user
	function get_user_by_id($id)
	{
		$this->db->where('id', $id);
        $query = $this->db->get('user');
		return $query->result();
	}
	function get_deliveryadd_by_id($id)
	{
		$this->db->where('uid', $id);
        $query = $this->db->get('delivery');
		return $query->result();
	}
	
	// insert
	function insert_user($data)
    {
		return $this->db->insert('user', $data);
	}

	function update($id, $fname, $lname, $contact)
    {	
    	$data = array('fname'=>$fname, 'lname'=>$lname, 'contact'=>$contact);
    	$this->db->where('id', $id);
		return $this->db->update('user', $data);
	}

	public function checkUser($data = array()){
		$this->db->select($this->primaryKey);
		$this->db->from($this->tableName);
		$this->db->where(array('oauth_provider'=>$data['oauth_provider'],'oauth_uid'=>$data['oauth_uid']));
		$prevQuery = $this->db->get();
		$prevCheck = $prevQuery->num_rows();
		
		if($prevCheck > 0){
			$prevResult = $prevQuery->row_array();
			$data['modified'] = date("Y-m-d H:i:s");
			$update = $this->db->update($this->tableName,$data,array('id'=>$prevResult['id']));
			$userID = $prevResult['id'];
		}else{
			$data['created'] = date("Y-m-d H:i:s");
			$data['modified'] = date("Y-m-d H:i:s");
			$insert = $this->db->insert($this->tableName,$data);
			$userID = $this->db->insert_id();
		}

		return $userID?$userID:FALSE;
    }
    function insert_image($data)
    {
		return $this->db->insert('imagelib', $data);
	}

	function insert_category($data)
    {
		return $this->db->insert('category', $data);
	}
	public function showcategory()
	{
		$query=$this->db->get('category');;
		return $query->result();
	}
	public function deletecategory($id)
	{
		$this->db->where('id', $id);
	return($this->db->delete('category'));
	}

	public function showscategory()
	{
		$query=$this->db->get('scategory');
		return $query->result();
	}
	function insert_scategory($name,$descr,$categorys)
    {
    	$data = array('name'=>$name,'descr'=>$descr,'category'=>$categorys);
		return $this->db->insert('scategory', $data);
	}
	public function deletescategory($id)
	{
		$this->db->where('id', $id);
	return($this->db->delete('scategory'));
	}
	function insert_artist($data)
    {
		return $this->db->insert('artist', $data);
	}
	public function showartist()
	{
		$query=$this->db->get('artist');
		return $query->result();
	}
	public function deleteartist($id)
	{
		$this->db->where('id', $id);
	return($this->db->delete('artist'));
	}
	function insert_attribute($data)
    {
		return $this->db->insert('attribute', $data);
	}
	public function showattribute()
	{
		$query=$this->db->get('attribute');
		return $query->result();
	}
	public function deleteattribute($id)
	{
		$this->db->where('id', $id);
	return($this->db->delete('attribute'));
	}
	function insert_attributevalue($data)
    {
		return $this->db->insert('attributevalue', $data);
	}
	public function showattributevalue()
	{
		$query=$this->db->get('attributevalue');
		return $query->result();
	}
	public function deleteattributevalue($id)
	{
		$this->db->where('id', $id);
	return($this->db->delete('attributevalue'));
	}
	function insert_tag($data)
    {
		return $this->db->insert('tag', $data);
	}
	public function showtag()
	{
		$query=$this->db->get('tag');
		return $query->result();
	}
	public function deletetag($id)
	{
		$this->db->where('id', $id);
	return($this->db->delete('tag'));
	}
	function insert_type($data)
    {
		return $this->db->insert('type', $data);
	}
	public function showtype()
	{
		$query=$this->db->get('type');;
		return $query->result();
	}
	public function deletetype($id)
	{
		$this->db->where('id', $id);
	return($this->db->delete('type'));
	}
	public function showproduct()
	{
		$this->db->limit(5);
		$this->db->order_by("posted","desc");
		$query=$this->db->get('product');;
		return $query->result();
	}
	public function showproductall($limit, $start)
	{	
		$this->db->limit($limit, $start);
		$this->db->order_by("posted","desc");
		$query=$this->db->get('product');
		
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	
	}
	public function showproduct_search($limit, $start,$keyword)
	{	
		$this->db->limit($limit, $start);
		$this->db->order_by("posted","desc");
		$this->db->like('title',$keyword);
    	$this->db->or_like('category',$keyword);
    	$this->db->or_like('Descr',$keyword);
   		$query  =   $this->db->get('product');
		
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	
	}
    
	function insert_product($data)
    {
    	return $this->db->insert('product', $data);
	}
	function product_status($id,$status)
    {
    	$this->db->where('id', $id);
    	$data = array('status'=>$status);
    	return $this->db->update('product',$data);
	}
	function product_status1($id,$status)
    {
    	$this->db->where('id', $id);
    	$data = array('status'=>$status);
    	return $this->db->update('product',$data);
	}
	public function deleteproduct($id)
	{
		$this->db->where('id', $id);
	return($this->db->delete('product'));
	}

	public function productedit($id)
	{
		$this->db->where('id', $id);
		$query=$this->db->get('product');
		return $query->result();
	}
	public function showattribute1($id)
	{
		$this->db->where('productid', $id);
		$query=$this->db->get('attributevalue');
		return $query->result();
	}
	public function update_attribute($data,$id)
	{
		$this->db->where('productid',$id);
	   $q = $this->db->get('attributevalue');

	   if ( $q->num_rows() > 0 ) 
	   {
		$this->db->where('productid',$id);
	      $this->db->update('attributevalue',$data);
	   } else {
		$this->db->where('productid',$id);
	     $this->db->insert('attributevalue', $data);
	   }
	}
	public function update_product($data,$id)
	{
		$this->db->where('id', $id);
		return $this->db->update('product',$data);
	}
	function insert_productimage($data)
    {
		return $this->db->insert('image', $data);
	}
	function get_order()
	{	
		$this->db->select('orderid,status,status1');
		$this->db->order_by("orderid","desc");
		$this->db->distinct();
        $query = $this->db->get('itemorder');
		return $query->result();
	}
	function get_abandoned_cart()
	{	
		$this->db->order_by("id","desc");
		$this->db->limit(30);
        $query = $this->db->get('abandoned_cart');
		return $query->result();
	}
	function get_orderid($id)
	{	
		$this->db->where('orderid', $id);
        $query = $this->db->get('itemorder');
		return $query->result();
	}
	public function get_order_uid($id)
	{	
		$this->db->select('uid');
		$this->db->distinct();
		$this->db->where('orderid', $id);
		$query=$this->db->get('itemorder');
		return $query->result();
	}
		public function getorderadd($orderid)
	{ 	
		$this->db->where('order_id', $orderid);
		$query=$this->db->get('orderadd');
		return $query->result();
	}
		function order_status($id,$status)
    {
    	$this->db->where('orderid', $id);
    	$data = array('status1'=>$status);
    	return $this->db->update('itemorder',$data);
	}
	public function get_product_id($id)
	{	
		$this->db->where('id', $id);
		$query=$this->db->get('product');
		return $query->result();
	}
	public function showproductimage($id)
	{		
		$this->db->where('productid', $id);
		$query=$this->db->get('image');;
		return $query->result();
	}
	public function showslider()
	{
		$query=$this->db->get('slider');;
		return $query->result();
	}
	function insert_slider($data)
    {
		return $this->db->insert('slider', $data);
	}
	public function deleteslider($id)
	{
		$this->db->where('id', $id);
	return($this->db->delete('slider'));
	}
		public function showmedia($limit, $start)
	{	
		$this->db->limit($limit, $start);
		$this->db->order_by("posted","desc");
		$query=$this->db->get('image');
		
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	
	}
	function seencontact($id, $seen)
	{
		$this->db->where('id', $id);
		$data = array('seen'=>$seen);
		return $this->db->update('message',$data);
	}
	function seendesigner($id, $seen)
	{
		$this->db->where('id', $id);
		$data = array('seen'=>$seen);
		return $this->db->update('designer',$data);
	}
	function seentailor($id, $seen)
	{
		$this->db->where('id', $id);
		$data = array('seen'=>$seen);
		return $this->db->update('tailor',$data);
	}
	function contact()
	{
		$this->db->order_by("sent","desc");
		$query=$this->db->get('message');
		return $query->result();
	}
	function tailor()
	{
		$this->db->order_by("sent","desc");
		$query=$this->db->get('tailor');
		return $query->result();
	}
	function designer()
	{
		$this->db->order_by("sent","desc");
		$query=$this->db->get('designer');
		return $query->result();
	}
	function insert_blog($data)
    {
		return $this->db->insert('blog', $data);
	}
public function showblog()
	{
		$query=$this->db->get('blog');;
		return $query->result();
	}
	public function deleteblog($id)
	{
		$this->db->where('id', $id);
	return($this->db->delete('blog'));
	}
}?>