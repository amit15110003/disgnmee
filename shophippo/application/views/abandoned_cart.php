<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
        <div class="row">
        <div class="col-xs-12">
         <div class="box">
            <div class="box-header">
              <h3 class="box-title">User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Username</th>
                  <th>Contact</th>
                  <th>Email</th>
                  <th>Product</th>
                </tr>
                </thead>
                <tbody>
                <?php
        foreach( $query as $row)
          {?>
                <tr>
                  <td><?php echo $row->id; ?></td>
                  <td><?php echo $row->name; ?></td>
                  <td><?php echo $row->mob; ?></td>
                  <td><?php echo $row->email; ?></td>
                  <td><?php $pid = explode(",", $row->pid);
                  foreach($pid as $item) {$details1=$this->user->get_product_id($item);?><img src="<?php echo base_url();?>../uploads/<?php echo $details1[0]->picture;?>" style="height:90px;padding:2px;"><?php }?></td>
                </tr>
                 <?php }?>
                </tfoot>
              </table>
              <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <!--<li><?php echo $links; ?></li>-->
              </ul>
            </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
     
    </section>

    
  </div>