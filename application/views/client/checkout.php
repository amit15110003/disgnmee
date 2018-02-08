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
              <p style="font-size:14px;text-transform: capitalize; " id="addressf"><span style="color:#000;"><?php $i=0; foreach ($query1 as $row) {if($i=='0'){?> <?php echo $row->fname;?> <?php echo $row->lname;?>, </span> <?php echo $row->addr;?> <?php echo $row->town;?> <?php echo $row->state;?>, <?php echo $row->pin;?><?php }$i++;}?></p>
            </div>
            <div class="col-md-3 col-xs-12 th-pb ">
              <button type="button" class="th-btn-inv-sm cbtn col-xs-12 col-md-6 pull-right" data-toggle="collapse" data-target="#address">Edit</button>
            </div>
          </div>
          <div id="address" class="collapse col-md-12  col-xs-12 ">
            <?php $attributes = array("name" => "payment");
            echo form_open("payment", $attributes);?>
                <div class="radio" data-toggle="buttons">
            <?php $first=1; foreach ($query1 as $row) {?>
                  <label class="btn th-btn-sm" class="<?php if($first==1) {echo "active";}?>">
                    <input type="radio" name="sa"  onchange="javascript:adress_select(<?php echo $row->id;?>);" autocomplete="off" value="<?php echo $row->fname;?>" <?php if($first==1) {echo "checked";}?>>
                    <p style="font-size:14px;text-transform: capitalize; " id="address_<?php echo $row->id;?>"><span id="name_<?php echo $row->id;?>"><?php echo $row->fname;?></span> <span id="lname_<?php echo $row->id;?>"><?php echo $row->lname;?></span>, </span> <span id="address_<?php echo $row->id;?>"><?php echo $row->addr;?></span><span id="city_<?php echo $row->id;?>"> <?php echo $row->town;?></span> <span id="state_<?php echo $row->id;?>"> <?php echo $row->state;?></span>,<span  id="zip_<?php echo $row->id;?>"><?php echo $row->pin;?></span><span class="hidden" id="tel_<?php echo $row->id;?>"><?php echo $row->mob;?></span><span class="hidden" id="country_<?php echo $row->id;?>"><?php echo $row->country;?></span><span class="hidden" id="email_<?php echo $row->id;?>"><?php echo $row->mail;?></span></p>
                  </label>
            <?php $first++;}?>
                </div>
            <?php if (!$this->session->userdata('fname')){?>
            <div >
              <div class="col-md-6"><input class="th-btn-inv col-md-12 th-form" type="text" name="billing_name" placeholder="First Name" required></div>
              <div class="col-md-6"><input class="th-btn-inv col-md-12 th-form" type="text" name="lname" placeholder="Last Name" required></div>
              <div class="col-md-6"><input class="th-btn-inv col-md-12 th-form" type="email" name="billing_email" placeholder="Email" required> </div>
              <div class="col-md-6"><input class="th-btn-inv col-md-12 th-form" type="number" name="billing_tel" placeholder="Mobile No" required></div>
              <div class="col-md-12"><input class="th-btn-inv col-md-12 th-form" type="text" name="billing_address" placeholder="Street Address" required></div>
              <div class="col-md-12"><input class="th-btn-inv col-md-12 th-form" type="text" name="billing_city" placeholder="City" required></div>
              <div class="col-md-12"><input class="th-btn-inv col-md-12 th-form" type="text" name="billing_state" placeholder="State" required></div>
              <div class="col-md-12"><input class="th-btn-inv col-md-12 th-form" type="number" name="billing_zip" placeholder="Zip/Postal Code" required></div>
              <div class="col-md-12"><input class="th-btn-inv col-md-12 th-form" type="text" name="billing_country" placeholder="Country" required></div>
              <div class="col-md-12 th-pb th-pt"><button type="button" class="btn th-btn" data-toggle="collapse" data-target="#address" required>Continue</button></div>
            </div>
            <?php }else{?>
            <div class="hidden" >
              <div class="col-md-6"><input class="th-btn-inv col-md-12 th-form" id="billing_name" type="text" name="billing_name" placeholder="First Name" required></div>
              <div class="col-md-6"><input class="th-btn-inv col-md-12 th-form" id="billing_name1" type="text" name="lname" placeholder="Last Name" required></div>
              <div class="col-md-6"><input class="th-btn-inv col-md-12 th-form" id="billing_email" type="email" name="billing_email" placeholder="Email" required> </div>
              <div class="col-md-6"><input class="th-btn-inv col-md-12 th-form" id="billing_tel" type="number" name="billing_tel" placeholder="Mobile No" required></div>
              <div class="col-md-12"><input class="th-btn-inv col-md-12 th-form" id="billing_address" type="text" name="billing_address" placeholder="Street Address" required></div>
              <div class="col-md-12"><input class="th-btn-inv col-md-12 th-form" id="billing_city" type="text" name="billing_city" placeholder="City" required></div>
              <div class="col-md-12"><input class="th-btn-inv col-md-12 th-form" id="billing_state" type="text" name="billing_state" placeholder="State" required></div>
              <div class="col-md-12"><input class="th-btn-inv col-md-12 th-form" id="billing_zip" type="number" name="billing_zip" placeholder="Zip/Postal Code" required></div>
              <div class="col-md-12"><input class="th-btn-inv col-md-12 th-form" id="billing_country" type="text" name="billing_country" placeholder="Country" required></div>
              <div class="col-md-12 th-pb th-pt"><button type="button" class="btn th-btn" data-toggle="collapse" data-target="#address" required>Continue</button></div>
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
                            $amount=$amount+($details[0]->price*$item['qty']);$pid[] = $item['id'];
                        }
                    }
                    elseif(!empty($this->session->userdata('uid'))){
                   foreach ($query as $row ) {
                  $details=$this->user->get_product_by_id($row->productid);
                   $amount=$amount+($details[0]->price*$row->item);$pid[] = $row->productid;}}
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
            <input type="hidden" name="pid" value="<?php echo implode(",",$pid);?>">
            <p class="col-md-12  col-xs-12 text-left" style="padding: 0px;"><span id="info"></span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 col-xs-12 " style="padding:0 5%">
      <div class="col-md-8 col-xs-12">
        <div class="col-md-12  col-xs-12 clpsb">
                <div class="col-md-12  col-xs-12 nm">Payment Option </div>
                <div class="col-md-12  col-xs-12 ">
                  <div class="col-md-12  col-xs-12 clpsi"><button type="submit" name="onlinepay" style="background-color: transparent;border:none;color: #a3a3a3;font-size: 18px;">Net Banking</button> </div>
                  <div class="col-md-12  col-xs-12 clpsi"><button type="submit" name="cod" style="background-color: transparent;border:none;color: #a3a3a3;font-size: 18px;">Cash on Delivery</button></div>
                </div>
        </div>
         <?php echo form_close();?>
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
<script>
    $(document).ready(function() {
        $('#billing_name').on('input', function() {
          var input=$(this);
          var is_name=input.val();
          if(is_name){input.removeClass("invalid").addClass("valid");}
          else{input.removeClass("valid").addClass("invalid");}
        });
        $('#billing_city').on('input', function() {
          var input=$(this);
          var is_name=input.val();
          if(is_name){input.removeClass("invalid").addClass("valid");}
          else{input.removeClass("valid").addClass("invalid");}
        });
        $('#billing_address').on('input', function() {
          var input=$(this);
          var is_name=input.val();
          if(is_name){input.removeClass("invalid").addClass("valid");}
          else{input.removeClass("valid").addClass("invalid");}
        });
        $('#billing_email').on('input', function() {
          var input=$(this);
          var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
          var is_email=re.test(input.val());
          if(is_email){input.removeClass("invalid").addClass("valid");}
          else{input.removeClass("valid").addClass("invalid");}
        });
        
        $('#billing_zip').on('input', function() {
          var input=$(this);
          var re = /^[0-9]{6}(?:\s*,\s*[0-9]{6})*$/;
          var is_url=re.test(input.val());
          if(is_url){input.removeClass("invalid").addClass("valid");}
          else{input.removeClass("valid").addClass("invalid");}
        });
        $('#billing_tel').on('input', function() {
          var input=$(this);
          var re = /^[0-9]{10}(?:\s*,\s*[0-9]{10})*$/;
          var is_url=re.test(input.val());
          if(is_url){input.removeClass("invalid").addClass("valid");}
          else{input.removeClass("valid").addClass("invalid");}
        });
        $('#contact_message').keyup(function(event) {
          var input=$(this);
          var message=$(this).val();
          console.log(message);
          if(message){input.removeClass("invalid").addClass("valid");}
          else{input.removeClass("valid").addClass("invalid");} 
        });
    
      <!-- After Form Submitted Validation-->
      $("#contact_submit button").click(function(event){
        var form_data=$("#contact").serializeArray();
        var error_free=true;
        for (var input in form_data){
          var element=$("#contact_"+form_data[input]['name']);
          var valid=element.hasClass("valid");
          var error_element=$("span", element.parent());
          if (!valid){error_element.removeClass("error").addClass("error_show"); error_free=false;}
          else{error_element.removeClass("error_show").addClass("error");}
        }
        if (!error_free){
          event.preventDefault(); 
        }
        else{
          alert('No errors: Form will be submitted');
        }
      });
      
      
      
    });
  </script>
  <script>
     function adress_select(id)
      {
            document.getElementById("addressf").innerHTML=
           document.getElementById("address_"+id).innerHTML;
            document.getElementById("billing_name").value=
           document.getElementById("name_"+id).innerHTML;
            document.getElementById("billing_name1").value=
           document.getElementById("lname_"+id).innerHTML;
            document.getElementById("billing_address").value=
           document.getElementById("address_"+id).innerHTML;
            document.getElementById("billing_city").value=
           document.getElementById("city_"+id).innerHTML;
            document.getElementById("billing_state").value=
           document.getElementById("state_"+id).innerHTML;
            document.getElementById("billing_zip").value=
           document.getElementById("zip_"+id).innerHTML;
            document.getElementById("billing_tel").value=
           document.getElementById("tel_"+id).innerHTML;
            document.getElementById("billing_email").value=
           document.getElementById("email_"+id).innerHTML;
            document.getElementById("billing_country").value=
           document.getElementById("country_"+id).innerHTML;
        }
</script>
<script type="text/javascript">
      $(document).ready(function()
      { 
        var id = $('input[name=sa]:checked').val();
        document.getElementById("addressf").innerHTML=id;
      }
      </script>
<script>
  window.onload = function() {
    var d = new Date().getTime();
    document.getElementById("tid").value = d;
  };
</script>