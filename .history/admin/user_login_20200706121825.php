<?php

		session_start(); // Starting Session
		$connection=mysqli_connect("localhost","root",""); 
		 $db = mysqli_select_db($connection, "transport_project");
		

$error=''; // Variable To Store Error Message




if(isset($_POST["submit1"])) {
    
	if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    }
	else{

	 // Define $username and $password
        $username=$_POST['username'];
        $password=$_POST['password'];
		
		 // Establishing Connection with Server by passing server_name, user_id and password as a parameter
		
		
		 // To protect MySQL injection for Security purpose
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);
		
		 // Selecting Database
       
        // SQL query to fetch information of registerd users and finds user match.
        $login_query = mysqli_query($connection, "SELECT * FROM user where password='$password' AND username='$username'");
        $rows = mysqli_num_rows($login_query);
    
    
        
         if ($rows == 1) {
            $_SESSION['login_user']=$username; // Initializing Session
            header("location: index.php"); // Redirecting To Other Page
        } else {
            $error = "Username or Password is invalid";
        }
        mysqli_close($connection); // Closing Connection
        
        
        
        
    
	}
}
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Login 2 Home Page</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
	
	
</head>

<body class="login-img3-body" >
	
<br>
<p class="text-center" style="color :Blue; font-size :30px;">Alli-Travels</p>
  <div class="container">

    <form class="login-form" name="form1" action="" method="post">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" name="username" class="form-control"  placeholder="Username" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href=""> Forgot Password?</a></span>
            </label>
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit1">Login</button>
        <button class="btn btn-info btn-lg btn-block" type="submit" name="submit1" ><a href="sign_up.php">Signup</a></button>
		<span style="color :red;"><?php echo $error; ?></span>
      </div>
	  <br>
	   <p class="text-center"><a href="admin_login.php"><b style="color :Blue;">Admin Login<b></a></p>
    </form>
	
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
         
        </div>
    </div>
  </div>
	

</body>
<br>
<br><br>
<br><br>
<br>
	<footer class="text-center">
		 Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
	</footer>

</html>


