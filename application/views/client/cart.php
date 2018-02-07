
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



<!--<div class="container">
        <div class="col-xs-12 col-md-9" >
            <?php 
                if ($cart = $this->cart->contents()){$i=0;
                    foreach ($cart as $item ) {
              $details=$this->user->get_product_by_id($item['id']);
              $details1=$this->user->attributevalue_cost($item['attributevalue'],$item['category']);
             ?>
            <div class="col-xs-12 col-md-12  cart-layout cart_item" id="cart_<?php echo $item['id'];?>">
                <div class="col-md-1 col-xs-12 cart-line text-right">
                    <h5><a href="<?php echo base_url()?>index.php/cart/removecart/<?php echo $item['rowid'];?>">X</a></h5>
                    <span class="hidden" id="itemid_<?php echo $i;?>"><?php echo $item['rowid'];?></span>
                </div>
                <div class="col-md-2 col-xs-12">
                    <img src="<?php echo base_url();?>uploads/<?php echo $details[0]->picture;?>" class="img-responsive center-block" style="height: 120px;">
                </div>
                <div class="col-md-2 col-xs-12 cart-line">
                    <h5><a href="" style="color: #000;"><?php  echo $details[0]->title;?> </a></h5>
                    <p><?php echo $item['attributevalue']; ?></p>
                </div>
                <div class="col-md-2 col-xs-3 cart-line text-center">
                    <h5>Per Item</h5><h5>&#8377;  <span id="itemcost_<?php echo $i;?>"><?php echo  $details1[0]->cost;?></span></h5>
                </div>
                <div class="col-md-3 col-xs-6 cart-line  text-center"  style="padding-top:4%;">
                    <div class="text-center quantity">
                        <p>Qty</p>
                        <input  step="1" min="1" max="" name="quantity" value="<?php echo $item['qty'];?>" title="Qty" class="input-text qty text text-center" size="4" pattern="[0-9]*" inputmode="numeric" id="itemno_<?php echo $i;?>" onchange="javascript:item1(<?php echo $i;?>);" style="display:inline-block;" >
                    </div>
                </div>
                <div class="col-md-2 col-xs-3 cart-line text-center">
                    <h5>Total</h5><h5>&#8377; <span id="cost_<?php echo $i;?>"><?php echo  $details1[0]->cost*$item['qty'];?></span></h5>
                </div>
            </div><div style="boder-bottom:solid 1ps #ccc;"></div><?php $i++;}}?>
            <?php foreach ($query as $row ) {
              $details=$this->user->get_product_by_id($row->productid);
              $details1=$this->user->attributevalue_cost($row->attributevalue,$row->category);
             ?>
            <div class="col-xs-12 col-md-12  cart-layout cart_item" id="cart_<?php echo $row->id;?>">
                <div class="col-md-1 col-xs-6 cart-line text-right">
                    <h5><a href="" onclick="javascript:remove_cart(<?php echo $row->id;?>);">X</a></h5>
                </div>
                <div class="col-md-2 col-xs-12">
                    <img src="<?php echo base_url();?>uploads/<?php echo $details[0]->picture;?>" class="img-responsive center-block" style="height: 120px;">
                </div>
                <div class="col-md-2 col-xs-12 cart-line">
                    <h5><a href="" style="color: #000;"><?php  echo $details[0]->title;?></a></h5>
                    <p><?php echo $row->attributevalue; ?></p>
                </div>
                <div class="col-md-2 col-xs-3 cart-line text-center">
                    <h5>Per Item</h5><h5>&#8377;  <span id="itemcost_<?php echo $row->id;?>"><?php  
                     
                    echo $details1[0]->cost;?></span></h5>
                </div>
                <div class="col-md-3 col-xs-6 cart-line" style="padding-top:4%;">
                    <div class="text-center quantity"><p>Qty</p>
                        <input  step="1" min="1" max="" name="quantity" value="<?php echo $row->item;?>" title="Qty" class="input-text qty text text-center" size="4" pattern="[0-9]*" inputmode="numeric" id="itemno_<?php echo $row->id;?>" onchange="javascript:item(<?php echo $row->id;?>);" >
                    </div>
                </div>
                <div class="col-md-2 col-xs-3 cart-line text-center">
                    <h5>Total</h5><h5>&#8377; <span id="cost_<?php echo $row->id;?>"><?php echo  $details1[0]->cost*$row->item;?></span></h5>
                </div>
            </div><div style="boder-bottom:solid 1ps #ccc;"></div>
            <?php }?>
        </div>
        <div class="col-md-3" style="border-left:solid 1px #ccc;border-right:solid 1px #ccc;"
            <div class="col-md-12">
            <table class="table table-hover ">
                <tbody>
                    <tr>
                        
                        
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong>&#8377;
                  <span id="totalcost" >
                    <?php $i=0;
                    if(!empty($this->cart->contents()))
                    { foreach ($cart as $item )
                        {
                            $details=$this->user->get_product_by_id($item['id']);
                            $details1=$this->user->attributevalue_cost($item['attributevalue'],$item['category']);
                            $i=$i+($details1[0]->cost*$item['qty']);
                        }
                    }
                    elseif(!empty($this->session->userdata('uid'))){
                   foreach ($query as $row ) {
                  $details=$this->user->get_product_by_id($row->productid);
                  $details1=$this->user->attributevalue_cost($row->attributevalue,$row->category);
                   $i=$i+($details1[0]->cost*$row->item);}}
                   echo $i;?></span></strong></h5></td>
                    </tr>
                    <tr>
                        
                        <td><h5>Estimated shipping</h5></td>
                        <td class="text-right"><h5><strong>0</strong></h5></td>
                    </tr>
                    <tr>
                        
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>&#8377;
                  <span id="totalcost1" ><?php $i=0;
                  if(!empty($this->cart->contents()))
                    { foreach ($cart as $item )
                        {
                            $details=$this->user->get_product_by_id($item['id']);
                            $details1=$this->user->attributevalue_cost($item['attributevalue'],$item['category']);
                            $i=$i+($details1[0]->cost*$item['qty']);
                        }
                    }
                    elseif(!empty($this->session->userdata('uid'))){
                   foreach ($query as $row ) {
                  $details1=$this->user->attributevalue_cost($row->attributevalue,$row->category);
                   $i=$i+($details1[0]->cost*$row->item);}}
                   echo $i;?></span></strong></h3></td>
                    </tr>
                </tbody>
            </table>
            <?php if($i!='0'){?>
            <a class="btn col-xs-12 col-md-12 btn-lg theme-btn" href="<?php echo base_url(); ?>index.php/checkout" style="" > PROCEED</a><?php } else{?>
            <a class="btn col-xs-12 col-md-12 btn-lg theme-btn" href="<?php echo base_url(); ?>" style="" >CONTINUE SHOPPING</a><?php }?>
        </div>
        </div>-->
        </div>
    </div>
</div>
