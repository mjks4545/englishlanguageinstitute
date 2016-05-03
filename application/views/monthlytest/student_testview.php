<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Examination / Add Result</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Test Data</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Student Record
                <a href="<?= site_url()?>monthlytest/result_add" type="button" style="position: relative;width: 120px; " class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a>
                </div>
                <div class="panel-body">

                   
                            <div class="panel-body">
                                <table data-toggle="table" data-show-refresh="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                                    <thead>
                                    <tr>
                                        <th  data-sortable="true"><b>Student Id</b></th>
                                        <th  data-sortable="true"><b>Student Name</b></th>
                                        <th  data-sortable="true"><b>Father name</th>
                                        <th  data-sortable="true"><b>Series</b></th>
                                        <th  data-sortable="true"><b>Total Marks</b></th>
                                        <th  data-sortable="true"><b>Obtain Marks</b></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($result as $array){?>
                                    <tr>
                                        <td><?=$array->fkstudent_id?></td>
                                        <td><?=$array->name?></td>
                                        <td><?=$array->f_name?></td>
                                        <td><?=$array->subject_title?></td>
                                        <td><?=$array->total_marks?></td>
                                        <td><form><input type="text" name="obtain_marks" style="color: white" class="form-control col-sm-1" required></form></td>
                                    </tr>
                                    <?php } ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                      
                      
        </div><!-- /.col-->
    </div>
    </div>
</div>