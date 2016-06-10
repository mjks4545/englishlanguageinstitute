

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Monthly Reports / Profit & Loss</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"></h1>
        </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Profit & Loss Details
                 <a href="<?= site_url()?>reports/monthly_index" type="button" class="btn btn-primary btn-outline margin col-sm-1  pull-right"><b>Back</b></a>
                </div>
                
                 <h4 style="position: relative;text-align:center; top: 30px;"><b>Monthly Income/Expense Details</b></h4>
                 <div class="panel-body" style="position: relative;top: 25px;">
                    <table data-toggle="table" data-show-refresh="false" data-search="false" data-pagination="false" data-sort-name="false" data-sort-order="false">
                        <thead>
                        <tr>
                            <th class="text-center" data-sortable="true"><b>Monthly Income</b></th>
                            <th class="text-center" data-sortable="true"><b>Monthly Expenses</b></th>
                            <th class="text-center" data-sortable="true"><b>Monthly Revenue</b></th>
                        </tr>
                        </thead>
                       <?php 
                        
                            $total_expense_monthly = 0;
                            $total_income_amount_monthly = 0;
                           
                            foreach( $expenses_month as $expense_m){
                                $total_expense_monthly += $expense_m->rupees;
                                
                            }
                            
                            foreach( $payment_month as $payment_m){
                              $total_income_amount_monthly += $payment_m->amount;
                            } 
                            $revenue = $total_income_amount_monthly - $total_expense_monthly;
                           
                        ?>        
                        <tbody>
                        
                        <tr>
                            <td class="text-center"><?=$total_income_amount_monthly?></td>
                            <td class="text-center"><?=$total_expense_monthly?></td>
                            <td class="text-center"><?=$revenue?></td>
                        </tr>
                      
                        </tbody>

                    </table>
                </div>
                   
            </div>

        </div>

    </div><!--/.row-->
 </div><!--/.row-->
 
</div>