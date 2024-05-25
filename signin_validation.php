<?php
session_start();
require 'includes/connection.php'; 

//insert data in MyUser table

$email=$_POST['email'];
$password=$_POST['password'];

$sel= "SELECT * from MyUser where email='$email'";
$result= mysqli_query($conn,$sel);

if(mysqli_num_rows($result)==1)
{
    $user=mysqli_fetch_array($result);
    if(password_verify($password,$user['password']))
    {
        $_SESSION['name']=$user['name'];
        $_SESSION['id']=$user['id'];
        $_SESSION['user_type']=$user['user_type'];
        header('location:index.php');
    }
    else
    {
        header('location:sigin_signup.php');
    }
}
else
    {
        header('location:sigin_signup.php');
    }
?>