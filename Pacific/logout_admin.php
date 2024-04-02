<?php 
    session_start();
    session_destroy();

    if(empty($_SESSION)){
        header("Location: ../Pacific/admin.php");
    }
?>

<script>
    alert("Succesfully logout!");
    window.location.href="login.php";
</script>