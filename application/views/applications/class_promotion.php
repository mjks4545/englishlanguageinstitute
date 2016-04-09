<head>
</head>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Forms</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Application for Class Promotion</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Application for Class Promotion</div>
                <div class="panel-body">

                        <form role="form" method="post" action="<?= site_url()?>applications/class_promotion_after_post">
                           <div class="row">
                                <div class="form-group col-md-3">
                                   
                                    <input type="text" name="app_to"  class=" input form-control"                                        value="To" readonly placeholder="TO" style="background-color:#444D53;
	                                   color:#FFF;" required>
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
                                   <input type="text" name="subject_line"   class="form-control input" value="Dear Sir," readonly                                      placeholder="" style="background-color:#444D53; color:#FFF;" required>  
                                </div>
								   <div class="form-group col-md-9">
                                    
                                   <!-- for spacing-->
                                </div>
                                    </div>
                                 <div class="row">
                                   <div class="col-md-12">
                                       <textarea class="form-control" style="color: white" name="class_promotion_text" cols="20" placeholder="Write something here" rows="15"></textarea>
                                    </div>
                                  </div>
                          
                                  <div class="row" style="margin-top:20px;">
                                <div class="form-group col-md-9">
                                    <!-- for spacing-->
                                    
                                  </div>
                                <div class="form-group col-md-3">
                                  
                                    <input type="text" name="yours_obediently" value="Yours Obediently"  class="form-control" style="                                       background:#444D53; color:white;" readonly required>
                                </div>
                             </div>
                               <div class="row">
                                  <div class="form-group col-md-9">
                                    <!-- for spacing-->
                                    
                               </div>
                                 <div class="form-group col-md-3">
                                  
                                     <label class="label">Name:</label>
                                     <input type="text" name="applicant_name" class="form-control input"  placeholder="Enter Your Name"                                        required>
                                </div>
                           </div>
                             <div class="row" >
                                <div class="form-group col-md-9">
                                    <!-- for spacing-->
                                    
                                 </div>
                                <div class="form-group col-md-3">
                                  
                                     <label class="label">Father Name:</label>
                                    <input type="text" name="father_name" class="form-control input"  placeholder="Enter Your Father name" required>
                                </div>
                           </div>
                           
                            <div class="row">
                                
                                     <div class="form-group col-md-3">
                                  <label class="label">Series:</label>
                                  <input type="text" name="series" class="form-control input"  placeholder="Series" required>
         
                                  </div>
         
                                    <div class="form-group col-md-3">
                                    <label class="label">Timing:</label>
                                  <input type="text" name="app_timing"class="form-control input"  placeholder="Timing" required>
         
                                 </div>
          
                                      <div class="form-group col-md-3">
                                         <label>Teacher</label>
                                   <input type="text" name="teacher" class="form-control input">
                                   </div>
                                </div>
                          
                                   <div class="row">
       
                                <div class="form-group col-md-3">
                                  <label>Chief Counselor:</label>
                                    <input type="text" name="chief_counselor" class="form-control input"   required>
                                </div>
        
                                   <div class="form-group col-md-3">
                                  <label>Accountant:</label>
                                    <input type="text" name="accountant" class="form-control input"   required>
                                </div>
        
                                <div class="form-group col-md-3">
                                  <label>Date:</label>
                                    <input type="date" name="app_date"   class="form-control input"   required>
                                </div>
        
                              </div>
                            <div class="col-md-12">
                        <button style="position: relative;top: 10px;" type="submit" class="btn btn-primary col-sm-2">Submit</button>
                  </div>
                            
                        </form>

                            
                </div>
                
                  
            </div>
                     
                                
                     </div>
                 </div>
        </div><!-- /.col-->
    