<?php
class admin extends CI_Controller
{
	public function __construct()
	{	
		
		parent::__construct();
		$this->load->helper(array('form','url', 'html','text','typography','date'));
		$this->load->library(array('session', 'form_validation','pagination'));
		$this->load->database();
		$this->load->model('user');
		if(!$this->session->userdata('uid')){
                redirect('login', 'refresh');
         }

	}
	
	public function index()
	{
        $this->load->view('header');
		$this->load->view('dashbord');
		$this->load->view('footer');
	}
    public function abandoned_cart()
	{	$details['query'] = $this->user->get_abandoned_cart();
        $this->load->view('header');
		$this->load->view('abandoned_cart',$details);
		$this->load->view('footer');
	}     
	public function client()
	{
		$config = array();
        $config["base_url"] = base_url() . "index.php/admin/client";
        $config["total_rows"] = $this->user->countclient();
        $config["per_page"] = 50;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $details['query'] = $this->user->get_client($config["per_page"], $page);
        $details["links"] = $this->pagination->create_links();
        $this->load->view('header');
		$this->load->view('viewuser',$details);
		$this->load->view('footer');
	}

	public function subscriber()
	{
		$config = array();
        $config["base_url"] = base_url() . "index.php/admin/subscriber";
        $config["total_rows"] = $this->user->countsubscriber();
        $config["per_page"] = 50;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $details['query'] = $this->user->get_subscriber($config["per_page"], $page);
        $details["links"] = $this->pagination->create_links();
        $this->load->view('header');
		$this->load->view('viewsubscriber',$details);
		$this->load->view('footer');
	}

	public function order()
	{
		$details['query'] = $this->user->get_order();
        
		$this->load->view('header');
		$this->load->view('vieworder',$details);
		$this->load->view('footer');
	}
	public function orderview($id)
	{	
		$details['query'] = $this->user->get_orderid($id);
        $details['id'] = $id;
		$this->load->view('header');
		$this->load->view('orderdetails',$details);
		$this->load->view('footer');
	}

