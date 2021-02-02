<?php

	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
     $connection=mysqli_connect("localhost","root","","transport_project");


   $username=$_SESSION['login_user'];
   
   $connection=mysqli_connect("localhost","root","","transport_project");
   



	if($_POST['id']){
		
		$id=$_POST['id'];
		
			if($id==0){
				echo "<option>Select Destination</option>";
			}	
			
			else{
				
				
					
				$trip_query = mysqli_query($connection, "SELECT * FROM `trips` WHERE trip_origin_id='$id'") ;
				while($row = mysqli_fetch_array($trip_query)) 
				{
					
					?>
					<option value="<?php echo $row['trip_id'] ?>"><?php echo $row['trip_state'] ?></option>
					<?php
				}
			}
	}



/*



<script type="text/javascript">
$(document).ready(function()
{
$(".country").change(function()
{
var country_id=$(this).val();
var post_id = 'id='+ country_id;
 
$.ajax
({
type: "POST",
url: "ajax.php",
data: post_id,
cache: false,
success: function(cities)
{
$(".city").html(cities);
} 
});
 
});
});
</script>



include('db.php');
if($_POST['id']){
$id=$_POST['id'];
if($id==0){
 echo "<option>Select City</option>";
}else{
 $sql = mysqli_query($con,"SELECT * FROM `city` WHERE country_id='$id'");
 while($row = mysqli_fetch_array($sql)){
 echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>';
 }
 }
}

*/



?>

/*

$bookings_query="INSERT INTO `bookings` (`id`, `bookingsID`, `bFirstName`, `bLastName`, `bPhoneNumber`, `bEmail`, `bselectSeat`, `bFullName`, `bMobileNumber`) VALUES ('', '$bookingID', '$bFname','$bLname','$bPhone','$bEmail','$bselectSeat','$bFullName','$bMphone')"; 
						
						$res= mysqli_query($connection,$bookings_query);
						
						/*if($res) {
							$_SESSION['ViewBooking'] = $bookingID ;
							echo $_SESSION['ViewBooking'] ;
						}
						
*/
							
						 
						
		}
			 
			?>



		<?php
		
			/*if(isset($_POST['insert'])){

				$viewBooking = mysqli_query($connection, "SELECT * FROM `bookings` where bookingsID ='$bookingID'");
				$rows = mysqli_num_rows($viewBooking);


				if ($rows == 1) {
				
				header("location: bookingSlip.php");
				}else {
					$error = "invalid details";
				}

				mysqli_close($connection);

			}
		*/
		
		?>
 */