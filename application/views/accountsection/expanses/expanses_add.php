<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Accounts / Expenses</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Expenses</h1>
        </div>
    </div><!--/.row-->
     
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div  class="panel-heading">Add Expanses Form
                <a href="<?= site_url()?>accountsection/expanses_index" type="button" style="position: relative;width: 120px;" class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a>
                </div>
               
                <div class="panel-body margin_left">
		    
                    <form role="form" method="post" action="<?= site_url()?>accountsection/create_expenses_after_post"> 
                        <div class="row ">
                            <div class="form-group col-sm-5">
                                <label >Description</label>
                                <select  name="item_name_1" class="form-control" style="background:#444D53; color:white;">
                                    <option>Select desired option</option>
                                    <option value="Intermediate Series">Intermediate Series</option>
                                    <option value="Higher Series">Higher Series</option>
                                    <option value="Starter Series">Starter Series</option>
                                    <option value="Pre-Starter Series">Pre-Starter Series</option>
                                    <option value="Elementary">Elementary</option>
                                    <option value="C.PEL">C.PEL</option>
                                    <option value="IELTS">IELTS</option>
                                    <option value="Grammar">Grammar</option>
                                    <option value="Information Technology">Information Technology</option>
                                    <option value="Monthly Fee of IT/EL">Monthly Fee of IT/EL</option>
                                    <option value="Certificate Fee of IT/EL">Certificate Fee of IT/EL</option>
                                    <option value="Old Balance of IT/EL">Old Balance of IT/EL</option>
                                    <option value="ID Card Fee">ID Card Fee</option>
                                    <option value="D.I.T Exam Fee">D.I.T Exam Fee</option>
                                    <option value="Entry Test Fee">Entry Test Fee</option>
                                    <option value="Promotion Fee">Promotion Fee</option>
                                    <option value="ECC">ECC</option>
                                    <option value="Photostate">photostat</option>
                                    <option value="Unit 001">Unit 001</option>
                                    <option value="Unit 002">Unit 002</option>
                                    <option value="Unit 003">Unit 003</option>
                               </select>
                            </div>
                            <div class="form-group col-sm-2">
                                <label>V.No</label>
                                <input type="text" name="v_number_1" style="color: white" class="form-control" placeholder="V.No" >
                                <input type="hidden" id="number" name="number" value="1" />
                            </div>
                            <div class="form-group col-sm-2">
                                <label class="margin_left">Amount</label>
                                <input type="text" name="item_amount_1" style="color: white" class="form-control" placeholder="Amount" >
                            </div>
                            <div class="form-group col-sm-2">
				<label></label>
                                <a id="add-another" href="#" style="position: relative;width: 120px;" class="btn btn-primary btn-outline margin  pull-right"><b>Add Another</b></a>
                            </div>
                        </div>
			<div id="add-another-one">
			    
			</div>    
			
			<div class="row ">
                            
                            <div class="form-group col-sm-5">
                                <label >Description</label>
                                <input type="text" name="item_name_d_1" style="color: white" class="form-control" placeholder="Item Description" >
				<input type="hidden" id="number-d" name="number-d" value="1" />
                            </div>
                            <div class="form-group col-sm-2">
<!--                                <label>V.No</label>
                                <input type="text" name="v_number_d_1" style="color: white" class="form-control" placeholder="V.No" >-->
                            </div>
                            <div class="form-group col-sm-2">
                                <label class="margin_left">Amount</label>
                                <input type="text" name="item_amount_d_1" style="color: white" class="form-control" placeholder="Amount" >
                            </div>
			    <div class="form-group col-sm-2">
				<label></label>
                                <a id="add-another-d" href="#" style="position: relative;width: 120px;" class="btn btn-primary btn-outline margin  pull-right"><b>Add Another</b></a>
                            </div>
			    
                        </div>
			
			<div id="add-another-one-d">
			    
			</div>
                       
                        <div class="row">
                            <div class=" col-md-12">
                                <button style="position: relative;top: 10px;" type="submit" class="btn btn-primary col-sm-2">Submit</button>
                            </div>

                         </div>
                  
                    </form>

                </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
    </div>
</div>

