<!DOCTYPE html>
<!--Author     : @arboshiki-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Login to Admin</title>
        <link rel="shortcut icon" href="<?php echo base_url('assets/img/belajarwebsite/icon belajarwebsite.png')?>" />

        <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/font-awesome.min.css')?>"/>
        
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/login.css')?>"/>
    </head>
    <body style="background-image: url('<?php echo base_url('assets/admin/img/demo/3_1920.jpg')?>')">
        <div class="login-wrapper fadeInDown animated">
            <form action="<?php echo base_url('home/getlogin');?>" method="post" class="lobi-form login-form visible">
                <div class="login-header">
                    Login to your account
                </div>
                <?php if($this->session->flashdata('info')): ?>
					<div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    	<span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Maaf !</strong> <?php echo $this->session->flashdata('info'); ?>
                	</div>
				<?php endif; ?>
                <div class="login-body no-padding">
                    <fieldset>
                        <div class="form-group">
                            <label>Username</label>
                            <label class="input">
                                <span class="input-icon input-icon-prepend fa fa-user"></span>
                                <input type="text" name="username" placeholder="Username">
                                <span class="tooltip tooltip-top-left"><i class="fa fa-user text-cyan-dark"></i> Please enter the username</span>
                            </label>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <label class="input">
                                <span class="input-icon input-icon-prepend fa fa-key"></span>
                                <input type="password" name="password" placeholder="Password">
                                <span class="tooltip tooltip-top-left"><i class="fa fa-key text-cyan-dark"></i> Please enter your password</span>
                            </label>
                          
                        </div>

                        <div class="row">
                            <div class="col-xs-8">
                                <label class="checkbox lobicheck lobicheck-info lobicheck-inversed lobicheck-lg">
                                    <input type="checkbox" name="remember_me" value="0"> 
                                    <i></i> Remember me
                                </label>
                            </div>
                            <div class="col-xs-4">
                                <button type="submit" class="btn btn-info btn-block"><span class="glyphicon glyphicon-log-in"></span> Login</button>
                            </div>
                        </div>
                    </fieldset>
                </div>
               
            </form>
            <!--Sign up form-->
           
           
        </div>
        

        <script type="text/javascript" src="<?php echo base_url('assets/admin/js/lib/jquery.min.js')?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/admin/js/bootstrap/bootstrap.min.js')?>"></script>
       
    </body>
</html>
