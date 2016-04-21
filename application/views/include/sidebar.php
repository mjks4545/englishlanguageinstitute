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
                

            </ul>
            <a href="#">
                <span class="glyphicon glyphicon-user"></span>Applications<span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-2">
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
                 <li>
                    <a  href="<?= site_url()?>applications/applications_views">
                        <span class="glyphicon glyphicon-share-alt"></span> View Applications
                    </a>
                </li>
            </ul>

        </li>
        <li>
            <a href="<?= site_url()?>accountsection/student_registration">
                <span class="glyphicon glyphicon-th"></span> Account Section
            </a>
        </li>
         <li>
            <a href="<?= site_url()?>courses/course_add">
                <span class="glyphicon glyphicon-th"></span> Courses
            </a>
        </li>
        <li>
            <a href="<?= site_url()?>home">
                <span class="glyphicon glyphicon-user"></span> Logout
            </a>
        </li>
    </ul>
</div><!--/.sidebar-->