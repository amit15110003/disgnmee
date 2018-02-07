<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Model
{
	function __construct()
    {
        parent::__construct();
        $this->tableName = 'user';
		$this->primaryKey = 'id';
    }
	
	function get_user($email, $pwd)
	{
		$this->db->where('email', $email);
		$this->db->where('password', md5($pwd));
        $query = $this->db->get('user');
        $data['modified'] = date("Y-m-d H:i:s");
		$update = $this->db->update('user',$data);
		return $query->result();
	}
	    function get_userpass($email)
	{
		$this->db->where('email', $email);    
                $query = $this->db->get('user');
		return $query->result();
	}
	function get_account($uid)
	{
		$this->db->where('uid', $uid);
        $query = $this->db->get('account');
		return $query->result();
	}
	
	// get user
	function get_user_by_id($id)
	{
		$this->db->where('id', $id);
        $query = $this->db->get('user');
		return $query->result();
	}
	
	// insert
	function insert_user($data)
    {
    	$data['created'] = date("Y-m-d H:i:s");
		return $this->db->insert('user', $data);
	}

	function update($id, $fname, $lname, $contact)
    {	
    	$data = array('fname'=>$fname, 'lname'=>$lname, 'contact'=>$contact);
    	$this->db->where('id', $id);
		return $this->db->update('user', $data);
	}
	public function showcategory()
	{

		$this->db->order_by("id", "asc");
		$query=$this->db->get('category');
		return $query->result();
	}
    function insert_subscriber($email)
    {$data = array('email'=>$email);
		return $this->db->insert('subscribe', $data);
	}
	public function showcategory_category($category)
	{	$this->db->where('category', $category);
		$query=$this->db->get('category');;
		return $query->result();
	}
	public function showwishlist($id)
	{	
		$this->db->where('uid', $id);
		$query=$this->db->get('wishlist');;
		return $query->result();
	}
	public function showcart($id)
	{	
		$this->db->where('uid', $id);
		$query=$this->db->get('cart');;
		return $query->result();
	}
	function countproduct($id)
	{	
		$this->db->where('uid', $id);
		$this->db->select_sum('id');
	    $this->db->from('cart');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}

	function countproduct_category($category)
	{	
		$this->db->where('category', $category);
		$this->db->where('status', "hosted");
		$this->db->select_sum('id');
	    $this->db->from('product');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}
	function countproduct_sort($categoryid,$ocassion,$fabric,$pattern)
	{	
		$this->db->where('category', $categoryid);
		$this->db->where('status', "hosted");
		$this->db->select_sum('id');
	    $this->db->from('product');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}
	function countproduct_artist($artist)
	{	
		$this->db->where('artist', $artist);
		$this->db->where('status', "hosted");
		$this->db->select_sum('id');
	    $this->db->from('product');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}
	
	
	public function showtype()
	{
		$query=$this->db->get('type');;
		return $query->result();
	}
	
	public function showproduct()
	{
		$query=$this->db->get('product');
		$this->db->where('status', "hosted");
		return $query->result();
	}
	public function showproduct_category($limit, $start,$scategory)
	{	
		$this->db->limit($limit, $start);
		$this->db->where('category', $scategory);
		$this->db->where('status', "hosted");
		$query=$this->db->get('product');
		
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}
	public function get_scategory_id($category,$scategory)
	{	
		$this->db->where('category', $category);
		$this->db->where('name', $scategory);
		$query=$this->db->get('scategory');
		return $query->result();
	}
	public function get_product_id($category,$title)
	{	
		$this->db->where('category', $category);
		$this->db->where('title', $title);
		$this->db->where('status', "hosted");
		$query=$this->db->get('product');
		return $query->result();
	}
	public function showattribute1($id)
	{
		$this->db->where('productid', $id);
		$query=$this->db->get('attributevalue');
		return $query->result();
	}
	public function get_product_by_id($id)
	{	
		$this->db->where('id', $id);
		$this->db->where('status', "hosted");
		$query=$this->db->get('product');
		return $query->result();
	}
	public function showdesign($id)
	{
		$this->db->where('id', $id);
		$query=$this->db->get('product');;
		return $query->result();
	}

	function insert_view($id,$view)
	{
		$data1 = array('view'=>$view);
		$this->db->where('id', $id);
        return $this->db->update('product', $data1);
	}
	function shortlist($id,$uid)
	{
		$data = array('lib'=>$id,'uid'=>$uid);
        return $this->db->insert('shortlist', $data);
	}

	public function get_image_id($id)
	{	
		$this->db->where('productid',$id);
		$query=$this->db->get('image');
		return $query->result();
	}
	/*cart model*/
	function get_cart_qty($uid,$id,$attributevalue)
	{
	    $this->db->where('productid', $id);
	    $this->db->where('uid', $uid);
	    $this->db->where('attributevalue', $attributevalue);
	    $query = $this->db->get('cart');
	    return $query->result();
	}

	function check_cart($uid,$id)
	{
	    $this->db->where('productid', $id);
	    $this->db->where('uid', $uid);
	    $query = $this->db->get('cart');
	    return $query->result();
	}
	/*cart model end*/
	
	/*wishlist model*/
	function check_wish($uid,$id)
	{
	    $this->db->where('productid',$id);
	    $this->db->where('uid',$uid);
	    $query = $this->db->get('wishlist');
	    return $query->result();
	}

	
	/*wishlist model end*/
	/*love model*/
	function check_love($uid,$id)
	{
	    $this->db->where('productid',$id);
	    $this->db->where('uid',$uid);
	    $query = $this->db->get('love');
	    return $query->result();
	}

	function update_love($productid,$love)
    {	
    	$data = array('love'=>$love);
    	$this->db->where('id', $productid);
		return $this->db->update('product', $data);
	}
	/*love model end*/

	public function get_review_id($id)
	{	
		$this->db->where('productid',$id);
		$query=$this->db->get('review');
		return $query->result();
	}
	function countreview($id,$uid)
	{	
		$this->db->where('uid', $uid);
		$this->db->where('productid', $id);
		$this->db->select_sum('id');
	    $this->db->from('review');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}
	public function showtag($category)
	{ 	
		$this->db->where('category', $category);
		$query=$this->db->get('tag');
		return $query->result();
	}
	public function showproduct_maxrate()
	{ 	$this->db->limit(3);
		$this->db->order_by("rate", "desc");
		$this->db->where('status', "hosted");
		$query=$this->db->get('product');
		return $query->result();
	}
	public function showproduct_new()
	{ 	$this->db->limit(3);
		$this->db->order_by("id", "desc");
		$this->db->where('status', "hosted");
		$query=$this->db->get('product');
		return $query->result();
	}
	public function showproduct_mostview()
	{ 	$this->db->limit(6);
		$this->db->order_by("view", "desc");
		$this->db->where('status', "hosted");
		$query=$this->db->get('product');
		return $query->result();
	}
	public function showproduct_mostview_cat($category)
	{ 	$this->db->limit(6);
		$this->db->order_by("view", "desc");
		$this->db->where('category',$category);
		$this->db->where('status', "hosted");
		$query=$this->db->get('product');
		return $query->result();
	}

	function countreview_product($id)
	{	
		$this->db->where('productid', $id);
		$this->db->select_sum('id');
	    $this->db->from('review');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}

	function update_review($productid,$review)
    {	
    	$data = array('review'=>$review);
    	$this->db->where('id', $productid);
		return $this->db->update('product', $data);
	}
	function updateview($id,$view)
    {	
    	$data = array('view'=>$view);
    	$this->db->where('id', $id);
		return $this->db->update('product', $data);
	}
	function insert_delivery($data,$uid,$id)
    {
		 $this->db->where('uid',$uid);
		 $this->db->where('id',$id);
	   $q = $this->db->get('delivery');

	   if ( $q->num_rows() > 0 ) 
	   {
	      $this->db->where('uid',$uid);
	     return  $this->db->update('delivery',$data);
	   } else {
	      $this->db->set('uid', $uid);
	      return $this->db->insert('delivery', $data);
	   }
	}
	function insert_shipping($data)
    {
	     return $this->db->insert('delivery', $data);
	   
	}
	function get_delivery_by_id($id)
	{
		$this->db->where('uid', $id);
        $query = $this->db->get('delivery');
		return $query->result();
	}
	function update_delivery($data,$uid)
    {	
    	$this->db->where('uid',$uid);
	   $q = $this->db->get('delivery');

	   if ( $q->num_rows() > 0 ) 
	   {
	      $this->db->where('uid',$uid);
	      $this->db->update('delivery',$data);
	   } else {
	      $this->db->set('uid', $uid);
	      $this->db->insert('delivery', $data);
	   }
	}
	function countproduct_search($keyword)
	{	$this->db->like('title',$keyword);
    	$this->db->or_like('category',$keyword);
    	$this->db->or_like('Descr',$keyword);
		$this->db->where('status','hosted');
		$this->db->select_sum('id');
	    $this->db->from('product');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}
	function search($limit, $start,$keyword)
	{
		$this->db->limit($limit, $start);
	    $this->db->like('title',$keyword);
	    $this->db->or_like('category',$keyword);
	    $this->db->or_like('scategory',$keyword);
	    $this->db->or_like('Descr',$keyword);
			$this->db->where('status','hosted');
	    $query  =   $this->db->get('product');
	    return $query->result();
	}
	public function deliveryadd($id)
	{	
		$this->db->where('uid',$id);
		$query=$this->db->get('delivery');
		return $query->result();
	}
	public function shippingadd($id)
	{	
		$this->db->where('uid',$id);
		$query=$this->db->get('shipping');
		return $query->result();
	}
	public function showslider()
	{
		$query=$this->db->get('slider');;
		return $query->result();
	}
	public function sortproduct($limit, $start,$category,$tag)
	{ 	$this->db->limit($limit, $start);
		$this->db->where('category', $category);
		$this->db->where('status', "hosted");
		if($tag!="null")
		{

		$this->db->like('tag', $tag);
		}

		$query=$this->db->get('product');
		return $query->result();
	}
	public function sortproduct_popular($limit,$start,$category,$tag)
	{ 	$this->db->limit($limit, $start);
		$this->db->order_by("view", "desc");
		$this->db->where('category', $category);
		if($tag!="null")
		{

		$this->db->like('tag', $tag);
		}

		$this->db->where('status', "hosted");
		$query=$this->db->get('product');
		return $query->result();
	}
	public function sortproduct_new($limit, $start,$category,$tag)
	{ 	
		$this->db->limit($limit, $start);
		$this->db->order_by("posted", "desc");
		$this->db->where('category', $category);
		if($tag!="null")
		{

		$this->db->like('tag', $tag);
		}

		$this->db->where('status', "hosted");
		$query=$this->db->get('product');
		return $query->result();
	}
    public function productfilter($limit, $start,$categoryid,$ocassion,$fabric,$pattern)
	{ 	
		$this->db->limit($limit, $start);
		$this->db->order_by("posted", "desc");
		$this->db->where('category', $categoryid);
		$this->db->where('status', "hosted");
		$query=$this->db->get('product');
		return $query->result();
	}
	/*order*/
		public function getorderadd($orderid)
	{ 	
		$this->db->where('order_id', $orderid);
		$query=$this->db->get('orderadd');
		return $query->result();
	}
	public function order_max()
        {
             $this->db->select_max('orderid','oid');
                $result = $this->db->get('itemorder')->row();  
                $oid1=$result->oid;
                $oid=$oid1+1;
                return $oid;
        }
	public function orderupdate($id,$txnid,$status,$orderid)
	{	
                $this->db->query('INSERT INTO itemorder (uid,productid,item,attributevalue,orderid)
                     SELECT uid,productid,item,attributevalue,'.$orderid.' from cart where uid='.$id.'');
                  
                 $dpo= date("Y-m-d H:i:s");
                 $data = array('status'=>$status,'txnid'=>$txnid,'dpo'=>$dpo);
                 $this->db->where('uid', $id);
                 $this->db->where('orderid', $orderid);
                 $update = $this->db->update('itemorder',$data);
                 $this->db->where('uid',$id);
                     return  $this->db->delete('cart'); 
	}
		public function orderupdate1($id,$txnid,$status,$orderid)
	{	
                 $this->db->query('INSERT INTO itemorder (uid,productid,item,category,attributevalue,orderid)
                     SELECT uid,productid,item,category,attributevalue,'.$orderid.' from cart where uid='.$id.'');
                  $this->db->query('UPDATE itemorder INNER JOIN attributevalue ON itemorder.attributevalue = attributevalue.attributevalue AND itemorder.category = attributevalue.category
SET itemorder.cost = attributevalue.cost
WHERE orderid='.$orderid.'');
                 $dpo= date("Y-m-d H:i:s");
                 $data = array('status'=>$status,'txnid'=>$txnid,'dpo'=>$dpo);
                 $this->db->where('uid', $id);
                 $this->db->where('orderid', $orderid);
                 $update = $this->db->update('itemorder',$data);
	}
	function orderdetails($data1)
	{
        return $this->db->insert('orderadd',$data1);
	}
	public function showorder($id)
	{	
		$this->db->order_by("orderid", "desc");
		$this->db->where('uid', $id);
		$this->db->where('status', "Success");
		$this->db->group_by('orderid');
		$query=$this->db->get('itemorder');
		return $query->result();
	}
    public function showorder_orderid($id)
	{	
		$this->db->order_by("orderid", "desc");
		$this->db->where('orderid', $id);
		$query=$this->db->get('itemorder');
		return $query->result();
	}
	public function checkUser($data = array()){
	     $this->db->where(array('oauth_provider'=>$data['oauth_provider'],'oauth_uid'=>$data['oauth_uid']));
        $prevQuery = $this->db->get('user');
        $prevCheck = $prevQuery->num_rows();
        
        if($prevCheck > 0){
            $prevResult = $prevQuery->row_array();
            $data['modified'] = date("Y-m-d H:i:s");
            $update = $this->db->update('user',$data,array('id'=>$prevResult['id']));
            $userID = $prevResult['id'];
        }else{
            $data['created'] = date("Y-m-d H:i:s");
            $data['modified'] = date("Y-m-d H:i:s");
            $insert = $this->db->insert('user',$data);
            $userID = $this->db->insert_id();
        }

        return $userID?$userID:FALSE;
    }
    	public function move_cart($id,$uid)
	{	       
                $this->db->query('INSERT INTO cart (uid,productid,attributevalue,item)
                     SELECT uid,productid,attributevalue,item from wishlist where id='.$id.'&& uid='.$uid.'');
                 $this->db->where('uid', $uid);
                $this->db->where('id', $id);
               return  $this->db->delete('wishlist'); 
	}
	function insert_msg($data)
    {
    	$data['sent'] = date("Y-m-d H:i:s");
		return $this->db->insert('message', $data);
	}
	function tailor($data)
    {
    	$data['sent'] = date("Y-m-d H:i:s");
		return $this->db->insert('tailor', $data);
	}
	function designer($data)
    {
    	$data['sent'] = date("Y-m-d H:i:s");
		return $this->db->insert('designer', $data);
	}
	function abandoned_cart($data)
    {
    	$data['odate'] = date("Y-m-d H:i:s");
		return $this->db->insert('abandoned_cart', $data);
	}

	public function showscategory($cat)
	{
		$this->db->where('category', $cat);
		$query=$this->db->get('scategory');
		return $query->result();
	}
    public function showblog()
	{
		$query=$this->db->get('blog');
		return $query->result();
	}
    public function showblogdetails($link)
	{
		$this->db->where('link', $link);
		$query=$this->db->get('blog');
		return $query->result();
	}
}?>