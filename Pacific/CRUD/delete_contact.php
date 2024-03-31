<?php 
    include "../conn.php";

    $del_id = $_GET['del_id'];

    $query = "DELETE FROM contact WHERE id = '$del_id'";
    $del_row = mysqli_query($conn, $query);
    
    if($del_row == true){
        header("Location: ../Admin Dashboard/contact.php");
    }

?>