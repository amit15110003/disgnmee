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