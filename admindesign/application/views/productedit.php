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
              <?php foreach ($query3 as $row) { ?>
                <option value="<?php echo $row->id;?>" <?php if($category==$row->id){echo "selected";}?>><?php echo $row->category; echo " - "; echo $row->name;?></option>
              <?php }?>
            </select>
          </div>
          <div class="form-group">
            <label>Price</label>
              <input type="number" class="form-control"  name="price" value="<?php echo $price;?>" required>
          </div>
          <div class="form-group">
            <label for="sehir">Color</label>
            <select id="dates-field2" class="multiselect-ui form-control" name="color">
              <?php
          foreach( $query4 as $row)
            {?>
                <option value="<?php echo $row->colorcode;?>" <?php if($color==$row->colorcode){echo "selected";}?>><?php echo $row->color; ?></option>
                <?php }?>
            </select>
          </div>

              <div class="form-group">
                <label for="sehir">Ocassion</label>
                <select id="dates-field2" class="multiselect-ui form-control" name="ocassion">
                    <option value="Formal" <?php if($ocassion=="Formal"){echo "selected";}?>>Formal</option>
                    <option value="Causal" <?php if($ocassion=="Causal"){echo "selected";}?>>Causal</option>
                    <option value="Festive" <?php if($ocassion=="Festive"){echo "selected";}?>>Festive</option>
                </select>
              </div>

              <div class="form-group">
                <label for="sehir">Fabric</label>
                <select id="dates-field2" class="multiselect-ui form-control" name="fabric">
                    <option value="Cotton" <?php if($fabric=="Cotton"){echo "selected";}?>>Cotton</option>
                    <option value="Linen" <?php if($fabric=="Linen"){echo "selected";}?>>Linen</option>
                    <option value="Chambray" <?php if($fabric=="Chambray"){echo "selected";}?>>Chambray</option>
                    <option value="Flannel" <?php if($fabric=="Flannel"){echo "selected";}?>>Flannel</option>
                </select>
              </div>

              <div class="form-group">
                <label for="sehir">Pattern</label>
                <select id="dates-field2" class="multiselect-ui form-control" name="pattern">
                    <option value="Solids" <?php if($pattern=="Solids"){echo "selected";}?>>Solids</option>
                    <option value="Strips" <?php if($pattern=="Strips"){echo "selected";}?>>sStrips</option>
                    <option value="Checks" <?php if($pattern=="Checks"){echo "selected";}?>>Checks</option>
                    <option value="Prints" <?php if($pattern=="Prints"){echo "selected";}?>>Prints</option>
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
      <img src="<?php echo base_url(); ?>../uploads/thumb/<?php echo $row->img; ?>" class="img-responsive center-block">
       <a href="" onclick="javascript:remove_image(<?php echo $row->id;?>);" class="btn btn-danger center-block">Remove</a>
        <input type="hidden" value="<?php echo $row->img; ?>" id="image_<?php echo $row->id;?>">
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



<script type="text/javascript">
    function remove_image(postid)
    {  var name =$('#image_'+postid).val();
        var r =confirm("Confirm to Delete");
        if (r == true) {
            $.ajax({
                    type: "POST",
                     url: "<?php echo site_url('admin/remove_image');?>",
                    data:'&id='+postid+'&name='+name,
                    success: function (response) {
                    }
                });
} else {
    txt = "You pressed Cancel!";
}
    }
  </script>

<script type="text/javascript">
$(document).ready(function() {
    $('#upload').bind("click",function() 
    { 
        var imgVal = $('#uploadfile').val(); 
        if(imgVal=='') 
        { 
            alert("empty input file"); 
            return false; 
        } 


    }); 
});
</script> 