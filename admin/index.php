<?php
    include "../Pacific/conn.php";

    session_start();

    if(empty($_SESSION)){
        ?>
        <script>
            alert("Please Login First!");
            window.location.href = "../Pacific/index.php/#loginTourist";
        </script>
    <?php
    }else{
        $email = $_SESSION['email'];

        $get_details = mysqli_query($conn , "SELECT * FROM admin WHERE email='$email'");
        while($row = mysqli_fetch_object($get_details)){
            $fn = $row -> firstName;
            $ln = $row -> lastName;
        }
    }
?>