<div class="content-wrapper">
<section class="content" style="padding-top: 100px;">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
      <div class="box box-primary">
        <?php $attributes = array("name" => "attribute");
      echo form_open("admin/attribute/$productid", $attributes);?>
          <div class="box-body">
            <input type="Hidden" name="productid" value="<?php echo $productid;?>" >
            <div class="form-group">
                <label>Hem</label>
                <select class="form-control select2" style="width: 100%;" name="hem">
                  <option value="Type 1" <?php if($hem=="Type 1"){echo "selected";} ?>>Type 1</option>
                  <option value="Type 2" <?php if($hem=="Type 2"){echo "selected";} ?>>Type 2</option>
                </select>
            </div>
            <div class="form-group">
                <label>Cuff</label>
                <select class="form-control select2" style="width: 100%;" name="cuff">
                  <option value="French Cuff" <?php if($cuff=="French Cuff"){echo "selected";} ?> >French Cuff</option>
                  <option value="Single Round Cuff" <?php if($cuff=="Single Round Cuff"){echo "selected";} ?>  >Single Round Cuff</option>
                  <option value="Two Button Cuff" <?php if($cuff=="Two Button Cuff"){echo "selected";} ?> >Two Button Cuff</option>
                </select>
            </div>
            <div class="form-group">
                <label>Collar</label>
                <select class="form-control select2" style="width: 100%;" name="collar">
                  <option value="Button Down Collar"<?php if($collar=="Button Down Collar"){echo "selected";} ?> >Button Down Collar</option>
                  <option value="Spread Collar" <?php if($collar=="Spread Collar"){echo "selected";} ?>>Spread Collar</option>
                  <option value="Band Collar" <?php if($collar=="Band Collar"){echo "selected";} ?>>Band Collar</option>
                  <option value="Cutaway Collar" <?php if($collar=="Cutaway Collar"){echo "selected";} ?>>Cutaway Collar</option>
                  <option value="Hidden Button Collar" <?php if($collar=="Hidden Button Collar"){echo "selected";} ?>>Hidden Button Collar</option>
                  <option value="Pin Collars" <?php if($collar=="Pin Collars"){echo "selected";} ?>>Pin Collars</option>
                  <option value="Classic Collar" <?php if($collar=="Classic Collar"){echo "selected";} ?>>Classic Collar/option>
                  <option value="Straight Point Collar" <?php if($collar=="Straight Point Collar"){echo "selected";} ?>>Straight Point Collar</option>
                  <option value="Winged Tip Collar" <?php if($collar=="Winged Tip Collar"){echo "selected";} ?>>Winged Tip Collar</option>
                  <option value="Club Collar" <?php if($collar=="Club Collar"){echo "selected";} ?>>Club Collar</option>
                </select>
            </div>
            <div class="form-group">
                <label>Sleeve</label>
                <select class="form-control select2" style="width: 100%;" name="sleeve">
                  <option value="Half Sleeve" <?php if($sleeve=="Half Sleeve"){echo "selected";} ?>>Half Sleeve</option>
                  <option value="Full Sleeve" <?php if($sleeve=="Full Sleeve"){echo "selected";} ?>>Full Sleeve</option>
                </select>
            </div>
            <div class="form-group">
                <label>Placket</label>
                <select class="form-control select2" style="width: 100%;" name="placket">
                  <option value="Conventional" <?php if($placket=="Conventional"){echo "selected";} ?>>Conventional</option>
                  <option value="Concealed" <?php if($placket=="Concealed"){echo "selected";} ?>>Concealed</option>
                  <option value="French" <?php if($placket=="French"){echo "selected";} ?>>French</option>
                  <option value="Contrast" <?php if($placket=="Contrast"){echo "selected";} ?>>Contrast</option>
                </select>
            </div>
          </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
          <?php echo form_close(); ?>
          </div>
          </div>
          </div>
         
          </div>
          <!-- /.box -->
          </section>