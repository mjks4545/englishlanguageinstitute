
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Weekly Reports / Profit & Loss</li>
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
                 <a href="<?= site_url()?>reports/weekly_index" type="button" class="btn btn-primary btn-outline margin col-sm-1  pull-right"><b>Back</b></a>
                </div>
                    <h4 style="position: relative;text-align:center; top: 30px;"><b>Weekly Income/Expense Details</b></h4>
                    <div class="panel-body" style="position: relative;top: 25px;">
                       <table data-toggle="table" data-show-refresh="false" data-search="false" data-pagination="false" data-sort-name="false" data-sort-order="false">
                           <thead>
                           <tr>
                               <th class="text-center" data-sortable="true"><b>Weekly Income</b></th>
                               <th class="text-center" data-sortable="true"><b>Weekly Expenses</b></th>
                               <th class="text-center" data-sortable="true"><b>Weekly Revenue</b></th>
                           </tr>
                           </thead>
                           <?php 

                               $total_expense_weekly = 0;
                               $total_income_amount_weekly = 0;

                               foreach( $expenses_week as $expense_w){
                                   $total_expense_weekly += $expense_w->rupees;

                               }

                               foreach( $payment_week as $payment_w){
                                 $total_income_amount_weekly += $payment_w->amount;
                               } 
                               $revenue = $total_income_amount_weekly - $total_expense_weekly;

                           ?>                        
                           <tbody>

                           <tr>
                               <td class="text-center"><?=$total_income_amount_weekly?></td>
                               <td class="text-center"><?=$total_expense_weekly?></td>
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