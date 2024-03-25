<?php
    include "conn.php"; 
    session_start();


    

    //bookings
/*
    if(isset($_POST['book'])){
        $fn = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $ci = $_POST['check_in'];
        $co = $_POST['check_out'];
        $place = $_POST['place'];
        $people = $_POST['people'];
        $loc = $_POST['location'];

        $req = mysqli_query($conn,"INSERT INTO booking_tb VALUES('0','$fn','$email','$contact','$ci','$co','$place','$people','$loc'" );
        header('location:hotel.php');
    }else{
            ?>
                <script>
                    alert("Something went wrong please try again!");
                    window.location.href = "../index.php";
                </script>
            <?php
    }

    //end
    */
    if(isset($_POST['createTouristAccount'])){
        $fn = $_POST['firstName'];
        $ln = $_POST['lastName'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $cpass = $_POST['confirm_pass'];

        $val = mysqli_query($conn, "SELECT * FROM signup WHERE email = '$email'");
        $num_email = mysqli_num_rows($val);

        if ($num_email <= 0) {
            $insert = mysqli_query($conn, "INSERT INTO signup VALUES('0','$fn','$ln','$email','$pass','$cpass')");
    
            if ($insert == true) {
            ?>
                <script>
                    alert("Succesfully Registered!");
                    window.location.href = "index.php";
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert("Error in Registration!");
                    window.location.href = "index.php";
                </script>
            <?php
            }
        }else {
            ?>
            <script>
                alert("Email is already in use!");
                window.location.href = "index.php";
            </script>
        <?php
        }

    }

    if (isset($_POST['loginTourist'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
    
        $check = mysqli_query($conn, "SELECT * FROM signup WHERE email='$email' AND password='$pass'");
        $check_num = mysqli_num_rows($check);
        if ($check_num >= 1) {
            $_SESSION['email'] = $email;
        ?>
            <script>
                alert("Succesfully Login!");
                window.location.href = "blog.php";
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("Error in Login!");
                window.location.href = "index.php";
            </script>
    <?php
        }
    }
    

    if (isset($_POST['admin_login'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
    
        $check = mysqli_query($conn, "SELECT * FROM admin WHERE email='$email' AND password='$pass'");
        $check_num = mysqli_num_rows($check);
        if ($check_num >= 1) {
            $_SESSION['email'] = $email;
    
            
        ?>
            <script>
                alert("Succesfully Login!");
                window.location.href = "destination.php";
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("Error in Login!");
                window.location.href = "index.php";
            </script>
    <?php
        }
    }
?>