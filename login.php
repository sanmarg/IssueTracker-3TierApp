<?php
session_start();
error_reporting(0);
include("dbconnection.php");
if(isset($_POST['login']))
{
$ret=mysqli_query($con,"SELECT * FROM user WHERE email='".$_POST['email']."' and password='".$_POST['password']."'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$_SESSION['login']=$_POST['email'];
$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['name'];
$val3 =date("Y/m/d");
date_default_timezone_set("Asia/Calcutta");
$time=date("h:i:sa");
$tim = $time;
$ip_address=$_SERVER['REMOTE_ADDR'];
$geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip_address;
$addrDetailsArr = unserialize(file_get_contents($geopluginURL)); 
$city = $addrDetailsArr['geoplugin_city']; 
$country = $addrDetailsArr['geoplugin_countryName'];
ob_start();
system('ipconfig /all'); // check ip of the client
$mycom=ob_get_contents(); 
ob_clean();
$findme = "Physical"; // check for its physical address
$pmac = strpos($mycom, $findme); // string creation
$mac=substr($mycom,($pmac+36),17); // mac address verification based on device location
$ret=mysqli_query($con,"insert into usercheck(logindate,logintime,user_id,username,email,ip,mac,city,country)values('".$val3."','".$tim."','".$_SESSION['id']."','".$_SESSION['name']."','".$_SESSION['login']."','$ip_address','$mac','$city','$country')");

$extra="dashboard.php";
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
else
{
$_SESSION['action1']="Invalid username or password";
$extra="login.php";

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
  <div class="login-container">  
        <div>
          <h2>Sign in to Lodge an issue</h2>
          <p> Don't have an account? 
            <a href="registration.php">Sign up</a> now!</p>
          <br>   
        </div>
        <div> <br>
             <p style="color:#F00"><?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
         <form id="login-form" class="login-form" action="" method="post">
         <div class="form-group">
            <label class="form-label"><i class="fa fa-envelope"></i> Email</label>
            <div class="controls">
                <input type="email" name="email" id="txtusername" class="form-control" required="true">                                 
            </div>
          </div>
          <div class="form-group">
            <label class="form-label"><i class="fa fa-lock"></i> Password</label>
            <div class="controls">
                <input type="password" name="password" id="txtpassword" class="form-control" required="true">                                 
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox checkbox check-success"> <a href="forgot-password.php">Forgot Password </a>&nbsp;&nbsp;
         </div>
          </div>
          <div class="form-group">
              <button class="btn btn-primary btn-cons" name="login" type="submit">Login</button>
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
