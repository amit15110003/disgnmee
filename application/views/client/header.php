<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Expires" content="30" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>DesignMee</title>

     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo base_url();?>media/js/jquery.elevatezoom.js"></script>
    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>media/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>media/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>media/css/bootstrap-dropdownhover.css" rel="stylesheet">
    <link href="<?php echo base_url();?>media/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>media/css/prism.css">
  <script src="<?php echo base_url();?>media/js/jquery.toc.js"></script>
  <script src="<?php echo base_url();?>media/js/prism.js"></script>
  <script src="https://use.fontawesome.com/772998029d.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Raleway:300,500,800" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url();?>media/css/asRange.css">
  <script src="<?php echo base_url();?>media/js/jquery-asRange.js"></script>
<link rel="icon" href="images/favicon.html" type="image/x-icon">
<style type="text/css">
  
  .love{
   background-color: #fff;border:solid 1px #ccc;
  }
  .loveadd{
    font-size:30px;
  }
  .loveremove{
    color: #ea472e !important;font-size:30px;
  }
</style>
  </head>
  <body>
  <!--header-->
  <nav class="navbar navbar-default th-header navbar-fixed-top" style="border:none; height: 60px;">
  <div class="container-fluid  th-header-p" >
    <div class="navbar-header col-md-4">
      <span class="visible-xs pull-right" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        
      </div>
      <a class="navbar-brand " href="<?php echo base_url(""); ?>" ><img class="img-responsive" style="height: 30px;" src="<?php echo base_url();?>media/image/Hippogrifftypeteal.png"></a>

      <a href="<?php echo base_url("cart"); ?>" class="navbar-toggle navbar-mobile pull-right hidden">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i><i class="badge" id="cartcounter">
          <?php 
            if(!empty($this->session->userdata('uid')))
            {
                $detail1=$this->user->countproduct($this->session->userdata('uid'));
                    if(!empty($detail1))
                      { 
                        echo $detail1; 
                      }
                  else{
                    echo"0";
                    }
            }
            elseif(!empty($this->cart->contents()))
            {
              $i=0;
              $cart = $this->cart->contents();
              foreach($cart as $items)
              {
                $i++;
              }
               echo $i;
            }
            else{echo"0";} ?>
        </i>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1 col-md-4" style="background-color:#fff!important;">
      <ul class="nav navbar-nav hdr">
        <li class="dropdown"><a class="dropdown-toggle" data-hover="dropdown" id="dropdownMenu1" data-toggle="dropdown">Bespoke &nbsp; <i class="fa fa-angle-down" aria-hidden="true"></i></a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="<?php echo base_url(""); ?>index.php/home/tailor">Call a Tailor</a></li>
            <li><a href="<?php echo base_url(""); ?>index.php/home/designer">Call a Designer</a></li>
            <li><a href="">Live Chat</a></li>
          </ul>
        </li>
    <?php $category=$this->user->showcategory(); $i=4;
          foreach ($category as $var) { ?>
        <li class="dropdown"><a class="dropdown-toggle" data-hover="dropdown" id="dropdownMenu<?php echo $i; ?>" data-toggle="dropdown"><?php echo $var->category;?> &nbsp; <i class="fa fa-angle-down" aria-hidden="true"></i></a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu<?php echo $i; ?>">
            <p><?php echo $var->category;?><span class="th-bold">categories</span></p>
            <?php $subcategory=$this->user->showscategory($var->category);
              foreach ($subcategory as $row) {$category = str_replace(' ','-', $var->category);
                     $scategory = str_replace(' ','-',$row->name);?>
                <li><a href="<?php echo base_url();?>index.php/product/category/<?php echo $category;?>/<?php echo $scategory;?>"><?php echo $row->name; ?></a></li>
            <?php   }?>
          </ul>
        </li>
    <?php  $i++; }?>
        <li><a href="<?php echo base_url(""); ?>index.php/home/blog">Know Fashion</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right" style="padding-top: 10px;">
        <li class="dropdown"> <a class=" dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown"><i class="fa fa-search" aria-hidden="true"></i></a>
          
          <ul class="dropdown-menu">
            <li><a>
              <?php $attributes = array("name" => "search");
                      echo form_open("home/search_keyword", $attributes);?>
              <div class="" style="margin-top:-9px;">
               <div class="">
               <input type="text" class="th-btn-inv  th-form col-md-12" placeholder="Search" name="keyword">
               <button class = "btn th-btn col-md-12" type = "submit" style="border-radius:0px !important;">
                     Search
                  </button>
               </div>
              </div>
                  <?php echo form_close(); ?></a>
             </li>
           </ul>
         </li>
        <?php if ($this->session->userdata('fname')){ ?>
        <li class="dropdown">
          <a class=" dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown">
           <?php echo $result = substr($this->session->userdata('fname'), 0, 6); ?>
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url("index.php/profile"); ?>">Profile</a></li>
            <li><a href="<?php echo base_url("index.php/orders"); ?>" > Orders</a></li>
            <li><a href="<?php echo base_url("index.php/wishlist"); ?>"> Wishlist</a></li>
            <li><a href="<?php echo base_url("index.php/profile/address"); ?>">Address</a></li>
            <li><a href="<?php echo base_url("index.php/profile/account_details"); ?>">Account details</a></li>
            <li><a href="<?php echo base_url("index.php/home/logout"); ?>">Logout</a></li>
          </ul>
        </li>
        <?php } else{?>
        <li><a data-toggle="modal" data-target=".login"><i class="fa fa-user-circle" aria-hidden="true"></i></a></li>
        <?php }?>
        <li>
          <a href="<?php echo base_url();?>index.php/cart">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
              <span class="badge" id="cartcounter1">
              <?php 
            if(!empty($this->session->userdata('uid')))
            {
                $detail1=$this->user->countproduct($this->session->userdata('uid'));
                    if(!empty($detail1))
                      { 
                        echo $detail1; 
                      }
                  else{
                    echo"0";
                    }
            }
            elseif(!empty($this->cart->contents()))
            {
              $i=0;
              $cart = $this->cart->contents();
              foreach($cart as $items)
              {
                $i++;
              }
               echo $i;
            }
            else{echo"0";} ?>
              </span>
            </a>
          </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

  <!--endheader-->
