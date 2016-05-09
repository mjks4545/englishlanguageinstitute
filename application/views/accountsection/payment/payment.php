<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Accounts / payment</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Payment</h1>
        </div>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-10 margin_left">
            <div class="panel panel-default">
                <div class="panel-heading">Payment
                <a href="<?= site_url()?>accountsection/account_index" type="button" style="position: relative;width: 120px; " class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a>
                </div>
                <div class="panel-body">

                    <form role="form" method="post" action="<?= site_url()?>accountsection/student_data">
                        <input type="hidden" name="student_id" value="">
                        <div class="row margin_left">
                            <div class="col-md-1"></div>
                            <div class="form-group col-md-6">
                                <label>Enter Registration Number</label>
                                <input type="text" name="find_registration" style="color: white" class="form-control" placeholder="Enter Registration Number" >
                            </div>
                             <div class=" col-sm-4">
                                 <a href="<?= site_url() . 'accountsection/student_data'?>"style="position: relative;top: 25px;" type="submit" class="btn btn-primary col-sm-3">Submit</a>
                            </div>
                            
                        </div>
                            
                        <div class="row">
                            <div class=" col-md-12">
                                
                            </div>

                         </div>
                  
                    </form>

                </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
    </div>
</div>
</div>