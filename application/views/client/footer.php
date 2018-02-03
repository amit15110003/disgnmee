<div class="footer">
  <hr>
  <div class="th-gap"></div>
	<div class="row">			
		<div class="container-fluid" style="padding-left: 5%; padding-right: 5%;">
      <div class="col-md-3  col-xs-12 text-center">
        <div>
          <a href="<?php echo base_url(""); ?>" ><img class="img-responsive center-block" style="height: 30px;" src="<?php echo base_url();?>media/image/Hippogrifftypeteal.png"></a>
        </div>
        <br><br>
        <p>D86 100 foot road Chatarpur enclave New Delhi 110074  //  F379, 2nd floor DLF Mall of India, Sector -18 Noida 201301</p>
        <br>
        <p> Ph- +91-9810312151<br>Email- contact@designmee.in</p>
      </div>
			<div class="col-md-3 col-xs-6">
        <ul style="list-style: none;"><p>About Us</p><br>
          <li class="rate"><a href="<?php echo base_url(""); ?>index.php/home/about" >Our Story</a></li><br>
          <li class="rate"><a href="<?php echo base_url(""); ?>index.php/home/terms_and_condition" >Terms & Condition</a></li><br>
          <li class="rate"><a href="<?php echo base_url(""); ?>index.php/home/privacy_policy" >Privacy Policy</a></li><br>
        </ul>
			</div>
			<div class="col-md-3 col-xs-6" >
        <ul style="list-style: none;"><p>Help</p><br>
          <li class="rate"><a href="" >Ordering Fabric Samples</a></li><br>
          <li class="rate"><a href="" >How Dress Shirts Shrink</a></li><br>
          <li class="rate"><a href="" >Common Fit Problems</a></li><br>
          <li class="rate"><a href="" >Shipping & Fast Delivery</a></li>
        </ul>
			</div>
      <div class="col-md-3 col-xs-6" >
        <ul style="list-style: none;"><p>Support</p><br>
          <li class="rate"><a href="<?php echo base_url(""); ?>index.php/home/faqs" >FAQs</a></li><br>
          <li class="rate"><a href="" >Return Policy</a></li><br>
          <li class="rate"><a href="" >Special Events</a></li><br>
          <li class="rate"><a href="<?php echo base_url(""); ?>index.php/home/Contact" >Contact Us</a></li>
        </ul>
			</div>
      <div class="text-center col-md-12">
        <br><br><br>
        <a href=" https://www.facebook.com/DesignMeeIN/" style="padding: 0 15px;"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com/designmeein/" style="padding: 0 15px;"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="#" style="padding: 0 15px;"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        <a href="#" style="padding: 0 15px;"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <br><br><br>
      </div>
		</div>
	</div>
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
     $("#zoom_03").elevateZoom({gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'}); 

//pass the images to Fancybox
$("#zoom_03").bind("click", function(e) {  
  var ez =   $('#zoom_03').data('elevateZoom'); 
  $.fancybox(ez.getGalleryList());
  return false;
});
  </script>
  <script type="text/javascript">
     $('.carousel').carousel({
  interval: 3000,cycle: true,pause: "null"
});
    </script>
    <script type="text/javascript">
      // Instantiate the Bootstrap carousel
$('.multi-item-carousel').carousel({
  interval: 3000
});

$('.multi-item-carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
  } else {
    $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});
    </script>
    <script type="text/javascript">
      $(function() {

    function abso() {

        $('.top1').css({
            width: $(window).width(),
            height: $(window).height()
        });

    }

    $(window).resize(function() {
        abso();         
    });

    abso();

});
    </script>
    <script type="text/javascript">
      $(function() {

    function abso1() {

        $('.left').css({
            height: $(window).height()
        });

    }

    $(window).resize(function() {
        abso1();         
    });

    abso1();

});
    </script>
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
      <script type="text/javascript">
      function cartadd(id)
      { 
        var qty = '1';
        var attributevalue = $('input[name=size]:checked').val();
        $.ajax({  
                     type: "POST",
                      url: "<?php echo site_url('cart/cartadd');?>",
                      data:'&id='+id+'&qty='+qty+'&attributevalue='+attributevalue,
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
        var qty ='1';
        var attributevalue = $('input[name=size]:checked').val();
        var hem = $('input[name=hem]:checked').val();
        var cuff = $('input[name=cuff]:checked').val();
        var collar = $('input[name=collar]:checked').val();
        var sleeve = $('input[name=sleeve]:checked').val();
        var placket = $('input[name=placket]:checked').val();
        $.ajax({  
                     type: "POST",
                      url: "<?php echo site_url('cart/cartadd1');?>",
                      data:'&id='+id+'&qty='+qty+'&attributevalue='+attributevalue+'&hem='+hem+'&cuff='+cuff+'&collar='+collar+'&sleeve='+sleeve+'&placket='+placket,
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
       var attributevalue = $('input[name=size]:checked').val();
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