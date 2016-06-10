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
	    <div class="row">
		<div id="message" role="alert">
		</div>
	    </div>
            <div class="panel panel-default">
                <div class="panel-heading">Edit Form
                    <a href="<?= site_url()?>admin/visitor_view" type="button" style="position: relative;width: 120px; " class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a>
                </div>
                <div class="panel-body">

                    <form role="form" data-toggle="validator" method="post" action="<?= site_url()?>admin/update_visitor_after_post/<?= $result->u_id;?>/<?= $result->v_id;?>" id="insert-form-submit">
                        <div class="row">
                            <div class="form-group has-feedback col-md-6">
                                <label>Name</label>
                                <input type="text" name="name" maxlength="50" minlength="3" style="color: white" class="form-control" placeholder="Name" value="<?= $result->name?>" required>
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                                <input type="hidden" id="url" name="url" value="<?=  site_url('admin/visitor_view')?>">
                            </div>
                            <div class="form-group has-feedback col-md-6">
                                <label>Father Name</label>
                                <input type="text" name="f_name" maxlength="50" minlength="3" style="color: white" class="form-control" placeholder="Father Name" value="<?= $result->f_name?>" required>
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group has-feedback col-md-6">
                                <label>Profession</label>
                                <input type="text" name="profession" style="color: white" class="form-control" placeholder="Profession" value="<?= $result->profession?>" required>
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                            <div class="form-group has-feedback col-md-6">
                                <label>Contact Number</label>
                                <input type="text" name="contact" style="color: white" maxlength="15" minlength="15" class="form-control" placeholder="Contact Number" value="<?= $result->contact?>" required>
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group has-feedback col-md-6">
                                <label>Desire Course</label>
                                <input type="text" style="background:#444D53; color:white;" class="form-control" placeholder="Profession" value="<?= $result->category_title?>" readonly>
                                <input type="hidden" name="desire_courses" value="<?= $result->course_c_id?>" readonly>
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group has-feedback col-md-12">
                                <label>About me</label>
                                <textarea type="text" name="description" style="color: white" class="form-control" cols="12" rows="8"><?= $result->description?></textarea>
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group has-feedback ">
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
                            <input type="submit" class="btn btn-primary col-sm-2" name="submit" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>