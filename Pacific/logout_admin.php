<?php 
    session_start();
    session_destroy();

    if(empty($_SESSION)){
        header("Location: ../admin.php");
    }
?>

<script>
    alert("Succesfully logout!");
    window.location.href="login.php";
</script>