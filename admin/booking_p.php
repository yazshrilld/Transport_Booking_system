<?php
  session_start();
		ob_start();

	
	 


     $connection=mysqli_connect("localhost","root","","transport_project");

		
   
	//echo $username;
	$result = '';
	$error = '';
	/*echo "<pre>";
	 print_r($_POST);
	 echo "</pre>";
	 die();*/
	if(isset($_POST['action']) && $_POST['action'] == "view") {
		
	$to = $_POST["state_to"];
    
    $query= "SELECT * FROM `trips` INNER JOIN `origin` ON  trips.trip_origin_id = origin.origin_id WHERE trip_id='$to'";
	
	// Mechanism( the query will go to trips table and select all the detils in trips and join it with all the details in origin by rows with the relationship of foreign key(trip_origin_id present in trips table referencing the primary key(origin_id in origin's table))) // The next step is to select one data now and not all data using select button
	
    $result= mysqli_query($connection,$query);
	}
	
	
    
    	
				
	
	
    //$name= $row['first_name']." ". $row['last_name'];
    //echo $name;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="swal/sweetalert.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> 
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    
   
	<link rel="stylesheet" href="sweetalert2/sweetalert2.css">
   <script src="sweetalert2/sweetalert2.min.js"></script>
   
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" type="text/css" rel="stylesheet">
  <!-- <link href="assets/css/font.css" type="text/css" rel="stylesheet"> -->
  <link href="css/font.css" type="text/css" rel="stylesheet">
  
</head>
<body  class="login-img3-body"> 
     
	 
	 <div class="container"> 
     <div class="row">
	 
       
	 <div class="col-md-3"></div>
        <div class="col-6"><br />
		<form class="booking-form-box" id="form1" method="POST" action="booking_p.php">
		 <table class="table table-striped table-bordered table-hover text-danger">
			<tr>
				<th style="color:white;">JOURNEY</th>
				<th style="color:white;">COST</th>
				<th style="color:white;">DISTANCE</th>
				<th style="color:white;">ENTRY POINT</th>
			</tr>
	 
				 <?php
				 if( !empty($result)) {

					$row = mysqli_fetch_row($result);
		//			echo "<pre>"; 
		//print_r($_POST);
		//echo "</pre>"; 
		//die();
					
					
						?>
							<tr>
								<td style="color:white;"> <?php echo $row[3] ?> </td>
								<td style="color:white;"> N<?php echo $row[4] ?> </td>
								<td style="color:white;"> <?php echo $row[5] ?> </td>
								<td style="color:white;"> <?php echo $row[2] ?> </td>
							</tr>
						
						<?php
					
				}
				 ?>
		</table><br />
			<script type="text/javascript">
				$(document).ready(function(){
						$(".seat").change(function() //.country is ilke .origin
						{
								var seat_id=$(this).val(); // var id, may either be for origin or trips 
								var post_id = 'id='+ seat_id; // + id, may either be for origin or trips
								 
								$.ajax({	
										type: "POST",
										url: "booking_p.php",
										data: post_id,
										cache: false,
										success: function(result)
											{
												
											} 
									});
						});


				});
			</script>


		
		</form>

		
			<div class="input-grp">
			  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal">Continue</button>
			 
			</div>
		
		</div>
		
		<div class="col-md-3"></div>

		
		</div>
		</div>
		

		
		<br>

		<div class="modal fade" id="addModal">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title"><b>Passenger Info</b></h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
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
							<input type="hidden" name="amount"  value="<?php echo $row[4] ?>">
							</div>
							<div class="form-group">
							<label for="Select Seat"></label>
							<select name="bselectSeat" id="Select_Seat">
								<option>--Seat--</option>
								<option value="A1">A1</option>
								<option value="A2">A2</option>
								<option value="A3">A3</option>
								<option value="A4">A4</option>
								<option value="A5">A5</option>
								<option value="A6">A6</option>
								<option value="A7">A7</option>
								<option value="A8">A8</option>
								<option value="A9">A9</option>
								<option value="A10">A10</option>
								<option value="A11">A11</option>
							</select>
							</div>
							<div class="form-group">
								Next Of Kin(Full Name):<input type="text" name="bFullName" class="form-control" placeholder="Full Name" required>
							</div>
							<div class="form-group">
							Next Of Kin(Mobile No):<input type="tel" name="bMphone" class="form-control" required>
							</div>
							<div class="form-group">
							<input type="hidden" value='insert' name='action' class="form-control">
							<input type="submit" name="insert" id="insert" value="Submit Details" class="btn btn-success">
							</div>
						</form>
					</div>
					
				</div>
			</div>
		</div>
		

		<script type="text/javascript">
				$(document).ready(function(){
						$("#insert").click(function(e){//.country is ilke .origin
						  if($("#form-data")[0].checkValidity()){
							  e.preventDefault();
								$.ajax({	
										type: "POST",
										url: "booking_p.php",
										data: $("#form-data").serialize()+"&action=insert",
										success: function(response){
											})
											} 
										});
									}
						})

						
				});
			</script>

				<?php

						if(isset($_POST['action']) && $_POST['action'] == "insert") {
							$bFname = $_POST['bFname'];
							$bLname = $_POST['bLname'];
							$bPhone = $_POST['bPhone'];
							$bEmail = $_POST['bEmail'];
							$amount = $_POST['amount'];
							$bselectSeat = $_POST['bselectSeat'];
							$bFullName = $_POST['bFullName'];
							$bMphone = $_POST['bMphone'];
							$a = substr($bFname,0,1);
							$b = substr($bLname,0,1);
							$m = date('m');
							$y = date('y');
							$d = date('d');

							$bookingConnect = mysqli_query($connection, $select_ID_query);
							$booking_Qry = mysqli_num_rows($bookingConnect);
							$booking_Qry2 = str_pad($booking_Qry, 4, '0', STR_PAD_LEFT);
							$bookingID = $a.$b.$y.$m.$d.$booking_Qry2;
				
							$bookings_query="INSERT INTO `bookings` (`id`, `bookingsID`, `bFirstName`, `bLastName`, `bPhoneNumber`, `bEmail`, `amount`, `bselectSeat`, `bFullName`, `bMobileNumber`) VALUES ('', '$bookingID', '$bFname','$bLname','$bPhone','$bEmail','$amount', '$bselectSeat','$bFullName','$bMphone')"; 
						
							$res= mysqli_query($connection,$bookings_query);
							
							if($res) {
								$_SESSION['ViewBooking'] = $bookingID ;
								header('location:bookingSlip_p.php');
							}else {
								$error = "invalid details";
								
							}	
			            } 
				?>
			
			
				<!--/*if(isset($_POST['insert'])){

					$viewBooking = mysqli_query($connection, "SELECT * FROM `bookings` where bookingsID ='$bookingID'");
					$rows = mysqli_num_rows($viewBooking);


					if ($rows == 1) {
					
					header("location: bookingSlip.php");
					}else {
						$error = "invalid details";
					}

					mysqli_close($connection);

				}
			*/-->
			
			



<?php
	ob_end_flush();
?>
    
</body>
</html> 