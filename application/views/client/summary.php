<div class="container-fluid" style="margin-top: 100px;">  
  <div class="row">
    <div class="col-md-12 col-xs-12 " style="padding:0 5%">

      <div class="col-md-8 col-xs-12">
        <div class="clps">
                <p>Login : <span style="font-size:14px;color:#000; "><?php if ($this->session->userdata('fname')){ echo $this->session->userdata('fname'); echo " "; echo $this->session->userdata('lname');}else{echo"As Guest";}?></span></p>
                <p>Dilivery Address : <span style="font-size:14px;text-transform: capitalize; " id="addressf"><span style="color:#000;"><?php $i=0; foreach ($query1 as $row) {if($i=='0'){?> <?php echo $row->fname;?> <?php echo $row->lname;?>, </span> <?php echo $row->addr;?> <?php echo $row->town;?> <?php echo $row->state;?>, <?php echo $row->pin;?><?php }$i++;}?></span></p>
                <p>Shipping Information : <span style="font-size:14px;color:#000; "><span id="item_count1"></span> Item</span></p>
            <div class=" col-md-12  col-xs-12" style="margin-top: 20px;">
                <?php $count=0;
                  if ($cart = $this->cart->contents()){$i=0;
                      foreach ($cart as $item ) {$count++;
                $details=$this->user->get_product_by_id($item['id']);
               ?>
              <div class="row" style="margin-bottom: 15px;">
                  <div class="col-md-12 col-xs-12" style="background-color: #f9f9f9;" id="cart_<?php echo $item['id'];?>">
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
                   echo $amount;?></span></p><hr>
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