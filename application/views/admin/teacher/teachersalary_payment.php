<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Teacher / Pay Salary</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Salary Payment</h1>
        </div>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-10 margin_left">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php foreach ($result as $array) {?>
                <a href="<?= site_url()?>admin/teachersalary_details/<?php echo $array->t_id; ?>" type="button" class="btn btn-primary btn-outline margin col-sm-1  pull-right"><b>Back</b></a>
                </div>
                <div class="panel-body">
                    
                    <form role="form" method="post" action="<?= site_url()?>admin/add_teacher_salary_after_post">
                        <div class="row">
                        <div class="form-group col-md-1"></div>
                        <input type="hidden" name="teacher_id" value="<?= $array->t_id?>">
                        <input type="hidden" name="name" value="<?= $array->name?>">
                        <div class="form-group col-md-6">
                            <label>Total Salary</label>
                            <input type="text" name="salary" style="background:#444D53; color:white;" class="form-control" value="<?= $array->salary?>" readonly="">
                        </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-1"></div>
                            <div class="form-group col-md-6">
                            <label>Paid Month</label>
                            <select name="paid_month" class="form-control" style="background:#444D53; color:white;">
                                <option value="1">Jan</option>
                                <option value="2">Feb</option>
                                <option value="3">Mar</option>
                                <option value="4">Apr</option>
                                <option value="5">May</option>
                                <option value="6">Jun</option>
                                <option value="7">Jul</option>
                                <option value="8">Aug</option>
                                <option value="9">Sep</option>
                                <option value="10">Oct</option>
                                <option value="11">Nov</option>
                                <option value="12">Dec</option>                               
                            </select>
                            </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-1"></div>
                        <div class="form-group col-md-6">
                            <label>Reason</label>
                            <input type="text" name="amount_reason" style=" color:white;" class="form-control" placeholder="Reason" required="">
                        </div>
                         
                        </div>
                        
                        <div class="row">
                      
                        <div class="form-group col-md-1"></div>
                        <div class="form-group col-md-6">
                            <label>Enter Amount</label>
                            <input type="text" name="payed_salary" style="color: white" class="form-control" placeholder="Enter Amount" required>
                        </div>
                        </div>
                        <div class="row">
                         <div class="form-group col-md-1"></div>
                         <div class="form-group col-md-6">
                             <button style="position: relative;top: 15px;" type="submit" class="btn btn-primary col-sm-4">Submit</button>
                         </div>
                        </div>
                        
                    </form>   
                    <?php }?>
                </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
    </div>
</div>


