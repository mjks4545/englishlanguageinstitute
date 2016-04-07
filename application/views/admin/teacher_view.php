<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Admin / View Teachers</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Teachers</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-13">
            <div class="panel panel-default">
                <div  class="panel-heading">Teachers Record
                    <a href="<?= site_url()?>admin/teacher_add" type="button" class="btn btn-default margin  pull-right"><b>Add New Record</b></a>
                </div>
                <div class="panel-body">
                    <table data-toggle="table" data-show-refresh="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                        <tr>
                            <th data-sortable="true"><b>S/NO</b></th>
                            <th  data-sortable="true"><b>Name</b></th>
                            <th  data-sortable="true"><b>Father Name</b></th>
                            <th  data-sortable="true"><b>Reg No</b></th>
                            <th  data-sortable="true"><b>Contact</b></th>
                            <th  data-sortable="true"><b>Email</b></th>
                            <th  data-sortable="true"><b>Qualification</b></th>
                            <th  data-sortable="true"><b>Assign Classes</b></th>
                            <th  data-sortable="true"><b>Salary</b></th>
                            <th  data-sortable="true"><b>Age</b></th>
                            <th  data-sortable="true"><b>Address</b></th>
                            <th  data-sortable="true"><b>Nationality</b></th>
                            <th colspan="2"><b>Actions</b></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($result as $array){?>
                            <tr>
                                <td>1</td>
                                <td><?=$array->name?></td>
                                <td><?=$array->f_name?></td>
                                <td><?=$array->reg_number?></td>
                                <td><?=$array->contact?></td>
                                <td><?=$array->email?></td>
                                <td><?=$array->qualification?></td>
                                <td><?=$array->class_assign?></td>
                                <td><?=$array->salary?></td>
                                <td><?=$array->age?></td>
                                <td><?=$array->address?></td>
                                <td><?=$array->nationality?></td>
                                <td>
                                    <a href="<?= site_url()?>admin/teacher_edit/<?= $array->t_id ?>" type="button" class="btn btn-primary glyphicon glyphicon-edit btn-outline margin"> Edit</a>
                                </td>
                                <td>
                                    <a href="<?= site_url()?>admin/teacher_delete/<?= $array->t_id ?>/<?= $array->u_id ?>" type="button" class="btn btn-primary glyphicon glyphicon-trash btn-outline margin"> Delete</a>
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