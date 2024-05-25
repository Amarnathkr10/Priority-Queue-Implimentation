<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0136fe14f5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Document</title>
</head>

<body>
    <?php require 'includes/navbar.php'; ?>

    <?php

    require 'includes/connection.php';
    $id = $_GET['id'];

    $sql = "SELECT * from MyUser WHERE id='$id'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    
    ?>


    <div style="display: flex;">
        <div class="sidebar">
            <br>
            <div style="width:80%;background-color: white;margin-left:12px;">
                <a href="user_profile.php" style="color: black;">My Profile</a>
            </div>
        </div>


        <div class="container" style="margin: 100px 0px 0px 30%;">
            <form class="edit_form" action="update_user.php?id=<?php echo $id ?>" method="post">
            <br>
                <h3>Update Your Details</h3>
                <label for="">Name:</label>
                <input type="text" name="name" value="<?php echo $row['name']?>" required>
                <br>
                <label for="">Email:</label>
                <input type="email" name="email" value="<?php echo $row['email']?>" required>
                <br>
                <div class="nxt"><button type="submit" name="update">Update</button></div>
                
            </form>

        </div>

    </div>
</body>

</html>