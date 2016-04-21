
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Course</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add new Course</h1>
        </div>
    </div><!--/.row-->
    
    
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Registration Form</div>
                <div class="panel-body">

                    <form role="form" method="post" action="<?= site_url()?>admin/create_student_after_post">
                       
                        <!-- Show when add new course in javascript-->
                        
                        <div class="row hide hidden_1">
                           <div class="form-group col-md-6">
                                <label>Course Name</label>
                                <input type="text" name="course_name" id="coursename_textbox" style="color: white" class="form-control" placeholder="Subject" required>
                            </div>
                            
                        </div>
                         <div class="row hide hidden_1">
                           <div class="form-group col-md-6">
                                <label>Course Category</label>
                                <input type="text" name="sub_category" id="subcategory_textbox" style="color: white" class="form-control" placeholder="Subject" required>
                            </div>
                            
                        </div>
                         <div class="row hide hidden_1">
                           <div class="form-group col-md-6">
                                <label>Subject</label>
                                <input type="text" name="subject_name" id="subjectname_textbox" style="color: white" class="form-control" placeholder="Subject" required>
                            </div>
                            <div class="form-group col-md-6">
                                <span class="glyphicon glyphicon-plus plus_position"></span>
                            </div>
                        </div>
                        
                        <!-- End Show when add new course in javascript-->
                        
                        
                        <div class="row unhide">
                           <div class="form-group col-md-6">
                                <label>Courses</label>
                                <select  name="course_name"  id="coursename_dropdown" class="form-control" style="background:#444D53; color:white;">
				    <option value="#">Select Course</option>
                                    <?php foreach ($result as $course){ ?>
					<option value="<?= $course->course_id;?>"><?= $course->course_title;?></option>
				    <?php } ?>
                                 </select>
                            </div>
                            <div class="form-group col-md-6">
                                <a id="show"><span class="glyphicon glyphicon-plus plus_position "></span></a>
                            </div>
                        </div>
                         <div class="row unhide">
                           <div class="form-group col-md-6">
                                <label>Course Categories</label>
                                <select  name="sub_category"  id="subcategory_dropdown" class="form-control" style="background:#444D53; color:white;">
				    <option value="#">Select Category</option>
                                 </select>
                            </div>
                            <div class="form-group col-md-6">
                                <span class="glyphicon glyphicon-plus plus_position"></span>
                            </div>
                        </div>
                         <div class="row unhide">
                           <div class="form-group col-md-6">
                                <label>Subject</label>
                                <input type="text" name="subject_name" id="subjectname_dropdown" style="color: white" class="form-control" placeholder="Subject" required>
                            </div>
                            <div class="form-group col-md-6">
                                <span class="glyphicon glyphicon-plus plus_position"></span>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class=" col-md-12">
                                <button style="position: relative;top: 10px;" type="submit" class="btn btn-primary col-sm-1">Submit</button>
                            </div>

                         </div>
                  
                    </form>

                </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
    </div>

</div><!--/.row-->


