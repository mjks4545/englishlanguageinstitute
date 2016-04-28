
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Student Details</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Student Details</h1>
        </div>
    </div><!--/.row-->



    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="<?= site_url()?>admin/student_view" type="button" style="position: relative;width: 120px; " class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a>
                </div>
                <div class="panel-body">
   
                     
                           <div class="row">
                                <div class="form-group col-md-3"></div>
                                <div class="form-group col-md-2">
                                    <img src="../../public/img/pic.jpg" class="img-circle" alt="my pic" width="180" height="180">
                                </div>
                                <div class="form-group" style="margin-top: 80px; ">
                                   <label>Name :&nbsp;&nbsp; </label><?= $result->name?> <br><br>
                                   <label>Profession:&nbsp;&nbsp; </label><?= $result->profession?>
                                
                                  
                                </div>
                            </div>
                            <div class="col-md-12">
                            <div class="col-md-10"><hr></div>
                            </div>
                               <h3 class="header_margin">Personal Information</h3>
                            <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                     <label>Email:&nbsp;&nbsp;</label><?= $result->email?>
                                 </div>
                                 <div class="form-group col-md-4 ">
                                  <label>Father Name:&nbsp;&nbsp; </label><?= $result->f_name?>
                                 </div>
                            </div>
                            <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                  <label>Registration Number:&nbsp;&nbsp; </label><?= $result->fkuser_id?>
                                 </div>
                                 <div class="form-group col-md-4">
                                  <label>Age:&nbsp;&nbsp; </label><?= $result->age?>
                                 </div>
                            </div>
                            <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                   <label>Country Name:&nbsp;&nbsp;</label><?= $result->country_id?>
                                 </div>
                                 <div class="form-group col-md-4">
                                  <label>Province Name:&nbsp;&nbsp; </label><?= $result->province_id?>
                                 </div>
                            </div>
                            <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                   <label>City Name:&nbsp;&nbsp;</label><?= $result->city_id?>
                                 </div>
                                 <div class="form-group col-md-4">
                                  <label>Village/Street:&nbsp;&nbsp;  </label><?= $result->address?>
                                 </div>
                            </div>   
                            <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                   <label>Contact Number:&nbsp;&nbsp; </label><?= $result->contact?>
                                 </div>
                                 <div class="form-group col-md-4">
                                  <label>Guardian Number:&nbsp;&nbsp; </label><?= $result->guardian_number?>
                                 </div>
                            </div>
                           
                               <div class="col-md-12">
                             <div class="col-md-10"><hr></div>
                             </div>
                               <h3 class="header_margin">Academic Information</h3>
                           <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                   <label>Profession:&nbsp;&nbsp; </label><?= $result->profession?>
                                 </div>
                                 <div class="form-group col-md-4">
                                  <label>Qualification:&nbsp;&nbsp; </label><?= $result->qualification?>
                                 </div>
                           </div> 
                            <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                   <label>Previous Degree:&nbsp;&nbsp; </label><?= $result->previous_degree?>
                                 </div>
                                 <div class="form-group col-md-4">
                                  <label>Marks Obtain:&nbsp;&nbsp; </label><?= $result->marks_obtain?>
                                 </div>
                           </div> 
                            <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                   <label>Total Marks:&nbsp;&nbsp; </label><?= $result->total_marks?>
                                 </div>
                                 <div class="form-group col-md-4">
                                  <label>Institute:&nbsp;&nbsp; </label><?= $result->institute?>
                                 </div>
                           </div> 
                           <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                   <label>Course:&nbsp;&nbsp; </label><?= $result->course_title?>
                                 </div>
                                 <div class="form-group col-md-4 margin_left_category">
                                   <label>Course Category:&nbsp;&nbsp;</label><?= $result->category_title?>
                                 </div>
                           </div>
                           <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                   <label>Subject:&nbsp;&nbsp; </label><?= $result->subject_title?>
                                 </div>
                                 <div class="form-group col-md-4">
                                  <label>Class Timing:&nbsp;&nbsp; </label><?= $result->class_timing ?>
                                 </div>
                           </div>
                            <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                   <label>Course Duration:&nbsp;&nbsp; </label><?= $result->course_duration ?>
                                 </div>
                                 <div class="form-group col-md-4">
                                  <label>Ending Date:&nbsp;&nbsp; </label><?= $result->ending_date ?>
                                 </div>
                            </div>
                              <div class="col-md-12">
                              <div class="col-md-10"><hr></div></div>
                              <h3 class="header_margin">Finance Information</h3>
                           <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                   <label>Admission Fee:&nbsp;&nbsp;</label><?= $result->admission_fee ?>
                                 </div>
                                 <div class="form-group col-md-4">
                                  <label>Monthly Fee:&nbsp;&nbsp; </label><?= $result->monthly_fee ?>
                                 </div>
                               <?php 
                                    $total_fee     = $result->admission_fee + $result->monthly_fee;
                                    $remaining_fee = $total_fee - $result->received_fee 
                                 ?>
                          </div>
                          <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                   <label>Total Amount:&nbsp;&nbsp; </label><?= $total_fee ?>
                                 </div>
                                 <div class="form-group col-md-4 ">
                                   <label>Amount Paid:&nbsp;&nbsp; </label><?= $result->received_fee ?>
                                 </div>
                                 
                          </div>
                          <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                  <label>Remaining Fee:&nbsp;&nbsp; </label><?= $remaining_fee ?>
                                 </div>
                                 <div class="form-group col-md-4">
                                   <label>Next Pay Date:&nbsp;&nbsp; </label><?= $result->next_fee_date ?>
                                 </div>
                          </div>
		       
                 </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
    </div>
  </div>

