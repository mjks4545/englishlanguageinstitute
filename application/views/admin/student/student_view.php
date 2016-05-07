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
                <a href="<?= site_url()?>admin/student_add" type="button" style="position: relative;width: 170px; " class="btn btn-primary btn-outline margin  pull-right"><b>Add New Record</b></a>
                <a href="<?= site_url()?>admin/index" type="button" style="position: relative;width: 120px;left: 35px; " class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a>
                </div>
                <div class="panel-body">
                    <table data-toggle="table" data-show-refresh="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                        <tr>
                            <th  data-sortable="true"><b>Reg No</b></th>
                            <th  data-sortable="true"><b>Name</b></th>
                            <th  data-sortable="true"><b>Father Name</b></th>
                            <th  data-sortable="true"><b>Contact</b></th>
                            <th  data-sortable="true"><b>Email</b></th>
<!--                            <th  data-sortable="true"><b>Course</b></th>
                            <th  data-sortable="true"><b>Study In</b></th>-->
                            <th  data-sortable="true"><b>Age</b></th>
                            <th  data-sortable="true"><b>Address</b></th>
                            <th  colspan="1" class="text-center"><b>Actions</b></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($result as $array){?>
                        <tr>
                            <td><?=$array->s_id?></td>
                            <td><?=$array->name?></td>
                            <td><?=$array->f_name?></td>
                            <td><?=$array->contact?></td>
                            <td><?=$array->email?></td>
<!--                            <td><?=$array->course_title?></td>
                            <td><?=$array->subject_title?></td>-->
                            <td><?=$array->age?></td>
                            <td><?=$array->address?></td>
                             <td>
                                 <div class="btn-group">
                                     <button style="position: relative;width: 100px;" data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-outline margin">Action <span class="caret"></span></button>
                                    <div class="dropdown-menu " style="background:#444D53; color:white; text-decoration: none;">
                                        <a class="dropdown-item btn-primary btn-outline margin" href="<?= site_url()?>admin/student_edit/<?= $array->s_id ?>">Edit</a><br><hr>
                                        <a class="dropdown-item btn-primary btn-outline margin" href="<?= site_url()?>admin/student_delete/<?= $array->s_id ?>/<?= $array->u_id ?>">Delete</a><br><hr>
<!--                                        <a class="dropdown-item btn-primary btn-outline margin" href="<?= site_url()?>monthlytest/result_add/<?= $array->s_id ?>">Add Result</a><br><hr>-->
                                        <a class="dropdown-item btn-primary btn-outline margin" href="<?= site_url()?>admin/new_courses/<?= $array->s_id ?>">Add Course</a><br><hr>
                                        <a class="dropdown-item btn-primary btn-outline margin" href="<?= site_url()?>admin/student_details/<?= $array->s_id ?>">View Detail</a><br>
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