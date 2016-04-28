
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
                    <a href="" onclick="payment" type="button" style="position: relative;left:40px; width: 120px;" class="btn btn-primary btn-outline margin  pull-right"><b>Pay Dues</b></a>
                
                </div>
               
                <div class="panel-body">
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
                               </tr>
                               </thead>
                               <tbody>
                               <?php 
                               foreach ($payment as $array){?>
                                    <?php 
                                           
                                            $total_fee     = $array->admission_fee + $array->monthly_fee;
                                            $remaining_fee = $total_fee - $array->received_fee 
                                    ?>
                               <tr>
                                   <td class="text-center"><?=$result->created_at?></td>
                                   <td class="text-center"><?=$result->name?></td>
                                   <td class="text-center"><?=$result->f_name?></td>
                                   <td class="text-center"><?=$result->subject_title?></td>
                                   <td class="text-center"><?=$total_fee?></td>
                                   <td class="text-center"><?=$array->received_fee?></td>
                                   <td class="text-center"><?= $remaining_fee?></td>
                               </tr>
                               <?php }?>
                               </tbody>

                           </table><br><br>
                            <form role="form" method="post" action="<?= site_url()?>accountsection/remaining_balance"> 
                                <input type="hidden" name="user_id" value="<?= $result->u_id?>">
                                <div id="payment" class="row">
                                <div class="form-group col-md-3"></div>
                                <div class="form-group col-md-6">
                                    <label>Pay Remaining Amount</label>
                                    <input type="text" name="pay_remaining" style="color: white" class="form-control" placeholder="Pay Remaining Amount" required>
                                </div>
                                 <div class=" col-sm-3">
                                     <a href="<?=  site_url() . ''?>/<?= $result->u_id?>"style="position: relative;right: 10px;top: 25px; width: 70px" type="submit" class="btn btn-primary col-sm-1">Submit</a>
                                    </div>
                                </div>
                            </form>   
                     
        </div><!-- /.col-->
    </div><!-- /.row -->
    </div>
  </div>

