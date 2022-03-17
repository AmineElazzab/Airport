<?php
error_reporting(0);
if (isset($_POST['submit'])) {
    $loginclient = new LoginControllers();
    $loginclient->auth();
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../assets/images/logo1.png" />


</head>
<body>
    
</body>
</html>
<body class="img js-fullheight" style="background-image: url(../images/bg.jpg);">
    <div>
    <a href="<?php echo BASE_URL; ?>"> <button class="btn btn-sm btn btn-outline-warning"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                    </svg> </button> </a>
        <h3 class="text-center text-white pt-5"><img src="../img/IL MEGLIO.PNG"></h3>
        
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-warning">Login</h3>
                            <div class="form-group">
                                <input type="text" name="cin" id="cin" placeholder="CIN" required class="form-control">
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" name="passwords" id="passwords" class="form-control" placeholder="Password" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="row p-5 ">
                                <input type="submit" name="submit" class="btn btn-outline-warning btn-lg" value="submit">
                            </div>
                            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
	            </div>
                
                            <div class="text-center">
                                <a href="<?php echo BASE_URL; ?>client/add" class="text-warning">Register here</a>
                            </div>
                        </form>
                        <p class="w-100 text-center" >&mdash; Or Sign In With &mdash;</p>
	          <div class="w-200 text-center">
	          	<a href="#" class="btn btn-outline-dark btn-lg"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="#" class="btn btn-outline-primary btn-lg"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
	          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/main.js"></script>
</body>

</html>