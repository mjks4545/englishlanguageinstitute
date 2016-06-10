<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Admin / Edit Student</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Update Student</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Form</div>
                <div class="panel-body">

                    <form role="form" method="post" data-toggle="validator" action="<?= site_url()?>admin/update_student_after_post/<?= $result->s_id; ?>/<?= $result->u_id; ?>">
                        <div class="row">
                            <div class="form-group has-feedback col-md-6">
                                <label>Student Name</label>
                                <input type="text" name="name" maxlength="50" minlength="3" style="color: white" class="form-control" placeholder="Name" value="<?php echo $result->name ?>" required>
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                            <div class="form-group has-feedback col-md-6">
                                <label>Father Name</label>
                                <input type="text" name="f_name" maxlength="50" minlength="3" style="color: white" class="form-control" placeholder="Father Name" value="<?php echo $result->f_name ?>" required>
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group has-feedback col-md-6">
                                <label>Reg Number</label>
                                <input type="text" name="reg_number" style="color: white" class="form-control" placeholder="Registration Number" value="<?php echo $result->reg_number ?>" required>
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                            <div class="form-group has-feedback col-md-6">
                                <label>Previous Degree</label>
                                <input type="text" name="pre_degree" style="color: white" class="form-control" placeholder="Previous Degree" value="<?php echo $result->pre_degree ?>" required>
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group has-feedback col-md-6">
                                <label>Nationality</label>
                                <input type="text" name="nationality" style="color: white" class="form-control" placeholder="Nationality" value="<?php echo $result->nationality ?>" required>
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                            <div class="form-group has-feedback col-md-6">
                                <label>Age</label>
                                <input type="text" name="age" style="color: white" class="form-control" placeholder="Age" value="<?php echo $result->age ?>" required>
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group has-feedback col-md-6">
                                <label>Email</label>
                                <input type="email" name="email" style="color: white" class="form-control" placeholder="Email" value="<?php echo $result->email ?>" required>
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                            <div class="form-group has-feedback col-md-6">
                                <label>Guardian Number</label>
                                <input type="text" maxlength="15" minlength="10" name="g_number" style="color: white" class="form-control" placeholder="Guardian Number" value="<?php echo $result->guardian_number ?>" required>
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group has-feedback col-md-6">
                                <label>Contact</label>
                                <input type="text" maxlength="15" minlength="10" pattern="/^\d+$/" name="number" style="color: white" class="form-control" placeholder="Contact" value="<?php echo $result->contact ?>" required>
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                            <div class="form-group has-feedback col-md-6">
                                <label>Course Details</label>
                                <input type="text" name="course_detail" style="color: white" class="form-control" placeholder="Courses" value="<?php echo $result->courses ?>" required>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group has-feedback col-md-6">
                                <label>Country</label>
                                <input type="text" name="country" class="form-control"  value="<?php echo $result->country_name ?>" readonly required style="background:#444D53; color:white;">
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                            <div class="form-group has-feedback col-md-6">
                                <label>Province</label>
                                <input type="text" name="province" class="form-control"  value="<?php echo $result->state_name ?>"  readonly required style="background:#444D53; color:white;">
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group has-feedback col-md-6">
                                <label>City</label>
                                <input type="text" name="city" style="background:#444D53; color:white;" class="form-control"  value="<?php echo $result->city_name ?>" readonly required >
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
			    <div class="form-group has-feedback col-md-6">
                                <label>Village Address</label>
                                <input type="text" name="address" style="color: white" class="form-control" placeholder="Address" value="<?php echo $result->address ?>" required>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                       
                        
                        <div class="row">
                            <div class="row">
                                <div class="form-group has-feedback col-md-12">
                                    <label>Description</label>
                                    <textarea type="text" name="description" style="color: white; resize:none;" class="form-control" placeholder="Write something here..!!"  cols="12" rows="8"><?php echo $result->description ?></textarea>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                </div>
                            </div>
                            <div class=" col-sm-10">
                                <button style="position: relative;top: 10px;" type="submit" class="btn btn-primary col-sm-1">Submit</button>
                            </div>
                    </form>

                </div>
            </div>
        </div><!-- /.col-->
    </div>
    </div>