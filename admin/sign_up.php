<?php

$msg="";

    
    if(isset($_POST["submit1"])) {
        

        $connection=mysqli_connect("localhost","root","","transport_project");


        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email= $_POST['email'];
        $username= $_POST['username'];
        $password= $_POST['password']; 
        
        

        $signup_query= "INSERT INTO user (firstname, lastname, email, username, password) VALUES ('$firstname','$lastname','$email','$username','$password')"; 
        
        $check_query= "SELECT * FROM user WHERE username='$username' or email='$email'";
        
        $check_res=mysqli_query($connection,$check_query);
        
        if(mysqli_num_rows($check_res)>0){
             $msg= '<div class="alert alert-warning alert-dismissable" style="margin-top:30px";>
             <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                      <strong>Failed!</strong> Username or Email already exists.
                      </div>';
            
        }
        
        else{
            $signup_res= mysqli_query($connection,$signup_query); 
                 $msg= '<div class="alert alert-success alert-dismissable" style="margin-top:30px";>
                 <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                      <strong>Success!</strong> Registration Succefull.
                      </div>';
            
			
            $_SESSION['login_user']=$username; // Initializing Session
            header("location: index.php"); // Redirecting To Other Page
        
			
        }
        
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="swal/sweetalert.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="swal/sweetalert.js"></script>
    <link rel="stylesheet" href="animate.css">
	 <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
</head>
<body  class="login-img3-body"> 
  
  
  
  
  
   
    
    <br>
    <div class="container"> 
     <div class="row">
       <div class="col-md-3"></div>
        <div class="col-md-6"> 
           <?php echo $msg; ?>
            <div class="page-header">
                <h1 style="text-align: center; color: white;">Sign Up @ ALLI-TRAVELS</h1>      
          </div> 
            <form class="form-horizontal animated bounce" action="" method="post" style="text-align: center; color: white;"> 
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  First Name: <input id="firstname" type="text" class="form-control" name="firstname" placeholder="First Name">
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  Lastname: <input id="lastname" type="text" class="form-control" name="lastname" placeholder="Lastname">
                </div>
                <br>
                 <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  Email:     <input id="email" type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  Username: <input id="username" type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  Password: <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <br> 
                
                <div class="input-group">
                  <button type="submit" name="submit1" class="btn btn-success">Sign Up</button>
                  
                </div>

              </form>   
        </div> 
        <div class="col-md-3"></div>
         
     </div> 
    
    </div> 
    
   
    
</body>
</html>