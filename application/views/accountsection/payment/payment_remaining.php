<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Accounts / Remaining Pay</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Remaining Pay</h1>
        </div>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-10 margin_left">
            <div class="panel panel-default">
                <div class="panel-heading">Remaining Balance Submission
                <a href="<?= site_url()?>accountsection/studentpayment_details/<?=$result->s_id?>" type="button" style="position: relative;width: 120px; " class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a>
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
                    <form role="form" method="post" action="<?= site_url()?>accountsection/remaining_balance/<?=$result->s_id?>"> 
                        <div class="row">
                        <div class="form-group col-md-1"></div>
                        <div class="form-group col-md-6">
                            <label>Remaining Amount</label>
                            <input type="text"  style="background:#444D53; color:white;" class="form-control" placeholder="Remaining Amount" value="<?= $remaining_amount?>" readonly="">
                        </div>
                         
                        </div>
                        <div class="row">
                        <div class="form-group col-md-1"></div>
                        <div class="form-group col-md-6">
                            <label>Reason</label>
                            <input type="text" name="reason" style="background:#444D53; color:white;" class="form-control" placeholder="Reason" required="">
                        </div>
                         
                        </div>
                        <div class="row">
                        <div class="form-group col-md-1"></div>
                        <div class="form-group col-md-6">
                            <label>Type of fee</label>
                            <select type="text" name="fee_type" class="form-control"  required style="background:#444D53; color:white;">
                                <option>Select option</option>
                                <option value="Admission Fee">Admission Fee</option>
                                <option value="Monthly Fee">Monthly Fee</option>
                                <option value="Balance Fee">Balance Fee</option>
                            </select>
                        </div>
                        </div>
                        
                        <div class="row">
                      
                        <div class="form-group col-md-1"></div>
                        <div class="form-group col-md-6">
                            <label>Pay Remaining Amount</label>
                            <input type="text" name="pay_remaining" style="color: white" class="form-control" placeholder="Pay Remaining Amount" required>
                        </div>
                        </div>
                        <div class="row">
                         <div class="form-group col-md-1"></div>
                         <div class="form-group col-md-6">
                             <button style="position: relative;top: 15px;" type="submit" class="btn btn-primary col-sm-4">Submit</button>
                         </div>
                        </div>
                        
                    </form>   

                </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
    </div>
</div>
</div>


