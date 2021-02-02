
    <?php
	   
        
        session_start(); 
		$alert= "" ;
	
	if(!isset($_SESSION['login_user'])){
    header('Location: admin_login.php');
}

	
		$connection=mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection, "transport_project");

		include "header1.php";
		include "side_menu.php";
	?>
		<section id="main-content">
      
    

   
       
		<section class="wrapper">
        <!--main content start-->
    
        <!--overview start-->
		<section id="Travel">
		<div class="container">
		<h2 style="text-align :center; color :black;"><b>Add Travels</b></h2>
		
		<?php  echo $alert; ?>
		
		<form name="form1" action="" method="post" enctype="multipart/form-data">
		<table class="table table-striped table-bordered table-hover">
				<tr>
					<td>Travel Name:</td>
					<td><input type="text" name="tname"></td>
				</tr>
		

		
				<tr>
					<td>Travel Price:</td>
					<td><input type="text" name="tprice"></td>
				</tr>
		

		
				<tr>
					<td>Travel Distance:</td>
					<td><input type="text" name="tdist"></td>
				</tr>
		

		
				<tr>
					<td>Travel Image:</td>
					<td><input type="file" name="timg"></td>
				</tr>
		

		
				<tr>
					<td>Travel Description:</td>
					<td><textarea cols="50" rows="10"  name="tdesc"></textarea></td>
				</tr>

				<tr>
					
					<td colspan="2" align="center"><input type="submit" name="submit1" value="upload"></td>
				</tr>


		</table>
		</form>
		
<?php
		if(isset($_POST["submit1"])) {

			$v1 = rand(1111, 9999);
			$v2 = rand(1111, 9999);
			$v3 = $v1 . $v2 ;
			$v3 = md5($v3);

			$fnm = $_FILES["timg"]["name"] ;
			$dst = "./travel_image/" . $v3 .$fnm ;
			$dst1 = "travel_image/" . $v3 .$fnm ;
			move_uploaded_file($_FILES["timg"]["tmp_name"],$dst);
			
			 $travel_query=false;
			 $travel_query = mysqli_query($connection, "INSERT INTO travel VALUES ('', '$_POST[tname]', '$_POST[tprice]', '$_POST[tdist]', '$dst1', '$_POST[tdesc]')");
			 
			  if($travel_query==true){
            $alert= "<script language='javascript'>
                                       swal(
                                            'Success!',
                                            'upload Completed!',
                                            'success'
                                            );
				          </script>";
        }
        else{
            die('unsuccessful' .mysqli_error($connection));
        }
			 
			
		}
		
?>		
		</div>
		</section>
	  <br />
	  <br />
	  <br />
	  <br />
      <?php
		include "footer.php";
		
	?>