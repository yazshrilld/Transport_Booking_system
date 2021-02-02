<?php
    $connection=mysqli_connect("localhost","root","","transport_project");
    session_start();

    $msg="";
    
    if(isset($_POST['submit1'])){
        $name=$_POST['name'];
        $trv_from=$_POST['trv_from'];
        $trv_to=$_POST['trv_to'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $departing=$_POST['departing'];
        $return=$_POST['return'];
        $adult=$_POST['adult'];
        $children=$_POST['children'];
		//$username= $_POST['username'];
        $trv_class=$_POST['trv_class'];
		
       
        
        $insert_query="INSERT INTO `booking`(`booking_id`, `name`, `trv_from`, `trv_to`, `email`, `mobile`, `departing`, `return`, `adult`, `children`, `trv_class`,  `confirmation`, `finished`, `paid`) VALUES ('','$name','$trv_from','$trv_to','$email','$mobile','$departing','$return','$adult','$children','$trv_class','','','')"; 
		
      
        
        
        $res= mysqli_query($connection,$insert_query);
        
         if($res==true){
            $msg= "<script language='javascript'>
                                       swal(
                                            'Success!',
                                            'Registration Completed!',
                                            'success'
                                            );
				          </script>";
            
        }
        else{
            die('unsuccessful' .mysqli_error($connection));
        }
        
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    
    
    
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    
   
     <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
</head>
<body>
    <?php echo $msg;
    ?>
    
    <script>
    
        var timer = setTimeout(function() {
            window.location='booking.php'
        }, 1000);
		
    </script>

</body>
</html>
