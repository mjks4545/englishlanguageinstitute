
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

                    <form role="form" data-toggle="validator" method="post"  action="<?= site_url()?>courses/create_course_registration_after_post">
                        <div class="row" style="position: relative; left: 200px;">  
                                <div class="row ">
                                   <div class="form-group has-feedback col-md-6">
                                        <label>Course Name</label>
                                        <input type="text" name="course_title" minlength="3" maxlength="80" style="color: white" class="form-control" placeholder="Course" >
                                        <span class="help-block with-errors" style="margin-left:10px; "></span>
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




