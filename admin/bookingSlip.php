<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
     $connection=mysqli_connect("localhost","root","","transport_project");

		
   $username=$_SESSION['login_user'];
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
            background:fixed #fafcfc;
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
            background: #fafcfe;
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
                    $select_ID_query = "SELECT * FROM `bookings` WHERE id = '$present'";
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


<!-- new upgrade -->

<script src="//pay.voguepay.com/js/voguepay.js"></script>
<script>
    closedFunction=function() {
         alert('window closed');
    }
    successFunction=function(transaction_id,merchant_id) {
        alert('Transaction was successful, Ref: '+transaction_id);
        // window.location.href = 'https://timcloud.win/common_url/w1/' + transaction_id;
        window.location.href = 'http://localhost/Transport_Project/admin/successURL.php?w1=' + transaction_id;
    }
    failedFunction=function(transaction_id,merchant_id) {
        alert('Transaction was not successful, Ref: '+transaction_id);
        // window.location.href = 'https://timcloud.win/failureUrl/w1/' + transaction_id;
    }
</script>
</script>
 <script>
    function pay(item,price){
      //Initiate voguepay inline payment
      Voguepay.init({
        v_merchant_id: 'sandbox_5c822631b4ae1527fc7d35deaff5p9',
        //  2495-0111432,sandbox_5c822631b4ae1527fc7d35deaff5p9 //Initiate voguepay inline payment  //sandbox_5c822631b4ae1527fc7d35deaff5p9 //stagingsandbox_5c822631b4ae1527fc7d35deaff52f
        cur: 'NGN',
        total: '<?php echo $row[7]; ?>',
        merchant_ref: '<?php echo $row[2]; ?>',
        notify_url: 'http://localhost/Transport_Project/admin/successURL.php',
        memo: '<?php echo $row[3] . ' Booking Ticket' ?> '+item,
        items: [
          {
             name: "<?php echo $row[3]; ?>",
            description: "Booking Ticket",
            price: '<?php echo $row[7]; ?>'
          }
        ],
        customer: {
            name: '<?php echo $row[3]; ?>',
            address: 'Customer address',
            city: 'Customer city',
            state: 'Customer state',
            zipcode: 'Customer zip/post code',
            email: '<?php echo $row[6]; ?>',
            phone: '<?php echo $row[5]; ?>',
            country: 'NGA',
            referral_url: 'https://checkout.voguepay.com/?data=%7B%22_amount%22%3A300%2C%22_callback%22%3A%7B%22_webhook%22%3Anull%7D%2C%22_created%22%3A%222021-08-30+08%3A01%3A50%22%2C%22_currency%22%3A%22NGN%22%2C%22_customer%22%3A%7B%22tokenize%22%3Afalse%2C%22email%22%3A%22yazid.musa%40voguepay.com%22%2C%22phone%22%3A%22%22%2C%22address%22%3A%22%5Bobject+Object%5D%22%2C%22name%22%3A%22%22%7D%2C%22_ip%22%3A%2254.74.141.25%22%2C%22_items%22%3A%5B%7B%22name%22%3A%22Pay+for+course%22%2C%22description%22%3A%22Pay+for+course%22%2C%22amount%22%3A%22300%22%7D%5D%2C%22_live%22%3Atrue%2C%22_merchantCurrency%22%3A%22NGN%22%2C%22_parameters%22%3A%7B%7D%2C%22_paymentStatus%22%3A%22Awaiting+Payment%22%2C%22_reference%22%3A%2212398765473532%22%2C%22_schedule%22%3A%7B%7D%2C%22_status%22%3A%22Open%22%2C%22_uid%22%3A%227f4f29231112419aa9f2f6b7632d2219%22%7D&merchantId=2495-0111432&token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiJqdGlfNjEyYzkwNmU3ZWVhOTguMDAwMDE2NjgiLCJpYXQiOjE2MzAzMTA1MTAsImlzcyI6IjVmM2NmNTQ0NDFkMmVjMDYyYzUxMzQ2NSIsIk9yZ1VuaXRJZCI6IjVmMzkzYmUxOTZmOGNmN2YyZDRjMzE5NiIsIlJlZmVyZW5jZUlkIjoiN2Y0ZjI5MjMxMTEyNDE5YWE5ZjJmNmI3NjMyZDIyMTkiLCJQYXlsb2FkIjp7Ik9yZGVyRGV0YWlscyI6eyJPcmRlck51bWJlciI6Imp3dE9yZGVyXzYxMmM5MDZlN2VlYjI2LjQ1OTAzMjMxIiwiQW1vdW50IjozMDAsIkN1cnJlbmN5Q29kZSI6Ik5HTiJ9fSwiT2JqZWN0aWZ5UGF5bG9hZCI6InRydWUiLCJleHAiOjE2MzAzMTE0MTB9.GfkiPv2c_K_cysfg8wLUXoGfq75eLdXpOMT5nPM32As&refererUrl='
        },
        closed:closedFunction,
        success:successFunction,
        failed:failedFunction
      });
    }
 </script>
 <button type="button" class="btn btn-primary text-secondary" onclick="pay('shirt',500)"> CLick To Pay </button>
 <!-- <button type="button" onclick="pay('shoe',10000)"> Pay for shoe </button> -->




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