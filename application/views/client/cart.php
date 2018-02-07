
<div class="container-fluid" style="margin-top: 100px;padding-bottom: 100px;">
            <?php $count=0;
                if ($cart = $this->cart->contents()){$i=0;
                    foreach ($cart as $item ) {$count++;
              $details=$this->user->get_product_by_id($item['id']);
             ?>
    <div class="row" style="margin-bottom: 15px;">
        <div class="col-md-8 col-xs-12 col-md-offset-2" style="background-color: #f9f9f9;padding: 15px;" id="cart_<?php echo $item['id'];?>">
        <div class="col-md-2 cover-img" style="background-image: url('<?php echo base_url();?>uploads/<?php echo $details[0]->picture;?>'); height: 120px;background-position: top;background-size: cover; ">
        </div>
        <div class="col-md-8 col-xs-12">
           <p><?php  echo $details[0]->title;?></p>
                  <p style="font-size: 14px;"><span class="rate" style="color:#000;padding-right: 15px;"><b>Rs <?php  echo $details[0]->price;?></b></span><sapn style="padding-right: 15px;">Size: <?php echo $item['attributevalue']; ?></sapn><span>
                      <button style="border-radius: 50%;background-color: #fff;border:solid #000 1px;color:#000; height: 25px; width: 25px;">-</button>&nbsp;&nbsp; 1 &nbsp;&nbsp;<button style="border-radius: 50%; background-color: #fff;  height: 25px; width: 25px;border:solid #000 1px;">+</button></span></p>
                  <p style="font-size: 14px;padding-left: 0px;padding-right: 0px;" class="col-md-10">Hem: <?php echo $item['hem']; ?>, Cuff: <?php echo $item['cuff']; ?>, Collar: <?php echo $item['collar']; ?>, Sleeve: <?php echo $item['sleeve']; ?>, Placket: <?php echo $item['placket']; ?></p>
        </div>
        <div class="col-md-2 col-xs-12 th-pb">
            <a class="th-btn-inv-sm col-md-12 btn pull-right" href="<?php echo base_url()?>index.php/cart/removecart/<?php echo $item['rowid'];?>">Remove</a>
        </div>
        </div>
    </div>
    <?php $i++;}}?>
    <?php foreach ($query as $row ) {$count++;
              $details=$this->user->get_product_by_id($row->productid);
             ?>
    <div class="row" style="margin-bottom: 15px;">
        <div class="col-md-8 col-xs-12 col-md-offset-2" style="background-color: #f9f9f9;padding: 15px;" id="cart_<?php echo $row->id;?>">
        <div class="col-md-2 cover-img" style="background-image: url('<?php echo base_url();?>uploads/<?php echo $details[0]->picture;?>'); height: 120px;background-position: top;background-size: cover; ">
        </div>
        <div class="col-md-5 col-xs-12">
           <p><?php  echo $details[0]->title;?></p>
                  <p style="font-size: 14px;"><span class="rate" style="color:#000;padding-right: 15px;"><b>Rs <?php  echo $details[0]->price;?></b></span><sapn style="padding-right: 15px;">Size: <?php echo $row->attributevalue; ?></sapn><span>
                      <button style="border-radius: 50%;background-color: #fff;border:solid #000 1px;color:#000; height: 25px; width: 25px;">-</button>&nbsp;&nbsp; 1 &nbsp;&nbsp;<button style="border-radius: 50%; background-color: #fff;  height: 25px; width: 25px;border:solid #000 1px;">+</button></span></p>
                  <p style="font-size: 14px;padding-left: 0px;padding-right: 0px;" class="col-md-12">Hem: <?php echo $row->hem; ?>, Cuff: <?php echo $row->cuff; ?>, Collar: <?php echo $row->collar; ?>, Sleeve: <?php echo $row->sleeve; ?>, Placket: <?php echo $row->placket; ?></p>
        </div>
        <div class="col-md-3 col-xs-12 th-pb">
                    <button class="th-btn-inv-sm col-xs-12 col-md-12 cbtn " onclick="javascript:move_wishlist(<?php echo $row->id;?>);">Move To Wishlist</button>
        </div>
        <div class="col-md-2 col-xs-12 th-pb">
            <button class="th-btn-inv-sm  col-xs-12 col-md-12 cbtn " onclick="javascript:remove_cart(<?php echo $row->id;?>);">Remove</button>
        </div>
        </div>
    </div>
            <?php }?>
     <?php if($count=='0')
        {?>
        <div class="row" style="margin-bottom: 15px;">
                <div class="col-md-8 col-xs-12 col-md-offset-2 text-center" style="padding: 15px;padding-top: 100px;" >
                    <p>Empty Cart</p>
                    <a class="btn col-xs-12 col-md-4 col-md-offset-4 th-btn text-center pull-center" href="<?php echo base_url(); ?>" style="" > Continue Shopping</a>
                </div>
        </div>
    <?php }?>
    <div class="col-md-8 col-md-offset-2" style="padding:0px;">
           <?php if($count=='0'){?>

           <?php }else{?>
            <a class="btn col-xs-12 col-md-3 th-btn pull-right" href="<?php echo base_url(); ?>index.php/checkout" style="" > Buy Now</a>
            <?php }?>
    </div>
</div>

