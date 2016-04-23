
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Student Details</li>
        </ol>
    </div><!--/.row-->
    


    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Student Information</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
             
                <div class="panel-body">
                    <div class="panel-heading panel_style">Student Information</div>
                            <div class="col-md-12">
                            </div>
                    <div class="row" style="position: relative;margin-top: 25px;">
                                 <div class="form-group col-md-4 margin_left">
                                     <label>Name:&nbsp;&nbsp;</label><?= $result->name?>
                                 </div>
                                 <div class="form-group col-md-4 ">
                                  <label>Father Name:&nbsp;&nbsp;</label><?= $result->f_name?>
                                 </div>
                            </div>
                            <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                  <label>Registration Number:&nbsp;&nbsp; </label><?= $result->fkstudent_id?>
                                 </div>
                                 <div class="form-group col-md-4">
                                  <label>Age:&nbsp;&nbsp; </label><?= $result->age?>
                                 </div>
                            </div>
                            <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                  <label>Contact:&nbsp;&nbsp; </label><?= $result->contact?>
                                 </div>
                                 <div class="form-group col-md-4">
                                  <label>Email:&nbsp;&nbsp; </label><?= $result->email?>
                                 </div>
                            </div>
                            <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                  <label>Address:&nbsp;&nbsp; </label><?= $result->address?>
                                 </div>
                                 <div class="form-group col-md-4">
                                  <label>Subject:&nbsp;&nbsp; </label>
                                 </div>
                            </div>
                            
                            <div class="row" >
                            <div class="panel-heading panel_style">Fee History</div>
                            </div>    
                            <div class="row"style="position: relative;margin-top: 25px;">
                                 <div class="form-group col-md-4 margin_left">
                                     <label>Email:&nbsp;&nbsp;</label>
                                 </div>
                                 <div class="form-group col-md-4 ">
                                  <label>Father Name:&nbsp;&nbsp; </label>
                                 </div>
                            </div>
                            <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                  <label>Registration Number:&nbsp;&nbsp; </label>
                                 </div>
                                 <div class="form-group col-md-4">
                                  <label>Age:&nbsp;&nbsp; </label>
                                 </div>
                            </div>
                           
                           
                            <div class="panel-heading panel_style">Monthly Attendance Report</div>
                           
                            <div class="row"style="position: relative;margin-top: 25px;">
                                 <div class="form-group col-md-4 margin_left">
                                     <label>Email:&nbsp;&nbsp;</label>
                                 </div>
                                 <div class="form-group col-md-4 ">
                                  <label>Father Name:&nbsp;&nbsp; </label>
                                 </div>
                            </div>
                            <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                  <label>Registration Number:&nbsp;&nbsp; </label>
                                 </div>
                                 <div class="form-group col-md-4">
                                  <label>Age:&nbsp;&nbsp; </label>
                                 </div>
                            </div>
                       
                            <div class="panel-heading panel_style">Class Performance</div>
                     
                            <div class="row"style="position: relative;margin-top: 25px;">
                                 <div class="form-group col-md-4 margin_left">
                                     <label>Email:&nbsp;&nbsp;</label>
                                 </div>
                                 <div class="form-group col-md-4 ">
                                  <label>Father Name:&nbsp;&nbsp; </label>
                                 </div>
                            </div>
                            <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                  <label>Registration Number:&nbsp;&nbsp; </label>
                                 </div>
                                 <div class="form-group col-md-4">
                                  <label>Age:&nbsp;&nbsp; </label>
                                 </div>
                            </div>
                          
                            <div class="panel-heading panel_style">Result Record</div>
                           
                                <div class="panel-body">
                                    <table data-toggle="table" data-show-refresh="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                                        <thead>
                                        <tr>
                                            <th  data-sortable="true"><b>Month</b></th>
                                            <th  data-sortable="true"><b>Marks total</b></th>
                                            <th  data-sortable="true"><b>Marks obtain</b></th>
                                            <th  data-sortable="true"><b>Percentage</b></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($test as $array){?>
                                        <tr>
                                            <td><?=$array->test_month?></td>
                                            <td><?=$array->totl_marks?></td>
                                            <td><?=$array->obtn_marks?></td>
                                            <td><?=$array->percentage?></td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>

                                    </table>
                                </div>
                 </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
    </div>
  </div>



