<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
     $connection=mysqli_connect("localhost","root","","transport_project");


   $username=$_SESSION['login_user'];
    //echo $username;
    $firstname = '';
    $lastname = '';

    $query= "SELECT  `firstname`, `lastname`, `email` FROM `user` WHERE username='$username'";
    $result= mysqli_query($connection,$query);
	//echo mysqli_error($connection);
	//die();
    
    $row= mysqli_fetch_assoc($result);
   $name= $row['firstname']." ". $row['lastname'];
   echo $name;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="swal/sweetalert.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="swal/sweetalert.js"></script>
    <link rel="stylesheet" href="animate.css">
	 <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/font.css" type="text/css" rel="stylesheet">
   <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" type="text/css" rel="stylesheet">
  <!-- <link href="assets/css/font.css" type="text/css" rel="stylesheet"> -->
  <link href="css/font.css" type="text/css" rel="stylesheet">
  
</head>
<body  class="login-img3-body"> 
     
    <br>
    <div class="container"> 
     <div class="row">
       <div class="col-md-3"></div>
        <div class="col-md-6"> 
		<form method="POST" action="" id="form-data">
							<div class="form-group">
								First Name:<input type="text" name="bFname" class="form-control" required>
							</div>
							<div class="form-group">
								Last Name:<input type="text" name="bLname" class="form-control" required>
							</div>
							<div class="form-group">
								Mobile No:<input type="tel" name="bPhone" class="form-control" required>
							</div>
							<div class="form-group">
								Email:<input type="email" name="bEmail" class="form-control" required>
							</div>
							<div class="form-group">
								Next Of Kin(Full Name):<input type="text" name="bFullName" class="form-control" placeholder="Full Name" required>
							</div>
							<div class="form-group">
							Next Of Kin(Mobile No):<input type="tel" name="bMphone" class="form-control" required>
							</div>
							<div class="form-group">
							<input type="submit" name="insert" id="insert" value="Submit Details" class="btn btn-success">
							</div>
						</form>

                        <?php

				

					if(isset($_POST['insert'])) {
						$bFname = $_POST['bFname'];
						$bLname = $_POST['bLname'];
						$bPhone = $_POST['bPhone'];
						$bEmail = $_POST['bEmail'];
						$bFullName = $_POST['bFullName'];
						$bMphone = $_POST['bMphone'];

						
						$bookings_query="INSERT INTO `bookings` (`booking_id`, `bFirstName`, `bLastName`, `bPhoneNumber`, `bEmail`, `bFullName`, `bMobileNumber`) VALUES ('', 'bFname','bLname','bPhone','bEmail','bFullName','bMphone')"; 
		
						$res= mysqli_query($connection,$bookings_query);
						return true;
					}

				?>
    
   <script>
    $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $a= $(".navbar-fixed-top");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $a.height());
  });
}); 
    
</script>  
    
</body>
</html>