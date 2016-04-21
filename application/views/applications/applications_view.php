<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Applications </li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Received Applications</h1>
        </div>
    </div><!--/.row-->
  

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div  class="panel-heading">Applications Record</div>
                <div class="panel-body">
                    <table data-toggle="table" data-show-refresh="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                        <tr>
                            <th  data-sortable="true"><b>S/NO</b></th>
                            <th  data-sortable="true"><b>Student Id</b></th>
                            <th  data-sortable="true"><b>Student Name</b></th>
                            <th  data-sortable="true"><b>Father Name</b></th>
                            <th  data-sortable="true"><b>Application Name</b></th>
                            <th  data-sortable="true"><b>Study In</b></th>
                            <th  colspan="2" class="text-center"><b>Actions</b></th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($result  as $array)?>
                             <tr>
                                 <td>1</td>
                                 <td><?=$array->fkuser_id?></td>
                                 <td><?=$array->name?></td>
                                 <td><?=$array->f_name?></td>
                                 <td><?=$array->application_name?></td>
                                 <td>1</td>                         
                                 <td>
                                     <a href="" type="button" class="btn btn-primary glyphicon glyphicon-edit btn-outline margin"> View Details</a>
                                 </td>
                             </tr>
                             <?php foreach ($result_1  as $array)?>
                             <tr>
                                 <td>1</td>
                                 <td><?=$array->fkuser_id?></td>
                                 <td><?=$array->name?></td>
                                 <td><?=$array->f_name?></td>
                                 <td><?=$array->application_name?></td>
                                 <td>1</td>                         
                                 <td>
                                     <a href="" type="button" class="btn btn-primary glyphicon glyphicon-edit btn-outline margin"> View Details</a>
                                 </td>

                             </tr>
                             <?php foreach ($result_2  as $array)?>
                             <tr>
                                 <td>1</td>
                                 <td><?=$array->fkuser_id?></td>
                                 <td><?=$array->name?></td>
                                 <td><?=$array->f_name?></td>
                                 <td><?=$array->application_name?></td>
                                 <td>1</td>                         
                                 <td>
                                     <a href="" type="button" class="btn btn-primary glyphicon glyphicon-edit btn-outline margin"> View Details</a>
                                 </td>

                             </tr>
                        </tbody>
                        
          
                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row-->

</div><!--/.main-->