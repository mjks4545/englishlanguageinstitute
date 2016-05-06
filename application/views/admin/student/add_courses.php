<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Student / Add Other Courses</li>
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

                    <form role="form" method="post" action="<?= site_url()?>admin/create_more_courses_after_post">
                        <div class="row">
                            
                            <div class="row">
                                 <div class="form-group col-md-6">
                                    <label>Course Title</label>
                                    <input type="hidden" name="id" id="id" value="<?=$id?>">
                                    <select  name="courses"  id="coursename_dropdown" class="form-control" style="background:#444D53; color:white;">
                                         <option>Select Courses</option>
                                        <?php foreach ($result as $course){ ?>
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
                                    <select  name="course_title"  id="subjectname_dropdown" class="form-control" style="background:#444D53; color:white;">
                                        <option value="#">Select Subject</option>

                                     </select>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label>Course Duration</label>
                                        <input type="text" name="course_duration" style="color: white" class="form-control" placeholder="Course Duration" required>
                                  </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Started Date</label>
                                        <input type="date"  name="starting_date" style="color: white" class="form-control" placeholder="Starting Date" required>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label>Ending Date</label>
                                       <input type="date"  name="completion_date" style="color: white" class="form-control" placeholder="Completion Date" required>
                                  </div>
                            </div>
                           
                            
                            <div class="row">
                                <div class=" col-md-12">
                                    <button style="position: relative;top: 10px;" type="submit" class="btn btn-primary col-sm-2">Submit</button>
                                </div>
                             </div>
                        </div>    
                    </form>

                </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
   </div>

</div><!--/.row-->




