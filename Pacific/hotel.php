<?php
	include "conn.php";
	session_start();

    if(empty($_SESSION)){
      header("Location: login.php");
    } else {
        $email = $_SESSION['email'];

        $get_details = mysqli_query($conn, "SELECT * FROM tourist_account WHERE email = '$email'");
        while($row = mysqli_fetch_object($get_details)){
            $firstName = $row -> firstName;
            $lastName = $row -> lastName;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>TravelEase</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <?php
  echo "<link rel='stylesheet' href='css/style.css' type='text/css'>"
  ?>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">Travel Ease</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"><i class="fa-solid fa-bars"></i></span>
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="destination.php" class="nav-link">Tours</a></li>
          <li class="nav-item active"><a href="hotel.php" class="nav-link">Hotel</a></li>
          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          <li class="nav-item dropdown"><a href="#" class="nav-link" role="button" data-toggle="dropdown" aria-expanded="false" id="dropDownProfile"><i class="fa-solid fa-user"></i></a>
						<ul class="dropdown-menu" aria-labelledby="dropDownProfile"> 
							<li class="dropdown-item">
								<a href="#" class="dropdown-item"><?php echo $firstName . " " . $lastName ?></a>
							</li>
							<li class="dropdown-item">
								<a href="logout.php" class="dropdown-item">Logout</a>
							</li>
						</ul>
					</li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <!-- Main Content -->
  <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Hotel <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Hotel</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" data-toggle="modal" data-target="#bookHotel" class="img" style="background-image: url(images/thePiccoloHotel.jpg);">
              <span class="price">₱2,400/person</span>
            </a>
            <div class="text p-4">
              <p class="star mb-2">
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </p>
              <span class="days">4 Days Tour</span>
              <h3><a href="#" data-toggle="modal" data-target="#bookHotel">The Piccolo Hotel</a></h3>
              <p class="location"><span class="fa fa-map-marker"></span> Boracay, Philippines</p>
              <ul>
                <li><span class="flaticon-mountains"></span>Near Western Coast</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" data-toggle="modal" data-target="#bookHotel"  class="img" style="background-image: url(images/Hang\ Loose\ Hotel.jpg);">
              <span class="price">₱3,500/person</span>
            </a>
            <div class="text p-4">
              <p class="star mb-2">
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </p>
              <span class="days">3 Days Tour</span>
              <h3><a href="#" data-toggle="modal" data-target="#bookHotel">Hang Loose Hostel</a></h3>
              <p class="location"><span class="fa fa-map-marker"></span> General Luna, Siargao Island Philippines</p>
              <ul>
                <li><span class="flaticon-sun-umbrella"></span>Near NorthEastern Coast</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" data-toggle="modal" data-target="#bookHotel" style="background-image: url(images/hotel-resto-3.jpg);">
              <span class="price">₱1,250/person</span>
            </a>
            <div class="text p-4">
              <p class="star mb-2">
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </p>
              <span class="days">3 Days Tour</span>
              <h3><a href="#" data-toggle="modal" data-target="#bookHotel">MO2 Westown Lagoon</a></h3>
              <p class="location"><span class="fa fa-map-marker"></span> Coron - Busuanga Rd, Coron, Palawan,
                Philippines</p>
              <ul>
                <li><span class="flaticon-sun-umbrella"></span>Near Island</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" data-toggle="modal" data-target="#bookHotel" style="background-image: url(images/Hotel\ Veneto\ de\ Vigan.jpg);">
              <span class="price">₱1,870/person</span>
            </a>
            <div class="text p-4">
              <p class="star mb-2">
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </p>
              <span class="days">3 Days Tour</span>
              <h3><a href="#" data-toggle="modal" data-target="#bookHotel">Hotel Veneto de Vigan</a></h3>
              <p class="location"><span class="fa fa-map-marker"></span> Vigan City, Ilocos Sur, Philippines</p>
              <ul>
                <li><span class="flaticon-sun-umbrella"></span>Near Streets</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" data-toggle="modal" data-target="#bookHotel" style="background-image: url(images/King\'s\ Ford\ Hotel.webp);">
              <span class="price">₱2,200/person</span>
            </a>
            <div class="text p-4">
              <p class="star mb-2">
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </p>
              <span class="days">4 Days Tour</span>
              <h3><a href="#" data-toggle="modal" data-target="#bookHotel">Kingsford Hotel</a></h3>
              <p class="location"><span class="fa fa-map-marker"></span> J.W. Diokno Bldvd, Tambo, Parañaque, Metro Manila, Philippines</p>
              <ul>
                <li><span class="flaticon-sun-umbrella"></span>Near Manila Bay</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" data-toggle="modal" data-target="#bookHotel" style="background-image: url(images/Pontefino\ Hotel\ and\ Residences.webp);">
              <span class="price">₱3,120/person</span>
            </a>
            <div class="text p-4">
              <p class="star mb-2">
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </p>
              <span class="days">1 Days Tour</span>
              <h3><a href="#" data-toggle="modal" data-target="#bookHotel">Pontefino Hotel and Residences</a></h3>
              <p class="location"><span class="fa fa-map-marker"></span> Pastor Village, Gulod Labac, Batangas, Philippines</p>
              <ul>
                <li><span class="flaticon-sun-umbrella"></span>Near Batangas</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" data-toggle="modal" data-target="#bookHotel" style="background-image: url(images/Rufana\ Suites.jpg);">
              <span class="price">₱1,770/person</span>
            </a>
            <div class="text p-4">
              <p class="star mb-2">
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </p>
              <span class="days">2 Days Tour</span>
              <h3><a href="#" data-toggle="modal" data-target="#bookHotel">Rufana Suites</a></h3>
              <p class="location"><span class="fa fa-map-marker"></span> Barbiera St Paramayon Poblacion East, 6032 Moalboal, Philippines</p>
              <ul>
                <li><span class="flaticon-sun-umbrella"></span>Near Kawasan Falls</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" data-toggle="modal" data-target="#bookHotel" style="background-image: url(images/The\ Orchard\ Hotel.webp);">
              <span class="price">₱4,400/person</span>
            </a>
            <div class="text p-4">
              <p class="star mb-2">
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </p>
              <span class="days">3 Days Tour</span>
              <h3><a href="#" data-toggle="modal" data-target="#bookHotel">The Orchard Hotel</a></h3>
              <p class="location"><span class="fa fa-map-marker"></span> 49 Legarda Road, Baguio City, Baguio, Philippines</p>
              <ul>
                <li><span class="flaticon-sun-umbrella"></span>Near Baguio</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" data-toggle="modal" data-target="#bookHotel" style="background-image: url(images/Casa\ Aguelo.webp)">
              <span class="price">₱5,500/person</span>
            </a>
            <div class="text p-4">
              <p class="star mb-2">
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </p>
              <span class="days">3 Days Tour</span>
              <h3><a href="#" data-toggle="modal" data-target="#bookHotel">Casa Aguelo</a></h3>
              <p class="location"><span class="fa fa-map-marker"></span> Carmen, Bohol, Philippines</p>
              <ul>
                <li><span class="flaticon-sun-umbrella"></span>Near Chocolate Hills</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- this Modal Pop Up form for Booking a  hotel -->
  <div class="modal fade" id="bookHotel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <form action="process.php" method="post" enctype="multipart/form-data" id="booking-form">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Book a Hotel</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <label for="firstName">First Name</label>
            <div class="input-group">
              <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
              <input type="text" class="form-control" placeholder="Enter First Name" name="firstName" required>
            </div>
            <label for="lastName">Last Name</label>
            <div class="input-group">
              <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
              <input type="text" class="form-control" placeholder="Enter Last Name" name="lastName" required>
            </div>
            <label for="email">Email</label>
            <div class="input-group">
              <span class="input-group-text"><i class="fa-solid fa-envelope-open"></i></span>
              <input type="email" class="form-control" placeholder="Enter email" name="email" required>
            </div>

            <label for="selectDestination">Select a Hotel</label>
            <div class="input-group">
              <select class="custom-select" id="selectHotel" name="hotel" required>
                <option value="">Choose</option>
                <option value="The Piccolo Hotel">The Piccolo Hotel</option>
                <option value="Hang Loose Hotel">Hang Loose Hotel</option>
                <option value="MO2 Westown Lagoon">MO2 Westown Lagoon</option>
                <option value="Hotel Veneto de Vigan">Hotel Veneto de Vigan</option>
                <option value="Kingsford Hotel">Kingsford Hotel</option>
                <option value="Pontefino Hotel and Residences">Pontefino Hotel and Residences</option>
                <option value="Rufana Suites">Rufana Suites</option>
                <option value="The Orchard Hotel">The Orchard Hotel</option>
                <option value="Casa Aguelo">Casa Aguelo</option>
              </select>
            </div>
            <label for="startDate">Check-in Date</label><br>
            <div class="input-group">
              <input type="date" class="custom-select" id="startDate" name="startDate" required>
            </div>
            <label for="endDate">Check-out Date</label><br>
            <div class="input-group">
              <input type="date" class="custom-select"  id="endDate" name="endDate" required>
            </div>
            <label for="selectPrice">Select a Price</label>
            <br>
            <div class="input-group">
              <select class="custom-select" id="pricePerDay" name="price" required>
                <option value="">Choose</option>
                <option value="2400" data-price="2400">₱2,400</option>
                <option value="3500" data-price="3500">₱3,500</option>
                <option value="1250" data-price="1250">₱1,250</option>
                <option value="1870" data-price="1870">₱1,870</option>
                <option value="2200" data-price="2200">₱2,200</option>
                <option value="3120" data-price="3120">₱3,120</option>
                <option value="1770" data-price="1770">₱1,770</option>
                <option value="4400" data-price="4400">₱4,400</option>
                <option value="5500" data-price="5500">₱5,500</option>
              </select>
            </div>
            <label for="people">Number of People</label>
            <div class="input-group">
              <select class="custom-select" id="people" name="people" required>
                <option value="">Choose</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-secondary">Reset</button>
            <button type="submit" class="btn btn-secondary" name="bookHotel" onclick="calculateTourCost()">Book a Hotel</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <section class="ftco-intro ftco-section ftco-no-pt">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 text-center">
          <div class="img" style="background-image: url(images/bg_2.jpg);">
            <div class="overlay"></div>
            <h2>We Are Travel Ease</h2>
            <p>We can help you decide for your vacation</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url(images/bg_3.jpg);">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md pt-5">
          <div class="ftco-footer-widget pt-md-5 mb-4">
            <h2 class="ftco-heading-2">About</h2>
            <p>TravelEase highlights the relevant information clearly and concisely. The homepage gives a brief description if every vacation place in the Philippines and some services that we have. TravelEase also gives a clear breakdown of plans and pricing, with a button for easy request</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
              <li class="ftco-animate"><a href="#"><span class="fa-brands fa-x-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="fa-brands fa-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="fa-brands fa-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md pt-5 border-left">
          <div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Infromation</h2>
            <ul class="list-unstyled">
              <li><a href="#" class="py-2 d-block">Online Enquiry</a></li>
              <li><a href="#" class="py-2 d-block">General Enquiries</a></li>
              <li><a href="#" class="py-2 d-block">Booking Conditions</a></li>
              <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
              <li><a href="#" class="py-2 d-block">Refund Policy</a></li>
              <li><a href="#" class="py-2 d-block">Call Us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md pt-5 border-left">
          <div class="ftco-footer-widget pt-md-5 mb-4">
            <h2 class="ftco-heading-2">Experience</h2>
            <ul class="list-unstyled">
              <li><a href="#" class="py-2 d-block">Adventure</a></li>
              <li><a href="#" class="py-2 d-block">Hotel and Restaurant</a></li>
              <li><a href="#" class="py-2 d-block">Beach</a></li>
              <li><a href="#" class="py-2 d-block">Nature</a></li>
              <li><a href="#" class="py-2 d-block">Camping</a></li>
              <li><a href="#" class="py-2 d-block">Party</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md pt-5 border-left">
          <div class="ftco-footer-widget pt-md-5 mb-4">
            <h2 class="ftco-heading-2">Have a Questions?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon fa fa-map-marker"></span><span class="text">SM City Iloilo,
                    TravelEase Agency 2nd Floor, Mandurriao Iloilo City, Philippines</span></li>
                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+63 989 321
                      5645</span></a></li>
                <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">travelEase@gmail.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>
              document.write(new Date().getFullYear());
            </script> All rights reserved | TravelEase
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>

</html>