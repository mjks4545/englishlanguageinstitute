

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Student Course Details</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Student Courses Details</h1>
        </div>
    </div><!--/.row-->



    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="<?= site_url()?>admin/student_view" type="button" style="position: relative;width: 120px; " class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a>
                </div>
                <div class="panel-body">
   
                     
                            
                            <h3 class="header_margin">Student Information</h3>
                            <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                     <label>Name:&nbsp;&nbsp;</label><?= $result_1->name?>
                                 </div>
                                 <div class="form-group col-md-4 ">
                                  <label>Father Name:&nbsp;&nbsp; </label><?= $result_1->f_name?>
                                 </div>
                            </div>
                            <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                  <label>Registration Number:&nbsp;&nbsp; </label><?= $result_1->s_id?>
                                 </div>
                                 <div class="form-group col-md-4">
                                  <label>Email:&nbsp;&nbsp; </label><?= $result_1->email?>
                                 </div>
                            </div>
                            <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                  <label>Contact Number:&nbsp;&nbsp; </label><?= $result_1->contact?>
                                 </div>
                                 <div class="form-group col-md-4">
                                  <label>Address:&nbsp;&nbsp; </label><?= $result_1->address?>
                                 </div>
                            </div>
                            <div class="col-md-12">
                            <div class="col-md-10"><hr></div>
                            </div>
                            <h3 class="header_margin">Course Information</h3>
                            <?php foreach ($result as $array) {?>
                            
                                <div class="row">
                                     <div class="form-group col-md-4 margin_left">
                                         <label>Course Name:&nbsp;&nbsp;</label><?= $array->course_title?>
                                     </div>
                                     <div class="form-group col-md-4 ">
                                      <label>Category Name:&nbsp;&nbsp; </label><?= $array->category_title?>
                                     </div>
                                </div>
                                <div class="row">
                                     <div class="form-group col-md-4 margin_left">
                                      <label>Subject Name:&nbsp;&nbsp; </label><?= $array->subject_title?>
                                     </div>
                                     <div class="form-group col-md-4">
                                      <label>Duration:&nbsp;&nbsp; </label><?= $array->course_duration?>
                                     </div>
                                </div>
                                <div class="row">
                                     <div class="form-group col-md-4 margin_left">
                                      <label>Starting Date:&nbsp;&nbsp; </label><?= $array->starting_date?>
                                     </div>
                                     <div class="form-group col-md-4">
                                      <label>Ending Date:&nbsp;&nbsp; </label><?= $array->ending_date?>
                                     </div>
                                </div>
                                <div class="row">
                                     <div class="form-group col-md-4 margin_left">
                                         <label>Status:&nbsp;&nbsp; </label><div class="label label-primary">
                                        <?php 
                                            $current_date = mdate("%m-%d-%y");
                                            if($current_date >= $array->starting_date && $current_date <= $array->ending_date){
                                                echo 'Session Start';
                                            }else {
                                                echo 'Pending';
                                            }
                                        ?>                                       
                                         </div>
                                     </div>
                                       
                                </div>
                                <div class="horizontal_dotted_line margin_left"></div>
                                <div class="col-lg-12"></div>
                                
                            <?php }?>
		       
                 </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
    </div>


