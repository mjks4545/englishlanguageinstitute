


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <title>Invoice</title>
    <link href="<?=base_url()?>public/css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url()?>public/css/style_invoice.css" rel="stylesheet">
    <link href="<?=base_url()?>public/css/print.css" rel="stylesheet">
    <script src="<?=base_url()?>public/js/jquery-1.3.2.min.js"></script>
    <script src="<?=base_url()?>public/js/example.js"></script>

    <script>
        function func(){
            window.print();
        }
    </script>

</head>
<body>
<div class="col-md-3">
    <div id="page-wrap">
        <div id="header" style="height: 30px;">STAFF INVOICE</div>
        <div id="identity" style="position: relative; top: 10px;">
            <p id="address">School Name</br> Phone: 0937-45687913</p>
            <div id="logo">
                <img src="<?php echo site_url(); ?>public/img/invoice_logo.png" alt="mypic" width="190px" height="120px"/>
            </div>
        </div>
        <div style="clear:both"></div>
        <div id="customer">
            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td>000123</td>
                </tr>
                <tr>
                    <td class="meta-head">Date</td>
                    <td id="date"><?= mdate("%y-%m-%d");?></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><div class="due"><?= $remain_salary+$paid_salary ?></div></td>
                </tr>
            </table>
            <b>Name:</b> <?= $name?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div style="position: relative;bottom:17px;left: 260px;">Staff ID:<?=$id?></div>

        </div>
        <table id="items" width="100%">
            <tr>
                <th width="20%;" class="text-center">Date</th>
                <th colspan="3" width="40%;" class="text-center">Description</th>
                <th width="30%;" class="text-center">Amount</th>
            </tr>

            <tr class="item-row">
                <td class="item-name " style="text-align: center"><?= mdate("%y-%m-%d");?></td>
                <td colspan="3"  class="cost" style="width:100%;text-align: center">
                    <?php echo str_replace('%20','&nbsp',$amount_reason); ?>
                </td>
                <td class="qty " style="position: relative;text-align:right"><?= $paid_salary?></td>
            </tr>

            <tr>
                <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row"></a></td>
            </tr>
            <tr>
                <td colspan="2" class="blank"> </td>
                <td colspan="2" class="total-line">Total</td>
                <td class="total-value"><div id="total"><?=$total_salary?> /-</div></td>
            </tr>
            <tr>
                <td colspan="2" class="blank"> </td>
                <td colspan="2" class="total-line">Amount Paid</td>
                <td class="total-value" id="paid"><?=$paid_salary?> /-</td>
            </tr>
            <tr>
                <td colspan="2" class="blank"> </td>
                <td colspan="2" class="total-line balance">Balance Due</td>
                <td class="total-value balance"><div class="due"><?= $remain_salary?> /-</div></td>
            </tr>
        </table>
        <div id="terms">
            <div style="position: relative;left: 310px;bottom: 20px;"><button onclick="func()">print</button></div>
        </div>

        <div style="position: relative;top: 50px; left: 470px;">
            <h5>Signature : </h5> <div style="position: relative;width: 30%;bottom: 20px;left: 65px; "><hr></div>
        </div>
    </div>
</div>
<div class="col-md-3"></div>
<div class="col-md-3">
    <div id="page-wrap">
        <div id="header"style="position: relative; height: 30px;top:20px; ">STAFF INVOICE</div>
        <div id="identity"style="position: relative; top: 10px;">
            <p id="address">School Name</br> Phone: 0937-245583467</p>
            <div id="logo">
                <img src="<?php echo site_url(); ?>public/img/invoice_logo.png" alt="mypic" width="190px" height="120px"/>
            </div>
        </div>
        <div style="clear:both"></div>
        <div id="customer">
            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td>000123</td>
                </tr>
                <tr>
                    <td class="meta-head">Date</td>
                    <td id="date"><?= mdate("%y-%m-%d");?></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><div class="due"><?= $remain_salary+$paid_salary?></div></td>
                </tr>
            </table>
            <b>Name:</b> <?=$name?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div style="position: relative;bottom:17px;left: 260px;">Staff ID:<?=$id?></div>

        </div>
        <table id="items" width="100%">
            <tr>
                <th width="20%;" class="text-center">Date</th>
                <th colspan="3" width="40%;" class="text-center">Description</th>
                <th width="30%;" class="text-center">Amount</th>
            </tr>

            <tr class="item-row">
                <td class="item-name " style="text-align: center"><?= mdate("%y-%m-%d");?></td>
                <td colspan="3"  class="cost" style="width:100%;text-align: center">
                    <?php echo str_replace('%20','&nbsp',$amount_reason); ?></td>
                <td class="qty pull-right" style="position: relative;"><b class="pull-right"><?=$paid_salary?></b></td>
            </tr>

            <tr>
                <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row"></a></td>
            </tr>
            <tr>
                <td colspan="2" class="blank"> </td>
                <td colspan="2" class="total-line">Total</td>
                <td class="total-value"><div id="total"><?=$total_salary?> /-</div></td>
            </tr>
            <tr>
                <td colspan="2" class="blank"> </td>
                <td colspan="2" class="total-line">Amount Paid</td>
                <td class="total-value" id="paid"><?=$paid_salary?> /-</td>
            </tr>
            <tr>
                <td colspan="2" class="blank"> </td>
                <td colspan="2" class="total-line balance">Balance Due</td>
                <td class="total-value balance"><div class="due"><?= $remain_salary?> /-</div></td>
            </tr>
        </table>
        <div id="terms">

        </div>

        <div style="position: relative;top: 50px; left: 470px;">
            <h5>Signature : </h5> <div style="position: relative;width: 30%;bottom: 20px;left: 65px; "><hr></div>
        </div>
    </div>
</body>
</html>