<div class="modal fade search" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content text-center" style="padding:20px 10px 20px 10px;margin-top:40%;">
    <h3>Search</h3>
     <?php $attributes = array("name" => "search");
                      echo form_open("home/search_keyword", $attributes);?>
               <input type = "text" class = "theme-form" placeholder="Search" name="keyword" ><br>
                  <button class = "theme-btn" type = "submit">
                     Search
                  </button>
                  <?php echo form_close(); ?>
    </div>
  </div>
</div>

<div class="modal fade login" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-md" role="document" style="margin-top:10%;">
    <div class="modal-content" style="border:none;background-color: transparent !important;box-shadow: none;">
      	<div class="col-md-8 col-md-offset-2 col-xs-12" style="background-color: #fff !important;box-shadow: 0 5px 20px #ddd;padding: 50px 20px 50px 20px; ">
    		<div class="card">
    		<?php $attributes = array("name" => "loginform");
                echo form_open("login/login", $attributes);?>
    		  <div class="form-group">
    		    <label for="exampleInputEmail1">Email</label>
    		    <input type="email" class="th-btn-inv col-md-12 th-form" id="exampleInputEmail1" placeholder="Email" name="email">
    		  </div>
    		  <div class="form-group">
    		    <label for="exampleInputPassword1">Password</label>
    		    <input type="password" class="th-btn-inv col-md-12 th-form" id="exampleInputPassword1" placeholder="Password" name="password">
    		  </div>
    		  <button class="col-md-12 btn th-btn col-xs-12"> LOGIN</button>
    		<?php echo form_close(); ?>
    		<h4 class=" " style="padding-top: 20px;"><b>Social Login</b></h4>
                <a href="<?php  
		            $loginURL= $this->google->loginURL();
    		 echo $loginURL;?>" class="btn col-md-6 col-xs-12" style="background-color: #e24825;color: #fff;border-radius:0px;">Google</a>
    		 <a href="<?php  $authUrl=  $this->facebook->login_url();
    		 echo $authUrl;?>" class="btn col-md-6 col-xs-12" style="background-color: #385499;color: #fff;border-radius:0px;">Facebook</a>
    		 <br><br>
    		<h5 style="text-align: center;"><a href="<?php echo base_url();?>index.php/forget"  style="text-decoration:none;">LOST YOUR PASSWORD?</a></h5><hr>
    <h4>Or Create <a href="<?php echo base_url();?>index.php/signup" style="text-decoration:none;">New Account</a></h4>
    </div>
    </div>
    </div>
  </div>
</div>
<?php if(!empty($this->session->flashdata('msg'))){?>
<div class="container-fluid" style="background-color:#f4f4f4;height:120px;display:block;margin-top:50px;width:100%;z-index: 5000;">
<div class="col-md-12 text-center" style="padding-top:30px;">
<h4>
<?php echo $this->session->flashdata('msg'); ?></h4></div>
</div>
<?php }?>
    