<?php
    $connection=mysqli_connect("localhost","root","","transport_project");
	
    session_start();

    $trip_id= $_GET['travelid']; 

    $sql= "SELECT * FROM `trips` WHERE trip_id='$trip_id'"; 
    //echo $sql;
    $result= mysqli_query($connection,$sql);
    $row= mysqli_fetch_assoc($result);

    
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Trip</title> 
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

<br>
<br><br><br><br><br><br>
		<div class="container">
			<div class="row"> 
				<div class="fb-profile-text" id="h1" >
                    <h2><?php echo $row['trip_title']; ?></h2>
				</div>
				<hr>
				<div class="col-sm-3">
					<div class="fb-profile">
                        <img height="250" width="250" align="left" class="fb-image-profile thumbnail userpic" src="trip_img/<?php echo $row['trip_image']; ?>" alt="dp"/>
                    </div>
				</div> 
           
				<div class="col-sm-9">
					<div data-spy="scroll" class="tabbable-panel">
						<div class="tabbable-line">
							<ul class="nav nav-tabs ">
								<li class="active">
									<a href="#tab_default_1" data-toggle="tab">About Trip </a>
								</li>
                    
								<!--
								<li>
								  <a href="#tab_default_2" data-toggle="tab">
								 Bill </a>
								</li>
								-->
						  </ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_default_1">

									<h4><strong>Distance</strong></h4>
									<p><?php echo $row['trip_dst']; ?></p><br>
                      
									<h4><strong>Cost</strong></h4>
									<p>N <?php echo $row['trip_cost']; ?></p><br>
                      
								    <h4><strong>Description</strong></h4>
								    <p>
										<?php echo $row['trip_description']; ?> 
									</p>
									 
							</div>	  
                      
                      
                      
                      
                      
								  

							
                    
									<?php //if($_SESSION['username']!= null) {  ?>
									
									<!--
									<div class="tab-pane" id="tab_default_2">
									  <div class="row">
									  <div class="col-sm-10">
									   <?php //include 'insertbill.php';?>
										  
										  <?php // } ?>
									  </div>
									  </div>
									</div>  
									-->
                            
						</div>
						<br>
                  
                   
                  
                
                
                  
                </div>
              <div class="input-group">
						<button type="" name="" class="btn btn-success">Make Payment</button>
                  </div>
			  </div>
			  
           </div>
          </div>
        </div>

</body>
</html>


























