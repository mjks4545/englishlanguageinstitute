
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Forms</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Application Form</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Application For Change of Class Timing<a href="<?= site_url()?>chiefcounselor/index_details" type="button" style="position: relative;width: 120px; " class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a></div>
                <div class="panel-body">

                        <form role="form" data-toggle="validator" method="post" action="<?= site_url()?>applications/create_time_change_after_post">
                          <input type="hidden" name="application_name" value="class time change">
                            <div class="row">
                                <div class="form-group has-feedback col-md-3">
                                  <input type="text" name="app_to" style="color: white; background:#444D53;" class="form-control"  value="To" readonly placeholder="TO" required>
                                  <span class="help-block with-errors" style="margin-left:10px; "></span>
                                </div>
                               <div class="form-group col-md-9"></div><!----FOR SPACING ------------>   
                           </div>
                            
                           <div class="row">
                              <div class="form-group col-md-3"></div><!------FOR SPACING---------->  
                                <div class="form-group has-feedback col-md-9">
                                  <input type="text"  name="app_director"  class="form-control" style="background:#444D53; color:white;" value="The Director, The University of Spoken English And Computer Sciences Faqirabad,Peshawar" readonly>
                                  <span class="help-block with-errors" style="margin-left:10px; "></span>
                                </div>
                           </div>
                            
                           <div class="row">
                              <div class="form-group has-feedback col-md-3">
                                 <input type="text"  name="subject_line"  class="form-control" style="background:#444D53; color:white;" value="Dear Sir," readonly>
                                 <span class="help-block with-errors" style="margin-left:10px; "></span>
                              </div>
                              <div class="form-group col-md-9"></div> <!----FOR SPACING----->  
                           </div>
                            
                           <div class="row">
                               <div class="row" style="margin-top:20px;"> <!--------------------Application area start---------->		  
                                
                                   <div class="row">
                                 <div class="form-group col-md-12">
                                    <textarea name="time_change_app"   class="form-control" style="background:#444D53; color:white;" placeholder="Write Application" rows="15" cols="20" required></textarea>
                                 </div>
			       </div>
                               <!--------------------Application area end------------>
				
                               <div class="row" style="margin-top:20px;">
                                    <div class="form-group col-md-9"></div> <!--------FOR SPACING---->
                                    <div class="form-group has-feedback col-md-3">
                                          <input type="text" name="yours_obediently" value="Yours obediently"  class="form-control" style="background:#444D53; color:white;" readonly required>
                                          <span class="help-block with-errors" style="margin-left:10px; "></span>
                                    </div>
                               </div> 
						   
                            
				<div class="row">
                                    <div class="form-group col-md-9"><!--------FOR SPACING----></div>
                                    <div class="form-group has-feedback col-md-3">
                                        <label>Name</label>
                                        <input type="text" name="applicant_name" maxlength="50" minlength="3"  class="form-control" style="background:#444D53; color:white;" placeholder="Enter Your Name" required>
                                        <span class="help-block with-errors" style="margin-left:10px; "></span>
                                    </div>
                                </div>
				<div class="row">
                                    <div class="form-group col-md-9"><!--------FOR SPACING----></div>
                                    <div class="form-group has-feedback col-md-3">
                                        <label>Father Name</label>
                                        <input type="text" name="father_name" maxlength="50" minlength="3"  class="form-control" style="background:#444D53; color:white;" placeholder="Enter Your Father Name" required>
                                        <span class="help-block with-errors" style="margin-left:10px; "></span>
                                    </div>
                                </div>
				<div class="row">
                                    <div class="form-group col-md-9"><!--------FOR SPACING----></div>
                                    <div class="form-group has-feedback col-md-3">
                                        <label>Series</label>
                                        <select  name="series"  id="" class="form-control" style="background:#444D53; color:white;">
                                            <option value="#">Select Series</option>
                                            <?php foreach ($result as $series){ ?>
                                                <option value="<?= $series->course_c_s_id;?>"><?= $series->subject_title;?></option>
                                            <?php } ?>
                                        </select>
                                        <span class="help-block with-errors" style="margin-left:10px; "></span>
                                    </div>
                                </div>
			
                           
			</div>
                           </div>
					
                           <div class="row"> 
                                 <div class="form-group col-md-9"><!--------FOR SPACING----></div>
                           <div class="col-md-3">
                              <button style="position: relative;top: 10px;" type="submit"  name="submit" class="btn btn-primary col-sm-5">Submit</button>
                            </div>
			    </div>
                         </form>
                     </div>
                 </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
</div>