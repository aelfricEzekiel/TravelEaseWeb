<!DOCTYPE html>
<html lang="en">

<head>
	<title>TravelEase</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/animate.css" type="text/css">

	<link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css" type="text/css">
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
	<link rel="stylesheet" href="css/jquery.timepicker.css" type="text/css">

	<link rel="stylesheet" href="css/flaticon.css" type="text/css">
	<link rel="stylesheet" href="css/style.css" type="text/css">

	<!-- Font Awesome Links -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">

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
					<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
					<li class="nav-item"><a href="destination.php" class="nav-link">Destination</a></li>
					<li class="nav-item"><a href="hotel.php" class="nav-link">Hotel</a></li>
					<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
					<li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-target="#accounts">Accounts<i class="bi bi-chevron-down"></i></a>
						<ul class="dropdown-menu" aria-labelledby="accounts">
							<li class="dropdown-item">
								<a href="#" class="dropdown-item" data-toggle="modal" data-target="#admin_login">Login as Admin</a>
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
						<label for="lastName">Email</label>
						<div class="input-group">
							<span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
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
						<button type="submit" class="btn btn-success">Create Account</button>
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
							<span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
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
						<button type="submit" class="btn btn-success">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Modal for login admin -->
	<div class="modal fade" id="admin_login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
							<span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
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
						<button type="submit" class="btn btn-success">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Main content -->
	<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_5.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
				<div class="col-md-7 ftco-animate">
					<span class="subheading">Welcome to TravelEase</span>
					<h1 class="mb-4">Discover Your Favorite Place with Us</h1>
					<p class="caps">Travel to the any corner of the world, without going around in circles</p>
				</div>
				<a href="video/Wake Up in the Philippines _ Philippines Tourism Ad.mp4" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
					<span class="fa fa-play"></span>
				</a>
			</div>
		</div>
	</div>

	<section class="ftco-section ftco-no-pb ftco-no-pt">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="ftco-search d-flex justify-content-center">
						<div class="row">
							<div class="col-md-12 nav-link-wrap">
								<div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
									<a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Search Tour</a>
									<a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Hotel</a>
								</div>
							</div>
							<div class="col-md-12 tab-wrap">
								<div class="tab-content" id="v-pills-tabContent">
									<div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
										<form action="#" class="search-property-1">
											<div class="row no-gutters">
												<!-- Search Place Dropdown  -->
												<div class="col-md d-flex">
													<div class="form-group p-4 border-0">
														<label for="#">Destination</label>
														<div class="form-field">
															<div class="icon"><span class="fa fa-search"></span></div>
															<input type="text" class="form-control" placeholder="Search place" id="searchPlace">
														</div>
													</div>
												</div>
												<div class="col-md d-flex">
													<div class="form-group p-4">
														<label for="#">Check-in date</label>
														<div class="form-field">
															<div class="icon"><span class="fa fa-calendar"></span></div>
															<input type="text" class="form-control checkin_date" placeholder="Check In Date">
														</div>
													</div>
												</div>
												<div class="col-md d-flex">
													<div class="form-group p-4">
														<label for="#">Check-out date</label>
														<div class="form-field">
															<div class="icon"><span class="fa fa-calendar"></span></div>
															<input type="text" class="form-control checkout_date" placeholder="Check Out Date">
														</div>
													</div>
												</div>
												<div class="col-md d-flex">
													<div class="form-group p-4">
														<label for="#">Price Limit</label>
														<div class="form-field">
															<div class="select-wrap">
																<div class="icon"><span class="fa fa-chevron-down"></span></div>
																<select name="" id="" class="form-control">
																	<option value="">$100</option>
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
												<div class="col-md d-flex">
													<div class="form-group d-flex w-100 border-0">
														<div class="form-field w-100 align-items-center d-flex">
															<input type="submit" value="Search" class="align-self-stretch form-control btn btn-primary">
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
									<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
										<form action="#" class="search-property-1">
											<div class="row no-gutters">
												<div class="col-lg d-flex">
													<div class="form-group p-4 border-0">
														<label for="#">Destination</label>
														<div class="form-field">
															<div class="icon"><span class="fa fa-search"></span></div>
															<input type="text" class="form-control" placeholder="Search place">
														</div>
													</div>
												</div>
												<div class="col-lg d-flex">
													<div class="form-group p-4">
														<label for="#">Check-in date</label>
														<div class="form-field">
															<div class="icon"><span class="fa fa-calendar"></span></div>
															<input type="text" class="form-control checkin_date" placeholder="Check In Date">
														</div>
													</div>
												</div>
												<div class="col-lg d-flex">
													<div class="form-group p-4">
														<label for="#">Check-out date</label>
														<div class="form-field">
															<div class="icon"><span class="fa fa-calendar"></span></div>
															<input type="text" class="form-control checkout_date" placeholder="Check Out Date">
														</div>
													</div>
												</div>
												<div class="col-lg d-flex">
													<div class="form-group p-4">
														<label for="#">Price Limit</label>
														<div class="form-field">
															<div class="select-wrap">
																<div class="icon"><span class="fa fa-chevron-down"></span></div>
																<select name="" id="" class="form-control">
																	<option value="">$100</option>
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
															<input type="submit" value="Search" class="align-self-stretch form-control btn btn-primary p-0">
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
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
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
							It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
							there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
							Semantics, a large language ocean.
							A small river named Duden flows by their place and supplies it with the necessary
							regelialia.</p>
						<p><a href="#" class="btn btn-primary py-3 px-4">Search Destination</a></p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
							<div class="services services-1 color-1 d-block img" style="background-image: url(images/services-1.jpg);">
								<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-paragliding"></span></div>
								<div class="media-body">
									<h3 class="heading mb-3">Activities</h3>
									<p>A small river named Duden flows by their place and supplies it with the necessary
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
							<div class="services services-1 color-2 d-block img" style="background-image: url(images/services-2.jpg);">
								<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
								<div class="media-body">
									<h3 class="heading mb-3">Travel Arrangements</h3>
									<p>A small river named Duden flows by their place and supplies it with the necessary
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
							<div class="services services-1 color-3 d-block img" style="background-image: url(images/services-3.jpg);">
								<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-tour-guide"></span></div>
								<div class="media-body">
									<h3 class="heading mb-3">Private Guide</h3>
									<p>A small river named Duden flows by their place and supplies it with the necessary
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
							<div class="services services-1 color-4 d-block img" style="background-image: url(images/services-4.jpg);">
								<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-map"></span></div>
								<div class="media-body">
									<h3 class="heading mb-3">Location Manager</h3>
									<p>A small river named Duden flows by their place and supplies it with the necessary
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Selecting a Destination Box-->
	<section class="ftco-section img ftco-select-destination" style="background-image: url(images/bg_3.jpg);">
		<div class="container">
			<div class="row justify-content-center pb-4">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">TravelEase Provide Places</span>
					<h2 class="mb-4">Select Your Destination</h2>
				</div>
			</div>
		</div>
		<div class="container container-2">
			<div class="row">
				<div class="col-md-12">
					<div class="carousel-destination owl-carousel ftco-animate">
						<div class="item">
							<div class="project-destination">
								<a href="destination.php" class="img" style="background-image: url(images/boracay.webp);">
									<div class="text">
										<h3>Boracay, Aklan</h3>
										<span>10 Tours</span>
									</div>
								</a>
							</div>
						</div>
						<div class="item">
							<div class="project-destination">
								<a href="destination.php" class="img" style="background-image: url(images/Siargao.jpg);">
									<div class="text">
										<h3>Siargao Island, Surigao del Norte</h3>
										<span>15 Tours</span>
									</div>
								</a>
							</div>
						</div>
						<div class="item">
							<div class="project-destination">
								<a href="destination.php" class="img" style="background-image: url(images/Coron\ Island\ Palawan.jpg);">
									<div class="text">
										<h3>Coron Island, Palawan</h3>
										<span>5 Tours</span>
									</div>
								</a>
							</div>
						</div>
						<div class="item">
							<div class="project-destination">
								<a href="destination.php" class="img" style="background-image: url(images/Calle\ Crisologo\ Vigan.jpg);">
									<div class="text">
										<h3>Calle Crisologo, Vigan</h3>
										<span>8 Tours</span>
									</div>
								</a>
							</div>
						</div>
						<div class="item">
							<div class="project-destination">
								<a href="destination.php" class="img" style="background-image: url(images/Intramuros\ Manila.avif);">
									<div class="text">
										<h3>Fort Santiago Intramuros, Manila</h3>
										<span>9 Tours</span>
									</div>
								</a>
							</div>
						</div>
						<div class="item">
							<div class="project-destination">
								<a href="destination.php" class="img" style="background-image: url(images/Taal\ Volcano.webp);">
									<div class="text">
										<h3>Taal Volcano, Batangas</h3>
										<span>10 Tours</span>
									</div>
								</a>
							</div>
						</div>
						<div class="item">
							<div class="project-destination">
								<a href="destination.php" class="img" style="background-image: url(images/Kawasan\ Falls\ Cebu.jpg);">
									<div class="text">
										<h3>Kawasan Falls, Cebu</h3>
										<span>12 Tours</span>
									</div>
								</a>
							</div>
						</div>
						<div class="item">
							<div class="project-destination">
								<a href="destination.php" class="img" style="background-image: url(images/Mt.\ Pulag.jpg)">
									<div class="text">
										<h3>Mt. Pulag, Benguet</h3>
										<span>7 Tours</span>
									</div>
								</a>
							</div>
						</div>
						<div class="item">
							<div class="project-destination">
								<a href="destination.html" class="img" style="background-image: url(images/Chocolate\ Hills.jpg);">
									<div class="text">
										<h3>Chocolate Hills, Bohol</h3>
										<span>12 Tours</span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Travel Ease Destionation -->
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center pb-4">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Destination</span>
					<h2 class="mb-4">Tour Destination</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<a href="#" class="img" style="background-image: url(images/boracay.webp);">
							<span class="price">₱500/person</span>
						</a>
						<div class="text p-4">
							<span class="days">4 Days Tour</span>
							<h3><a href="destination.php">Boracay Island</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> Aklan, Western Visayas,
								Philippines</p>
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
						<a href="#" class="img" style="background-image: url(images/Siargao.jpg);">
							<span class="price">₱530/person</span>
						</a>
						<div class="text p-4">
							<span class="days">3 Days Tour</span>
							<h3><a href="destination.php">Siargao Island</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> Surigao del Norte, Ilocos Sur,
								Philippines</p>
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
						<a href="#" class="img" style="background-image: url(images/Coron\ Island\ Palawan.jpg);">
							<span class="price">₱650/person</span>
						</a>
						<div class="text p-4">
							<span class="days">3 Days Tour</span>
							<h3><a href="destination.php">Coron Island</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> Coron, Palawan, Philippines</p>
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
						<a href="#" class="img" style="background-image: url(images/Calle\ Crisologo\ Vigan.jpg);">
							<span class="price">₱420/person</span>
						</a>
						<div class="text p-4">
							<span class="days">3 Days Tour</span>
							<h3><a href="destination.php">Calle Crisologo</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> Vigan, Ilocos Sur, Philippines
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
						<a href="#" class="img" style="background-image: url(images/Intramuros\ Manila.avif);">
							<span class="price">₱350/person</span>
						</a>
						<div class="text p-4">
							<span class="days">4 Days Tour</span>
							<h3><a href="destination.php">Fort Santiago</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> Intramuros, Metro Manila,
								Philippines</p>
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
						<a href="#" class="img" style="background-image: url(images/Taal\ Volcano.webp);">
							<span class="price">₱390/person</span>
						</a>
						<div class="text p-4">
							<span class="days">1 Days Tour</span>
							<h3><a href="destination.php">Taal Volcano</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> Talisay and San Nicolas,
								Batangas, Philippines</p>
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
						<a href="#" class="img" style="background-image: url(images/Kawasan\ Falls\ Cebu.jpg);">
							<span class="price">₱430/person</span>
						</a>
						<div class="text p-4">
							<span class="days">2 Days Tour</span>
							<h3><a href="destination.php">Kawasan Falls</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> Badian, Cebu, Philippines</p>
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
						<a href="#" class="img" style="background-image: url(images/Mt.\ Pulag.jpg);">
							<span class="price">₱600/person</span>
						</a>
						<div class="text p-4">
							<span class="days">3 Days Tour</span>
							<h3><a href="destination.php">Mt. Pulag</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> Benguet, Cordillera
								Administrative Region, Philippines</p>
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
						<a href="#" class="img" style="background-image: url(images/Chocolate\ Hills.jpg);">
							<span class="price">₱640/person</span>
						</a>
						<div class="text p-4">
							<span class="days">3 Days Tour</span>
							<h3><a href="destination.php">Chocolate Hills</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> Bohol Province, Bohol,
								Philippines</p>
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

	<section class="ftco-section ftco-about img" style="background-image: url(images/Calle\ Crisologo\ Night.jpg);">
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
							<div class="img d-flex w-100 align-items-center justify-content-center" style="background-image:url(images/about-1.jpg);">
							</div>
						</div>
						<div class="col-md-6 pl-md-5 py-5">
							<div class="row justify-content-start pb-3">
								<div class="col-md-12 heading-section ftco-animate">
									<span class="subheading">About Us</span>
									<h2 class="mb-4">Make Your Tour Memorable and Safe With Us</h2>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and
										Consonantia, there live the blind texts. Separated they live in Bookmarksgrove
										right at the coast of the Semantics, a large language ocean.</p>
									<p><a href="#" class="btn btn-primary">Book Your Destination</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section testimony-section bg-bottom" style="background-image: url(images/bg_1.jpg);">
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
									<p class="mb-4">Far far away, behind the word mountains, far from the countries
										Vokalia and Consonantia, there live the blind texts.</p>
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
									<p class="mb-4">Far far away, behind the word mountains, far from the countries
										Vokalia and Consonantia, there live the blind texts.</p>
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
									<p class="mb-4">Far far away, behind the word mountains, far from the countries
										Vokalia and Consonantia, there live the blind texts.</p>
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
									<p class="mb-4">Far far away, behind the word mountains, far from the countries
										Vokalia and Consonantia, there live the blind texts.</p>
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
									<p class="mb-4">Far far away, behind the word mountains, far from the countries
										Vokalia and Consonantia, there live the blind texts.</p>
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


	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center pb-4">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Our Blog</span>
					<h2 class="mb-4">Recent Post</h2>
				</div>
			</div>
			<div class="row d-flex">
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry justify-content-end">
						<a href="blog-single.php" class="block-20" style="background-image: url('images/image_1.jpg');">
						</a>
						<div class="text">
							<div class="d-flex align-items-center mb-4 topp">
								<div class="one">
									<span class="day">11</span>
								</div>
								<div class="two">
									<span class="yr">2020</span>
									<span class="mos">September</span>
								</div>
							</div>
							<h3 class="heading"><a href="#">Most Popular Place In This World</a></h3>
							<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
							<p><a href="#" class="btn btn-primary">Read more</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry justify-content-end">
						<a href="blog-single.php" class="block-20" style="background-image: url('images/image_2.jpg');">
						</a>
						<div class="text">
							<div class="d-flex align-items-center mb-4 topp">
								<div class="one">
									<span class="day">11</span>
								</div>
								<div class="two">
									<span class="yr">2020</span>
									<span class="mos">September</span>
								</div>
							</div>
							<h3 class="heading"><a href="#">Most Popular Place In This World</a></h3>
							<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
							<p><a href="#" class="btn btn-primary">Read more</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry">
						<a href="blog-single.php" class="block-20" style="background-image: url('images/image_3.jpg');">
						</a>
						<div class="text">
							<div class="d-flex align-items-center mb-4 topp">
								<div class="one">
									<span class="day">11</span>
								</div>
								<div class="two">
									<span class="yr">2020</span>
									<span class="mos">September</span>
								</div>
							</div>
							<h3 class="heading"><a href="#">Most Popular Place In This World</a></h3>
							<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
							<p><a href="#" class="btn btn-primary">Read more</a></p>
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
					<div class="img" style="background-image: url(images/bg_2.jpg);">
						<div class="overlay"></div>
						<h2>We Are Travel Ease A Travel Agency</h2>
						<p>We can manage your dream building A small river named Duden flows by their place</p>
						<p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Ask For A Quote</a></p>
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
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
							there live the blind texts.</p>
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