<div class="spacer"></div>
<div id="startchange"></div>
<div class="page-header">
		<h1>Checkout</h1>
</div>
<script>
		$(document).ready(function() {
			<!-- Real-time Validation -->
				<!--Name can't be blank-->
				$('#billing_name').on('input', function() {
					var input=$(this);
					var is_name=input.val();
					if(is_name){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});
				$('#delivery_name').on('input', function() {
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
				$('#delivery_city').on('input', function() {
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
				$('#delivery_address').on('input', function() {
					var input=$(this);
					var is_name=input.val();
					if(is_name){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});
				<!--Email must be an email -->
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
					$('#delivery_zip').on('input', function() {
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
				$('#delivery_tel').on('input', function() {
					var input=$(this);
					var re = /^[0-9]{10}(?:\s*,\s*[0-9]{10})*$/;
					var is_url=re.test(input.val());
					if(is_url){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});
				<!--Message can't be blank -->
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
	window.onload = function() {
		var d = new Date().getTime();
		document.getElementById("tid").value = d;
	};
</script>
 <?php 
      if(empty($this->session->userdata('uid'))){ ?>
<div class="container col-md-12 text-center"><h4>Have account <a data-toggle="modal" data-target=".login">Login</a> Or Create account <a href="<?php echo base_url(); ?>/signup">Register</a></h4>
<h3>Or</h3> </div>
<?php }?>
<div class="container">
<div class="col-md-9">
<div class="col-md-12">
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration:none;">
          <h5>Billing Details</h5>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" style="background-color:#fff;">
      <div class="panel-body"  style="background-color:#fff;">
        <?php $attributes = array("name" => "payment");
            echo form_open("index.php/payment", $attributes);?>
            <input type="hidden" name="tid" id="tid" readonly />
          <div class=" col-md-12">
            <input type="text" class="theme-form" id="billing_name" placeholder="Name*" name="billing_name" value="<?php if(!empty($fname)){echo $fname;echo $lname;} ?>" required>
          </div>
          <div class=" col-md-12">
            <input type="text" class="theme-form" id="billing_address" placeholder="Address*" name="billing_address"  value="<?php echo $addr; ?>" required>
          </div>
          <div class=" col-md-6">
            <input class="theme-form" id="billing_country" type="text" name="billing_country" value="India" readonly required>
          </div>
          <div class=" col-md-6">
            <input type="text" class="theme-form" id="billing_city" placeholder="Town / City*" name="billing_city"  value="<?php echo $town; ?>" required>
          </div>
          <div class=" col-md-6">
        	    <select class="theme-form" name="billing_state" id="billing_state" required>
        	        <?php if(!empty($state)){?><option value="<?php echo $state;?>" selected='selected'><?php echo $state;?></option><?php }else{?><option value="">Choose State</option><?php }?><option value="AP" >Andhra Pradesh</option><option value="AR" >Arunachal Pradesh</option><option value="AS" >Assam</option><option value="BR" >Bihar</option><option value="CT" >Chhattisgarh</option><option value="GA" >Goa</option><option value="GJ" >Gujarat</option><option value="HR" >Haryana</option><option value="HP" >Himachal Pradesh</option><option value="JK" >Jammu and Kashmir</option><option value="JH" >Jharkhand</option><option value="KA" >Karnataka</option><option value="KL" >Kerala</option><option value="MP" >Madhya Pradesh</option><option value="MH" >Maharashtra</option><option value="MN" >Manipur</option><option value="ML" >Meghalaya</option><option value="MZ" >Mizoram</option><option value="NL" >Nagaland</option><option value="OR" >Orissa</option><option value="PB" >Punjab</option><option value="RJ" >Rajasthan</option><option value="SK" >Sikkim</option><option value="TN" >Tamil Nadu</option><option value="TS" >Telangana</option><option value="TR" >Tripura</option><option value="UK" >Uttarakhand</option><option value="UP" >Uttar Pradesh</option><option value="WB" >West Bengal</option><option value="AN" >Andaman and Nicobar Islands</option><option value="CH" >Chandigarh</option><option value="DN" >Dadra and Nagar Haveli</option><option value="DD" >Daman and Diu</option><option value="DL" >Delhi</option><option value="LD" >Lakshadeep</option><option value="PY" >Pondicherry (Puducherry)</option>
        		</select>
          </div>
          <div class=" col-md-6">
            <input type="text" class="theme-form" id="billing_zip" placeholder="Postcode / ZIP*" name="billing_zip"  value="<?php echo $pin; ?>" required pattern="[0-9].{5,}" title="6 Digit or More">
          </div>
          <div class=" col-md-6">
            <input type="text" class="theme-form" id="billing_tel" placeholder="Contact Number*" name="billing_tel"  value="<?php echo $mob; ?>" required  pattern="[0-9].{9,}" title="10 Digit">
          </div>
          <div class="col-md-6">
            <input type="email" class="theme-form"  placeholder="Email-id* " id="billing_email" name="billing_email"  value="<?php echo $this->session->userdata('email'); ?>" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
          </div>
  <div class=" col-md-12">
    <div class="checkbox">
    <label>
      <input type="checkbox" id="address-check"> Shipping Address is same as Billing Address
    </label>
  </div>
  </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="text-decoration:none;">
          <h5>Shipping Details</h5>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo"  style="background-color:#fff;">
      <div class="panel-body"  style="background-color:#fff;">
        <div class=" col-md-12" >
    <input type="text" class="theme-form" id="delivery_name" placeholder="Name*" name="delivery_name" value="<?php if(!empty($fname1)){echo $fname1;echo $lname1;} ?>" required>
  </div>
  <div class=" col-md-12">
    <input type="text" class="theme-form" id="delivery_address" placeholder="Address*" name="delivery_address" value="<?php echo $addr1; ?>" required>
  </div>
  <div class=" col-md-6">
    <input class="theme-form" id="" type="text" name="delivery_country" value="India" readonly required>
  </div>
  <div class=" col-md-6">
    <input type="text" class="theme-form" id="delivery_city" placeholder="Town / City*" name="delivery_city" value="<?php echo $town1; ?>" required>
  </div>
  <div class=" col-md-6">
	    <select class="theme-form" name="delivery_state" id="delivery_state" required>
			  <?php if(!empty($state)){?><option value="<?php echo $state1;?>" selected='selected'><?php echo $state1;?></option><?php }else{?><option value="">Choose State</option><?php }?><option value="AP" >Andhra Pradesh</option><option value="AR" >Arunachal Pradesh</option><option value="AS" >Assam</option><option value="BR" >Bihar</option><option value="CT" >Chhattisgarh</option><option value="GA" >Goa</option><option value="GJ" >Gujarat</option><option value="HR" >Haryana</option><option value="HP" >Himachal Pradesh</option><option value="JK" >Jammu and Kashmir</option><option value="JH" >Jharkhand</option><option value="KA" >Karnataka</option><option value="KL" >Kerala</option><option value="MP" >Madhya Pradesh</option><option value="MH" >Maharashtra</option><option value="MN" >Manipur</option><option value="ML" >Meghalaya</option><option value="MZ" >Mizoram</option><option value="NL" >Nagaland</option><option value="OR" >Orissa</option><option value="PB" >Punjab</option><option value="RJ" >Rajasthan</option><option value="SK" >Sikkim</option><option value="TN" >Tamil Nadu</option><option value="TS" >Telangana</option><option value="TR" >Tripura</option><option value="UK" >Uttarakhand</option><option value="UP" >Uttar Pradesh</option><option value="WB" >West Bengal</option><option value="AN" >Andaman and Nicobar Islands</option><option value="CH" >Chandigarh</option><option value="DN" >Dadra and Nagar Haveli</option><option value="DD" >Daman and Diu</option><option value="DL">Delhi</option><option value="LD" >Lakshadeep</option><option value="PY" >Pondicherry (Puducherry)</option>
		</select>
  </div>
  <div class=" col-md-6">
    <input type="text" class="theme-form" id="delivery_zip" placeholder="Postcode / ZIP*" name="delivery_zip" value="<?php echo $pin1; ?>" required pattern="[0-9].{5,}" title="6 Digit or More">
  </div>
  <div class=" col-md-6">
    <input type="text" class="theme-form" id="delivery_tel" placeholder="Contact Number*" name="delivery_tel" value="<?php echo $mob1; ?>" required pattern="[0-9].{9,}" title="10 Digit or More">
  </div>
      </div>
    </div>
  </div>
</div>
 
  <!--<div class="col-md-6">
    <label>
      <input type="checkbox" checked>Shipping is same as billing Address. 
    </label>
  </div>-->
  </div>
</div>
<div class="col-md-3">
    <div style="border-right:solid 1px #ccc;border-left:solid 1px #ccc;padding-bottom:20px;padding-left:10px;padding-right:10px;">
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <input class="form-control"  type="text" name="promo_code" value="" placeholder="Promocode"/>
                   <br>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong>&#8377;
                  <span id="totalcost" >
                    <?php $i=0;
                    if(!empty($cart =$this->cart->contents()))
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
                        <td class="text-right"><h5><strong> &#8377; 0</strong></h5></td>
                    </tr>
                    <tr>
                        
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>&#8377;
                  <span id="totalcost1" ><?php $i=0;
                  $pid=array();
                  if(!empty($this->cart->contents()))
                    { foreach ($cart as $item )
                        {
                            $details=$this->user->get_product_by_id($item['id']);
                            $details1=$this->user->attributevalue_cost($item['attributevalue'],$item['category']);
                            $i=$i+($details1[0]->cost*$item['qty']);
                            $pid[] = $item['id'];
                        }
                    }
                    elseif(!empty($this->session->userdata('uid'))){
                   foreach ($query as $row ) {
                  $details=$this->user->get_product_by_id($row->productid);
                  $details1=$this->user->attributevalue_cost($row->attributevalue,$row->category);
                   $i=$i+($details1[0]->cost*$row->item);$pid[] = $row->productid;}}
                   echo $i;?></span></strong></h3></td>
                    </tr>
                    <input type="hidden" name="pid" value="<?php echo implode(",",$pid);?>">
                </tbody>
            </table>
            <button class="theme-btn col-xs-12 col-md-12 btn-lg btn" type="submit" >CONTINUE</button>
        </div>
    </div>
    <?php echo form_close();?>
        </div>
</div>
<div class="container"></div>
<script>
    $(function() {
    $(":checkbox").on("change", function() {
        //When the id is test1
        //And name is A
        //And it's checked
        if (this.id === "address-check" && this.checked) {
            document.getElementById("delivery_name").value=
           document.getElementById("billing_name").value;
            document.getElementById("delivery_address").value=
           document.getElementById("billing_address").value;
            document.getElementById("delivery_city").value=
           document.getElementById("billing_city").value;
            document.getElementById("delivery_state").value=
           document.getElementById("billing_state").value;
            document.getElementById("delivery_zip").value=
           document.getElementById("billing_zip").value;
            document.getElementById("delivery_tel").value=
           document.getElementById("billing_tel").value;
        }
    });
});
</script>