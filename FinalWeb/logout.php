
<?php 
    session_start();
    session_destroy();
?>

<script>
    alert("Succesfully logout!");
    window.location.href="login.php";
</script>
