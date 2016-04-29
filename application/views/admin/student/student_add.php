
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Reception/Student Registration</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Student Registration</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Registration Form
                 <a href="<?= site_url()?>admin/student_view" type="button" style="position: relative;width: 120px; " class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a>
                </div>
                <div class="panel-body">

                <form role="form" method="post" action="<?= site_url()?>admin/create_student_after_post">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Name</label>
                            <input type="text" name="name" style="color: white" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Father Name</label>
                            <input type="text" name="f_name" style="color: white" class="form-control" placeholder="Father Name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Age</label>
                            <input type="text" name="age" style="color: white" class="form-control" placeholder="Age" required>
                        </div>
                         <div class="form-group col-md-6">
                            <label>Country</label>

                            <select  name="country"  id="country" class="form-control" style="background:#444D53; color:white;">
                                <option value="#">Select Country</option>
                                <?php foreach ($result as $country){ ?>
                                    <option value="<?= $country->id;?>"><?= $country->country_name;?></option>
                                <?php } ?>
                            </select>

                        </div>
                        </div>
                         <div class="row">
                           
                            <div class="form-group col-md-6">
                                <label>Province</label>
                                <select  name="province"  id="province" class="form-control" style="background:#444D53; color:white;">
				    <option value="#">Select Province</option>
				</select>
                            </div>
                             <div class="form-group col-md-6">
                                <label>City</label>
                                <select  name="city"  id="city" class="form-control" style="background:#444D53; color:white;">
				    <option value="#">Select City</option>
				</select>
                            </div>
                        </div>
                        <div class="row">
                            
			    <div class="form-group col-md-6">
                                <label>Village Address</label>
                                <input type="text" name="address" style="color: white" class="form-control" placeholder="Address" required>
                            </div>
                             <div class="form-group col-md-6">
                                <label>Email</label>
                                <input type="email" name="email" style="color: white" class="form-control" placeholder="Email" required>
                            </div>
                        </div>
                    
                        <div class="row">
                             <div class="form-group col-md-6">
                                <label>Qualification</label>
                                <input type="text" name="qualification" style="color: white" class="form-control" placeholder="Qualification" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Profession</label>
                                <input type="text" name="profession" style="color: white" class="form-control" placeholder="Profession" required>
                            </div>
                        </div>
                         
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Contact</label>
                                <input type="text" name="number" style="color: white" class="form-control" placeholder="Contact" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Guardian Number</label>
                                <input type="text" name="g_number" style="color: white" class="form-control" placeholder="Guardian Number" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Course Title</label>
                                <select  name="courses"  id="coursename_dropdown" class="form-control" style="background:#444D53; color:white;">
                                     <option>Select Courses</option>
                                    <?php foreach ($result_1 as $course){ ?>
					<option value="<?= $course->course_id;?>"><?= $course->course_title;?></option>
				    <?php } ?>
                               </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Course Category</label>
                                <select  name="course_category" id="subcategory_dropdown" class="form-control" style="background:#444D53; color:white;">
                                   <option value="#">Select Category</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Subject</label>
                                <select  name="category_subject"  id="subjectname_dropdown" class="form-control" style="background:#444D53; color:white;">
                                   <option value="#">Select Subject</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label> Class Timing</label>
                                <input type="text" name="class_timing" style="color: white" class="form-control" placeholder="Class Timing" required>
                            </div>
                        </div>
                        
                        <fieldset>
                            <legend style="color:white; text-align:center; ">OFFICE USE ONLY</legend>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Course Duration</label>
                                    <input type="text" name="course_duration" style="color: white" class="form-control" placeholder="Course Duration" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Starting Date</label>
                                    <input type="date" id="datepicker" name="starting_date" style="color: white" class="form-control" placeholder="Starting Date" required>
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Completion Date</label>
                                    <input type="date" id="" name="completion_date" style="color: white" class="form-control" placeholder="Completion Date" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Admission Fee</label>
                                    <input type="text" name="admission_fee" style="color: white" class="form-control" placeholder="Addmission Fee" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Monthly Fee</label>
                                    <input type="text" name="monthly_fee" style="color: white" class="form-control" placeholder="Monthly Fee" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Amount Received</label>
                                    <input type="text" name="amount_received" style="color: white" class="form-control" placeholder="Amount Recieved" required>
                                </div>
                            </div>
                            <input type="hidden" name="tobepaid_or_paidfee" style="color: white" class="form-control">
                            <input type="hidden" name="entry_against" style="color: white" class="form-control">
                            <input type="hidden" name="description" style="color: white" class="form-control">
                            
                            
                        </fieldset>

                        <div class="row">
                            <div class=" col-md-12">
                                <button style="position: relative;top: 10px;" type="submit" class="btn btn-primary col-sm-2">Submit</button>
                            </div>

                         </div>
                  
                    </form>

                </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
    </div>
    
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
   ;
  </script>
  
                       