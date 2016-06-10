<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
	<?php 
	    $role_check = $_SESSION['role'];
	    switch ( $role_check ){
		
		case '1':
		    $role = 'director/';
		    break;
		case '2':
		    $role = 'chiefcounselor/';
		    break;
		case '3':
		    $role = 'reception/';
		    break;
		case '4':
		    $role = 'admin/';
		    break;
		default:
		    $role = '';
	    }
	?>
        <li class="active"><a href="<?=site_url() . $role ?>"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>
        <li class="parent ">
	    <?php if( $role_check == 1 || $role_check == 4 ){ ?>
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
        </li>
        <li>
            <a href="<?= site_url()?>monthlytest/test_index">
                <span class="glyphicon glyphicon-file"></span> Examination
            </a>
        </li>
        <li>
            <a href="<?= site_url()?>accountsection/account_index">
                <span class="glyphicon glyphicon-transfer"></span> Finance
            </a>
        </li>
        <li>
            <a href="<?= site_url()?>reports/index">
                <span class="glyphicon glyphicon-tasks"></span> Reports
            </a>
        </li>
	<?php } ?>
        <li>
            <a href="<?= site_url()?>home/logout">
                <span class="glyphicon glyphicon-user"></span> Logout
            </a>
        </li>
    </ul>
</div><!--/.sidebar-->