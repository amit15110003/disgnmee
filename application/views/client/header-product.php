<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="description" content="<?php if(!empty($Descr)){echo $Descr;} elseif(!empty($descr)){echo $descr;} ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta property="fb:app_id"          content=" " /> 
  <meta property="og:url"           content="<?php echo base_url(); ?><?php if(!empty($category)){ echo"product/details/"; echo $category; echo $title;}elseif(!empty($artist)){ echo"product/details/"; echo $artist;} ?>" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="<?php if(!empty($title)){echo $title;}elseif(!empty($artist)){echo $artist;} ?>" />
  <meta property="og:description"   content="<?php if(!empty($Descr)){echo $Descr;} elseif(!empty($descr)){echo $descr;} ?>" />
  <meta property="og:image"         content="<?php echo base_url(); ?><?php  if(!empty($picture)){echo"uploads/thumb/"; echo $picture;}else{echo"media/image/Hippogrifftypeteal.png";} ?>" />
  <meta property="og:image:url"         content="<?php echo base_url(); ?><?php  if(!empty($picture)){echo"uploads/thumb/"; echo $picture;}else{echo"media/image/Hippogrifftypeteal.png";} ?>" />
  
<meta property="og:image:type" content="image/jpeg" />
<meta property="og:image:width" content="620" />
<meta property="og:image:height" content="541" />
    <link rel="icon" href="<?php echo base_url(); ?>media/image/Hippogrifftypeteal.png">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php if(!empty($categoryval)){ echo $categoryval;}elseif(!empty($title)){echo $title;}elseif(!empty($artist)){echo $artist;}?>-THE HIPPOGRIFF</title>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo base_url();?>media/js/jquery.elevatezoom.js"></script>
    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>media/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>media/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>media/css/bootstrap-dropdownhover.css" rel="stylesheet">
    <link href="<?php echo base_url();?>media/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>media/css/style1.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>media/css/prism.css">
  <script src="<?php echo base_url();?>media/js/jquery.toc.js"></script>
  <script src="<?php echo base_url();?>media/js/prism.js"></script>
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
  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container" style="padding-right:15px;padding-left:8px;">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="padding-left: 10px;">
      <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" >
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <a class="visible-xs center-block"  href="<?php echo base_url(""); ?>"><img src="<?php echo base_url();?>media/image/Hippogrifftypeteal.png" class="img-responsive " style="margin-top:10px;"></a>
     <!-- <a href=""  class="navbar-toggle navbar-mobile pull-right" data-toggle="modal" data-target=".search">
        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
      </a>
      <?php if ($this->session->userdata('fname')){ ?>
          <a class=" dropdown-toggle dropdown navbar-toggle navbar-mobile pull-right" type="button" data-toggle="dropdown" data-hover="dropdown">
           <?php echo $result = substr($this->session->userdata('fname'), 0, 4); ?> <span class="glyphicon glyphicon-user" aria-hidden="true">  </span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url("profile"); ?>">Profile</a></li>
            <li><a href="<?php echo base_url("orders"); ?>" class="list-group-item"> Orders</a></li>
            <li><a href="<?php echo base_url("wishlist"); ?>" class="list-group-item"> Wishlist</a></li>
            <li><a href="<?php echo base_url("profile/address"); ?>" class="list-group-item">Addresses</a></li>
            <li><a href="<?php echo base_url("profile/account_details"); ?>" class="list-group-item">Account details</a></li>
            <li><a href="<?php echo base_url("home/logout"); ?>" class="list-group-item">Logout</a></li>
          </ul>
        <?php } else{?><a data-toggle="modal" data-target=".login"  class="navbar-toggle navbar-mobile pull-right"><span class="glyphicon glyphicon-user" aria-hidden="true"> </span></a>
        <?php }?>-->
      <a href="<?php echo base_url("cart"); ?>" class="navbar-toggle navbar-mobile pull-right hidden">
        <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span><span class="badge" id="cartcounter">
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
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" style="background-color:#fff!important;">
          <li class="visible-xs"><a href="<?php echo base_url(""); ?>">Home</a></li>
       <li class="dropdown" style="margin-left:6px;">
          <a class="dropdown-toggle button-top-category" type="button" data-toggle="dropdown" data-hover="dropdown" >
           SHOP BY CATEGORY
          </a>
          <ul class="dropdown-menu">
            <?php 
                $details=$this->user->showcategory();
                foreach ($details as $row ) {
                  $category=str_replace(' ', '-', $row->category);?>
            <li>
                <a href="<?php echo base_url("index.php/product/category/$category"); ?>"><?php echo $row->category;?></a>
            </li>
            <?php }?>
          </ul>
        </li>
       <li class="dropdown" style="margin-left:6px;">
          <a class="dropdown-toggle button-top-category" type="button" data-toggle="dropdown" data-hover="dropdown">
           SHOP BY ARTIST
          </a>
          <ul class="dropdown-menu multi-column columns-3">
                <div class="row">
                  <?php 
             $i=1;
                $details=$this->user->showartist();
                foreach ($details as $row ) {
                  $artist=str_replace(' ', '-', $row->artist);?>
            <?php if($i%8==1){?>
            <div class="col-xs-6 col-md-3">
               <ul class="multi-column-dropdown">
            <?php }?>
                 <li><a href="<?php echo base_url("index.php/product/artist/$artist"); ?>"><?php echo $row->artist;?></a></li>
            <?php if($i%8==0){?>    
              </ul>
              </div>
            <?php }?>
            <?php $i++;}?>
               </div>   
          </ul>
        </li>
      </ul>
      <div class="header-img" style="">
          <a href="<?php echo base_url(""); ?>"><img src="<?php echo base_url();?>media/image/Hippogrifftypeteal.png" class="img-responsive"></a>
      </div>
      <ul class="nav navbar-nav navbar-right">
          <li><a>
              <?php $attributes = array("name" => "search");
                      echo form_open("home/search_keyword", $attributes);?>
              <div class="form-inline" style="margin-top:-9px;">
               <div class = "input-group form-inline" style="border-radius:0px !important;background-color:transparent!important;">
               <input type = "text" class = "form-control" placeholder="Search" name="keyword" style="border-radius:0px !important;">
               
               <span class = "input-group-btn">
                  <button class = "btn btn-default" type = "submit" style="border-radius:0px !important;">
                     <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                  </button>
               </span>
               
            </div>
              </div>
                  <?php echo form_close(); ?></a>
             </li>
        <?php if ($this->session->userdata('fname')){ ?>
        <li class="dropdown">
          <a class=" dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown">
           <?php echo $result = substr($this->session->userdata('fname'), 0, 4); ?> <span class="glyphicon glyphicon-user" aria-hidden="true">  </span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url("index.php/profile"); ?>">Profile</a></li>
            <li><a href="<?php echo base_url("index.php/orders"); ?>" class="list-group-item"> Orders</a></li>
            <li><a href="<?php echo base_url("index.php/wishlist"); ?>" class="list-group-item"> Wishlist</a></li>
            <li><a href="<?php echo base_url("index.php/profile/address"); ?>" class="list-group-item">Address</a></li>
            <li><a href="<?php echo base_url("index.php/profile/account_details"); ?>" class="list-group-item">Account details</a></li>
            <li><a href="<?php echo base_url("index.php/home/logout"); ?>" class="list-group-item">Logout</a></li>
          </ul>
        </li>
        <?php } else{?>
        <li><a data-toggle="modal" data-target=".login"><span class="glyphicon glyphicon-user" aria-hidden="true"> </span></a></li>
        <?php }?>
        <li>
          <a href="<?php echo base_url("cart"); ?>">
              <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
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
    <div class="modal-content" style="border:none;">
      	<div class="col-md-8 col-md-offset-2 col-xs-12">
    		<div class="card">
    		<?php $attributes = array("name" => "loginform");
                echo form_open("login/login", $attributes);?>
    		  <div class="form-group">
    		    <label for="exampleInputEmail1">Email</label>
    		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
    		  </div>
    		  <div class="form-group">
    		    <label for="exampleInputPassword1">Password</label>
    		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
    		  </div>
    		  <button class="theme-btn col-md-12 col-xs-12"> LOGIN</button>
    		<?php echo form_close(); ?>	<br><br><br>
    		<h4 class=" "><b>Social Login</b></h4>
                <a href="<?php  
		            $loginURL= $this->google->loginURL();
    		 echo $loginURL;?>" class="btn col-md-6 col-xs-12" style="background-color: #e24825;color: #fff;border-radius:0px;">Google</a>
    		 <a href="<?php  $authUrl=  $this->facebook->login_url();
    		 echo $authUrl;?>" class="btn col-md-6 col-xs-12" style="background-color: #385499;color: #fff;border-radius:0px;">Facebook</a>
    		<br><br>
    		<h5 style="text-align: center;"><a href="<?php echo base_url();?>forget"  style="text-decoration:none;">LOST YOUR PASSWORD?</a></h5><hr>
    <h4>Or Create <a href="<?php echo base_url();?>signup" style="text-decoration:none;">New Account</a></h4>
    </div>
    </div>
    </div>
  </div>
</div>
<!--Notification--->
<?php if(!empty($this->session->flashdata('msg'))){?>
<div class="container-fluid" style="background-color:#f4f4f4;height:120px;display:block;position: absolute;margin-top:50px;width:100%;">
<div class="col-md-12 text-center" style="padding-top:30px;">
<h4>
<?php echo $this->session->flashdata('msg'); ?></h4></div>
</div>
<?php }?> 