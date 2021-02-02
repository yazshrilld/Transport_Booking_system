
<?php
  
    if(isset($_SESSION['login_user'])==false) {
        
?>


<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Alli-Travels</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="terminals.html">Portfolio</a></li>
          <li><a href="contact.html">Team</a></li>
           <li><a href="sign_up.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="user_login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  
    <?php 

  } 

  else { 
  
   ?> 
   
   <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Alli Travels</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="terminals.html">Portfolio</a></li>
          <li><a href="contact.html">Team</a></li>
		  <li><a href="mybill.php?id=<?php echo $_SESSION['username']; ?>">My Account</a></li>
          <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Log Out</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Welcome <?php echo $_SESSION['login_user']; ?></a></li>
		   

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  
    <?php
  
  }
  
  ?> 