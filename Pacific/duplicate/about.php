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
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"><i class="fa-solid fa-bars"></i></span>
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="index.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item active">
            <a href="about.php" class="nav-link">About</a>
          </li>
          <li class="nav-item">
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
				<form action="#" method="post" enctype="multipart/form-data">
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
				<form action="#" method="post" enctype="multipart/form-data">
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
  <!-- Modal for admin login -->
  <div class="modal fade" id="adminLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="#" method="post" enctype="multipart/form-data">
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
            <span>About us <i class="fa fa-chevron-right"></i></span>
          </p>
          <h1 class="mb-0 bread">About Us</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section services-section">
    <div class="container">
      <div class="row d-flex">
        <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
          <div class="w-100">
            <span class="subheading">Welcome to TravelEase</span>
            <h2 class="mb-4">It's time to start your adventure</h2>
            <p>TravelEase highlights the relevant information clearly and concisely. </p>
            <p>The homepage gives a brief description if every vacation place in the Philippines and some services that we have. TravelEase also gives a clear breakdown of plans and pricing, with a button for easy request.</p>
            <p>
              <a href="#" class="btn btn-primary py-3 px-4">Search Destination</a>
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
              <div class="services services-1 color-1 d-block img" style="background-image: url(images/services-1.jpg)">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="flaticon-paragliding"></span>
                </div>
                <div class="media-body">
                  <h3 class="heading mb-3">Activities</h3>
                  <p>Banana Boat, Swimming Pool, Waterfalls and Hiking</p>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
              <div class="services services-1 color-2 d-block img" style="background-image: url(images/services-2.jpg)">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="flaticon-route"></span>
                </div>
                <div class="media-body">
                  <h3 class="heading mb-3">Travel Arrangements</h3>
                  <p>TravelEase offer ideas to enjoy your vacation</p>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
              <div class="services services-1 color-3 d-block img" style="background-image: url(images/services-3.jpg)">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="flaticon-tour-guide"></span>
                </div>
                <div class="media-body">
                  <h3 class="heading mb-3">Private Guide</h3>
                  <p>Professional Tour Guide will accomodate you to the good place and great stories for the whole vacation</p>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
              <div class="services services-1 color-4 d-block img" style="background-image: url(images/services-4.jpg)">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="flaticon-map"></span>
                </div>
                <div class="media-body">
                  <h3 class="heading mb-3">Hotels</h3>
                  <p>Looking for near hotels for vacation</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-about img" style="background-image: url(images/Calle\ Crisologo\ Night.jpg)">
    <div class="overlay"></div>
    <div class="container py-md-5">
      <div class="row py-md-5">
        <div class="col-md d-flex align-items-center justify-content-center">
          <a href="video/Wake Up in the Philippines _ Philippines Tourism Ad.mp4" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
            <span class="fa fa-play"></span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-about ftco-no-pt img">
    <div class="container">
      <div class="row d-flex">
        <div class="col-md-12 about-intro">
          <div class="row">
            <div class="col-md-6 d-flex align-items-stretch">
              <div class="img d-flex w-100 align-items-center justify-content-center" style="background-image: url(images/about-1.jpg)"></div>
            </div>
            <div class="col-md-6 pl-md-5 py-5">
              <div class="row justify-content-start pb-3">
                <div class="col-md-12 heading-section ftco-animate">
                  <span class="subheading">About Us</span>
                  <h2 class="mb-4">
                    Make Your Tour Memorable and Safe With Us
                  </h2>
                  <p>TravelEase highlights the relevant information clearly and concisely. The homepage gives a brief description if every vacation place in the Philippines and some services that we have. TravelEase also gives a clear breakdown of plans and pricing, with a button for easy request.</p>
                  <p>
                    <a href="destination.php" class="btn btn-primary">Book Your Destination</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section testimony-section bg-bottom" style="background-image: url(images/bg_1.jpg)">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-center pb-4">
        <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          <span class="subheading">Testimonial</span>
          <h2 class="mb-4">Tourist Feedback</h2>
        </div>
      </div>
      <div class="row ftco-animate">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel">
            <div class="item">
              <div class="testimony-wrap py-4">
                <div class="text">
                  <p class="star">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </p>
                  <p class="mb-4">
                    Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind
                    texts.
                  </p>
                  <div class="d-flex align-items-center">
                    <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    <div class="pl-3">
                      <p class="name">Roger Scott</p>
                      <span class="position">Marketing Manager</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4">
                <div class="text">
                  <p class="star">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </p>
                  <p class="mb-4">
                    Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind
                    texts.
                  </p>
                  <div class="d-flex align-items-center">
                    <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    <div class="pl-3">
                      <p class="name">Roger Scott</p>
                      <span class="position">Marketing Manager</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4">
                <div class="text">
                  <p class="star">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </p>
                  <p class="mb-4">
                    Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind
                    texts.
                  </p>
                  <div class="d-flex align-items-center">
                    <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                    <div class="pl-3">
                      <p class="name">Roger Scott</p>
                      <span class="position">Marketing Manager</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4">
                <div class="text">
                  <p class="star">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </p>
                  <p class="mb-4">
                    Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind
                    texts.
                  </p>
                  <div class="d-flex align-items-center">
                    <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    <div class="pl-3">
                      <p class="name">Roger Scott</p>
                      <span class="position">Marketing Manager</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4">
                <div class="text">
                  <p class="star">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </p>
                  <p class="mb-4">
                    Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind
                    texts.
                  </p>
                  <div class="d-flex align-items-center">
                    <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    <div class="pl-3">
                      <p class="name">Roger Scott</p>
                      <span class="position">Marketing Manager</span>
                    </div>
                  </div>
                </div>
              </div>
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
            <p>We can help you decide for your vacation</p>
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