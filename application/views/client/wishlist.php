<div class="container-fluid" style="padding-top: 100px;">
    <h1>Wishlist</h1>   
    <div class="row">
           <?php if(!empty($query)){ foreach ($query as $row ) {
              $details=$this->user->get_product_by_id($row->productid);
             ?>
            <div class="row" style="margin-bottom: 15px;">
            <div class="col-md-8 col-xs-12 col-md-offset-2" style="background-color: #f9f9f9;padding: 15px;" id="cart_<?php echo $row->id;?>">
                <div class="col-md-2 cover-img" style="background-image: url('<?php echo base_url();?>uploads/<?php echo $details[0]->picture;?>'); height: 180px;background-position: center;background-size: cover; ">
        </div>
        <div class="col-md-4 col-xs-12">
          <p  class="text-center">
            <span><?php  echo $details[0]->title;?></span>
            <br>
            <span class="rate">Rs <?php  echo $details[0]->price;?></span></p>
          <div class="col-md-12 text-center">
            <p>Size: <?php echo $row->attributevalue; ?></p>
            <p><span>
              <button style="border-radius: 50%; background-color: black; border: none; height: 25px; width: 25px;">-</button>&nbsp;&nbsp; 1 &nbsp;&nbsp;<button style="border-radius: 50%; background-color: black; border: none; height: 25px; width: 25px;">+</button>
            </span></p>
          </div>
        </div>
        <div class="col-md-4">
            
            <p>Hem: <?php echo $row->hem; ?></p>
            <p>Cuff: <?php echo $row->cuff; ?></p>
            <p>Collar: <?php echo $row->collar; ?></p>
            <p>Sleeve: <?php echo $row->sleeve; ?></p>
            <p>Placket: <?php echo $row->placket; ?></p>
        </div>
        <div class="col-md-2 col-xs-12 text-center">
            <a class="th-btn-inv-sm col-md-12 btn " onclick="javascript:move_cart(<?php echo $row->id;?>);">Move To Wishlist</a>
            <a class="th-btn-inv-sm col-md-12 btn " onclick="javascript:remove_wish(<?php echo $row->id;?>);">Remove</a>
        </div>
        </div>
             <?php }}?>
    </div>
</div>
</div>