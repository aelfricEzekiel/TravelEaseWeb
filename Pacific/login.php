<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<?php
	echo "<link rel='stylesheet' href='css/style.css' type='text/css'>", "<script src='js/main.js' type='text/js'></script>";
	?>

    <title>Login</title>
</head>
<body>  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="login.php">TravelEase<span>Travel Agency</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"><i class="fa-solid fa-bars"></i></span>
			</button>
            
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="#" class="nav-link" data-toggle="modal" data-target="#admin_login">Login as Admin</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-toggle="modal" data-target="#loginTourist">Login as Tourist</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-toggle="modal" data-target="#createTouristAccount">Create Account</a>
                    </li>
                </ul>
            </div>
			</div>
		</div>
	</nav>
    <!-- Modal for creating a tourist account-->
	<div class="modal fade" id="createTouristAccount" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Create Tourist Account</h5>
						<button type="button" class="btn-close" data-dismiss="modal"><i class="fa-regular fa-x"></i></button>
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
						<label for="lastName">Email</label>
						<div class="input-group">
							<span class="input-group-text"><i class="fa-solid fa-envelope-open"></i></span>
							<input type="text" class="form-control" placeholder="Enter email" name="email" required>
						</div>
						<label for="password">Password</label>
						<div class="input-group">
							<span class="input-group-text"><i class="fa-solid fa-key"></i></span>
							<input type="password" class="form-control" placeholder="Enter password" name="pass" id="password" required>
						</div>
						<label for="confirm_password">Confirm Password</label>
						<div class="input-group">
							<span class="input-group-text"><i class="fa-solid fa-key"></i></span>
							<input type="password" class="form-control" placeholder="Enter confirm password" name="confirm_pass" id="password" required>
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
	<!-- Modal for login admin -->
	<div class="modal fade" id="admin_login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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