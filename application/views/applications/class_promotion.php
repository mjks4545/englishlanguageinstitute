<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" xmlns="http://www.w3.org/1999/html">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Applications / Class Promotion Application</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Class Promotion Form</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Class Promotion Form</div>
                <div class="panel-body">

                        <form role="form" method="post" action="<?= site_url()?>reception/create_reception_post">
                           <div class="row">
                                <div class="form-group col-md-4">
                                   
                                    <input type="text" name="name" style="color: white; background:#444D53;" class="form-control"  value="To" readonly  required>
                                </div>
                                <div class="form-group col-md-9">
                                    
                                    
                                </div>
                           </div>
						   
                            <div class="row">
                               <div class="form-group col-md-5">

                                </div>
                                <div class="form-group col-md-7">
                                    
                                    <select  name="qualification"  class="form-control" style="background:#444D53; color:white;">
									<option>The Principal of The University of Spoken English & Computer Sciences</option>
									<option>The Madam of The University of Spoken English & Computer Sciences</option>
									<option>The Director of The University of Spoken English & Computer Sciences</option>
									
									</select>
                                </div>
                            </div>
							 <div class="row">
                              
                                <div class="form-group col-md-4">
                                    
                                    <select  name="subject_line"  class="form-control" style="background:#444D53; color:white;">
									<option>Sir</option>
									<option> Madam</option>
									<option>Director</option>
									
									</select>
                                </div>

                            </div>

                           <div class="row">
                           <div class="row" style="margin-top:50px;">
						   
                               <div class="form-group col-md-12">
                                   
                                   <textarea type="text" name="description" style="color: white " class="form-control" placeholder="Write here" cols="15" rows="15" required></textarea>
                               </div>
                           </div>
						   <div class="row" style="margin-top:20px;">
                                <div class="form-group col-md-9">
                                    
                                    
                                </div>
                                <div class="form-group col-md-3">
                                  
                                    <input type="text" name="your_obedient" value="Yours obediently"  class="form-control" style="background:#444D53; color:white;" readonly required>
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