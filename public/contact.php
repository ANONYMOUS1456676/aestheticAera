<?php session_start() ?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

  <title>
    AESTHETIC AERA
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.php">
          <span>
            AESTHETIC AERA
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse innerpage_navbar" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item ">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.php">
                Shop
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="why.php">
                Why Us
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>
          <div class="user_option">
          <?php
		if(isset($_SESSION['Name'])){?>
	<?php echo 'Welcome '?><?= $_SESSION['Name'];
    echo ". ."; ?>
		<a href="logout.php">Logout</a>  
			<?php }else{ ?>
        <i class="fa fa-user" aria-hidden="true"></i>
		<a href="login.php">Login</a>  
   <?php }?>
            <a href="login.php">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            </a>
            <form class="form-inline ">
              <button class="btn nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->

  </div>
  <!-- end hero area -->

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container px-0">
      <div class="heading_container ">
        <h2 class="">
          Contact Us
        </h2>
      </div>
    </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-lg-7 col-md-6 px-0">
          <div class="map_container">
            <div class="map-responsive">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13729.643159420864!2d76.80360154947083!3d30.65055899660092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390feb20a3128311%3A0x17befa246f13ceb!2sOxford%20Street!5e0!3m2!1sen!2sin!4v1711871986698!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 px-0">
          <form action="contact.php" method="POST">
            <div>
              <input type="text" name="name" placeholder="Name" required />
            </div>
            <div>
              <input type="text" name="email" placeholder="Email" required/>
            </div>
            <div>
              <input type="number" name="num"  placeholder="Phone" required/>
            </div>
            <div>
              <input type="text" name="msg" class="message-box" placeholder="Message" required/>
            </div>
            
              
                <input type="submit" class="btn btn-primary py-3 px-4"  name="send" value="Send Message"/>
             
            
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php
    $conn=mysqli_connect("localhost","root","","shop");
   // mysqli_query($conn,"CREATE DATABASE SHOP");
    


  if(isset($_POST['send'])){
	
	$name = $_POST['name'];
	$num = $_POST['num'];
	$email = $_POST['email'];
	$msg = $_POST['msg'];
	
	echo "<script>
                        alert('Form Submitted');
                        window.location.href='index.php';
                        </script>";

	
	// 	$sql_query = "CREATE TABLE contact
	// (Name varchar(20),
  // EMAIL varchar(30),
  // PhoneNumber int,
	// Message varchar(40) )";

  $sql_query = "INSERT INTO `contact`
(`Name`, `EMAIL`, `PhoneNumber`, `Message`)
VALUES 
('$name','$email','$num','$msg')";
 	mysqli_query($conn, $sql_query);
}

  ?>

  <!-- end contact section -->

  <!-- info section -->

  <section class="info_section  layout_padding2-top">
    <div class="social_container">
      <div class="social_box">
        <a href="">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-youtube" aria-hidden="true"></i>
        </a>
      </div>
    </div>
    <div class="info_container ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <h6>
              ABOUT US
            </h6>
            <p>
              We are proud of the quality and consistency of the product and service provided to our customers and we are here to make your online shopping experience excellent. On our online store, there is a great selection.
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_form ">
              <h5>
                Newsletter
              </h5>
              <form action="#">
                <input type="email" placeholder="Enter your email">
                <button>
                  Subscribe
                </button>
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              NEED HELP
            </h6>
            <p>
              Most emails will be replied within 1 business day.
              <br>
              Customer Service - Hours of operation:
              Monday through Friday 9:00 AM to 5:00 PM
              Saturday 10:00 AM to 6:00 PM
              Sunday Closed.
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              CONTACT US
            </h6>
            <div class="info_link-box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>Oxford Street Zirakpur</span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>+91 8360044837</span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span> support@aestheticaera.in</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section -->
    <footer class=" footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="">AESTHETIC AERA</a>
        </p>
      </div>
    </footer>
    <!-- footer section -->

  </section>

  <!-- end info section -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>

</body>

</html>