<?php 
    include "conn.php";
    session_start();

    if(empty($_SESSION)){
        header("Location: admin.php");
    } else {
        $email = $_SESSION['email'];

        $query = "SELECT * FROM admin WHERE email = '$email'";
        $fetch_data = mysqli_query($conn, $query);

        while($row = mysqli_fetch_object($fetch_data)){
            $first_name = $row -> firstName;
            $last_name = $row -> lastName;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Bitch!!!! <?php echo $first_name . " " . $last_name; ?></h1>
    <a href="logout_admin.php">Logout</a>


    <table border="2">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Destination</th>
            <th>Check-in Date</th>
            <th>Check-out Date</th>
            <th>Price</th>
            <th>People</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>

        <?php 
            $query = "SELECT * FROM bookplace";
            $records = mysqli_query($conn,  $query);

            while($get_data = mysqli_fetch_array($records)){
                ?>
                    <tr>
                        <td>
                            <?php echo $get_data['id']?>
                        </td>
                        <td>
                            <?php echo $get_data['first_name']?>
                        </td>
                        <td>
                            <?php echo $get_data['last_name']?>
                        </td>
                        <td>
                            <?php echo $get_data['email']?>
                        </td>
                        <td>
                            <?php echo $get_data['bookPlace']?>
                        </td>
                        <td>
                            <?php echo $get_data['start_date']?>
                        </td>
                        <td>
                            <?php echo $get_data['end_date']?>
                        </td>
                        <td>
                            <?php echo $get_data['bookPrice']?>
                        </td>
                        <td>
                            <?php echo $get_data['people']?>
                        </td>
                        <td>
                            <a href="delete.php?del_id=<?php echo $get_data['id']; ?>">Delete</a>
                        </td>
                        <td>
                            <a href="update.php?del_id=<?php echo $get_data['id'];?>">Update</a>
                        </td>
                    </tr>
                <?php
            }
        ?>
    </table>
</body>
</html>