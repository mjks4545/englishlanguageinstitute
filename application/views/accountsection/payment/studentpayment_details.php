
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Student Payments Details</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Payments details</h1>
        </div>
    </div><!--/.row-->
 

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"></h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Student payment detail
                    <a href="<?= site_url()?>accountsection/payment" type="button" style="position: relative;width: 120px;" class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a>
                   
                
                </div>
               
                <div class="panel-body">
                             <?php 
                                $received_fee = 0;
                                $fee_to_paid  = 0;
                                foreach ($payment as $array){
                                    if( $array->tobepaid_or_paid_fee == 1 ){
                                        $received_fee += $array->amount;
                                    }else{
                                        $fee_to_paid += $array->amount;
                                    }
                                }
                                $remaining_amount = $fee_to_paid - $received_fee;
                              ?>
                           <table data-toggle="table" data-show-refresh="false" data-search="false" data-pagination="false" data-sort-name="false" data-sort-order="false">
                               <thead>
                               <tr>
                                   <th class="text-center" data-sortable="true"><b>Date</b></th>
                                   <th class="text-center" data-sortable="true"><b>Student Name</b></th>
                                   <th class="text-center" data-sortable="true"><b>Father Name</b></th>
                                   <th class="text-center" data-sortable="true"><b>Course</b></th>
                                   <th class="text-center" data-sortable="true"><b>Total Amount</b></th>
                                   <th class="text-center" data-sortable="true"><b>Paid Amount</b></th>
                                   <th class="text-center" data-sortable="true"><b>Remaining Amount</b></th>
                                   <?php if ($remaining_amount > 0) {?>
                                   <th class="text-center" data-sortable="true"><b>Action</b></th>
                                   <?php }?>
                               </tr>
                               </thead>
                              
                               <tbody>
                               
                               <tr>
                                   <td class="text-center"><?=$result->created_at?></td>
                                   <td class="text-center"><?=$result->name?></td>
                                   <td class="text-center"><?=$result->f_name?></td>
                                   <td class="text-center"><?=$result->subject_title?></td>
                                   <td class="text-center"><?=$fee_to_paid?></td>
                                   <td class="text-center"><?=$received_fee?></td>
                                   <td class="text-center"><?= $remaining_amount?></td>
                                   <?php if ($remaining_amount > 0) {?>
                                   <td class="align-center" >
                                       <a href="<?= site_url()?>accountsection/payment_invoice/<?= $result->s_id ?>"type="button"  class="btn btn-primary btn-outline glyphicon glyphicon-print margin align-center"><b>&nbsp;Print Invoice</b></a>
                                       <button onclick="location.href='<?= site_url()?>accountsection/payment_remaining/<?= $result->s_id ?>'" type="button"  class="btn btn-primary btn-outline margin align-center"><b>Pay Dues</b></button>

                                   </td>
                                   <?php }?>
                               </tr>
                               
                               </tbody>

                           </table><br><br>
                            
                     
        </div><!-- /.col-->
    </div><!-- /.row -->
    </div>
  </div>

