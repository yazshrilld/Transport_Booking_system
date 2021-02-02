<?php
    session_start(); 
     $connection=mysqli_connect("localhost","root","","transport_project");

		

	//echo $username;
	$result = '';
	// print_r($_POST);
    // die();
    
   // include "booking_1.php";
   $bookingID = '';
	
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
  <link href="css/fontslip.css" type="text/css" rel="stylesheet">
  
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
    
        input[type=image] {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
        
        #payform {
            margin-bottom: 30px;
        }
        


        

    </style>

</head>
<body  class="login-img3-body">
            <?php
            // echo "<pre>";
            // print_r($_POST);
            // echo "</pre>";
            // die();
                if(isset($_SESSION['ViewBooking'])){  
                    // echo "Getting There";
                    // die();
                     $present = $_SESSION['ViewBooking'];
                $select_ID_query = "SELECT * FROM `bookings` WHERE bookingsID = '$present'";
                    $results= mysqli_query($connection, $select_ID_query);
                    
                    if( !empty($results)) {
                        $row= mysqli_fetch_row($results);
                    ?>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-md-5">
                    <div class="card centered shadow-lg mt-2 mb-2 bg-white rounded">
                        <div class="card-header">
                            <h3>ALLINEL <SMall>Booking Ticket</SMall></h3>
                        </div>
                        <div class="card-body">
                            <div class="row form-group">
                                <div class="col-12"><center><i class="fa-fa-check-circle"></i></center></div>  
                            </div>
                            <div class="row form-group">
                                <div class="col-12"><center><h4>Thanks For Booking With Us</h4></center></div>  
                            </div>
                            <div class="row form-group">
                                <div class="col-12">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr class="bg-info"><td>BookingID</td><td></td><td><?php echo $row[2] ?></td></tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>Name</td><td></td><td><?php echo $row[3] . ' ' . $row[4] ?></td></tr>
                                            <tr><td>Seat</td><td></td><td><?php echo $row[8] ?></td></tr>
                                            <tr><td>Amount</td><td></td><td> N<?php echo $row[7] ?></td><</tr>
                                            <tr><td>Phone Number</td><td></td><td><?php echo $row[5] ?></td></tr>
                                            <tr><td>Payment Status</td><td></td><td>Pending</td></tr>
                                        </tbody>
                                    </table>
                                </div>  

                            </div>
                            <div class="row form-group">
                                <div class="col-6">
                                    <p><strong>Entry Point</strong><br>OJOTA PARK, <br>Opp Mr Biggs, <br>Re:377879</p>
                                </div>
                                <div class="col-6">
                                    <p><strong>Destination Point</strong><br>ASABA PARK, <br>Complex 5 Central, <br>Re:377879</p>
                                </div>
                            </div>
                            <form id='payform' method='POST' action='https://voguepay.com/pay/'>
                                <?php // this helps to print out your row print_r($row); ?>
                                <input type='hidden' name='v_merchant_id' value='DEMO' />
                                <input type='hidden' name='merchant_ref' value='<?php echo $row[2]; ?>' />
                                <input type='hidden' name='memo' value='<?php echo $row[3] . ' Booking Ticket' ?>' />
                                <input type='hidden' name='cur' value='NGN' />
                                <input type="hidden" name='success_url' value='http://localhost/Transport_Project/admin/successURL.php' />
                                <input type='hidden' name='developer_code' value='pq7778ehh9YbZ' />
                                <input type='hidden' name='store_id' value='25' />
                                <input type='hidden' name='name' value='<?php echo $row[3]; ?>'/>
                                <input type='hidden' name='total' value='<?php echo $row[7]; ?>' />
                                <input type='hidden' name='email' value='<?php echo $row[6]; ?>'/>
                                <input type='hidden' name='phone' value= '<?php echo $row[5]; ?>'/>
                                <input name ='v_submit' type='image' src='https://voguepay.com/images/buttons/make_payment_blue.png' alt='Submit' />
                            </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php                        
                    }
                }
        ?>

<script>
    Voguepay.init({form:'payform'});
</script>

</body>
</html> 