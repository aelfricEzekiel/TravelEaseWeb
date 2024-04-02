<?php 
    include "../conn.php";

    $del_id = $_GET['del_id'];
    
    $query = mysqli_query($conn, "DELETE FROM tourist_account WHERE id = '$del_id'");

    if($query == true){
        header("Location: ../Admin Dashboard/index.php");
    }
?>