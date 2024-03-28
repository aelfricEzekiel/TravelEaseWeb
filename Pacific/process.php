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

			?>
				<script>
					alert("Login Successful!");
					window.location.href="index.php";
				</script>
			<?php
		} else {
			?>
				<script>
					alert("Incorrect email and password!");
					window.location.href="login.php";
				</script>
			<?php
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
        
        $query = "INSERT INTO bookplace VALUES ('0', '$first_name', '$last_name', '$email', '$bookPlace', '$start_date', '$end_date', '$bookPrice')";
        $insert = mysqli_query($conn, $query);
        if($insert == true) {
            ?>
                <script>
                    alert("Successful book a destination!");
                    window.location.href="destination.php";
                </script>
            <?php
        } else {
            ?>
                <script>
                    alert("Unsuccesful booking!");
                    window.location.href="destination.php";
                </script>
            <?php
        }
        
    }
?>