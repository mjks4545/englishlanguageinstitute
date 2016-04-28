
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Applications</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Application Details</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Application Details
                <a href="<?= site_url()?>applications/applications_views" type="button" style="position: relative;width: 120px;left: 35px; " class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a>
                </div>
                <div class="panel-body">
 
                    <div class="row">
                         <div class="form-group col-md-3"><?= $result->app_to?></div>
                         <div class="form-group col-md-9"></div>
                    </div>
						   
                    <div class="row">
                       <div class="form-group col-md-3"></div>
                       <div class="form-group col-md-9"><?= $result->app_director?></div>
                    </div>
                    
                    <div class="row">
                        <div class="form-group col-md-4"><?= $result->subject_line?></div>
                        <div class="form-group col-md-7"></div>
                    </div>
                    
                    <div class="row col-md-9 margin_left"><?= $result->app_text?></div>
                          
                    <div class="row" style="margin-top:60px;">
                        <div class="form-group col-md-9"></div>
                        <div class="form-group col-md-3"><b><?= $result->yours_obediently?></b></div>
                    </div>
                    <div class="row">
                       <div class="form-group col-md-9"><!--------FOR SPACING----></div>
                       <div class="form-group col-md-3"><b>Student Name : </b><?= $result->name?></div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-9"><!--------FOR SPACING----></div>
                        <div class="form-group col-md-3"><b>Father Name : </b> <?= $result->f_name?></div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-9"><!--------FOR SPACING----></div>
                        <div class="form-group col-md-3"><b>Registration No : </b> <?= $result->fkuser_id?></div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-9"><!--------FOR SPACING----></div>
                        <div class="form-group col-md-3"><b>Series : </b><?= $result->subject_title?></div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-9"><!--------FOR SPACING----></div>
                        <div class="form-group col-md-3"><b>Date : </b><?= $result->created_at?></div>
                    </div>
                    <div class="row"> 
                         <div class="form-group col-md-9"><!--------FOR SPACING----></div>

                    </div>
                </div>
                   
            </div>
                                
        </div>
    </div>
</div><!-- /.col-->
    