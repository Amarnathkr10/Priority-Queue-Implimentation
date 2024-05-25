<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
    <link rel="stylesheet" href="css/signin.css">

</head>

<body>
<?php include 'includes/navbar.php' ?>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="insert_user.php" method="POST" class="signbtn">
                <h1>Create Account</h1>
                <!-- <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span> -->
                <input type="text" placeholder="Name" name="name" required/>
                <input type="email" placeholder="Email" name="email" required/>
                <input type="password" placeholder="Password" name="password" required/>
                <input type="password" placeholder="Confirm Password" name="confirm_pass" required/>
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="signin_validation.php" class="signbtn" method="POST">
                <h1>Sign in</h1>
                <!-- <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div> -->
                <!-- <span>or use your account</span> -->
                <input type="email" placeholder="Email" name="email" required />
                <input type="password" placeholder="Password" name="password" required />
                <!-- <a style="text-decoration: none; color: blue; font-size: 14px; font-weight: 500; margin-bottom: 5px;"  href="#">Forgot your password?</a> -->
                <br>
                <button>Sign In</button>

                <a style="text-decoration: none; color: blue; font-size: 14px; font-weight: 800; margin-top: 15px;"  href="admin_signin.php">Admin?</a>

            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left signbtn">
                    <h1>Welcome Back!</h1>
                    <p>Please Sign In</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right signbtn">
                    <h1>Hello, Friend!</h1>
                    <p>New here, Please Sign Up</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 20px;">
        <footer class="foot">
            <p><span>©</span>  Copyright PQI 2021. All rights reserved.</p>
        </footer>
    </div>

    <script src="JS/signin.js"></script>

</body>

</html>