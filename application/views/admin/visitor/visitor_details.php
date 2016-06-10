
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Visitor Details</li>
        </ol>
    </div><!--/.row-->
    


    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Visitor Details</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Visitor Details
                 <a href="<?= site_url()?>admin/visitor_view" type="button" style="position: relative;width: 120px; " class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a>
                </div>
                <div class="panel-body">
   
                     

                            <div class="col-md-12">

                            </div>
                               <h3 class="header_margin">Personal Information</h3>
                            <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                     <label>Name:&nbsp;&nbsp;</label><?= $result->name?>
                                 </div>
                                 <div class="form-group col-md-4 ">
                                  <label>Father Name:&nbsp;&nbsp; </label><?= $result->f_name?>
                                 </div>
                            </div>
                            <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                  <label>Profession:&nbsp;&nbsp; </label><?= $result->profession?>
                                 </div>
                                <div class="form-group col-md-4 ">
                                  <label>Contact Number:&nbsp;&nbsp; </label><?= $result->contact?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4 margin_left ">
                                   <label>Desire Course:&nbsp;&nbsp; </label><?= $result->category_title?>
                                 </div>
                                 <div class="form-group col-md-4 ">
                                   <label>About Visitor:&nbsp;&nbsp; </label><?= $result->description?>
                                 </div>
                            </div>
                            <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                   <label>Status:&nbsp;&nbsp;</label><div class="label label-primary"><?= $result->status?></div>
                                 </div>
                            </div>

		       
                 </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
    </div>
  </div>

