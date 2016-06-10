<?php
/*echo '<pre>';
print_r($result);
echo '</pre>';
die();*/
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Admin / Edit Visitor</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Update Visitor</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Form</div>
                <div class="panel-body">

                    <form role="form" data-toggle="validator" method="post" action="<?= site_url()?>admin/update_visitor_after_post/<?= $result->v_id; ?>/<?= $result->u_id; ?>">
                        <div class="row">
                            <div class="form-group has-feedback col-md-6">
                                <label>Name</label>
                                <input type="text" name="name" style="color: white" class="form-control" max-length="50" min-length="3" placeholder="Name" value="<?= $result->name?>" required>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                            <div class="form-group has-feedback col-md-6">
                                <label>Father Name</label>
                                <input type="text" name="f_name" style="color: white" class="form-control" placeholder="Father Name" value="<?= $result->f_name?>" required>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group has-feedback col-md-6">
                                <label>Age</label>
                                <input type="text" name="age" style="color: white" class="form-control" placeholder="Age" value="<?= $result->age?>" required>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                            <div class="form-group has-feedback col-md-6">
                                <label>Qualification</label>
                                <input type="text" name="qualification" style="color: white" class="form-control" placeholder="Qualification" value="<?= $result->qualification?>" required>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group has-feedback col-md-6">
                                <label>Nationality</label>
                                <input type="text" name="nationality" style="color: white" class="form-control" placeholder="Nationality" value="<?= $result->nationality?>" required>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Profession</label>
                                <input type="text" name="profession" style="color: white" class="form-control" placeholder="Profession" value="<?= $result->profession?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group has-feedback col-md-6">
                                <label>Email</label>
                                <input type="email" name="email" style="color: white" class="form-control" placeholder="Email" value="<?= $result->email?>" required>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                            <div class="form-group has-feedback col-md-6">
                                <label>Guardian Number</label>
                                <input type="text"  name="g_number" style="color: white" class="form-control" placeholder="Guardian Number" value="<?= $result->guardian_number?>" required>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Contact</label>
                                <input type="text" name="number" pattern="/^\d+$/" style="color: white" class="form-control" placeholder="Contact" value="<?= $result->contact?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Desire Course</label>
                                <input type="text" name="desire_course" style="color: white" class="form-control" placeholder="Courses" value="<?= $result->courses?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Country</label>
                                <input type="text" name="country" class="form-control"  value="<?php echo $result->country_name ?>" readonly required style="background:#444D53; color:white;">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Province</label>
                                <input type="text" name="province" class="form-control"  value="<?php echo $result->state_name ?>"  readonly required style="background:#444D53; color:white;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>City</label>
                                <input type="text" name="city" style="background:#444D53; color:white;" class="form-control"  value="<?php echo $result->city_name ?>" readonly required >
                            </div>
			    <div class="form-group col-md-6">
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
                            <div class="row">
                                <div class="form-group ">
                                    <div class="col-md-12">
                                        <label>Status</label>
                                        <div class="radio">
                                            <label class="col-md-12">
                                                <div class="col-md-2">
                                                    <input type="radio" name="1" checked>Briefed
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="radio" name="2" >Test Application
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="radio" name="3" >Satisfied
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="radio" name="4" >Dissatisfied
                                                </div>
                                            </label>
                                        </div>
                                    </div>
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
  </div>>