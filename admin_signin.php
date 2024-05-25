<!DOCTYPE html>
<html>

<head>
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="css/admin_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <?php include 'includes/navbar.php'; ?>

    <section class="mmb">
        <div class="container" id="container">
            <div class="form-container sign-in-container">
                <br><br><br>
                <h1 style="text-align: center;">Admin Sign In</h1>
                <form action="admin_login_validation.php" method="POST" class="f1">

                    <input type="email" name="email" placeholder="Enter Email" required>
                    <input type="password" name="password" placeholder="Enter Password" required>
                    <br>
                    <div class="nxt">
                        <button>Sign In</button>
                    </div>
                    <br>
                    <a style="text-decoration: none; color:blue;font-weight:600;" href="sigin_signup.php">Sign In as User</a>
                </form>
            </div>
        </div>

    </section>

    <div style="margin-top: 20px; font-family: 'Montserrat', sans-serif;font-size: 14px; color: black; display: flex; justify-content: center;">
        <footer class="foot">
            <p><span>©</span> Copyright PQI 2021. All rights reserved.</p>
        </footer>
    </div>


</body>

</html>