<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Admin / Add Teacher</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add New Teacher</h1>
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
                <a href="<?= site_url()?>admin/index" type="button" style="position: relative;width: 120px;" class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a>
                </div>
		
		<div class="row">
		    <div id="message" role="alert">
		    </div>
		</div>
                <div class="panel-body">

                    <form role="form" method="post" data-toggle="validator" action="<?= site_url()?>admin/create_teacher_after_post" id="insert-form-submit">
                        <div class="row">
                            <div class="form-group has-feedback col-md-6">
                                <label>Teacher Name</label>
                                <input type="text" name="name" maxlength="50" minlength="3" style="color: white" class="form-control" placeholder="Name" required>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                                <input type="hidden" id="url" name="url" value="<?=  site_url('admin/teacher_view')?>">
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
                                <label>Email</label>
                                <input type="email" name="email" style="color: white" class="form-control" placeholder="Email" required>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group has-feedback col-md-6">
                                <label>Age</label>
                                <input type="text" name="age" style="color: white" class="form-control" placeholder="Age" required>
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
                                <input type="text" name="number" pattern="(?=.*\d).{7,}" maxlength="15" minlength="7"  style="color: white" class="form-control" placeholder="Contact" required>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                            <div class="form-group has-feedback col-md-6">
                                <label>Subject Specialities</label>
                                <input type="text" name="subject" style="color: white" class="form-control" placeholder="Subject" required>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group has-feedback col-md-6">
                                <label>Classes Assign</label>
                                <input type="text" name="class_assign" style="color: white" class="form-control" placeholder="Assign Classes" required>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                            <div class="form-group has-feedback col-md-6">
                                <label>Country</label>
                              
				<select  name="country"  id="country" class="form-control" style="background:#444D53; color:white;">
				    <option value="#">Select Country</option>
				    <?php foreach ($result as $country){ ?>
					<option value="<?= $country->id;?>"><?= $country->country_name;?></option>
				    <?php } ?>
				</select>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
				
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group has-feedback col-md-6">
                                <label>Province</label>
                                <select  name="province"  id="province" class="form-control" style="background:#444D53; color:white;">
				    <option value="#">Select Province</option>
				</select>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                            <div class="form-group has-feedback col-md-6">
                                <label>City</label>
                                <select  name="city"  id="city" class="form-control" style="background:#444D53; color:white;">
				    <option value="#">Select City</option>
				</select>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                        <div class="row">
			    <div class="form-group has-feedback col-md-12">
                                <label>Village Address</label>
                                <input type="text" name="address" style="color: white" class="form-control" placeholder="Address" required>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="row">
                                <div class="form-group has-feedback col-md-12">
                                    <label>Description</label>
                                    <textarea  name="description" style="color: white; resize:none;" class="form-control" placeholder="Write something here..!!" cols="12" rows="8"></textarea>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                </div>
                            </div>
                            <div class=" col-sm-10">
                                <button style="position: relative;top: 10px;" type="submit" class="btn btn-primary col-sm-2">Submit</button>
                            </div>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div>
</div> 
</div> 