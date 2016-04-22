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

                    <form role="form" method="post" action="<?= site_url()?>admin/update_student_after_post/<?= $result->s_id; ?>/<?= $result->u_id; ?>">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Student Name</label>
                                <input type="text" name="name" style="color: white" class="form-control" placeholder="Name" value="<?php echo $result->name ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Father Name</label>
                                <input type="text" name="f_name" style="color: white" class="form-control" placeholder="Father Name" value="<?php echo $result->f_name ?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Age</label>
                                <input type="text" name="age" style="color: white" class="form-control" value="<?php echo $result->age ?>" placeholder="Age" required>
                            </div>
                             <div class="form-group col-md-6">
                                <label>Country</label>
                                <input type="text" name="country" class="form-control"  value="<?php echo $result->country_name ?>" readonly required style="background:#444D53; color:white;">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Province</label>
                                <input type="text" name="province" class="form-control"  value="<?php echo $result->state_name ?>"  readonly required style="background:#444D53; color:white;">
                            </div>
                             <div class="form-group col-md-6">
                                <label>City</label>
                                <input type="text" name="city" style="background:#444D53; color:white;" class="form-control"  value="<?php echo $result->city_name ?>" readonly required >
                            </div>
                        </div>
                        <div class="row">
                           
			    <div class="form-group col-md-6">
                                <label>Village Address</label>
                                <input type="text" name="address" style="color: white" class="form-control" placeholder="Address" value="<?php echo $result->address ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Email</label>
                                <input type="email" name="email" style="color: white" class="form-control" placeholder="Email" value="<?php echo $result->email ?>" required>
                            </div>
                        </div>
                        <div class="row">
                             <div class="form-group col-md-6">
                                <label>Qualification</label>
                                <input type="text" name="qualification" style="color: white" class="form-control" placeholder="Qualification" value="<?php echo $result->qualification ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Profession</label>
                                <input type="text" name="profession" style="color: white" class="form-control" placeholder="Profession" value="<?php echo $result->profession ?>" required>
                            </div>
                        </div>
                         <div class="row">
                             <div class="form-group col-md-6">
                                <label>Previous Degree</label>
                                <input type="text" name="pre_degree" style="color: white" class="form-control" placeholder="Previous Degree" value="<?php echo $result->previous_degree ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Marks Obtain</label>
                                <input type="text" name="marks_obtain" style="color: white" class="form-control" placeholder="Marks Obtain" value="<?php echo $result->marks_obtain ?>" required>
                            </div>
                        </div>
                         <div class="row">
                             <div class="form-group col-md-6">
                                <label>Total Marks</label>
                                <input type="text" name="marks_total" style="color: white" class="form-control" placeholder="Total Marks" value="<?php echo $result->total_marks ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Institute</label>
                                <input type="text" name="institute" style="color: white" class="form-control" placeholder="Institiute" value="<?php echo $result->institute ?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Contact</label>
                                <input type="text" name="number" style="color: white" class="form-control" placeholder="Contact" value="<?php echo $result->contact ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Guardian Number</label>
                                <input type="text" name="g_number" style="color: white" class="form-control" placeholder="Guardian Number" value="<?php echo $result->guardian_number ?>" required>
                            </div>
                        </div>
                       
                         <div class="row">
                            
                            <div class="form-group col-md-6">
                                <label>Course </label>
                                <input type="text" name="course_detail"  class="form-control" placeholder="Courses" value="<?php echo $result->course_title ?>" style="background:#444D53; color:white;" readonly required>
                            </div>
                              <div class="form-group col-md-6">
                                <label>Course Category</label>
                                <input type="text" name="course_detail"  class="form-control" placeholder="Courses" value="<?php echo $result->category_title ?>" style="background:#444D53; color:white;" readonly required>
                            </div>
                         </div>
                        <div class="row">
                              <div class="form-group col-md-6">
                                <label>Subject </label>
                                <input type="text" name="course_detail"  class="form-control" placeholder="Courses" value="<?php echo $result->subject_title ?>" style="background:#444D53; color:white;" readonly required>
                            </div>
                             <div class="form-group col-md-6">
                                <label> Class Timing</label>
                                <input type="text" name="class_timing" style="color: white" class="form-control" placeholder="Class Timing" value="<?= $result->class_timing?>" required>
                            </div>
                        </div>
                        <div class="row-margin-top"></div>
                        <fieldset>
                            <legend style="color:white; text-align:center; ">OFFICE USE ONLY</legend>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Admission No</label>
                                    <input type="text" name="admission_number" style="color: white" class="form-control" placeholder="Addmission No" value="<?php echo $result->fkuser_id ?>" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Starting Date</label>
                                    <input type="date" id="datepicker_1" name="starting_date" style="color: white" class="form-control" placeholder="Starting Date" value="<?php echo $result->starting_date ?>" required>
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Course Duration</label>
                                    <input type="text" name="course_duration" style="color: white" class="form-control" placeholder="Course Duration" value="<?php echo $result->course_duration ?>" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Completion Date</label>
                                    <input type="date" id="datepicker_2" name="completion_date" style="color: white" class="form-control" placeholder="Completion Date" value="<?php echo $result->ending_date ?>" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Admission Fee</label>
                                    <input type="text" name="admission_fee" style="color: white" class="form-control" placeholder="Addmission Fee" value="<?php echo $result->admission_fee ?>" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Monthly Fee</label>
                                    <input type="text" name="monthly_fee" style="color: white" class="form-control" placeholder="Monthly Fee" value="<?php echo $result->monthly_fee ?>" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Amount Received</label>
                                    <input type="text" name="amount_received" style="color: white" class="form-control" placeholder="Amount Recieved" value="<?php echo $result->received_fee ?>" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Received Date</label>
                                    <input type="date" id="datepicker_3" name="received_date" style="color: white" class="form-control" placeholder="Rec Date" value="<?php echo $result->received_date ?>" required>
                                </div>
                            </div>
                            <div class="row">

                                <div class="form-group col-md-6">
                                    <label>Remaining Balance (if Any)</label>
                                    <input type="balance" name="balance" style="color: white" class="form-control" placeholder="Balance (if Any)" value="<?php echo $result->remaining_fee ?>" >
                                </div>
                                <div class="form-group col-md-6">
                                <label>Next Fee Date</label>
                                <input type="date" id="datepicker_5" style="color: white" name="next_fee_date" class="form-control" value="<?php echo $result->next_fee_date ?>" >
                                </div>
                            </div>
                        </fieldset>

                       
                        
                        <div class="row">
                          
                            <div class=" col-sm-10">
                                <button style="position: relative;top: 10px;" type="submit" class="btn btn-primary col-sm-1">Submit</button>
                            </div>
                    </form>

                </div>
            </div>
        </div><!-- /.col-->
    </div>
    </div>
</div>