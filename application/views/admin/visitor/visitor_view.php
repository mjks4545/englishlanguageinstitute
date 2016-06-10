<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Admin / View Visitors</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-13">
            <h1 class="page-header">Visitors</h1>
        </div>
    </div><!--/.row-->
      <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div  class="panel-heading">Visitors Record
                     <a href="<?= site_url()?>reception/visitor_add" type="button" style="position: relative;width: 170px; " class="btn btn-primary btn-outline margin  pull-right"><b>Add New Record</b></a>
                     <a href="<?= site_url()?>admin/index" type="button" style="position: relative;width: 120px;left: 35px; " class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a>
                </div>
                <div class="panel-body">
                    <table data-toggle="table" data-show-refresh="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                        <tr>
                            <th  data-sortable="true"><b>Visitor No</b></th>
                            <th  data-sortable="true"><b>Name</b></th>
                            <th  data-sortable="true"><b>Father Name</b></th>
                            <th  data-sortable="true"><b>Profession</b></th>
                            <th  data-sortable="true"><b>Contact</b></th>
                            <th  data-sortable="true"><b>Status</b></th>
                            <th  class="text-center"><b>Actions</b></th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($result as $array){?>
                            <tr>
                                
                                <td><?=$array->v_id?></td>
                                <td><?=$array->name?></td>
                                <td><?=$array->f_name?></td>
                                <td><?=$array->profession?></td>
                                <td><?=$array->contact?></td>
                                <td><?=$array->status?></td>
                                <td>
                                    <div class="btn-group">
                                    <button  data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-outline col-md-12 margin">Action <span class="caret"></span></button>
                                    <div class="dropdown-menu min-width-2 " style="background:#444D53; color:white; text-decoration: none;">
                                      <a class="dropdown-item btn-primary btn-outline margin" href="<?= site_url()?>admin/visitor_details/<?= $array->v_id ?>">View</a><br><hr>
                                      <a class="dropdown-item btn-primary btn-outline margin" href="<?= site_url()?>admin/visitor_edit/<?= $array->v_id ?>">Edit</a><br><hr>
                                      <a class="dropdown-item btn-primary btn-outline margin" href="<?= site_url()?>admin/visitor_delete/<?= $array->v_id ?>/<?= $array->u_id ?>">Delete</a><br>
                                     
                                    </div>
                                    </div>
                                </td>
                               
                            </tr>
                        <?php } ?>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row-->

</div><!--/.main-->