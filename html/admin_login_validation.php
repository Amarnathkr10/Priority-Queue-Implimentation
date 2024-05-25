<?php
session_start();
include "includes/connection.php";
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * from admin where email='$email'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1){
    $user = mysqli_fetch_array($result);
    if($user['password']==$password){
        $_SESSION['id']=$user['id'];
        $_SESSION['name']=$user['name'];
        $_SESSION['user_type']=$user['user_type'];
        header("location:index.php"); 
    } else {
        header('location:admin_signin.php');
    }
}else {
    header('location:admin_signin.php');
}   

// password_verify($password, $user['password'])
?>