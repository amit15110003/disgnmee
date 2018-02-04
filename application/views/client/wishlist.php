<div class="container-fluid" style="padding:10% 5%;">
    <div class="col-md-12">
        <ol class="breadcrumb">
                  <li><a class="hitem" href="#">User Profile</a></li>
        </ol>
    </div>  
    <div class="col-md-2 mini-menu">
        <ul><a href="<?php echo base_url("index.php/profile"); ?>" class="hitem" >My Account</a><br><br>
            <li><a class="cont" href="<?php echo base_url("index.php/orders"); ?>"> Orders</a></li>
            <li><a class="cont" style="color: black;" href="<?php echo base_url("index.php/wishlist"); ?>"> Wishlist</a></li>
            <li><a class="cont" href="<?php echo base_url("index.php/profile/address"); ?>"">Address</a></li>
            <li><a class="cont" href="<?php echo base_url("index.php/profile/account_details"); ?>">Account details</a></li>
            <li><a class="cont" href="<?php echo base_url("index.php/home/logout"); ?>">Logout</a></li>
        </ul>
    </div>
    <div class="col-md-9 col-md-offset-1">
           <?php if(!empty($query)){ foreach ($query as $row ) {
              $details=$this->user->get_product_by_id($row->productid);
             ?>
        <div class="row" style="margin-bottom: 15px;">
            <div class="col-md-12 col-xs-12" style="background-color: #f9f9f9;padding: 15px;" id="cart_<?php echo $row->id;?>">
                <div class="col-md-2 cover-img" style="background-image: url('<?php echo base_url();?>uploads/<?php echo $details[0]->picture;?>'); height: 180px;background-position: center;background-size: cover; ">
                </div>
                <div class="col-md-4 col-xs-12">
                  <p  class="text-center">
                    <span><?php  echo $details[0]->title;?></span>
                    <br>
                    <span class="rate">Rs <?php  echo $details[0]->price;?></span></p>
                  <div class="col-md-12 text-center">
                    <p>Size: <?php echo $row->attributevalue; ?></p>
                  </div>
                </div>
                <div class="col-md-4" >
                    
                    <p>Hem: <?php echo $row->hem; ?></p>
                    <p>Cuff: <?php echo $row->cuff; ?></p>
                    <p>Collar: <?php echo $row->collar; ?></p>
                    <p>Sleeve: <?php echo $row->sleeve; ?></p>
                    <p>Placket: <?php echo $row->placket; ?></p>
                </div>
                <div class="col-md-2 col-xs-12 text-center">
                    <button class="th-btn-inv col-xs-12 col-md-12 cbtn " onclick="javascript:move_cart(<?php echo $row->id;?>);">Move To Cart</button><br><br><br><br>
                    <button class="th-btn-inv col-xs-12 col-md-12 cbtn " onclick="javascript:remove_wish(<?php echo $row->id;?>);">Remove</button>
                </div>
            </div>
          </div>
             <?php }}?>
  </div>
</div>