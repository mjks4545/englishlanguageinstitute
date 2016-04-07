
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Forms</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Class Time Change Form</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Class Time Change Form</div>
                <div class="panel-body">

                        <form role="form" method="post" action="<?= site_url()?>reception/create_reception_post">
                           <div class="row">
                                <div class="form-group col-md-3">
                                   
                                    <input type="text" name="name" style="color: white; background:#444D53;" class="form-control"  value="To" readonly placeholder="TO" required>
                                </div>
                                <div class="form-group col-md-9">
                                    
                                    
                                </div>
                           </div>
						   
                            <div class="row">
                               <div class="form-group col-md-5">
                                    
                                   
                                </div>
                                <div class="form-group col-md-7">
                                    
                                    <select  name="qualification"  class="form-control" style="background:#444D53; color:white;">
									<option>The Principal</option>
									<option>The Madam</option>
									<option>The Director</option>
									
									</select>
                                </div>
                            </div>
							 <div class="row">
                              
                                <div class="form-group col-md-3">
                                    
                                    <select  name="subject_line"  class="form-control" style="background:#444D53; color:white;">
									<option>Sir</option>
									<option> Madam</option>
									<option>Director</option>
									
									</select>
                                </div>
								 <div class="form-group col-md-9">
                                    
                                   
                                </div>
                            </div>
                         <!---   <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Nationality</label>
                                    <input type="text" name="nationality" style="color: white" class="form-control" placeholder="Nationality" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Profession</label>
                                    <input type="text" name="profession" style="color: white" class="form-control" placeholder="Profession" required>
                                </div>
                            </div>--->
                          <!---  <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="email" name="email" style="color: white" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Guardian Number</label>
                                    <input type="text" name="g_number" style="color: white" class="form-control" placeholder="Guardian Number" required>
                                </div>
                            </div>---->
                        <!----   <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Contact</label>
                                    <input type="text" name="number" style="color: white" class="form-control" placeholder="Contact" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Desire Course</label>
                                    <input type="text" name="desire_course" style="color: white" class="form-control" placeholder="Courses" required>
                                </div>
                           </div>--->
                          <!---  <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Address</label>
                                    <input type="text" name="address" style="color: white" class="form-control" placeholder="Address" required>
                                </div>
                            </div>--->
                           <div class="row">
                           <div class="row" style="margin-top:50px;">
						   
                               <div class="form-group col-md-12">
                                   
                                   <textarea type="text" name="description" style="color: white " class="form-control" placeholder="Write something here..!!" cols="15" rows="15" required></textarea>
                               </div>
                           </div>
						   <div class="row" style="margin-top:20px;">
                                <div class="form-group col-md-9">
                                    
                                    
                                </div>
                                <div class="form-group col-md-3">
                                  
                                    <input type="text" name="your_obedient" value="yours obediently"  class="form-control" style="background:#444D53; color:white;" readonly required>
                                </div>
                           </div>
						   <div class="row" style="margin-top:20px;">
                                <div class="form-group col-md-9">
                                    
                                    
                                </div>
                                <div class="form-group col-md-3">
                                  
                                    <input type="text" name="applicant_name" placeholder="Enter Name"  class="form-control" style="background:#444D53; color:white;"  required>
                                </div>
                           </div>
						   <div class="row" style="margin-top:20px;">
                                <div class="form-group col-md-9">
                                    
                                    
                                </div>
                                <div class="form-group col-md-3">
                                  
                                    <input type="text" name="roll_no"   class="form-control" style="background:#444D53; color:white;" placeholder="Enter Roll Number" required>
                                </div>
                           </div>
						   <div class="row" style="margin-top:20px;">
                                
                                <div class="form-group col-md-3">
                                  
                                    <input type="date" name="date"  class="form-control" style="background:#444D53; color:white;" required>
                                </div>
								<div class="form-group col-md-9">
                                    
                                    
                                </div>
                           </div>
						   
                             <div class="row" style="margin-left:25px;"> 
							 <div class="col-md-1">
							 </div>
                            <div class="col-md-12">
                            <button style="position: relative;top: 10px;" type="submit" class="btn btn-primary col-sm-2">Submit</button>
                            </div></div>
                         </form>
                     </div>
                 </div>
        </div><!-- /.col-->
    </div><!-- /.row -->