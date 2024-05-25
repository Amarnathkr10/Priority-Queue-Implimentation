<?php
require 'includes/connection.php'; 
/*
//create database 
$sql = "CREATE DATABASE pqi_db";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
//table creation
$abc="CREATE TABLE MyUser (id INT(10)  UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL UNIQUE,
    password VARCHAR(200),
    created_time timestamp DEFAULT CURRENT_TIMESTAMP,
    updated_time timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

if ($conn->query($abc) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
*/

//insert data in MyUser table

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirm_pass=$_POST['confirm_pass'];
$hash_password=password_hash($password,PASSWORD_DEFAULT);

if($password==$confirm_pass)
{
    $ins="INSERT INTO MyUser (name,email,password) VALUES('$name','$email','$hash_password')";
    $result= mysqli_query($conn,$ins);
    if($result)
    {  
        header('location:sigin_signup.php?status=ok');
    }
    else
    {  
        header('location:sigin_signup.php?statusfailed');
    }
}
else
{   $insert=false;
    header('location:sigin_signup.php?status=failed');
}

?>
?>