
<?php
	include "conn.php";
	session_start();

	// This line of code is for tourist login
	if(isset($_POST['login_tourist'])){
		$email = $_POST['email'];
		$password = $_POST['pass'];

		$check = mysqli_query($conn, "SELECT * FROM tourist_account WHERE email = '$email' AND password = '$password'");
		$val_row_emailPass = mysqli_num_rows($check);

		if($val_row_emailPass >= 1){
			$_SESSION['email'] = $email;

            header("Location: index.php");
		} else {
            header("Location: login.php");
		}
	} 

    // this line of code is for register/creating accounts
    if (isset($_POST['create_touristAccount'])) {
        $first_name = $_POST['firstName'];
        $last_name = $_POST['lastName'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $confirm_pass = $_POST['confirm_pass'];

        $check_val_fname = mysqli_query($conn, "SELECT * FROM tourist_account WHERE firstName = '$first_name'");
        $val_row_fn = mysqli_num_rows($check_val_fname);

        if ($val_row_fn <= 0) {
            $insert_fn = mysqli_query($conn, "INSERT INTO tourist_account VALUES('0', '$first_name', '$last_name', '$email', '$password', '$confirm_pass')");

            if ($insert_fn == true) {
                ?>
                    <script>
                        alert("Successful!");
                        window.location.href = "touristAcc.php";
                    </script>
                <?php
            } else {
                ?>
                    <script>
                        alert("No data inserted");
                        window.location.href = "touristAcc.php";
                    </script>
            <?php
            }
        } else {
            ?>
            <script>
                alert("First name is already taken!");
                window.location.href = "touristAcc.php";
            </script>
        <?php
        }
    }
    // this line of code is for bookinga place
    if(isset($_POST['bookPlace'])){
        $first_name = $_POST['firstName'];
        $last_name = $_POST['lastName'];
        $email = $_POST['email'];
        $bookPlace = $_POST['place'];
        $start_date = $_POST['startDate'];
        $end_date = $_POST['endDate'];
        $bookPrice = $_POST['price'];
        $pax = $_POST['people'];

        $query = "SELECT * FROM bookplace WHERE bookPlace = '$bookPlace' AND bookPrice = '$bookPrice'";
        $val = mysqli_query($conn, $query);
        $check_val_query = mysqli_num_rows($val);

        if($check_val_query <= 0){
            $query = "INSERT INTO bookplace VALUES ('0', '$first_name', '$last_name', '$email', '$bookPlace', '$start_date', '$end_date', '$bookPrice', '$pax')";
            $insert = mysqli_query($conn, $query);

            if($insert == true) {
                ?>
                    <script>
                        alert("Successfully Booked!");
                        window.location.href="destination.php";
                    </script>
                <?php
            } else {
                ?>
                    <script>
                        alert("Unsuccesful Booked!");
                        window.location.href="destination.php";
                    </script>
                <?php
            }
        } else {
            ?>
                <script>
                    alert("Destination and price are already taken");
                    window.location.href="destination.php";
                </script>
            <?php
        }
        
    } 

    // this line of code is for booking a hotel
    if(isset($_POST['bookHotel'])){
        $first_name = $_POST['firstName'];
        $last_name = $_POST['lastName'];
        $email = $_POST['email'];
        $book_hotel = $_POST['hotel'];
        $start_date = $_POST['startDate'];
        $end_date = $_POST['endDate'];
        $book_hotel_price = $_POST['price'];
        $pax = $_POST['people'];

        $query = "SELECT * FROM book_hotel WHERE hotel = '$book_hotel' AND price = '$book_hotel_price'";
        $val = mysqli_query($conn, $query);
        $check_val_query = mysqli_num_rows($val);
        
        if($check_val_query <= 0){
            $query = "INSERT INTO book_hotel VALUES ('0', '$first_name', '$last_name', '$email', '$book_hotel', '$start_date', '$end_date', '$book_hotel_price', '$pax')";
            $insert = mysqli_query($conn, $query);

            if($insert == true) {
                ?>
                    <script>
                        alert("Successfully Booked!");
                        window.location.href="hotel.php";
                    </script>
                <?php
            } else {
                ?>
                    <script>
                        alert("Unsuccesful Booked!");
                        window.location.href="hotel.php";
                    </script>
                <?php
            }
        } else {
            ?>
                <script>
                    alert("Hotel and price are already taken");
                    window.location.href="hotel.php";
                </script>
            <?php
        }
        
    } 

    // this line of code is for contact
    if(isset($_POST['submit_message'])){
        $username = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        $query = "INSERT INTO contact VALUES ('0', '$username', '$email', '$message')";
        $insert = mysqli_query($conn, $query);

        if($insert == true){
            ?>
                <script>
                    alert("Delivered Message");
                    window.location.href="contact.php";
                </script>
            <?php
        } else {
            ?>
                <script>
                    alert("No messages delivered");
                    window.location.href="contact.php";
                </script>
            <?php
        }
    }

    // this line of code is for admin login form
    if(isset($_POST['adminLogin'])){
        $email = $_POST['email'];
        $password = $_POST['pass'];

        $query = "SELECT * FROM admin WHERE email = '$email' AND pass = '$password'";
        $val_admin = mysqli_query($conn, $query);
        $check = mysqli_num_rows($val_admin);

        if($check >= 1){
            $_SESSION['email'] = $email;
            
            header("Location: AdminDashboard/index.php");
        } else {
            header("Location: admin.php");
        }

    }
?>
