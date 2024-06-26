<?php
	include "conn.php";
	session_start();

    if(empty($_SESSION)){
      header("Location: login.php");
    } else {
        $email= $_SESSION['email'];

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
      <a class="navbar-brand" href="index.php">TravelEase</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"><i class="fa-solid fa-bars"></i></span>
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="destination.php" class="nav-link">Tours</a></li>
          <li class="nav-item"><a href="hotel.php" class="nav-link">Hotel</a></li>
          <li class="nav-item active"><a href="blog.php" class="nav-link">Blog</a></li>
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
          <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i
                  class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="blog.php">Blog <i
                  class="fa fa-chevron-right"></i></a></span> <span>Blog Single <i
                class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Blog Details</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ftco-animate py-md-5 mt-md-5">
          <h2 class="mb-3">It is a long established fact a reader be distracted</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit, quisquam
            doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro adipisci sapiente
            officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore perferendis, enim praesentium omnis,
            iste doloremque quia officia optio deserunt molestiae voluptates soluta architecto tempora.</p>
          <p>
            <img src="images/bg_5.jpg" alt="" class="img-fluid">
          </p>
          <p>Molestiae cupiditate inventore animi, maxime sapiente optio, illo est nemo veritatis repellat sunt
            doloribus nesciunt! Minima laborum magni reiciendis qui voluptate quisquam voluptatem soluta illo eum ullam
            incidunt rem assumenda eveniet eaque sequi deleniti tenetur dolore amet fugit perspiciatis ipsa, odit.
            Nesciunt dolor minima esse vero ut ea, repudiandae suscipit!</p>
          <h2 class="mb-3 mt-5">#2. Creative WordPress Themes</h2>
          <p>Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in.
            Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore
            voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui
            officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.</p>
          <p>
            <img src="images/bg_1.jpg" alt="" class="img-fluid">
          </p>
          <p>Quisquam esse aliquam fuga distinctio, quidem delectus veritatis reiciendis. Nihil explicabo quod, est eos
            ipsum. Unde aut non tenetur tempore, nisi culpa voluptate maiores officiis quis vel ab consectetur suscipit
            veritatis nulla quos quia aspernatur perferendis, libero sint. Error, velit, porro. Deserunt minus,
            quibusdam iste enim veniam, modi rem maiores.</p>
          <div class="tag-widget post-tag-container mb-5 mt-5">
            <div class="tagcloud">
              <a href="#" class="tag-cloud-link">Life</a>
              <a href="#" class="tag-cloud-link">Sport</a>
              <a href="#" class="tag-cloud-link">Tech</a>
              <a href="#" class="tag-cloud-link">Travel</a>
            </div>
          </div>

          <div class="about-author d-flex p-4 bg-light">
            <div class="bio mr-5">
              <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
            </div>
            <div class="desc">
              <h3>George Washington</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus
                voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique,
                inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>


          <div class="pt-5 mt-5">
            <h3 class="mb-5" style="font-size: 20px; font-weight: bold;">6 Comments</h3>
            <ul class="comment-list">
              <li class="comment">
                <div class="vcard bio">
                  <img src="images/person_1.jpg" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>John Doe</h3>
                  <div class="meta">September 11, 2020 at 2:21pm</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus,
                    ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum
                    impedit necessitatibus, nihil?</p>
                  <p><a href="#" class="reply">Reply</a></p>
                </div>
              </li>

              <li class="comment">
                <div class="vcard bio">
                  <img src="images/person_1.jpg" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>John Doe</h3>
                  <div class="meta">September 11, 2020 at 2:21pm</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus,
                    ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum
                    impedit necessitatibus, nihil?</p>
                  <p><a href="#" class="reply">Reply</a></p>
                </div>

                <ul class="children">
                  <li class="comment">
                    <div class="vcard bio">
                      <img src="images/person_1.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                      <h3>John Doe</h3>
                      <div class="meta">September 11, 2020 at 2:21pm</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum
                        necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure!
                        Quam voluptas earum impedit necessitatibus, nihil?</p>
                      <p><a href="#" class="reply">Reply</a></p>
                    </div>


                    <ul class="children">
                      <li class="comment">
                        <div class="vcard bio">
                          <img src="images/person_1.jpg" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                          <h3>John Doe</h3>
                          <div class="meta">September 11, 2020 at 2:21pm</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum
                            necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste
                            iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                          <p><a href="#" class="reply">Reply</a></p>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>

              <li class="comment">
                <div class="vcard bio">
                  <img src="images/person_1.jpg" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>John Doe</h3>
                  <div class="meta">September 11, 2020 at 2:21pm</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus,
                    ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum
                    impedit necessitatibus, nihil?</p>
                  <p><a href="#" class="reply">Reply</a></p>
                </div>
              </li>
            </ul>
            <!-- END comment-list -->

            <div class="comment-form-wrap pt-5">
              <h3 class="mb-5" style="font-size: 20px; font-weight: bold;">Leave a comment</h3>
              <form action="#" class="p-5 bg-light">
                <div class="form-group">
                  <label for="name">Name *</label>
                  <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                  <label for="email">Email *</label>
                  <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                  <label for="website">Website</label>
                  <input type="url" class="form-control" id="website">
                </div>

                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                </div>

              </form>
            </div>
          </div>

        </div> <!-- .col-md-8 -->
        <div class="col-lg-4 sidebar ftco-animate bg-light py-md-5">
          <div class="sidebar-box pt-md-5">
            <form action="#" class="search-form">
              <div class="form-group">
                <span class="icon fa fa-search"></span>
                <input type="text" class="form-control" placeholder="Search...">
              </div>
            </form>
          </div>
          <div class="sidebar-box ftco-animate">
            <div class="categories">
              <h3>Categories</h3>
              <li><a href="#">Travel <span>(12)</span></a></li>
              <li><a href="#">Tour <span>(22)</span></a></li>
              <li><a href="#">Destination <span>(37)</span></a></li>
              <li><a href="#">Drinks <span>(42)</span></a></li>
              <li><a href="#">Foods <span>(14)</span></a></li>
              <li><a href="#">Travel <span>(140)</span></a></li>
            </div>
          </div>

          <div class="sidebar-box ftco-animate">
            <h3>Recent Blog</h3>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a>
                </h3>
                <div class="meta">
                  <div><a href="#"><span class="fa fa-calendar"></span> September 11, 2020</a></div>
                  <div><a href="#"><span class="fa fa-user"></span> Admin</a></div>
                  <div><a href="#"><span class="fa fa-comment"></span> 19</a></div>
                </div>
              </div>
            </div>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a>
                </h3>
                <div class="meta">
                  <div><a href="#"><span class="fa fa-calendar"></span> September 11, 2020</a></div>
                  <div><a href="#"><span class="fa fa-user"></span> Admin</a></div>
                  <div><a href="#"><span class="fa fa-comment"></span> 19</a></div>
                </div>
              </div>
            </div>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a>
                </h3>
                <div class="meta">
                  <div><a href="#"><span class="fa fa-calendar"></span> September 11, 2020</a></div>
                  <div><a href="#"><span class="fa fa-user"></span> Admin</a></div>
                  <div><a href="#"><span class="fa fa-comment"></span> 19</a></div>
                </div>
              </div>
            </div>
          </div>

          <div class="sidebar-box ftco-animate">
            <h3>Tag Cloud</h3>
            <div class="tagcloud">
              <a href="#" class="tag-cloud-link">dish</a>
              <a href="#" class="tag-cloud-link">menu</a>
              <a href="#" class="tag-cloud-link">food</a>
              <a href="#" class="tag-cloud-link">sweet</a>
              <a href="#" class="tag-cloud-link">tasty</a>
              <a href="#" class="tag-cloud-link">delicious</a>
              <a href="#" class="tag-cloud-link">desserts</a>
              <a href="#" class="tag-cloud-link">drinks</a>
            </div>
          </div>

          <div class="sidebar-box ftco-animate">
            <h3>Paragraph</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate
              quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos
              fugit cupiditate numquam!</p>
          </div>
        </div>

      </div>
    </div>
  </section> <!-- .section -->

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
                <li><a href="contact.php"><span class="icon fa fa-phone"></span><span class="text">+63 989 321
                  5645</span></a></li>
                <li><a href="contact.php"><span class="icon fa fa-paper-plane"></span><span
                      class="text">travelEase@gmail.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script> All rights reserved | TravelEase
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" />
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
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>

</html>