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
	    <div class="row">
		<div id="message" role="alert">
		</div>
	    </div>
            <div class="panel panel-default">
                <div class="panel-heading">Edit Form
                <a href="<?= site_url()?>admin/student_view" type="button" style="position: relative;width: 120px; " class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a>
                </div>
                <div class="panel-body">

                    <form role="form" method="post" data-toggle="validator" action="<?= site_url()?>admin/update_student_after_post/<?= $result->s_id; ?>/<?= $result->u_id; ?>" id="insert-form-submit">
                        <div class="row">
                            <div class="form-group has-feedback col-md-6">
                                <label>Student Name</label>
                                <input type="text" name="name" maxlength="50" minlength="3" style="color: white" class="form-control" placeholder="Name" value="<?php echo $result->name ?>" required>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                                <input type="hidden" id="url" name="url" value="<?=  site_url('admin/student_view')?>">
                            </div>
                            <div class="form-group has-feedback col-md-6">
                                <label>Father Name</label>
                                <input type="text" name="f_name" maxlength="50" minlength="3" style="color: white" class="form-control" placeholder="Father Name" value="<?php echo $result->f_name ?>" required>
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group has-feedback col-md-6">
                                <label>Age</label>
                                <input type="text" name="age" style="color: white" class="form-control" value="<?php echo $result->age ?>" placeholder="Age" required>
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                             <div class="form-group has-feedback col-md-6">
                                <label>Country</label>
                                <select type="text" name="country" class="form-control" readonly required style="background:#444D53; color:white;">
                                    <option value="<?php echo $result->country_id ?>" selected="selected"><?= $result->country_name?><option>
                                </select>
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="form-group has-feedback col-md-6">
                                <label>Province</label>
                                <select type="text" name="province" class="form-control" readonly required style="background:#444D53; color:white;">
                                    <option value="<?php echo $result->province_id ?>" selected="selected"><?= $result->state_name?><option>
                                </select>
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                            <div class="form-group has-feedback col-md-6">
                                <label>City</label>
                                <select type="text" name="city" class="form-control" readonly required style="background:#444D53; color:white;">
                                    <option value="<?php echo $result->city_id ?>"  selected="selected"><?= $result->city_name?><option>
                                </select>
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                        <div class="row">
                           
			    <div class="form-group has-feedback col-md-6">
                                <label>Village Address</label>
                                <input type="text" name="address" style="color: white" class="form-control" placeholder="Address" value="<?php echo $result->address ?>" required>
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                            <div class="form-group has-feedback col-md-6">
                                <label>Email</label>
                                <input type="email" name="email" style="color: white" class="form-control" placeholder="Email" value="<?php echo $result->email ?>" required>
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                        <div class="row">
                             <div class="form-group has-feedback col-md-6">
                                <label>Qualification</label>
                                <input type="text" name="qualification" style="color: white" class="form-control" placeholder="Qualification" value="<?php echo $result->qualification ?>" required>
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                            <div class="form-group has-feedback col-md-6">
                                <label>Profession</label>
                                <input type="text" name="profession" style="color: white" class="form-control" placeholder="Profession" value="<?php echo $result->profession ?>" required>
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="form-group has-feedback col-md-6">
                                <label>Contact</label>
                                <input type="text" name="number" pattern="(?=.*\d).{7,15}" maxlength="15" minlength="7"  style="color: white" class="form-control" placeholder="Contact" value="<?php echo $result->contact ?>" required>
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                            <div class="form-group has-feedback col-md-6">
                                <label>Guardian Number</label>
                                <input type="text" pattern="(?=.*\d).{7,15}" maxlength="15" minlength="7"  name="g_number" style="color: white" class="form-control" placeholder="Guardian Number" value="<?php echo $result->guardian_number ?>" required>
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                       
                         <div class="row">
                            <div class="form-group has-feedback col-md-6">
                                <label>Course </label>
                                 <select type="text" name="course_detail" class="form-control" readonly required style="background:#444D53; color:white;">
                                    <option value="<?php echo $result->course_id ?>" selected="selected"><?= $result->course_title?><option>
                                 </select>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                              <div class="form-group has-feedback col-md-6">
                                <label>Course Category</label>
                                 <select type="text" name="course_category" class="form-control" readonly required style="background:#444D53; color:white;">
                                    <option value="<?php echo $result->course_c_id ?>" selected="selected"><?= $result->category_title?><option>
                                 </select>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                         </div>
                        <div class="row">
                              <div class="form-group has-feedback col-md-6">
                                <label>Subject </label>
                                 <select type="text" name="category_subject" class="form-control" readonly required style="background:#444D53; color:white;">
                                    <option value="<?php echo $result->course_c_s_id ?>" selected="selected"><?= $result->subject_title?><option>
                                 </select>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                             <div class="form-group has-feedback col-md-6">
                                <label> Class Timing</label>
                                <input type="text" name="class_timing" style="color: white" class="form-control" placeholder="Class Timing" value="<?= $result->class_timing?>" required>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                        <div class="row-margin-top"></div>
                       
                        
                        <div class="row">
                          
                            <div class=" col-sm-10">
                                <button type="submit" class="btn btn-primary col-sm-2">Submit</button>
                            </div>
                    </form>

                </div>
            </div>
        </div><!-- /.col-->
    </div>
    </div>
</div>