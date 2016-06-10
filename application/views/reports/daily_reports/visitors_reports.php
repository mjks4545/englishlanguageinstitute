<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Daily Reports/ Visitor Reports </li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"></h1>
        </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Daily Visitor Reports
                 <a href="<?= site_url()?>reports/daily_index" type="button" style="position: relative;width: 120px; left: 35px;" class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a>
                </div>
                <div class="panel-body">
                   <legend> <h2 style="text-align:center;">Daily Visitor Reports</h2></legend>
                    <table data-toggle="table"  data-show-refresh="true"  data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                          <tr>
                             <th class="text-center"><b>Date</b></th>
                             <th class="text-center"><b>Visitor Id</b></th>
                             <th class="text-center"><b>Visitor Name</b></th>
                             <th class="text-center"><b>Father Name</b></th>
                             <th class="text-center"><b>Address</b></th>
                             <th class="text-center"><b>Desire Course</b></th>
                          </tr>
                         
                        </thead>
                        <tbody>
                          <?php foreach ($result as $array) {?>  
                          <tr>
                            <td><?= mdate("%y-%m-%d")?></td>
                            <td><?= $array->v_id?></td>
                            <td><?= $array->name?></td>
                            <td><?= $array->f_name?></td>
                            <td><?= $array->address?></td>
                            <td><?= $array->subject_title?></td>
                          </tr>  
                          <?php }?>
                        </tbody>
                               
                    </table>
                    <!---------class record end----------------->
                </div>
                  
            </div>

        </div>

    </div><!--/.row-->
 
</div>
</div>

