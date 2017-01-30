
        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Sign In</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a>
                            </li>
                            <li>Sign in</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                            <h2 class="text-uppercase">Login</h2>
                            <form action="<?php echo base_url();?>index.php/login/do_login" method="post">
                                <div class="form-group">
                                    <label for="uname">Username</label>
                                    <input type="text" class="form-control" id="uname" name="uname"> <?php echo form_error('username');?>
                                </div>
                                <div class="form-group">
                                    <label for="pass">Password</label>
                                    <input type="password" class="form-control" id="pass" name="pass"> <?php echo form_error('password');?>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                                </div>
                            </form>
                    </div>
                    <div class="col-md-4">
                    </div>

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
		<hr>
