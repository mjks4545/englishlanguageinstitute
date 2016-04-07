<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        <li class="active"><a href="<?= site_url()?>home"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
        <li class="parent ">
            <a href="#">
                <span class="glyphicon glyphicon-user"></span> Users <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li>
                    <a class="" href="<?= site_url()?>director">
                        <span class="glyphicon glyphicon-user"></span> Director
                    </a>
                </li>
                <li>
                    <a  href="<?= site_url()?>reception">
                        <span class="glyphicon glyphicon-user"></span> Receptionist
                    </a>
                </li>
                <li>
                    <a  href="<?= site_url()?>admin">
                        <span class="glyphicon glyphicon-user"></span> Admin
                    </a>
                </li>
                <li>
                    <a  href="#">
                        <span class="glyphicon glyphicon-user"></span> Visitor
                    </a>
                </li>
                <li>
                    <a  href="#">
                        <span class="glyphicon glyphicon-user"></span> Student
                    </a>
                </li>
                <li>
                    <a  href="#">
                        <span class="glyphicon glyphicon-user"></span> Teacher
                    </a>
                </li>

            </ul>
            <a href="#">
                <span class="glyphicon glyphicon-user"></span>Applications<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span>
            </a>
            <ul class="children" id="sub-item-2">
                <li>
                    <a  href="<?= site_url()?>applications/class_time_change">
                        <span class="glyphicon glyphicon-share-alt"></span> Class Time Change
                    </a>
                </li>
                <li>
                    <a  href="<?= site_url()?>applications/freeze_up">
                        <span class="glyphicon glyphicon-share-alt"></span> Freeze Up
                    </a>
                </li>
                <li>
                    <a  href="<?= site_url()?>applications/class_promotion">
                        <span class="glyphicon glyphicon-share-alt"></span> Class Promotion
                    </a>
                </li>
            </ul>

        </li>
        <li>
            <a href="<?= site_url()?>accountsection/student_registration">
                <span class="glyphicon glyphicon-th"></span> Account Section
            </a>
        </li>
        <li><a href="charts.html"><span class="glyphicon glyphicon-stats"></span> Charts</a></li>
        <li><a href="tables.html"><span class="glyphicon glyphicon-list-alt"></span> Tables</a></li>
        <li><a href="forms.html"><span class="glyphicon glyphicon-pencil"></span> Forms</a></li>
        <li><a href="buttons.html"><span class="glyphicon glyphicon-hand-up"></span> Buttons</a></li>
        <li><a href="panels.html"><span class="glyphicon glyphicon-info-sign"></span> Alerts &amp; Panels</a></li>

        <li role="presentation" class="divider"></li>
        <li><a href="login.html"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
    </ul>
</div><!--/.sidebar-->