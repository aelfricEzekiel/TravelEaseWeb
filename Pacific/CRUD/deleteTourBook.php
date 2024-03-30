<?php 
    include "../conn.php";

    $del_id = $_GET['del_id'];

    $query = "DELETE FROM bookplace WHERE id = '$del_id'";
    $delete_data = mysqli_query($conn, $query);

    if($delete_data == true ){
        header("Location: ../Admin Dashboard/tourBooking.php");
        exit();
    }
?>