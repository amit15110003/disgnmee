<div class="content-wrapper">
<section class="content">
        <div class="col-md-3 ">
      <img src="<?php echo base_url(); ?>../uploads/thumb/<?php echo $picture; ?>" class="img-responsive center-block">
       <?php if($status=='pending'){?><a  class="btn btn-primary" href="<?php echo base_url().'index.php/admin/status/'.$productid; ?>"><?php echo $status; ?></a><?php } else{?><a  class="btn btn-primary" href="<?php echo base_url().'index.php/admin/status1/'.$productid; ?>"><?php echo $status; ?></a><?php }?>
      </div>
      <div class="col-md-6 ">
      <div class="box box-primary">
        <?php $attributes = array("name" => "product");
      echo form_open_multipart("admin/updateproduct", $attributes);?>
          <div class="box-body">
          <div class="form-group">
            <input type="hidden" class="form-control"  name="productid" required value="<?php echo $productid;?>">
          </div>
          <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control"  name="title" required value="<?php echo $title;?>">
          </div>
          <div class="form-group">
            <label for="">Description</label>
            <textarea class="form-control" rows="3" name="descr" required ><?php echo $Descr;?></textarea>
          </div>
          <div class="form-group">
                <label>Category</label>
                <select class="form-control select2" style="width: 100%;" name="category">
                  <option value="Men" <?php if($category=='Men'){echo "selected";}?>>Men</option>
                  <option value="Women" <?php if($category=='Women'){echo "selected";}?>>Women</option>
                </select>
          </div>
          <div class="form-group">
            <label>type</label>
            <select class="form-control select2" style="width: 100%;" name="type">
              <option value="Pant" <?php if($type=='Pant'){echo "selected";}?>>Pant</option>
              <option value="Shirt" <?php if($type=='Shirt'){echo "selected";}?>>Shirt</option>
            </select>
          </div>
          <div class="form-group">
            <label>Price</label>
              <input type="number" class="form-control"  name="price" value="<?php echo $price;?>" required>
          </div>
          <div class="form-group">
            <label for="sehir">Tag</label>
            <select id="dates-field2" class="multiselect-ui form-control" multiple="multiple" name="tag[]">
              <?php
          foreach( $query4 as $row)
            {?>
                <option value="<?php echo $row->tag;?>"><?php echo $row->tag; ?></option>
                <?php }?>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" id="exampleInputFile" name="picture">
            <input type="hidden" id="exampleInputFile" name="delpicture" value="<?php echo $picture;?>">
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
      <?php foreach($query2 as $row){?>
      <div class="col-md-3 ">
      <img src="<?php echo base_url(); ?>../uploads/thumb/<?php echo $row->img; ?>">
      </div>
      <?php }?>
      <div class="row" style="margin-top: 40px;">
      <div class="col-md-6 col-md-offset-3">
      <div class="box box-primary">
        <?php $attributes = array("name" => "product");
      echo form_open_multipart("admin/productedit", $attributes);?>
          <div class="box-body">
          <input value="<?php echo $productid; ?>" id="first_name" type="hidden" class="validate" name="id">
              <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile" name="picture">
                </div>
              </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary" class="btn btn-default" name="userSubmit" value="Add">Submit</button>
            </div>
          <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>
          </div>
          </div>
          </div>

         
          </section>



