<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">Admin / Add Student</li>
    </ol>
</div><!--/.row-->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Add New Student</h1>
    </div>
</div><!--/.row-->

    <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Add Form</div>
            <div class="panel-body">

                <form role="form" method="post" action="<?= site_url()?>admin/create_student_after_post">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Student Name</label>
                            <input type="text" name="name" style="color: white" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Father Name</label>
                            <input type="text" name="f_name" style="color: white" class="form-control" placeholder="Father Name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Reg Number</label>
                            <input type="text" name="reg_number" style="color: white" class="form-control" placeholder="Registration Number" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Previous Degree</label>
                            <input type="text" name="pre_degree" style="color: white" class="form-control" placeholder="Previous Degree" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Nationality</label>
                            <input type="text" name="nationality" style="color: white" class="form-control" placeholder="Nationality" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Age</label>
                            <input type="text" name="age" style="color: white" class="form-control" placeholder="Age" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Email</label>
                            <input type="email" name="email" style="color: white" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Guardian Number</label>
                            <input type="text" name="g_number" style="color: white" class="form-control" placeholder="Guardian Number" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Contact</label>
                            <input type="text" name="number" style="color: white" class="form-control" placeholder="Contact" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Course Details</label>
                            <input type="text" name="course_detail" style="color: white" class="form-control" placeholder="Courses" required>
                        </div>
                    </div>
                    <div class="row">
                            <div class="form-group col-md-6">
                                <label>Country</label>
                              
				<select  name="country"  id="country" class="form-control" style="background:#444D53; color:white;">
				    <option value="#">Select Country</option>
				    <?php foreach ($result as $country){ ?>
					<option value="<?= $country->id;?>"><?= $country->country_name;?></option>
				    <?php } ?>
				</select>
				
                            </div>
                            <div class="form-group col-md-6">
                                <label>Province</label>
                                <select  name="province"  id="province" class="form-control" style="background:#444D53; color:white;">
				    <option value="#">Select Province</option>
				</select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>City</label>
                                <select  name="city"  id="city" class="form-control" style="background:#444D53; color:white;">
				    <option value="#">Select City</option>
				</select>
                            </div>
			    <div class="form-group col-md-6">
                                <label>Village Address</label>
                                <input type="text" name="address" style="color: white" class="form-control" placeholder="Address" required>
                            </div>
                        </div>
                    <div class="row">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Description</label>
                                <textarea type="text" name="description" style="color: white" class="form-control" placeholder="Write something here..!!" cols="12" rows="8"></textarea>
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