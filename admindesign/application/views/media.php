<div class="content-wrapper">
<section class="content">
      <div class="col-md-6 col-md-offset-3">
      <div class="box box-primary">
        <?php $attributes = array("name" => "product");
      echo form_open_multipart("admin/media1", $attributes);?>
          <div class="box-body">
              <div class="form-group">
              <label for="">Media</label>
                <input type="file" class="form-control"  name="picture" required >
              </div>
              </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary" name="submit" value="Upload">Submit</button>
            </div>
          <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>
          </div>
          </div>
      <div class="row">
      <div class="col-md-12">
      <?php if(!empty($query))
      foreach($query as $row){?>
      <div class="col-md-2">
      <img src="<?php echo base_url(); ?>../uploads/thumb/<?php echo $row->img; ?>" class="img-responsive center-block">
       <input value="<?php echo $row->img; ?>" class="col-md-12" >
      </div>
      <?php }?>
        </div>
        </div> 
          </section>


