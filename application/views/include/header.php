<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>USECS</title>

    <link href="<?=base_url()?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>public/css/datepicker3.css" rel="stylesheet">
    <link href="<?=base_url()?>public/css/styles.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <link href="<?=base_url()?>public/css/rgba-fallback.css" rel="stylesheet">
    <script src="<?=base_url()?>public/js/html5shiv.js"></script>
    <script src="<?=base_url()?>public/js/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span>The University of Spoken English & Computer Courses</span></a>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="glyphicon glyphicon-envelope"></i>  <span class="label label-danger">2</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="http://placehold.it/40/ccc/fff">
                                </a>
                                <div class="message-body">
                                    <small class="pull-right">3 mins ago</small>
                                    <a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
                                    <br />
                                    <small class="text-muted">1:24 pm - 25/03/2015</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="http://placehold.it/40/ccc/fff">
                                </a>
                                <div class="message-body">
                                    <small class="pull-right">1 hour ago</small>
                                    <a href="#">New message from <strong>Jane Doe</strong>.</a>
                                    <br />
                                    <small class="text-muted">12:27 pm - 25/03/2015</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>

                        <li>
                            <div class="all-button">
                                <a href="#">
                                    <em class="glyphicon glyphicon-inbox"></em> <strong>All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="glyphicon glyphicon-bell"></i>  <span class="label label-primary">18</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <em class="glyphicon glyphicon-envelope"></em> 1 New Message
                                    <span class="pull-right text-muted small">3 mins ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <em class="glyphicon glyphicon-heart"></em> 12 New Likes
                                    <span class="pull-right text-muted small">4 mins ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <em class="glyphicon glyphicon-user"></em> 5 New Followers
                                    <span class="pull-right text-muted small">4 mins ago</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.container-fluid -->
</nav>