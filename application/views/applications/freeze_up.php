
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Forms</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Application For Freezing Class</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading" >Application For Freezing Class</div>
                <div class="panel-body">

                        <form role="form" method="post" action="<?= site_url()?>applications/freeze_semester_after_post">
                            <input type="hidden" name="application_name" value="freeze up">
                           <div class="row">
                                <div class="form-group col-md-3">
                                   
                                    <input type="text" name="app_to" style="color: white; background:#444D53;" class="form-control"                                        value="To" readonly placeholder="TO" required>
                                </div>
                                <!-- for spacing using-->
                                <div class="form-group col-md-9">
                                </div>
                           </div>
						   
                            <div class="row">
                               <div class="form-group col-md-3">
                                </div>
                                <div class="form-group col-md-9">
                                    
                                    <input type="text" name="app_director"  class=" input form-control" value="The Director, The University of Spoken English & Computer Science Faqirabad, Peshawa" readonly placeholder="" style="background-color:#444D53;
	color:#FFF;" required>
                                </div>
                            </div>
							 <div class="row">
                              
                                <div class="form-group col-md-3">
                                   <input type="text" name="subject_line"   class="form-control input" value="Dear Sir," readonly placeholder="" style="background-color:#444D53; color:#FFF;" required>  
                                </div>
								 <div class="form-group col-md-9">
                                    
                                   <!-- for spacing-->
                                </div>
                            </div>
                           <div class="row">
                             <div class="col-md-12">
                                 <textarea class="form-control" name="freeze_semester_text" cols="20" style="color: white" placeholder="write application here" rows="15"></textarea>
                             </div>
                          </div>
                                   <div class="row" style="margin-top:20px;">
                                <div class="form-group col-md-9">
                                    <!-- for spacing-->
                                    
                               </div>
                                 <div class="form-group col-md-3">
                                  
                                    <input type="text" name="yours_obediently" value="Yours Obediently"  class="form-control"                                       style="background:#444D53; color:white;" readonly required>
                                </div>
                           </div>
                            <div class="row">
                                    <div class="form-group col-md-9"><!--------FOR SPACING----></div>
                                    <div class="form-group col-md-3">
                                        <label>Name</label>
                                        <input type="text" name="applicant_name"   class="form-control" style="background:#444D53; color:white;" placeholder="Enter Your Name" required>
                                    </div>
                                </div>
				<div class="row">
                                    <div class="form-group col-md-9"><!--------FOR SPACING----></div>
                                    <div class="form-group col-md-3">
                                        <label>Father Name</label>
                                        <input type="text" name="father_name"   class="form-control" style="background:#444D53; color:white;" placeholder="Enter Your Father Name" required>
                                    </div>
                                </div>
				<div class="row">
                                    <div class="form-group col-md-9"><!--------FOR SPACING----></div>
                                    <div class="form-group col-md-3">
                                        <label>Series</label>
                                        <select  name="series"  id="" class="form-control" style="background:#444D53; color:white;">
                                            <option value="#">Select Series</option>
                                            <?php foreach ($result as $series){ ?>
                                                <option value="<?= $series->course_c_s_id;?>"><?= $series->subject_title;?></option>
                                            <?php } ?>
                                        </select>
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
                           
                           
                     </div>
                 </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
       