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
                <div class="panel-heading">Edit Form
                <a href="<?= site_url()?>admin/visitor_view" type="button" style="position: relative;width: 120px; " class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a>
                </div>
                <div class="panel-body">

                    <form role="form" method="post" action="<?= site_url()?>admin/update_visitor_after_post/<?= $result->v_id; ?>/<?= $result->u_id; ?>">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Name</label>
                                <input type="text" name="name" style="color: white" class="form-control" placeholder="Name" value="<?= $result->name?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Father Name</label>
                                <input type="text" name="f_name" style="color: white" class="form-control" placeholder="Father Name" value="<?= $result->f_name?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Age</label>
                                <input type="text" name="age" style="color: white" class="form-control" placeholder="Age" value="<?= $result->age?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Nic</label>
                                <input type="text" name="nic" style="color: white" class="form-control" placeholder="Nic" value="<?= $result->nic?>" required>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Profession</label>
                                <input type="text" name="profession" style="color: white" class="form-control" placeholder="Profession" value="<?= $result->profession?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Email</label>
                                <input type="email" name="email" style="color: white" class="form-control" placeholder="Email" value="<?= $result->email?>" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Contact</label>
                                <input type="text" name="number" style="color: white" class="form-control" placeholder="Contact" value="<?= $result->contact?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Desire Course</label>
                                 <select type="text" name="desire_course" class="form-control" readonly required style="background:#444D53; color:white;">
                                    <option value="<?php echo $result->courses ?>" selected="selected"><?= $result->subject_title?><option>
                                 </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Country</label>
                                <select type="text" name="country" class="form-control" readonly required style="background:#444D53; color:white;">
                                    <option value="<?php echo $result->country_id ?>" selected="selected"><?= $result->country_name?><option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Province</label>
                                <select type="text" name="province" class="form-control" readonly required style="background:#444D53; color:white;">
                                    <option value="<?php echo $result->province_id ?>" selected="selected"><?= $result->state_name?><option>
                                </select>
                             
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>City</label>
                                <select type="text" name="city" class="form-control" readonly required style="background:#444D53; color:white;">
                                    <option value="<?php echo $result->city_id ?>"  selected="selected"><?= $result->city_name?><option>
                                </select>
                               
                            </div>
			    <div class="form-group col-md-6">
                                <label>Village Address</label>
                                <input type="text" name="address" style="color: white" class="form-control" placeholder="Address" value="<?php echo $result->address ?>" required>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>About me</label>
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
                                                    <input type="radio" name="status" value="briefed" <?= ($result->status == 'briefed' ) ? 'checked="checked"':'iamnot'; ?> >Briefed
                                                </div>
                                                <div class="col-md-2">
                                                <input type="radio" name="status" value="test_application" <?= ($result->status == 'test_application' ) ? 'checked="checked"':'iamnot'; ?> >Test Application
                                                </div>
                                                <div class="col-md-2">
                                                <input type="radio" name="status" value="satisfied" <?= ($result->status == 'satisfied' ) ? 'checked="checked"':'iamnot'; ?> >Satisfied
                                                </div>
                                                <div class="col-md-2">
                                                <input type="radio" name="status" value="dissatisfied" <?= ($result->status == 'dissatisfied' ) ? 'checked="checked"':'iamnot'; ?> >Dissatisfied
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