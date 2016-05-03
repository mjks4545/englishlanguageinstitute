<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Monthly Test / Add Result</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Test Result</h1>
        </div>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Test Registration
                <a href="<?= site_url()?>monthlytest/test_index" type="button" style="position: relative;width: 120px; " class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a>

                </div>
                <div class="panel-body">

                    <form role="form" method="post" action="<?= site_url()?>monthlytest/create_monthlytest_result_after_post">
                        <div class="row">
                          
                            <div class="form-group col-md-6">
                                <label>Test Name</label>
                                <select name="test_name" class="form-control" style="background:#444D53; color:white;" >
                                    <option value="#">Select Test</option>
                                    <option value="Weekly Progress Test">Weekly Progress Test</option>
                                    <option value="Monthly Grand Test">Monthly Grand Test</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Test Month</label>
                                <select name="test_month" class="form-control" style="background:#444D53; color:white;" >
                                    <option value="#">Select Month</option>
                                    <option value="Junuary">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                             <div class="form-group col-md-6">
                                <label>Test Date</label>
                                <input type="date" name="test_date" id="datepicker" style="color: white" class="form-control" placeholder="Test Date" required>
                            </div>
                             <div class="form-group col-md-6">
                                <label>Total Marks</label>
                                <input type="text" name="total_marks" id="datepicker" style="color: white" class="form-control" placeholder="Test Date" required>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
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
                            <div class=" col-md-12">
                                <button style="position: relative;top: 10px;" type="submit" class="btn btn-primary col-sm-2">Submit</button>
                            </div>

                         </div>
                  
                    </form>

        </div><!-- /.col-->
    </div><!-- /.row -->
    </div>
</div>
</div>
 <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
   ;
  </script>