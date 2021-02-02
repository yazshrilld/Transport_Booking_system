<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
     $connection=mysqli_connect("localhost","root","","transport_project");


   
    //echo $username;
    
    $query= "SELECT  `firstname`, `lastname`, `email` FROM `user` WHERE username=''";
    $result= mysqli_query($connection,$query);
	//echo mysqli_error($connection);
	//die();
    
    $row= mysqli_fetch_assoc($result);
    //$name= $row['first_name']." ". $row['last_name'];
   // echo $name;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us</title> 
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
  <link href="css/about.css" type="text/css" rel="stylesheet">
  
  

</head>



<body> 

		<header>
			<div class="container">
				<div id="branding">
					<h1><span class="highlight">Alli-</span> Travels</h1>
				</div>
				<nav>
					<ul>
						<li <span class="highlight"><a href="index.php">Home</a></li>
          <li class="current"><a href="about.php">About</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="terminals.html">Portfolio</a></li>
          <li><a href="contact.html">Team</a></li>
					</ul>
				</nav>
			</div>
		</header>


		<section id="showcase">
			<div class="container">
				
			</div>
		</section>


	
	
	
	 <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>About-Us</h2>
          <h3>We travel to different  <span>Destinations</span> in the country</h3>
          <p>You can travel to any part of the country with us, experience the difference</p>
        </div>

        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">About Us</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
			  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
			  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>
		</div>
		  <br /><br><br>
		  
		  
		  
		  <div class="row">

          <div class="col-md-8 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Mission</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
			  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
			  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-md-8 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Vision</a></h4>
               <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
			  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
			  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-md-8 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Objective</a></h4>
               <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
			  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
			  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

        </div>

      </div>
    </section>
	
    
	 <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Excelency</h2>
          <h3>What we are   <span>KNOWN</span> for</h3>
          <p>Experience a smooth ride with perfection difference</p>
        </div>
	 <div class="row">

          <div class="col-md-4 col-md-offset-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">SAFETY</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
			  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
			  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-md-8 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">TEAMWORK</a></h4>
               <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
			  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
			  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-md-8 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">PERSISTENCE</a></h4>
               <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
			  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
			  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

        </div>

      </div>
    </section>
	
	<section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h3>Get In  <span>TOUCH</span></h3>
        </div>

        

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section>
	
	
	<footer class="boxes">
		
		<p>Designed By Alli-Tech</p>
		
	</footer>
	
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