<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Accounts / Expenses</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Expenses</h1>
        </div>
    </div><!--/.row-->
     
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div  class="panel-heading">Add Expanses Form
                <a href="<?= site_url()?>accountsection/expanses_index" type="button" style="position: relative;width: 120px;" class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a>
                </div>
                <div class="panel-body margin_left">
		    
                    <form role="form" method="post" data-toggle="validator" action="<?= site_url()?>expenses/add_new_expense"> 
                        <div class="row ">
                            <div class="form-group has-feedback col-md-6">
                                <label>Voucher Number</label>
                                <input type="text" name="v_number" style="color: white" class="form-control" placeholder="Voucher Number" >
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                            <div class="form-group has-feedback col-md-6">
                                <label>Cash Payment Date</label>
                                <input type="date" name="payment_date" style="color: white" class="form-control" placeholder="Payment Date" >
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="form-group has-feedback col-md-6">
                                <label>Cash Paid To</label>
                                <input type="text" name="paid_to" style="color: white" class="form-control" placeholder="Cash Paid To" >
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                            <div class="form-group has-feedback col-md-6">
                                <label>Of Rupees</label>
                                <input type="text" name="rupees" style="color: white" class="form-control" placeholder="Rupees" >
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="form-group has-feedback col-md-12">
                                <label>On Account Of</label>
                                <input type="text" name="account_of" style="color: white" class="form-control" placeholder="Account Of" >
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group has-feedback col-md-12">
                                <label>Description</label>
                                <textarea name="description" cols="12" rows="10" style="color: withe" class="form-control" placeholder="Write Description Here"></textarea>
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="form-group ">
                            <div class="col-md-12">
                                <label>Payment Mode</label>
                                <div class="radio">
                                    <label class="col-md-12">
                                        <div class="col-md-2">
                                        <input type="radio" name="payment_mode" value="Cash" checked>Cash
                                        </div>
                                        <div class="col-md-2">
                                        <input type="radio" name="payment_mode" value="Cheque">Cheque
                                        </div>
                                        <div class="col-md-2">
                                        <input type="radio" name="payment_mode" value="Other">Other
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        </div>
                         <div class="row">
                            <div class=" col-md-12">
                                <button style="position: relative;top: 10px;" type="submit" class="btn btn-primary col-sm-2">Submit</button>
                            </div>

                         </div>
                  
                    </form>

                </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
    </div>
</div>

