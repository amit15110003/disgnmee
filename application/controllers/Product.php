<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url', 'html','text','typography','date'));
		$this->load->library(array('session', 'form_validation','pagination','cart','facebook','google'));
		$this->load->database();
		$this->load->model('user');
	}

	public function index()
	{	
	    $this->load->view('client/header');
		$this->load->view('client/footer');
	}

	public function category($category,$scategory)
	{	
        
		$category1 = str_replace('-',' ', $category);
		$scategory1 = str_replace('-',' ', $scategory);
		$data=$this->user->get_scategory_id($category1,$scategory1);
		$id=$data[0]->id;
		$config = array();
        $config["base_url"] = base_url() . "index.php/product/category/$id";
        $config["total_rows"] = $this->user->countproduct_category($id);
        $config["per_page"] = 32;
        $config["uri_segment"] = 4;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $details['query'] = $this->user->showproduct_category($config["per_page"],$page,$id);
        $details["links"] = $this->pagination->create_links();
		$details['categoryval']=$category1;
		$details['scategoryval']=$scategory1;
		$details['scategoryid']=$id;
		$this->load->view('client/header',$details);
		$this->load->view('client/category',$details);
		$this->load->view('client/footer');
	}

	public function details($category,$title)
	{	
		$category = str_replace('-', ' ', $category);
		$title = str_replace('-', ' ', $title);
		$details=$this->user->get_product_id($category,$title);
		$data['query']=$this->user->get_image_id($details[0]->id);
		$data['query1']=$this->user->get_review_id($details[0]->id);
		$data['query2']=$this->user->showproduct_mostview_cat($category);
			$data['id'] = $details[0]->id;
			$data['picture'] = $details[0]->picture;
			$data['title'] = $details[0]->title;
        	$data['Descr'] = $details[0]->Descr;
        	$data['category'] = $category;
        	$data['price'] = $details[0]->price;
        	$data['color'] = $details[0]->color;
        	$data['review'] = $details[0]->review;
        	$data['view'] = $details[0]->view;
        	$view=$data['view']+1;
         
         $details1=$this->user->showattribute1($data['id']);
                if(!empty($details1)){
                    $data['hem'] = $details1[0]->hem;
                    $data['cuff'] = $details1[0]->cuff;
                    $data['collar'] = $details1[0]->collar;
                    $data['sleeve'] = $details1[0]->sleeve;
                    $data['placket'] = $details1[0]->placket;
                }
                else
                {
                    $data['hem'] ="";
                    $data['cuff'] = "";
                    $data['collar'] ="";
                    $data['sleeve'] = "";
                    $data['placket'] = "";
                }
		$this->user->updateview($details[0]->id,$view);
		$this->load->view('client/header',$data);
		$this->load->view('client/product',$data);
		$this->load->view('client/footer');
	}

	 function viewsort(){

        $keywords = $this->input->post('keywords');
        $keywords1 = $this->input->post('keywords1');
        $categoryid = $this->input->post('categoryid');
        $category1 = str_replace(' ','-', $keywords);
		$scategory1 = str_replace(' ','-', $keywords1);
        $ocassion = $this->input->post('ocassion');
        $fabric = $this->input->post('fabric');
        $pattern = $this->input->post('pattern');
        $config = array();
        $config["base_url"] = base_url() . "index.php/product/category/$category1/$scategory1";
        $config["total_rows"] = $this->user->countproduct_sort($categoryid,$ocassion,$fabric,$pattern);
        $config["per_page"] = 32;
        $config["uri_segment"] = 4;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		/*if($sortBy=="popular")
		{
			$details['query']=$this->user->sortproduct_popular($config["per_page"],$page,$category1,$tag);
		}
		else if($sortBy=="new")
		{
			$details['query']=$this->user->sortproduct_new($config["per_page"],$page,$category1,$tag);
		}
		else if($sortBy=="default")
		{
			$details['query']=$this->user->sortproduct($config["per_page"],$page,$category1,$tag);
		}*/
		$details['query']=$this->user->productfilter($config["per_page"],$page,$categoryid,$ocassion,$fabric,$pattern);
        $details["links"] = $this->pagination->create_links();
		$details['categoryval']=$category1;
		$this->load->view('client/category1',$details);
    }


   
	
	public function login()
    {
		// get form input
		$email = $this->input->post("email");
        $password = $this->input->post("password");

		// form validation
		$this->form_validation->set_rules("email", "Email-ID", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|required");
		
		if ($this->form_validation->run() == FALSE)
        {
			// validation fail
			$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
		}
		else
		{
			// check for user credentials
			$uresult = $this->user->get_user($email,$password);
			if (count($uresult) > 0)
			{
				// set session
				$sess_data = array('login' => TRUE, 'fname' => $uresult[0]->fname,'lname' => $uresult[0]->lname, 'uid' => $uresult[0]->id,'email'=> $uresult[0]->email,'contact'=> $uresult[0]->contact);

				$this->session->set_userdata($sess_data);
				
				redirect('');
				
			}
			else
			{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Wrong Email-ID or Password!</div>');
				redirect('');
			}
		}
    }

    
	function logout()
	{
		// destroy session
        $data = array('login' => '', 'uname' => '', 'uid' => '');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
		redirect('');
	}
}
