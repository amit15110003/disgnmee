<div class="row">
	<div class="container-fluid" style="padding-left: 5%;padding-right: 5%;">
		<h1 style="padding-top: 5%">Know<span class="th-bold">Fashion</span></h1>
		<div class="th-gap"></div>
		<div class="col-md-4">
		 <?php $i=0; foreach ($query as $row) {
                     if($i%3=='0'){?>
            <div class="col-md-12 blog-card">
	        	<div class="" style="background-image: url('<?php echo base_url();?>uploads1/blog/blogthumb/<?php echo $row->image; ?>');background-size: cover;background-position: center;height: 300px;">
	        	</div>
	        	<div class="col-md-12 blog-text">
	        		<h3><?php echo $row->title; ?></h3>
	                <p class="text-justify"><?php echo $row->descr; ?></p>
	                <button class="col-md-4 col-xs-6 th-btn btn pull-right" type="submit" name="" onclick="javascript:More('');">More</button>
	        	</div>
        	</div>
        <?php } $i++;}?>
       </div>
		<div class="col-md-4">
		 <?php $i=0; foreach ($query as $row) {
                     if($i%3=='1'){?>
            <div class="col-md-12 blog-card">
	        	<div class="" style="background-image: url('<?php echo base_url();?>uploads1/blog/blogthumb/<?php echo $row->image; ?>');background-size: cover;background-position: center;height: 300px;">
	        	</div>
	        	<div class="col-md-12 blog-text">
	        		<h3><?php echo $row->title; ?></h3>
	                <p class="text-justify"><?php echo $row->descr; ?></p>
	                <button class="col-md-4 col-xs-6 th-btn btn pull-right" type="submit" name="" onclick="javascript:More('');">More</button>
	        	</div>
        	</div>
        <?php } $i++;}?>
       </div>
	   <div class="col-md-4">
		 <?php $i=0; foreach ($query as $row) {
                     if($i%3=='2'){?>
            <div class="col-md-12 blog-card">
	        	<div class="" style="background-image: url('<?php echo base_url();?>uploads1/blog/blogthumb/<?php echo $row->image; ?>');background-size: cover;background-position: center;height: 300px;">
	        	</div>
	        	<div class="col-md-12 blog-text">
	        		<h3><?php echo $row->title; ?></h3>
	                <p class="text-justify"><?php echo $row->descr; ?></p>
	                <button class="col-md-4 col-xs-6 th-btn btn pull-right" type="submit" name="" onclick="javascript:More('');">More</button>
	        	</div>
        	</div>
        <?php } $i++;}?>
       </div>

	</div>
</div>