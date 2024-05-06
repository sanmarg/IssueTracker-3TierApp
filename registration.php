<?php
session_start();
error_reporting(0);
include("dbconnection.php");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$mobile=$_POST['phone'];
	$gender=$_POST['gender'];
	$query=mysqli_query($con,"select email from user where email='$email'");
	$num=mysqli_fetch_array($query);
	if($num>1)
	{
  echo "<script>alert('Email-id already register with us. Please try with diffrent email id.');</script>";
  echo "<script>window.location.href='registration.php'</script>";
	}
	else
	{
 mysqli_query($con,"insert into user(name,email,password,mobile,gender) values('$name','$email','$password','$mobile','$gender')");
echo "<script>alert('Successfully register with us. Now you can login');</script>";  
echo "<script>window.location.href='login.php'</script>";
}
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Issue Tracker</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript">
function checkpass()
{
if(document.signup.password.value!=document.signup.cpassword.value)
{
alert('New Password and Re-Password field does not match');
document.signup.cpassword.focus();
return false;
}
return true;
}   

</script>

<style>
body {
    background: hsla(210, 91%, 39%, 1);
    background: linear-gradient(90deg, hsla(210, 91%, 39%, 1) 0%, hsla(321, 55%, 50%, 1) 100%);
    background: -moz-linear-gradient(90deg, hsla(210, 91%, 39%, 1) 0%, hsla(321, 55%, 50%, 1) 100%);
    background: -webkit-linear-gradient(90deg, hsla(210, 91%, 39%, 1) 0%, hsla(321, 55%, 50%, 1) 100%);
    filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#1B262C", endColorstr="#3282B8", GradientType=1 );
    margin: 0;
    padding: 0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    /* background-color: rgba(251, 168, 52, 0.8); Transparent background */
    padding: 20px;
    border-radius: 10px;
    /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); Shadow effect */
}

.login-container {
    max-width: 700px; /* Smaller login box */
    margin: 100px auto;
    text-align: center;
    padding: 20px;
    border-radius: 5px;
    background-color: rgba(255, 255, 255, 0.9); /* Transparent background */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Shadow effect */
    transition: all 0.3s ease; /* Smooth transition */
}

.login-container:hover {
    transform: scale(1.05); /* Hover effect - Scale up */
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); /* Shadow effect */
}

.login-container h2 {
    color: #1B262C;
    margin-bottom: 20px;
}

.login-container p {
    color: #1B262C;
    margin-bottom: 20px;
}

.login-form {
    margin-top: 20px;
}

.btn-primary {
    background-color: #0F4C75;
    border-color: #0F4C75;
}

.btn-primary:hover {
    background-color: #3282B8;
    border-color: #3282B8;
}

.form-label {
    color: #1B262C;
}
</style>
</head>
<body class="error-body no-top">
<div class="container">
  <div class="row login-container column-seperation">  
        <div class=" "> 
        <h2>Sign in to Lodge an issue</h2>
          <p>Already have an account<a href="login.php">Log in</a> now!</p>
          <br>
		 <form id="signup" name="signup" class="login-form" onsubmit="return checkpass();" method="post">
		 <div class="form-group">
            <label class="form-label"><i class="fa fa-user"></i> Name</label>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<input type="text" name="name" id="name" class="form-control" required="true">                                
				</div>
            </div>
          </div>
           <div class="form-group">
            <label class="form-label"><i class="fa fa-envelope"></i> Email id</label>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<input type="email" name="email" id="email" class="form-control" required="true">                                 
				</div>
            </div>
          </div>
           <div class="form-group">
            <label class="form-label"><i class="fa fa-lock"></i> Password</label>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<input type="password" name="password" id="password" class="form-control" required="true">                                 
				</div>
            </div>
          </div>
		  <div class="form-group">
            <label class="form-label"><i class="fa fa-lock"></i> Re-Password</label>
            <span class="help"></span>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<input type="password" name="cpassword" id="cpassword" class="form-control" required="true">                                 
				</div>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label"><i class="fa fa-phone"></i> Contact no.</label>
            <span class="help"></span>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<input type="text" name="phone" id="txtpassword" class="form-control" pattern="[0-9]{10}" title="10 numeric characters only" required="true">                                 
				</div>
                
            </div>
          </div>
          <div class="form-group">
            <label class="form-label"><i class="fa fa-venus-mars"></i> Gender</label>
            <span class="help"></span>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<input type="radio" value="m" name="gender" checked > Male
          <input type="radio" value="f" name="gender" > Female
                                
				</div>
            </div>
          </div>
         <div class="form-group">
            <div class="col-md-10">
              <input   class="btn btn-primary btn-cons pull-right" name="submit" value="Submit" type="submit" />
            </div>
          </div>
		  </form>
        </div>
     
    
  </div>
</div>
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="assets/js/login.js" type="text/javascript"></script>
</body>
</html>
