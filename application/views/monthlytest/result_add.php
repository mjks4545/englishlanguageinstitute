<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Monthly Test / Add Result</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Student Result</h1>
        </div>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Test Registration
                <a href="<?= site_url()?>admin/student_view" type="button" style="position: relative;width: 120px; " class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a>

                </div>
                <div class="panel-body">

                    <form role="form" method="post" action="<?= site_url()?>monthlytest/create_monthlytest_result_after_post">
                        <input type="hidden" name="student_id" value="<?=$id?>">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Test Name</label>
                                <input type="text" name="test_name" style="color: white" class="form-control" placeholder="Test Name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Test Month</label>
                                <input type="text" name="test_month" style="color: white" class="form-control" placeholder="Test Month" required>
                            </div>
                        </div>
                        <div class="row">
                             <div class="form-group col-md-6">
                                <label>Test Date</label>
                                <input type="date" name="test_date" style="color: white" class="form-control" placeholder="Test Date" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Subject</label>
                                <select  name="test_subject" class="form-control" style="background:#444D53; color:white;">
				    <option value="#">Select Subject</option>
				    <?php foreach ($result as $subject){ ?>
					<option value="<?= $subject->course_c_s_id;?>"><?= $subject->subject_title;?></option>
				    <?php } ?>
				</select>
                            </div>
                        </div>
                         <div class="row">
                             <div class="form-group col-md-6">
                                <label>Obtain Marks</label>
                                <input type="text" name="obtn_marks" style="color: white" class="form-control" placeholder="Obtain Marks" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Total Marks</label>
                                <input type="text" name="totl_marks" style="color: white" class="form-control" placeholder="Total Marks" required>
                            </div>
                        </div>
                         <div class="row">
                            
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
</div>
</div>