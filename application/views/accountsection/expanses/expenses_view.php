
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Expenses</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"></h1>
        </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Expenses Details
                 <a href="<?= site_url()?>accountsection/expanses_add" type="button" style="position: relative;width: 170px;" class="btn btn-primary btn-outline margin  pull-right"><b>Add New Record</b></a>
                 <a href="<?= site_url()?>accountsection/expanses_index" type="button" style="position: relative;width: 120px; left: 35px;" class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a>
                </div>
                <div class="panel-body">
                   <legend> <h2 style="text-align:center;">Expenses Report</h2></legend>
                    <button class="btn btn-primary btn-outline margin pull-right col-sm-1"  type="button"><span class="glyphicon glyphicon-print"></span>Print</button>
                    <table data-toggle="table"  data-show-refresh="true"  data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                          <tr>
                             <th class="text-center"><b>S.No</b></th>
                             <th class="text-center"><b>Description</b></th>
                             <th class="text-center"><b>V.NO</b></th>
                             <th class="text-center"><b>Amount</b></th>
                             <th class="text-center"><b>Date</b></th>
                          </tr>
                         
                        </thead>
                            <tbody>
                                <?php 
                                    $amm = '';    
                                    foreach ($result as $array) {?>
                                <tr>
                                  <td><?= $array->expense_id?></td>
                                  <td><?= $array->item_name?></td>
                                  <td><?= $array->v_number?></td>
                                  <?php $amm += $array->item_amount; ?>
                                  <td><?= $array->item_amount?></td>
                                  <td><?= $array->created_at?></td>
                                </tr>
                                
                                <?php }?>
                                <tr>
                                    
                                    <td ></td>
                                    <td colspan="3" class="text-info text-center"><b>TOTAL</b></td>
                                    <td colspan="3" ></td>
                                    <td ><?=$amm?></td>
                                    <td colspan="3"></td>
                                    
                                </tr>
                            </tbody>
                               
                    </table>
                    <!---------class record end----------------->
                </div>
                <h4 style="position: relative;text-align:center; top: 30px;"><b>Daily Income/Expense Details</b></h4>
                <button class="btn btn-primary btn-outline margin pull-right col-sm-1" type="button"><span class="glyphicon glyphicon-print"></span>Print</button>
                <div class="panel-body" style="position: relative;top: 25px;">
                    <table data-toggle="table" data-show-refresh="false" data-search="false" data-pagination="false" data-sort-name="false" data-sort-order="false">
                        <thead>
                        <tr>
                            <th class="text-center" data-sortable="true"><b>Daily Income</b></th>
                            <th class="text-center" data-sortable="true"><b>Daily Expenses</b></th>
                            <th class="text-center" data-sortable="true"><b>Daily Revenue</b></th>
                        </tr>
                        </thead>
                        <?php 
                            $total_am = 0;
                            foreach( $payment as $payment){
                            $total_am += $payment->amount;} 
                            $revenue = $total_am - $amm;
                        ?>
        
                        <tbody>
                        
                        <tr>
                            <td class="text-center"><?=$total_am?></td>
                            <td class="text-center"><?=$amm?></td>
                            <td class="text-center"><?=$revenue?></td>
                        </tr>
                      
                        </tbody>

                    </table>
                </div>
                
                 <!------------------------------------------------>
                 <h4 style="position: relative;text-align:center; top: 30px;"><b>Weekly Income/Expense Details</b></h4>
                <button class="btn btn-primary btn-outline margin pull-right col-sm-1" type="button"><span class="glyphicon glyphicon-print"></span>Print</button>
                <div class="panel-body" style="position: relative;top: 25px;">
                    <table data-toggle="table" data-show-refresh="false" data-search="false" data-pagination="false" data-sort-name="false" data-sort-order="false">
                        <thead>
                        <tr>
                            <th class="text-center" data-sortable="true"><b>Weekly Income</b></th>
                            <th class="text-center" data-sortable="true"><b>Weekly Expenses</b></th>
                            <th class="text-center" data-sortable="true"><b>Weekly Revenue</b></th>
                        </tr>
                        </thead>
                       
        
                        <tbody>
                        
                        <tr>
                            <td class="text-center"><?=$total_am?></td>
                            <td class="text-center"><?=$amm?></td>
                            <td class="text-center"><?=$revenue?></td>
                        </tr>
                      
                        </tbody>

                    </table>
                </div>
                 <!-------------------------------------------------->
                 <h4 style="position: relative;text-align:center; top: 30px;"><b>Monthly Income/Expense Details</b></h4>
                 <button class="btn btn-primary btn-outline margin pull-right col-sm-1" type="button"><span class="glyphicon glyphicon-print"></span>Print</button>
                 <div class="panel-body" style="position: relative;top: 25px;">
                    <table data-toggle="table" data-show-refresh="false" data-search="false" data-pagination="false" data-sort-name="false" data-sort-order="false">
                        <thead>
                        <tr>
                            <th class="text-center" data-sortable="true"><b>Monthly Income</b></th>
                            <th class="text-center" data-sortable="true"><b>Monthly Expenses</b></th>
                            <th class="text-center" data-sortable="true"><b>Monthly Revenue</b></th>
                        </tr>
                        </thead>
                       
                        <tbody>
                        
                        <tr>
                            <td class="text-center"><?=$total_am?></td>
                            <td class="text-center"><?=$amm?></td>
                            <td class="text-center"><?=$revenue?></td>
                        </tr>
                      
                        </tbody>

                    </table>
                </div>
                 <!----------------------------------------------->
                 
                 <h4 style="position: relative;text-align:center; top: 30px;"><b>Yearly Income/Expense Details</b></h4>
                 <button class="btn btn-primary btn-outline margin pull-right col-sm-1" type="button"><span class="glyphicon glyphicon-print"></span>Print</button>
                 <div class="panel-body" style="position: relative;top: 25px;">
                    <table data-toggle="table" data-show-refresh="false" data-search="false" data-pagination="false" data-sort-name="false" data-sort-order="false">
                        <thead>
                        <tr>
                            <th class="text-center" data-sortable="true"><b>Yearly Income</b></th>
                            <th class="text-center" data-sortable="true"><b>Yearly Expenses</b></th>
                            <th class="text-center" data-sortable="true"><b>Yearly Revenue</b></th>
                        </tr>
                        </thead>
                       
        
                        <tbody>
                        
                        <tr>
                            <td class="text-center"><?=$total_am?></td>
                            <td class="text-center"><?=$amm?></td>
                            <td class="text-center"><?=$revenue?></td>
                        </tr>
                      
                        </tbody>

                    </table>
                </div>
                
                    
            </div>

        </div>

    </div><!--/.row-->
 
</div>