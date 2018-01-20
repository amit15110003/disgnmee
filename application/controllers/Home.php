<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{	
		
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation','pagination','cart','facebook','google'));
		$this->load->database();
		$this->load->model('user');

	}

	public function index()
	{	
	    
		$this->load->view('client/header.php');
		$this->load->view('client/index');
		$this->load->view('client/footer');
	}
	public function about()
	{	
		$this->load->view('client/header');
		$this->load->view('client/about');
		$this->load->view('client/footer');
	}
	public function contact()
	{	
	      
        $this->form_validation->set_rules('name', 'Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('email', 'Email ID', 'trim|required');
        if ($this->form_validation->run() == FALSE)
        {	
            $this->load->view('client/header');
		    $this->load->view('client/contact');
		    $this->load->view('client/footer');
	    }
        else
		{
		    $data = array(
				'name' => $this->input->post('name'),
				'mob' => $this->input->post('mob'),
				'email' => $this->input->post('email'),
				'sub' => $this->input->post('sub'),
				'msg' => $this->input->post('msg')
			);
			
			if ($this->user->insert_msg($data))
			{
				$this->session->set_flashdata('msg','<div class="">Message Sent Successfully! </div>');
				redirect('home/contact');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="">Oops! Error.  Please try again later!!!</div>');
				redirect('home');
			}
		    
		}
	}
	public function terms_and_condition()
	{	
		$this->load->view('client/header');
		$this->load->view('client/terms');
		$this->load->view('client/footer');
	}
	public function privacy_policy()
	{	
		$this->load->view('client/header');
		$this->load->view('client/policy');
		$this->load->view('client/footer');
	}
	public function faqs()
	{	
		$this->load->view('client/header');
		$this->load->view('client/faq');
		$this->load->view('client/footer');
	}
	function search_keyword()
	{
		if (empty($this->input->post('keyword')))
        {
			redirect($_SERVER['HTTP_REFERER']);
		}else
		{

    	$keyword = $this->input->post('keyword');
		$config = array();
        $config["base_url"] = base_url() . "index.php/home/search_keyword";
        $config["total_rows"] = $this->user->countproduct_search($keyword);
        $config["per_page"] = 20;
        $config["uri_segment"] = 3;
    	$this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $details['query'] = $this->user->search($config["per_page"], $page,$keyword);
        $details["links"] = $this->pagination->create_links();
    	$details['category']=$this->user->showcategory();
		$this->load->view('client/header',$details);
    	$this->load->view('client/search',$details);
    	$this->load->view('client/footer',$details);
    	}
	}
	function logout()
	{
		// destroy session
        $data = array('login' => '', 'uname' => '', 'uid' => '');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
		redirect($_SERVER['HTTP_REFERER']);
	}
	

}