	public function orderprint($id)
	{	
		
		$details['query'] = $this->user->get_orderid($id);
        $details['id'] = $id;
        $this->load->library('Pdf');
		$this->load->view('invoice',$details);
	}
	public function orderprinthtml($id)
	{	
		
		$details['query'] = $this->user->get_orderid($id);
        $details['id'] = $id;
        $this->load->library('Pdf');
		$this->load->view('11',$details);
	}
	 public function orderprocessing($id)
	{	
		$status='Processing';
	    $result=$this->user->order_status($id,$status);
	     $details2= $this->user->getorderadd($id);
	    
	    
                        
                                $to = $details2[0]->billing_email;
                        
                         
                                $from = "info@thehippogriff.com";
                                $url = "thehippogriff.com";      $body  =  "
                                <div style='border: 1px solid #ccc;
    padding: 10px;
    box-shadow: 2px 2px #ccc;padding:5%;width:60%;'><h1 style='color:#14ad8f;text-align:center;'>The Hippogriff</h1>
    <h4 style='text-align:center;'>THANK YOU FOR SHOPPING WITH THE HIPPOGRIFF</h4>
    <hr>
<h3>Order-id:$id</h3>
<h4>We are currently processing your THE HIPPOGRIFF order with the reference $id.</h4>
</div>
                                 <br>
                                hi : $to;
                                Here is your Link :  <br><br>
                                
                                Sincerely,<br>
                                
                        
                                info@thehippogriff.com";
                        
                                $from = "info@thehippogriff.com";
                        
                                $subject = "ORDER PROCESSING";
                        
                                $headers1 = "From: $from\n";
                        
                                $headers1 .= "Content-type: text/html;charset=iso-8859-1\r\n";
                        
                                $headers1 .= "X-Priority: 1\r\n";
                        
                                $headers1 .= "X-MSMail-Priority: High\r\n";
                        
                                $headers1 .= "X-Mailer: Just My Server\r\n";
                        
                                $sentmail = mail ( $to, $subject, $body, $headers1 );
	    redirect($_SERVER['HTTP_REFERER']);
	}
    public function orderproceed($id)
	{	
		$status='Dispatched';
	    $result=$this->user->order_status($id,$status);
	     $details2= $this->user->getorderadd($id);
	     $name=$details2[0]->delivery_name;
	     $del=$details2[0]->delivery_address;
	     $city=$details2[0]->delivery_city;
	     $state=$details2[0]->delivery_state;
	     $zip=$details2[0]->delivery_zip;
	     $tel=$details2[0]->delivery_tel;
	     $to = $details2[0]->billing_email;
         $from = "info@thehippogriff.com";
         $url = "thehippogriff.com";      $body  =  "
         <div style='border: 1px solid #ccc;
    box-shadow: 2px 2px #ccc;padding:5%;width:60%;'><h1 style='color:#14ad8f;text-align:center;'>The Hippogriff</h1>
    <h4 style='text-align:center;'>THANK YOU FOR SHOPPING WITH THE HIPPOGRIFF</h4>
    <hr>
<h3>Order-id:$id</h3>
<h4>Hi $name Your order with the reference $id has been Dispatched.</h4>
<h4>Address: $del,$city<br> $state,Pin:$zip<br>$tel</h4>
</div>
                                 <br>
                                hi : $to;
                                Here is your Link :  <br><br>
                                
                                Sincerely,<br>
                                
                        
                                info@thehippogriff.com";
                        
                                $from = "info@thehippogriff.com";
                        
                                $subject = "ORDER DISPATCHED";
                        
                                $headers1 = "From: $from\n";
                        
                                $headers1 .= "Content-type: text/html;charset=iso-8859-1\r\n";
                        
                                $headers1 .= "X-Priority: 1\r\n";
                        
                                $headers1 .= "X-MSMail-Priority: High\r\n";
                        
                                $headers1 .= "X-Mailer: Just My Server\r\n";
                        
                                $sentmail = mail ( $to, $subject, $body, $headers1 );
	    redirect($_SERVER['HTTP_REFERER']);
	}
	public function orderdelivered($id)
	{	
		$status='Delivered';
	    $result=$this->user->order_status($id,$status);
	    redirect($_SERVER['HTTP_REFERER']);
	}
	public function orderreminder($id)
	{	
		$status='Reminder Sent';
	    $result=$this->user->order_status($id,$status);
	    redirect($_SERVER['HTTP_REFERER']);
	}
	   public function category()
    {   if($this->input->post('userSubmit'))
        {  
            $data = array(
                'category' => $this->input->post('category'),
                'descr' => $this->input->post('descr')
            );
        if ($this->user->insert_category($data))
            {
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
                redirect('admin/category');
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
                redirect('admin/category');
            }
        }else{
            $details['query']=$this->user->showcategory();
            $this->load->view('header');
            $this->load->view('category',$details);
            $this->load->view('footer');    
        }

    }

    public function Deletecategory($id)
    {
            
        $details['query']=$this->user->showcategory();
            $this->load->view('header');
        $this->load->view('category',$details);
        $this->load->view('footer');
      
      echo "<script>
     x = confirm ('You want to proceed deleting?')";
     
      $r=$this->user->deletecategory($id);
      if($r){
      echo "Successfully Deleted Data";
      }
      else {
          echo "Can Not Delete Data";
      }
      
       
      
      redirect('admin/category');
     
    }

