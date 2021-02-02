
    <?php
	   
        
        
		$alert= "" ;
	
	


	
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
		<h2 style="text-align :center; color :black;"><b>Add Trips</b></h2>
		
		<?php  echo $alert; ?>
		
		<form name="form1" action="" method="post" enctype="multipart/form-data">
		<table class="table table-striped table-bordered table-hover">
				<tr>
					<td>Trip Title:</td>
					<td><input type="text" name="ttitle"></td>
				</tr>
		

		
				<tr>
					<td>Trip Cost:</td>
					<td><input type="text" name="tcost"></td>
				</tr>
		

		
				<tr>
					<td>Trip Distance:</td>
					<td><input type="text" name="tdst"></td>
				</tr>
		

		
				<tr>
					<td>Trip Image:</td>
					<td><input type="file" name="timage"></td>
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

			$fnm = $_FILES["timage"]["name"] ;
			$dst = "./trip_img/" . $v3 .$fnm ;
			$dst1 = "trip_img/" . $v3 .$fnm ;
			move_uploaded_file($_FILES["timage"]["tmp_name"],$dst);
			
			 $trip_query=false;
			 $trip_query = mysqli_query($connection, "INSERT INTO trips VALUES ('', '$_POST[ttitle]', '$_POST[tcost]', '$_POST[tdst]', '$dst1', '$_POST[tdesc]')");
			 
			  if($trip_query==true){
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