<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
        <section class="content content_content" style="width: 70%; margin: auto;">
                    <section class="invoice">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-xs-12">
                                <h2 class="page-header">
                                <img src="<?php echo base_url(); ?>media/images/logosm.png" height="60" alt="">
                                    <small class="pull-right">Date: <?php foreach($query as $row){
                          $time = date(' dS M Y', strtotime($row->dpo));}
                        echo $time; ?></small>
                                </h2>
                            </div><!-- /.col -->
                        </div>
                        <!-- info row -->
                        <?php $details2= $this->user->getorderadd($id); ?>
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                Billing Address
                                <address>
                                     <p style="text-transform:capitalize;"><?php echo "<b>"; echo $details2[0]->billing_name;echo "</b>"; echo "<br>"; echo "Adress: ";echo $details2[0]->billing_address;echo ", ";echo $details2[0]->billing_city;echo "<br>"; echo $details2[0]->billing_state; echo ", "; echo "Pin:"; echo $details2[0]->billing_zip;echo "<br>"; echo $details2[0]->billing_tel; ?></p>
                                </address>
                            </div><!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                Shipping Address
                                <address>
                                    <p style="text-transform:capitalize;"><?php echo "<b>"; echo $details2[0]->delivery_name; echo "</b>"; echo "<br>"; echo "Adress: ";echo $details2[0]->delivery_address;echo ", ";echo $details2[0]->delivery_city;echo "<br>"; echo $details2[0]->delivery_state; echo ", "; echo "Pin:"; echo $details2[0]->delivery_zip;echo "<br>"; echo $details2[0]->delivery_tel; ?></p>                             </address>
                            </div><!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                <b>Invoice #<?php echo $id;?></b><br>
                                <br>
                                <b>Order ID:</b> HIPPO<?php echo $id;?><br>
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                            <div class="col-xs-12 table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Product</th>
                                            <th>Qty</th>
                                             <th>Price</th>
                                            <th>Sub Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                      <?php
                                      foreach( $query as $row)
                                      {$details=$this->user->get_product_id($row->productid);?>
                                                                                <tr>
                                            <td class="product-thumbnail"><a class="reveal-inline-block"><img src="<?php echo base_url(); ?>../uploads/<?php echo $details[0]->picture; ?>" width="100" height="100" alt=""></a></td>
                                            <td style="text-transform: capitalize;"><?php  echo $details[0]->title;?></td>
                                            <td><?php echo $row->item; ?></td>
                                            <td><?php  echo $row->cost;?> INR</td>
                                            <td><?php  echo $row->cost*$row->item; ?> INR</td>
                                        </tr>
                                      <?php }?>                                      </tbody>
                                </table>
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            
                                            
                                            <tr>
                                                <td></td>
                                                <td>Total:</td>
                                                <td><?php echo "<b>"; echo $details2[0]->amount;?> INR</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-xs-12">
                                <a href="<?php echo base_url().'index.php/admin/orderprint/'.$row->orderid; ?>" target="_blank"><i class="fa fa-print"></i> Print</a>
                                <a href="<?php echo base_url().'index.php/admin/orderprinthtml/'.$row->orderid; ?>" target="_blank" class="pull-right"><i class="fa fa-print"></i> Print html</a>
                            </div>
                        </div>
                    </section>
                </section>
     
    </section>

    
  </div>