    public function scategory()
    {   $this->form_validation->set_rules('name', 'name', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $details['query']=$this->user->showcategory();
            $details['query1']=$this->user->showscategory();
            $this->load->view('header');
        $this->load->view('scategory',$details);
        $this->load->view('footer');
        }
        else
        {
            
            $name=$_POST['name'];
            $descr=$_POST['descr'];

            $categorys = $_POST['category'];


                        
            
            $result=$this->user->insert_scategory( $name,$descr,$categorys);
        if ($result)
            {
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
                redirect('admin/scategory');
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
                redirect('admin/scategory');
            }
        }
    
        
    }
    public function Deletescategory($id)
    {
            
        $details['query']=$this->user->showscategory();
            $this->load->view('header');
        $this->load->view('scategory',$details);
        $this->load->view('footer');
      
      echo "<script>
     x = confirm ('You want to proceed deleting?')";
     
      $r=$this->user->deletescategory($id);
      if($r){
      echo "Successfully Deleted Data";
      }
      else {
          echo "Can Not Delete Data";
      }
      
       
      
      redirect('admin/scategory');
     
    }
	public function product()
	{	
		$this->form_validation->set_rules('title', 'title', 'required');
		   
		if ($this->form_validation->run() == FALSE)
        {   
        	$details['query2']=$this->user->showproduct();
        	$details['query4']=$this->user->showtype();
     		$this->load->view('header');
		$this->load->view('product',$details);
		$this->load->view('footer');

        }
		else
		{
			if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = '../uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = time()."product";
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                     $this->gallery_path = realpath(APPPATH . '../../uploads/');//fetching path
                     $config1 = array(
                          'source_image' => $uploadData['full_path'], //get original image
                          'new_image' => $this->gallery_path.'/thumb/', //save as new image //need to create thumbs first
                          'maintain_ratio' => TRUE,
                          'width' => 600
                           
                        );
                        $this->load->library('image_lib', $config1); //load library
                        $this->image_lib->resize(); //generating thumb

                    $picture = $uploadData['file_name'];
                }
                else{
                    $picture = '';
            }
            }else{
                $picture = '';
            }
			$data = array(
				
				'title' => $this->input->post('title'),
				'descr' =>ascii_to_entities($this->input->post('descr')) ,
				'category' => $this->input->post('category'),
				'type' => $this->input->post('type'),
				'price' => $this->input->post('price'),
				'color' => $this->input->post('color'),
				'status' => "pending",
				'picture' => $picture
			);
		if($this->user->insert_product($data))
		{
			$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('admin/product');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('admin/product');
			}
	}
}
public function viewproduct()
	{	
		if (empty($this->input->post('keyword')))
        {$config = array();
        $config["base_url"] = base_url() . "index.php/admin/viewproduct";
        $config["total_rows"] = $this->user->countproduct();
        $config["per_page"] = 30;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $details['query'] = $this->user->showproductall($config["per_page"], $page);
        $details["links"] = $this->pagination->create_links();
     		$this->load->view('header');
		$this->load->view('viewproduct',$details);
		$this->load->view('footer');
		}else
		{

    	$keyword = $this->input->post('keyword');
		$config = array();
        $config["base_url"] = base_url() . "index.php/admin/viewproduct";
        $config["total_rows"] = $this->user->countproduct();
        $config["per_page"] = 30;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $details['query'] = $this->user->showproduct_search($config["per_page"], $page,$keyword);
        $details["links"] = $this->pagination->create_links();
     		$this->load->view('header');
		$this->load->view('viewproduct',$details);
		$this->load->view('footer');	
    	}

	}

