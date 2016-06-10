<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Admin / Other Staff</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Other Staff</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div  class="panel-heading">Staff Record
                     <a href="<?= site_url()?>otherstaff/add_staff_form" type="button" class="btn btn-primary btn-outline margin  pull-right"><b>Add New Staff</b></a>     
                </div>
                <div class="panel-body">
                    <table data-toggle="table" data-show-refresh="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                        <tr>
                            <th data-sortable="true"><b>Reg No</b></th>
                            <th  data-sortable="true"><b>Name</b></th>
                            <th  data-sortable="true"><b>Father Name</b></th>
                            <th  data-sortable="true"><b>Contact</b></th>
                            <th  data-sortable="true"><b>Address</b></th>
                            <th  data-sortable="true"><b>Qualification</b></th>
                            <th  data-sortable="true"><b>Profession</b></th>
                            <th  data-sortable="true"><b>Salary</b></th>
                            <th  data-sortable="true"><b>Job Hours</b></th>
                            <th  data-sortable="true"><b>Contract Time</b></th>
                            <th  data-sortable="true"><b>Appointment Date</b></th>
                            <th class="text-center"><b>Actions</b></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($result as $array) {?>
                            <tr>
                                <td><?= $array->id?></td>
                                <td><?= $array->name?></td>
                                <td><?= $array->father_name?></td>
                                <td><?= $array->contact?></td>
                                <td><?= $array->address?></td>
                                <td><?= $array->qualification?></td>
                                <td><?= $array->profession?></td>
                                <td><?= $array->salary?></td>
                                <td><?= $array->job_hours?></td>
                                <td><?= $array->contract_time?></td>
                                <td><?= $array->appointment_date?></td>
                                
                                <td>
                                    <div class="btn-group">
                                    <button  data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-outline col-md-12 margin">Action <span class="caret"></span></button>
                                    <div class="dropdown-menu min-width-2 " style="background:#444D53; color:white; text-decoration: none;">
                                      <a class="dropdown-item btn-primary btn-outline margin" href="<?= site_url()?>otherstaff/salary_details/<?= $array->id?>">Payment Details</a><br><hr>
                                      <a class="dropdown-item btn-primary btn-outline margin" href="<?= site_url()?>otherstaff/edit_staff/<?= $array->id?>">Edit</a><br><hr>
                                      <a class="dropdown-item btn-primary btn-outline margin" href="<?= site_url()?>otherstaff/delete_staff/<?= $array->id?>">Delete</a><br>
                                     
                                    </div>
                            </tr> 
                        <?php }?>    
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row-->

</div><!--/.main-->
