
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Account Section</li>
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
                <div class="panel-heading">Registration Form</div>
                <div class="panel-body">

                    <form role="form" method="post" action="<?= site_url()?>accountsection/register_student_after_post">
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
                                <label>Qualification</label>
                                <input type="text" name="qualification" style="color: white" class="form-control" placeholder="Qualification" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Nationality</label>
                                <input type="text" name="nationality" style="color: white" class="form-control" placeholder="Nationality" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Profession</label>
                                <input type="text" name="profession" style="color: white" class="form-control" placeholder="Profession" required>
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
                                <label>Admission in Course</label>
                                <select  name="courses"  class="form-control" style="background:#444D53; color:white;">
                                    <option>Select Courses</option>
                                    <option>English Language Courses</option>
                                    <option>Information Technology</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Suitable Class Timing</label>
                                <input type="text" name="class_timing" style="color: white" class="form-control" placeholder="Class Timing" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Date</label>
                                <input type="date" id="datepicker" name="date" style="color: white" class="form-control" required>
                            </div>
                        </div><br>
                        

                        <fieldset>
                            <legend style="color:white; text-align:center; ">OFFICE USE ONLY</legend>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Admission No</label>
                                    <input type="text" name="reg_number" style="color: white" class="form-control" placeholder="Addmission No" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Starting Date</label>
                                    <input type="date" id="datepicker_1" name="starting_date" style="color: white" class="form-control" placeholder="Starting Date" required>
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Course Duration</label>
                                    <input type="text" name="course_duration" style="color: white" class="form-control" placeholder="Course Duration" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Completion Date</label>
                                    <input type="date" id="datepicker_2" name="completion_date" style="color: white" class="form-control" placeholder="Completion Date" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Admission Fee</label>
                                    <input type="text" name="admission_fee" style="color: white" class="form-control" placeholder="Addmission Fee" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Monthly Fee</label>
                                    <input type="text" name="monthly_fee" style="color: white" class="form-control" placeholder="Monthly Fee" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Amount Received</label>
                                    <input type="text" name="amount_received" style="color: white" class="form-control" placeholder="Amount Recieved" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Received Date</label>
                                    <input type="date" id="datepicker_3" name="received_date" style="color: white" class="form-control" placeholder="Rec Date" required>
                                </div>
                            </div>
                            <div class="row">

                                <div class="form-group col-md-6">
                                    <label>Remaining Balance (if Any)</label>
                                    <input type="balance" name="balance" style="color: white" class="form-control" placeholder="Balance (if Any)" required>
                                </div>
                                <div class="form-group col-md-6">
                                <label>Next Fee Date</label>
                                <input type="date" id="datepicker_5" name="next_fee_date" class="form-control">
                                </div>
                            </div>
                        </fieldset>

                        <div class="row">
                            <div class=" col-md-12">
                                <button style="position: relative;top: 10px;" type="submit" class="btn btn-primary col-sm-1">Submit</button>
                            </div>

                         </div>
                  
                    </form>

                </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
    
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
   $(function() {
    $( "#datepicker_1" ).datepicker_1();
  });
  </script>