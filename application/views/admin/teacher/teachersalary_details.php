

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Teacher Salary Details</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Teacher Salary Details</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div  class="panel-heading">Employee details
                     <a href="<?= site_url()?>admin/teacher_view" type="button" class="btn btn-primary btn-outline margin col-sm-1 pull-right"><b>Back</b></a>   
                     <a href="<?= site_url()?>admin/teachersalary_payment/<?=$teacher[0]->t_id;?>" type="button" class="btn btn-primary btn-outline margin col-sm-1 pull-right"><b>Pay Salary</b></a>
                </div>
                <div class="panel-body">
                    <table data-toggle="table" data-show-refresh="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                        <tr>
                            
                           <th class="text-center"><b>Teacher ID</b></th>
                           <th class="text-center"><b>Salary/Month</b></th>
                           <th class="text-center"><b>Paid Salary</b></th>
                           <th class="text-center"><b>Remain Salary</b></th> 
                           <th class="text-center"><b>Paid Month</b></th>
                           <th class="text-center"><b>Amount Reason</b></th>                   
                        </tr>
                        </thead>
                        <tbody>
                             <?php  foreach ($result as $array) {?>
                            <tr>
                                <td><?php echo $array->fkteacher_id;?></td>
                                <td><?php echo $array->total_salary;?></td>
                                <td><?php echo $array->paid_salary;?></td>
                                <td><?php echo $array->remaining_salary;?></td>
                                <td><?php $month=$array->paid_month;
                                 switch ($month) {
                                    case 1:
                                        echo 'Jan';
                                         break;
                                    case 2:
                                        echo 'Feb';
                                         break;
                                     case 3:
                                        echo 'Mar';
                                         break;
                                     case 4:
                                        echo 'Apr';
                                         break;
                                     case 5:
                                        echo 'May';
                                         break;
                                     case 6:
                                        echo 'Jun';
                                         break;
                                     case 7:
                                        echo 'Jul';
                                         break;
                                     case 8:
                                        echo 'Aug';
                                         break;
                                     case 9:
                                        echo 'Sep';
                                         break;
                                     case 10:
                                        echo 'Oct';
                                         break;
                                    case 11:
                                        echo 'Nov';
                                         break;
                                    case 12:
                                        echo 'Dec';
                                         break; 
                                 }
                                    ?></td>
                                <td><?php echo $array->amount_reason;?></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row-->

</div><!--/.main-->
