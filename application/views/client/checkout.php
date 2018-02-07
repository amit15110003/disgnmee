<div class="container-fluid" style="margin-top: 100px;">  
  <div class="row">
    <div class="col-md-12 col-xs-12 " style="padding:0 5%">
      <div class="col-md-8 col-xs-12">
        <div class="col-md-12 col-xs-12 clps">
          <div class="col-md-12 col-xs-12">
            <div class="col-md-9 col-xs-12 ">
              <p>Login</p>
              <p style="font-size:14px;color:#000; "><?php if ($this->session->userdata('fname')){ echo $this->session->userdata('fname'); echo " "; echo $this->session->userdata('lname');}else{echo"As Guest";}?></p>
            </div>
            <?php if (!$this->session->userdata('fname')){?>
            <div class="col-md-3 col-xs-12 th-pb">
              <button type="button" class="th-btn-inv-sm cbtn col-xs-12 col-md-6 pull-right" data-toggle="collapse" data-target="#login">Edit</button>
            </div> <?php }?>
          </div>
          <div id="login" class="collapse col-md-12  col-xs-12 ">
              <?php $attributes = array("name" => "loginform");
            echo form_open("login/login", $attributes);?>
            <div class="col-md-12 col-xs-12">
              <label>Email<span style="color: red;">*</span></label>
              <input type="email" class="th-btn-inv col-md-12 th-form" placeholder="Email" name="email">
            </div>
            <div class="col-md-12 col-xs-12">
              <label>Password<span style="color: red;">*</span></label>
              <input type="password" class="th-btn-inv col-md-12 th-form" placeholder="Password" name="password">
            </div>
            <div class="col-md-3 col-xs-12" style="padding-top:15px;">
              <button type="submit" class="btn th-btn col-xs-12">Login</button>
            </div>
            <div class="col-md-3 col-xs-12" style="padding-top:15px;">
              <button data-toggle="collapse" data-target="#login" class="btn th-btn-inv col-xs-12">As Guest</button>
            </div>
          <?php echo form_close(); ?>
          </div>
        </div>
        <div class="col-md-12  col-xs-12 clps">
          <div class="col-md-12  col-xs-12">
            <div class="col-md-9 col-xs-12">
              <p>Dilivery Address</p>
              <p style="font-size:14px;text-transform: capitalize; "><span style="color:#000;"><?php $i=0; foreach ($query1 as $row) {if($i=='0'){?> <?php echo $row->fname;?> <?php echo $row->lname;?>, </span> <?php echo $row->addr;?> <?php echo $row->town;?> <?php echo $row->state;?>, <?php echo $row->pin;?><?php }$i++;}?></p>
            </div>
            <div class="col-md-3 col-xs-12 th-pb ">
              <button type="button" class="th-btn-inv-sm cbtn col-xs-12 col-md-6 pull-right" data-toggle="collapse" data-target="#address">Edit</button>
            </div>
          </div>
          <div id="address" class="collapse col-md-12  col-xs-12 ">
            <?php foreach ($query1 as $row) {?>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    <p style="font-size:14px;text-transform: capitalize; "><span style="color:#000;"><?php foreach ($query1 as $row) {?> <?php echo $row->fname;?> <?php echo $row->lname;?>, </span> <?php echo $row->addr;?> <?php echo $row->town;?> <?php echo $row->state;?>, <?php echo $row->pin;?><?php }?></p>
                  </label>
                </div>
            <?php }?>
            <?php if (!$this->session->userdata('fname')){?>
            <div >
              <div class="col-md-6"><input class="th-btn-inv col-md-12 th-form" type="text" name="fname" placeholder="First Name"></div>
              <div class="col-md-6"><input class="th-btn-inv col-md-12 th-form" type="text" name="lname" placeholder="Last Name"></div>
              <div class="col-md-6"><input class="th-btn-inv col-md-12 th-form" type="email" name="mail" placeholder="Email"></div>
              <div class="col-md-6"><input class="th-btn-inv col-md-12 th-form" type="number" name="no" placeholder="Mobile No"></div>
              <div class="col-md-12"><input class="th-btn-inv col-md-12 th-form" type="text" name="add" placeholder="Street Address"></div>
              <div class="col-md-12"><input class="th-btn-inv col-md-12 th-form" type="text" name="city" placeholder="City"></div>
              <div class="col-md-12"><input class="th-btn-inv col-md-12 th-form" type="text" name="state" placeholder="Select State"></div>
              <div class="col-md-12"><input class="th-btn-inv col-md-12 th-form" type="number" name="pin" placeholder="Zip/Postal Code"></div>
              <div class="col-md-12"><input class="th-btn-inv col-md-12 th-form" type="text" name="country" placeholder="Country"></div>
              <div class="col-md-12"><button type="button" class="btn th-btn" data-toggle="collapse" data-target="#address">Continue</button></div>
            </div>
            <?php }?>
          </div>
        </div>
        <div class="col-md-12  col-xs-12 clps">
          <div class="col-md-12  col-xs-12">
            <div class="col-md-9 col-xs-12 ">
              <p>Shipping Information</p>
              <p style="font-size:14px;color:#000; "><span id="item_count1"></span> Item</p>
            </div>
            <div class="col-md-3 col-xs-12 th-pb">
              <button type="button" class="th-btn-inv-sm cbtn col-xs-12 col-md-6 pull-right" data-toggle="collapse" data-target="#shipping">Edit</button>
            </div>
          </div>
          <div id="shipping" class="collapse col-md-12  col-xs-12 ">
              <?php $count=0;
                if ($cart = $this->cart->contents()){$i=0;
                    foreach ($cart as $item ) {$count++;
              $details=$this->user->get_product_by_id($item['id']);
             ?>
            <div class="row" style="margin-bottom: 15px;">
                <div class="col-md-12 col-xs-12" style="background-color: #f9f9f9;padding: 15px;" id="cart_<?php echo $item['id'];?>">
                <div class="col-md-2 cover-img" style="background-image: url('<?php echo base_url();?>uploads/<?php echo $details[0]->picture;?>'); height: 120px;background-position: top;background-size: cover; ">
                </div>
                <div class="col-md-10 col-xs-12">
                   <p><?php  echo $details[0]->title;?></p>
                   <p style="font-size: 14px;"><span class="rate" style="color:#000;padding-right: 15px;"><b>Rs <?php  echo $details[0]->price;?></b></span><sapn style="padding-right: 15px;">Size: <?php echo $item['attributevalue']; ?></sapn><span>Item: <?php echo $item['qty']; ?></span></p>
                  <p style="font-size: 14px;padding-left: 0px;padding-right: 0px;" class="col-md-10">Hem: <?php echo $item['hem']; ?>, Cuff: <?php echo $item['cuff']; ?>, Collar: <?php echo $item['collar']; ?>, Sleeve: <?php echo $item['sleeve']; ?>, Placket: <?php echo $item['placket']; ?></p>
                </div>
                <div class="col-md-2 col-xs-12 th-pb">
                </div>
                </div>
            </div>
            <?php $i++;}}?>
            <?php foreach ($query as $row ) {$count++;
                      $details=$this->user->get_product_by_id($row->productid);
                     ?>
            <div class="row" style="margin-bottom: 15px;">
                <div class="col-md-12 col-xs-12" style="background-color: #f9f9f9;padding: 15px;" id="cart_<?php echo $row->id;?>">
                <div class="col-md-2 cover-img" style="background-image: url('<?php echo base_url();?>uploads/<?php echo $details[0]->picture;?>'); height: 120px;background-position: top;background-size: cover; ">
                </div>
                <div class="col-md-5 col-xs-12">
                   <p><?php  echo $details[0]->title;?></p>
                          <p style="font-size: 14px;"><span class="rate" style="color:#000;padding-right: 15px;"><b>Rs <?php  echo $details[0]->price;?></b></span><sapn style="padding-right: 15px;">Size: <?php echo $row->attributevalue; ?></sapn><span>Item: <?php echo $row->item; ?></span></p>
                          <p style="font-size: 14px;padding-left: 0px;padding-right: 0px;" class="col-md-12">Hem: <?php echo $row->hem; ?>, Cuff: <?php echo $row->cuff; ?>, Collar: <?php echo $row->collar; ?>, Sleeve: <?php echo $row->sleeve; ?>, Placket: <?php echo $row->placket; ?></p>
                </div>
                <div class="col-md-3 col-xs-12 th-pb">
                </div>
                <div class="col-md-2 col-xs-12 th-pb">
                </div>
                </div>
            </div>
                    <?php }?>
                  <span class="hidden" id="item_count"><?php echo $count;?></span>
          </div>
        </div>
        <div class="col-md-12  col-xs-12 clpsb">
          <div class="col-md-12  col-xs-12 nm">Payment Option </div>
          <div class="col-md-12  col-xs-12 ">
            <div class="col-md-12  col-xs-12 clpsi"> <p>Net Banking</p> </div>
            <div class="col-md-12  col-xs-12 clpsi"> <p>Cash on Delivery</p> </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-xs-12">
        <div class="col-md-12  col-xs-12 clps">
          <div class="col-md-12  col-xs-12">Price Details<hr></div>
          <div class="col-md-12  col-xs-12">
            <p class="col-md-6  col-xs-6 text-left" style="padding: 0px;">Price</p>
            <p class="col-md-6  col-xs-6 text-right"  style="color:#000;padding: 0px;">Rs. <span id="total_amount">
              <?php $amount=0;
                    if(!empty($cart =$this->cart->contents()))
                    { foreach ($cart as $item )
                        {
                            $details=$this->user->get_product_by_id($item['id']);
                            $amount=$amount+($details[0]->price*$item['qty']);
                        }
                    }
                    elseif(!empty($this->session->userdata('uid'))){
                   foreach ($query as $row ) {
                  $details=$this->user->get_product_by_id($row->productid);
                   $amount=$amount+($details[0]->price*$row->item);}}
                   echo $amount;?></p></span><hr>
          </div>
          <div class="col-md-12  col-xs-12">
            <p class="col-md-6  col-xs-6 text-left" style="padding: 0px;">Tax</p>
            <p class="col-md-6  col-xs-6 text-right"  style="color:#000;padding: 0px;">Rs. <span id="tax_amount"></span></p>
          </div>
          <div class="col-md-12  col-xs-12">
            <p class="col-md-6  col-xs-6 text-left" style="padding: 0px;">Delivery Charge</p>
            <p class="col-md-6  col-xs-6 text-right"  style="color:#000;padding: 0px;">Rs. <span id="delivery_charge"></span></p>
          </div>
          <div class="col-md-12  col-xs-12">
          <hr>
            <p class="col-md-6  col-xs-6 text-left" style="padding: 0px;">Total Charge</p>
            <p class="col-md-6  col-xs-6 text-right"  style="color:#000;padding: 0px;">Rs. <span id="Total_pamount"></span></p>
            <p class="col-md-12  col-xs-12 text-left" style="padding: 0px;"><span id="info"></span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
     $(document).ready(function(){
             document.getElementById("item_count1").innerHTML=document.getElementById("item_count").innerHTML;
            var amt= document.getElementById("total_amount").innerHTML;
            if(amt<1000){
            var tax=parseFloat(amt)*5/100;}else{var tax= parseFloat(amt)*12/100;}
             document.getElementById("tax_amount").innerHTML=tax;
             var tamount=parseFloat(amt)+parseFloat(tax);
             document.getElementById("delivery_charge").innerHTML='0';
             document.getElementById("Total_pamount").innerHTML=tamount;
             if(tamount>=7000 &&tamount<=10000){
            var info='Get a free visit from our tailor on a cart value of above Rs. 10,000!';}else{var info='';}
            document.getElementById("info").innerHTML=info;
    });
</script>