<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        <li class="active"><a href="<?= site_url()?>home"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>
        <li class="parent ">
            <a href="#">
                <span class="glyphicon glyphicon-user"></span> Users <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li>
                    <a class="" href="<?= site_url()?>director">
                        <span class="glyphicon glyphicon-user "></span> Director
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
                <span class="glyphicon glyphicon-envelope "></span>Applications<span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span>
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
             <a href="#">
                <span class="glyphicon glyphicon-book"></span>Courses<span data-toggle="collapse" href="#sub-item-3" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span>
              </a>
            <ul class="children collapse" id="sub-item-3">
                <li>
                    <a  href="<?= site_url()?>courses/course_add">
                        <span class="glyphicon glyphicon-share-alt"></span> Add new course
                    </a>
                </li>
                <li>
                    <a  href="<?= site_url()?>courses/coursecategory_add">
                        <span class="glyphicon glyphicon-share-alt"></span> Add new category
                    </a>
                </li>
                <li>
                    <a  href="<?= site_url()?>courses/subject_add">
                        <span class="glyphicon glyphicon-share-alt"></span> Add new subject
                    </a>
                </li>
               
            </ul>
            <a href="#">
                <span class="glyphicon glyphicon-file"></span>Examination<span data-toggle="collapse" href="#sub-item-4" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span>
              </a>
            <ul class="children collapse" id="sub-item-4">
                <li>
                    <a  href="<?= site_url()?>admin/student_view">
                        <span class="glyphicon glyphicon-share-alt"></span> Add Test Result
                    </a>
                </li>
                <li>
                    <a  href="<?= site_url()?>monthlytest/result_view">
                        <span class="glyphicon glyphicon-share-alt"></span> View Result
                    </a>
                </li>
            </ul>
           
    
        <li>
            <a href="<?= site_url()?>accountsection/account_index">
                <span class="glyphicon glyphicon-transfer"></span> Finance
            </a>
        </li>
        <li>
            <a href="<?= site_url()?>home">
                <span class="glyphicon glyphicon-user"></span> Logout
            </a>
        </li>
    </ul>
</div><!--/.sidebar-->