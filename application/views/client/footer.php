	<!--footer-->
	<footer style="padding-bottom:40px;">
		<div class="row">
			<hr>
			
			<div class="container">
				<div class="col-md-3 col-xs-6">
                    <h3 style="color:#404040 !important;">SHOP</h3>
					<?php 
                        $details=$this->user->showcategory();
                        foreach ($details as $row ) {
                          $category=str_replace(' ', '-', $row->category);?>
                    <li style="list-style: none;">
                        <a href="<?php echo base_url("product/category/$category"); ?>" style=" text-decoration: none;color: #949494;" ><?php echo $row->category;?></a>
                    </li>
                    <?php }?>
				</div>
				<div class="col-md-3 col-xs-6" >
				        <h3 style="color:#404040 !important;">LINKS</h3>
				        <li style="list-style: none;"><a href="<?php echo base_url("home/about"); ?>" style=" text-decoration: none;color: #949494;">About us</a></li>
				        <li style="list-style: none;"><a href="#" style=" text-decoration: none;color: #949494;"> Blog </a></li>
				        <li style="list-style: none;"><a href="<?php echo base_url("home/contact"); ?>" style=" text-decoration: none;color: #949494;"> Contact us </a></li>
				        <li style="list-style: none;"><a href="<?php echo base_url("home/faqs"); ?>" style=" text-decoration: none;color: #949494;">FAQs</a></li>
				        <li style="list-style: none;"><a href="<?php echo base_url("home/privacy_policy"); ?>" style=" text-decoration: none;color: #949494;">Privacy Policy</a></li>
				        <li style="list-style: none;"><a href="<?php echo base_url("home/terms_and_condition"); ?>"  style=" text-decoration: none;color: #949494;">Terms & Conditions</a></li>
				</div>
				<div class="col-md-3 col-xs-12" >
				    <div class="col-md-offset-1 col-md-9  col-xs-12" >
				    <img src="<?php echo base_url();?>uploads/The-Hippogriff.png" class="img-responsive center-block">
				    </div>
				</div>
				<div class="col-md-3  col-xs-12 text-center">
					<div class="">
					<h3 class="theme-color text-center">Follow us</h3>
						<div class="follow-icon text-center">
					          <a href="https://www.facebook.com/thehippogriffofficial/" class="follow-icon-img"><img class="img-responsive  center-block" src="<?php echo base_url();?>media/image/FB-01.png"></a>
					    </div>
						<div class=" follow-icon text-center">
					         <a href="http://instagram.com/thehippogriff_" class="follow-icon-img"> <img class="img-responsive  center-block" src="<?php echo base_url();?>media/image/Insta-01.png" ></a>
					    </div>
						<div class="follow-icon text-center" >
					          <a href="" class="follow-icon-img"><img class="img-responsive  center-block" src="<?php echo base_url();?>media/image/Mail-01.png" ></a>
					    </div>
						<div class="follow-icon text-center" >
					          <a href="https://twitter.com/THippogriff" class="follow-icon-img"><img class="img-responsive  center-block" src="<?php echo base_url();?>media/image/twitter.png" ></a>
					    </div>
						<div class="follow-icon text-center" >
					          <a href="" class="follow-icon-img"><img class="img-responsive  center-block" src="<?php echo base_url();?>media/image/Youtube-01.png" ></a>
					    </div>
					</div>
					<br>
					<p>We Accept</p>
                    <img src="<?php echo base_url();?>media/image/payment.png" class="img-responsive  center-block"><br>
				    <li style="list-style: none;"><a href=""  style=" text-decoration: none;color: #949494;">Copyright © 2018. THE HIPPOGRIFF.<br>Some rights reserved </a></li>
				</div>
			</div>
		</div>
		<!--<div class="row">
			<div class="container-fluid">
			<hr>
				<div class="col-md-8">
					<ul class="footer-inline">
				        <li><a href="">Copyright © 2017 </a></li>
				        <li><a href="<?php echo base_url("home/about"); ?>">About us</a></li>
				        <li><a href="#"> Blog </a></li>
				        <li><a href="<?php echo base_url("home/faqs"); ?>">FAQs</a></li>
				        <li><a href="<?php echo base_url("home/contact"); ?>"> Contact us </a></li>
				        <li><a href="<?php echo base_url("home/terms_and_condition"); ?>">Terms & Conditions</a></li>
				        <li><a href="<?php echo base_url("home/privacy_policy"); ?>">Privacy Policy</a></li>
				     </ul>
				</div>
				<div class="col-md-4">
          
				</div>
			</div>
		</div>-->
	</footer>
	<!--footerend-->

	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>media/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>media/js/bootstrap-dropdownhover.js"></script>
    <script src="<?php echo base_url();?>media/js/select-togglebutton.js"></script>
    <script type="text/javascript">
            $(document).ready(function() {
                $('#tag').togglebutton();
            })
        </script>

    <script>
	   $("#zoom_01").elevateZoom(); 
	</script>
	<script>
	$('.carousel').carousel({
		  interval: 6000,
		  pause: "false"
		});</script>
	<script>
         function searchFilter() {
             var keywords = $('#keywords').val();
             var sortBy = $('#sortBy').val();
             var tag = $('#tag').val();
             $.ajax({
                 type: 'POST',
                 url: '<?php echo base_url(); ?>index.php/product/viewsort/'+keywords,
                 data:'&keywords='+keywords+'&sortBy='+sortBy+'&tag='+tag,
                 beforeSend: function () {
                     $('.loading').show();
                 },
                 success: function (html) {
                     $('#postList').html(html);
                     $('.loading').fadeOut("slow");
                 }
             });
         }
      </script>
      <script>
         function price() {
              var x = $('#price :selected').val();

              document.getElementById("pricedisplay").innerHTML = x;
         }
      </script>
      <script>
              var x = $('#price :selected').val();
              
              document.getElementById("pricedisplay").innerHTML = x;
      </script>
      <script type="text/javascript">
      function cartadd(id)
      { 
        var qty = $('#qty :selected').val();
        var attributevalue = $('#price :selected').text();
        var category=document.getElementById("category").innerHTML;
        $.ajax({  
                     type: "POST",
                      url: "<?php echo site_url('cart/cartadd');?>",
                      data:'&id='+id+'&qty='+qty+'&category='+category+'&attributevalue='+attributevalue,
                      success: function (response) {
                        location.reload();
                    }
                  });
      }
      </script>
      <script type="text/javascript">
      function cartadd1(id)
      { 
        var x = document.getElementById("cartcounter").innerHTML;
        var qty = $('#qty :selected').val();
        var color = $('#color :selected').text();
        var attributevalue = $('#price :selected').text();
        var category=document.getElementById("category").innerHTML;
        $.ajax({  
                     type: "POST",
                      url: "<?php echo site_url('cart/cartadd1');?>",
                      data:'&id='+id+'&qty='+qty+'&category='+category+'&attributevalue='+attributevalue,
                      success: function (response) {
                        document.getElementById("cartcounter").innerHTML = ++x;
                        document.getElementById("cartcounter1").innerHTML = x;
                    }
                  });
      }
      </script>
      <script type="text/javascript">
      function cartadd3(id)
      { 
        var qty = $('#qty :selected').val();
        var attributevalue = $('#price :selected').text();
        var category=document.getElementById("category").innerHTML;
        $.ajax({  
                     type: "POST",
                      url: "<?php echo site_url('cart/cartadd');?>",
                      data:'&id='+id+'&qty='+qty+'&category='+category+'&attributevalue='+attributevalue,
                      success: function (response) {
                        window.location.href = "http://thehippogriff.com/cart";
                    }
                  });
      }
      </script>
      <script type="text/javascript">
      function cartadd4(id)
      { 
        var x = document.getElementById("cartcounter").innerHTML;
        var qty = $('#qty :selected').val();
        var color = $('#color :selected').text();
        var attributevalue = $('#price :selected').text();
        var category=document.getElementById("category").innerHTML;
        $.ajax({  
                     type: "POST",
                      url: "<?php echo site_url('cart/cartadd1');?>",
                      data:'&id='+id+'&qty='+qty+'&category='+category+'&attributevalue='+attributevalue,
                      success: function (response) {
                        window.location.href = "http://thehippogriff.com/cart";
                    }
                  });
      }
      </script>
      <script type="text/javascript">
      function love(id)
      {
              $.ajax({
                      type: "POST",
                      url: "<?php echo site_url('profile/love');?>",
                      data:"id="+id,
                    success: function (response) {
                       location.reload();
                    }
                  });
      }
      </script>
       <script type="text/javascript">
      function wishlist(id)
      {
             var qty = $('#qty :selected').val();
            var attributevalue = $('#price :selected').text();
        var category=document.getElementById("category").innerHTML;
              $.ajax({
                      type: "POST",
                      url: "<?php echo site_url('cart/wishlist');?>",
                      data:"id="+id+'&qty='+qty+'&category='+category+'&attributevalue='+attributevalue,
                    success: function (response) {
                     location.reload();
                    }
                  });
      }
      </script>
      <script type="text/javascript">
    function remove_cart(postid)
    {
      var x = document.getElementById("cartcounter").innerHTML;
      var l=document.getElementById("cost_"+postid).innerHTML;
      var t=document.getElementById("totalcost").innerHTML;
      var s=t-l;
            $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('cart/remove_cart');?>",
                    data:"postid="+postid,
                    success: function (response) {
                        document.getElementById("cartcounter").innerHTML = --x;
                        document.getElementById("totalcost").innerHTML=s;
                     $("#cart_"+postid).hide();
                    }
                });
    }
  </script>
  <script type="text/javascript">
    function remove_cart1(postid,id)
    {
      var x = document.getElementById("cartcounter").innerHTML;
      var l=document.getElementById("cost_"+postid).innerHTML;
      var t=document.getElementById("totalcost").innerHTML;
      var s=t-l;
            $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('cart/removecart');?>",
                    data:"postid="+postid,
                    success: function (response) {
                        document.getElementById("cartcounter").innerHTML = --x;
                        document.getElementById("totalcost").innerHTML=s;
                     $("#cart_"+postid).hide();
                    }
                });
    }
  </script>
  <script type="text/javascript">
    function item(id)
    {
           var i=document.getElementById("itemno_"+id).value;
           var c=document.getElementById("itemcost_"+id).innerHTML;
           var t=document.getElementById("totalcost").innerHTML;
           var l=document.getElementById("cost_"+id).innerHTML;
           var r= i*c;
           var s=t-l;
           var k=s+r;
           var item = $("#itemno_"+id).val();
            $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('cart/itemadd');?>",
                    data: {id: id, item: item},
                    success: function (response) {
                    document.getElementById("cost_"+id).innerHTML=r;
                    document.getElementById("totalcost").innerHTML=k;
                    document.getElementById("totalcost1").innerHTML=k;
                    }
                });
    }
  </script>
  <script type="text/javascript">
    function item1(id)
    {
           var i=document.getElementById("itemno_"+id).value;
           var id1=document.getElementById("itemid_"+id).innerHTML;
           var c=document.getElementById("itemcost_"+id).innerHTML;
           var t=document.getElementById("totalcost").innerHTML;
           var l=document.getElementById("cost_"+id).innerHTML;
           var r= i*c;
           var s=t-l;
           var k=s+r;
           var item = $("#itemno_"+id).val();
            $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('cart/updatecart');?>",
                    data: {item: item,rowid:id1},
                    success: function (response) {
                    document.getElementById("cost_"+id).innerHTML=r;
                    document.getElementById("totalcost").innerHTML=k;
                    document.getElementById("totalcost1").innerHTML=k;
                    }
                });
    }
  </script>
  <script type="text/javascript">
    function remove_wish(postid)
    {
            $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('wishlist/remove_wish');?>",
                    data:"postid="+postid,
                    success: function (response) {
                     $("#wish_"+postid).hide();
                    }
                });
    }
  </script>
  <script type="text/javascript">
    function move_cart(postid)
    {
            $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('wishlist/move_cart');?>",
                    data:"postid="+postid,
                    success: function (response) {
                     location.reload();
                    }
                });
    }
  </script>
  </body>
</html>