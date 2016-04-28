
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Teacher Details</li>
        </ol>
    </div><!--/.row-->
    


    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"></h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                     <a href="<?= site_url()?>admin/teacher_view" type="button" style="position: relative;width: 120px;" class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a> 
                </div>
                <div class="panel-body">
   
                     
                           <div class="row">
                                <div class="form-group col-md-3"></div>
                                <div class="form-group col-md-2">
                                    <img src="../../public/img/pic.jpg" class="img-circle" alt="my pic" width="180" height="180">
                                </div>
                                <div class="form-group" style="margin-top: 80px; ">
                                   <label>Name :&nbsp;&nbsp; </label><?= $result->name?><br><br> 
                                   <label>Qualification:&nbsp;&nbsp; </label><?= $result->qualification?><br><br> 
                                   <label>About me:&nbsp;&nbsp; </label><?= $result->description?>
                                
                                  
                                </div>
                            </div>
                            <div class="col-md-12">
                            <div class="col-md-10"><hr></div>
                            </div>
                               <h3 class="header_margin">Personal Information</h3>
                            <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                     <label>Email:&nbsp;&nbsp;</label><?= $result->email?>
                                 </div>
                                 <div class="form-group col-md-4 ">
                                  <label>Father Name:&nbsp;&nbsp; </label><?= $result->f_name?>
                                 </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4 margin_left">
                                  <label>Age:&nbsp;&nbsp; </label><?= $result->age?>
                                 </div>
                                <div class="form-group col-md-4 ">
                                   <label>Contact Number:&nbsp;&nbsp; </label><?= $result->contact?>
                                 </div>
                            </div>
                            <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                   <label>Country Name:&nbsp;&nbsp;</label><?= $result->country_name?>
                                 </div>
                                 <div class="form-group col-md-4">
                                  <label>Province Name:&nbsp;&nbsp; </label><?= $result->state_name?>
                                 </div>
                            </div>
                            <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                   <label>City Name:&nbsp;&nbsp;</label><?= $result->city_name?>
                                 </div>
                                 <div class="form-group col-md-4">
                                  <label>Village/Street:&nbsp;&nbsp;  </label><?= $result->address?>
                                 </div>
                            </div>   
                            <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                   <label>Registration Number:&nbsp;&nbsp; </label><?= $result->fkuser_id?>
                                 </div>
                                 <div class="form-group col-md-4">
                                  <label>Subject:&nbsp;&nbsp; </label><?= $result->subject?>
                                 </div>
                            </div>
                           <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                   <label>Class Assign:&nbsp;&nbsp; </label><?= $result->class_assign?>
                                 </div>
                                 <div class="form-group col-md-4">
                                  <label>Salary:&nbsp;&nbsp; </label><?= $result->salary?>
                                 </div>
                            </div>
                            
		       
                 </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
    </div>
  </div>

