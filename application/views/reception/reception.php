
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Forms</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Visitor Form</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
	    <div class="row">
		<div id="message" role="alert">
		</div>
	    </div>
            <div class="panel panel-default">
                <div class="panel-heading">Visitor Form</div>
                <div class="panel-body">

                        <form role="form" method="post" data-toggle="validator" action="<?= site_url()?>reception/create_reception_post" id="insert-form-submit">
                           <div class="row">
                                <div class="form-group has-feedback col-md-6">
                                    <label>Name</label>
                                    <input type="text" name="name" maxlength="50" minlength="3" style="color: white" class="form-control" placeholder="Name" required>
                                    <span class="help-block with-errors" style="margin-left:10px; "></span>
                                    <input type="hidden" id="url" name="url" value="<?=  site_url('admin/visitor_view')?>">
                                </div>
                                <div class="form-group has-feedback col-md-6">
                                    <label>Father Name</label>
                                    <input type="text" name="f_name" maxlength="50" minlength="3" style="color: white" class="form-control" placeholder="Father Name" required>
                                    <span class="help-block with-errors" style="margin-left:10px; "></span>
                                </div>
                           </div>
                            <div class="row">
                               <!-- <div class="form-group has-feedback col-md-6">
                                    <label>Age</label>
                                    <input type="text" name="age" style="color: white" class="form-control" placeholder="Age" required>
                                    <span class="help-block with-errors" style="margin-left:10px; "></span>
                                </div>
                                <div class="form-group has-feedback col-md-6">
                                    <label>Nic</label>
                                    <input type="text" name="nic" style="color: white" class="form-control" placeholder="Nic" required>
                                    <span class="help-block with-errors" style="margin-left:10px; "></span>
                                </div>-->
                            </div>
                            <div class="row">
                                <div class="form-group has-feedback col-md-6">
                                    <label>Profession</label>
                                    <input type="text" name="profession" style="color: white" class="form-control" placeholder="Profession" required>
                                    <span class="help-block with-errors" style="margin-left:10px; "></span>
                                </div>
                                <div class="form-group has-feedback col-md-6">
                                    <label>Contact</label>
                                    <input type="text" name="number" pattern="(?=.*\d).{7,15}" maxlength="15" minlength="7"  style="color: white" class="form-control" placeholder="Contact" required>
                                    <span class="help-block with-errors" style="margin-left:10px; "></span>
                                </div>
                            </div>
                            <div class="row">
                            <!--<div class="form-group has-feedback col-md-6">
                                <label>Email</label>
                                <input type="email" name="email" style="color: white" class="form-control" placeholder="Email" required>
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>-->
                            <div class="form-group has-feedback col-md-6">
                                <label>Desire Course</label>
                                <select  name="desire_course" class="form-control" style="background:#444D53; color:white;">

                                    <option value="#">Select Desire Course</option>
                                    <?php foreach ($result_1 as $subject){ ?>
                                        <option value="<?= $subject->course_c_id;?>"><?= $subject->category_title;?></option>
                                    <?php } ?>
                                </select>
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>

                            </div>
                        <!---<div class="row">
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
                            <!---<div class="form-group has-feedback col-md-6">
                                <label>Province</label>
                                <select  name="province"  id="province" class="form-control" style="background:#444D53; color:white;">
				    <option value="#">Select Province</option>
				</select>
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>

                        </div>

                        <div class="row">a
                            <div class="form-group has-feedback col-md-6">
                                <label>City</label>
                                <select  name="city"  id="city" class="form-control" style="background:#444D53; color:white;">
                                    <option value="#">Select City</option>
                                </select>
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
			   <!--- <div class="form-group has-feedback col-md-6">
                                <label>Village Address</label>
                                <input type="text" name="address" style="color: white" class="form-control" placeholder="Address" required>
                                <span class="help-block with-errors" style="margin-left:10px; "></span>
                            </div>
                        </div>--->
                           <div class="row">
                           <div class="row">
                               <div class="form-group has-feedback col-md-12">
                                   <label>About me</label>
                                   <textarea type="text" name="description" style="color: white" class="form-control" placeholder="Write something here..!!" cols="12" rows="8"></textarea>
                                   <span class="help-block with-errors" style="margin-left:10px; "></span>
                               </div>
                           </div>
                               <div class="row">
                                <div class="form-group ">
                                <div class="col-md-12">
                                    <label>Status</label>
                                    <div class="radio">
                                        <label class="col-md-12">
                                            <div class="col-md-2">
                                            <input type="radio" name="status" value="briefed" checked>Briefed
                                            </div>
                                            <div class="col-md-2">
                                            <input type="radio" name="status" value="test_application">Test Application
                                            </div>
                                            <div class="col-md-2">
                                            <input type="radio" name="status" value="satisfied">Satisfied
                                            </div>
                                            <div class="col-md-2">
                                            <input type="radio" name="status" value="dissatisfied">Dissatisfied
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                           </div>
                            <div class=" col-sm-10">
                            <button style="position: relative;top: 10px;" type="submit" class="btn btn-primary col-sm-2">Submit</button>
                            </div>
                         </form>
                     </div>
                 </div>
        </div><!-- /.col-->
    </div><!-- /.row -->