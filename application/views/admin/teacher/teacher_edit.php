<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Admin / Edit Teacher</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Update Teacher</h1>
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
                <div class="panel-heading">Edit Form
                 <a href="<?= site_url()?>admin/teacher_view" type="button" style="position: relative;width: 120px;" class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a> 
                </div>
                <div class="panel-body">

                    <form role="form" method="post" action="<?= site_url()?>admin/update_teacher_after_post/<?= $result->t_id; ?>/<?= $result->u_id; ?>" id="insert-form-submit" >
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Teacher Name</label>
                                <input type="text" name="name" style="color: white" class="form-control" placeholder="Name" value="<?= $result->name?>" required>
				<input type="hidden" id="url" name="url" value="<?=  site_url('admin/teacher_view')?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Father Name</label>
                                <input type="text" name="f_name" style="color: white" class="form-control" placeholder="Father Name" value="<?= $result->f_name?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Qualification</label>
                                <input type="text" name="qualification" style="color: white" class="form-control" placeholder="Qualification" value="<?= $result->qualification?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Email</label>
                                <input type="email" name="email" style="color: white" class="form-control" placeholder="Email" value="<?= $result->email?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Age</label>
                                <input type="text" name="age" style="color: white" class="form-control" placeholder="Age" value="<?= $result->age?>" required>
                            </div>
                             <div class="form-group col-md-6">
                                <label>Salary</label>
                                <input type="text" name="salary" style="color: white" class="form-control" placeholder="Salary" value="<?= $result->salary?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Contact</label>
                                <input type="text" name="number" style="color: white" class="form-control" placeholder="Contact" value="<?= $result->contact?>" required>
                            </div>
                             <div class="form-group col-md-6">
                                <label>Subject Specialities</label>
                                <input type="text" name="subject" style="color: white" class="form-control" placeholder="Subject" value="<?= $result->subject?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Classes Assign</label>
                                <input type="text" name="class_assign" style="color: white" class="form-control" placeholder="Assign Classes" value="<?= $result->class_assign?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Country</label>
                                <select type="text" name="country" class="form-control" readonly required style="background:#444D53; color:white;">
                                    <option value="<?php echo $result->country_id ?>" selected="selected"><?= $result->country_name?><option>
                                </select>
                            </div>
                        </div>
                         <div class="row">
                            <div class="form-group col-md-6">
                                <label>Province</label>
                                <select type="text" name="province" class="form-control" readonly required style="background:#444D53; color:white;">
                                    <option value="<?php echo $result->province_id ?>" selected="selected"><?= $result->state_name?><option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>City</label>
                                <select type="text" name="city" class="form-control" readonly required style="background:#444D53; color:white;">
                                    <option value="<?php echo $result->city_id ?>"  selected="selected"><?= $result->city_name?><option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
			    <div class="form-group col-md-12">
                                <label>Village Address</label>
                                <input type="text" name="address" style="color: white" class="form-control" placeholder="Address" value="<?php echo $result->address ?>" required>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Description</label>
                                    <textarea type="text" name="description" style="color: white" class="form-control" placeholder="Write something here..!!" cols="12" rows="8"><?= $result->description?></textarea>
                                </div>
                            </div>
                            <div class=" col-sm-10">
                                <button style="position: relative;top: 10px;" type="submit" class="btn btn-primary col-sm-2">Update</button>
                            </div>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div>
    </div>
</div>