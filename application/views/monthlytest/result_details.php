
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Result Details</li>
        </ol>
    </div><!--/.row-->
    


    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header ">Result Information</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">Result Details
                  <a href="<?= site_url()?>monthlytest/test_studentdetails/<?= $result->test_id;?>" type="button" style="position: relative;width: 120px; " class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a>

              </div>
                <div class="panel-body">
                    <div class="panel-heading panel_style ">Student Information</div>
                            <div class="col-md-12">
                            </div>
                    <div class="row" style="position: relative;margin-top: 25px;">
                                 <div class="form-group col-md-4 margin_left">
                                     <label>Name:&nbsp;&nbsp;</label><?= $result->name?>
                                 </div>
                                 <div class="form-group col-md-4 ">
                                  <label>Father Name:&nbsp;&nbsp;</label><?= $result->f_name?>
                                 </div>
                            </div>
                            <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                  <label>Registration Number:&nbsp;&nbsp; </label><?= $result->fkstudent_id?>
                                 </div>
                                 <div class="form-group col-md-4">
                                  <label>Age:&nbsp;&nbsp; </label><?= $result->age?>
                                 </div>
                            </div>
                            <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                  <label>Contact:&nbsp;&nbsp; </label><?= $result->contact?>
                                 </div>
                                 <div class="form-group col-md-4">
                                  <label>Email:&nbsp;&nbsp; </label><?= $result->email?>
                                 </div>
                            </div>
                            <div class="row">
                                 <div class="form-group col-md-4 margin_left">
                                  <label>Address:&nbsp;&nbsp; </label><?= $result->address?>
                                 </div>
                                 <div class="form-group col-md-4">
                                  <label>Subject:&nbsp;&nbsp; </label></label><?= $result->subject_title?>
                                 </div>
                            </div>
                            
                            <div class="row" >
                            <div class="panel-heading panel_style">Fee History</div>
                            </div>    
                            <div class="panel-body">
                                <table data-toggle="table" data-show-refresh="false" data-search="false" data-pagination="false" data-sort-name="false" data-sort-order="false">
                                    <thead>
                                    <tr>
                                        <th class="text-center" data-sortable="true"><b>Month</b></th>
                                        <th class="text-center" data-sortable="true"><b>Admission Fee</b></th>
                                        <th class="text-center" data-sortable="true"><b>Monthly Fee</b></th>
                                        <th class="text-center" data-sortable="true"><b>Total Fee</b></th>
                                        <th class="text-center" data-sortable="true"><b>Paid Amount</b></th>
                                        <th class="text-center" data-sortable="true"><b>Remaining Balance</b></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $received_fee = 0;
                                        $fee_to_paid  = 0;
                                        foreach ($payment as $array){
                                            if( $array->tobepaid_or_paid_fee == 0 && $array->reason =='Admission Fee'){
                                                $admission_fee = $array->amount;
                                            }
                                            if( $array->tobepaid_or_paid_fee == 0 && $array->reason =='Monthly Fee'){
                                                $monthly_fee = $array->amount;
                                            }
                                            if( $array->tobepaid_or_paid_fee == 1 ){
                                                $received_fee += $array->amount;
                                            }else{
                                                $fee_to_paid += $array->amount;
                                            }
                                        }
                                        $remaining_amount = $fee_to_paid - $received_fee;
                                     ?>
                                    <?php foreach ($payment as $array)?>
                                     
                                    <tr>
                                        <td class="text-center"><?=$result->test_month?></td>
                                        <td class="text-center"><?=$admission_fee?></td>
                                        <td class="text-center"><?=$monthly_fee?></td>
                                        <td class="text-center"><?=$fee_to_paid?></td>
                                        <td class="text-center"><?=$received_fee?></td>
                                        <td class="text-center"><?=$remaining_amount?></td>
                                    </tr>

                                    </tbody>

                                </table>
                            </div>
                           
                           
                             <!--<div class="panel-heading panel_style">Monthly Attendance Report</div>
                           
                            <div class="panel-body">
                                <table>
                                    <thead>
                                    <tr>
                                        <th  data-sortable="true"><b>Month</b></th>
                                        <th  colspan="34" class="text-center" data-sortable="true"><b>Date</b></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td>january</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>11</td>
                                        <td>12</td>
                                        <td>13</td>
                                        <td>14</td>
                                        <td>15</td>
                                        <td>16</td>
                                        <td>17</td>
                                        <td>18</td>
                                        <td>19</td>
                                        <td>20</td>
                                        <td>21</td>
                                        <td>22</td>
                                        <td>23</td>
                                        <td>24</td>
                                        <td>25</td>
                                        <td>26</td>
                                        <td>27</td>
                                        <td>28</td>
                                        <td>29</td>
                                        <td>30</td>
                                        <td>31</td>
                                      
                                    </tr>
                                    

                                    </tbody>

                                </table>
                            </div>-->
                           
                       
                            <div class="panel-heading panel_style">Class Performance</div>
                     
                            <div class="panel-body">
                                    <table data-toggle="table" data-show-refresh="false" data-search="false" data-pagination="false">
                                        <thead>
                                        <tr>
                                            <th class="text-center" data-sortable="true"><b>Month</b></th>
                                            <th class="text-center" data-sortable="true"><b>Percentage</b></th>
                                            
                                        </tr>
                                        
                                        </thead>
                                        <tbody>
                                        
                                        <tr>
                                            <td class="text-center"><?=$result->test_month?></td>
                                            <td class="text-center"><?=$result->percentage?><?php if('percentage' >= 0){ echo ' %';} ?></td>
                                        </tr>
                                       
                                        </tbody>

                                    </table>
                                </div>
                          
                            <div class="panel-heading panel_style">Result Record</div>
                           
                                <div class="panel-body">
                                    <table data-toggle="table" data-show-refresh="false" data-search="false" data-pagination="false" data-sort-name="false" data-sort-order="false">
                                        <thead>
                                        <tr>
                                            <th class="text-center" data-sortable="true"><b>Month</b></th>
                                            <th class="text-center" data-sortable="true"><b>Marks total</b></th>
                                            <th class="text-center" data-sortable="true"><b>Marks obtain</b></th>
                                            <th class="text-center" data-sortable="true"><b>Percentage</b></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                    
                                        <tr>
                                            <td class="text-center"><?=$result->test_month?></td>
                                            <td class="text-center"><?=$result->total_marks?></td>
                                            <td class="text-center"><?=$result->ob_marks?></td>
                                            <td class="text-center"><?=$result->percentage?><?php if('percentage' >= 0){ echo ' %';} ?></td>
                                        </tr>
                                   
                                        </tbody>

                                    </table>
                                </div>
                 </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
    </div>
  </div>



