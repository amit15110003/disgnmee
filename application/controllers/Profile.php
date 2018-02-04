<?php
class profile extends CI_Controller
{
	public function __construct()
	{	
		
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation','cart','facebook','google'));
		$this->load->database();
		$this->load->model('user');
		if(!$this->session->userdata('uid')){
                redirect('login', 'refresh');
         }

	}
	public function index()
	{
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		
		if ($this->form_validation->run() == FALSE)
        {
        	$details = $this->user->get_user_by_id($this->session->userdata('uid'));
        	$details1= $this->user->get_delivery_by_id($this->session->userdata('uid'));
        	$data['category']=$this->user->showcategory();
        	$data['contact'] = $details[0]->contact;
        	$data['fname'] = $details[0]->fname;
        	$data['email'] = $details[0]->email;
        	$data['lname'] = $details[0]->lname;
        	$data['address'] = $details[0]->address;
        	if(!empty($details1))
        	{
        	$data['addr'] = $details1[0]->addr;
        	$data['state'] = $details1[0]->state;
        	$data['town'] = $details1[0]->town;
        	$data['country'] = $details1[0]->country;
        	$data['pin'] = $details1[0]->pin;
        	}
        	else{ 
        	$data['addr'] = "";
        	$data['state'] = "";
        	$data['town'] = "";
        	$data['country'] ="";
        	$data['pin'] = "";
        	}
        	$this->load->view('client/header',$data);
			$this->load->view('client/dashboard',$data);
			$this->load->view('client/footer',$data);
        }
		else
		{
			$id=$this->session->userdata('uid');
		    $fname=$_POST['fname'];
		    $lname=$_POST['lname'];
		    $contact=$_POST['contact'];
			$result=$this->user->update($id, $fname, $lname, $contact);

		if ($result)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('profile/index');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('profile/index');
			}
		}
	}

	 public function love()
	{
	$uid=$this->session->userdata('uid');
	$postid=$this->input->post('id');
	$checklove = $this->db->query('select * from love 
		                            where productid="'.$postid.'" 
		                            and uid = "'.$uid.'"');
	$resultcheckcart = $checklove->num_rows();


	$details=$this->user->get_product_by_id($postid);
	if($resultcheckcart == '0' ){
	$data=array('productid'=>$postid,'uid'=>$uid);
	$this->db->insert('love',$data);
		$love=$details[0]->love+1;
		$this->user->update_love($postid,$love);
	}
	else{
		$this->db->delete('love', array('productid'=>$postid,
										  'uid'=>$uid));
		$love=$details[0]->love-1;
		$this->user->update_love($postid,$love);
		}

	}
	public function account_details()
	{
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		
		if ($this->form_validation->run() == FALSE)
        {
        	$details = $this->user->get_user_by_id($this->session->userdata('uid'));
        	$data['contact'] = $details[0]->contact;
        	$data['fname'] = $details[0]->fname;
        	$data['email'] = $details[0]->email;
        	$data['lname'] = $details[0]->lname;
        	$this->load->view('client/header',$data);
			$this->load->view('client/profile',$data);
			$this->load->view('client/footer');
        }
		else
		{
			$id=$this->session->userdata('uid');
		    $fname=$_POST['fname'];
		    $lname=$_POST['lname'];
		    $contact=$_POST['contact'];
			$result=$this->user->update($id, $fname, $lname, $contact);

		if ($result)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('profile/account_details');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('profile/index');
			}
		}
	}


	public function password()
	{	
		$this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
		if ($this->form_validation->run() == FALSE)
        {
        	redirect('profile');
        }
		else
		{
			$id=$this->session->userdata('uid');
		    $password=$_POST['password'];
			$result=$this->user->updatepass($id, $password);

		if ($result)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('profile');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('profile');
			}
		}
	}
	 public function deletepost()
    {
    	$uid=$this->session->userdata('uid');
    	$id=$this->input->post('postid');
		$this->db->delete('question', array('id'=>$id,
                                          'uid'=>$uid));
		$this->db->delete('rply', array('qid'=>$id));
    }

   

	public function review()
    {
    	$data = array(
				'uid' => $this->session->userdata('uid'),
				'uname' => $this->input->post('uname'),
				'productid' => $this->input->post('productid'),
				'review' => $this->input->post('review'));

		$this->db->insert('review',$data);
		$productid=$_POST['productid'];
		$details=$this->user->get_product_by_id($productid);
		$review=$details[0]->review+1;
		$this->user->update_review($productid,$review);
		redirect($_SERVER['HTTP_REFERER']);
    }

    public function remove_wish()
    {
    	$uid=$this->session->userdata('uid');
    	$id=$this->input->post('id');
		$this->db->delete('wishlist', array('productid'=>$id,
                                          'uid'=>$uid));
    }
    
    public function address()
    {
    	$this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		
		if ($this->form_validation->run() == FALSE)
        {
			$details['query']=$this->user->deliveryadd($this->session->userdata('uid'));
        	$this->load->view('client/header');
			$this->load->view('client/address',$details);
			$this->load->view('client/footer');
        }

    }
	public function address1($id)
    {		$uid =$this->session->userdata('uid');
			$data = array(
				'fname' => $this->input->post('fname'),
				'lname' => $this->input->post('lname'),
				'mob' =>  $this->input->post('mob'),
				'mail' =>  $this->input->post('mail'),
				'country' => $this->input->post('country'),
				'addr' => $this->input->post('addr'),
				'state' => $this->input->post('state'),
				'town' => $this->input->post('town'),
				'pin' =>  $this->input->post('pin'));
				$result=$this->user->insert_delivery($data,$uid,$id);
		if ($result)
			{
				$this->session->set_flashdata('msg','<div> Successfully Updated</div>');
				redirect('profile/address');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div>Oops! Error.  Something Went Wrong</div>');
				redirect('profile/address');
			}
		
    }
    public function shipping()
    {
    	$this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		
		if ($this->form_validation->run() == FALSE)
        {
        	redirect('profile/address');
        }
		else
		{	$uid =$this->session->userdata('uid');
			$data = array(
				'uid'=>$uid,
				'fname' => $this->input->post('fname'),
				'lname' => $this->input->post('lname'),
				'mob' =>  $this->input->post('mob'),
				'mail' =>  $this->input->post('mail'),
				'country' => $this->input->post('country'),
				'addr' => $this->input->post('addr'),
				'state' => $this->input->post('state'),
				'town' => $this->input->post('town'),
				'pin' =>  $this->input->post('pin')
			    );
				$result1=$this->user->insert_shipping($data);
		if ($result1)
			{
				$this->session->set_flashdata('msg','<div> Successfully Updated</div>');
				redirect('profile/address');
			}
			else
			{
				$this->session->set_flashdata('msg','<div>Oops! Error.  Something Went Wrong</div>');
				redirect('profile/address');
			}
		}
    }

    
	 public function deleteadd()
	{
	$uid=$this->session->userdata('uid');
	$postid=$this->input->post('id');
	$this->db->delete('delivery', array('id'=>$postid,
										  'uid'=>$uid));
	}
	
		
}