
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
                                    <?php foreach ($test as $array)?>
                                    <?php 
                                        $total_fee     = $result->admission_fee + $result->monthly_fee;
                                        $remaining_fee = $total_fee - $result->received_fee 
                                     ?>
                                    <tr>
                                        <td class="text-center"><?=$array->test_month?></td>
                                        <td class="text-center"><?=$array->admission_fee?></td>
                                        <td class="text-center"><?=$array->monthly_fee?></td>
                                        <td class="text-center"><?=$total_fee?></td>
                                        <td class="text-center"><?=$array->received_fee?></td>
                                        <td class="text-center"><?=$remaining_fee?></td>
                                    </tr>

                                    </tbody>

                                </table>
                            </div>
                           
                           
                            <div class="panel-heading panel_style">Monthly Attendance Report</div>
                           
                             <!--<div class="panel-body">
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
                             Under Process
                       
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
                                        <?php foreach ($test as $array) {?>
                                        <tr>
                                            <td class="text-center"><?= $array->test_month?></td>
                                            <td class="text-center"><?=$array->percentage?><?php if('percentage' >= 0){ echo ' %';} ?></td>
                                        </tr>
                                        <?php }?>
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
                                        <?php foreach ($test as $array) {?>
                                        <tr>
                                            <td class="text-center"><?=$array->test_month?></td>
                                            <td class="text-center"><?=$array->totl_marks?></td>
                                            <td class="text-center"><?=$array->obtn_marks?></td>
                                            <td class="text-center"><?=$array->percentage?><?php if('percentage' >= 0){ echo ' %';} ?></td>
                                        </tr>
                                        <?php }?>
                                        </tbody>

                                    </table>
                                </div>
                 </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
    </div>
  </div>



