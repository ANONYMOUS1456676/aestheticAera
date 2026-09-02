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
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">

    <title>
        AESTHETIC AERA
    </title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

    <!-- Custom styles for this template -->
    <link href="pro.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="../css/responsive.css" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="../index.php">
                    <span>
                        AESTHETIC AERA
                    </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class=""></span>
                </button>

                <div class="collapse navbar-collapse innerpage_navbar" id="navbarSupportedContent">
                    <ul class="navbar-nav  ">
                        <li class="nav-item ">
                            <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="../shop.php">
                                Shop
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../why.php">
                                Why Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../contact.php">Contact Us</a>
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
                        <a href="">
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

        <section class="product-details">
            <div class="image-slider">
                <div class="product-images">
                    <img src="../images/tshirt8.png" class="active" alt="">
                    <img src="../images/tshirt8b.png" alt="">
                    <img src="../images/tshirt8c.png" alt="">
                </div>
            </div>
            <div class="details">
                <h2 class="product-brand">BORN TO SLAY Classic T-Shirt</h2>
                <p class="product-short-des"></p>
                <span class="product-price">Rs.1000</span>
                <span class="product-actual-price">Rs.1300</span>
                <span class="product-discount">( 30% off )</span>

                <p class="product-sub-heading">select size</p>

                <input type="radio" name="size" value="s" checked hidden id="s-size">
                <label for="s-size" class="size-radio-btn check">s</label>
                <input type="radio" name="size" value="m" hidden id="m-size">
                <label for="m-size" class="size-radio-btn">m</label>
                <input type="radio" name="size" value="l" hidden id="l-size">
                <label for="l-size" class="size-radio-btn">l</label>
                <input type="radio" name="size" value="xl" hidden id="xl-size">
                <label for="xl-size" class="size-radio-btn">xl</label>
                <input type="radio" name="size" value="xxl" hidden id="xxl-size">
                <label for="xxl-size" class="size-radio-btn">xxl</label>

                <button class="btn cart-btn">  <a href="../payment.php" class="btn1"> Buy Now</a></button>
            </div>
        </section>
        <section class="detail-des">
            <h2 class="heading">Description</h2>
            <p class="des">
              
                Introducing our stylish and empowering "Born to Slay" shirt, designed to make a bold statement wherever you go. Crafted with utmost care, this shirt combines comfort and fashion effortlessly. Made from high-quality materials, it ensures a soft and breathable feel against your skin. The captivating slogan "Born to Slay" adds a touch of confidence and attitude to your wardrobe, making it perfect for those who embrace their inner strength and strive for success.  <br> <b>Material:</b> Hundred percent pre-shrunk soft cotton.
                <br>
               <b>FIT:</b> Regular fit
               <br>
               <b>DESIGN:</b> Originally Inspired by Shrek American animated fantasy comedy film

               <br></p>
        </section>


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
                                    <span> Oxford Street Zirakpur </span>
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


        <script src="../js/jquery-3.4.1.min.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
        </script>
        <script src="../js/custom.js"></script>
        <script src="../js/product.js"></script>

</body>

</html>