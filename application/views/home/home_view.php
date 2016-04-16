<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            
        </ol>
    </div><!--/.row-->

        <div class="row margin-login-top">
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">Log In</div>
                    <div class="panel-body">
                        <form role="form" method="post" action="<?=  site_url()?>home/login_after_post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control text-color-white" placeholder="E-mail" name="email" type="email" autofocus="" required="required" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control text-color-white" placeholder="Password" name="password" type="password" value="" required="required" />
                                </div>
				<a href="#">Register</a>
                                <div class="align-right">
                                    <a href="#">Forgot My Password</a>
                                </div>
                                <input type="submit" href="index.html" class="btn btn-primary form-control" value="login">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->
</div>