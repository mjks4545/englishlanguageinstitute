<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Admin / Add Staff</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add New Staff</h1>
        </div>
    </div><!--/.row-->
    <br />
    <div class="row">
        <div id="message" role="alert">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Add Form
                <a href="<?= site_url()?>otherstaff/staff_index" type="button" style="position: relative;width: 120px;" class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a>
                </div>
		
		<div class="row">
		    <div id="message" role="alert">
		    </div>
		</div>
                <div class="panel-body">

                    <form role="form" method="post" data-toggle="validator" action="<?= site_url()?>otherstaff/add_new_staff_after_post">
                        <div class="row">
                            <div class="form-group has-feedback col-md-6">
                                <label>Name</label>
                                <input type="text" name="name" maxlength="50" minlength="3" style="color: white" class="form-control" placeholder="Name" required>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                            <div class="form-group has-feedback col-md-6">
                                <label>Father Name</label>
                                <input type="text" name="f_name" maxlength="50" minlength="3"  style="color: white" class="form-control" placeholder="Father Name" required>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group has-feedback col-md-6">
                                <label>Qualification</label>
                                <input type="text" name="qualification" style="color: white" class="form-control" placeholder="Qualification" required>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                            <div class="form-group has-feedback col-md-6">
                                <label>Profession</label>
                                <input type="text" name="profession" style="color: white" class="form-control" placeholder="Profession" required>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group has-feedback col-md-6">
                                <label>Address</label>
                                <input type="text" name="address" style="color: white" class="form-control" placeholder="Address" required>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                           <div class="form-group has-feedback col-md-6">
                                <label>Salary</label>
                                <input type="text" name="salary" style="color: white" class="form-control" placeholder="Salary" required>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group has-feedback col-md-6">
                                <label>Contact</label>
                                <input type="text" name="number" maxlength="15" minlength="10"  style="color: white" class="form-control" placeholder="Contact" required>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                            <div class="form-group has-feedback col-md-6">
                                <label>Contract Time</label>
                                <input type="text" name="contract_time" style="color: white" class="form-control" placeholder="Contract Time" required>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group has-feedback col-md-6">
                                <label>Job Hours</label>
                                <input type="text" name="job_hours" style="color: white" class="form-control" placeholder="Job Hours" required>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                            <div class="form-group has-feedback col-md-6">
                                <label>Appointment Date</label>
                                <input type="date" name="appoint_date" style="color: white" class="form-control" placeholder="Appointment Date" required>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class=" col-sm-10">
                                <button style="position: relative;top: 10px;" type="submit" class="btn btn-primary col-sm-2">Submit</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div><!-- /.col-->
    </div>
</div> 
</div> 

