<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Admin / View Students/Fee Remain</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Unpaid Students</h1>
        </div>
    </div>
    <!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Unpaid Fee Students Record
                    <a href="<?= site_url() ?>admin/student_view" type="button"
                       style="position: relative;width: 120px;left: 35px; "
                       class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a>
                </div>
                <div class="panel-body">
                    <table data-toggle="table" data-show-refresh="true" data-search="true"
                           data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name"
                           data-sort-order="ase">
                        <thead>
                        <tr>
                            <th data-sortable="true"><b>Reg No</b></th>
                            <th data-sortable="true"><b>Name</b></th>
                            <th data-sortable="true"><b>Father Name</b></th>
                            <th data-sortable="true"><b>Contact</b></th>
                            <th data-sortable="true"><b>Email</b></th>
                            <th data-sortable="true"><b>Profession</b></th>
                            <th data-sortable="true"><b>Address</b></th>
                            <th class="text-center"><b>Status</b></th>
                            <th class="text-center"><b>Send SMS</b></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $this->db->select("*");
                        $query = $this->db->get('student');
                        $students = $query->result();
                        foreach ($students as $student) {
                            $this->db->select("*");
                            $this->db->where('tobepaid_or_paid_fee', 0);
                            $this->db->where('fkstudent_id', $student->s_id);
                            $query = $this->db->get('payment');
                            $u_payments = $query->result();
                            $total_upay = 0;
                            foreach ($u_payments as $u_payment) {
                                $total_upay = $total_upay + $u_payment->amount;
                            }
                            // for paid:
                            $this->db->select("*");
                            $this->db->where('tobepaid_or_paid_fee', 1);
                            $this->db->where('fkstudent_id', $student->s_id);
                            $query = $this->db->get('payment');
                            $p_payments = $query->result();
                            $total_pay = 0;
                            foreach ($p_payments as $p_payment) {
                                $total_pay = $total_pay + $p_payment->amount;

                            }
                            if ($total_upay - $total_pay != 0) {
                                $this->db->select("*");
                                $this->db->where('u_id', $student->fkuser_id);
                                $query = $this->db->get('users');
                                $users = $query->result();
                                foreach ($users as $user) { ?>
                                    <tr>
                                        <td><?php echo $student->s_id; ?></td>
                                        <td><?php echo $user->name; ?></td>
                                        <td><?php echo $user->f_name; ?></td>
                                        <td><?php echo $user->contact; ?></td>
                                        <td><?php echo $user->email; ?></td>
                                        <td><?php echo $student->profession; ?></td>
                                        <td><?php echo $user->address; ?></td>
                                        <td><?php if($student->status==1){?>
                                             <a href="<?php echo site_url(); ?>admin/std_status/0/<?php echo  $student->s_id; ?>" class="btn btn-info">Active</a>
                                            <?php } ?>
                                            <?php if($student->status==0){?>
                                             <a href="<?php echo site_url(); ?>admin/std_status/1/<?php echo  $student->s_id; ?>" class="btn btn-danger">Deactive</a>
                                            <?php } ?></td>
                                        <td><?php echo anchor('admin/send_sms/'.$user->u_id,'<i class="glyphicon glyphicon-send btn btn-info"></i>'); ?></td>
                                    </tr>
                                <?php }
                            }
                        } ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->

</div><!--/.main-->