public function updateproduct()
	{	
		$this->form_validation->set_rules('title', 'title', 'required');
		   
		if ($this->form_validation->run() == FALSE)
        {redirect($_SERVER['HTTP_REFERER']);

        }
		else
		{  if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = '../uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = "product";
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                     $this->gallery_path = realpath(APPPATH . '../../uploads/');//fetching path
                     $config1 = array(
                          'source_image' => $uploadData['full_path'], //get original image
                          'new_image' => $this->gallery_path.'/thumb/', //save as new image //need to create thumbs first
                          'maintain_ratio' => TRUE,
                          'width' => 600
                           
                        );
                        $this->load->library('image_lib', $config1); //load library
                        $this->image_lib->resize(); //generating thumb

                    $picture = $uploadData['file_name'];
                }
                else{
                    $picture = '';
            }
            }else{
                $picture = '';
            }
            
			$id = $this->input->post('productid');
                        $delpicture= $this->input->post('delpicture');
                        if(!empty($picture))
                        {
                        unlink("../uploads/".$delpicture);
                        unlink("../uploads/thumb/".$delpicture);
                         }
                       else
                         {
                         $picture=$delpicture;
                          }
                        
			$data = array(
				
				'title' => $this->input->post('title'),
				'descr' =>ascii_to_entities($this->input->post('descr')) ,
				'category' => $this->input->post('category'),
				'type' => $this->input->post('type'),
				'price' => $this->input->post('price'),
				'color' => $this->input->post('color'),
				'status' => "pending",
				'picture' => $picture
			);
		if($this->user->update_product($data,$id))
		{
			$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
	}
}
	public function productedit($pid)
	{	$this->form_validation->set_rules('id', 'id', 'required');
		if ($this->form_validation->run() == FALSE)
        {		
        		$data['query4']=$this->user->showtype();
        	    $details=$this->user->productedit($pid);
        	    	$data['productid'] = $details[0]->id;
        			$data['title'] = $details[0]->title;
        			$data['Descr'] = $details[0]->Descr;
        			$data['category'] = $details[0]->category;
        			$data['type'] = $details[0]->type;
					$data['price'] = $details[0]->price;
					$data['color'] = $details[0]->color;
					$data['picture'] = $details[0]->picture;
					$data['status'] = $details[0]->status;
        	    $data['query2']=$this->user->showproductimage($pid);
     			$this->load->view('header');
				$this->load->view('productedit',$data);
				$this->load->view('footer');
				$sess_data = array('pid' => $details[0]->id);

				$this->session->set_userdata($sess_data);

        }
		else
		{
		if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = '../uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = time().'category';
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                     $this->gallery_path = realpath(APPPATH . '../../uploads');//fetching path
                     $config1 = array(
                          'source_image' => $uploadData['full_path'], //get original image
                          'new_image' => $this->gallery_path.'/thumb/', //save as new image //need to create thumbs first
                          'maintain_ratio' => TRUE,
                          'width' => 600
                           
                        );
                        $this->load->library('image_lib', $config1); //load library
                        $this->image_lib->resize(); //generating thumb

                    $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }
            }else{
                $picture = '';
            }
            
			$data = array(
				'productid'=>$this->input->post('id'),
				'img' => $picture
			);
		if($this->user->insert_productimage($data))
		{
			$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				$pid=$this->session->userdata('pid');
				redirect('admin/productedit/'. $pid);
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				$pid=$this->session->userdata('pid');
				redirect('admin/productedit/'. $pid);
			}
		} 
	
		
	}
	public function status($id)
	{
	
		$status='hosted';
	  $result=$this->user->product_status($id,$status);
	 redirect($_SERVER['HTTP_REFERER']);

	   
	}
	public function status1($id)
	{
	
		$status='pending';
	  $result=$this->user->product_status1($id,$status);
	 redirect($_SERVER['HTTP_REFERER']);

	   
	}
	public function type()
	{	$this->form_validation->set_rules('color', 'color', 'required');
		if ($this->form_validation->run() == FALSE)
        {
        	$details['query']=$this->user->showtype();
     		$this->load->view('header');
		$this->load->view('type',$details);
		$this->load->view('footer');
        }
		else
		{
			$data = array(
				'color' => $this->input->post('color'),
				'colorcode' => $this->input->post('code')
			);
		if ($this->user->insert_type($data))
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('admin/type');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('admin/type');
			}
		}
	
		
	}
	public function Deletetype($id)
	{
			
		$details['query']=$this->user->showtype();
     		$this->load->view('header');
		$this->load->view('type',$details);
		$this->load->view('footer');
	  
	  echo "<script>
	 x = confirm ('You want to proceed deleting?')";
	 
	  $r=$this->user->deletetype($id);
	  if($r){
	  echo "Successfully Deleted Data";
	  }
	  else {
		  echo "Can Not Delete Data";
	  }
	  
	   
	  
	  redirect('admin/type');
	 
	}

	public function slider()
	{	if($this->input->post('userSubmit'))
		{
                if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = '../uploads/slider/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['file_name'] = 'slider';
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                     $this->gallery_path = realpath(APPPATH . '../../uploads');//fetching path
                     $config1 = array(
                          'source_image' => $uploadData['full_path'], //get original image
                          'new_image' => $this->gallery_path.'/slider/', //save as new image //need to create thumbs first
                          'maintain_ratio' => TRUE,
                          'width' =>1024,
                          'height' =>720
                           
                        );
                        $this->load->library('image_lib', $config1); //load library
                        $this->image_lib->resize(); //generating thumb

                    $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }
            }else{
                $picture = '';
            }
            
			$data = array(
				'color' => $this->input->post('color'),
				'h1' => $this->input->post('h1'),
				'h2' => $this->input->post('h2'),
				'address' => $this->input->post('address'),
				'picture' => $picture
			);
		if ($this->user->insert_slider($data))
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('admin/slider');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('admin/slider');
			}
		}else{
        	$details['query']=$this->user->showslider();
     		$this->load->view('header');
			$this->load->view('slider',$details);
			$this->load->view('footer');	
		}

	}
	public function Deleteslider($id)
	{
			
		$details['query']=$this->user->showslider();
     		$this->load->view('header');
		$this->load->view('slider',$details);
		$this->load->view('footer');
	  
	  echo "<script>
	 x = confirm ('You want to proceed deleting?')";
	 
	  $r=$this->user->deleteslider($id);
	  if($r){
	  echo "Successfully Deleted Data";
	  }
	  else {
		  echo "Can Not Delete Data";
	  }
	  
	   
	  
	  redirect('admin/slider');
	 
	}
	 
		
}