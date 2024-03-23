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
      <a class="navbar-brand" href="index.php">TravelEase<span>Travel Agency</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
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
            <a href="destination.php" class="nav-link">Destination</a>
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
          <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-target="#accounts" >Accounts<i class="bi bi-chevron-down"></i></a>
						<ul class="dropdown-menu" aria-labelledby="accounts">
							<li class="dropdown-item">
								<a href="#" class="dropdown-item" data-toggle="modal" data-target="#adminLogin">Login as Admin</a>
							</li>
							<li class="dropdown-item">
								<a href="#" class="dropdown-item" data-toggle="modal" data-target="#loginTourist">Login as Tourist</a>
							</li>
							<li class="dropdown-item">
								<a href="#" class="dropdown-item" data-toggle="modal" data-target="#createTouristAccount">Create Account</a>
							</li>
						</ul>
					</li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

	<!-- Modal for creating a tourist account-->
	<div class="modal fade" id="createTouristAccount" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="#" method="post">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Create Tourist Account</h5>
						<button type="button" class="btn-close" data-dismiss="modal"><i class="fa-regular fa-x"></i></button>
					</div>
					<div class="modal-body">
						<label for="firstName">First Name</label>
						<div class="input-group">
							<span class="input-group-text"><i class="fa-solid fa-user"></i></span>
							<input type="text" class="form-control" placeholder="Enter First Name" name="firstName">
						</div>
						<label for="lastName">Last Name</label>
						<div class="input-group">
							<span class="input-group-text"><i class="fa-solid fa-user"></i></span>
							<input type="text" class="form-control" placeholder="Enter Last Name" name="lastName">
						</div>
						<label for="email">Email</label>
						<div class="input-group">
							<span class="input-group-text"><i class="fa-solid fa-envelope-open"></i></span>
							<input type="text" class="form-control" placeholder="Enter email" name="email">
						</div>
						<label for="password">Password</label>	
						<div class="input-group">
							<span class="input-group-text"><i class="fa-solid fa-key"></i></span>
							<input type="password" class="form-control" placeholder="Enter password" name="pass">
						</div>
            <label for="confirm_password">Confirm Password</label>	
						<div class="input-group">
							<span class="input-group-text"><i class="fa-solid fa-key"></i></span>
							<input type="password" class="form-control" placeholder="Enter confirm password" name="confirm_pass">
						</div>
					</div>
					<div class="modal-footer">
						<button type="reset" class="btn btn-secondary">Reset</button>
						<button type="submit" class="btn btn-success" name="create_touristAccount">Create Account</button>
					</div>
				</form>
			</div>
		</div>
	</div>
  <!-- Modal for login tourist -->
	<div class="modal fade" id="loginTourist" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="#" method="post">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Login Tourist Account</h5>
						<button type="button" class="btn-close" data-dismiss="modal"><i class="fa-regular fa-x"></i></button>
					</div>
					<div class="modal-body">
						<label for="email">Email</label>
						<div class="input-group">
							<span class="input-group-text"><i class="fa-solid fa-envelope-open"></i></span>
							<input type="text" class="form-control" placeholder="Enter email" name="email">
						</div>
						<label for="password">Password</label>	
						<div class="input-group">
							<span class="input-group-text"><i class="fa-solid fa-key"></i></span>
							<input type="password" class="form-control" placeholder="Enter password" name="pass">
						</div>	
					</div>
					<div class="modal-footer">
						<button type="reset" class="btn btn-secondary">Reset</button>
						<button type="submit" class="btn btn-success" name="login_tourist">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
  <!-- Modal for login admin -->
  <div class="modal fade" id="adminLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="#" method="post">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Login Admin Account</h5>
						<button type="button" class="btn-close" data-dismiss="modal"><i class="fa-regular fa-x"></i></button>
					</div>
					<div class="modal-body">
						<label for="email">Email</label>
						<div class="input-group">
							<span class="input-group-text"><i class="fa-solid fa-envelope-open"></i></span>
							<input type="text" class="form-control" placeholder="Enter email" name="email">
						</div>
						<label for="password">Password</label>	
						<div class="input-group">
							<span class="input-group-text"><i class="fa-solid fa-key"></i></span>
							<input type="password" class="form-control" placeholder="Enter password" name="pass">
						</div>	
					</div>
					<div class="modal-footer">
						<button type="reset" class="btn btn-secondary">Reset</button>
						<button type="submit" class="btn btn-success" name="admin_login">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
  <!-- Main Content -->
  <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <p class="breadcrumbs">
            <span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span>
            <span>Tour List <i class="fa fa-chevron-right"></i></span>
          </p>
          <h1 class="mb-0 bread">Tours List</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-no-pb">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="search-wrap-1 ftco-animate">
            <form action="#" class="search-property-1">
              <div class="row no-gutters">
                <div class="col-lg d-flex">
                  <div class="form-group p-4 border-0">
                    <label for="#">Destination</label>
                    <div class="form-field">
                      <div class="icon">
                        <span class="fa fa-search"></span>
                      </div>
                      <input type="text" class="form-control" placeholder="Search place" />
                    </div>
                  </div>
                </div>
                <div class="col-lg d-flex">
                  <div class="form-group p-4">
                    <label for="#">Check-in date</label>
                    <div class="form-field">
                      <div class="icon">
                        <span class="fa fa-calendar"></span>
                      </div>
                      <input type="text" class="form-control checkin_date" placeholder="Check In Date" />
                    </div>
                  </div>
                </div>
                <div class="col-lg d-flex">
                  <div class="form-group p-4">
                    <label for="#">Check-out date</label>
                    <div class="form-field">
                      <div class="icon">
                        <span class="fa fa-calendar"></span>
                      </div>
                      <input type="text" class="form-control checkout_date" placeholder="Check Out Date" />
                    </div>
                  </div>
                </div>
                <div class="col-lg d-flex">
                  <div class="form-group p-4">
                    <label for="#">Price Limit</label>
                    <div class="form-field">
                      <div class="select-wrap">
                        <div class="icon">
                          <span class="fa fa-chevron-down"></span>
                        </div>
                        <select name="" id="" class="form-control">
                          <option value="">$5,000</option>
                          <option value="">$10,000</option>
                          <option value="">$50,000</option>
                          <option value="">$100,000</option>
                          <option value="">$200,000</option>
                          <option value="">$300,000</option>
                          <option value="">$400,000</option>
                          <option value="">$500,000</option>
                          <option value="">$600,000</option>
                          <option value="">$700,000</option>
                          <option value="">$800,000</option>
                          <option value="">$900,000</option>
                          <option value="">$1,000,000</option>
                          <option value="">$2,000,000</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg d-flex">
                  <div class="form-group d-flex w-100 border-0">
                    <div class="form-field w-100 align-items-center d-flex">
                      <input type="submit" value="Search" class="align-self-stretch form-control btn btn-primary" />
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap">
            <a href="#" class="img" style="background-image: url(images/boracay.webp)">
              <span class="price">₱560/person</span>
            </a>
            <div class="text p-4">
              <span class="days">4 Days Tour</span>
              <h3><a href="#">Boracay Island</a></h3>
              <p class="location">
                <span class="fa fa-map-marker"></span> Aklan, Western Visayas,
                Philippines
              </p>
              <ul>
                <li><span class="flaticon-shower"></span>2</li>
                <li><span class="flaticon-king-size"></span>3</li>
                <li><span class="flaticon-mountains"></span>Near Western Coast</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap">
            <a href="#" class="img" style="background-image: url(images/Siargao.jpg)">
              <span class="price">₱1,120/person</span>
            </a>
            <div class="text p-4">
              <span class="days">3 Days Tour</span>
              <h3><a href="#">Siargao Island</a></h3>
              <p class="location">
                <span class="fa fa-map-marker"></span> Surigao del Norte, CARAGA Region,
                Philippines
              </p>
              <ul>
                <li><span class="flaticon-shower"></span>2</li>
                <li><span class="flaticon-king-size"></span>3</li>
                <li><span class="flaticon-sun-umbrella"></span>Near NorthEastern Coast</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap">
            <a href="#" class="img" style="background-image: url(images/Coron\ Island\ Palawan.jpg)">
              <span class="price">₱320/person</span>
            </a>
            <div class="text p-4">
              <span class="days">3 Days Tour</span>
              <h3><a href="#">Coron Island</a></h3>
              <p class="location">
                <span class="fa fa-map-marker"></span> Coron, Palawan,
                Philippines
              </p>
              <ul>
                <li><span class="flaticon-shower"></span>2</li>
                <li><span class="flaticon-king-size"></span>3</li>
                <li><span class="flaticon-sun-umbrella"></span>Near Island</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-4 ftco-animate">
          <div class="project-wrap">
            <a href="#" class="img" style="background-image: url(images/Calle\ Crisologo\ Vigan.jpg)">
              <span class="price">₱520/person</span>
            </a>
            <div class="text p-4">
              <span class="days">3 Days Tour</span>
              <h3><a href="#">Calle Crisologo</a></h3>
              <p class="location">
                <span class="fa fa-map-marker"></span> Vigan, Ilocos Sur,
                Philippines
              </p>
              <ul>
                <li><span class="flaticon-shower"></span>2</li>
                <li><span class="flaticon-king-size"></span>3</li>
                <li><span class="flaticon-sun-umbrella"></span>Near Streets</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap">
            <a href="#" class="img" style="background-image: url(images/Intramuros\ Manila.avif)">
              <span class="price">₱220/person</span>
            </a>
            <div class="text p-4">
              <span class="days">4 Days Tour</span>
              <h3><a href="#">Fort Santiago</a></h3>
              <p class="location">
                <span class="fa fa-map-marker"></span> Intramuros, Metro Manila,
                Philippines
              </p>
              <ul>
                <li><span class="flaticon-shower"></span>2</li>
                <li><span class="flaticon-king-size"></span>3</li>
                <li><span class="flaticon-sun-umbrella"></span>Near Pasig City</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap">
            <a href="#" class="img" style="background-image: url(images/Taal\ Volcano.webp)">
              <span class="price">₱320/person</span>
            </a>
            <div class="text p-4">
              <span class="days">1 Days Tour</span>
              <h3><a href="#">Taal Volcano</a></h3>
              <p class="location">
                <span class="fa fa-map-marker"></span> Talisay and San Nicolas, Batangas,
                Philippines
              </p>
              <ul>
                <li><span class="flaticon-shower"></span>2</li>
                <li><span class="flaticon-king-size"></span>3</li>
                <li><span class="flaticon-sun-umbrella"></span>Near Lake</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap">
            <a href="#" class="img" style="background-image: url(images/Kawasan\ Falls\ Cebu.jpg)">
              <span class="price">₱290/person</span>
            </a>
            <div class="text p-4">
              <span class="days">2 Days Tour</span>
              <h3><a href="#">Kawasan Falls</a></h3>
              <p class="location">
                <span class="fa fa-map-marker"></span> Badian, Cebu,
                Philippines
              </p>
              <ul>
                <li><span class="flaticon-shower"></span>2</li>
                <li><span class="flaticon-king-size"></span>3</li>
                <li><span class="flaticon-sun-umbrella"></span>Near Moalboal, Cebu</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap">
            <a href="#" class="img" style="background-image: url(images/Mt.\ Pulag.jpg)">
              <span class="price">₱600/person</span>
            </a>
            <div class="text p-4">
              <span class="days">3 Days Tour</span>
              <h3><a href="#">Mt. Pulag</a></h3>
              <p class="location">
                <span class="fa fa-map-marker"></span> Benguet, Cordillera Administrative Region,
                Philippines
              </p>
              <ul>
                <li><span class="flaticon-shower"></span>2</li>
                <li><span class="flaticon-king-size"></span>3</li>
                <li><span class="flaticon-sun-umbrella"></span>Near Ifugao</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap">
            <a href="#" class="img" style="background-image: url(images/Chocolate\ Hills.jpg)">
              <span class="price">₱520/person</span>
            </a>
            <div class="text p-4">
              <span class="days">2 Days Tour</span>
              <h3><a href="#">Chocolate Hills</a></h3>
              <p class="location">
                <span class="fa fa-map-marker"></span> Bohol Province, Bohol,
                Philippines
              </p>
              <ul>
                <li><span class="flaticon-shower"></span>2</li>
                <li><span class="flaticon-king-size"></span>3</li>
                <li><span class="flaticon-sun-umbrella"></span>Near Dauis, Bohol</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-intro ftco-section ftco-no-pt">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 text-center">
          <div class="img" style="background-image: url(images/bg_2.jpg)">
            <div class="overlay"></div>
            <h2>We Are Travel Ease A Travel Agency</h2>
            <p>
              We can manage your dream building A small river named Duden
              flows by their place
            </p>
            <p class="mb-0">
              <a href="#" class="btn btn-primary px-4 py-3">Ask For A Quote</a>
            </p>
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
            <p>
              Far far away, behind the word mountains, far from the countries
              Vokalia and Consonantia, there live the blind texts.
            </p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
              <li class="ftco-animate">
                <a href="#"><span class="fa fa-twitter"></span></a>
              </li>
              <li class="ftco-animate">
                <a href="#"><span class="fa fa-facebook"></span></a>
              </li>
              <li class="ftco-animate">
                <a href="#"><span class="fa fa-instagram"></span></a>
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
                  <a href="#"><span class="icon fa fa-paper-plane"></span><span
                      class="text">travelEase@gmail.com</span></a>
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
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" />
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
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
</body>

</html>