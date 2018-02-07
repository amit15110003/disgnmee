<div class="container-fluid" style="padding-top: 5%;padding-left: 5%;padding-right: 5%;">
	<div class="col-md-12">
		<ol class="breadcrumb">
				  <li><a class="hitem" href="#"><?php echo $categoryval;?></a></li>
				  <li  class="hitem" class="active"><?php echo $scategoryval;?></li>
		</ol>
	</div>
	<div class="col-md-3 hidden-xs">
		<div class="menu">
		<input type="hidden" id="keywords" value="<?php echo $categoryval; ?>" onchange="searchFilter()"/>	
		<input type="hidden" id="keywords1" value="<?php echo $scategoryval; ?>" onchange="searchFilter()"/>
		<input type="hidden" id="categoryid" value="<?php echo $scategoryid; ?>" onchange="searchFilter()"/>
        	<div class="mini-menu">
	            <ul style="padding-left: 0px;">         		
	        		<li>
		            	<a class="hitem" >Ocassion</a><br><br>
		            	<label class="cont">Formal
						  <input type="checkbox" checked="checked" value="Formal" name="ocassion" onchange="searchFilter()">
						  <span class="checkmark"></span>
						</label>
						<label class="cont">Casual
						  <input type="checkbox" name="ocassion" value="Casual" onchange="searchFilter()">
						  <span class="checkmark"></span>
						</label>
						<label class="cont">Festive
						  <input type="checkbox" name="ocassion" value="Festive" onchange="searchFilter()">
						  <span class="checkmark"></span>
						</label>
			        </li>        		
	        		<li>
		            	<br><br><a class="hitem" >Fabric</a><br><br>
		            	<label class="cont">Cotton
						  <input type="checkbox" checked="checked" value="Cotton" name="fabric" onchange="searchFilter()">
						  <span class="checkmark"></span>
						</label>
						<label class="cont">Linen
						  <input type="checkbox" name="fabric" value="Linen" onchange="searchFilter()">
						  <span class="checkmark"></span>
						</label>
						<label class="cont">Chambray
						  <input type="checkbox" name="fabric" value="Chambray" onchange="searchFilter()">
						  <span class="checkmark"></span>
						</label>
						<label class="cont">Flannel
						  <input type="checkbox" name="fabric" value="Flannel" onchange="searchFilter()">
						  <span class="checkmark"></span>
						</label>
			        </li>         		
	        		<li>
		            	<br><br><a  class="hitem" >Pattern</a><br><br>
		            	<label class="cont">Solids
						  <input type="checkbox" checked="checked" value="Solids" name="pattern" onchange="searchFilter()">
						  <span class="checkmark"></span>
						</label>
						<label class="cont">Stripes
						  <input type="checkbox" name="pattern" value="Stripes" onchange="searchFilter()">
						  <span class="checkmark"></span>
						</label>
						<label class="cont">Checks
						  <input type="checkbox" name="pattern" value="Checks" onchange="searchFilter()">
						  <span class="checkmark"></span>
						</label>
						<label class="cont">Prints
						  <input type="checkbox" name="pattern" value="Prints" onchange="searchFilter()">
						  <span class="checkmark"></span>
						</label>
			        </li>
			    </ul>
        	</div>
	        <div>
	            <ul style="padding-left: 0px;">
	            	<br><br><div class="hitem" >Colour</div><br><br>
	                <li class="color-square" style="background:#A14141"></li>
	                <li class="color-square" style="background:#E24343"></li>
	                <li class="color-square" style="background:#404F92"></li>
	                <li class="color-square" style="background:#0D92B8"></li>
	                <li class="color-square" style="background:#202020"></li>	<br>
	                <li class="color-square" style="background:#5D4935"></li>
	                <li class="color-square" style="background:#F07B42"></li>
	                <li class="color-square" style="background:#EDCA3E"></li>
	                <li class="color-square" style="background:#F3E8D2"></li>
	                <li class="color-square" style="background:#505155"></li>
	            </ul>
	        </div>
    	</div>
	</div>
	<div class="col-md-9">
		<div class="post-list" id="postList">
			<?php foreach($query as $row) {
					$category=str_replace(' ', '-', $row->category);
					$title=str_replace(' ', '-', $row->title);?>
			<div class="col-md-4" style="padding: 10px;">
				<div class="tile" >
					<a href="<?php echo base_url("index.php/product/details/$category/$title"); ?>">
						<div class="col-md-12 cover-img" style="background-image: url('<?php echo base_url();?>uploads/thumb/<?php echo $row->picture;?>');"></div>
						<p  class="text-center uc"><span><?php echo $row->title; ?></span><br><span class="rate">₹<?php echo $row->price;?></span></p>
					</a>
				</div>
			</div>
			<?php }?>
			<div class="row col-md-12 col-xs-12 text-center ">
	                <ul class="pagination center">
	                    <li><?php echo $links; ?></li>
	                </ul>
	        </div>
    	</div>
	</div>
</div>





