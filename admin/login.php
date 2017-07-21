<html>
    <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hotel | Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    
    
        
    </head>
    <body>
    
    <!-- ****************************** ADMIN LOGIN************************-->
    <section class="logo_brand">
        <div class="container-fluid" style="padding-top: 22px;"> 
            <div class=" col-md-2"></div>
            <div class="col-md-8 text-center">
        		<h2 class="admn">HOTEL ADMIN LOGIN</h2>
        	</div>
        	<div class="col-md-2"></div>
        </div>
        <div class="clearfix"></div>
    </section>
    <!-- ****************************** ADMIN LOGIN************************-->        
    <section class="mainSection">
        <div class="container">
                <div class="main-section">
					<div class="col-md-offset-4 col-md-4 col-sm-offset-2 col-sm-8 col-xs-offset-2 col-xs-8  padd0">
                        <div class="panel panel-default panelback">
                            <div class="panel-heading text-center">
								<h3 class="text-center" style="color:#082fc5;">SIGN IN</h3>
                            </div>

                            <div class="panel-body">
                                 <form class="formSignin" action="loginProcess.php" method="post" enctype="multipart/form-data" name="loginform" id="loginform">
                                    <fieldset>
                                        <label class="panel-login">
                                            
                                        </label>
                                        <input class="form-control" placeholder="User Name" type="email" name="userName" id="userName" required>
                                        <input class="form-control" placeholder="Password" type="password"  name="password" id="password" required>
                                        <br>
                                            <center><h5><?php if(isset($_GET['msg'])){echo $_GET['msg'];}  ?></h5></center>
                                        <div class="row text-center">
                                            <div class="col-sm-12 col-md-6 col-xs-12 text-center">
                                                <a href="forgotPassword.php" class="pull-left forgotstyle">Forgot Password?</a>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-xs-12">
                                                <input class="btn btn-md btn-style " type="submit" value="Login" name="submit" id="submit">
                                            </div>

                                        </div>
                                    </fieldset>
                                </form>
                                <br>
                                
                          </div>
                        </div>
                    </div>
                    <div class="clear-fix"></div>
                </div>
            </div>
		</section>
    
    </body>
</html>