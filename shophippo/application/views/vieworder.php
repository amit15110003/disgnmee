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
                  <th>Order Id</th>
                  <th>Address</th>
                  <th></th>
                  <th>Payment Status</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
        foreach( $query as $row)
          {?>
                <tr>
                  <td><?php echo $row->orderid; ?></td>
                  <td><?php $details2= $this->user->getorderadd($row->orderid);
                       if(!empty($details2)){echo "<b>"; echo $details2[0]->delivery_name; echo "</b>"; echo "<br>"; echo "Adress: ";echo $details2[0]->delivery_address;echo ", ";echo $details2[0]->delivery_city;echo "<br>"; echo $details2[0]->delivery_state; echo ", "; echo "Pin:"; echo $details2[0]->delivery_zip;echo "<br>"; echo $details2[0]->delivery_tel; }?></td>
                  <td></td>
                  <td><?php echo $row->status; ?></td>
                  <td><p>Current Status:<?php echo $row->status1; ?></p><?php if($row->status=='Success' && $row->status1=='Dispatched'){?><a  class="btn btn-primary" href="<?php echo base_url().'index.php/admin/delivered/'.$row->orderid; ?>">Delivered</a><?php }?>
                      <?php if($row->status=='Success'&& $row->status1=='Processing'){?><a  class="btn btn-primary" href="<?php echo base_url().'index.php/admin/orderproceed/'.$row->orderid; ?>">Dispatched</a><?php }?>
                      <?php if($row->status=='Success' && empty($row->status1)){?><a  class="btn btn-primary" href="<?php echo base_url().'index.php/admin/orderprocessing/'.$row->orderid; ?>">Processing</a><?php }?>
                      <?php if($row->status=='Failure' || $row->status=='Invalid'){?><a  class="btn btn-primary" href="<?php echo base_url().'index.php/admin/orderreminder/'.$row->orderid; ?>">Reminder Mail</a><?php }?>
                  </td>
                  <td><a  class="btn btn-primary" href="<?php echo base_url().'index.php/admin/orderview/'.$row->orderid; ?>">View</a></td>
                </tr>
                 <?php }?>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
     
    </section>

    
  </div>