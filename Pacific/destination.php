<?php
  include "conn.php";
  session_start();

  if (empty($_SESSION)) {
    header("Location: login.php");
  } else {
    $email = $_SESSION['email'];

    $get_details = mysqli_query($conn, "SELECT * FROM tourist_account WHERE email = '$email'");
    while ($row = mysqli_fetch_object($get_details)) {
      $firstName = $row-> firstName;
      $lastName = $row-> lastName;
    }
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>TravelEase</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

  <link rel="stylesheet" href="css/animate.css" />

  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/owl.theme.default.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />

  <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
  <link rel="stylesheet" href="css/jquery.timepicker.css" />

  <link rel="stylesheet" href="css/flaticon.css" />
  <link rel="stylesheet" href="css/style.css" />

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
          <li class="nav-item">
            <a href="index.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="about.php" class="nav-link">About</a>
          </li>
          <li class="nav-item active">
            <a href="destination.php" class="nav-link">Tours</a>
          </li>
          <li class="nav-item">
            <a href="hotel.php" class="nav-link">Hotel</a>
          </li>
          <li class="nav-item">
            <a href="blog.php" class="nav-link">Blog</a>
          </li>
          <li class="nav-item">
            <a href="contact.php" class="nav-link">Contact</a>
          </li>
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
  <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <p class="breadcrumbs">
            <span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span>
            <span>Tours <i class="fa fa-chevron-right"></i></span>
          </p>
          <h1 class="mb-0 bread">Tours</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap">
            <a href="#" class="img" data-toggle="modal" data-target="#bookPlace" style="background-image: url(images/boracay.webp)">
              <span class="price">₱560/person</span>
            </a>
            <div class="text p-4">
              <span class="days">4 Days Tour</span>
              <h3><a href="#" data-toggle="modal" data-target="#bookPlace">Boracay Island</a></h3>
              <p class="location">
                <span class="fa fa-map-marker"></span> Aklan, Western Visayas,
                Philippines
              </p>
              <ul>
                <li><span class="flaticon-mountains"></span>Near Western Coast</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap">
            <a href="#" class="img" data-toggle="modal" data-target="#bookPlace" style="background-image: url(images/Siargao.jpg)">
              <span class="price">₱1,120/person</span>
            </a>
            <div class="text p-4">
              <span class="days">3 Days Tour</span>
              <h3><a href="#" data-toggle="modal" data-target="#bookPlace">Siargao Island</a></h3>
              <p class="location">
                <span class="fa fa-map-marker"></span> Surigao del Norte, CARAGA Region,
                Philippines
              </p>
              <ul>
                <li><span class="flaticon-sun-umbrella"></span>Near NorthEastern Coast</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap">
            <a href="#" class="img" data-toggle="modal" data-target="#bookPlace" style="background-image: url(images/Coron\ Island\ Palawan.jpg)">
              <span class="price">₱320/person</span>
            </a>
            <div class="text p-4">
              <span class="days">3 Days Tour</span>
              <h3><a href="#" data-toggle="modal" data-target="#bookPlace">Coron Island</a></h3>
              <p class="location">
                <span class="fa fa-map-marker"></span> Coron, Palawan,
                Philippines
              </p>
              <ul>
                <li><span class="flaticon-sun-umbrella"></span>Near Island</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-4 ftco-animate">
          <div class="project-wrap">
            <a href="#" class="img" data-toggle="modal" data-target="#bookPlace" style="background-image: url(images/Calle\ Crisologo\ Vigan.jpg)">
              <span class="price">₱520/person</span>
            </a>
            <div class="text p-4">
              <span class="days">3 Days Tour</span>
              <h3><a href="#" data-toggle="modal" data-target="#bookPlace">Calle Crisologo</a></h3>
              <p class="location">
                <span class="fa fa-map-marker"></span> Vigan, Ilocos Sur,
                Philippines
              </p>
              <ul>
                <li><span class="flaticon-sun-umbrella"></span>Near Streets</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap">
            <a href="#" class="img" data-toggle="modal" data-target="#bookPlace" style="background-image: url(images/Intramuros\ Manila.avif)">
              <span class="price">₱220/person</span>
            </a>
            <div class="text p-4">
              <span class="days">4 Days Tour</span>
              <h3><a href="#" data-toggle="modal" data-target="#bookPlace">Fort Santiago</a></h3>
              <p class="location">
                <span class="fa fa-map-marker"></span> Intramuros, Metro Manila,
                Philippines
              </p>
              <ul>
                <li><span class="flaticon-sun-umbrella"></span>Near Pasig City</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap">
            <a href="#" class="img" data-toggle="modal" data-target="#bookPlace" style="background-image: url(images/Taal\ Volcano.webp)">
              <span class="price">₱320/person</span>
            </a>
            <div class="text p-4">
              <span class="days">1 Days Tour</span>
              <h3><a href="#" data-toggle="modal" data-target="#bookPlace">Taal Volcano</a></h3>
              <p class="location">
                <span class="fa fa-map-marker"></span> Talisay and San Nicolas, Batangas,
                Philippines
              </p>
              <ul>
                <li><span class="flaticon-sun-umbrella"></span>Near Lake</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap">
            <a href="#" class="img" data-toggle="modal" data-target="#bookPlace" style="background-image: url(images/Kawasan\ Falls\ Cebu.jpg)">
              <span class="price">₱290/person</span>
            </a>
            <div class="text p-4">
              <span class="days">2 Days Tour</span>
              <h3><a href="#" data-toggle="modal" data-target="#bookPlace">Kawasan Falls</a></h3>
              <p class="location">
                <span class="fa fa-map-marker"></span> Badian, Cebu,
                Philippines
              </p>
              <ul>
                <li><span class="flaticon-sun-umbrella"></span>Near Moalboal, Cebu</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap">
            <a href="#" class="img" data-toggle="modal" data-target="#bookPlace" style="background-image: url(images/Mt.\ Pulag.jpg)">
              <span class="price">₱600/person</span>
            </a>
            <div class="text p-4">
              <span class="days">3 Days Tour</span>
              <h3><a href="#" data-toggle="modal" data-target="#bookPlace">Mt. Pulag</a></h3>
              <p class="location">
                <span class="fa fa-map-marker"></span> Benguet, Cordillera Administrative Region,
                Philippines
              </p>
              <ul>
                <li><span class="flaticon-sun-umbrella"></span>Near Ifugao</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap">
            <a href="#" class="img" data-toggle="modal" data-target="#bookPlace" style="background-image: url(images/Chocolate\ Hills.jpg)">
              <span class="price">₱520/person</span>
            </a>
            <div class="text p-4">
              <span class="days">2 Days Tour</span>
              <h3><a href="#" data-toggle="modal" data-target="#bookPlace">Chocolate Hills</a></h3>
              <p class="location">
                <span class="fa fa-map-marker"></span> Bohol Province, Bohol,
                Philippines
              </p>
              <ul>
                <li><span class="flaticon-sun-umbrella"></span>Near Dauis, Bohol</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Modal Pop Up form for Booking a destination place and hotel -->
  <div class="modal fade" id="bookPlace" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <form action="process.php" method="post" enctype="multipart/form-data" id="booking-form">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Book a Destination</h5>
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
              <input type="text" class="form-control" placeholder="Enter Last Name" name="lastName"required>
            </div>
            <label for="email">Email</label>
            <div class="input-group">
              <span class="input-group-text"><i class="fa-solid fa-envelope-open"></i></span>
              <input type="email" class="form-control" placeholder="Enter email" name="email" required>
            </div>

            <label for="selectDestination">Select a Destination</label>
            <div class="input-group">
              <select class="custom-select" id="inputGroupSelect04" name="place" required>
                <option value="">Choose</option>
                <option value="Boracay Island">Boracay Island</option>
                <option value="Siargao Island">Siargao Island</option>
                <option value="Coron Island">Coron Island</option>
                <option value="Calle Crisologo">Calle Crisologo</option>
                <option value="Fort Santiago">Fort Santiago</option>
                <option value="Taal Volcano">Taal Volcano</option>
                <option value="Kawasan Falls">Kawasan Falls</option>
                <option value="Mt. Pulag">Mt. Pulag</option>
                <option value="Chocolate Hills">Chocolate Hills</option>
              </select>
            </div>
            <label for="startDate">Start Date</label><br>
            <div class="input-group">
              <input type="date" class="custom-select" id="startDate" name="startDate" required>
            </div>
            <label for="endDate">End Date</label><br>
            <div class="input-group">
              <input type="date" class="custom-select" id="endDate" name="endDate" required>
            </div>
            <label for="selectPrice">Select a Price</label>
            <br>
            <div class="input-group">
              <select class="custom-select" id="pricePerDay" name="price" required>
                <option value="">Choose</option>
                <option value="560" data-price="560">₱560</option>
                <option value="1120" data-price="1,120">₱1120</option>
                <option value="320" data-price="320">₱320</option>
                <option value="520" data-price="520">₱520</option>
                <option value="220" data-price="220">₱220</option>
                <option value="320" data-price="320">₱320</option>
                <option value="290" data-price="290">₱290</option>
                <option value="600" data-price="600">₱600</option>
                <option value="520" data-price="520">₱520</option>
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
            <button type="submit" class="btn btn-secondary" name="bookPlace" onclick="calculateTourCost()">Book a Destination</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <section class="ftco-intro ftco-section ftco-no-pt">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 text-center">
          <div class="img" style="background-image: url(images/bg_2.jpg)">
            <div class="overlay"></div>
            <h2>We Are Travel Ease</h2>
            <p>We can help you decide for your vacation</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url(images/bg_3.jpg)">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md pt-5">
          <div class="ftco-footer-widget pt-md-5 mb-4">
            <h2 class="ftco-heading-2">About</h2>
            <p>TravelEase highlights the relevant information clearly and concisely. The homepage gives a brief description if every vacation place in the Philippines and some services that we have. TravelEase also gives a clear breakdown of plans and pricing, with a button for easy request.</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
              <li class="ftco-animate">
                <a href="#"><span class="fa-brands fa-x-twitter"></span></a>
              </li>
              <li class="ftco-animate">
                <a href="#"><span class="fa-brands fa-facebook"></span></a>
              </li>
              <li class="ftco-animate">
                <a href="#"><span class="fa-brands fa-instagram"></span></a>
              </li>
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
              <li>
                <a href="#" class="py-2 d-block">Hotel and Restaurant</a>
              </li>
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
                <li>
                  <span class="icon fa fa-map-marker"></span><span class="text">SM City Iloilo,
                    TravelEase Agency 2nd Floor, Mandurriao Iloilo City, Philippines</span>
                </li>
                <li>
                  <a href="#"><span class="icon fa fa-phone"></span><span class="text">+63 989 321
                      5645</span></a>
                </li>
                <li>
                  <a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">travelEase@gmail.com</span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>
              document.write(new Date().getFullYear());
            </script>
            All rights reserved | TravelEase
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg>
  </div>

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