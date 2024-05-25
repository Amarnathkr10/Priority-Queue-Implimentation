<?php session_start(); ?>
<div class="nav">
    <div class="flex_it">
        <img src="images/logo.png" alt="" height="40px" width="40px">
        <span class="nav-font"> <a style="text-decoration: none;color: white;" href="index.php">PQI</a> </span>
    </div>
    <div class="log-cred">

        <a href="index.php">Home</a>
        <a href="AboutUs.php">About us</a>


        <?php if (isset($_SESSION['id'])) : ?>
            <?php if (($_SESSION['user_type'] == 1)) : ?>
                <a href="dashboard.php">Dashboard</a>
            <?php endif ?>
        <?php endif ?>

        <?php if (!isset($_SESSION['name'])) : ?>

            <a href="sigin_signup.php">Sign In</a>
        <?php endif ?>



        <a href="queue.php">Queue</a>

        <div class="dropdownMenu">

            <button class="dropbutton">Priority Queue</button>
            <div class="dropdown-link">
                <a href="ascending.php">Ascending</a>
                <a href="descending.php">Descending</a>
            </div>

        </div>
        <?php if (isset($_SESSION['name'])) : ?>
            <div class="userlogin" style=" position: relative;
    display: inline-block;">
                <button class="dropbutton2" style="display: flex;">
                    <?php

                    if (isset($_SESSION['name'])) : ?>
                        <div style="background-color: black;width:30px;height:30px;border-radius:15px;margin-right:5px;"><i class="fa-solid fa-user" style="font-size: 15px;"></i></div>
                        <?php echo  $_SESSION['name']; ?>


                </button>
                <div class="dropdown-link2">
                    <?php if (isset($_SESSION['id'])) : ?>
                        <?php if (($_SESSION['user_type'] == 0)) : ?>
                            <a href="user_profile.php"> <i class="fa-solid fa-user" style=" padding-right: 5px; font-size: 15px"></i>My Profile</a>
                        <?php endif ?>
                    <?php endif ?>


                    <a href="logout.php"> <i class="fa-solid fa-right-from-bracket" style=" padding-right: 5px; font-size: 15px"></i>Log Out</a>
                <?php endif ?>
                </div>
            </div>
        <?php endif ?>

    </div>
</div>