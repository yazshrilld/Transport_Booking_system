<?php
    if(!isset($_SESSION)) { 
        session_start(); 
    } 
     $connection=mysqli_connect("localhost","root","","transport_project");

		
   //$username=$_SESSION['login_user'];
	//echo $username;
	$result = '';
	// print_r($_POST);
    // die();
    
   // include "booking_1.php";
   $bookingID = '';
   $_SESSION['ViewBooking'] = "";
	
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Slip</title> 
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
  
    <style text="text/css">
        body{
            background; #fafcfc;
        }

        #b_ticket{
            width: 50px;
            height: auto;
            margin: 10px auto;
            background: white;
            border: 1px solid red;
        }
        #book_ticket{
            width: 50px;
            margin: 10px auto;
            background: #fafcf;
            padding: 20px;
        }
        #display{
    background-color:#F5F5F5;
    border:2px solid #A4A4A4;
    float:left;
    height:200px;
    width:285px;
    margin-left:+20px;
    margin-top:75px;
    padding-left: 10px;
    padding-top: 10px;
}
        

    </style>

</head>


        
        
<!-- <body  class="login-img3-body"> -->
<body  clas="login-img3-body">


        <h1 class="text-center" style="color:white">Print Your Ticket</h1>
        <!--<p><a href='prinTick.php'><button>Print</button></a>your ticket here</p>-->
            <?php
            // echo "<pre>";
            // print_r($_POST);
            // echo "</pre>";
            // die();
            $transId = isset($_POST['transaction_id']) ? $_POST['transaction_id'] : $_GET['w1'];
            
        //$json = file_get_contents('https://youtube.com/');
        $json = file_get_contents('https://voguepay.com/?v_transaction_id=' . $transId . '&type=json&demo=true');
        
        $transaction = json_decode($json, true);
        echo '<pre>';
        print_r($transaction);
        echo '</pre>';
        die();
    
        echo'<br>';
               
    
        if(!empty($get)) {
            echo $transaction['merchant_ref'];
            echo "<br>";
            //die();
        
            
                
                
                    echo "Getting There";
                    //die();
                    
                    $select_ID_query = "SELECT * FROM `bookings` WHERE bookingsID = '{$transaction['merchant_ref']}'";
                    //die($select_ID_query); //this helps to check if your query is working fine.
                    $results= mysqli_query($connection, $select_ID_query);
                    
                    // k
                
                    echo'<br>';
                    
                    

                    
                    if( !empty($results)) {
                                    $row= mysqli_fetch_row($results);
                                    

                                    
                                    ?>
                                    <div class="row">

                                        <div class="col-sm-3" id="display">
                                        BookingID: <?php echo $row[2] ?><br />
                                        Name: <?php echo $row[3] . ' ' . $row[4] ?><br />
                                        Phone Number: <?php echo $row[5] ?><br />
                                        Email: <?php echo $row[6] ?><br />
                                        Seat : <?php echo $row[8] ?><br />
                                        Payment Status:Payment Confirmed<br />
                                        </div>
                                        <div class="col-md-6" style="padding-right:20px;" text-center id="print">
                                            <br /><br /><br /><br /><button class="btn btn-success" type="submit" name="print">Print</button>
                                            <button class="btn btn-success"><a href="index.php" class="btn-get-started scrollto">Return</a></button>
                                        </div>

                                    </div>

                                  <?php

                                  
                    }
                    



                                /* while($row = mysqli_fetch_array($connection, $bookingID)){

                                        $_SESSION['bookingsID'] = $row['bookingsID'];
                                        $_SESSION['bFirstName'] = $row['bFirstName'];
                                        $_SESSION['bLastName'] = $row['bLastName'];
                                        $_SESSION['bPhoneNumber'] = $row['bPhoneNumber'];
                                        $_SESSION['bEmail'] = $row['bEmail'];
                                        $_SESSION['bselectSeat'] = $row['bselectSeat'];


                                    }*/

                
            }
                // print_r($_SESSION['ViewBooking']);
                // die();
            
               
            ?>


        
      




















        <!-- <a href="https://voguepay.com/images/buttons/make_payment_green.png"></a>  -->
        <!-- <input type="submit" name="submit" value="Pay With VoguePay" class="btn btn-primary text-center">
        <input type="hidden" name="notify_url" value="//www.mydomain.com/notification.php" /> -->

         <!--   <script type="text/javascript">
				$(document).ready(function(){
						function viewBooking(){//.country is ilke .origin
								$.ajax({	
										type: "POST",
										url: "bookingSlip.php",
										data: {"display": 1},
										success: function(data){
											$("#display").html(data);
											} 
										});
									}
						


				});
			</script>-->



</body>
</html> 