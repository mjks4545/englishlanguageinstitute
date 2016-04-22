
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Course / Subject</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add new Subject</h1>
        </div>
    </div><!--/.row-->
    
    
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Registration Form</div>
                <div class="panel-body">

                    <form role="form" method="post" action="<?= site_url()?>courses/create_subject_registration_after_post">
                        <div class="row" style="position: relative; left: 200px;">  
                        <div class="row">
                           <div class="form-group col-md-6">
                                <label>Courses</label>
                                <select  name="course_title"  id="coursename_dropdown" class="form-control" style="background:#444D53; color:white;">
                                    <option value="#">Select Course</option>
                                    <?php foreach ($result as $course){ ?>
                                        <option value="<?= $course->course_id;?>"><?= $course->course_title;?></option>
                                    <?php } ?>
                                 </select>
                            </div>
                            <div class="form-group col-md-6">
                                <a href="<?= site_url()?>courses/course_add" <span class="glyphicon glyphicon-plus plus_position  " style="text-decoration: none;"></span></a>
                            </div>
                        </div>

                         <div class="row">
                           <div class="form-group col-md-6">
                                <label>Course Categories</label>
                                <select  name="category_title"  id="subcategory_dropdown" class="form-control" style="background:#444D53; color:white;">
                                    <option value="#">Select Category</option>
                                 </select>
                            </div>
                             <div class="form-group col-md-6">
                                <a href="<?= site_url()?>courses/coursecategory_add" <span class="glyphicon glyphicon-plus plus_position " style="text-decoration: none;"></span></a>
                            </div>

                        </div>

                         <div class="row">
                           <div class="form-group col-md-6">
                                <label>Subject</label>
                                <input type="text" name="subject_title" id="subjectname_dropdown" style="color: white" class="form-control" placeholder="Subject" >
                            </div>
                        </div>

                        <div class="row">
                           <div class="form-group col-md-6">
                                <label>Subject Duration</label>
                                <input type="text" name="subject_duration" id="subjectname_dropdown" style="color: white" class="form-control" placeholder="Subject Duration" >
                            </div>
                        </div>

                        <div class="row">
                           <div class="form-group col-md-6">
                                <label>Subject Fee</label>
                                <input type="text" name="subject_fee" id="subjectname_dropdown" style="color: white" class="form-control" placeholder="Subject Fee" >
                            </div>
                        </div>

                        <div class="row">
                            <div class=" col-md-12">
                                <button style="position: relative;top: 10px;" type="submit" class="btn btn-primary col-sm-1">Submit</button>
                            </div>

                         </div>
                        </div>
                    </form>

                </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
    </div>

</div><!--/.row-->


