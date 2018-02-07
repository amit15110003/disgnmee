<div class="container-fluid" style="padding:10% 5%;">
    <div class="col-md-12">
        <ol class="breadcrumb ">
                  <li><a class="hitem hidden-xs" href="#">User Profile</a></li>
        </ol>
    </div>  
    <div class="col-md-2 mini-menu hidden-xs">
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
                <div class="col-md-2" style="background-image: url('<?php echo base_url();?>uploads/<?php echo $details[0]->picture;?>');background-position: top;background-size: cover;height: 120px; ">
                </div>
                <div class="col-md-6 col-xs-12">
                  <p><?php  echo $details[0]->title;?></p>
                  <p style="font-size: 14px;"><span class="rate" style="color:#000;padding-right: 10px;"><b>Rs <?php  echo $details[0]->price;?></b></span><sapn>Size: <?php echo $row->attributevalue; ?></sapn></p>
                  <p style="font-size: 14px;padding-left: 0px;padding-right: 0px;" class="col-md-12">Hem: <?php echo $row->hem; ?>, Cuff: <?php echo $row->cuff; ?>, Collar: <?php echo $row->collar; ?>, Sleeve: <?php echo $row->sleeve; ?>, Placket: <?php echo $row->placket; ?></p>
                </div>
                <div class="col-md-2 col-xs-12 th-pb">
                    <button class="th-btn-inv-sm col-xs-12 col-md-12 cbtn " onclick="javascript:move_cart(<?php echo $row->id;?>);">Move To Cart</button>
                </div>
                <div class="col-md-2 col-xs-12 th-pb">
                    <button class="th-btn-inv-sm col-xs-12 col-md-12 cbtn " onclick="javascript:remove_wish(<?php echo $row->id;?>);">Remove</button>
                </div>
            </div>
          </div>
             <?php }}?>
  </div>
</div>