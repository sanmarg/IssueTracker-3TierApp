<?php
session_start();
error_reporting(0);
include("dbconnection.php");
if(isset($_POST['login']))
{
$ret=mysqli_query($con,"SELECT * FROM admin WHERE name='".$_POST['email']."' and password='".$_POST['password']."'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="/admin/home.php";
$_SESSION['alogin']=$_POST['email'];
$_SESSION['id']=$num['id'];
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
else
{
$_SESSION['action1']="*Invalid username or password";
$extra="index.php";

echo "<script>window.location.href='".$extra."'</script>";
exit();
}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Issue Tracker | Admin Login</title>
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
    padding: 20px;
    border-radius: 10px;
}

.login-container {
    max-width: 700px;
    margin: 100px auto;
    text-align: center;
    padding: 20px;
    border-radius: 5px;
    background-color: rgba(255, 255, 255, 0.9);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    transition: all 0.3s ease;
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

.input-with-icon {
    position: relative;
}

.input-with-icon input {
    padding-right: 30px; /* Space for icon */
}

.input-with-icon i {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
}

</style>
</head>
<body class="error-body no-top">
<div class="container">
  <div class="row login-container column-seperation">  
        <div class="col-md-5 col-md-offset-1">
          <h2>Sign in to Issue Tracker Admin</h2>
         
          <br>

		   
        </div>
        <div class="col-md-5 "> <br>
		 <form id="login-form" class="login-form" action="" method="post">
         <p style="color: #F00"><?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
		 <div class="row">
		 <div class="form-group col-md-10">
            <label class="form-label">Username</label>
            <br>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<i class="fa fa-user"></i>
					<input type="text" name="email" id="txtusername" class="form-control" placeholder="Enter username">                                 
				</div>
            </div>
          </div>
          </div>
		  <div class="row">
          <div class="form-group col-md-10">
            <label class="form-label">Password</label>
            <br>
            <span class="help"></span>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<i class="fa fa-lock"></i>
					<input type="password" name="password" id="txtpassword" class="form-control" placeholder="Enter password">                                 
				</div>
            </div>
          </div>
          </div>
          <div class="row">
            <div class="col-md-10">
              <br>
              <br>
              <button class="btn btn-primary btn-cons pull-right" name="login" type="submit">Login</button>
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
    <script type="text/javascript" src="js/highcharts.js"></script>
	<script type="text/javascript" src="js/exporting.js"></script>	
</body>
</html>
