<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Admin / View Students</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Students</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div  class="panel-heading">Students Record
                <a href="<?= site_url()?>admin/student_add" type="button" class="btn btn-default margin  pull-right"><b>Add New Record</b></a>
                </div>
                <div class="panel-body">
                    <table data-toggle="table" data-show-refresh="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                        <tr>
                            <th  data-sortable="true">S/NO</th>
                            <th  data-sortable="true">Name</th>
                            <th  data-sortable="true">Father Name</th>
                            <th  data-sortable="true">Reg No</th>
                            <th  data-sortable="true">Contact</th>
                            <th  data-sortable="true">Email</th>
                            <th  data-sortable="true">Pre-Degree</th>
                            <th  data-sortable="true">Courses</th>
                            <th  data-sortable="true">Age</th>
                            <th  data-sortable="true">Address</th>
                            <th  data-sortable="true">Nationality</th>
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
                            <td><?=$array->pre_degree?></td>
                            <td><?=$array->courses?></td>
                            <td><?=$array->age?></td>
                            <td><?=$array->address?></td>
                            <td><?=$array->nationality?></td>
                        </tr>
                        <?php } ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row-->

</div><!--/.main-->